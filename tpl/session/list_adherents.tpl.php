
<div class="col-md-12 pt15" id="adherent-liste">
	<h4>Liste des Adhérents de la session  <?php echo $object->get_badge_places(); ?>  <a id="show-adherent" class="glypicon glyphicon-plus" href="#adherent-liste"></a></h4>
	<div class="row" id="add_adherent" style="display:none">
		<form method="post" action="">
			<div class="row">
				<div class="col-md-12 p5 backlightgrey">
					<label for="fk_user">Ajouter un Adhérent : </label>
					<select name="fk_adherent" id="fk_adherent">
						<?php 
						if(!empty($TAdherent)) {
						    foreach($TAdherent as $adherent) {
						        echo '<option value="'.$adherent->rowid.'" '.((!empty($object->TAdherents[$adherent->rowid]))?'disabled="disabled"':'').'>';
						        echo $adherent->lastname.' '.$adherent->firstname;
						        echo '</option>';
						    }
						}
						?>
					</select>
    				<input type="hidden" name="action" value="add_adherent" />
    				<input type="hidden" name="id" value="<?php echo $object->rowid; ?>" />
    				<input type="hidden" name="fk_session" value="<?php echo $object->rowid; ?>" />
    				<input type="submit" name="envoyer" value="Ajouter" class="btn btn-info"/>
    			</div>
			</div>
    	</form>
	</div>
	
	<div class="table">
		<div class="row">
			<div class="col-md-3">Nom prénom</div>
			<div class="col-md-1">Age</div>
			<div class="col-md-2">Email</div>
			<div class="col-md-1">Prés</div>
			<div class="col-md-2">Sessions</div>
			<div class="col-md-2">Statut</div>
			<div class="col-md-1 text-right">Actions</div>
		</div>
		<?php
      	if(!empty($object->TAdherents)) {
      	    foreach($object->TAdherents as $item) {
      	?>
		<div class="row">
			<div class="col-md-3">
      			<?php echo $item->get_nomurl(); ?>
      		</div>
			<div class="col-md-1">
	      		<?php echo $item->get_age(); ?>
			</div>
			<div class="col-md-2">
	      		<?php echo $item->email; ?>
			</div>
			<div class="col-md-1">
	      		<?php echo $object->get_taux_presence($item->rowid); ?>
			</div>
			<div class="col-md-2">
	      		<?php echo $item->get_sessions(); ?>
			</div>
			<div class="col-md-2">
    	      	<?php echo $item->get_status(); ?>
			</div>
			<div class="col-md-1 text-right">
    	      	<a href="?action=delete_adh&id=<?php echo $object->rowid; ?>&id_adh=<?php echo $item->rowid; ?>">
    	      		<span class="glyphicon glyphicon-trash"></span>
    	      	</a>
			</div>
  		</div>
      			<?php
      		}
      	}
  	    ?>
	</div>
	<div class="clear"></div>
</div>