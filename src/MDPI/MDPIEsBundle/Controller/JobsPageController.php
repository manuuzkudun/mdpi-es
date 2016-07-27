<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobsPageController extends Controller
{
	private $jobList = array(
						'assistant-editor-maths' => array(
							'slug' => 'assistant-editor-maths',
							'title' => 'Assistant Editor Educated in Maths (Full-Time)', 
							'summary' => array(
											'You would start out as an Editorial Trainee working in close collaboration with our Managing 
										Editors learning how to process papers properly from submission to publication. Once you have 
										successfully completed your traineeship you will be appointed as an Assistant Editor position',
										'You should share our passion for spreading the newly acquired knowledge of today’s scientific 
										community and feel motivated to contribute to open access publishing. We look forward to welcoming 
										energetic new members to our Barcelona office.',
										'Dependent on your scientific background you will be assigned to an according field. We are mostly 
										looking for young Editors educated in MATHEMATICS.'
										),
							'responsibilities' => array(
													'Execute editorial work for journals in your domain of expertise, including 
												organizing the review process for manuscripts, overseeing editorial decisions 
												and handling the communication between the parties involved in the publication process.'
												),
							'profile' => array(
											'basic' => array(
														'Master degree, RECENTLY GRADUATED.',
														'Advanced knowledge of MS office applications (Word, Excel, PowerPoint).',
														'Strong English skills in written and spoken language.',
														'Ability to multi-task, attention to detail.',
														'Experience with scholarly publishing beneficial.',
														'Spanish residence permit.'
													),
											'additional' => array(
														)
											),
							'application' => array(
										'text' => 'Please send your application letter and CV by E-Mail to,',
										'email' => 'martinez@mdpi.com'
										),
		
					),
					
					
					'assistant-editor-chemistry' => array(
							'slug' => 'assistant-editor-chemistry',
							'title' => 'Assistant Editor Educated in Chemistry (Full-Time)', 
							'summary' => array(
											'You would start out as an Editorial Trainee working in close collaboration with our Managing 
										Editors learning how to process papers properly from submission to publication. Once you have 
										successfully completed your traineeship you will be appointed as an Assistant Editor position',
										'You should share our passion for spreading the newly acquired knowledge of today’s scientific 
										community and feel motivated to contribute to open access publishing. We look forward to welcoming 
										energetic new members to our Barcelona office.',
										'Dependent on your scientific background you will be assigned to an according field. We are mostly 
										looking for young Editors educated in CHEMISTRY'
										),
							'responsibilities' => array(
													'Execute editorial work for journals in your domain of expertise, including 
												organizing the review process for manuscripts, overseeing editorial decisions 
												and handling the communication between the parties involved in the publication process.'
												),
							'profile' => array(
											'basic' => array(
														'Master degree, RECENTLY GRADUATED.',
														'Advanced knowledge of MS office applications (Word, Excel, PowerPoint).',
														'Strong English skills in written and spoken language.',
														'Ability to multi-task, attention to detail.',
														'Experience with scholarly publishing beneficial.',
														'Spanish residence permit.'
													),
											'additional' => array(
														)
											),
							'application' => array(
										'text' => 'Please send your application letter and CV by E-Mail to,',
										'email' => 'martinez@mdpi.com'
										),
		
					),
					'assistant-editor-ecology' => array(
							'slug' => 'assistant-editor-ecology',
							'title' => 'Assistant Editor Educated in Ecology (Full-Time)', 
							'summary' => array(
											'You would start out as an Editorial Trainee working in close collaboration with our Managing 
										Editors learning how to process papers properly from submission to publication. Once you have 
										successfully completed your traineeship you will be appointed as an Assistant Editor position',
										'You should share our passion for spreading the newly acquired knowledge of today’s scientific 
										community and feel motivated to contribute to open access publishing. We look forward to welcoming 
										energetic new members to our Barcelona office.',
										'Dependent on your scientific background you will be assigned to an according field. We are mostly 
										looking for young Editors educated in ECOLOGY.'
										),
							'responsibilities' => array(
													'Execute editorial work for journals in your domain of expertise, including 
												organizing the review process for manuscripts, overseeing editorial decisions 
												and handling the communication between the parties involved in the publication process.'
												),
							'profile' => array(
											'basic' => array(
														'Master degree, RECENTLY GRADUATED.',
														'Advanced knowledge of MS office applications (Word, Excel, PowerPoint).',
														'Strong English skills in written and spoken language.',
														'Ability to multi-task, attention to detail.',
														'Experience with scholarly publishing beneficial.',
														'Spanish residence permit.'
													),
											'additional' => array(
														)
											),
							'application' => array(
										'text' => 'Please send your application letter and CV by E-Mail to,',
										'email' => 'martinez@mdpi.com'
										),
		
					),
					'assistant-editor-physics' => array(
							'slug' => 'assistant-editor-physics',
							'title' => 'Assistant Editor Educated in Physics (Full-Time)', 
							'summary' => array(
											'You would start out as an Editorial Trainee working in close collaboration with our Managing 
										Editors learning how to process papers properly from submission to publication. Once you have 
										successfully completed your traineeship you will be appointed as an Assistant Editor position',
										'You should share our passion for spreading the newly acquired knowledge of today’s scientific 
										community and feel motivated to contribute to open access publishing. We look forward to welcoming 
										energetic new members to our Barcelona office.',
										'Dependent on your scientific background you will be assigned to an according field. We are mostly 
										looking for young Editors educated in PHYSICS.'
										),
							'responsibilities' => array(
													'Execute editorial work for journals in your domain of expertise, including 
												organizing the review process for manuscripts, overseeing editorial decisions 
												and handling the communication between the parties involved in the publication process.'
												),
							'profile' => array(
											'basic' => array(
														'Master degree, RECENTLY GRADUATED.',
														'Advanced knowledge of MS office applications (Word, Excel, PowerPoint).',
														'Strong English skills in written and spoken language.',
														'Ability to multi-task, attention to detail.',
														'Experience with scholarly publishing beneficial.',
														'Spanish residence permit.'
													),
											'additional' => array(
														)
											),
							'application' => array(
										'text' => 'Please send your application letter and CV by E-Mail to,',
										'email' => 'martinez@mdpi.com'
										),
		
					),
					
					'assistant-editor-engineering' => array(
							'slug' => 'assistant-editor-engineering',
							'title' => 'Assistant Editor Educated in Engineering (Full-Time)', 
							'summary' => array(
											'You would start out as an Editorial Trainee working in close collaboration with our Managing 
										Editors learning how to process papers properly from submission to publication. Once you have 
										successfully completed your traineeship you will be appointed as an Assistant Editor position',
										'You should share our passion for spreading the newly acquired knowledge of today’s scientific 
										community and feel motivated to contribute to open access publishing. We look forward to welcoming 
										energetic new members to our Barcelona office.',
										'Dependent on your scientific background you will be assigned to an according field. We are mostly 
										looking for young Editors educated in ENGINEERING.'
										),
							'responsibilities' => array(
													'Execute editorial work for journals in your domain of expertise, including 
												organizing the review process for manuscripts, overseeing editorial decisions 
												and handling the communication between the parties involved in the publication process.'
												),
							'profile' => array(
											'basic' => array(
														'Master degree, RECENTLY GRADUATED.',
														'Advanced knowledge of MS office applications (Word, Excel, PowerPoint).',
														'Strong English skills in written and spoken language.',
														'Ability to multi-task, attention to detail.',
														'Experience with scholarly publishing beneficial.',
														'Spanish residence permit.'
													),
											'additional' => array(
														)
											),
							'application' => array(
										'text' => 'Please send your application letter and CV by E-Mail to,',
										'email' => 'martinez@mdpi.com'
										),
		
					),
					
					'english-editor' => array(
							'slug' => 'english-editor',
							'title' => 'English Editor (Full-Time)', 
							'summary' => array(
											'We are looking for English editors to edit accepted manuscripts before publication 
											and perform other English editing tasks.'
										),
							'responsibilities' => array(
													'Execute editorial work for journals in your domain of expertise, including 
												organizing the review process for manuscripts, overseeing editorial decisions 
												and handling the communication between the parties involved in the publication process.'
												),
							'profile' => array(
											'basic' => array(
														'Experience editing and/or writing academic content.',
														'Able to work to tight deadlines.',
														'Attention to detail.',
														'A native English speaker with an excellent command of spelling and grammar.',
														'Familiarity with Microsoft Word.',
													),
											'additional' => array(
														'Research experience.',
														'Knowledge of LaTeX.'
														)
											),
							'application' => array(
										'text' => 'Applicants should send a CV and coverletter to Martyn Rittman at',
										'email' => 'rittman@mdpi.com'
										),
		
					),
					
					
	);


    public function jobsAction()
    {
        return $this->render('MDPIEsBundle:Jobs:jobs.html.twig');
    }
	
	public function jobAdAction($slug)
	{
		
		$job = $this->jobList[$slug];
		
		return $this->render('MDPIEsBundle:Jobs:jobAd.html.twig',array(
		'job' => $job,
		));
	}
	
	    public function jobListAction()
    {
        return $this->render('MDPIEsBundle:Jobs:_jobList.html.twig', array(
			'jobs' => $this->jobList
		));
    }
	
	
	
}
