<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <div class="bg-light p-10 rounded mt-0">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div>
                <?php if ($user['level'] == 'administrator') { // แสดงลิงค์ไปยังหน้าผู้ดูแลระบบเมื่อผู้ใช้เป็นแอดมิน ?>
                    <a href="admin.php" class="btn btn-lg btn-warning">หน้าสำหรับผู้ดูแลระบบ</a>
                <?php } ?>
            </div>
                
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">  <h5>สวัสดี <?php echo $user['fullname']; ?></h5> </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <h5>สวัสดี <?php echo $user['fullname']; ?></h5> <h4>ระดับผู้ใช้ <?php echo $user['level']; ?></h4>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Profile.php">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout_action.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                pang
                            </a>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                          
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Profile</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">User Profile</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">

<div class="card card-primary card-outline">
<div class="card-body box-profile">
<div class="text-center">
<img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
</div>
<h3 class="profile-username text-center">Nina Mcintire</h3>
<p class="text-muted text-center">Software Engineer</p>
<ul class="list-group list-group-unbordered mb-3">
<li class="list-group-item">
<b>Followers</b> <a class="float-right">1,322</a>
</li>
<li class="list-group-item">
<b>Following</b> <a class="float-right">543</a>
</li>
<li class="list-group-item">
<b>Friends</b> <a class="float-right">13,287</a>
</li>
</ul>
<a href="Editprofile.php" class="btn btn-primary btn-block"><b>Edit profile</b></a>
</div>

</div>


<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">About Me</h3>
</div>

<div class="card-body">
<strong><i class="fas fa-book mr-1"></i> Education</strong>
<p class="text-muted">
B.S. in Computer Science from the University of Tennessee at Knoxville
</p>
<hr>
<strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
<p class="text-muted">Malibu, California</p>
<hr>
<strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
<p class="text-muted">
<span class="tag tag-danger">UI Design</span>
<span class="tag tag-success">Coding</span>
<span class="tag tag-info">Javascript</span>
<span class="tag tag-warning">PHP</span>
<span class="tag tag-primary">Node.js</span>
</p>
<hr>
<strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
</div>

</div>

</div>

<div class="col-md-9">
<div class="card">
<div class="card-header p-2">
<ul class="nav nav-pills">
<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
<li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="active tab-pane" id="activity">

<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
<span class="username">
<a href="#">Jonathan Burke Jr.</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Shared publicly - 7:30 PM today</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore the hate as they create awesome
tools to help create filler text for everyone from bacon lovers
to Charlie Sheen fans.
</p>
<p>
<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
<span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
</p>
<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div>


<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
<span class="username">
<a href="#">Sarah Ross</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Sent you a message - 3 days ago</span>
</div>






<form class="form-horizontal">
<div class="input-group input-group-sm mb-0">
<input class="form-control form-control-sm" placeholder="Response">
<div class="input-group-append">
<button type="submit" class="btn btn-danger">Send</button>
</div>
</div>
</form>
</div>


<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
<span class="username">
<a href="#">Adam Jones</a>
<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
</span>
<span class="description">Posted 5 photos - 5 days ago</span>
</div>

<div class="row mb-3">
<div class="col-sm-6">
<img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
</div>

<div class="col-sm-6">
<div class="row">
<div class="col-sm-6">
<img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
<img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
</div>

<div class="col-sm-6">
<img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
<img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
</div>

</div>

</div>

</div>

<p>
<a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
<a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
<span class="float-right">
<a href="#" class="link-black text-sm">
<i class="far fa-comments mr-1"></i> Comments (5)
</a>
</span>
</p>
<input class="form-control form-control-sm" type="text" placeholder="Type a comment">
</div>

</div>

<div class="tab-pane" id="timeline">

<div class="timeline timeline-inverse">

<div class="time-label">
<span class="bg-danger">
10 Feb. 2014
</span>
</div>


<div>
<i class="fas fa-envelope bg-primary"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
<div class="timeline-body">
Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
weebly ning heekya handango imeem plugg dopplr jibjab, movity
jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
quora plaxo ideeli hulu weebly balihoo...
</div>
<div class="timeline-footer">
<a href="#" class="btn btn-primary btn-sm">Read more</a>
<a href="#" class="btn btn-danger btn-sm">Delete</a>
</div>
</div>
</div>


<div>
<i class="fas fa-user bg-info"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
<h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
</h3>
</div>
</div>


<div>
<i class="fas fa-comments bg-warning"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
<div class="timeline-body">
Take me to your leader!
Switzerland is small and neutral!
We are more like Germany, ambitious and misunderstood!
</div>
<div class="timeline-footer">
<a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
</div>
</div>
</div>


<div class="time-label">
<span class="bg-success">
3 Jan. 2014
</span>
</div>


<div>
<i class="fas fa-camera bg-purple"></i>
<div class="timeline-item">
<span class="time"><i class="far fa-clock"></i> 2 days ago</span>
<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
<div class="timeline-body">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
</div>
</div>
</div>

<div>
<i class="far fa-clock bg-gray"></i>
</div>
</div>
</div>

<div class="tab-pane" id="settings">
<form class="form-horizontal">
<div class="form-group row">
<label for="inputName" class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputName" placeholder="Name">
</div>
</div>
<div class="form-group row">
<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail" placeholder="Email">
</div>
</div>
<div class="form-group row">
<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputName2" placeholder="Name">
</div>
</div>
<div class="form-group row">
<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
<div class="col-sm-10">
<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
</div>
</div>
<div class="form-group row">
<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<div class="checkbox">
<label>
<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
</label>
</div>
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<button type="submit" class="btn btn-danger">Submit</button>
</div>
</div>
</form>
</div>

</div>

</div>
</div>

</div>

</div>

</div>
</section>

</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>        


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        </div>
    </div>
</body>

</html>