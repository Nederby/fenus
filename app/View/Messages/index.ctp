<?php
$this->set("title_for_layout", "Kontakt os");
?>
<h2>Kontakt Os</h2>
<?php
echo $this->Session->flash();
?>
<div class="row">
	<div class="span5" >
		<form method="post" action="/kontakt?debug" >
		  <div class="controls controls-row">
			<label class="control-label" for="inputName">Navn</label>
			<div class="controls">
			  <input name="name" type="text" class="input-xlarge" id="inputName" placeholder="Navn" required>
			</div>
			<label class="control-label" for="inputEmail">E-mail</label>
			<div class="controls">
			  <input name="email" type="text" class="input-xlarge" id="inputEmail" placeholder="Email" required>
			</div>
		  
			<label class="control-label" for="inputEmail">Besked</label>
			<div class="controls">
			  <textarea name="message" class="input-xlarge" rows="9" required></textarea>
			</div>
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn">Send</button>
			</div>
		  </div>
		</form>
	</div>
	<div class="span5" ><p><b>Fenus</b><br />CVR: 3501 3024<br /><br />&copy; fenus.dk <?=date('Y')?> er reklamefinansieret og indholdet er kommercielt. Sammenligninger er kun af udvalgte låneudbydere. Der tages forbehold for tastefejl og ændringer i priser, vilkår, tilbud mv.<br /> Alle oplysninger må kun anses som vejledende og aldrig endelige.</p></div>
</div>
