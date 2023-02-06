<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style>.u-header .u-sheet-1 {
  min-height: 110px;
}
.u-header .u-image-1 {
  width: 80px;
  height: 51px;
  margin: 30px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -36px 0 30px auto;
}
.u-header .u-nav-1 {
  font-weight: 700;
  font-size: 1rem;
}
.u-block-3250-25 {
  font-weight: 700;
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
  letter-spacing: 0px;
  font-weight: 700;
}
.u-block-3250-27 {
  font-weight: 700;
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    margin-top: -36px;
  }
  .u-header .u-nav-1 {
    letter-spacing: normal;
  }
}</style>
