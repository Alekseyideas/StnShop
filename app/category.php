<?php
include( dirname( __FILE__ ) . '/includes.php' );
include( dirname( __FILE__ ) . '/page-parts/header.php' );
?>
<main>
	<section class="category th">
		<div class="container">
			<div class="flex">
				<? include( dirname( __FILE__ ) . '/page-components/filter.php' );?>
				<div class="col-9 pad-right">
					<div class="category__header">
						<div class="flex">
							<a href="#" class="btn__trim flex flex--a-center " id="list">
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

                                                            <div class="wrapperListFlex">
                                                                <a href="<?echo $GLOBALS['productLink']?>" class="product__image">
                                                                    <img src="images/prdoduct/product-2.jpg" alt="prdoduct">
                                                                </a>
                                                                <div class="wrapperInfoRight">
                                                                    <a href="<?echo $GLOBALS['productLink']?>" class="product__title">
																<span>
																	Планшет Lenovo TB-7304F 7" IPS (1024x600) /QuadCore (1,3Ghz) / 1Gb/ 16Gb / 2MP+5MP / WiFi / Android 7.0/ Black
																</span>
                                                                    </a>


                                                                    <div class="product__code">
                                                                        <span>Код товара:  16944</span>
                                                                    </div>
                                                                    <div class="product__descriptionList">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid corporis deserunt ea enim eos expedita, illo in laboriosam magnam minima nisi placeat qui quis quos sed sit soluta vitae voluptas.
                                                                    </div>

	                                                                <? include( dirname( __FILE__ ) . '/page-components/_price.php' );?>

                                                                </div>
                                                            </div>

                                                            <div class="product__btnsGroup">
																<? btnComparison() ?>
																<? btnOrder() ?>
                                                            </div>


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
								while ($i<4){
									$i++;
									echo Product();
								}
								?>

							</div>


						</div>
						<? include( dirname( __FILE__ ) . '/page-components/sideBar.php' );?>
					</div>

				</div>
				</div>
			</div>
		</div>
			<? include( dirname( __FILE__ ) . '/page-components/pagination.php' );?>
	</section>
</main>
<?php include( dirname( __FILE__ ) . '/page-parts/footer.php' ); ?>