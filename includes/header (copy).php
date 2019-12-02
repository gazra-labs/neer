<?php
  session_start();
  if(!isset($_SESSION['pwd']))
  {
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Neer-Qualité</title>
	<script type="text/javascript">
		function confirmDel()
		{
			var x = confirm("Are you sure?");

			if (x==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function confirmSurveyDel()
		{
			var g = confirm("Are you sure?");

			if (g==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		function confirmAdd()
		{
			var a = confirm("Do you want to add this data?");

			if(a==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		function confirmSurveyAdd()
		{
			var f = confirm("Do you want to add this Survey data?");

			if(f==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		function confirmSurveyUpdate()
		{
			var e = confirm("Are you sure you want to update survey data?");

			if(e==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function confirmUpdate()
		{
			var b = confirm("Are you sure you want to update this data?");

			if(b==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		function addField()
		{
			var g = confirm("Are you sure you want to add this field?");

			if (g==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		
		
		
		function confirmUpdateAdmin()
		{
			var c = confirm("Are you sure you want to change password?");

			if(c==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">

	<link id="base-style" href="css/style.css" rel="stylesheet">

	<link id="base-style" href="css/style.min.css" rel="stylesheet">

	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- date extension -->
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<script>
		$(document).ready(function(){
			//var date_input=$('input[name="txtrectifieddate"]');
		// var date_input=$('input[name="txtcomplaintdate"]'); //our date input has the name "date"
			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			$( ".datepicker" ).datepicker({
				format: 'mm/dd/yyyy',
				container: container,
				todayHighlight: true,
				autoclose: true,
			})
		})
	</script>

	<!-- end date extension
 -->

		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span> </span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Administrator
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="change_admin_password.php"><i class="halflings-icon cog"></i> Change Password</a></li>
								<!-- <li><a href="change_admin_password.php?aUN=<?php echo $row['Administrator']; ?>"><i class="halflings-icon cog"></i> Change Password
								</a></li> -->
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->