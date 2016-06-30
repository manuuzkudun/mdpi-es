<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutPageController extends Controller
{
    public function historyAction()
    {
        return $this->render('MDPIEsBundle:About:history.html.twig');
    }
	
	public function profileAction()
    {
        return $this->render('MDPIEsBundle:About:profile.html.twig');
    }	
	
	public function presidentAction()
    {
        return $this->render('MDPIEsBundle:About:president.html.twig');
    }
	
	public function teamAction()
    {
        return $this->render('MDPIEsBundle:About:team.html.twig');
    }
	
	public function journalsAction()
    {
        return $this->render('MDPIEsBundle:About:journals.html.twig');
    }
	
}
