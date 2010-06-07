<?php //dpr($node->field_rotato); ?>
<div id="node-<?php print $node->nid ?>" class="<?php print $classes ?>">
 <div class="content clear-block rotato-bg" style="background-image:url('/<?php print $node->field_rotato[0]['filepath'] ?>');">
  <?php if (!$page): ?>
  <h2 class="teaser-title rotato-title"><?php print $title ?></h2>
  <?php endif ?>
  </div>
</div>