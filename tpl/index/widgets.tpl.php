						
			<!-- Stats widgets -->
			<div class="row">
                
				<div class="col-xl-2 col-md-4 mb-3">
					<div class="card border-left-success p5">
                    	<div class="card-body p5">
                            <div class="row align-items-center">
                                <div class="col-md-10">
                                    <div class="text-info text-uppercase">Recettes</div>
                                    <div class=""><?php echo number_format((count($TAdherents) * 200), 2, ',', ' '); ?> €</div>
                                </div>
                                <div class="col-md-2 p5">
									<span class="glyphicon glyphicon-gift" style="font-size:25px"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			
				<div class="col-xl-2 col-md-4 mb-3">
					<div class="card border-left-success p5">
                    	<div class="card-body p5">
                            <div class="row align-items-center">
                                <div class="col-md-10">
                                    <div class="text-info text-uppercase">Nombre de Coachs</div>
                                    <div class=""><?php echo count($TCoachs); ?></div>
                                </div>
                                <div class="col-md-2 p5">
									<span class="glyphicon glyphicon-education" style="font-size:25px"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
				<div class="col-xl-2 col-md-4 mb-3">
					<div class="card border-left-success p5">
                    	<div class="card-body p5">
                            <div class="row align-items-center">
                                <div class="col-md-10">
                                    <div class="text-info text-uppercase">Nombre de Sessions</div>
                                    <div class=""><?php echo count($TNotFullSessions) + count($TFullSessions) + count($TEmptySessions); ?></div>
                                </div>
                                <div class="col-md-2 p5">
									<span class="glyphicon glyphicon-book" style="font-size:25px"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div> <!-- Fin ligne 1 -->
            
			<div class="row">			
			
				<div class="col-xl-2 col-md-4 mb-3">
					<div class="card border-left-warning p5">
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
                
				<div class="col-xl-2 col-md-4 mb-3">
					<div class="card border-left-success p5">
                    	<div class="card-body p5">
                            <div class="row align-items-center">
                                <div class="col-md-10">
                                    <div class="text-info text-uppercase">Nombre d'Adhérents</div>
                                    <div class=""><?php echo count($TAdherents); ?></div>
                                </div>
                                <div class="col-md-2 p5">
									<span class="glyphicon glyphicon-user" style="font-size:25px"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
				<div class="col-xl-2 col-md-4 mb-3">
					<div class="card border-left-warning p5">
                    	<div class="card-body p5">
                            <div class="row align-items-center">
                                <div class="col-md-10">
                                    <div class="text-danger text-uppercase">Nombre de Sessions vides</div>
                                    <div class="text-danger"><?php echo count($TEmptySessions);?></div>
                                </div>
                                <div class="col-md-2 p5">
									<span class="glyphicon glyphicon-exclamation-sign" style="font-size:25px"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>