<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $system_title;?></title>


	<!--STYLESHEET-->
	<!--=================================================-->

	<!--Roboto Font [ OPTIONAL ]-->


	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">


	<!--Activeit Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/activeit.min.css" rel="stylesheet">


	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/glyphicons-icon.css" rel="stylesheet">


	<!--Animate.css [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/animate-css/animate.min.css" rel="stylesheet">


	<!--Morris.js [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/morris-js/morris.min.css" rel="stylesheet">


	<!--Switchery [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/switchery/switchery.min.css" rel="stylesheet">

	<!--Bootstrap Table [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">


	<!--Bootstrap Select [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

	<!--Summernote [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/summernote/summernote.min.css" rel="stylesheet">

	<!--Bootstrap Tags Input [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">


	<!--Chosen [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/chosen/chosen.min.css" rel="stylesheet">



	<!--noUiSlider [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>template/back/plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">



	<!--Bootstrap Timepicker [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">


	<!--Bootstrap Validator [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">


	<!--Dropzone [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/dropzone/dropzone.css" rel="stylesheet">

	<!--Demo script [ DEMONSTRATION ]-->
	<link href="<?php echo base_url(); ?>template/back/css/demo/activeit-demo.min.css" rel="stylesheet">

    <!--Countdown [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/countdown.css" rel="stylesheet">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">



	<!--SCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>template/back/js/date.format.js"></script>
	<script src="<?php echo base_url(); ?>template/back/js/jquery-dropdate.js"></script>
	
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url(); ?>template/back/js/country_state.js"></script>

		<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>

    <link href="<?php echo base_url(); ?>template/back/colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>
	<script src="<?php echo base_url(); ?>template/back/js/functions.js"></script>
	<script src="<?php echo base_url(); ?>template/back/js/plugins.js"></script>

    <script src="<?php echo base_url(); ?>template/back/colorpicker/dist/js/bootstrap-colorpicker.js"></script>

	<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value;?>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">
	<script>
	<?php
		$volume = $this->crud_model->get_type_name_by_id('general_settings','46','value');
        if($this->crud_model->get_type_name_by_id('general_settings','45','value') == 'ok'){
    ?>
        function sound(type){
            document.getElementById(type).volume = <?php if($volume == '10'){ echo 1 ; }else{echo '0.'.round($volume); } ?>;
            document.getElementById(type).play();
        }
    <?php
        } else {
    ?>
        function sound(type){}
    <?php
        }
    ?>
	</script>
	<script type="text/javascript">

/***********************************************
* Drop Down Date select script- by JavaScriptKit.com
* This notice MUST stay intact for use
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
***********************************************/

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];
var monthvalue=['01','02','03','04','05','06','07','08','09','10','11','12'];
function populatedropdown(dayfield, monthfield, yearfield){
var today=new Date()
var dayfield=document.getElementById(dayfield)
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var i=0; i<31; i++)
dayfield.options[i]=new Option(i, i+1)
dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
for (var m=0; m<12; m++)
monthfield.options[m]=new Option(monthtext[m], monthvalue[m])
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthvalue[today.getMonth()], true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear--;
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

function populatedropdownto(dayfield, monthfield, yearfield){
var today=new Date()
var dayfield=document.getElementById(dayfield)
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var i=1; i<31; i++)
dayfield.options[i]=new Option(i, i+1)
dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
for (var m=1; m<12; m++)
monthfield.options[m]=new Option(monthtext[m], monthvalue[m])
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthvalue[today.getMonth()], true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear--;
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

</script>

</head>
