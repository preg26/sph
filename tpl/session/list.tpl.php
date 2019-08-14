
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
			<h4>Liste des sessions</h4>
			
			<div class="table">
				<div class="row">
					<div class="col-md-3">Jeu</div>
					<div class="col-md-1">Jour</div>
					<div class="col-md-1">Heure Déb</div>
					<div class="col-md-1">Heure Fin</div>
					<div class="col-md-1">Capacité</div>
					<div class="col-md-2">Coachs</div>
					<div class="col-md-2">Lieu</div>
					<div class="col-md-1 text-right">Actions</div>
				</div>
    	      <?php
    	      	if(!empty($TObjects)) {
    	      		foreach($TObjects as $object) {
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
					<div class="col-md-2">
            	      		<?php echo $object->get_coachs(); ?>
					</div>
					<div class="col-md-2">
            	      		<?php echo $object->lieu->get_nomurl(); ?>
					</div>
					<div class="col-md-1 text-right">
            	      	<a href="?action=edit&id=<?php echo $object->rowid; ?>">
            	      		<span class="glyphicon glyphicon-pencil"></span>
            	      	</a>
            	      	&nbsp;
            	      	<a href="?action=delete&id=<?php echo $object->rowid; ?>">
            	      		<span class="glyphicon glyphicon-trash"></span>
            	      	</a>
					</div>
	      		</div>
    	      			<?php
    	      		}
    	      	}
	      	    ?>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>