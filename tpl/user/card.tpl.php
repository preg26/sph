
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		    if($action == 'new') {
		?>
			<h4>Nouvel utilisateur</h4>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="login">Login</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="login" id="login" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="email">Email</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="email" name="email" id="email" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="firstname">Prénom</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="firstname" id="firstname" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="lastname">Nom</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="lastname" id="lastname" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="pass_crypted">Password</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="password" name="pass_crypted" id="pass_crypted" value="" />
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
					<div class="col-md-1 text-right">
						<label for="login">Login</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="login" id="login" value="<?php echo $object->login; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="email">Email</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="email" name="email" id="email" value="<?php echo $object->email; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="firstname">Prénom</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="firstname" id="firstname" value="<?php echo $object->firstname; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="lastname">Nom</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="text" name="lastname" id="lastname" value="<?php echo $object->lastname; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 text-right">
						<label for="pass_crypted">Password</label>
					</div>
					<div class="col-md-11 full-input">
						<input type="password" name="pass_crypted" id="pass_crypted" value="" />
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
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Utilisateur</h4>
			
			<div class="row">
				<div class="col-md-6">
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
        					Login
        				</div>
        				<div class="col-md-10">
        					<?php echo $object->login; ?>
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
    			</div>
				<div class="col-md-6">
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