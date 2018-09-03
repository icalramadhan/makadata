<div class="page-title">                    
    <h2><span class="fa fa-list"></span> List Master Bank</h2>
</div>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/bank'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;Master Bank</a>
                    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/bank/adm/add'); ?>"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Tambah Bank Admin</a>
                </div>
                <div class="panel-body">
                    <div class="box-body table-responsive">
                        <?php
                        if (!empty($msg)) {
                            echo $msg;
                        }
                        ?>

                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" width="50">#</th>
                                    <th class="text-center" width="100">Nama Bank</th>
                                    <th class="text-center" width="250">Pemilik Rekening</th>
                                    <th class="text-center" width="100">No. Rekening</th>
                                    <th class="text-center" width="130">Cabang</th>
                                    <th class="text-center" width="50">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($list)) {
                                    $jumlah_1 = count($list);
                                    foreach ($list as $key => $value) {
                                        echo '<tr>';
                                        echo '<td class="text-center">' . ($key + 1) . '</td>';
                                        echo '<td><a class="text-info" href="' . base_url('admin/bank/adm/edit/' . $value->id) . '"><b>' . $value->nama_bank . '</b></a></td>';
                                        echo '<td>' . $value->bank_rek_acc . '</td>';
                                        echo '<td>' . $value->bank_rek_no . '</td>';
                                        echo '<td>' . $value->bank_rek_branch . '</td>';
                                        echo '<td class="text-center small">'
                                        . ' <a class="text-info" href="' . base_url('admin/bank/adm/edit/' . $value->id) . '"><i class="fa fa-edit"></i> Edit</a>&nbsp;&nbsp;-&nbsp;&nbsp;'
                                        . ' <a class="text-danger" href="' . base_url('admin/bank/adm/del/' . $value->id) . '" onclick="return getConfirmation(\'Apakah anda akan menghapus data ini?.Jika Parent Menu, Child akan dihapus juga.\')"><i class="fa fa-minus-circle"></i> Delete</a></td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr>';
                                    echo '<td colspan="6"><span class="text-danger">Tidak ada data</span></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
</div>