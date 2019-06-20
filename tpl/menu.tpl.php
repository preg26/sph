<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-full">
		<div class="navbar-header">
		  <a class="navbar-brand nopad" href="#"><img alt="logo" src="img/logo.png" height="50px"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li<?php if($page->name == 'index') echo ' class="active"'; ?>><a href="./">Accueil</a></li>
				<li<?php if($page->name == 'adherant') echo ' class="active"'; ?>><a href="./adherant.php">Adhérants</a></li>
				<li<?php if($page->name == 'session') echo ' class="active"'; ?>><a href="./session.php">Sessions</a></li>
				<?php if (!empty($user->admin)) { ?>
				<li<?php if($page->name == 'lieu') echo ' class="active"'; ?>><a href="./lieu.php">Lieux</a></li>
				<li<?php if($page->name == 'type') echo ' class="active"'; ?>><a href="./type.php">Types</a></li>
				<li<?php if($page->name == 'annee') echo ' class="active"'; ?>><a href="./annee.php">Années</a></li>
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