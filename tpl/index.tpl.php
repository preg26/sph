<div class="container-full mt50">
	
	<div class="col-md-12">
		<div class="col-md-12">
			<h1><span class="glyphicon glyphicon-dashboard"></span> Tableau de bord</h1>
			<?php 
                include 'tpl/index/widgets.tpl.php';
                echo '<div class="mt15">&nbsp;</div><hr class="mt30"/>';
                include 'tpl/index/stats-adherents.tpl.php';
                echo '<hr class="mt30"/>';
                include 'tpl/index/stats-sessions.tpl.php';
            ?>
		
		</div>
	</div>
</div>