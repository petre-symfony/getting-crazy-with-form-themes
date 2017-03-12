<?php

namespace AppBundle\Form\TypeExtension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class HelpFormExtension extends AbstractTypeExtension{
  
  public function getExtendedType() {
    return FormType::class;
  }
}