
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
			<h4>Liste des Adhérents</h4>
			
			<div class="table">
				<div class="row">
					<div class="col-md-3">Nom prénom</div>
					<div class="col-md-1">Age</div>
					<div class="col-md-2">Email</div>
					<div class="col-md-2">Sessions</div>
					<div class="col-md-2">Date création</div>
					<div class="col-md-1">Statut</div>
					<div class="col-md-1 text-right">Actions</div>
				</div>
    	      <?php
    	      	if(!empty($TObjects)) {
    	      		foreach($TObjects as $object) {
    	      			?>
				<div class="row">
					<div class="col-md-3">
    	      			<a href="?action=view&id=<?php echo $object->rowid; ?>">
    	      				<span class="glyphicon <?php echo $object->picto. ' '.$object->sex; ?> "></span> 
    	      				<?php echo $object->lastname.' '.$object->firstname; ?>
    	      			</a>
    	      		</div>
					<div class="col-md-1">
            	      		<?php echo $object->get_age(); ?>
					</div>
					<div class="col-md-2">
            	      		<?php echo $object->email; ?>
					</div>
					<div class="col-md-2">
            	      		<?php echo $object->get_sessions(); ?>
					</div>
					<div class="col-md-2">
            	      		<?php echo $object->datec; ?>
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