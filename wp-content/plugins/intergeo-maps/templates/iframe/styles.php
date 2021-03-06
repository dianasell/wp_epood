<h3 class="intergeo_tlbr_ul_li_h3"><?php esc_html_e( 'Styles', 'intergeo-maps' ); ?></h3>
<ul class="intergeo_tlbr_ul_li_ul">
	<li class="intergeo_tlbr_ul_li_ul_li">
		<span class="intergeo_tlbr_cntrl_ttl"><?php esc_html_e( "Container's Styles", 'intergeo-maps' ); ?></span>
		<div class="intergeo_tlbr_cntrl_items">
			<div class="intergeo_tlbr_cntrl_item">
				<?php esc_html_e( 'Width', 'intergeo-maps' ); ?>
				<input type="text" class="intergeo_tlbr_cntrl_txt" name="container_width" placeholder="100%" value="<?php echo isset( $json['container']['width'] ) ? esc_attr( $json['container']['width'] ) : ''; ?>">
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<?php esc_html_e( 'Height', 'intergeo-maps' ); ?>
				<input type="text" class="intergeo_tlbr_cntrl_txt" name="container_height" placeholder="300px" value="<?php echo isset( $json['container']['height'] ) ? esc_attr( $json['container']['height'] ) : ''; ?>">
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<?php esc_html_e( 'Extra Styles', 'intergeo-maps' ); ?>
				<input type="text" class="intergeo_tlbr_cntrl_txt" name="container_styles" placeholder="border: 1px solid gray;" value="<?php echo isset( $json['container']['styles'] ) ? esc_attr( $json['container']['styles'] ) : ''; ?>">
			</div>
		</div>
	</li>
	<li class="intergeo_tlbr_ul_li_ul_li">
		<span class="intergeo_tlbr_cntrl_ttl"><?php esc_html_e( 'Predefined Map Styles', 'intergeo-maps' ); ?></span>
		<div class="intergeo_tlbr_cntrl_items">
			<div class="intergeo_tlbr_cntrl_item">
				<label class="intergeo_tlbr_style_preview" title="Default">
					<input type="radio" name="styles_type" value="DEFAULT" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'DEFAULT' : true ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_red" class="intergeo_tlbr_style_preview" title="Red">
					<input type="radio" name="styles_type" value="RED" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'RED' : false ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_night" class="intergeo_tlbr_style_preview" title="Night">
					<input type="radio" name="styles_type" value="NIGHT" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'NIGHT' : false ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_blue" class="intergeo_tlbr_style_preview" title="Blue">
					<input type="radio" name="styles_type" value="BLUE" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'BLUE' : false ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_grayscale" class="intergeo_tlbr_style_preview" title="Greyscale">
					<input type="radio" name="styles_type" value="GREYSCALE" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'GREYSCALE' : false ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_no_roads" class="intergeo_tlbr_style_preview" title="No Roads">
					<input type="radio" name="styles_type" value="NO_ROADS" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'NO_ROADS' : false ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_mixed" class="intergeo_tlbr_style_preview" title="Mixed">
					<input type="radio" name="styles_type" value="MIXED" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'MIXED' : false ); ?>>
				</label>
			</div>
			<div class="intergeo_tlbr_cntrl_item">
				<label id="intergeo_tlbr_style_chilled" class="intergeo_tlbr_style_preview" title="Chilled">
					<input type="radio" name="styles_type" value="CHILLED" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == 'CHILLED' : false ); ?>>
				</label>
			</div>
		</div>
	</li>
	<li class="intergeo_tlbr_ul_li_ul_li">
		<span class="intergeo_tlbr_cntrl_ttl"><?php esc_html_e( 'Custom Map Styles', 'intergeo-maps' ); ?></span>
		<div class="intergeo_tlbr_cntrl_items">
			<div class="intergeo_tlbr_cntrl_item">
				<a class="intergeo_tlbr_cntrl_more_info" href="javascript:;">[?]</a>
				<label>
					<input type="radio" name="styles_type" value="-1" <?php checked( isset( $json['styles']['type'] ) ? $json['styles']['type'] == '-1' : false ); ?>> 
					<?php esc_html_e( 'Use custom styles', 'intergeo-maps' ); ?>
				</label>
				<textarea class="intergeo_tlbr_cntrl_txt" name="styles_custom" cols="30" rows="5">
				<?php
					echo isset( $json['styles']['custom'] ) ? esc_textarea( json_encode( $json['styles']['custom'] ) ) : ''
				?>
				</textarea>
			</div>
			<p class="intergeo_tlbr_cntrl_dsc">
				<?php printf( esc_html__( 'Creating styles by hand and testing your code to see how they look is potentially time-consuming. Instead, you can use the %1$s Styled Map Wizard  %2$s to set up the JSON for your maps styles.', 'intergeo-maps' ), '<a href="https://mapstyle.withgoogle.com" target="_blank">', '</a>' ); ?>
			</p>
		</div>
	</li>
</ul>
