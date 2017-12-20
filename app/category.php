<?php
include( dirname( __FILE__ ) . '/includes.php' );
include( dirname( __FILE__ ) . '/page-parts/header.php' );
?>
<main>
	<section class="category th">
		<div class="container">
			<div class="flex">
				<div class="col-3">
					<div class="filter">
						<h2 class="filter__title">Подбор по параметрам</h2>
						<form action="">
							<div class="filter__items">

								<?function filterItemsTitle($title){?>
									<h3 class="filter__items-title"><?echo $title?></h3>
								<?return false;}?>
								<? function formGroup($value,$count){?>
								<div class="form-group">
									<label>
										<input type="checkbox" value="<?echo $value?>">
									</label>
									<div class="filter__item flex flex--a-center">
										<div class="square flex flex--a-center flex--j-center">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<span class="item-value"><?echo $value?> (<span class="items"><?echo $count?></span>)</span>
									</div>
								</div>
								<?return false;}?>

								<?
									echo filterItemsTitle('Разрешение экрана');
									echo formGroup('1280x800','2');
									echo formGroup('1024x600','1');

									echo filterItemsTitle('Поддержка 3G');
									echo formGroup('Нет','2');
									echo formGroup('Есть','5');

									echo filterItemsTitle('Фронтальная камера');
									echo formGroup('2 Мп','3');
									echo formGroup('0.3 Мп','1');

									echo filterItemsTitle('Основная камера');
									echo formGroup('8 Мп','3');
									echo formGroup('5 Мп','1');
									echo formGroup('2 Мп','1');

									echo filterItemsTitle('Тип экрана');
									echo formGroup('IPS','6');

									echo filterItemsTitle('Тип экрана');
									echo formGroup('IPS','6');


								echo filterItemsTitle('Разрешение экрана');
								echo formGroup('1280x800','2');
								echo formGroup('1024x600','1');

								echo filterItemsTitle('Поддержка 3G');
								echo formGroup('Нет','2');
								echo formGroup('Есть','5');

								echo filterItemsTitle('Фронтальная камера');
								echo formGroup('2 Мп','3');
								echo formGroup('0.3 Мп','1');

								echo filterItemsTitle('Основная камера');
								echo formGroup('8 Мп','3');
								echo formGroup('5 Мп','1');
								echo formGroup('2 Мп','1');

								echo filterItemsTitle('Тип экрана');
								echo formGroup('IPS','6');

								echo filterItemsTitle('Тип экрана');
								echo formGroup('IPS','6');

								?>



							</div>
						</form>

					</div>
				</div>
				<div class="col-9 pad-right">
					<div class="category__header">
						<div class="flex">
							<a href="#" class="btn__trim flex flex--a-center" id="list">
								<i class="fa fa-th-list" aria-hidden="true"></i>
								<span>Список</span>
							</a>
							<a href="#" class="btn__trim flex flex--a-center active" id="th">
								<i class="fa fa-th" aria-hidden="true"></i>
								<span>Плитка</span>
							</a>
						</div>
					</div>

					<div class="flex">
						<div class="col-9">
							<div class="flex flex--wrap">

								<?function Product(){?>
									<div class="col-4">
											<div class="product">
												<div class="over-wraper">
													<div class="innerAbs">
														<div class="innerRel">
															<a href="<?echo $GLOBALS['productLink']?>" class="product__image">
																<img src="images/prdoduct/product-2.jpg" alt="prdoduct">
															</a>
															<a href="<?echo $GLOBALS['productLink']?>" class="product__title">
																<span >
																	Планшет Lenovo TB-7304F 7" IPS (1024x600) /QuadCore (1,3Ghz) / 1Gb/ 16Gb / 2MP+5MP / WiFi / Android 7.0/ Black
																</span>
															</a>

															<div class="product__price">
											<span class="oldPrice">
												<span class="price_currency">〒</span>10 540
											</span>
																<span class="price">
												<span class="price_currency">〒</span>9 990
											</span>
															</div>
															<? btnComparison() ?>
															<? btnOrder() ?>


															<div class="textProductInfo">
																Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis deserunt ea enim eos expedita, illo in laboriosam magnam minima nisi placeat qui quis quos sed sit soluta vitae voluptas.
															</div>
														</div>
													</div>
												</div>



											</div>
										</div>
								<?}?>



								<?

								$i=0;
								while ($i<15){
									$i++;
									echo Product();
								}
								?>

							</div>


						</div>
						<div class="col-3"></div>
					</div>

				</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include( dirname( __FILE__ ) . '/page-parts/footer.php' ); ?>