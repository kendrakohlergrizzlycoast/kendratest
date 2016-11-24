<?php
namespace AppBundle\Page;

class Page
{
    protected $nextPage;
    protected $form;
    
    protected function next()
    {
        return $this->nextPage;
    }
    
    protected function getForm()
    {
        return $this->form;
    }
}
