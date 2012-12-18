<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php print $picture; ?>

    <div class="content">
      <div class="body-image"><?php print $node->field_page_image[0]['view'] ?></div>
      <?php print $node->content['body']['#value']; ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->