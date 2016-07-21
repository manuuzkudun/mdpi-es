<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDPI\AppBundle\Entity\JournalRepository;

class HomePageController extends Controller
{
    public function indexAction()
    {
    	
		$journals = JournalRepository::getAllPublicJournals();
		$journals = array_slice($journals, 0, 12);
		
        return $this->render('MDPIEsBundle:Home:index.html.twig',array(
			
		'journals' => $journals,
		));
    }
}
