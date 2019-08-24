
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		    if($action == 'new') {
		?>
			<h4>Nouvelle période</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="libelle">Libellé</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="libelle" id="libelle" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="date_deb">Date de début</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="date" name="date_deb" id="date_deb" value="<?php echo date('Y-m-d'); ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="date_fin">Date de fin</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="date" name="date_fin" id="date_fin" value="<?php echo date('Y-m-d', strtotime(' +1 year')); ?>" />
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
			<h4>Modification d'une période</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="libelle">Libellé</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="libelle" id="libelle" value="<?php echo $object->libelle; ?>"; />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="date_deb">Date de début</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="date" name="date_deb" id="date_deb" value="<?php echo date('Y-m-d', strtotime($object->date_deb)); ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="date_fin">Date de fin</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="date" name="date_fin" id="date_fin" value="<?php echo date('Y-m-d', strtotime($object->date_fin)); ?>" />
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
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Période</h4>
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
					Date création
				</div>
				<div class="col-md-10">
					<?php echo $object->datec; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Créé par
				</div>
				<div class="col-md-10">
					<?php echo $object->get_createby(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Dernière modification
				</div>
				<div class="col-md-10">
					<?php echo $object->tms; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Modifié par
				</div>
				<div class="col-md-10">
					<?php echo $object->get_editby(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Statut
				</div>
				<div class="col-md-10">
					<?php echo $object->get_status(1); ?>
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