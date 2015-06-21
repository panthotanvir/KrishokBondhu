<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title></title>
<link href="<?php echo base_url(); ?>assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ddsmoothmenu.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ddsmoothmenu.js"></script>
<script type="text/javascript">
	ddsmoothmenu.init({
		mainmenuid : "templatemo_side_menu",
		orientation : 'v',
		classname : 'ddsmoothmenu',

		contentsource : "markup"
	})

	ddsmoothmenu.init({
		mainmenuid : "templatemo_menu",
		orientation : 'h',
		classname : 'ddsmoothmenu',

		contentsource : "markup"
	})

</script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/jquery.dualSlider.0.2.css" />
<script src="<?php echo base_url(); ?>assets/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {

		$("#carousel").dualSlider({
			auto : true,
			autoDelay : 3000,
			easingCarousel : "swing",
			easingDetails : "easeOutBack",
			durationCarousel : 1000,
			durationDetails : 600
		});

	});

</script>
</head>
<body>
<table align="center" border="0" bgcolor="#DBFFB7">
  <tr>
    <td><div id="templatemo_header_wrapper">
        <div id="templatemo_header">
          <div id="site_title"><a href="#">Free CSS Templates</a></div>
          
