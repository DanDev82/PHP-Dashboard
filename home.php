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
            <li class="nav-item">
              <a class="nav-link menu-icon" href="#">
              <span class="fa-layers fa-fw">
                <i class="far fa-bell"></i>
                <span class="fa-layers-counter fa-layers-top-right">2</span>
              </span>
              <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle menu-icon" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span id="welcome">Welcome <?php echo $_SESSION['firstName'];?>&nbsp;</span><i class="far fa-user"></i></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Something</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-icon" href="#"><i class="fas fa-ellipsis-h"></i></a>
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
        <section class="tab-pane active animated fadeIn" id="dashboard" role="tabpanel" aria-labelledby="dash-tab">
          <div class="container">
            <?php include 'includes/dashboard.inc.php' ?>
          </div>
        </section>
        <section class="tab-pane" id="clients" role="tabpanel" aria-labelledby="clients-tab">
          <div class="container">
            <?php include 'includes/clients.inc.php' ?>
          </div>
        </section>
        <section class="tab-pane" id="props" role="tabpanel" aria-labelledby="props-tab">
        <?php include 'includes/proposals.inc.php' ?>
        </section>
        <section class="tab-pane" id="mbp" role="tabpanel" aria-labelledby="mbp-tab">
        <?php include 'includes/managedbillingprogram.inc.php' ?>
        </section>
        <section class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <?php include 'includes/settings.inc.php' ?>
        </section>
      </div>
    </main>
  </div> 
  <!--****************************** 
          End Page Content  
  *******************************-->
</div> <!-- end wrapper -->



<!--****************************** 
            MODALS
*******************************-->
<div class="modal fade" id="productOneModal" tabindex="-1" role="dialog" aria-labelledby="productOneLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productOneLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col col-sm-4">
            <img src="https://via.placeholder.com/150" alt="">
            </div>
            <div class="col col-sm-8">
              <h3>Some Title</h3>
              <p>ID0001</p>
              <ul class="list-group">
                <li class="list-group-item">Item 1</li>
                <li class="list-group-item">Item 2</li>
                <li class="list-group-item">Item 3</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col col-sm-12">
              <div id="chart_div6" style="width: 100%; height: auto; margin: auto;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="productTwoModal" tabindex="-1" role="dialog" aria-labelledby="productTwoLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productOneLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col col-sm-4">
            <img src="https://via.placeholder.com/150" alt="">
            </div>
            <div class="col col-sm-8">
              <h3>Some Title</h3>
              <p>ID0001</p>
              <ul class="list-group">
                <li class="list-group-item">Item 1</li>
                <li class="list-group-item">Item 2</li>
                <li class="list-group-item">Item 3</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col col-sm-12">
              <div id="chart_div7" style="width: 100%; height: auto; margin: auto;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="productThreeModal" tabindex="-1" role="dialog" aria-labelledby="productThreeLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productOneLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col col-sm-4">
            <img src="https://via.placeholder.com/150" alt="">
            </div>
            <div class="col col-sm-8">
              <h3>Some Title</h3>
              <p>ID0001</p>
              <ul class="list-group">
                <li class="list-group-item">Item 1</li>
                <li class="list-group-item">Item 2</li>
                <li class="list-group-item">Item 3</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col col-sm-12">
              <div id="chart_div8" style="width: 100%; height: auto; margin: auto;"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> <!-- END MODALS -->

<?php include 'footer.php' ?>