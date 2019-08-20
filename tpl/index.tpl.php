<div class="container-full mt50">
	
	<div class="col-md-12 pt15">
		<div class="col-md-12">
			<h1><span class="glyphicon glyphicon-dashboard"></span> Tableau de bord</h1>
						
			<!-- Stats -->
			<div class="row">
    			<div class="col-xl-3 col-md-6 mb-4 pt15">
        			<div class="row">	
        				<div class="col-xl-3 col-md-6 mb-4">
        					<div class="card border-left-success p5">
                            	<div class="card-body p5">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <div class="text-info text-uppercase">Recettes</div>
                                            <div class="">10 000,00 €</div>
                                        </div>
                                        <div class="col-md-2 p5">
        									<span class="glyphicon glyphicon-eur" style="font-size:25px"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        			
        				<div class="col-xl-3 col-md-6 mb-4">
        					<div class="card border-left-success p5">
                            	<div class="card-body p5">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <div class="text-danger text-uppercase">Dépenses Salle</div>
                                            <div class="text-danger">- 8 000,00 €</div>
                                        </div>
                                        <div class="col-md-2 p5">
        									<span class="glyphicon glyphicon-home" style="font-size:25px"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        			<div class="row">
        				<div class="col-xl-3 col-md-6 mb-4">
        					<div class="card border-left-success p5">
                            	<div class="card-body p5">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <div class="text-info text-uppercase">Nombre d'Adhérents</div>
                                            <div class="">n/c</div>
                                        </div>
                                        <div class="col-md-2 p5">
        									<span class="glyphicon glyphicon-user" style="font-size:25px"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        			
        				<div class="col-xl-3 col-md-6 mb-4">
        					<div class="card border-left-success p5">
                            	<div class="card-body p5">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <div class="text-info text-uppercase">Nombre de Coachs</div>
                                            <div class="">n/c</div>
                                        </div>
                                        <div class="col-md-2 p5">
        									<span class="glyphicon glyphicon-education" style="font-size:25px"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
    			<div class="col-xl-3 col-md-6 mb-4">
        			<!-- 5 derniers Adhérents -->
        			<div class="col-md-6">
        				<div class="titre">
        					<h2>5 derniers Adhérents</h2>
        				</div>
        				<div class="table">
        				<?php 
        				if(!empty($TLastAdherents)) {
        				    $i=0;
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
        				}
        				?>
        				</div>
        			</div>
        			
					<!-- 5 impayés Adhérents -->
        			<div class="col-md-6">
        				<div class="titre">
        					<h2>5 Adhésions impayées</h2>
        				</div>
        				<div class="table">
        				<?php 
        				if(!empty($TNotPaidAdherents)) {
        				    $i=0;
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
        				}
        				?>
        				</div>
        			</div>
    			</div>
			</div>
			
			<hr class="m15">
			
			<div class="row">
    			<!-- 5 sessions full -->
    			<div class="col-md-4">
    				<div class="titre">
    					<h2>5 sessions pleines</h2>
    				</div>
    				<div class="table">
    				<?php 
    				if(!empty($TFullSessions)) {
    				    $i=0;
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
    				}
    				?>
    				</div>
    			</div>
    			
    			<!-- 5 sessions not full -->
    			<div class="col-md-4">
    				<div class="titre">
    					<h2>5 sessions non pleines</h2>
    				</div>
    				<div class="table">
    				<?php 
    				if(!empty($TNotFullSessions)) {
    				    $i=0;
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
    				}
    				?>
    				</div>
    			</div>
    			
    			<!-- 5 sessions empty -->
    			<div class="col-md-4">
    				<div class="titre">
    					<h2>5 sessions vides</h2>
    				</div>
    				<div class="table">
    				<?php 
    				if(!empty($TEmptySessions)) {
    				    $i=0;
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
    				}
    				?>
    				</div>
    			</div>
			</div>
		
		</div>
	</div>
</div>