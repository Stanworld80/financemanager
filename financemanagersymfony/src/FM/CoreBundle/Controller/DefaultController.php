<?php

namespace FM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FMCoreBundle:Default:index.html.twig');
    }
}
