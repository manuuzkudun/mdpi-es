<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDPI\AppBundle\Entity\JournalRepository;

class HomePageController extends Controller
{
    public function indexAction()
    {
    	
		$journalNames = array('energies','entropy','forests','ijerph','ijms','marinedrugs',
		'materials','molecules','nutrients','polymers','remotesensing','sensors','toxins','viruses',
		'water','symmetry','sustainability','micromachines','atmosphere','applsci','catalysts','genes',
		'metals','minerals','nanomaterials');
		$journals = JournalRepository::getByNameSystems($journalNames);
		#$journals = array_slice($journals, 50, 10);
		
        return $this->render('MDPIEsBundle:Home:index.html.twig',array(
			
		'journals' => $journals,
		));
    }
}
