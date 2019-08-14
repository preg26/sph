
<div class="container-full mt50">
	<?php 
	   include 'menu.tpl.php';
	?>
	<div class="col-md-10 pt15">
		<div class="col-md-12">
		<?php 
		    if($action == 'new') {
		?>
			<h4>Nouvelle session</h4>
			<form method="post" action="">
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="jour">Jour</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="jour" id="jour">
							<?php foreach($TDays as $day): ?>
							<option value="<?php echo $day; ?>"><?php echo $day; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="heure_deb">Horaire de début</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="heure_deb" id="heure_deb">
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							<option value="19:00">19:00</option>
							<option value="19:30">19:30</option>
							<option value="20:00">20:00</option>
							<option value="20:30">20:30</option>
							<option value="21:00">21:00</option>
							<option value="21:30">21:30</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="heure_fin">Horaire de fin</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="heure_fin" id="heure_fin">
							<option value="18:30">18:30</option>
							<option value="19:00">19:00</option>
							<option value="19:30">19:30</option>
							<option value="20:00">20:00</option>
							<option value="20:30">20:30</option>
							<option value="21:00">21:00</option>
							<option value="21:30">21:30</option>
							<option value="22:00">22:00</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="nb_places">Nombre de places</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="number" min="1" max="100" name="nb_places" id="nb_places" />
					</div>
				</div>
				
				<div class="row"><hr/></div>
				<h4>Autres informations</h4>
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="fk_lieu">Lieu</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="fk_lieu" id="fk_lieu">
    						<?php foreach($TLieu as $item): ?>
    						<option value="<?php echo $item->rowid; ?>"><?php echo $item->libelle; ?></option>
    						<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="fk_jeu">Jeu</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="fk_jeu" id="fk_jeu">
    						<?php foreach($TJeu as $item): ?>
    						<option value="<?php echo $item->rowid; ?>"><?php echo $item->libelle; ?></option>
    						<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="fk_periode">Période</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="fk_periode" id="fk_periode">
    						<?php foreach($TPeriode as $item): ?>
    						<option value="<?php echo $item->rowid; ?>"><?php echo $item->libelle; ?></option>
    						<?php endforeach; ?>
						</select>
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
			<h4>Modification d'une session</h4>
			<form method="post" action="">
			
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="jour">Jour</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="jour" id="jour">
							<?php foreach($TDays as $day): ?>
							<option value="<?php echo $day; ?>" <?php if($object->jour == $day) echo 'selected="selected"'; ?>><?php echo $day; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="heure_deb">Horaire de début</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="heure_deb" id="heure_deb">
							<option value="18:00" <?php if($object->heure_deb == '18:00') echo 'selected="selected"'; ?>>18:00</option>
							<option value="18:30" <?php if($object->heure_deb == '18:30') echo 'selected="selected"'; ?>>18:30</option>
							<option value="19:00" <?php if($object->heure_deb == '19:00') echo 'selected="selected"'; ?>>19:00</option>
							<option value="19:30" <?php if($object->heure_deb == '19:30') echo 'selected="selected"'; ?>>19:30</option>
							<option value="20:00" <?php if($object->heure_deb == '20:00') echo 'selected="selected"'; ?>>20:00</option>
							<option value="20:30" <?php if($object->heure_deb == '20:30') echo 'selected="selected"'; ?>>20:30</option>
							<option value="21:00" <?php if($object->heure_deb == '21:00') echo 'selected="selected"'; ?>>21:00</option>
							<option value="21:30" <?php if($object->heure_deb == '21:30') echo 'selected="selected"'; ?>>21:30</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="heure_fin">Horaire de fin</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="heure_fin" id="heure_fin">
							<option value="18:30" <?php if($object->heure_fin == '18:30') echo 'selected="selected"'; ?>>18:30</option>
							<option value="19:00" <?php if($object->heure_fin == '19:00') echo 'selected="selected"'; ?>>19:00</option>
							<option value="19:30" <?php if($object->heure_fin == '19:30') echo 'selected="selected"'; ?>>19:30</option>
							<option value="20:00" <?php if($object->heure_fin == '20:00') echo 'selected="selected"'; ?>>20:00</option>
							<option value="20:30" <?php if($object->heure_fin == '20:30') echo 'selected="selected"'; ?>>20:30</option>
							<option value="21:00" <?php if($object->heure_fin == '21:00') echo 'selected="selected"'; ?>>21:00</option>
							<option value="21:30" <?php if($object->heure_fin == '21:30') echo 'selected="selected"'; ?>>21:30</option>
							<option value="22:00" <?php if($object->heure_fin == '22:00') echo 'selected="selected"'; ?>>22:00</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="nb_places">Nombre de places</label>
					</div>
					<div class="col-md-10 full-input">
						<input type="number" min="1" max="100" name="nb_places" id="nb_places" value="<?php echo $object->nb_places; ?>" />
					</div>
				</div>
				
				<div class="row"><hr/></div>
				<h4>Autres informations</h4>
				
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="fk_lieu">Lieu</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="fk_lieu" id="fk_lieu">
    						<?php foreach($TLieu as $item): ?>
    						<option value="<?php echo $item->rowid; ?>" <?php if($object->fk_lieu == $item->rowid) echo 'selected="selected"'; ?>><?php echo $item->libelle; ?></option>
    						<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="fk_jeu">Jeu</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="fk_jeu" id="fk_jeu">
    						<?php foreach($TJeu as $item): ?>
    						<option value="<?php echo $item->rowid; ?>" <?php if($object->fk_jeu == $item->rowid) echo 'selected="selected"'; ?>><?php echo $item->libelle; ?></option>
    						<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 text-right">
						<label for="fk_periode">Période</label>
					</div>
					<div class="col-md-10 full-input">
						<select name="fk_periode" id="fk_periode">
    						<?php foreach($TPeriode as $item): ?>
    						<option value="<?php echo $item->rowid; ?>" <?php if($object->fk_periode == $item->rowid) echo 'selected="selected"'; ?>><?php echo $item->libelle; ?></option>
    						<?php endforeach; ?>
						</select>
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
			<h4><span class="glyphicon <?php echo $object->picto;?>"></span> Fiche Session</h4>
			
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Nom
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->get_nomurl(); ?>
    				</div>
				</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Places restantes
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->get_badge_places(); ?>
    				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Nombre de places
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->nb_places; ?>
    				</div>
				</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Jour
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->jour; ?>
    				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
    				<div class="col-md-4">
    					Horaire de début
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->heure_deb; ?>
    				</div>
				</div>
				<div class="col-md-6">
    				<div class="col-md-4">
    					Horaire de fin
    				</div>
    				<div class="col-md-8">
    					<?php echo $object->heure_fin; ?>
    				</div>
				</div>
			</div>
			
			<div class="row"><hr/></div>
			<h4>Autres informations</h4>
			
			<div class="row">
				<div class="col-md-2">
					Jeu
				</div>
				<div class="col-md-10">
					<?php echo $object->jeu->get_nomurl(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Période
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->periode->get_nomurl(); ?>
        				</div>
        			</div>
    			</div>
				<div class="col-md-6">
        			<div class="row">
        				<div class="col-md-4">
        					Lieu
        				</div>
        				<div class="col-md-8">
        					<?php echo $object->lieu->get_nomurl(); ?>
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
		include 'list_coachs.tpl.php';
		include 'list_adherants.tpl.php';
			}
		?>
		</div>
	</div>
	<div class="clear"></div>
</div>