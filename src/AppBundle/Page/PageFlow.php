<?php
namespace AppBundle\Page;

class PageFlow
{
    private $orderedPages;
    private $currentPage;

    public function __construct(Mailer $mailer)
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
