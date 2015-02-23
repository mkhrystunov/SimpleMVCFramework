<?php

class IndexController extends BaseController
{
	function indexAction()
	{
		return $this->render('index_index', array(
			'title' => 'Page title',
			'head' => 'Header',
			'paragraphs' => array(
				'Pour-over freegan cardigan roof party. Before they sold out cornhole Williamsburg, ennui hoodie Godard put a bird on it drinking vinegar farm-to-table cray fixie. Ennui wolf Marfa tote bag +1, Vice twee tattooed YOLO American Apparel mumblecore PBR&B try-hard. Sustainable Vice ennui lo-fi mumblecore Austin gluten-free. Small batch chambray bespoke, kogi butcher Etsy twee retro kale chips keytar actually single-origin coffee. Gluten-free before they sold out skateboard photo booth wolf umami readymade, pickled McSweeney\'s. IPhone pop-up sustainable, cold-pressed meditation Wes Anderson four loko try-hard beard twee tousled.',
				'Blog kitsch mixtape try-hard semiotics pickled stumptown cornhole fap, typewriter Wes Anderson Neutra sustainable actually ethical. Lomo before they sold out 90\'s meggings hashtag distillery bitters VHS four dollar toast umami, migas pop-up whatever vegan church-key. Cred 8-bit hella, XOXO Neutra fixie seitan plaid. Occupy flannel authentic master cleanse, PBR skateboard ethical scenester sustainable whatever 90\'s craft beer. Health goth you probably haven\'t heard of them actually Austin gentrify, Williamsburg master cleanse trust fund butcher Intelligentsia 3 wolf moon Echo Park post-ironic 90\'s small batch. Schlitz gentrify kogi artisan, leggings keffiyeh Intelligentsia iPhone photo booth lo-fi Banksy cardigan vegan ennui shabby chic. Art party post-ironic authentic next level twee.',
				'Photo booth salvia tote bag small batch. Wolf letterpress selvage Schlitz street art kogi Banksy Kickstarter Wes Anderson, craft beer cray pork belly. Tumblr listicle banjo cliche, heirloom put a bird on it skateboard paleo tilde Blue Bottle disrupt slow-carb meggings. McSweeney\'s beard VHS, before they sold out hella food truck Williamsburg street art mlkshk. Vice semiotics selvage, cray narwhal slow-carb freegan Wes Anderson skateboard salvia. Roof party flexitarian Blue Bottle letterpress. Pop-up Blue Bottle sartorial, ennui forage skateboard lomo literally Etsy mlkshk slow-carb.',
				'Intelligentsia YOLO ugh Carles. Roof party messenger bag hella, slow-carb beard mustache bitters. PBR&B letterpress cardigan viral, banjo pop-up selvage. Post-ironic typewriter cray Thundercats paleo. Selvage roof party church-key photo booth, master cleanse meditation Wes Anderson four loko Intelligentsia Shoreditch fingerstache. Cronut bitters swag brunch, try-hard tote bag plaid organic gentrify. Etsy raw denim letterpress ennui listicle, fingerstache deep v squid slow-carb before they sold out beard Austin.',
			),
		));
	}
}