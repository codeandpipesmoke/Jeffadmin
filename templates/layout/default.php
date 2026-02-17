<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->Html->charset() ?>
	
	<title><?= h($this->fetch('title')) ?></title>

	<?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>
	
	<?= $this->Html->meta('favicon.ico', 'Jeffadmin./assets/images/favicon.ico', ['type' => 'icon']) ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="description" content="JeffAdmin5 - Free Bootstrap 5.3.2 admin theme with CakePhp by Jeff Shoemaker">
	<meta name="author" content="Jeff Web Development - https://www.vzsfoto.hu">
<?php /*
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@zsfoto">
    <meta property="twitter:creator" content="@zsfoto">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ValiCake">
    <meta property="og:title" content="JeffAdmin5 - Free Bootstrap 5 admin theme with CakePhp by Jeff Shoemaker">
    <meta property="og:url" content="https://vzsfoto.hu/jeffadmin5">
    <meta property="og:image" content="https://vzsfoto.hu/og-image.png">
    <meta property="og:description" content="JeffAdmin5 - Free Bootstrap 5.3.2 admin theme with CakePhp by Jeff Shoemaker">
*/ ?>

	<?= $this->Html->css([
		'Jeffadmin./assets/css/bootstrap.min',														// Bootstrap 5.3.2
		'Jeffadmin./assets/font-awesome/css/font-awesome.min',										// FontAwesome
		//'Jeffadmin./assets/plugins/jquery-toastmessage-plugin-master/src/main/resources/css/jquery.toastmessage',
		'Jeffadmin./assets/plugins/simple-notify-master/dist/simple-notify',						// ToastMessage
		'Jeffadmin./assets/plugins/sweetalert2/dist/sweetalert2.min',								// SweetAlert
		'Jeffadmin./assets/css/jeffadmin5',														// JeffAdmin5
	]); ?>
	<?= $this->fetch('css') ?>
<?php /*
	<!-- FORM -->
	<link href="assets/plugins/select2-4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css" />		
	<link href="assets/css/select2-bootstrap-5-theme.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/plugins/tempus-dominus-6.0.0/dist/css/tempus-dominus.min.css" rel="stylesheet" type="text/css" />
	<!-- /.FORM -->
*/ ?>

</head>
<body class="adminbody" style="background: #e7e2d8;">
<?php //= $this->Flash->render() ?>

<div id="main">
	<?php echo $this->element("Jeffadmin.header") ?>

	<?php echo $this->element("Jeffadmin.leftSidebar") ?>

    <div class="content-page">
        <div class="content"><!-- Start content -->
			<div class="container-fluid">
				<?= $this->element("Jeffadmin.breadcrumbBar") ?>

				<?= $this->element("Jeffadmin.searchBar") ?>

<?= $this->fetch('content') ?>
	
            </div><!-- END container-fluid -->
		</div><!-- END content -->
    </div><!-- END content-page -->
    
	<?= $this->element("Jeffadmin.footer") ?>

</div>
<!-- END main -->

<!-- BEGIN JavaScripts for this page --><?= $this->Html->script([
		'Jeffadmin./assets/js/jquery.min.js',											// jQuery
		'Jeffadmin./assets/js/moment-with-locales',									// Moment
		'Jeffadmin./assets/js/bootstrap.bundle.min',									// Bootstrap
		'Jeffadmin./assets/js/detect',
		'Jeffadmin./assets/js/fastclick',												// FastClick
		'Jeffadmin./assets/js/jquery.nicescroll',										// NiceScroll
		//'jeffadmin./assets/plugins/jquery-toastmessage-plugin-master/src/main/javascript/jquery.toastmessage',
		'Jeffadmin./assets/plugins/simple-notify-master/dist/simple-notify.min',		// ToastMessage
		'Jeffadmin./assets/plugins/sweetalert2/dist/sweetalert2.all.min',				// SweetAlert
		'Jeffadmin./assets/js/pikeadmin',												// The Original PikeAdmin
		'Jeffadmin./assets/js/jeffadmin5'												// JeffAdmin5
	]); ?>
	<?= $this->fetch('scriptBottom'); 													// Individual script files in templates ?>
	
<!-- END JavaScripts for this page -->

<!-- BEGIN Custom JavaScript for this page -->
<?= $this->fetch('javaScriptBottom'); 													// Indivisual JavaScript code in templates ?>

<!-- END Custom JavaScript for this page -->

<?php if (!empty($this->getRequest()->getSession()->read('Flash'))) { 					// Flash messages by ToastMessage ?>
	<script>
<?= $this->element('Jeffadmin.script_flash') ?>
<?= $this->Flash->render() ?>
	</script>
<?php } ?>

</body>
</html>
