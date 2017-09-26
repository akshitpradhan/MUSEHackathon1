<!-- href links different in integration, collaspe in class added server side in integration --> 
		<!-- sidebar --> 
		<div id="sidebar" class="sidebar-toggle">
			<ul class="nav nav-sidebar">
					
					<li role="separator" class="divider"></li>
				
					<!-- chart types -->
					<li data-toggle="collapse" href="#chart-types" aria-expanded="true" aria-controls="chart-types">
						<a href="#"> 
							<i class="fa fa-area-chart" aria-hidden="true"></i><span>ANALYTICS</span>
						</a>
					</li>

					<li>
						<ul id="chart-types" class="sub-menu collapse">
							<li><a href="/chart-types/products.php">Top Selling Products</a></li>
							<li><a href="/chart-types/stores.php">Top Selling Stores</a></li>
							<li><a href="/chart-types/ps.php">Sale of Product per store</a></li>
							<li><a href="/chart-types/ms.php">Monthly Sale of Products</a></li>
							</ul>
					</li>
					<!-- /chart types -->

					<li role="separator" class="divider"></li>

					<!--  features -->
					<li data-toggle="collapse" href="#features" aria-expanded="false" aria-controls="features">
						<a href="#">
							<i class="fa fa-flask" aria-hidden="true"></i>
							<span>PREDICTION</span>
						</a>
					</li>

					<li>
						<ul id="features" class="sub-menu collapse">
                            <li><a href="/features/prediction.php">Predicted Demand of Product</a></li>
						</ul>
					</li>
					<!--  /features -->

					<li role="separator" class="divider"></li>

					<li role="separator" class="divider"></li>
			</ul>
		</div>
		<!-- /sidebar -->