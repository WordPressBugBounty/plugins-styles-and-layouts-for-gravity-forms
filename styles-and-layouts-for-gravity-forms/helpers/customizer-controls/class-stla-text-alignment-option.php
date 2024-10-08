<?php
/**
 * The customizer control HTML for text alignment buttons.
 */
class Stla_Text_Alignment_Option extends WP_Customize_Control {

	/**
	 * Type of control.
	 *
	 * @var string
	 */
	public $type = 'text_alignment';

	/**
	 * Render content for text alignment control.
	 *
	 * @return void
	 */
	public function render_content() {
		?>
			<label>
			<?php if ( ! empty( $this->label ) ) : ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php
				endif;
			if ( ! empty( $this->description ) ) :
				?>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php endif; ?>
			</label>
			<?php
			if ( empty( $this->choices ) ) {
				return;
			}
			foreach ( $this->choices as $value => $label ) :
				$checked_class = $value === $this->value() ? ' stla_text_alignment_checked' : '';
				// phpcs:disable
				?>
					<span class="stla_text_alignment stla_font_value_<?php echo esc_attr( $value ); echo esc_html( $checked_class ); ?>">
						<input type="radio" class="stla_text_alignment_radio" value="<?php echo esc_attr( $value ); ?>" <?php checked( $value, $this->value() ); ?> />
					</span>
				<?php
			endforeach;
			// phpcs:enable
			?>
			<input type="hidden" class="stla_text_alignment_control" <?php $this->input_attrs(); ?> value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
			<?php
	}
}
