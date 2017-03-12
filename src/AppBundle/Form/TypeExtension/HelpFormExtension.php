<?php

namespace AppBundle\Form\TypeExtension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class HelpFormExtension extends AbstractTypeExtension{
  
  public function getExtendedType() {
    return FormType::class;
  }
  
  public function buildView(FormView $view, FormInterface $form, array $options){
    $view->vars['help'] = 'TURTLES';
  }
}