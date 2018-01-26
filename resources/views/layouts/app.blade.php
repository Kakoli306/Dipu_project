<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('public/admin/')}}/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('public/admin/')}}/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{asset('public/admin/')}}/assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('public/admin/')}}/assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href= class="simple-text">

                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>



                <li>
                        <a data-toggle="collapse" href="#aboutsCollapse">
                    <li class="active">
                        <i class="ti-user"></i>
                        <p>About <b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="aboutsCollapse">
                            <ul class="nav">
                                <li>
                                    <a href="{{url('/about/add') }}">
                                        <span>Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/about/manage') }}">
                                        <span>Manage </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    </li>

                    <li>
						<a data-toggle="collapse" href="#educationsCollapse">
						 <li class="active">
							<i class="ti-map"></i>
							<p>Education <b class="caret"></b></p>
						</a>
						<div class="collapse" id="educationsCollapse">
							<ul class="nav">
	                            <li>
								<a href="{{url('/education/add') }}">
										<span>Add Education</span>
									</a>
								</li>
	                            <li>
									<a href="{{url('/education/manage') }}">
										<span>Manage Education</span>
									</a>
								</li>
	                        </ul>
						</div>
					</li>
					</li>

					 <li>
						<a data-toggle="collapse" href="#circulationCollapse">
						 <li class="active">
							<i class="ti-marker-alt"></i>
							<p>Achievements <b class="caret"></b></p>
						</a>
						<div class="collapse" id="circulationCollapse">
							<ul class="nav">
	                            <li>
								<a href="{{url('/achievement/add') }}">
										<span>Add Achievement</span>
									</a>
								</li>
	                            <li>
									<a href="{{url('/achievement/manage') }}">
										<span>Manage Achievement</span>
									</a>
								</li>
	                        </ul>
						</div>
					</li>
					</li>

					<li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Resume Info<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{route('add-resume')}}">Add Resume</a>
                                    </li>
                                    <li>
                                        <a href="{{route('manage-resume')}}">Manage Resume</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>




    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>



    <!--   Core JS Files   -->
    <script src="{{asset('public/admin/')}}/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="{{asset('public/admin/')}}/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{asset('public/admin/')}}/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="{{asset('public/admin/')}}/assets/js/chartist.min.js"></script>



    <!--  Google Maps Plugin    -->
    <script type="{{asset('public/admin/')}}/text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{asset('public/admin/')}}/assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{asset('public/admin/')}}/assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();



    	});
	</script>

</html>
