<div id="content">
        <div class="container">
          <div class="row bar">
            <div id="customer-order" class="col-lg-9">
              <p class="lead">Order #1735 was placed on <strong>22/06/2013</strong> and is currently <strong>Being prepared</strong>.</p>
              <p class="lead text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
              <div class="box">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="border-top-0">Product</th>
                        <th class="border-top-0">Quantity</th>
                        <th class="border-top-0">Unit price</th>
                        <th class="border-top-0">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>White Blouse Armani</td>
                        <td>2</td>
                        <?php echo '<td>Rp.' . number_format (0, 2) . '</td>';?>
                        <?php echo '<td>Rp.' . number_format (0, 2) . '</td>';?>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="3" class="text-right">Order subtotal</th>
                        <?php echo '<th>Rp.' . number_format (0, 2) . '</th>';?>
                      </tr>
                      <tr>
                        <th colspan="3" class="text-right">Shipping and handling</th>
                        <?php echo '<th>Rp.' . number_format (0, 2) . '</th>';?>
                      </tr>
                      <tr>
                        <th colspan="3" class="text-right"><b>Total</b></th>
                       <?php echo '<th>Rp.' . number_format (0, 2) . '</th>';?>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="row addresses">
                  <div class="col-md-6 text-right">
                    <h3 class="text-uppercase">Invoice address</h3>
                    <p>John Brown<br>                       13/25 New Avenue<br>                        New Heaven<br>                      45Y 73J<br>                     England<br>                     Great Britain</p>
                  </div>
                  <div class="col-md-6 text-right">
                    <h3 class="text-uppercase">Shipping address</h3>
                    <p>John Brown<br>                       13/25 New Avenue<br>                        New Heaven<br>                      45Y 73J<br>                     England<br>                     Great Britain</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mt-4 mt-lg-0">
              <!-- CUSTOMER MENU -->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Customer section</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="<?php echo base_url('member/order');?>" class="nav-link active"><i class="fa fa-list"></i> My orders</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('member/myaccount');?>" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('auth/logout');?>" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>