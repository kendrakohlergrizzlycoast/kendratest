<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Landing
{
    /**
     * @Assert\NotBlank()
     */
    public $firstName;

    /**
     * @Assert\NotBlank()
     */
    public $lastName;
}