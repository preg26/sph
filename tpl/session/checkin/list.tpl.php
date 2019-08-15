
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
			<h4>Liste des checkins</h4>
			
			<div class="table">
				<div class="row">
					<div class="col-md-5">Session</div>
					<div class="col-md-3">Date</div>
					<div class="col-md-3">Auteur</div>
					<div class="col-md-1 text-right">Actions</div>
				</div>
    	      <?php
    	      	if(!empty($TObjects)) {
    	      		foreach($TObjects as $object) {
    	      			?>
				<div class="row">
					<div class="col-md-5">
    	      			<?php echo $object->get_nomurl(); ?>
    	      		</div>
					<div class="col-md-3">
            	      		<?php echo $object->date_checkin; ?>
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