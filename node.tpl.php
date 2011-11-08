
  <?php if (!$page): ?>
    <h2 class='title'>
      <a href='<?php print $node_url; ?>'><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  
  <?php if ($display_submitted): ?>
    <p class="date">
      <?php print $submitted; ?>
    </p>
  <?php endif; ?>

  <div class="entry">
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      $links = render($content['links']);
    ?>
    <p>
      <small><?php print $links; ?></small>
    </p>
  </div>

  <?php print render($content['comments']); ?>
