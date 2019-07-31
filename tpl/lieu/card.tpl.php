
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		    if($action == 'new') {
		?>
			<h4>Nouveau lieu</h4>
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
						<label for="address">Adresse</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="address" id="address" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="zip">Code postal</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="zip" id="zip" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="town">Ville</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="town" id="town" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="country">Pays</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="country" id="country" value="France" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="office_phone">Téléphone de contact</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="office_phone" id="office_phone" />
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
			<h4>Modification d'un lieu</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="libelle">Libellé</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="libelle" id="libelle" value="<?php echo $object->libelle;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="address">Adresse</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="address" id="address" value="<?php echo $object->address;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="zip">Code postal</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="zip" id="zip" value="<?php echo $object->zip;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="town">Ville</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="town" id="town" value="<?php echo $object->town;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="country">Pays</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="country" id="country" value="<?php echo $object->country;?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="office_phone">Téléphone de contact</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="office_phone" id="office_phone" value="<?php echo $object->office_phone;?>" />
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
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Lieu</h4>
			<div class="row">
				<div class="col-md-2">
					Libellé
				</div>
				<div class="col-md-10">
					<?php echo $object->libelle;?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Adresse
				</div>
				<div class="col-md-10">
					<?php echo $object->address;?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Code postal
				</div>
				<div class="col-md-10">
					<?php echo $object->zip;?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Ville
				</div>
				<div class="col-md-10">
					<?php echo $object->town;?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Pays
				</div>
				<div class="col-md-10">
					<?php echo $object->country;?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Téléphone de contact
				</div>
				<div class="col-md-10">
					<?php echo $object->office_phone;?>
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
					<?php echo $object->fk_user_creat; ?>
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
					<?php echo $object->fk_user_modif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Statut
				</div>
				<div class="col-md-10">
					<?php echo $object->statut; ?>
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