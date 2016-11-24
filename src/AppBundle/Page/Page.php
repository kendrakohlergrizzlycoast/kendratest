<?php
namespace AppBundle\Page;

class Page
{
    protected $nextPage;
    protected $form;
    protected $view;
    
    public function getNextPage()
    {
        return $this->nextPage;
    }
    
    public function getForm()
    {
        return $this->form;
    }
    
    public function getView()
    {
        return $this->view;
    }
    
    public function setNextPage($nextPage)
    {
        $this->nextPage = $nextPage;
    }
}
