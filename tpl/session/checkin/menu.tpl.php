<div class="col-md-2">
	<div class="navbar-left col-md-2 pt15" id="page-sidebar">
		<h4>Gestion des sessions</h4>
		<ul class="nav nav-pills nav-stacked">
			<li>
				<a href="?action=new"> <span class="glyphicon glyphicon-plus"></span>
					Nouvelle session
					<div class="clear"></div>
				</a>
			</li>
			<li>
				<a href="?action=list"> <span class="glyphicon glyphicon-list"></span>
					Liste des sessions
					<div class="clear"></div>
				</a>
			</li>

			<li>
				<ul class="nav nav-stacked" style="margin-left:25px;">
					<?php foreach($TJeu as $jeu): ?>
					<li <?php if($jeu->rowid == GETPOST('jeu')) echo 'class="active"'; ?>>
						<a href="?action=list&jeu=<?php echo $jeu->rowid; ?>">
    						<span class="glyphicon glyphicon-play pl"></span>
    						<?php echo $jeu->ref; ?> (<?php echo $jeu->type->libelle; ?>)
    						<div class="clear"></div>
						</a>
					</li>
					<?php endforeach;?>
				</ul>
			</li>
		</ul>
	</div>
</div>