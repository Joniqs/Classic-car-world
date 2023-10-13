<?php
  $label = get_field("label");
  $align = get_field("align");
?>
<div class="tgg-wrapper-<?php echo $align; ?>">
  <div  style="display: inline-block; cursor: pointer; padding: 4px 8px; border-radius: 4px; text-transform: uppercase; font-weight: bold; background: var(--wp--preset--color--bumblebee-yellow); color: black;">
    <?php echo $label; ?>
  </div>
</div>