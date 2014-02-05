<?php
$this->set("title_for_layout", 'Låne oversigt, få hjælp til dit valg af et lån');
?>

<ul class="roundabout " >
<?php
	foreach($offers as $offer){
?>
	<li id="<?=$offer['Offer']['id']?>" class="img-rounded" style="background-image:url('img/roundabout/<?=$offer['Offer']['id']?>.jpg')"></li>
<?php 
	}
?>
</ul>
<div class="row-fluid">
<?php
	$i=0;
	foreach($offers as $offer){
		if($i==0){
			$divStyle = '';
		}else{
			$divStyle = 'style="display:none;"';
		}
		?>
		<div class="links well show-grid"  <?=$divStyle?> id="offer_link_<?=$offer['Offer']['id']?>" >
			<div  style="margin-left:3%;float:left;width:38%;border:0px solid black;"><h2 style="display:inline-block;text-shadow: 0px 1px 1px #4d4d4d;color: #222;font: 40px 'LeagueGothicRegular';"><?=$offer['Offer']['title']?></h2></div>
			<div  style="float:left;width:37%;"><h3 style="font-weight: bold;text-shadow: 0px 1px 1px #4d4d4d;color: #222;font: 24px 'LeagueGothicRegular';margin-top: 24px;">Trust Pilot <?=($offer['Offer']['trustpilot_score'] > 0 ? '<a target="_blank" href="'.$offer['Offer']['trustpilot_link'].'">'.$offer['Offer']['trustpilot_score'].'</a> af 10' : '-');?> </h3></div>
			<div style="text-align:right;float:left;width:20%;border:0px solid black"><a style="margin-top: 15px;" href="/laan/laes-mere-om/<?=$offer['Offer']['id']?>" class="btn btn-large btn-info">Læs mere</a> </div>
			<div style="clear:both;"></div>
		</div>
		<?
		$i++;
	}
?>
</div>
<div class="row-fluid">
	<div class="span4 well">
		<h3>De mest populære lån</h3>
		<ol style="margin: 0 0 10px 55px;">
		<?php
		$i=0;
		foreach($offers as $offer){
			if($i>4){
				break;
			}
			?>
			<li style="color: #222;font: 19px 'LeagueGothicRegular';">
				<p style="padding: 0px;margin:0px;display: inline-block; vertical-align: text-top; padding-left: 10px;">
					<a style="font-size: 18px;" href="/laan/laes-mere-om/<?=$offer['Offer']['id']?>" title="Læs mere om <?=$offer['Offer']['title']?>"><?=$offer['Offer']['title']?></a>
				</p>
			</li>
		<?php
		$i++;
		}
		?>
		</ol>
	</div>
	<div class="span4 well">
		<h3>Hvad betyder ÅOP?</h3>
		<p>ÅOP står for Årlig Omkostninger i Procent, det er den procent, som gør det lettest at vurdere forskellige lån fra hinanden. Jo, lavere ÅOP betyder lavere omkostninger for dig.<br /><a href="/hvad-er-et-forbrugslaan" class="btn pull-right">Læs mere om kviklån</a></p>
	</div>
	<div class="span4 well">
	<h3>Hurtigt overblik og dine muligheder</h3>
	<p>På fenus.dk er der samlet <?=count($offers)?> forskellige låneudbydere, så du let kan finde det lån der passer bedst til dig. <br /><a href="/laaneoversigt" class="btn pull-right">Find dit lån her</a></p></div>
</div>
<script>
$(document).ready(function() {
	$('.roundabout').roundabout({
		shape: 'figure8',
		autoplay:true,
		autoplayDuration:5000,
		autoplayPauseOnHover:true,
		responsive:true
	});
	

	$('.roundabout').on('focus', 'li', function() {
		$(".links").hide();
		$("#offer_link_"+this.id).show();
	});
});
</script>
