<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactPageController extends Controller
{
    public function contactAction()
    {
        return $this->render('MDPIEsBundle:Contact:contact.html.twig');
    }
}
