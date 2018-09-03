<div class="page-title">                    
    <h2><span class="fa fa-desktop"></span> Dashboard Member</h2>
</div>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Hello!</strong> Selamat Datang <?php echo $this->ion_auth->user()->row()->first_name; ?>.
            </div>

            <?php
            if (!empty($msg)) {
                echo $msg;
            }
            ?>
        </div>
    </div>

    <div class="row">
        <!-- MAIL COMPOSE WIDGET -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-bank"></span> Daftar Akun Bank</h3>                                      
                </div>
                <ul class="panel-body list-group list-group-contacts">
                    <li class="list-group-item">
                        <img src="<?php echo base_url('assets/img_shared/bca.png'); ?>" class="pull-left thumbnail" style="height: 40px;width: 123px;border: none" alt="BCA" />
                        <span class="contacts-title">BCA No. Rekening : 0890230288</span>
                        <p>Cabang KCU Pasuruan | a.n. M. ROZIQ ZAINUDDIN</p>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php echo base_url('assets/img_shared/bni.png'); ?>" class="pull-left thumbnail" style="height: 40px;width: 123px;border: none" alt="BNI"/>
                        <span class="contacts-title">BNI No. Rekening : 0343002543</span>
                        <p>Cabang Tanjung Perak | a.n. DIAN SANUBARI</p>
                    </li>                                
                    <li class="list-group-item">
                        <img src="<?php echo base_url('assets/img_shared/bri.png'); ?>" class="pull-left thumbnail" style="height: 29px;width: 123px;border: none;margin-top: 5px" alt="BRI"/>
                        <span class="contacts-title">BRI No. Rekening : 1050-01-000947-53-5</span>
                        <p>Cabang KCP Gubeng | a.n. AGUNG GUNAWAN</p>
                    </li>                                
                    <li class="list-group-item">
                        <img src="<?php echo base_url('assets/img_shared/cimb.png'); ?>" class="pull-left thumbnail" style="height: 19px;width: 123px;border: none;margin-top: 10px" alt="CIMB NIAGA"/>
                        <span class="contacts-title">CIMB NIAGA No. Rekening : 013-01-98503-16-5</span>
                        <p>Cabang Sby Darmo | a.n. DENNY PRASETYO</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END MAIL COMPOSE WIDGET --> 
        <div class="col-md-4">
            <div class="col-md-12">
                <div class="widget widget-info widget-padding-sm">
                    <div class="widget-int">Rp. <?php echo number_format($user_info->saldo_total, 2); ?></div>
                    <div class="widget-title">Total Saldo</div>
                    <div class="widget-subtitle">Di akun anda</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="widget widget-warning widget-padding-sm">
                    <div class="widget-int">Rp. <?php echo number_format($user_info->wd_total, 2); ?></div>
                    <div class="widget-title">Total Withdrawal</div>
                    <div class="widget-subtitle">Di akun anda</div>
                </div>
            </div>
            <div class="col-sm-12">
                <!-- START USERS ACTIVITY BLOCK -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title-box">
                            <h3>Users Activity</h3>
                            <span>Last Login</span>
                        </div>                                    
                        <ul class="panel-controls" style="margin-top: 2px;">
                            <li><a href="" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        </ul>                                    
                    </div>                                
                    <div class="panel-body">
                        <p>No Activity Logged</p>
                    </div>                                    
                </div>
                <!-- END USERS ACTIVITY BLOCK -->
            </div>
        </div>
    </div>
</div>