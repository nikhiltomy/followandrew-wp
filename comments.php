<div class="comments-wrapper">


	<div class="comments" id="comments">


		<div class="comments-header">

			<h2 class="comment-reply-title">
				<?php

				if (!have_comments()) {
					"Leave a comment";
				} else {
					get_comment_count() . "comments";
				}

				?>



			</h2><!-- .comments-title -->

		</div><!-- .comments-header -->

		<div class="comments-inner">

				<?php
wp_list_comments(
	array(
		'avathar_size' =>120,
		'style'=>'div',
	)

)
			

?>
		
		</div><!-- .comments-inner -->

	</div><!-- comments -->

	<hr class="" aria-hidden="true">
	<?php
	  if(comments_open()){

		comment_form(
			array(
				'class_form' => '',
				'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
				'title_rely_after'=>'</h2>'
			)

		);
	  }
	?>

</div>

</div>