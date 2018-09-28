<!-- Toolbars -->
<div id="content">
        <div class="container">
          <div class="row bar mb-0">
            <div id="customer-orders" class="col-md-9">
              <p class="text-muted lead">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
              <div class="box mt-0 mb-lg-0">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th># 1735</th>
                        <td>22/06/2013</td>
                        <?php echo '<td><b>Rp.' . number_format (0, 2) . '</b></td>';?>
                        <td><span class="badge badge-info">Being prepared</span></td>
                        <td><a href="<?php echo base_url('member/order/detail/12');?>" class="btn btn-template-outlined btn-sm">View</a></td>
                      </tr>
                      <tr>
                        <th># 1735</th>
                        <td>22/06/2013</td>
                        <?php echo '<td><b>Rp.' . number_format (0, 2) . '</b></td>';?>
                        <td><span class="badge badge-info">Being prepared</span></td>
                        <td><a href="customer-order.html" class="btn btn-template-outlined btn-sm">View</a></td>
                      </tr>
                      <tr>
                        <th># 1735</th>
                        <td>22/06/2013</td>
                        <?php echo '<td><b>Rp.' . number_format (0, 2) . '</b></td>';?>
                        <td><span class="badge badge-success">Received</span></td>
                        <td><a href="customer-order.html" class="btn btn-template-outlined btn-sm">View</a></td>
                      </tr>
                      <tr>
                        <th># 1735</th>
                        <td>22/06/2013</td>
                        <?php echo '<td><b>Rp.' . number_format (0, 2) . '</b></td>';?>
                        <td><span class="badge badge-danger">Cancelled</span></td>
                        <td><a href="customer-order.html" class="btn btn-template-outlined btn-sm">View</a></td>
                      </tr>
                      <tr>
                        <th># 1735</th>
                        <td>22/06/2013</td>
                        <?php echo '<td><b>Rp.' . number_format (0, 2) . '</b></td>';?>
                        <td><span class="badge badge-warning">On hold</span></td>
                        <td><a href="customer-order.html" class="btn btn-template-outlined btn-sm">View</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Customer section</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="<?php echo base_url('member/order');?>" class="nav-link active"><i class="fa fa-list"></i> My Orders</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('member/myaccount');?>" class="nav-link"><i class="fa fa-user"></i> My Account</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('auth/logout');?>" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>