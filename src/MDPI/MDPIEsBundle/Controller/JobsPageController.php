<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobsPageController extends Controller
{
    public function jobsAction()
    {
        return $this->render('MDPIEsBundle:Jobs:jobs.html.twig');
    }
}
