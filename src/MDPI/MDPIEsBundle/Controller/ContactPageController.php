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



<div class="row">
	<div class="col-sm-4">
	<div>
		<img class="img-responsive center-block" src="/images/isabel-martinez.jpg" alt="Isabel Martinez" width="200">
	</div>
		
		<div style="text-align: center;">
			<p>Isabel Martínez</p>
			<p>Directora de la oficina de Barcelona</p>
			<a href="mailto:someone@example.com" target="_top">Contacto</a>
		</div>
	</div>
	<div class="col-sm-8">
		<p>Isabel Martínez trabaja para MDPI desde enero de 2016 dirigiendo la Oficina editorial de Barcelona. Es licenciada en Socilogía 
		por la Universidad de Alicante y tiene un Máster en Publishing con matrícula de honor por la Universidad Brookes de Oxford. Antes 
		de formar parte de MDPI trabajó con un conjunto de revistas sobre salud y ciencias sociales en John Wiley & Sons en Oxford.</p>
	<div>
</div>
