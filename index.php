<?php include 'header.php' ?>

<div class="wrapper">
  <!-- Sidebar  -->
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
        <a class="nav-link" id="elements-tab" data-toggle="tab" href="#elements" role="tab" aria-controls="elements" aria-selected="false">
          UI Elements
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#charts" id="chartBtn">
          Charts
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#forms" id="formBtn">
          Forms
          <i class="fas fa-caret-right float-right"></i>
        </a>
      </li>            
    </ul>
  </nav>

  <!-- Page Content  -->
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
              
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0 teal" type="submit">Search</button>
              </form>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="far fa-bell"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-th"></i></a>
            </li>
            <li class="nav-item menu-icon">
              <a class="nav-link disabled" href="#"><i class="fas fa-ellipsis-h"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Main Content -->

    <main>
      <div class="container mt-4">
        <!-- Page Title -->
        <div class="page-title">
          <span class="text-muted">E-commerce Dashboard</span>
        </div>
        <!-- Breadcrumb Section -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb py-0">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active" aria-current="page">E-commerce Dashboard</li>
          </ol>
        </nav>
      </div>

      <div class="tab-content">
      <section class="tab-pane active" id="dashboard" role="tabpanel" aria-labelledby="dash-tab">
        <div class="container">
          <?php include 'includes/dashboard.inc.php' ?>
        </div>
      </section>
      <section class="tab-pane" id="elements" role="tabpanel" aria-labelledby="elements-tab">
        <div class="container">
          <?php include 'includes/elements.inc.php' ?>
        </div>
      </section>
      <section class="tab-pane" id="charts" role="tabpanel" aria-labelledby="charts-tab">
        Charts Page Lots of Charts
      </section>
      <section class="tab-pane" id="forms" role="tabpanel" aria-labelledby="forms-tab">
        A whole bunch of forms
      </section>
</div>
    </main>
  </div> <!-- end content -->
</div> <!-- end wrapper -->

<?php include 'footer.php' ?>

