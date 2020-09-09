<?php
	global $buttonLoginTitle, $buttonLoginLabel, $buttonRegisterTitle, $buttonRegisterLabel, $subTitleLogin, $subTitleRegister;
?>
<div class="column-2">
	<div class="unik-style-button-container">
		<h5><?=__('Login button','unikname-connect')?></h5>
		<div class="unikname-button-preview-container ">
			<div class="button-preview <?php echo isset($unikNameStyleButtonOptions['login_button_alignment']) ? $unikNameStyleButtonOptions['login_button_alignment'] : 'left';?>" id="unikname_button_login">
				<h6><?php echo isset($unikNameStyleButtonOptions['login_button_title']) ? $buttonLoginTitle[$unikNameStyleButtonOptions['login_button_title']] : $buttonLoginTitle['1'];?></h6>
				<div class="button-unikname-connect">
					<img src="<?=UNIKNAME_DIR_URL.'assets/images/icon-unikname.svg'?>" alt="<?=__('icon unik name')?>">
					<label><?php echo isset($unikNameStyleButtonOptions['login_button_label']) ? $buttonLoginLabel[$unikNameStyleButtonOptions['login_button_label']] : $buttonLoginLabel['1'];?></label>
				</div>
				<p><?php echo isset($unikNameStyleButtonOptions['login_button_description']) ? $subTitleLogin[$unikNameStyleButtonOptions['login_button_description']] : $subTitleLogin['1'];?></p>
			</div>
		</div>
		<style type="text/css">
			#unikname_button_login .button-unikname-connect{
				background-color: <?php echo isset($unikNameStyleButtonOptions['login_color']) && $unikNameStyleButtonOptions['login_color'] == 'turquoise' ? '#2B6BF3' : '#0F2852';?>;
				border-radius: <?php echo isset($unikNameStyleButtonOptions['login_border_radius']) ? $unikNameStyleButtonOptions['login_border_radius'].'px' : '30px' ?>;
			}
		</style>
		<div class="button-custom-style">
			<div class="item type-radio-color">
				<label class="name"><?=__('Color','unikname-connect')?></label>
				<div class="item-radio-color">
					<label class="container">
						<input type="radio" name="unik_name_style_button[login_color]" <?php echo !isset($unikNameStyleButtonOptions['login_color']) || $unikNameStyleButtonOptions['login_color'] == 'blue' ? 'checked = "checked"' : '';?> value="blue">
						<span class="checkmark blue"></span>
					</label>
					<label class="container">
						<input type="radio" name="unik_name_style_button[login_color]" <?php echo !isset($unikNameStyleButtonOptions['login_color']) || $unikNameStyleButtonOptions['login_color'] == 'turquoise' ? 'checked = "checked"' : '';?> value="turquoise">
						<span class="checkmark turquoise"></span>
					</label>
				</div>
			</div>
			<div class="item type-number-radius">
				<label class="name"><?=__('Border radius','unikname-connect')?></label>
				<div class="item-number-radius">
					<input type="number" name="unik_name_style_button[login_border_radius]" value="<?php echo isset($unikNameStyleButtonOptions['login_border_radius']) ? $unikNameStyleButtonOptions['login_border_radius'] : '30' ?>"/>
				</div>
			</div>
			<div class="item type-radio-alignment">
				<label class="name"><?=__('Alignment','unikname-connect')?></label>
				<div class="item-radio-alignment">
					<label class="container">
						<input type="radio" name="unik_name_style_button[login_button_alignment]" <?php echo !isset($unikNameStyleButtonOptions['login_button_alignment']) || $unikNameStyleButtonOptions['login_button_alignment'] == 'left' ? 'checked = "checked"' : '';?> value="left">
						<span class="checkmark-alignment left"></span>
					</label>
					<label class="container">
						<input type="radio" name="unik_name_style_button[login_button_alignment]" <?php echo !isset($unikNameStyleButtonOptions['login_button_alignment']) || $unikNameStyleButtonOptions['login_button_alignment'] == 'center' ? 'checked = "checked"' : '';?> value="center">
						<span class="checkmark-alignment center"></span>
					</label>
					<label class="container">
						<input type="radio" name="unik_name_style_button[login_button_alignment]" <?php echo !isset($unikNameStyleButtonOptions['login_button_alignment']) || $unikNameStyleButtonOptions['login_button_alignment'] == 'right' ? 'checked = "checked"' : '';?> value="right">
						<span class="checkmark-alignment right"></span>
					</label>
				</div>
			</div>
			<div class="item type-select">
				<label class="name"><?=__('Button title','unikname-connect')?></label>
				<div class="item-select">
					<select name="unik_name_style_button[login_button_title]">
						<?php foreach ($buttonLoginTitle as $key => $value) { ?>
							<option <?php echo !isset($unikNameStyleButtonOptions['login_button_title']) || $unikNameStyleButtonOptions['login_button_title'] == $key ? 'selected="selected"' : '';?> value="<?=$key?>"><?=$value?></option>
						<?php } // Endforeach ?>
					</select>
				</div>
			</div>
			<div class="item type-select">
				<label class="name"><?=__('Button label','unikname-connect')?></label>
				<div class="item-select">
					<select name="unik_name_style_button[login_button_label]">
						<?php foreach ($buttonLoginLabel as $key => $value) { ?>
							<option <?php echo !isset($unikNameStyleButtonOptions['login_button_label']) || $unikNameStyleButtonOptions['login_button_label'] == $key ? 'selected="selected"' : '';?> value="<?=$key?>"><?=$value?></option>
						<?php } // Endforeach ?>
					</select>
				</div>
			</div>
			<div class="item type-select">
				<label class="name"><?=__('Button description','unikname-connect')?></label>
				<div class="item-select">
					<select name="unik_name_style_button[login_button_description]">
						<?php foreach ($subTitleLogin as $key => $value) { ?>
							<option data-value='<?=$value?>' <?php echo !isset($unikNameStyleButtonOptions['login_button_description']) || $unikNameStyleButtonOptions['login_button_description'] == $key ? 'selected="selected"' : '';?> value="<?=$key?>"><?=$value?></option>
						<?php } // Endforeach ?>
					</select>
					<p><?=__('Read more link: ','unikname-connect')?> <a href=" https://my.unikname.app/#pk_campaign=installation&pk_source=login&pk_medium=punch&pk_content=nextgen"><?=__('Read more','unikname-connect')?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="column-2">
	<div class="unik-style-button-container">
		<h5 class="title-register"><?=__('Register button','unikname-connect')?></h5>
		<div class="unikname-button-preview-container">
			<div class="button-preview <?php echo isset($unikNameStyleButtonOptions['login_button_alignment']) ? $unikNameStyleButtonOptions['register_button_alignment'] : 'left';?>" id="unikname_button_register">
				<h6><?php echo isset($unikNameStyleButtonOptions['register_button_title']) ? $buttonRegisterTitle[$unikNameStyleButtonOptions['register_button_title']] : $buttonRegisterTitle['1'];?></h6>
				<div class="button-unikname-connect">
					<img src="<?=UNIKNAME_DIR_URL.'assets/images/icon-unikname.svg'?>" alt="<?=__('icon unik name','unikname-connect')?>">
					<label><?php echo isset($unikNameStyleButtonOptions['register_button_label']) ? $buttonRegisterLabel[$unikNameStyleButtonOptions['register_button_label']] : $buttonRegisterLabel['1'];?></label>
				</div>
				<p><?php echo isset($unikNameStyleButtonOptions['register_button_description']) ? $subTitleRegister[$unikNameStyleButtonOptions['register_button_description']] : $subTitleRegister['1'];?></p>
			</div>
		</div>
		<style type="text/css">
			#unikname_button_register .button-unikname-connect{
				background-color: <?php echo isset($unikNameStyleButtonOptions['register_color']) && $unikNameStyleButtonOptions['register_color'] == 'turquoise' ? '#2B6BF3' : '#0F2852';?>;
				border-radius: <?php echo isset($unikNameStyleButtonOptions['register_border_radius']) ? $unikNameStyleButtonOptions['register_border_radius'].'px' : '30px' ?>;
			}
		</style>
		<div class="button-custom-style">
			<div class="item type-radio-color">
				<label class="name"><?=__('Color','unikname-connect')?></label>
				<div class="item-radio-color">
					<label class="container">
						<input type="radio" name="unik_name_style_button[register_color]" <?php echo !isset($unikNameStyleButtonOptions['register_color']) || $unikNameStyleButtonOptions['register_color'] == 'blue' ? 'checked = "checked"' : '';?> value="blue">
						<span class="checkmark blue"></span>
					</label>
					<label class="container">
						<input type="radio" name="unik_name_style_button[register_color]" <?php echo !isset($unikNameStyleButtonOptions['register_color']) || $unikNameStyleButtonOptions['register_color'] == 'turquoise' ? 'checked = "checked"' : '';?> value="turquoise">
						<span class="checkmark turquoise"></span>
					</label>
				</div>
			</div>
			<div class="item type-number-radius">
				<label class="name"><?=__('Border radius','unikname-connect')?></label>
				<div class="item-number-radius">
					<input type="number" name="unik_name_style_button[register_border_radius]" value="<?php echo isset($unikNameStyleButtonOptions['register_border_radius']) ? $unikNameStyleButtonOptions['register_border_radius'] : '30' ?>"/>
				</div>
			</div>
			<div class="item type-radio-alignment">
				<label class="name"><?=__('Alignment','unikname-connect')?></label>
				<div class="item-radio-alignment">
					<label class="container">
						<input type="radio" name="unik_name_style_button[register_button_alignment]" <?php echo !isset($unikNameStyleButtonOptions['register_button_alignment']) || $unikNameStyleButtonOptions['register_button_alignment'] == 'left' ? 'checked = "checked"' : '';?> value="left">
						<span class="checkmark-alignment left"></span>
					</label>
					<label class="container">
						<input type="radio" name="unik_name_style_button[register_button_alignment]" <?php echo !isset($unikNameStyleButtonOptions['register_button_alignment']) || $unikNameStyleButtonOptions['register_button_alignment'] == 'center' ? 'checked = "checked"' : '';?> value="center">
						<span class="checkmark-alignment center"></span>
					</label>
					<label class="container">
						<input type="radio" name="unik_name_style_button[register_button_alignment]" <?php echo !isset($unikNameStyleButtonOptions['register_button_alignment']) || $unikNameStyleButtonOptions['register_button_alignment'] == 'right' ? 'checked = "checked"' : '';?> value="right">
						<span class="checkmark-alignment right"></span>
					</label>
				</div>
			</div>
			<div class="item type-select">
				<label class="name"><?=__('Button title','unikname-connect')?></label>
				<div class="item-select">
					<select name="unik_name_style_button[register_button_title]">
						<?php foreach ($buttonRegisterTitle as $key => $value) { ?>
							<option <?php echo !isset($unikNameStyleButtonOptions['register_button_title']) || $unikNameStyleButtonOptions['register_button_title'] == $key ? 'selected="selected"' : '';?> value="<?=$key?>"><?=$value?></option>
						<?php } // Endforeach ?>
					</select>
				</div>
			</div>
			<div class="item type-select">
				<label class="name"><?=__('Button label','unikname-connect')?></label>
				<div class="item-select">
					<select name="unik_name_style_button[register_button_label]">
						<?php foreach ($buttonRegisterLabel as $key => $value) { ?>
							<option <?php echo !isset($unikNameStyleButtonOptions['register_button_label']) || $unikNameStyleButtonOptions['register_button_label'] == $key ? 'selected="selected"' : '';?> value="<?=$key?>"><?=$value?></option>
						<?php } // Endforeach ?>
					</select>
				</div>
			</div>
			<div class="item type-select">
				<label class="name"><?=__('Button description','unikname-connect')?></label>
				<div class="item-select">
					<select name="unik_name_style_button[register_button_description]">
						<?php foreach ($subTitleRegister as $key => $value) { ?>
							<option data-value='<?=$value?>' <?php echo !isset($unikNameStyleButtonOptions['register_button_description']) || $unikNameStyleButtonOptions['register_button_description'] == $key ? 'selected="selected"' : '';?> value="<?=$key?>"><?=$value?></option>
						<?php } // Endforeach ?>
					</select>
					<p><?=__('Read more link: ','unikname-connect')?> <a href=" https://my.unikname.app/#pk_campaign=installation&pk_source=signup&pk_medium=punch&pk_content=nextgen"><?=__('Read more','unikname-connect')?></a></p>
				</div>
			</div>
		</div>
	</div>
</div>