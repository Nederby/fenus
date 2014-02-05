<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<title><?=$title_for_layout;?></title>
		<meta name="description" content="Få hjælp til at finde et lån der passer bedst til dig. På fenus.dk har vi sammenlignet trustpilot score, popularitet, omkostninger til dit valg af det billigste forbrugslån.">
		<meta name="viewport" content="width=device-width">
		
		<!-- facebook -->
		<meta property="og:title" content="fenus.dk" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://fenus.dk" />
		<meta property="og:image" content="http://fenus.dk/img/apple-touch-icon-128x128-precomposed.png" />
		<meta property="og:site_name" content="fenus.dk" />
		<meta property="fb:admins" content="747064449" />
		<meta property="og:locale" content="da_DK" />
		
        <!--[if IE]>
			<meta http-equiv="X-UA-Compatible" content="chrome=1">
		<![endif]-->
		

        <link rel="stylesheet" href="<?=STATIC_URL?>css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        
        <link rel="stylesheet" href="<?=STATIC_URL?>css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="<?=STATIC_URL?>css/main.css">
	<link rel="stylesheet" href="<?=STATIC_URL?>css/isotope.css">
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>	
        <script src="<?=STATIC_URL?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php
        	echo $this->Html->script(STATIC_URL.'js/jquery-1.7.1.min.js');
        	echo $this->Html->script(STATIC_URL.'js/jquery.isotope.min.js');
        	echo $this->Html->script('http://code.jquery.com/ui/1.8.18/jquery-ui.min.js');
			echo $this->Html->script(STATIC_URL.'js/jquery.roundabout.min.js');
		?>
		
		<?php
			echo $this->Html->meta('icon');

			//echo $this->Html->css('cake.generic');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
</head>
<body>
	<div class="navbar  navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="http://fenus.dk"><img src="http://fenus.dk/img/fenus.png"></a>
					
                    <div class="nav-collapse collapse">
                        <ul class="nav ">
                            <li id="forside" class="active"><a href="http://fenus.dk/">Forside</a></li>
							<li id="laaneoversigt" ><a href="/laaneoversigt">Låneoversigt</a></li>
                            <li id="hvad-er-et-forbrugslaan" ><a href="/hvad-er-et-forbrugslaan">Hvad er et forbrugslån?</a></li>
							<li id="hvad-koster-et-laan" ><a href="/hvad-koster-et-laan">Hvad koster et lån</a></li>
                            <li id="kontakt" ><a href="/kontakt">Kontakt</a></li>
							<li class="dropdown" id="nytting-viden">
                                <a class="dropdown-toggle" style="cursor: pointer;" data-toggle="dropdown">Nyttig viden <b class="caret"></b></a>
                                <ul class="dropdown-menu">
									<li id="rki"  ><a href="/rki">RKI</a></li>
                                    <li id="godt-at-vide" ><a href="/godt-at-vide">Godt at vide</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Udbyder liste</li>
                                    <li id="ikano-bank" ><a href="/ikano-bank">Ikano-bank</a></li>
                                    <li id="ferratum" ><a href="/ferratum">Ferratum</a></li>
									<li id="alfalån" ><a href="/alfalaan">Alfalån</a></li>
									<li id="extracash" ><a href="/extracash">Extracash.dk</a></li>
									<li id="hotlån" ><a href="/hotlaan">Hotlån</a></li>
									<li id="kvik-automaten" ><a href="/kvik-automaten">Kvik Automaten</a></li>
									<li id="vivus" ><a href="/vivus">Vivus.dk</a></li>
									<li id="leasy" ><a href="/leasy">L'EASY</a></li>
									<li id="der" ><a href="/der">D:E:R Lån</a></li>
									<li id="trustbuddy" ><a href="/trustbuddy">Trustbuddy</a></li>
									<li id="ge-money-bank" ><a href="/ge-money-bank"">GE Money Bank</a></li>
                                </ul>
                            </li>
							
                        </ul>
                        <?php
						/*<form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>*/
						?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
		<div style="z-index:5;position:absolute;height: 277px !important;background-image:url('/img/bg.jpg');" class="header-alt">
		
		</div>
        <div class="container">
			<?/*<div style="position:relative">
				<div style="position:absolute;right:60px;top:-15px;">
					<div class="fb-like" data-href="https://www.facebook.com/pages/A-kassevalgdk/349308881836400" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false" data-font="verdana"></div>
				</div>
                <div style="position:absolute;right:0px;top:-15px;">
					<div class="g-plusone" data-size="tall"></div>
				</div>
			</div>*/?>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
			<footer style="margin: 0px auto;text-align: center;">
				
					<!--<div style="display:inline-block;text-align: left;width:15%;vertical-align: top;">
						<h1 style="font-size:16px;margin: 0px 0;color:#666;">Låneudbyder liste</h1>
						<ul style="list-style-type: none;margin: 0;padding: 0;">
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/ase-a-kasse">ASE a-kasse</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/ca-a-kasse">CA a-kasse</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/det-faglige-hus">Det Faglige Hus</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/frie-funktionaerer">Frie Funktionærer</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/lederne">Lederne</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/ma-a-kasse">MA a-kasse</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/min-a-kasse">Min A-kasse</a></li>
						</ul>
					</div>
					<div style="display:inline-block;text-align: left;width:15%;vertical-align: top;">
						<h1 style="font-size:16px;margin: 0px 0;color:#666;">Nyttig viden</h1>
						<ul style="list-style-type: none;margin: 0;padding: 0;">
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/saadan-skifter-du">Sådan skifter du</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/godt-at-vide">Godt at vide</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/optagelse-i-en-a-kasse">Optagelse i en a-kasse</a></li>
							<li style="display: list-item;text-align: -webkit-match-parent;padding: 0;margin: 0;"><a href="/hvad-er-en-a-kasse">Hvad er en a-kasse</a></li>
						</ul>
					</div>
					<div style="display:inline-block;text-align: left;width:15%;vertical-align: top;">
						Nederby<br />
						Lundbyesgade 2<br />
						8000 Aarhus C<br />
						Danmark<br />
						CVR 35013024<br />
						<a href="https://plus.google.com/109634569119807765594" target="_blank" rel="publisher">Google+</a><br />
						<a href="https://www.facebook.com/pages/A-kassevalgdk/349308881836400" target="_blank"  >Facebook</a>
					</div>-->
					
				
			</footer>

        </div> <!-- /container -->
        <script src="<?=STATIC_URL?>js/vendor/bootstrap.min.js"></script>

        <script src="<?=STATIC_URL?>js/main.js"></script>

		<script type="text/javascript">
		 
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-39556312-1', 'fenus.dk');
		  ga('send', 'pageview');

		  
		  $('ul.nav li').removeClass('active');
		  <?php
		  if($menu){
			echo "$('ul.nav li#".$menu."').addClass('active');;";
		  }else{
			echo "$('ul.nav li#oversigt').addClass('active');";
		  }
		  
		  ?>
		  (function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=571613226197112";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			window.___gcfg = {lang: 'da'};
				(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			})();
		</script>
        <div id="fb-root"></div>
</body>
</html>
