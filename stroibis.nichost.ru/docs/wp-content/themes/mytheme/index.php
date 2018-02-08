<? get_header();?>
<div class="do-order-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>Для уточнения деталей заказа, укажите свой номер телефона, наш менеджер свяжется с вами в ближайшее время</p>
			</div>
			<div class="col-md-6">
				<form id="contact-inline" action="../mail.php" method="post" class="form-inline">
				 	<div id="note-inline"></div>
	                <div id="fields-inline">
	                    <input type="hidden" name="sub" value="Новое письмо">
	                    <div class="form-group has-feedback">
	                        <input type="text" name="username" class="form-control" placeholder="Имя">
	                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	                    </div>
	                    <div class="form-group has-feedback">
	                        <input type="text" name="phone" id="phone-inline" class="form-control" placeholder="Телефон">
	                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	                    </div>
	                    <input type="submit" class="btn_submit-inline disabled white-btn" value="Заказать звонок" />
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
				<p>Наши услуги</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3>Упаковка</h3>
				<ul>
					<li>Переупаковка товаров</li>
					<li>Упаковка паллет в стрейч-пленку</li>
					<li>Упаковка штучной продукции</li>
					<li>Упаковка любой групповой продукции различного объема</li>
					<li>Упаковка сыпучих продуктов от 0,5 кг до 1000 кг.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Фасовка</h3>
				<ul>
					<li>Фасовка кормов, трав, семян, удобрений</li>
					<li>Фасовка в тубы</li>
					<li>Мобильная фасовка</li>
					<li>Автоматическая фасовка в 3-х шовные пакеты (с логотипом и без) от 500 г. до 5 кг. любых сыпучих продуктов</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h3>Другие услуги</h3>
				<ul>
					<li>Смешивание сыпучих материалов</li>
					<li>Таблетирование металлических порошков и неорганической химии</li>
					<li>Приёмка вагонов, контейнеров, погрузка-разгрузка, хранение</li>
					<li>Укладка в коробку и нанесение на нее даты и другой информации</li>
					<li>Промышленная сушка сыпучих материалов</li>
					<li>Наклейка штрих-кодов на штучную и групповую упаковку</li>
				</ul>
			</div>
		</div>
		<div class="row calculate-box">
			<div class="col-md-12">
				<p>Вы можете заполнить форму с указанием нужных вам услуг, а мы рассчитаем их стоимость и перезвоним вам</p>
				<a href="/zayavka-na-fasovku" class="calculate-box-btn">Рассчитать стоимость</a>
			</div>
		</div>
	</div>
</div>
	
<div class="price-list-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Прайс-лист</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="price-box price-bg">
					<p>Фасовка сухих материалов</p>
					<table class="table">
						<tr>
							<td><strong>1-5 кг</strong></td>
							<td>350 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>5-24 кг</strong></td>
							<td>450 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>25 кг</strong></td>
							<td>500 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>1000 кг</strong></td>
							<td>550 <i class="fa fa-rub"></i></td>
						</tr>
					</table>
					<p>Цены с НДС руб/тонна</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="price-box">
					<p>Цены на другие услуги</p>
					<table class="table">
						<tr>
							<td><strong>Измельчение материала</strong></td>
							<td>200 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>Смешение материалов (2 и более компонентов)</strong></td>
							<td>150 <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><strong>Таблетирование любых порошков от 0,2 до 2 кг</strong></td>
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
				<p>Примеры наших работ</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Групповая упаковка в экологическую пленку с наклейкой этикетки</p>
					<img src="<?= get_template_directory_uri();?>/img/example-1.png" class="img-responsive" alt="Групповая упаковка в экологическую пленку с наклейкой этикетки">
					<div class="info">
						<div>
							<p class="main-title">Групповая упаковка в экологическую пленку с наклейкой этикетки</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Упаковка в пленку с этикеткой</p>
					<img src="<?= get_template_directory_uri();?>/img/example-2.png" class="img-responsive" alt="Упаковка в пленку с этикеткой">
					<div class="info">
						<div>
							<p class="main-title">Упаковка в пленку с этикеткой</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Групповая упаковка в экологическую пленку с наклейкой этикетки</p>
					<img src="<?= get_template_directory_uri();?>/img/example-3.png" class="img-responsive" alt="Групповая упаковка в экологическую пленку с наклейкой этикетки">
					<div class="info">
						<div>
							<p class="main-title">Групповая упаковка в экологическую пленку с наклейкой этикетки</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Термоусадка с листовкой под пленкой</p>
					<img src="<?= get_template_directory_uri();?>/img/example-4.png" class="img-responsive" alt="Термоусадка с листовкой под пленкой">
					<div class="info">
						<div>
							<p class="main-title">Термоусадка с листовкой под пленкой</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row calculate-box">
			<div class="col-md-12">
				<p>Оставьте свои данные, мы перезвоним и порекомендуем упаковку для вашего товара</p>
				<a href="#" class="calculate-box-btn" data-toggle="modal" data-target="#myModal">Отправить заявку</a>
			</div>
		</div>
	</div>
</div>

<div class="reason-bg" id="f2">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Причины работать с нами</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="list-unstyled">
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-1.png" alt="Большой опыт по фасовке различных не продовольственных товаров">
						<p>Большой опыт по фасовке различных не продовольственных товаров</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-2.png" alt="Минимальные цены">
						<p>Минимальные цены</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-3.png" alt="Оперативное выполнение фасовочных работ">
						<p>Оперативное выполнение фасовочных работ</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-4.png" alt="Большой парк фасовочного оборудования">
						<p>Большой парк фасовочного оборудования</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-5.png" alt="Нами зафасованно более 500000 т">
						<p>Нами зафасованно более 500000 т</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-6.png" alt="Лаборатория, контролирующая сырье и конечный продукт">
						<p>Лаборатория, контролирующая сырье и конечный продукт</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-7.png" alt="Доставка до заказчика">
						<p>Доставка до заказчика</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-8.png" alt="Cобственное производство">
						<p>Cобственное производство</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-9.png" alt="Нас рекомендуют!">
						<p>Нас рекомендуют!</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-10.png" alt="Разрабатываем упаковку">
						<p>Разрабатываем упаковку</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<a href="/zayavka-na-fasovku" class="calculate-box-btn">Заказать фасовку</a>
			</div>
		</div>
	</div>
</div>

<div class="equipment-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Наше оборудование</p>
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
				<p>Отзывы наших клиентов</p>
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