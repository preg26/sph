
<div class="col-md-12 pt15" id ="coach-liste">
	<h4>Liste des Coachs de la session <a id="show-coach" class="glypicon glyphicon-plus" href="#coach-liste"></a></h4>
	<div class="row" id="add_coach" style="display:none">
		<form method="post" action="">
			<div class="row">
				<div class="col-md-12 p5 backlightgrey">
					<label for="fk_user">Ajouter un coach : </label>
					<select name="fk_user" id="fk_user">
						<?php 
						if(!empty($TCoach)) {
						    foreach($TCoach as $coach) {
						        echo '<option value="'.$coach->rowid.'" '.((!empty($object->TCoachs[$coach->rowid]))?'disabled="disabled"':'').'>';
						        echo $coach->lastname.' '.$coach->firstname;
						        echo '</option>';
						    }
						}
						?>
					</select>
    				<input type="hidden" name="action" value="add_coach" />
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
			<div class="col-md-2">Login</div>
			<div class="col-md-2">Email</div>
			<div class="col-md-2">Prés</div>
			<div class="col-md-2">Statut</div>
			<div class="col-md-1 text-right">Actions</div>
		</div>
      	<?php
      	if(!empty($object->TCoachs)) {
      	    foreach($object->TCoachs as $item) {
		?>
		<div class="row">
			<div class="col-md-3">
      			<?php echo $item->get_nomurl(); ?>
      		</div>
			<div class="col-md-2">
	      		<?php echo $item->login; ?>
			</div>
			<div class="col-md-2">
	      		<?php echo $item->email; ?>
			</div>
			<div class="col-md-2">
	      		<?php echo $object->get_taux_presence(null, $item->rowid); ?>
			</div>
			<div class="col-md-2">
    	      	<?php echo $item->get_status(); ?>
			</div>
			<div class="col-md-1 text-right">
    	      	<a href="?action=delete_coach&id=<?php echo $object->rowid; ?>&id_coach=<?php echo $item->rowid; ?>">
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