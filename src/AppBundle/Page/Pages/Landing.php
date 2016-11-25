<?php
namespace AppBundle\Page\Pages;

use AppBundle\Page\Page;
use AppBundle\Entity\LandingEntity;
use AppBundle\Form\LandingForm;

class Landing extends Page
{
    public function __construct()
    {
        $landing = new LandingEntity();
        $this->form = $this->createForm(LandingType::class, $landing);
        $this->view = 'landing';
    }
}
