<?php
$prev_text = '<div class="pagination-left"><svg width="67" height="30" viewBox="0 0 67 30" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.585785 13.5858C-0.195259 14.3668 -0.195259 15.6332 0.585785 16.4142L13.3137 29.1421C14.0948 29.9232 15.3611 29.9232 16.1421 29.1421C16.9232 28.3611 16.9232 27.0948 16.1421 26.3137L4.82843 15L16.1421 3.6863C16.9232 2.90525 16.9232 1.63892 16.1421 0.857869C15.3611 0.0768201 14.0948 0.0768202 13.3137 0.857869L0.585785 13.5858ZM67 13L2 13L2 17L67 17L67 13Z" fill="#D5DCED"/></svg></div>';
$next_text = '<div class="pagination-right"><svg width="67" height="30" viewBox="0 0 67 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.585785 13.5858C-0.195259 14.3668 -0.195259 15.6332 0.585785 16.4142L13.3137 29.1421C14.0948 29.9232 15.3611 29.9232 16.1421 29.1421C16.9232 28.3611 16.9232 27.0948 16.1421 26.3137L4.82843 15L16.1421 3.6863C16.9232 2.90525 16.9232 1.63892 16.1421 0.857869C15.3611 0.0768201 14.0948 0.0768202 13.3137 0.857869L0.585785 13.5858ZM67 13L2 13L2 17L67 17L67 13Z" fill="#D5DCED"/></svg></div>';

$posts_pagination = get_the_posts_pagination(
	array(
		'mid_size'  => 1,
		'prev_text' => $prev_text,
        'next_text' => $next_text,
        'screen_reader_text' => ' ',
	)
);

if ( $posts_pagination ) { ?>

<div class="pagination-wrapper">
    <?php echo $posts_pagination; ?>
</div>
        
	<?php
}
