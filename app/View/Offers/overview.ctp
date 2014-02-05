<?php
$this->set("title_for_layout", 'Få hjælp med prissammenligning, popularitet og trustpilot score og meget mere til dit valg af et billigt lån.');
?>
<h1>Find dit forbrugslån</h1>
<p>Du kan let sortér dine lånetilbud på aldre, popularitet, lånebeløb, og Trustpilot point herunder.</p>
<div id="options">
	<div style="float:left;padding-right:25px;">
		<h3>Sortér efter:</h3>
		<ul id="sort-by" class="option-set clearfix" data-filter="" data-option-key="sortBy">
		  <li><a href="#sortBy=popularitet" data-filter="*" data-option-value="popularitet" class="selected" data>Popularitet</a></li>
		  <li><a href="#sortBy=int_trustpilot" data-filter=".trustPilotScores" data-option-value="int_trustpilot" data>Trustpilot</a></li>
		  <li><a href="#sortBy=name" data-filter="*" data-option-value="name" data>Navn</a></li>
		  <!--<li><a href="#sortBy=employee_price" data-filter=".forEmployee" data-option-value="employee_price">Pris for lønmodtagere</a></li>
		  <li><a href="#sortBy=selfemployee_price" data-filter=".forSelfEmployee" data-option-value="selfemployee_price">Pris for selvstændige</a></li>
		  <li><a href="#sortBy=free_for_students" data-filter=".freeForStudents" data-option-value="free_for_students">Gratis for studerende</a></li>-->
		</ul>
	</div>
	
	<div style="float:left;padding-right:25px;">
		<h3>Minimumsalder:</h3>
		<ul id="sort-by-Age" class="option-set clearfix" data-filter="" data-option-key="sortByAge">
		  <li><a href="" data-filter=".minAgoEighteen"   data>18 år</a></li>
		  <li><a href="" data-filter=".minAgoTwenty"  data>20 år</a></li>
		  <li><a href="" data-filter="*" class="selected" data>Over 23 år</a></li>
		</ul>
	</div>
	
	<div style="float:left;padding-right:25px;">
		<h3>Sortering</h3>
		<ul id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
			<li><a href="#sortAscending=false" data-option-value="false"  ><i class="icon-arrow-down "></i></a></li>
			<li><a href="#sortAscending=true" data-option-value="true" class="selected" ><i class="icon-arrow-up "></i></a></li>
		</ul>
	</div>
	
	<div style="clear:both;"></div>
	<div >
		<h3>Lån minimum</h3>
		<input type="text" id="amount" disabled="disabled" style="border:0; color:#08c; font-weight:bold;" />
		<div id="slider-range" style="width:94%;"></div>
		<br />
	</div>
