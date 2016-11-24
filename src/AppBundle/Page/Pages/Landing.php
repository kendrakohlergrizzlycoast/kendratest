<?php
namespace AppBundle\Page\Pages;

use AppBundle\Page\Page;

class Landing extends Page
{
    public function __construct()
    {
        $this->form = 'landingForm';
        $this->view = 'landingView';
    }
}
