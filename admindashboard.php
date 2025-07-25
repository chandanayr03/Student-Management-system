

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Insight</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Student Insight</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
       <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">ADMIN</p>

        </div>
      </div>
      <ul class="app-menu">
     <li><a class="app-menu__item active" href="admindashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
     <li><a class="app-menu__item " href="AddStudent.php"><i class="app-menu__icon fa fa-plus-square"></i><span class="app-menu__label">Add Student</span></a></li>

     <li><a class="app-menu__item " href="ViewStudent.php"><i class="app-menu__icon fa fa-plus-square"></i><span class="app-menu__label">View Student</span></a></li>
     <li><a class="app-menu__item " href="AddFaculty.php"><i class="app-menu__icon fa fa-play-circle"></i><span class="app-menu__label">Add Faculty</span></a></li>
     <li><a class="app-menu__item " href="ViewFaculty.php"><i class="app-menu__icon fa fa-play-circle"></i><span class="app-menu__label">View Faculty</span></a></li>
     
    <!-- <li><a class="app-menu__item " href="AddaAssignment.php"><i class="app-menu__icon fa fa-calendar-plus-o"></i><span class="app-menu__label">Add Assignment</span></a></li> -->
        <!-- <li><a class="app-menu__item" href="AddaNotes.php"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Add Notes</span></a></li> -->
	  
        <li><a class="app-menu__item" href="AddaTimetable.php"><i class="app-menu__icon fa fa-calendar-plus-o"></i><span class="app-menu__label">Add Timetable</span></a></li>
        <li><a class="app-menu__item" href="AddFeeReminder.php"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Add Fee Reminder</span></a></li>
        <li><a class="app-menu__item" href="AddEvent.php"><i class="app-menu__icon fa fa-trash"></i><span class="app-menu__label">Add Event</span></a></li>

</ul>
    </aside>
    <main class="app-content">
     <div class="app-title">
        <div>
        <h1><i class="fa fa-sign-language"></i> Student Insight</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <div class="form"><center>
           
<p>A Student Management System (SMS) is a robust software application meticulously designed to handle and streamline a myriad of administrative tasks associated with student information and academic records within educational institutions. The advent of such systems signifies a substantial leap from traditional manual processes to more sophisticated, automated solutions. This transition aims to improve operational efficiency, significantly reduce the manual workload of administrative staff, and enhance the overall management experience within educational frameworks.</p>
<img src="assets/img/admin.jpeg" width="800" height="600"></img>
</form>
     
        
       
		   
	    
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 200,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 100,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>