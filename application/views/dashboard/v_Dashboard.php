<style>
    #blink {
        text-align: center;
        background: red;
        color: #F00;
        margin: 0 auto;
        padding: 15px;
        width: 500px;
        box-shadow: 5px 10px 5px #00c;
        border-radius: 15px 0;
    }
</style>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        <div class="title_left">

        </div>

        <div class="clearfix"></div>



        <div class="x_panel">
            <span id="timestamp"></span>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring PO</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table  table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>#</th>
                                    <th>Nama PT</th>
                                    <th>Terakhir Update</th>
                                    <th>Hari</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_pomsal['tglisi']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>1</td>
                                        <td>MSAL</td>
                                        <td><?= $last_pomsal['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>1</td>
                                        <td>MSAL</td>
                                        <td><?= $last_pomsal['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_pomapa['tglisi']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>2</td>
                                        <td>MAPA</td>
                                        <td><?= $last_pomapa['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>2</td>
                                        <td>MAPA</td>
                                        <td><?= $last_pomapa['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_popeak['tglisi']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>3</td>
                                        <td>PEAK</td>
                                        <td><?= $last_popeak['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>3</td>
                                        <td>PEAK</td>
                                        <td><?= $last_popeak['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_popsam['tglisi']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>4</td>
                                        <td>PSAM</td>
                                        <td><?= $last_popsam['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>4</td>
                                        <td>PSAM</td>
                                        <td><?= $last_popsam['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_pokpp['tglisi']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>5</td>
                                        <td>KPP</td>
                                        <td><?= $last_pokpp['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>5</td>
                                        <td>KPP</td>
                                        <td><?= $last_pokpp['tglisi'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring Mewnet Transaction<small id="timestamp"></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table  table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>#</th>
                                    <th>Nama Tabel</th>
                                    <th>Terakhir Update</th>
                                    <th>Hari</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_transaction['CreatedDateTime']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>1</td>
                                        <td>Transaction</td>
                                        <td><?= $last_transaction['CreatedDateTime'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>1</td>
                                        <td>Transaction</td>
                                        <td><?= $last_transaction['CreatedDateTime'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring Absensi</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table  table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>#</th>
                                    <th>Nama PT</th>
                                    <th>Terakhir Update</th>
                                    <th>Hari</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_abs_msal['tgl']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>1</td>
                                        <td>MSAL</td>
                                        <td><?= $last_abs_msal['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>1</td>
                                        <td>MSAL</td>
                                        <td><?= $last_abs_msal['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_abs_mapa['tgl']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>2</td>
                                        <td>MAPA</td>
                                        <td><?= $last_abs_mapa['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>2</td>
                                        <td>MAPA</td>
                                        <td><?= $last_abs_mapa['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_abs_peak['tgl']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>3</td>
                                        <td>PEAK</td>
                                        <td><?= $last_abs_peak['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>3</td>
                                        <td>PEAK</td>
                                        <td><?= $last_abs_peak['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_abs_psam['tgl']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>4</td>
                                        <td>PSAM</td>
                                        <td><?= $last_abs_psam['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>4</td>
                                        <td>PSAM</td>
                                        <td><?= $last_abs_psam['tgl'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Monitoring Regulasi Dokumen<small id="timestamp"></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table  table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th>#</th>
                                    <th>Nama Tabel</th>
                                    <th>Terakhir Update</th>
                                    <th>Hari</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $datetime2 = strtotime(date("Y-m-d H:i:s"));
                                $datetime1 = strtotime($last_document['tgl_upload']);
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = $secs / 86400;  ?>
                                <?php if (intval($days) >= 7) { ?>
                                    <tr class="bg-danger" style="color:#fff">
                                        <td>1</td>
                                        <td>Master Dokumen</td>
                                        <td><?= $last_document['tgl_upload'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Not Updated!</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td>1</td>
                                        <td>Master Dokumen</td>
                                        <td><?= $last_document['tgl_upload'] ?></td>
                                        <td><?= intval($days) ?> Hari</td>
                                        <td>Updated</td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>





        <div class="clearfix"></div>



        <div class="clearfix"></div>
    </div>
</div>
</div>


<!-- jQuery -->
<script src="<?= base_url() ?>/vendors/jquery/dist/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        setInterval(timestamp, 1000);
    });

    function timestamp() {
        $.ajax({
            url: '<?= base_url() ?>Dashboard/timestamp',
            success: function(data) {
                $('#timestamp').html(data);
            },
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('#yTable').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        blinkFont();
    });

    function blinkFont() {
        document.getElementById("blink").style.color = "red"
        document.getElementById("blink").style.background = "white"
        setTimeout("setblinkFont()", 500)
    }

    function setblinkFont() {
        document.getElementById("blink").style.color = "white"
        document.getElementById("blink").style.background = "red"
        setTimeout("blinkFont()", 500)
    }
</script>