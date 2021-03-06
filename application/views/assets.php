<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon_1.ico">

		<title>SD Ar-Rafi'</title>
        
        <link href="<?php echo base_url('assets/css/sweetalert.css');?>" rel="stylesheet" type="text/css" />

		<link href="<?php echo base_url('assets/css/bootstrap.min.css"');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/plugins/bootstrapvalidator/dist/css/bootstrapValidator.min.css');?>" rel="stylesheet" />

        <link href="<?php echo base_url('assets/css/core.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/components.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/pages.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/menu.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link href="<?php echo base_url('assets/js/modernizr.min.js');?>" rel="stylesheet" type="text/css" />
	</head>
	<body>

        <?php
        	$this->load->view($konten);
        ?>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/detect.js');?>"></script>
        <script src="<?php echo base_url('assets/js/fastclick.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.blockUI.js');?>"></script>
        <script src="<?php echo base_url('assets/js/waves.js');?>"></script>
        <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.nicescroll.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>


        <script src="<?php echo base_url('assets/js/jquery.core.js');?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.app.js');?>"></script>

        <script src="<?php echo base_url('assets/plugins/sweetalert/dist/sweetalert.min.js');?>"></script>
        <script src="<?php echo base_url('assets/pages/jquery.sweet-alert.init.js');?>"></script>
        <script src="<?php echo base_url('assets/plugins/parsleyjs/dist/parsley.min.js" type="text/javascript');?>"></script>
        <script src="<?php echo base_url('assets/plugins/parsleyjs/src/i18n/id.js" type="text/javascript');?>"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

	</body>
</html>