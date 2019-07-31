
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
			<h4>Liste des périodes d'ahésion proposées</h4>
			
			<div class="table">
				<div class="row">
					<div class="col-md-6">Libellé</div>
					<div class="col-md-2">Début période</div>
					<div class="col-md-2">Fin période</div>
					<div class="col-md-1">Statut</div>
					<div class="col-md-1 text-right">Actions</div>
				</div>
    	      <?php
    	      	if(!empty($TObjects)) {
    	      		foreach($TObjects as $object) {
    	      			?>
				<div class="row">
					<div class="col-md-6">
    	      			<a href="?action=view&id=<?php echo $object->rowid; ?>">
    	      				<span class="glyphicon <?php echo $object->picto; ?>"></span> <?php echo $object->libelle; ?>
    	      			</a>
    	      		</div>
					<div class="col-md-2">
            	      		<?php echo date('Y-m-d', strtotime($object->date_deb)); ?>
					</div>
					<div class="col-md-2">
            	      		<?php echo date('Y-m-d', strtotime($object->date_fin)); ?>
					</div>
					<div class="col-md-1">
            	      		<?php echo $object->get_status(1); ?>
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