<div class="row">
	<div class="col-md-6">
		<?php
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return;
		}
		?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	</div>
	<div class="col-md-6">
		<?php
		if ( ! is_active_sidebar( 'sidebar-2' ) ) {
			return;
		}
		?>
		
		<div id="tertiary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #tertiary -->
	</div>
</div>