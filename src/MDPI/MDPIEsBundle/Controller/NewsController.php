<?php

namespace MDPI\MDPIEsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class NewsController extends Controller
{
	
	private $newsList = array(
		'9-revistas-esci' => array(
			'slug' => '9-revistas-esci',
			'date' => '21-06-2016',
			'title' => '9 revistas de MDPI han sido incluídas en el registro Emerging Sources Citation Index (ESCI)',
			'content' => '<p>Las revistas de MDPI <a href="#">Actuators</a>, <a href="#">Aerospace</a>, <a href="#">Bioengineering</a>, <a href="#">Biomedicines</a>,
				 	<a href="#">Buildings</a>, <a href="#">Children</a>, <a href="#">Magnetochemistry</a>, <a href="#">Resources</a> y <a href="#">Robotics</a> han sido indexadas 
				 	en el <a href="#">Emerging Sources Citation Index (ESCI)</a> de Thomoson Reuters. El número total de revistas indexadas por ESCI asciende 
				 	ahora a 55. La lista completa de las revistas de MDPI indexadas en ESCI está disponible <a href="#">aquí</a>.</p>'
		),
		'impact-factor-2015' => array(
			'slug' => 'impact-factor-2015',
			'date' => '15-06-2016',
			'title' => 'Impact Factor de 2015 para las revistas de MDPI',
			'content' => '<p>Las revistas de MDPI reciben nuevos <em>Impact Factors</em>. Según el Journal Citation Reports Science Edition de 
			Thomson Reuters, 20 de las 25 revistas indexadas publicadas por MDPI han recibido un <em>Impact Factor</em> más alto en las 
			últimas evaluaciones, y dos revistas (<a href="#">Crystals</a> y <a href="#">IJGI</a>) han recibido el primer <em>Impact Factor</em>. 
			Coatings ha sido incluida en el Science Citation Index Expanded (SCIE) de Thomson Reuters y recibirá su primer Impact Factor cuando se publique 
			el nuevo Journal Citation Reports en 2017.</p>.
			<p><em>Impact Factors</em> de las revistas actualizados según el Science Citation Index Expanded (SCIE):(Tabla: Revista; 
			Impact Factor de 2015; Detalles; Cuartil)</p>'
		),
		'colaborar-peer-review' => array(
			'slug' => 'colaborar-peer-review',
			'date' => '09-06-2016',
			'title' => 'Colaborar como peer-reviewer',
			'content' => 'content2'
		),
		'colaboraciones-universidades' => array(
			'slug' => 'colaboraciones-universidades',
			'date' => 'date2',
			'title' => 'MDPI anuncia nuevas colaboraciones con universidades americanas, asiáticas y europeas',
			'content' => 'content2'
		),
		'mdpi-ebooks' => array(
			'slug' => 'mdpi-ebooks',
			'date' => '30-05-2016',
			'title' => 'La nueva plataforma de MDPI para E-books',
			'content' => '<p>El año 2016 marca un hito en la historia de MDPI: nuestra empresa acaba de cumplir sus primeros <a href="#">20 años</a>. 
			Cuanto más el mundo de las publicaciones Open Access va expandiéndose, tanto más MDPI quiere comprometerse para difundir conocimientos 
			científicos en todas las formas posibles, para garantizar el libre acceso al material académico en cualquier momento, desde cualquier 
			lugar y por parte de todos. Por este motivo, MDPI lanza en 2016 una plataforma para publicar y descargar de forma gratuita nuestros 
			<a href="#">primeros E-books.</a></p>
			<p>Actualmente se han publicado 107 E-books en diferentes disciplinas, como ciencias de la vida, biomedicina, ciencias ambientales 
			y de la tierra, física, matemáticas, ingeniería, ciencias sociales, economía. Para garantizar la calidad científica de los trabajos 
			publicados, todos los libros electrónicos están sometidos a una rigurosa revisión por pares (peer-review) y los editores externos 
			tienen fama internacional.</p>
			<p>Todos los contenidos de los E-books están disponibles en formato Open Access y gracias a nuestras colaboraciones con Amazon 
			y <a href="#">DOAB (Directory of Open Access Books)</a>, MDPI garantiza la máxima visibilidad y una distribución capilar. MDPI, además, ofrece 
			la posibilidad de imprimir los E-books y de recibirlos por correo: nuestro servicio de print-on-demand cumple con altos niveles 
			de calidad al mejor precio: puede encontrar más información <a href="#">aquí</a>.</p>
			<p>Aquí encontrarán todos los títulos de <a href="#">nuestra biblioteca</a>.</p>'
		),
	);	
	
	
    public function newsItemAction($slug)
    {
    	$newsItem = $this->newsList[$slug];
	
		
        return $this->render('MDPIEsBundle:News:newsItem.html.twig',array(
			'news' => $newsItem,
		));
    }

	public function newsListAction()
	{
		
		return $this->render('MDPIEsBundle:News:_newsList.html.twig',array(
			'newsList' => $this->newsList
		));
	}




}
