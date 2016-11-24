<?php
namespace AppBundle\Page;

use AppBundle\Page\Pages\Landing;
use AppBundle\Page\Pages\Lead;
use AppBundle\Page\Pages\Sale;
use AppBundle\Page\Pages\Upsell;
use AppBundle\Page\Pages\ThankYou;

class PageFlow
{
    private $currentPage;
    private $logger;
    
    const CP_PAGE_FLOW = [  1 => ['lead','sale', 'upsell', 'ty'],
                            2 => ['landing','lead','sale', 'ty']];

    public function __construct($cp, $logger)
    {   
        $cp ?: 1;
        $this->currentPage = $this->createPages(self::CP_PAGE_FLOW[$cp]);
        $this->logger = $logger;
        
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }
    
    public function nextPage()
    {
       $this->currentPage = $this->currentPage->getNextPage(); 
    }
    
    //TODO remove upsell page if it doesn't meet upsell requirements
    private function createPages($pageFlow)
    {
        $nextPage = null;
        foreach(array_reverse($pageFlow) as $page)
        {
            $this->logger->error('??!?!?!?!?!?!CURRENT PAGE ISS: '.$page);
            if(!$page === end($pageFlow))
            {
                $pageObject = $this->getPageObject($page);
                $page->setNextPage($pageObject);
            }
            $nextPage = $page;
        }
        $this->logger->error('??!?!?!?!?!?!PAGE OBJECT ISS: '.print_r($pageObject,1));
        return $pageObject;
    }
    
    private function getPageObject($page)
    {
        $pageObject = null;
        
        switch($page)
        {
            case 'landing':
                $pageObject = new Landing();
                break;
            case 'lead':
                $pageObject = new Lead();
                break;
            case 'sale':
                $pageObject = new Sale();
                break;
            case 'upsell':
                $pageObject = new Upsell();
                break;
            case 'ty':
                $pageObject = new ThankYou();
                break;
        }
        
        return $pageObject;
    }
    
    function __toString()
    {
        return print_r($this->currentPage,1);
    }
}
