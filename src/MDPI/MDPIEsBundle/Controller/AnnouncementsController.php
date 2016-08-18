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
	
	
	
	public function announcementsListAllAction()
	{
		
		$announcements = AnnouncementRepository::getHomepageAnnouncements($limit = NULL);
		
		return $this->render('MDPIEsBundle:Announcements:announcementsAll.html.twig',array(
			'announcements' => $announcements
		));
	}
	
	
	public function announcementShowAction($id)
	{
		
		$announcement = AnnouncementRepository::getOneById($id);
		
		return $this->render('MDPIEsBundle:Announcements:announcementShow.html.twig',array(
			'announcement' => $announcement
		));
	}
	
}
