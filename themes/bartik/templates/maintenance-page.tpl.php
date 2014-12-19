<?php
/**
 * @file
 * Implementation to display a single Backdrop page while offline.
 *
 * All the available variables are mirrored in page.tpl.php.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 * @see bartik_process_maintenance_page()
 */
?>
<!DOCTYPE html>
<html<?php print backdrop_attributes($html_attributes); ?>>
<head>
  <?php print backdrop_get_html_head(); ?>
  <title><?php print $head_title; ?></title>
  <?php print backdrop_get_css(); ?>
  <?php print backdrop_get_js(); ?>
</head>
<body class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <div id="page-wrapper"><div id="page">

    <header id="header" role="banner"><div class="section clearfix">
      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <div id="site-name">>
              <strong>
                <?php print $site_name; ?>
              </strong>
            </div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan">
              <?php print $site_slogan; ?>
            </div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>
    </div></header> <!-- /.section, /#header -->

    <div id="main-wrapper"><div id="main" class="clearfix">
      <main id="content" class="column" role="main"><section class="section">
        <a id="main-content"></a>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print $content; ?>
        <?php if ($messages): ?>
          <div id="messages"><div class="section clearfix">
            <?php print $messages; ?>
          </div></div> <!-- /.section, /#messages -->
        <?php endif; ?>
      </section></main> <!-- /.section, /#content -->
    </div></div> <!-- /#main, /#main-wrapper -->

  </div></div> <!-- /#page, /#page-wrapper -->

</body>
</html>
