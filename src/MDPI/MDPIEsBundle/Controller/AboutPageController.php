<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutPageController extends Controller
{
    public function indexAction()
    {
        return $this->render('MDPIEsBundle:AboutPage:index.html.twig');
    }
}
