<?php


$args = array(
    'posts_per_page' => $attributes['numberOfPosts'],
    'post_status' => 'publish',
    'order' => $attributes['order'],
    'orderby' => $attributes['orderBy'],
);
$recent_posts = get_posts($args);

$posts = '<ul ' . get_block_wrapper_attributes() . '>';
foreach($recent_posts as $post) {
    $title = get_the_title($post);
    $title = $title ? $title : __('(No title)','latest-posts');
    $permalink = get_permalink( $post );
    $excerpt = get_the_excerpt( $post );

    $posts .= '<li>';

    if($attributes["displayFeaturedImage"] && has_post_thumbnail( $post )) {
        $posts .= get_the_post_thumbnail( $post, 'large' );
    }
    $posts .= '<h5><a href="' . esc_url($permalink) . '">' . $title . '</a></h5>';
    $posts .= '<time datetime="' . esc_attr( get_the_date('c', $post)) . '">' . esc_html( get_the_date('', $post)) . '</time>';

    if(!empty($excerpt)) {
        $posts .= '<p>' . $excerpt . '</p>';
    }

    $posts .= '</li>';
}
$posts .= '</ul>';

echo $posts;