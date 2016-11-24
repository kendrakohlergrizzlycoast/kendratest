<?php
namespace AppBundle\Page\Pages;

use AppBundle\Page\Page;

class Lead extends Page
{
    public function __construct()
    {
        $this->form = 'leadForm';
        $this->view = 'leadView';
    }
}
