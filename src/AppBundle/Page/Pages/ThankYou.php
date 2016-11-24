<?php
namespace AppBundle\Page\Pages;

use AppBundle\Page\Page;

class ThankYou extends Page
{
    public function __construct()
    {
        $this->form = 'thankYouForm';
        $this->view = 'thankYouView';
    }
}
