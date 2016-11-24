<?php
namespace AppBundle\Page;

class Page
{
    protected $nextPage;
    protected $form;
    protected $view;
    
    protected function getNextPage()
    {
        return $this->nextPage;
    }
    
    protected function getForm()
    {
        return $this->form;
    }
    
    protected function getView()
    {
        return $this->view;
    }
    
    protected function setNextPage($nextPage)
    {
        $this->nextPage = $nextPage;
    }
}
