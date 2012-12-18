<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    
    <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
   
    <div class="content">
          
    <div class="captions"><?php print $node->field_caption_top[0]['view'] ?></div>
    
    
    <div class="all-attached-images">
    
        <?php foreach ((array)$node->field_page_image as $item) { ?>
      <div class="field-item"><?php print $item['view'] ?></div>
    <?php } ?>
    
    </div>
       
    <div class="captions"><?php print $node->field_caption_bottom[0]['view'] ?></div>
    
    <div class="body-text"><?php print $node->content['body']['#value']; ?></div>
       
    </div>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->