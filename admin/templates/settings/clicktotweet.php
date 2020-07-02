<?php defined( 'ABSPATH' ) || exit; ?>
<div class="AGB-form__setting">
  <div class="AGB-form__label is-required">
    <label for="advanced-gutenberg-blocks-twitter-username"><?php esc_html__( 'Username', 'advanced-gutenberg-blocks' ); ?></label>
  </div>

  <div class="AGB-form__field">
    <input type="text" name="advanced-gutenberg-blocks-twitter-username" placeholder="AdvancedBlocks" value="<?php echo esc_attr( $twitter_username ); ?>">
  </div>
</div>

<p class="AGB-form__help"><?php esc_html__( 'Provide your Twitter username (without @).', 'advanced-gutenberg-blocks' ); ?></p>
