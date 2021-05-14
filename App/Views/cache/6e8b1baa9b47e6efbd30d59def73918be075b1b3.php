<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?> </title>
    <link rel="stylesheet" href="../../css/build.css">
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
  
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="index" class="list-group-item list-group-item-action ">Dashboard</a>
        <a href="categories" class="list-group-item list-group-item-action "><i class="far fa-window-restore" > </i>&nbsp; Categorias</a>
        <a href="#" class="list-group-item list-group-item-action ">Overview &nbsp;</a>
        <a href="#" class="list-group-item list-group-item-action ">Events</a>
        <a href="#" class="list-group-item list-group-item-action ">Profile</a>
        <a href="#" class="list-group-item list-group-item-action ">Status</a>
      </div>
    </div>
    
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="mb-1 navbar navbar-expand-lg navbar-dark blue-gradient ">
        
        <button class="blue-gradient color-block mb-3 mx-auto rounded-circle z-depth-1" id="menu-toggle"><i class="fas fa-bars"></i></button>
      
<!--Navbar -->
  <a class="navbar-brand" href="#">Navbar</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <link rel="stylesheet" href="">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
        </a>
      </li>
    </ul>
  </div>
      </nav>

      <div class="container-fluid">
      <?php echo $__env->yieldContent('content'); ?>
    </div>

  </div>
 

 

</body>
</html>
<!-- JQuery -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script src="../../Ajax/ajax.js"></script>

<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>