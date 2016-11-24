<?php
namespace AppBundle\Page;

use AppBundle\Page\Page;

class PageFlow
{
    private $pages = [];
    private $currentPage;

    public function __construct()
    {
        
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }
    
    public function nextPage()
    {
        
    }
}
