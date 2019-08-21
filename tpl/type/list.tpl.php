
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
			<h4>Liste des types de sessions</h4>
			
			<div class="table">
				<div class="row">
					<div class="col-md-6">Libellé</div>
					<div class="col-md-2">Date création</div>
					<div class="col-md-2">Auteur</div>
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
    	      				<span class="glyphicon glyphicon-off"></span> <?php echo $object->libelle; ?>
    	      			</a>
    	      		</div>
					<div class="col-md-2">
            	      		<?php echo $object->datec; ?>
					</div>
					<div class="col-md-2">
        					<?php echo $object->get_createby(); ?>
					</div>
					<div class="col-md-1">
            	      		<?php echo $object->get_status(); ?>
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