<?php
//Get only the approved comments
$args = array(
    'status' => 'approve'
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
?> <span>this is <b>comments.php</b></span> <?php
// Comment Loop
if ( $comments ) {
    foreach ( $comments as $comment ) {
        echo '<p>' . $comment->comment_content . '</p>';
        ?> <span>------</span> <?php
    }
} else {
    echo 'No comments found.';
}
?>
