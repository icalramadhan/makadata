<div class="page-title">                    
    <h2><span class="fa fa-image"></span> Profile Member</h2>
</div>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                                
                <div class="panel-body">
                    <div class="form-group">
                        <h5 class="push-up-20">Gunakan link di bawah untuk referal anda.</h5>
                            <div class="form-control readonly">http://www.jualbeliplus.com/register/<?php echo $user_info->refcode; ?></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Users Profile</h3>
                        <span>Detail Profil Logged in User</span>
                    </div>                                    
                </div>
                <div class="panel-body">
                    <p>Showing users Profile</p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Login Activity</h3>
                        <span>User login system log</span>
                    </div>                                    
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" width="70">#</th>
                                <th>IP Address </th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($list)) {
                                foreach ($list as $key => $value) {
                                    echo '<tr>';
                                    echo '<td class="text-center">' . ($key + 1) . '</td>';
                                    echo '<td><a class="text-info" href="' . base_url('admin/articles/categories/edit/' . $value->id) . '"><b>' . $value->ct_name . '</b></td>';
                                    echo '<td>' . character_limiter(strip_tags($value->ct_desc), 100) . '</td>';
                                    echo '<td class="text-center small">';
                                    echo '<a class="text-info" href="' . base_url('admin/articles/categories/edit/' . $value->id) . '"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;-&nbsp;&nbsp;';
                                    echo '<a class="text-danger" href="' . base_url('admin/articles/categories/del/' . $value->id) . '"onclick="return getConfirmation(\'Apakah anda akan menghapus data ini\')"><i class="fa fa-minus-circle"></i> Delete</a>';
                                    echo '</td>';
                                    echo '</tr>';
                                    if (!empty($value->child)) {
                                        foreach ($value->child as $key => $value) {
                                            echo '<tr>';
                                            echo '<td class="text-center">&nbsp;</td>';
                                            echo '<td><a class="text-info" href="' . base_url('admin/articles/categories/edit/' . $value->id) . '">' . $value->ct_name . '</td>';
                                            echo '<td>' . character_limiter(strip_tags($value->ct_desc), 100) . '</td>';
                                            echo '<td class="text-center small">';
                                            echo '<a class="text-info" href="' . base_url('admin/articles/categories/edit/' . $value->id) . '"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;-&nbsp;&nbsp;';
                                            echo '<a class="text-danger" href="' . base_url('admin/articles/categories/del/' . $value->id) . '"onclick="return getConfirmation(\'Apakah anda akan menghapus data ini\')"><i class="fa fa-minus-circle"></i> Delete</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }
                                    }
                                }
                            } else {
                                echo '<tr>';
                                echo '<td colspan="3"><span class="text-danger">Belum ada data</span></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
                <div class="panel-footer text-center">
                    <span>Page 0 0f 0</span>
                </div> <!--/.box-footer-->
            </div>
        </div>
    </div>
</div>