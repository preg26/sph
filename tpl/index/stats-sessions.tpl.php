			<!-- Stats sessions -->
			<div class="row">
    			<!-- 5 sessions full -->
    			<div class="col-md-4">
    				<div class="titre">
    					<h2>5 Sessions Pleines</h2>
    				</div>
    				<?php 
    				if(!empty($TFullSessions)) {
    				    $i=0;
    				    ?>
    				<div class="table">
    				    <?php 
    				    foreach($TFullSessions as $session) {
    				        if($i>4) continue;
    				        ?>
        				<div class="ligne">
        					<div class="col-md-10 nopad">
        						<?php echo $session->get_nomurl(); ?> - <?php echo $session->jour.' ('.$session->heure_deb.' - '.$session->heure_fin.')'; ?>
    						</div>
        					<div class="col-md-2 nopad text-right">
        						<?php echo $session->get_badge_places(); ?>
        					</div>
        					<div class="clear"></div>
        				</div>
    				        <?php 
    				        $i++;
    				    }
    				    ?>
				    </div>
    				    <?php
    				}
    				?>
    			</div>
    			
    			<!-- 5 sessions not full -->
    			<div class="col-md-4">
    				<div class="titre">
    					<h2>5 Sessions non Pleines</h2>
    				</div>
    				<?php 
    				if(!empty($TNotFullSessions)) {
    				    $i=0;
    				    ?>
    				<div class="table">
    				    <?php 
    				    foreach($TNotFullSessions as $session) {
    				        if($i>4) continue;
    				        ?>
        				<div class="ligne">
        					<div class="col-md-10 nopad">
        						<?php echo $session->get_nomurl(); ?> - <?php echo $session->jour.' ('.$session->heure_deb.' - '.$session->heure_fin.')'; ?>
    						</div>
        					<div class="col-md-2 nopad text-right">
        						<?php echo $session->get_badge_places(); ?>
        					</div>
        					<div class="clear"></div>
        				</div>
    				        <?php 
    				        $i++;
    				    }
    				    ?>
				    </div>
    				    <?php
    				}
    				?>
    			</div>
    			
    			<!-- 5 sessions empty -->
    			<div class="col-md-4">
    				<div class="titre">
    					<h2>5 Sessions Vides</h2>
    				</div>
    				<?php 
    				if(!empty($TEmptySessions)) {
    				    $i=0;
    				    ?>
    				<div class="table">
    				    <?php 
    				    foreach($TEmptySessions as $session) {
    				        if($i>4) continue;
    				        ?>
        				<div class="ligne">
        					<div class="col-md-10 nopad">
        						<?php echo $session->get_nomurl(); ?> - <?php echo $session->jour.' ('.$session->heure_deb.' - '.$session->heure_fin.')'; ?>
    						</div>
        					<div class="col-md-2 nopad text-right">
        						<?php echo $session->get_badge_places(); ?>
        					</div>
        					<div class="clear"></div>
        				</div>
    				        <?php 
    				        $i++;
    				    }
    				    ?>
				    </div>
    				    <?php
    				}
    				?>
    			</div>
    			
			</div>
		