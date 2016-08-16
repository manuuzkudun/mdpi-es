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
			'content' => '<p>Las revistas de MDPI <a href="http://www.mdpi.com/journal/actuators">Actuators</a>, <a href="http://www.mdpi.com/journal/aerospace">Aerospace</a>, 
			<a href="http://www.mdpi.com/journal/bioengineering">Bioengineering</a>, <a href="http://www.mdpi.com/journal/biomedicines">Biomedicines</a>,<a href="http://www.mdpi.com/journal/buildings">Buildings</a>, 
			<a href="http://www.mdpi.com/journal/children">Children</a>, <a href="http://www.mdpi.com/journal/magnetochemistry">Magnetochemistry</a>, <a href="http://www.mdpi.com/journal/resources">Resources</a> y 
			<a href="http://www.mdpi.com/journal/robotics">Robotics</a> han sido indexadas en el <a href="http://wokinfo.com/products_tools/multidisciplinary/esci/">Emerging Sources Citation Index (ESCI)</a> de Thomoson Reuters. El número total de revistas indexadas por ESCI asciende ahora a 55. La lista 
			completa de las revistas de MDPI indexadas en ESCI está disponible <a href="http://www.mdpi.com/about/journals/esci">aquí</a>.</p>'
		),
		// 'impact-factor-2015' => array(
			// 'slug' => 'impact-factor-2015',
			// 'date' => '15-06-2016',
			// 'title' => 'Impact Factor de 2015 para las revistas de MDPI',
			// 'content' => '<p>Las revistas de MDPI reciben nuevos <em>Impact Factors</em>. Según el Journal Citation Reports Science Edition de 
			// Thomson Reuters, 20 de las 25 revistas indexadas publicadas por MDPI han recibido un <em>Impact Factor</em> más alto en las 
			// últimas evaluaciones, y dos revistas (<a href="http://www.mdpi.com/journal/crystals">Crystals</a> y <a href="http://www.mdpi.com/journal/ijgi">IJGI</a>) han recibido el primer <em>Impact Factor</em>. 
			// Coatings ha sido incluida en el Science Citation Index Expanded (SCIE) de Thomson Reuters y recibirá su primer Impact Factor cuando se publique 
			// el nuevo Journal Citation Reports en 2017.</p>.
			// <p><em>Impact Factors</em> de las revistas actualizados según el Science Citation Index Expanded (SCIE):(Tabla: Revista; 
			// Impact Factor de 2015; Detalles; Cuartil)</p>'
		// ),
		'colaborar-peer-review' => array(
			'slug' => 'colaborar-peer-review',
			'date' => '09-06-2016',
			'title' => 'Colaborar como peer-reviewer',
			'content' => '<p>Los investigadores consideran la revisión como un momento esencial de su trabajo y saben perfectamente que, cuando presenten sus artículos a las revistas científicas, 
			otros investigadores tendrán que hacer el mismo esfuerzo. La mayoría de ellos están interesados en tener acceso a los trabajos más recientes publicados en sus ámbitos, o consideran la 
			revisión como una actividad que puede mejorar sus curriculum. Los revisores que colaboran con MDPI están movidos por una gran variedad de motivaciones y en muchos casos tienen expectativas 
			muy altas. En este artículo intentaremos ofrecer algunos consejos sobre cómo convertirse en buen revisor y qué beneficios implica.</p>
			<h4>¿Puedo registrarme como revisor?</h4>
			<p>Si estás interesado en revisar artículos para una revista de MDPI, puedes crear una cuenta en nuestro submission system (SuSy) introduciendo tu cualificación, tu afiliación, tus publicaciones, 
			tu curriculum y una serie de palabras claves que corresponden a tu ámbito de investigación. Una vez registrado, podrás seleccionar las revistas que se alinean más con tu especialización. Nuestros 
			editores averiguarán tus datos y tomarán en consideración tu candidatura. Se pondrán en contacto contigo en el caso en que reciban un paper adecuado para tu perfil.</p>
			<p>
			En el caso de revistas de otras editoriales, si no se te ofrece un proceso de registración parecido, puedes ponerte directamente en contacto con la editorial. Asegúrate de enviar toda la información 
			necesaria para demostrar tus competencias en tu ámbito, como por ejemplo una página web personal, tu curriculum o una lista de publicaciones.</p>
			<p>Aunque no recibas una invitación, hay otras formas de practicar tus habilidades como revisor. Páginas web como <a href="https://publons.com/">Publons</a> y <a href="https://pubpeer.com/">Pubpeer</a>, 
			con las que MDPI colabora, permiten publicar revisiones libremente consultables para cualquier paper. Puedes encontrar más informaciones <a href="http://blog.mdpi.com/2016/06/20/get-credit-for-your-historical-reviews-with-publons/">aquí</a>.</p>
			<h4>¿Cómo revisar un paper?</h4>
			<p>MDPI ha dedicado <a href="http://www.mdpi.com/reviewers">una sección de su página web</a> para ofrecer algunos consejos para revisores, que también incluye algunos enlaces que remiten a otros sitios específicos. El formato, los requerimientos y el tiempo necesarios para 
			escribir una revisión pueden depender del ámbito de la investigación: la asistencia de un experto puede resultar muy útil si tienes más dudas.</p>
			<h4>¿Hay algún beneficio por servir de revisor?</h4>
			<p>En MDPI queremos reconocer y premiar el trabajo de los revisores al máximo de nuestras posibilidades, aunque se trate, en muchos casos, de un proceso confidencial. Nuestras revistas ofrecen distintas formas de agradecer los esfuerzos de nuestros colaboradores:</p>
			<ul>
			<li>50 de nuestras revistas están inscritas a <a href="https://publons.com/">Publons</a>, que ofrece créditos a los revisores. Puedes incluso publicar revisiones de artículos publicados en revistas que no colaboran 
			directamente con <a href="https://publons.com/">Publons</a> para recibir más créditos y ganar visibilidad.</li>
			<li>Si tienes una cuenta en nuestro <a href="https://susy.mdpi.com/user/login">Submission System (SuSy)</a>, puedes descargar una confirmación de tu colaboración como revisor.</li>
			<li>Todos los revisores reciben un descuento sobre los gastos de publicación del artículo (Article Processing Charge, APC) para su próxima submission.</li>
			<li>Una vez al año, la revista publica la <a href="http://blog.mdpi.com/2016/02/23/saying-thank-you-to-our-reviewers-in-2015/">lista de todos los revisores.</a></li>
			</ul>
			<p>A todo esto, se suma tu contribución en mantener la calidad de los artículos publicados en tu ámbito y la posibilidad de tener acceso al trabajo de otros investigadores antes de su publicación.</p>
			<p>Si tienes otras preguntas acerca del proceso peer-review en una de <a href="/about/journals">nuestras revistas</a>, puedes ponerte en contacto con nosotros.</p>
			'
		),
		'colaboraciones-universidades' => array(
			'slug' => 'colaboraciones-universidades',
			'date' => 'date2',
			'title' => 'MDPI anuncia nuevas colaboraciones con universidades americanas, asiáticas y europeas',
			'content' => '<p>Después de haber concretado una <a href="http://www.mdpi.com/about/announcements/814">colaboración con la Max-Planck-Gesellschaft</a> en febrero de 2016, desde MDPI estamos encantados de anunciar que las siguientes universidades 
			y centros de investigación se han unido en mayo y junio de 2016 a nuestro programa de afiliación institucional:</p>
			<ul>
			<li><a href="http://www.uni-bremen.de/en.html">Unversität Bremen</a>, Alemania</li>
			<li><a href="https://www.ku.edu.tr/en">Koç University</a>, Turquía</li>
			<li><a href="http://www.iiasa.ac.at/">International Institute for Applied Systems Analysis (IIASA)</a>, Austria</li>
			<li><a href="http://www.jlu.edu.cn/">Jilin University</a>, China</li>
			<li><a href="http://english.kib.cas.cn/">Kunming Institute of Botany, Chinese Academy of Sciences</a>, China</li>
			<li><a href="http://library.epfl.ch/">École Polytechnique Fédérale de Lausanne (EPFL)</a>, Suiza</li>
			<li><a href="https://www.uibk.ac.at/ulb/">University of Innsbruck, Austria</li>
			<li><a href="https://www.uibk.ac.at/ulb/">Medical University of Innsbruck</a>, Austria</li>
			<li><a href="http://english.swjtu.edu.cn/public/default.aspx">Southwest Jiaotong University</a>, China</li>
			<li><a href="http://www.ait.asia/">Asian Institute of Technology</a>, Tailandia</li>
			</ul>
			<p>A partir del 1 de julio de 2016, otras tres universidades se afiliarán al programa:</p>
			<ul>
			<li><a href="http://www.lsu.edu/">Louisiana State University</a>, EE.UU.</li>
			<li><a href="http://www.seu.edu.cn/english/">Southeast University</a>, China</li>
			<li><a href="http://www.fsu.edu/">Florida State University</a>, EE.UU</li>
			</ul>
			<p>Más de cien universidades e institutos de investigación están colaborando en este momento con MDPI. Los autores afiliados a estos centros se beneficiarán de un descuento sobre los gastos de publicación del artículo 
			(Article Processing Charge, APC). La <a href="http://www.mdpi.com/about/memberships">página dedicada al programa de afiliación</a> incluye la lista completa de todas las entidades inscritas al programa y ulteriores detalles sobre los beneficios para los autores. </p>
			'
		),
		'mdpi-ebooks' => array(
			'slug' => 'mdpi-ebooks',
			'date' => '30-05-2016',
			'title' => 'La nueva plataforma de MDPI para E-books',
			'content' => '<p>El año 2016 marca un hito en la historia de MDPI: nuestra empresa acaba de cumplir sus primeros <a href="http://www.mdpi.com/about/anniversary20">20 años</a>. 
			Cuanto más el mundo de las publicaciones Open Access va expandiéndose, tanto más MDPI quiere comprometerse para difundir conocimientos 
			científicos en todas las formas posibles, para garantizar el libre acceso al material académico en cualquier momento, desde cualquier 
			lugar y por parte de todos. Por este motivo, MDPI lanza en 2016 una plataforma para publicar y descargar de forma gratuita nuestros 
			<a href="http://www.mdpi.com/books/library">primeros E-books.</a></p>
			<p>Actualmente se han publicado 107 E-books en diferentes disciplinas, como ciencias de la vida, biomedicina, ciencias ambientales 
			y de la tierra, física, matemáticas, ingeniería, ciencias sociales, economía. Para garantizar la calidad científica de los trabajos 
			publicados, todos los libros electrónicos están sometidos a una rigurosa revisión por pares (peer-review) y los editores externos 
			tienen fama internacional.</p>
			<p>Todos los contenidos de los E-books están disponibles en formato Open Access y gracias a nuestras colaboraciones con Amazon 
			y <a href="http://www.doabooks.org/">DOAB (Directory of Open Access Books)</a>, MDPI garantiza la máxima visibilidad y una distribución capilar. MDPI, además, ofrece 
			la posibilidad de imprimir los E-books y de recibirlos por correo: nuestro servicio de print-on-demand cumple con altos niveles 
			de calidad al mejor precio: puede encontrar más información <a href="http://www.mdpi.com/books/cost">aquí</a>.</p>
			<p>Aquí encontrarán todos los títulos de <a href="http://www.mdpi.com/books/library">nuestra biblioteca</a>.</p>'
		),
		
		'mdpi-journals-esci' => array(
			'slug' => 'mdpi-journals-esci',
			'date' => '20-05-2016',
			'title' => 'Las revistas de MDPI Proteomes y Journal of Risk and Financial Managament incluidas en el Emerging Sources Citation Index (ESCI)',
			'content' => '<p>Las revistas de MDPI <a href="http://www.mdpi.com/journal/proteomes">Proteomes</a> y <a href="http://www.mdpi.com/journal/jrfm">Journal of Risk and Financial Managament</a> han sido indexadas en el 
			<em>Emerging Sources Citation Index (ESCI)</em> de Thomoson Reuters. La cantidad total de revistas de MDPI indexadas por ESCI ya suma 46. En el <a href="http://www.mdpi.com/about/journals/esci">siguiente enlace</a> se pueden se pueden ver todas ellas.</p>
			<p>Proteomes (ISSN 2227-7382)</br>
			Página de la revista: <a href="http://www.mdpi.com/journal/proteomes">http://www.mdpi.com/journal/proteomes</a></br>
			Journal of Risk and Financial Managament (version electrónica ISSN 1911-8074; version impresa ISSN 1911-8066)</br>
			Página de la revista: <a href="http://www.mdpi.com/journal/jrfm">http://www.mdpi.com/journal/jrfm</a></p>
			<img class="img-responsive" src="http://www.mdpi.com/img/journals/proteomes-logo.png" alt="Proteomes">
			<img class="img-responsive" src="http://www.mdpi.com/img/journals/jrfm-logo.png" alt="Journal of Risk and Financial Managament">
			'
		),
		
		'barcelona-office' => array(
			'slug' => 'barcelona-office',
			'date' => '20-04-2016',
			'title' => 'Nueva oficina de MDPI en Barcelona',
			'content' => '<p>MDPI, cuya sede principal se encuentra en Basilea, Suiza, ha recientemente inaugurado una nueva oficina en Barcelona. 
			El Office Manager es el Senior Editor Isabel Martinez, quien será responsable de mantener y fomentar la comunicación, el intercambio y la cooperación entre MDPI 
			y los más relevantes institutos de investigación españoles y europeos, además de promover la plataforma <a href"http://sciforum.net/">Sciforum</a>. <a href"http://sciforum.net/">Sciforum</a> es una plataforma desarrollada directamente 
			por MDPI con el objetivo de favorecer el debate académico ofreciendo un espacio para organizar conferencias online, establecer grupos de discusión y una serie de datos 
			funcionales y análisis estadísticas. Gracias a <a href"http://sciforum.net/">Sciforum</a>, MDPI ha podido promocionar numerosos congresos online además de conferencias físicas. El acceso a <a href"http://sciforum.net/">Sciforum</a> 
			es gratuito y todos los investigadores están invitados a tomar parte en la organización y la promoción de eventos profesionales. El personal de la nueva oficina de MDPI 
			en Barcelona podrá ofrecer suporte técnico y profesional al respecto. Además, el grupo editorial representará activamente MDPI participando en diferentes eventos académicos en Europa, 
			con el objetivo de promover el desarrollo de las publicaciones Open Access.</p>'
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
