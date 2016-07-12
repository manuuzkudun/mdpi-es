<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDPI\AppBundle\Entity\JournalRepository;

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
    	$journals = array(
    		array(
    			'journal_url' => "http://www.mdpi.com/journal/actuators",
    			'logoFilenameWithHash' => "http://img.mdpi.org/img/journals/actuators-logo.png",
    			'nameSystem' => "actuators",
    			'nameShort' => "actuators",
    			'nameFull' => "Actuators",
    			'issnElectronic' => "2076-0825",
    			'establishedYear' => "2012",
    			'currentIssue' => 1,
			 ),
		);
		
		#$journals = JournalRepository::getAllPublicJournals();
		
		return $this->render('MDPIEsBundle:About:journals.html.twig', array(
            'journals' => $journals
        ));
    }
	
}
