
<div class="col-md-12 pt15" id ="coach-liste">
	<h4>Liste des Sessions en tant que coach</h4>
	
	<div class="table">
		
		<div class="row">
			<div class="col-md-3">Jeu</div>
			<div class="col-md-1">Jour</div>
			<div class="col-md-1">Heure Déb</div>
			<div class="col-md-1">Heure Fin</div>
			<div class="col-md-1">Capacité</div>
			<div class="col-md-3">Coachs</div>
			<div class="col-md-2">Lieu</div>
		</div>
      	<?php
      	$object->fetch_sessions();
      	if(!empty($object->TSessions)) {
      	    foreach($object->TSessions as $object) {
		?>
		<div class="row p5">
			<div class="col-md-3">
      			<?php echo $object->get_nomurl(); ?>
      		</div>
			<div class="col-md-1">
	      		<?php echo $object->jour; ?>
			</div>
			<div class="col-md-1">
	      		<?php echo $object->heure_deb; ?>
			</div>
			<div class="col-md-1">
	      		<?php echo $object->heure_fin; ?>
			</div>
			<div class="col-md-1">
    	      	<?php echo $object->get_badge_places(); ?>
			</div>
			<div class="col-md-3">
    	      		<?php echo $object->get_coachs(); ?>
			</div>
			<div class="col-md-2">
    	      		<?php echo $object->lieu->get_nomurl(); ?>
			</div>
  		</div>
      			<?php
      		}
      	}
  	    ?>
	</div>
	<div class="clear"></div>
</div>