
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		    if($action == 'new') {
		?>
			<h4>Nouveau jeu</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="ref">Nom court</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="ref" id="ref" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="libelle">Nom</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="libelle" id="libelle" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="fk_type">Plateforme</label>
					</div>
					<div class="col-md-11 full-input">
						<?php echo Type::select_all('fk_type'); ?>
					</div>
				</div>
				<div class="row pt15">
					<div class="col-md-12 text-right">
						<input type="hidden" name="action" value="create" />
						<input type="submit" name="envoyer" value="Valider" class="btn btn-primary"/>
						<input type="reset" name="reset" value="Annuler" class="btn btn-secondary"/>
					</div>
				</div>
			</form>
				<?php
			} elseif($action == 'edit') {
				?>
			<h4>Modification d'un type</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="ref">Nom court</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="ref" id="ref" value="<?php echo $object->ref; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="libelle">Nom</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="libelle" id="libelle" value="<?php echo $object->libelle; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="fk_type">Plateforme</label>
					</div>
					<div class="col-md-11 full-input">
						<?php echo Type::select_all('fk_type', $object->fk_type); ?>
					</div>
				</div>
				<div class="row pt15">
					<div class="col-md-12 text-right">
						<input type="hidden" name="action" value="update" />
						<input type="submit" name="envoyer" value="Valider" class="btn btn-primary"/>
						<input type="reset" name="reset" value="Annuler" class="btn btn-secondary"/>
						<?php if($id!=1): ?>
						<a class="btn btn-danger" href="?action=delete&id=<?php echo $id; ?>">Supprimer</a>
						<?php endif; ?>
					</div>
				</div>
			</form>
				<?php
			} elseif($action == 'view') {
				?>
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Jeu</h4>
			
			
			<div class="row">
				<div class="col-md-2">
					Statut
				</div>
				<div class="col-md-10">
					<?php echo $object->get_status(1); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Libellé court
				</div>
				<div class="col-md-10">
					<?php echo $object->ref; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Libellé
				</div>
				<div class="col-md-10">
					<?php echo $object->libelle; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Plateforme
				</div>
				<div class="col-md-10">
					<?php echo $object->type->get_nomurl(); ?>
				</div>
			</div>			
			
			<div class="row"><hr/></div>
			<h4>Suivi</h4>
				
			<div class="row">
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Date création
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->datec; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Créé par
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->get_createby(); ?>
        				</div>
        			</div>
    			</div>
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Dernière modification
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->tms; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Modifié par
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->get_editby(); ?>
        				</div>
        			</div>
    			</div>
			</div>
			
			<div class="row pt15">
				<div class="col-md-12 text-right">
					<a class="btn btn-primary" href="?action=edit&id=<?php echo $id; ?>">Modifier</a>
					<?php if(!empty($id)): ?>
					<a class="btn btn-danger" href="?action=delete&id=<?php echo $id; ?>">Supprimer</a>
					<?php endif; ?>
				</div>
			</div>
		<?php
			}
		?>
		</div>
	</div>
	<div class="clear"></div>
</div>