<?php

/**
 * @file
 * Template for dkan front page.
 */
?>
<div class="panel-display panel-dkan-front clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if($content['slider']): ?>
    <div class="panel-slider panel-row">
      <div class="container-fluid">
        <div class="inside"><?php print $content['slider']; ?></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['banner'] || $content['focus-areas']): ?>
    <div class="panel-banner banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6 hero-welcome">
            <?php print $content['banner']; ?>
          </div>
          <div class="col-md-6 hero-focus-areas">
            <?php print $content['focus-areas']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['news']): ?>
    <div class="panel-news news">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php print $content['news']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if($content['notifications']): ?>
    <div class="panel-news notifications">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php print $content['notifications']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['events']): ?>
    <div class="panel-news events">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php print $content['events']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($content['footer']): ?>
    <footer class="footer">
      <?php print $content['footer']; ?>
    </footer>
  <?php endif; ?>

</div>
