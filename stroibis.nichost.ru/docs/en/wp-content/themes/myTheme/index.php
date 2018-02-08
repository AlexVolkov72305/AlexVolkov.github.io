<? get_header();?>
<div class="do-order-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>To send an order, fill out your telephone number, and our manager will contact you as soon as possible.</p>
			</div>
			<div class="col-md-6">
				<form id="contact-inline" action="../mail.php" method="post" class="form-inline">
				 	<div id="note-inline"></div>
	                <div id="fields-inline">
	                    <input type="hidden" name="sub" value="New message">
	                    <div class="form-group has-feedback">
	                        <input type="text" name="username" class="form-control" placeholder="Name">
	                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	                    </div>
	                    <div class="form-group has-feedback">
	                        <input type="text" name="phone" id="phone-inline" class="form-control" placeholder="Phone">
	                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	                    </div>
	                    <input type="submit" class="btn_submit-inline disabled white-btn" value="Request a call back" />
	                </div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="services-bg" id="f1">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Our services</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3>Packaging</h3>
				<ul>
					<li>Re-packaging</li>
					<li>Shrink wrapping pallets</li>
					<li>Packaging piece-goods</li>
					<li>Packaging any groupped products of various sizes</li>
					<li>Packaging bulk products from 0.5 kg to 1 000 kg.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Pre-packing</h3>
				<ul>
					<li>Packaging of fodder, herbs, seeds</li>
					<li>Filling in tube</li>
					<li>Mobile packaging</li>
					<li>Automatic packaging all bulk solids into 3 seam bags (with and without a logo) from 500 g to 5 kg. </li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Other services</h3>
				<ul>
					<li>Mixing bulk materials</li>
					<li>Tableting metal powders and inorganic chemicals</li>
					<li>Capable of accepting products in amount of wagons, containers, provide loading and unloading services, storage </li>
					<li>Packing in the box and applying the date and other information on it</li>
					<li>Industrial drying of bulk materials</li>
					<li>Barcode sticking on single and group packages</li>
				</ul>
			</div>
		</div>
		<div class="row calculate-box">
			<div class="col-md-12">
				<p>Fill out a form indicating the services you need, and we will calculate the price and give you a call</p>
				<a href="/en/zayavka-na-fasovku" class="calculate-box-btn">Calculate the price</a>
			</div>
		</div>
	</div>
</div>
	
<div class="price-list-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Price list</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="price-box price-bg">
					<p>Dry materials packaging</p>
					<table class="table">
						<tr>
							<td><strong>1-5 kg</strong></td>
							<td>350 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>5-24 kg</strong></td>
							<td>450 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>25 kg</strong></td>
							<td>500 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>1000 kg</strong></td>
							<td>550 <i class="fa fa-rub"></i></td>
						</tr>
					</table>
					<p>Prices include VAT rubles / tonne</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="price-box">
					<p>Prices for other services</p>
					<table class="table">
						<tr>
							<td><strong>Material crushing</strong></td>
							<td>200 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>
Mixing materials (two or more components)</strong></td>
							<td>150 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>Tabletting any powder from 0.2 to 2</strong></td>
							<td>350 <i class="fa fa-rub"></i></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="example-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Our works</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Group packaging into environmental film with sticking on labels</p>
					<img src="<?= get_template_directory_uri();?>/img/example-1.png" class="img-responsive" alt="Group packaging into environmental film with sticking on labels">
					<div class="info">
						<div>
							<p class="main-title">Group packaging into environmental film with sticking on labels</p>
							<p class="main-descr">It is possible to pack material into polypropylene, polyethylene, heat-sealable, multilayer film. We also produce euro-slot.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Packaging into film with labeling</p>
					<img src="<?= get_template_directory_uri();?>/img/example-2.png" class="img-responsive" alt="Packaging into film with labeling">
					<div class="info">
						<div>
							<p class="main-title">Packaging into film with labeling</p>
							<p class="main-descr">It is possible to pack material into polypropylene, polyethylene, heat-sealable, multilayer film. We also produce euro-slot.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Group packaging into environmental film with sticking on labels</p>
					<img src="<?= get_template_directory_uri();?>/img/example-3.png" class="img-responsive" alt="Group packaging into environmental film with sticking on labels">
					<div class="info">
						<div>
							<p class="main-title">Group packaging into environmental film with sticking on labels</p>
							<p class="main-descr">It is possible to pack material into polypropylene, polyethylene, heat-sealable, multilayer film. We also produce euro-slot.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">ТThermocontracting with a leaflet under film</p>
					<img src="<?= get_template_directory_uri();?>/img/example-4.png" class="img-responsive" alt="Thermocontracting with a leaflet under film">
					<div class="info">
						<div>
							<p class="main-title">Thermocontracting with a leaflet under film</p>
							<p class="main-descr">It is possible to pack material into polypropylene, polyethylene, heat-sealable, multilayer film. We also produce euro-slot.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row calculate-box">
			<div class="col-md-12">
				<p>Please leave your contact details and we will call you back and choose a package for your product.</p>
				<a href="#" class="calculate-box-btn" data-toggle="modal" data-target="#myModal">Send request</a>
			</div>
		</div>
	</div>
