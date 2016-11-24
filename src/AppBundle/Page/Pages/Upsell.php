<?php
namespace AppBundle\Page\Pages;

use AppBundle\Page\Page;

class Upsell extends Page
{
    public function __construct()
    {
        $this->form = 'upsellForm';
        $this->view = 'upsellView';
    }
}
