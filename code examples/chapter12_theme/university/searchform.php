	<form method="get" id="searchform" action="/">
		<label for="s" class="assistive-text"><?php _e( 'Search' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Go' ); ?>" />
	</form>