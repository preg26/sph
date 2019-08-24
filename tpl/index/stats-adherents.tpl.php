                <!-- Stats adhérents -->
    			<div class="row">
    			
					<!-- 5 nouveaux Adhérents -->
        			<div class="col-xl-2 col-md-4 mb-3">
        				<div class="titre">
        					<h2>5 Nouveaux Adhérents</h2>
        				</div>
        				<?php 
        				if(!empty($TNewAdherents)) {
        				    $i=0;
        				?>   
        				<div class="table">
        				    <?php 
        				    foreach($TNewAdherents as $adherent) {
        				        if($i>4) continue;
        				        ?>
            				<div class="ligne">
            					<div class="col-md-8 nopad">
            						<?php echo $adherent->get_nomurl(); ?>
        						</div>
            					<div class="col-md-4 nopad text-right">
            						<?php echo $adherent->get_status(); ?>
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
        			
        			<!-- 5 derniers Adhérents -->
        			<div class="col-xl-2 col-md-4 mb-3">
        				<div class="titre">
        					<h2>5 Derniers Adhérents</h2>
        				</div>
        				<?php 
        				if(!empty($TLastAdherents)) {
        				    $i=0;
        				?>
        				<div class="table">
        				    <?php 
        				    foreach($TLastAdherents as $adherent) {
        				        if($i>4) continue;
        				        ?>
            				<div class="ligne">
            					<div class="col-md-8 nopad">
            						<?php echo $adherent->get_nomurl(); ?>
        						</div>
            					<div class="col-md-4 nopad text-right">
            						<?php echo $adherent->get_status(); ?>
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
        			
					<!-- 5 impayés Adhérents -->
        			<div class="col-xl-2 col-md-4 mb-3">
        				<div class="titre">
        					<h2>5 Adhésions Impayées</h2>
        				</div>
        				<?php 
        				if(!empty($TNotPaidAdherents)) {
        				    $i=0;
        				?>
        				<div class="table">
        				    <?php 
        				    foreach($TNotPaidAdherents as $adherent) {
        				        if($i>4) continue;
        				        ?>
            				<div class="ligne">
            					<div class="col-md-8 nopad">
            						<?php echo $adherent->get_nomurl(); ?>
        						</div>
            					<div class="col-md-4 nopad text-right">
            						<?php echo $adherent->get_status(); ?>
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
			