</div>

<div class="reason-bg" id="f2">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Reasons to work with us</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="list-unstyled">
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-1.png" alt="Great experience in packaging different nonfood products">
						<p>Great experience in packaging different nonfood products</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-2.png" alt="Minimum prices">
						<p>Minimum prices</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-3.png" alt="Fast performance of packaging works ">
						<p>Fast performance of packaging works </p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-4.png" alt="Big stock of packing machines">
						<p>Big stock of packing machines</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-5.png" alt="We have packed more than 500,000 tons">
						<p>We have packed more than 500,000 tons</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-6.png" alt="Laboratory controlling raw material and final product">
						<p>Laboratory controlling raw material and final product</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-7.png" alt="Delivery to the customer">
						<p>Delivery to the customer</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-8.png" alt="Own production">
						<p>Own production</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-9.png" alt="People recommend us!">
						<p>People recommend us!</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-10.png" alt="We develop packaging">
						<p>We develop packaging</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<a href="/en/zayavka-na-fasovku" class="calculate-box-btn">Order packaging</a>
			</div>
		</div>
	</div>
</div>

<div class="equipment-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Our equipment</p>
				<div class="separator"></div>
			</div>
		</div>

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<?
					$params = array(
				    	'cat' => 3,
						'posts_per_page' => 999
					);

				    $q = new WP_Query($params);
					while($q->have_posts()){$q->the_post();
				?>
					<div class="item">
						<div class="row">
							<div class="col-md-6">
								<?the_post_thumbnail('', array('class' => "img-responsive",));?>
							</div>
							<div class="col-md-6">
								<p><strong><?the_title();?></strong></p>
								<?the_content();?>
							</div>
						</div>
					</div>
				<?}wp_reset_postdata();?>

				<!-- Controls -->
				<div class="controls">
					<!-- Indicators -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    	<i class="fa fa-chevron-left"></i>
					</a>
					<ol class="carousel-indicators">
						<?
						for ($i = 0; $i <= get_category(3)->category_count; $i++) {
						    echo "<li data-target='#carousel-example-generic' data-slide-to='$i'></li>";
						}
						?>
					</ol>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    	<i class="fa fa-chevron-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="reviews-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Client feedback</p>
				<div class="separator"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="list-unstyled">
					<?
						$params = array(
			            	'cat' => 2,
			        		'posts_per_page' => 999
			        	);

			            $q = new WP_Query($params);
		    			while($q->have_posts()){$q->the_post();
			        ?>
						<li>
							<div>
								<p>
									<i class="fa fa-quote-left pull-left"></i><br>
									<span><?the_content();?></span><br>
									<i class="fa fa-quote-right pull-right"></i>
								</p>
								<div class="clearfix"></div>
							</div>
							<?the_post_thumbnail('', array('class' => "img-responsive img-circle",));?>
							<p><?the_title();?></p>
						</li>
					<?}wp_reset_postdata();?>
				</ul>
			</div>
		</div>
	</div>
</div>
<? get_footer();?>