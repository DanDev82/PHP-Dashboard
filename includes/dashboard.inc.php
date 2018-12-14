<div class="container" class="no-gap-columns">
  <div class="row">

    <div class="col col-md-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Activity</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="rev">Card subtitle</h6>
          <div id="table_div1"></div>
        </div>
      </div>
    </div>
    
    <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Invoice Warnings</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="aff">Card subtitle</h6>
          <div id="chart_div2"></div>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
  <div class="row mt-2">
    
    <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Late Bills</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="ref">Card subtitle</h6>
          <div id="chart_div3"></div>
        </div>
      </div>
    </div>

    <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Savings</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="avg">Card subtitle</h6>
          <div id="chart_div4"></div>
        </div>
      </div>
    </div>

        <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Activity</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="rev">Card subtitle</h6>
          <div id="chart_div10"></div>
        </div>
      </div>
    </div>

  </div> <!-- End row -->
  <div class="row mt-2">
    
    <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Invoice Warnings</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="aff">Card subtitle</h6>
          <div id="chart_div11"></div>
        </div>
      </div>
    </div>

    <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Late Bills</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="ref">Card subtitle</h6>
          <div id="chart_div12"></div>
        </div>
      </div>
    </div>

    <div class="col col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Savings</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="avg">Card subtitle</h6>
          <div id="chart_div13"></div>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
  <div class="row mt-2">
  
    <div class="col col-md-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">New Calendar</h5>
          <h6 class="card-subtitle mb-2 text-muted" id="ref">Not Yet Dynamic</h6>
          <?php include 'calendar.inc.php' ?>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->

  <div class="row mt-2">
    <div class="col col-md-9">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Total Invoiced</h5>
          <h6 class="card-subtitle mb-2 text-muted">Order Details</h6>
          <table class="table table-responsive" id="productsTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">ID</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Order Date</th>
                <th scope="col">Customer</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><img src="https://via.placeholder.com/50" alt=""></td>
                <td>ACME Lotion</td>
                <td><a href="#" data-toggle="modal" data-target="#productOneModal">ID0001</a></td>
                <td>12</td>
                <td>2.99</td>
                <td>2018/11/24</td>
                <td>Malone, Kevin</td>
                <td>In Transit</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><img src="https://via.placeholder.com/50" alt=""></td>
                <td>ACME Shampoo</td>
                <td><a href="#" data-toggle="modal" data-target="#productTwoModal">ID0002</a></td>
                <td>1</td>
                <td>12.99</td>
                <td>2018/12/03</td>
                <td>Hawkins, Joe</td>
                <td>Delivered</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><img src="https://via.placeholder.com/50" alt=""></td>
                <td>ACME Conditioner</td>
                <td><a href="#" data-toggle="modal" data-target="#productThreeModal">ID0003</a></td>
                <td>1</td>
                <td>13.99</td>
                <td>2018/12/03</td>
                <td>Hawkins, Joe</td>
                <td>Delivered</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Customer Acquisitions</h5>
          
          <div id="chart_div5"></div>

        </div>
      </div>
    </div>
  </div> <!-- End Row -->
  <!-- ROW -->

  <div class="row mt-2">
    <div class="col col-md-9">
      <div class="card"">
        <div class="card-body">
          <h5 class="card-title">Recent Orders</h5>
          <h6 class="card-subtitle mb-2 text-muted">Order Details</h6>
          <div id="table_div"></div>
        </div>
      </div>
    </div>
    <div class="col col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Top Performing Campaigns </h5>
          <div id="columnchart_values"></div>
        </div>
      </div>
    </div>
  </div> <!-- End Row -->

  <!-- End Row -->


  
</div> <!-- End Container -->



