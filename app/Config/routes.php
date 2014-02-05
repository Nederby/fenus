<?php

	Router::connect('/', array('controller' => 'offers', 'action' => 'index'));
	
	Router::connect('/laaneoversigt', array('controller' => 'offers', 'action' => 'overview'));
	
	Router::connect('/vaelg-et-laan/*', array('controller' => 'offers', 'action' => 'overview'));
	Router::connect('/rki/*', array('controller' => 'Pages', 'action' => 'rki'));
	Router::connect('/hvad-er-et-forbrugslaan/*', array('controller' => 'Pages', 'action' => 'hvadErEtForbrugslaan'));
	Router::connect('/hvad-koster-et-laan/*', array('controller' => 'Pages', 'action' => 'hvadKosterEtLaan'));
	Router::connect('/rki/*', array('controller' => 'Pages', 'action' => 'rki'));
	Router::connect('/godt-at-vide/*', array('controller' => 'Pages', 'action' => 'godtAtVide'));
	Router::connect('/kontakt/*', array('controller' => 'Messages', 'action' => 'index'));
	
	Router::connect('/leasy/*', array('controller' => 'Offers', 'action' => 'view', 2));
	Router::connect('/ferratum/*', array('controller' => 'Offers', 'action' => 'view', 3));
	Router::connect('/alfalaan/*', array('controller' => 'Offers', 'action' => 'view', 4));
	Router::connect('/extracash/*', array('controller' => 'Offers', 'action' => 'view', 5));
	Router::connect('/der/*', array('controller' => 'Offers', 'action' => 'view', 7));
	
	Router::connect('/hotlaan/*', array('controller' => 'Offers', 'action' => 'view', 9));
	Router::connect('/kvik-automaten/*', array('controller' => 'Offers', 'action' => 'view', 10));
	Router::connect('/ikano-bank/*', array('controller' => 'Offers', 'action' => 'view', 11));
	Router::connect('/vivus/*', array('controller' => 'Offers', 'action' => 'view', 12));
	Router::connect('/trustbuddy/*', array('controller' => 'Offers', 'action' => 'view', 13));
	Router::connect('/ge-money-bank/*', array('controller' => 'Offers', 'action' => 'view', 14));
	
	Router::connect('/laan/laes-mere-om/*', array('controller' => 'Offers', 'action' => 'view'));
	Router::connect('/laan/gaa-til-siden/*', array('controller' => 'Offers', 'action' => 'see_more'));
	Router::connect('/laan/*', array('controller' => 'Offers', 'action' => 'index'));

	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
