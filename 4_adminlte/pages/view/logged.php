<?php
  session_start();
  if (!isset($_SESSION["logged"]) || session_status() != 2){
    $_SESSION["error"] = "Zaloguj się!";
    header("location: ../");
  }else{
    //wybór roli
    switch($_SESSION["logged"]["role_id"]){
      case 1:
        $role_id = "logged_user";
        break;
	    case 2:
		    $role_id = "logged_moderator";
		    break;
	    case 3:
		    $role_id = "logged_admin";
		    break;
    }
  }

if (isset($_SESSION["logged"]["last_activity"])){
	//echo $_SESSION["logged"]["last_activity"];
	$lastActivityTime = $_SESSION["logged"]["last_activity"];
	$currentTime = time();
	$sessionTimeout = 1440; //1 minuta

	if ($currentTime - $lastActivityTime > $sessionTimeout){
		$_SESSION["error"] = "Sesja użytkownika wygasła!";
    unset($_SESSION["logged"]);
		header("location: ../");
    exit();
	}
}else{
	$_SESSION["error"] = "Sesja użytkwonika wygasła lub nie jest aktywna!";
  header("location: ../");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php
    require_once "./$role_id/navbar.php";
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
	<?php
	  require_once "./$role_id/aside.php";
	?>

  <!-- Content Wrapper. Contains page content -->
	<?php
	  require_once "./$role_id/content.php";
	?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
	<?php
	  require_once "./footer.php";
	?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
</body>
</html>
