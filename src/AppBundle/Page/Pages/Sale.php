<?php
namespace AppBundle\Page\Pages;

use AppBundle\Page\Page;

class Sale extends Page
{
    public function __construct()
    {
        $this->form = 'saleForm';
        $this->view = 'saleView';
    }
}
