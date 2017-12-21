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