# Twitter-Cards
How To Make Twitter Pull Twitter Cards Correctly

This is just a simple function call that allows you to put in the correct call names for whatever options you want.
**Note only a few of them are required to work.  **

Open you Header.php for the theme, should really be a sub-theme in most cases. 

Then Copy and past the attached php code just above the line: "<?php wp_head(); ?>"

* Note: Yours may be coded a litt;e differetn but you will be importing the WP-head in some form. *

Make Sure you Copy The Entire PHP code, including thr opening and closing tags. 

Then You Should Be Good To Go!
I plan to post a list of the avalible options soon. 
Good Luck

Chris
__________

# Twitter Helpful Background

Twitter Cards and Open Graph
"Twitter card tags look similar to Open Graph tags, and are based on the same conventions as the Open Graph protocol. When using Open Graph protocol to describe data on a page, it is easy to generate a Twitter card without duplicating tags and data. When the Twitter card processor looks for tags on a page, it first checks for the Twitter-specific property, and if not present, falls back to the supported Open Graph property. This allows for both to be defined on the page independently, and minimizes the amount of duplicate markup required to describe content and experience." - Twitter Dev (https://developer.twitter.com/en/docs/tweets/optimize-with-cards/guides/getting-started)

## Below is a Good Example From Twitter:

### The example below uses a mix of Twitter and Open Graph tags to define a summary card:
'''
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@nytimesbits" />
<meta name="twitter:creator" content="@nickbilton" />
<meta property="og:url" content="http://bits.blogs.nytimes.com/2011/12/08/a-twitter-for-my-sister/" />
<meta property="og:title" content="A Twitter for My Sister" />
<meta property="og:description" content="In the early days, Twitter grew so quickly that it was almost impossible to add new features because engineers spent their time trying to keep the rocket ship from stalling." />
<meta property="og:image" content="http://graphics8.nytimes.com/images/2011/12/08/technology/bits-newtwitter/bits-newtwitter-tmagArticle.jpg" />
'''
____________________________
## This is where you would make your changes:

There are a number of different options for Twitter Cards Like Large Image or Small Image.  You can change those options in the section below:

### For Example 
'''
<meta name="twitter:card" value="summary">
'''
Could Also be:
'''
<meta name="twitter:card" content="summary_large_image">
'''
'''
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
'''

