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
    
    const CP_PAGE_FLOW = [  1 => ['lead','sale', 'upsell', 'ty'],
                            2 => ['landing','lead','sale', 'ty']];

    public function __construct($cp)
    {   
        $cp ?: 1;
        $this->currentPage = $this->createPages(self::CP_PAGE_FLOW[$cp]);
        
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }
    
    public function nextPage()
    {
       $this->currentPage = $this->currentPage->getNextPage(); 
    }
    
    //TODO don't add upsell page if it doesn't meet upsell requirements
    private function createPages($pageFlow)
    {
        $nextPage = null;
        $pageObject = null;
        foreach(array_reverse($pageFlow) as $page)
        {
            if($page !== end($pageFlow))
            {
                $pageObject = $this->getPageObject($page);
                $pageObject->setNextPage($nextPage);
            }
            $nextPage = $pageObject;
        }
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
