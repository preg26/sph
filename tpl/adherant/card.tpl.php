
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		    if($action == 'new') {
		?>
			<h4>Nouvel Adhérent</h4>
			<form method="post" action="">
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="sex">Genre</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="sex" id="sex">
							<option value="male">Homme</option>
							<option value="female">Femme</option>
							<option value="other">Autre</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="firstname">Prénom</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="firstname" id="firstname" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="lastname">Nom</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="lastname" id="lastname" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="email">Email</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="email" name="email" id="email" />
					</div>
				</div>
				
				<div class="row"><hr/></div>
				<h4>Informations sur sa situation Actuelle</h4>
				
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
						<label for="zip">Code Postal</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="zip" id="zip" placeholder="exemple : 26000" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="town">Ville</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="town" id="town" placeholder="exemple : Valence"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="country">Pays</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="country" id="country" placeholder="exemple : France" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="phone">Téléphone</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="phone" id="phone" placeholder="exemple : 0708091011" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="job">Secteur d'activité</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="job" id="job" placeholder="exemple : Etudiant ou Demandeur d'emploi" />
					</div>
				</div>
				
				<div class="row"><hr/></div>
				<h4>Informations sur sa Naissance</h4>
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_date">Date de naissance</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="date" name="birth_date" id="birth_date" />
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_address">Adresse</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_address" id="birth_address" />
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_zip">Code Postal</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_zip" id="birth_zip" placeholder="exemple : 75000" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_town">Ville</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_town" id="birth_town" placeholder="exemple : Paris" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_country">Pays</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_country" id="birth_country" placeholder="exemple : France" />
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
			<h4>Modification d'un adhérent</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="sex">Genre</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="sex" id="sex">
							<option value="male" <?php if($object->sex == "male") echo 'selected="selected"'; ?>>Homme</option>
							<option value="female" <?php if($object->sex == "female") echo 'selected="selected"'; ?>>Femme</option>
							<option value="other" <?php if($object->sex == "other") echo 'selected="selected"'; ?>>Autre</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="firstname">Prénom</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="firstname" id="firstname" value="<?php echo $object->firstname; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="lastname">Nom</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="lastname" id="lastname" value="<?php echo $object->lastname; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="email">Email</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="email" name="email" id="email" value="<?php echo $object->email; ?>" />
					</div>
				</div>
				
				<div class="row"><hr/></div>
				<h4>Informations sur sa situation Actuelle</h4>
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="address">Adresse</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="address" id="address" value="<?php echo $object->address; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="zip">Code Postal</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="zip" id="zip" placeholder="exemple : 26000" value="<?php echo $object->zip; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="town">Ville</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="town" id="town" placeholder="exemple : Valence" value="<?php echo $object->town; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="country">Pays</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="country" id="country" placeholder="exemple : France" value="<?php echo $object->country; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="phone">Téléphone</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="phone" id="phone" placeholder="exemple : 0708091011" value="<?php echo $object->phone; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="job">Secteur d'activité</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="job" id="job" placeholder="exemple : Etudiant ou Demandeur d'emploi" value="<?php echo $object->job; ?>" />
					</div>
				</div>
				
				<div class="row"><hr/></div>
				<h4>Informations sur sa Naissance</h4>
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_date">Date de naissance</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="date" name="birth_date" id="birth_date" value="<?php echo $object->birth_date; ?>" />
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_address">Adresse</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_address" id="birth_address" value="<?php echo $object->birth_address; ?>" />
					</div>
				</div> -->
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_zip">Code Postal</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_zip" id="birth_zip" placeholder="exemple : 75000" value="<?php echo $object->birth_zip; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_town">Ville</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_town" id="birth_town" placeholder="exemple : Paris" value="<?php echo $object->birth_town; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="birth_country">Pays</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="text" name="birth_country" id="birth_country" placeholder="exemple : France" value="<?php echo $object->birth_country; ?>" />
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
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Adhérant</h4>
			
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
					Genre
				</div>
				<div class="col-md-10">
					<?php echo $object->sex; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Prénom
				</div>
				<div class="col-md-10">
					<?php echo $object->firstname; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Nom
				</div>
				<div class="col-md-10">
					<?php echo $object->lastname; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					Email
				</div>
				<div class="col-md-10">
					<?php echo $object->email; ?>
				</div>
			</div>
			
			<div class="row"><hr/></div>
			<h4>Informations sur sa situation Actuelle</h4>
			
			<div class="row">
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Adresse
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->address; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Code Postal
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->zip; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Ville
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->town; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Pays
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->country; ?>
        				</div>
        			</div>
    			</div>
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Téléphone
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->phone; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Secteur d'activité
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->job; ?>
        				</div>
        			</div>
    			</div>
			</div>
			
			<div class="row"><hr/></div>
			<h4>Informations sur sa Naissance</h4>
			
			<div class="row">
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Date de naissance
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->birth_date; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Pays
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->birth_country; ?>
        				</div>
        			</div>
    			</div>
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Code Postal
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->birth_zip; ?>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-4">
        					Ville
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->birth_town; ?>
        				</div>
        			</div>
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
					<?php if($object->statut == 0): ?>
					<a class="btn btn-success" href="?action=valid&id=<?php echo $id; ?>">Valider</a>
					<?php 
					endif;
					if($object->statut == 1): 
					?>
					<a class="btn btn-success" href="?action=paid&id=<?php echo $id; ?>">Classer payé</a>
					<?php endif; ?>
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