<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MDPI\MDPIEsBundle\Entity\JobSpain;
use Symfony\Component\HttpFoundation\Response;


class JobsPageController extends Controller
{
	
    public function jobsAction()
    {
        return $this->render('MDPIEsBundle:Jobs:jobs.html.twig');
    }
	
	public function jobShowAction($id)
	{
		$repository = $this->getDoctrine()->getRepository('MDPIEsBundle:JobSpain');
		$job = $repository->findOneById($id);		
		
		return $this->render('MDPIEsBundle:Jobs:jobShow.html.twig',array(
		'job' => $job,
		));
	}
	
	 public function jobListAction()
    {
    	$repository = $this->getDoctrine()->getRepository('MDPIEsBundle:JobSpain');
    	$jobs = $repository->findAll();
		
        return $this->render('MDPIEsBundle:Jobs:_jobList.html.twig', array(
			'jobs' => $jobs
		));
    }
	
	public function jobListHomepageAction()
    {
    	$repository = $this->getDoctrine()->getRepository('MDPIEsBundle:JobSpain');
    	$jobs = $repository->findAll();
		
        return $this->render('MDPIEsBundle:Jobs:_jobListHomepage.html.twig', array(
			'jobs' => $jobs
		));
    }
	

	public function jobCreateAction()
	{
		
		$em = $this->getDoctrine()->getManager();
		
		$job = new JobSpain();
		$job->setTitle('');
		$job->setLocation('Barcelona');
		$job->setDate(new \DateTime('19-08-2016'));
		$job->setContent('');
		$em->persist($job);
		$em->flush();
		
		return new Response('Saved new job with id '.$job->getId());
		
	}
	
	
}
