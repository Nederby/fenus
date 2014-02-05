<?php
$this->set("title_for_layout", $Offer['title']);
?>

<h2 style="text-shadow: 0px 1px 1px #4d4d4d;color: #222;font: 40px 'LeagueGothicRegular';"><?= $Offer['title']?></h2>
<table class="table table-striped">
	<tr>
		<td><b>Minimum aldre:</b></td>
		<td><b class="pull-right"><?=$Offer['min_age']?> år</b></td>
	</tr>
	<?php
	$min_loan = $Offer['min_loan'];
	$max_loan = $Offer['max_loan'];
	if($min_loan != 0 && $max_loan != 0){
	?>
	<tr>
		<td><b>Lån mellem:</b></td>
		<td><b class="pull-right"><?=number_format($min_loan, 2, ",", ".").' - '.number_format($max_loan, 2, ",", ".")?> kr.</b></td>
	</tr>
	<?php
	}
	$min_time_months = $Offer['min_time_months'];
	$max_time_months = $Offer['max_time_months'];
	if($min_time_months != 0 && $max_time_months != 0){
	?>
	<tr>
		<td><b>Løbetid:</b></td>
		<td><b class="pull-right"><?=$min_time_months.' - '.$max_time_months?> måneder</b></td>
	</tr>
	<?php
	}
	$min_time_days = $Offer['min_time_days'];
	$max_time_days = $Offer['max_time_days'];
	if($min_time_days != 0 && $max_time_days != 0){
	?>
	<tr>
		<td><b>Løbetid:</b></td>
		<td><b class="pull-right"><?=$min_time_days.' - '.$max_time_days?> dage</b></td>
	</tr>
	<?php
	}
	if($Offer['trustpilot_score'] == 0){
		$trustpilot_score = "-";
	}else{
		$trustpilot_score = '<a href="'.$Offer['trustpilot_link'].'" target="_blank" >'.$Offer['trustpilot_score']."</a> af 10";
	}
	?>
	<tr>
		<td><b>Trustpilot karakter:</b></td>
		<td ><b class="pull-right"> <?=$trustpilot_score?></b></td>
	</tr>
</table>

<img class="img-polaroid" src="<?=STATIC_URL?>img/roundabout/<?=$Offer['id']?>.png" />
<address style="margin-bottom:0px;"><?= $Offer['contact']?></address>

<a class="pull-right btn btn-large btn-success" target="_blank" href="/laan/gaa-til-siden/<?=$Offer['id']?>">Gå direkte til siden og beregn et tilbud</a>
<br /><br />
<div style="clear:both;"></div>
