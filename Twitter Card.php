<?php
    #twitter cards
    if(is_single() || is_page()) {
    $twitter_url    = get_permalink();
    $twitter_title  = get_the_title();
    $twitter_desc   = get_the_excerpt();
    $twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
    $twitter_thumb  = $twitter_thumbs[0];
      if(!$twitter_thumb) {
      $twitter_thumb = ' ';
    }
  $twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));
?>
<meta name="twitter:card" value="summary" />
<meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
<meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
<meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
<meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
<meta name="twitter:site" value="@deadclutchdb" />
<?
  if($twitter_name) {
?>
<meta name="twitter:creator" value="@<?php echo $twitter_name; ?>" />
<?
  }
}
?>