<?php include 'header.php' ?>

<div class="wrapper">
  <!--****************************** 
              Sidebar  
  *******************************-->
  <nav id="sidebar" class="shadow">
    <div class="sidebar-header">
      <h3>At A Glance</h3>
      <strong>AAG</strong>
    </div>

    <ul class="list-unstyled components nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a href="#dashboard" class="nav-link active" id="dash-tab" data-toggle="tab" role="tab" aria-controls="dashboard" aria-selected="true">
          Dashboard
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="clients-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="clients" aria-selected="false" onclick="loader()">
          Clients
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#props" id="props-tab" data-toggle="tab" href="#props" role="tab" aria-controls="props" aria-selected="false" onclick="loader()">
          Proposals
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#mbp" id="mbp-tab" data-toggle="tab" href="#mbp" role="tab" aria-controls="mbp" aria-selected="false" title="Managed Billing Program">
          MBP
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>    
      <li class="nav-item">
        <a href="#settings" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
          Settings
          <i class="fas fa-caret-right float-right"></i>
        </a>
        <ul class="nav" id="sidebar-settings-content">
          <li class="nav-item"><a href="#">Users</a></li>
          <li class="nav-item"><a href="#">Roles</a></li>
          <li class="nav-item"><a href="#">Themes</a></li>
        </ul>
      </li>         
    </ul>

  </nav>
  <!--****************************** 
              End Sidebar  
  *******************************-->
 
  <!--****************************** 
              Page Content  
  *******************************-->
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow  bg-white">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-align-left"></i>
          <!-- <span>Toggle Sidebar</span> -->
        </button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-center"></i> 
        <!-- <span class="navbar-toggler-icon"></span> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-2 ml-auto">
            <li class="nav-item">
              
              <form class="form-inline my-2 my-lg-0 search-form">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0 teal search-button" type="submit">Search</button>
              </form>

            </li>
            <!-- NOTIFICATIONS -->
            <li class="nav-item dropdown">

              <a class="nav-link menu-icon" href="#">
                <span class="fa-layers fa-fw">
                  <i class="far fa-bell"></i>
                  <span class="fa-layers-counter fa-layers-top-right">2</span>
                </span>
              </a>

              <span class="sr-only">(current)</span></a>
            </li>
            <!-- USER -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle menu-icon" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span id="welcome">Hi <?php echo $_SESSION['firstName'];?>&nbsp;</span><i class="far fa-user"></i></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Something</a>
                <div class="dropdown-divider"></div>
                <form action="includes/logout.inc.php" method="POST">
                  <input type="submit" name="logout-submit" class="dropdown-item" value="Logout">
                </form>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-icon" href="#"><i class="fas fa-ellipsis-h"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <?php include 'footer.php' ?>