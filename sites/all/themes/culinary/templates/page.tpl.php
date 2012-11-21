<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Culinary</a></h1>
      <h2><span>Template By Free CSS Templates</span></h2>
    </div>
    <!-- end div#logo -->
  </div>
  <!-- end div#header -->
  <div id="menu">
    <?php print render($page['menu']); ?>
  </div>
  <!-- end div#menu -->
  <div id="page">
    <div id="page-bgtop">
      <div id="help">
        <?php print render($page['help']); ?>
      </div>
      <!-- end div#help -->
      <?php print $breadcrumb;?>
      <div id="content">
        <?php print render($page['content']); ?>
      </div>
      <!-- end div#content -->
      <div id="sidebar">
        <?php print render($page['sidebar_first']); ?>
      </div>
      <!-- end div#sidebar -->
      <div style="clear: both; height: 1px"></div>
    </div>
  </div>
  <!-- end div#page -->
  <div id="footer">
    <?php print render($page['footer']); ?>
  </div>
  <!-- end div#footer -->
</div>
<!-- end div#wrapper -->