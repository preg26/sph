<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-full">
		<div class="navbar-header">
		  <a class="navbar-brand nopad" href="#"><img alt="logo" src="img/logo.png" height="50px"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li<?php if($page->name == 'index') echo ' class="active"'; ?>><a href="./">Accueil</a></li>
				<li<?php if($page->name == 'adherent') echo ' class="active"'; ?>><a href="./adherent.php">Adhérents</a></li>
				<li<?php if($page->name == 'session') echo ' class="active"'; ?>><a href="./session.php">Sessions</a></li>
				<li<?php if($page->name == 'lieu') echo ' class="active"'; ?>><a href="./lieu.php">Lieux</a></li>
				<li<?php if($page->name == 'jeu') echo ' class="active"'; ?>><a href="./jeu.php">Jeux</a></li>
				<li<?php if($page->name == 'type') echo ' class="active"'; ?>><a href="./type.php">Types</a></li>
				<?php if (!empty($user->admin)) { ?>
				<li<?php if($page->name == 'periode') echo ' class="active"'; ?>><a href="./periode.php">Périodes</a></li>
				<li<?php if($page->name == 'user') echo ' class="active"'; ?>><a href="./user.php">Utilisateurs</a></li>
				<?php } ?>
			</ul>
			<div class="navbar-collapse collapse navbar-right mr10">
				<ul class="nav navbar-nav">
					<li><a href="./logout.php">Se déconnecter </a></li>
				</ul>
			</div>
		</div>
	</div>
</div>