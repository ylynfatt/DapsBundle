<?php

namespace Daps\LdapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DapsLdapBundle:Default:index.html.twig', array('name' => $name));
    }
}
