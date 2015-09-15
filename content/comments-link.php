<span class="comments-link">
	<?php
	if( ! comments_open() && get_comments_number() < 1 ) :
		comments_number( __( 'Comments closed', 'apex' ), __( '1 Comment', 'apex'), __( '% Comments', 'apex' ) );
	else :
		comments_number( __( 'No Comments', 'apex' ), __( '1 Comment', 'apex'), __( '% Comments', 'apex' ) );
	endif;
	?>
</span>