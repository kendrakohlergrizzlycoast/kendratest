<?php
namespace AppBundle\Page;

use AppBundle\Page\Page;
use AppBundle\Page\Pages\Landing;
use AppBundle\Page\Pages\Lead;
use AppBundle\Page\Pages\Sale;
use AppBundle\Page\Pages\Upsell;
use AppBundle\Page\Pages\ThankYou;

class PageFlow
{
    private $pages = [];
    private $currentPage;
    
    const LANDING = 1;
    const LEAD = 2;
    const SALE = 3;
    const UPSELL = 4;
    const THANK_YOU = 5;
    
    const CP_PAGE_FLOW = [  1 => ['lead','sale', 'upsell', 'ty'],
                            2 => ['landing','lead','sale', 'ty']];

    public function __construct($cp)
    {   
        $cp ?: 1;
        $this->pages = $this->createPages(self::CP_PAGE_FLOW[$cp]);
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
            if(!$page === end($pageFlow))
            {
                $pageObject = $this->getPageObject($page);
                $page->setNextPage($pageObject);
            }
            $nextPage = $page;
        }
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
}
