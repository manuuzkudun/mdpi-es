<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDPI\AppBundle\Entity\AnnouncementRepository;


class AnnouncementsController extends Controller
{
	
	public function announcementsListAction()
	{
		
		$announcements = AnnouncementRepository::getHomepageAnnouncements($limit = 6);
		
		return $this->render('MDPIEsBundle:Announcements:_announcements.html.twig',array(
			'announcements' => $announcements
		));
	}
}
