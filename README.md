# PHP-Templates---5

<--! Custom Post -->
add_action('init',
'create_portfolio');
function create_portfolio() {
$portfolio_args = array(
  'label' =>
  _('Porfolio'),
  'singular_label' =>
  _('Portfolio Item'),
  'public' => true,
  'show_ui => true,
  'capability_type' =>
  'post',
  'hierarchical' => false,
  'rewrite' => true,
  'supports' =>
    aray('title', 
    'editor', 'thumbnail')
  );
  
  regoster_post_type
    ('portfolio', $portfolio_args);
    }
    
  add_theme_support(
  'post_thumbnails' );
  add_image_size('portfolio-thumb
  300,300, true);
  
  
    
