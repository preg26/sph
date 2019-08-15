
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		if($action == 'checkin') {
				?>
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Check-in</h4>
			
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Nom Session
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->get_nomurl(); ?>
    				</div>
				</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Jour
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->jour; ?>
    				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Horaire de début
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->heure_deb; ?>
    				</div>
				</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Horaire de fin
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->heure_fin; ?>
    				</div>
				</div>
			</div>
			
			<div class="row"><hr/></div>
			<h4>Autres informations</h4>
			
			<div class="row">
    			<div class="col-md-12">
    				<div class="col-md-2">
    					Jeu
    				</div>
    				<div class="col-md-10">
    					<?php echo $object->jeu->get_nomurl(); ?>
    				</div>
    			</div>
			</div>
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Période
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->periode->get_nomurl(); ?>
    				</div>
    			</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Lieu
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->lieu->get_nomurl(); ?>
    				</div>
    			</div>
			</div>
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Nombre d'adhérants
    				</div>
    				<div class="col-md-8">
    					<?php echo count($object->TAdherants); ?>
    				</div>
				</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Nombre de coachs
    				</div>
    				<div class="col-md-8">
    					<?php echo count($object->TCoachs); ?>
    				</div>
				</div>
			</div>
			
			<hr/>
			<h4>Check-in d'une session</h4>
			<form method="post" action="">
			
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="jour">Date</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="date" value="<?php echo date('Y-m-d'); ?>" name="date_checkin" />
						<input type="hidden" value="<?php echo $object->rowid ?>" name="fk_session" />
					</div>
				</div>
				
				<hr/>
				
				
				<div class="table table-striped">
    				<div class="row">
    					<div class="col-md-3">Nom prénom</div>
    					<div class="col-md-2">Prénom</div>
    					<div class="col-md-2">Type</div>
    					<div class="col-md-3">Email</div>
    					<div class="col-md-1">Statut</div>
    					<div class="col-md-1 text-right">Présent ?</div>
    				</div>
    				<?php 
    				// Boucle coachs
    				foreach($object->TCoachs as $coach) {   
    				?>
    				
    				<div class="row">
    					<div class="col-md-3"><?php echo $coach->get_nomurl(); ?></div>
    					<div class="col-md-2"><?php echo $coach->firstname; ?></div>
    					<div class="col-md-2">Coach</div>
    					<div class="col-md-3"><?php echo $coach->email; ?></div>
    					<div class="col-md-1"><?php echo $coach->get_status(); ?></div>
    					<div class="col-md-1 text-right"><input type="checkbox" name="coach[]" value="<?php echo $coach->rowid; ?>" /></div>
    				</div>
    				<?php 
    				}
    				// Boucle adhérants
    				foreach($object->TAdherants as $adherant) {
    				?>
    				
    				<div class="row">
    					<div class="col-md-3"><?php echo $adherant->get_nomurl(); ?></div>
    					<div class="col-md-2"><?php echo $adherant->firstname; ?></div>
    					<div class="col-md-2">Adhérant (<?php echo $adherant->get_age(); ?> ans)</div>
    					<div class="col-md-3"><?php echo $adherant->email; ?></div>
    					<div class="col-md-1"><?php echo $adherant->get_status(); ?></div>
    					<div class="col-md-1 text-right"><input type="checkbox" name="adherant[]" value="<?php echo $adherant->rowid; ?>" /></div>
    				</div>
    				<?php 
    				}
    				?>
				</div>
				
				<div class="row pt15">
					<div class="col-md-12 text-right">
						<input type="hidden" name="action" value="checkin_save" />
						<input type="submit" name="envoyer" value="Valider" class="btn btn-primary"/>
					</div>
				</div>
			</form>
		<?php
		}
		?>
		</div>
	</div>
	<div class="clear"></div>
</div>