</div>
<div id="containerIsotope" class="super-list variable-sizes clearfix" >
<?php
foreach($offers as $offer){
	$max_loan = $offer['Offer']['max_loan'];
	$min_loan = $offer['Offer']['min_loan'];
	$min_age = $offer['Offer']['min_age'];
	$popularitet = $offer['Offer']['impressions'];
	$trustpilot_score = $offer['Offer']['trustpilot_score'];
	$picture_url = $offer['Offer']['picture_url'];
	$box_height = $offer['Offer']['box_height'];
	
	$min_time_days = $offer['Offer']['min_time_days'];
	$max_time_days = $offer['Offer']['max_time_days'];
	$min_time_months = $offer['Offer']['min_time_months'];
	$max_time_months = $offer['Offer']['max_time_months'];
	
	$time_for_approval_minutes = $offer['Offer']['time_for_approval_minutes'];
	$payout_time_days = $offer['Offer']['payout_time_days'];
	
	$popularitetres = ($popularitet/$totalImpressions)*100;
	
	$trustpilot_scoreHtml = "";
	$loanTimeHtml = "";
	
	$filterClasstrustPilotScores = "";
	$filterClassMinAgoEighteen = "";
	$filterClassMinAgoTwenty = "";
	
	if($min_age<=18){
		$filterClassMinAgoEighteen = "minAgoEighteen";
	}
	
	if($min_age<=20){
		$filterClassMinAgoTwenty = "minAgoTwenty";
	}
	
	$min_ageHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Min alder:</span><span style="padding-left:15px;">'.$min_age.' år</span></p>';
	$loanHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Lån mellem:</span><span style="padding-left:15px;">'.number_format($min_loan, 0, ",", ".").' kr. - '.number_format($max_loan, 0, ",", ".").' kr.</span></p>';
	if($max_time_days!= 0){
		$loanTimeHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Løbetid:</span><span style="padding-left:15px;">'.$min_time_days.' - '.$max_time_days.'</span></p>';
	}elseif($max_time_months!= 0){
		$loanTimeHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Løbetid:</span><span style="padding-left:15px;">'.$min_time_months.' - '.$max_time_months.'</span></p>';
	}
	if($trustpilot_score !=0){
		$filterClasstrustPilotScores = 'trustPilotScores';
		$int_trustpilot_score = $trustpilot_score*10;
		$trustpilot_scoreHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Trustpilot:</span><a href="'.$offer['Offer']['trustpilot_link'].'" target="_blank" ><span style="padding-left:15px;">'.$trustpilot_score.'</span></a><span class="int_trustpilot" style="display:none;">'.$int_trustpilot_score.'</span></p>';
	}
	$popularitet_scoreHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Popularitet:</span><span style="padding-left:15px;">'.number_format($popularitetres, 2).' pct.</span></p>';
	$timeforapprovel = gmdate("G:i", ($time_for_approval_minutes * 60));
	$arr_timeforapprovel = explode(":", $timeforapprovel);
	if($arr_timeforapprovel[0]=='0'){
		$approvelTime = $arr_timeforapprovel[1]. " min";
	}else{
		$approvelTime = $arr_timeforapprovel[0]." timer";
	}
	$timeForApprovelHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Godkendelse:</span><span style="padding-left:15px;">'.$approvelTime.'</span></p>';
	
	
	$timeForPayoutHtml = '<p><span style="width:90px;display:inline-block;text-align:right;">Udbetaling:</span><span style="padding-left:15px;">'.$payout_time_days.' dage</span></p>';
	
	?>
	
	<div data-loanmin="<?=$min_loan?>" data-loanmax="<?=$max_loan?>" class="element <?=$filterClasstrustPilotScores?> <?=$filterClassMinAgoEighteen?> <?=$filterClassMinAgoTwenty?> maxLoan_<?=$max_loan?>" style="padding-top:15px;width:370px;background-color: #FFF;background-image: -moz-linear-gradient(top, #DAD6CA 0px, #FFF 50px);background-image: -webkit-gradient(linear, left top, 0 50, color-stop(0, #DAD6CA), color-stop(1, #FFF));">
		<header>
			<div style="background:url('<?=FULL_BASE_URL.'/img/'.$picture_url?>');width:370px;margin-bottom:10px;height:<?=$box_height?>px;background-position:center top;background-repeat:no-repeat;"></div>
			<h3 class="title" style="padding:0 15px 0 15px;display:none;"><?=$offer['Offer']['title']?></h3>
		</header>
		<div style="padding:0 15px 40px 15px;">
			<?=$min_ageHtml?>
			<?=$loanHtml?>
			
			<?=$timeForApprovelHtml?>
			<?=$timeForPayoutHtml?>
			
			<?=$trustpilot_scoreHtml?>
			<?=$popularitet_scoreHtml?>
		</div>
		<?
		echo '
			<a class="btn laes_mere_btn" href="/laan/laes-mere-om/'.$offer['Offer']['id'].'">Læs mere &raquo;</a>
			<a class="btn btn-info" href="/laan/gaa-til-siden/'.$offer['Offer']['id'].'">Beregn tilbud &raquo;</a>';
			?>
		
	</div>
	
	
	<?
}
?>
</div>
<script>
	$(function(){
	var $container = $('#containerIsotope');
      	$container.isotope({
      	
        itemSelector: '.element',
        getSortData : {
          popularitet : function( $elem ) {
            return parseInt( $elem.find('.popularitet').text().replace(/[A-Za-z$-]/g, ""), 10 );
          },
          name : function ( $elem ) {
            return $elem.find('.name').text();
          },
		  int_trustpilot : function( $elem ) {
            return parseInt( $elem.find('.int_trustpilot').text().replace(/[A-Za-z$-]/g, ""), 10 );
          }
        }
      });
      
     
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  	
  		
  		
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        
        
        return false;
      });
      
      //filters
      $optionLinks.click(function(){
  		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
      });
      
	  
	  
      $(window).smartresize(function(){
		  $container.isotope({
			// update columnWidth to a percentage of container width
			//masonry: { columnWidth: $container.width() / 5 }
		  });
	});
      
    });
	
	$(function() {
		var options = {
			range: "min",
			min: 100,
			max: 75000,
			values: 100,
			step: 100,
			slide: function(event, ui) {
				var min = ui.value;

				$("#amount").val("" + min.formatMoney(0, '.', ',') + " kr.");
				showProducts(min);
			}
		}, min, max;

		$("#slider-range").slider(options);

		min = $("#slider-range").slider("values", 0);
		
		$("#amount").val("" + min.formatMoney(0, '.', ',') + " kr.");
		showProducts(min);
	});
	
	function showProducts(minPrice) {
		//console.log("min: "+minPrice);
		var not = "";
	  	var include = "";

		//console.log("minPrice: "+minPrice);
		//console.log("loanmin: "+loanmin);
		//console.log("include: "+include);
		//$('#containerIsotope').isotope({ filter: include+' '+not });


		//return false;


		$(".element").hide().filter(function() {
			var loanmin = parseInt($(this).data("loanmax"), 10);
			return loanmin >= minPrice;
		}).show();
	}
	
	Number.prototype.formatMoney = function(c, d, t){
		var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
		return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	};
	
    
</script>
<br /> 
