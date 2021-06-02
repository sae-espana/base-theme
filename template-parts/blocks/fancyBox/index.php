<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slide_gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slide_gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$gallery = get_field('galeriafancybox');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<blockquote>
    <div class="gallery-fancybox <?= $className; ?>">
      <?php foreach ($gallery as $key => $item) { ?>
        <div class="gallery-fancybox__item">
          <a class="item-link" data-fancybox="images" href="<?php echo $item['url'] ?>" data-width="1279" data-height="870">
            <img class="image-width" src="<?php echo $item['url'] ?>" alt="<?php echo $item['alt']; ?>" style="width:100%" class="hover-shadow cursor">
            <div class="gallery-fancybox--hover">
              <?php if($item['description']) { ?>
                <p style="opacity: 0.7; text-transform: uppercase"><?php echo $item['description'] ?></p>
                <h4><?php echo $item['title']; ?></h4>
                <?php } else { ?>
                  <p style="opacity: 0.7; text-transform: uppercase"><?php echo $item['title'] ?></p>                
                  <?php } ?>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
</blockquote>

  
  