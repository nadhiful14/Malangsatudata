<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            DASHBOARD
            <small>KABUPATEN MALANG SATU DATA</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="<?php echo base_url('Alatangkutd'); ?>"><span class="info-box-icon bg-aqua"><img style="width: 70px; margin-bottom: 9px;" src="<?php echo base_url('assets/gambar_sektor/truk.png') ?>"></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Truk</span>
                        <span class="info-box-text">Sampah <?php echo $tahuntruk; ?></span>
                        <?php
                        foreach ($truk->result_array() as $a) {
                            $jumlah = $a['jumlah'];
                        ?>
                            <span class="info-box-number"><a href="<?php echo base_url('Alatangkutd'); ?>"><?php echo $jumlah; ?></a></span>
                        <?php
                        }


                        ?>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="<?php echo base_url('Jumlahphk'); ?>">
                        <span class="info-box-icon bg-aqua"><img style="width: 70px; margin-bottom: 9px;" src="<?php echo base_url('assets/gambar_sektor/sektor_perumahan.png') ?>"></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah PHK</span>
                        <span class="info-box-text">Tahun <?php echo $tahunphk; ?></span>
                        <?php
                        foreach ($phk->result_array() as $a) {
                            $jumlah = $a['jumlah'];
                        ?>
                            <span class="info-box-number"><a href="<?php echo base_url('Jumlahphk'); ?>"><?php echo $jumlah; ?></a></span>
                        <?php
                        }


                        ?>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="<?php echo base_url('Pasar_modern'); ?>">
                        <span class="info-box-icon bg-aqua"><img style="width: 70px; margin-bottom: 9px;" src="<?php echo base_url('assets/gambar_sektor/pasar_modern.png') ?>"></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pasar</span>
                        <span class="info-box-text">Modern <?php echo $tahunmodern; ?></span>
                        <?php
                        foreach ($modern->result_array() as $a) {
                            $jumlah = $a['jumlah'];
                        ?>
                            <span class="info-box-number"><a href="<?php echo base_url('Pasar_modern'); ?>"><?php echo $jumlah; ?></a></span>
                        <?php
                        }


                        ?>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <a href="<?php echo base_url('Transmigrasi'); ?>">
                        <span class="info-box-icon bg-aqua"><img style="width: 70px; margin-bottom: 9px;" src="<?php echo base_url('assets/gambar_sektor/sektor_transmigrasi.png') ?>"></span></a>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah</span>
                        <span class="info-box-text">Transmigran <?php echo $tahuntransmigran; ?></span>
                        <?php
                        foreach ($transmigrasi->result_array() as $a) {
                            $jumlah = $a['jumlah'];
                        ?>
                            <span class="info-box-number"><a href="<?php echo base_url('Transmigrasi'); ?>"><?php echo $jumlah; ?></a></span>
                        <?php
                        }


                        ?>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Laporan Bencana Alam Tahunan</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-bordered table-striped compact cell-border" style=" text-align:center">
                                    <thead>
                                        <tr>

                                            <th style="vertical-align:middle;width:25px;  text-align:center;" rowspan="2">No</th>
                                            <!--   <th style="vertical-align:middle; width:100px;   text-align:center; " rowspan="2" >Kecamatan</th> -->
                                            <th style="vertical-align:middle;width:100px;  text-align:center;" rowspan="2">Bencana Alam</th>
                                            <th style="vertical-align:middle;width:100px;  text-align:center;" rowspan="2">Banyak Bencana</th>
                                            <th style="vertical-align:middle;width:100px;  text-align:center;" colspan="2">Jumlah Korban</th>
                                            <th style="vertical-align:middle;width:100px;  text-align:center;" rowspan="2">Tahun</th>
                                        </tr>
                                        <tr>
                                            <th style="width:100px;  text-align:center;">Meninggal</th>
                                            <th style="width:100px;  text-align:center;">Luka - luka</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($data->result_array() as $a) {
                                            $no++;
                                            $bencana = $a['bencana'];
                                            $banyak = $a['banyak_bencana'];
                                            $meninggal = $a['meninggal'];
                                            $luka = $a['luka'];
                                            $periode = $a['periode'];
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $bencana; ?></td>
                                                <td><?php echo $banyak; ?></td>
                                                <td><?php echo $meninggal; ?></td>
                                                <td><?php echo $luka; ?></td>
                                                <td><?php echo $periode; ?></td>
                                            </tr>
                                        <?php
                                        }

                                        ?>
                                    </tbody>
                                </table> <!-- /.chart-responsive -->
                                <a style="color:black;" href="<?php echo base_url('Bencana'); ?>"><em>Klik untuk melihat lebih banyak data</em></a>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-4">
                                <p class="text-center">
                                    <strong>Ragam Sektor</strong>
                                </p>

                                <div class="progress-group">
                                    <span class="progress-text">Jumlah Irigasi Tahun <?php echo $tahunpengairan; ?></span>
                                    <?php
                                    foreach ($air->result_array() as $a) {
                                        $jumlah = $a['irigasi'];
                                    ?>
                                        <a style="color: black;" href="<?php echo base_url('Jenis_Pengairan'); ?>"> <span class="progress-number"><b><?php echo $jumlah; ?></b></a></span>
                                    <?php
                                    }

                                    foreach ($airmax->result_array() as $a) {
                                        $jumlah1 = $a['jumlah'];
                                    ?>

                                    <?php
                                    }

                                    $progressair = ($jumlah / $jumlah1) * 100;

                                    ?>


                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-aqua" style="width: <?php echo $progressair . '%'; ?>"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Jumlah Atlit Berprestasi Tahun <?php echo $tahunolah; ?></span>
                                    <?php
                                    foreach ($olah->result_array() as $a) {
                                        $jumlah = $a['prestasi'];
                                    ?>
                                        <a style="color: black;" href="<?php echo base_url('C_cabangolah'); ?>"> <span class="progress-number"><b><?php echo $jumlah; ?></b></a></span>
                                    <?php

                                    }

                                    foreach ($olahmax->result_array() as $a) {
                                        $jumlah1 = $a['jumlah'];
                                    ?>

                                    <?php
                                    }


                                    $progressolah = ($jumlah / $jumlah1) * 100;

                                    ?>

                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-red" style="width: <?php echo $progressolah . '%'; ?>"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Jumlah Distribusi Bibit Tanaman <?php echo $tahundistribusi; ?></span>
                                    <?php
                                    foreach ($distribusi->result_array() as $a) {
                                        $jumlah = $a['jumlah'];
                                    ?>
                                        <a style="color: black;" href="<?php echo base_url('Diztribusi'); ?>"> <span class="progress-number"><b><?php echo $jumlah; ?></b></a></span>
                                    <?php
                                    }
                                    foreach ($distribusimax->result_array() as $a) {
                                        $jumlah1 = $a['jumlah'];
                                    }

                                    $progressdistribusi = ($jumlah / $jumlah1) * 100;


                                    ?>


                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-green" style="width: <?php echo $progressdistribusi . '%'; ?>"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Jumlah Koleksi Buku <?php echo $tahunbuku; ?></span>
                                    <?php
                                    foreach ($buku->result_array() as $a) {
                                        $jumlah = $a['jumlah'];
                                    ?>
                                        <a style="color: black;" href="<?php echo base_url('jumlahkoleksibuku'); ?>"> <span class="progress-number"><b><?php echo $jumlah; ?></b></a></span>
                                    <?php
                                    }

                                    foreach ($bukumax->result_array() as $a) {
                                        $jumlah1 = $a['jumlah'];
                                    ?>

                                    <?php
                                    }


                                    $progressbuku = ($jumlah / $jumlah1) * 100;



                                    ?>


                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-yellow" style="width: <?php echo $progressbuku . '%'; ?>"></div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <span class="progress-text">Jumlah Wisata Alam</span>
                                    <?php
                                    $jumlah1 = 0;
                                    foreach ($wisata->result_array() as $a) {
                                        $jumlah = $a['jumlah'];
                                    ?>
                                        <a style="color: black;" href="<?php echo base_url('C_wisata_alam'); ?>"> <span class="progress-number"><b><?php echo $jumlah; ?></b></a></span>

                                    <?php
                                    }
                                    $jumlah1 = $jumlah1 + $jumlah;

                                    $progresswisata = ($jumlah / $jumlah1) * 100;

                                    ?>

                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-orange" style="width: <?php echo $progresswisata . '%'; ?>"></div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block border-right">


                                    <?php
                                    foreach ($ikanmin->result_array() as $a) {
                                        $jumlahmin = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    foreach ($ikan->result_array() as $a) {
                                        $jumlah = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($jumlah < $jumlahmin) {
                                        # 
                                    ?>
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i></span>
                                    <?php
                                    } else { ?>
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                                    <?php
                                    }

                                    ?>
                                    <h5 class="description-header"><a style="color:black;" href="<?php echo base_url('Produksiperikanan'); ?>"><?php echo number_format($jumlah, 2, ",", "."); ?> Kg</a></h5>

                                    <span class="description-text">TOTAL PRODUKSI PERIKANAN <?php echo $tahunikan; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block border-right">

                                    <?php
                                    foreach ($ekspor->result_array() as $a) {
                                        $jumlah = $a['jumlah'];

                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    foreach ($ekspormin->result_array() as $a) {
                                        $jumlahmin = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($jumlah < $jumlahmin) {
                                        # 
                                    ?>
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i></span>
                                    <?php
                                    } else { ?>
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                                    <?php
                                    }

                                    ?>
                                    <h5 class="description-header"><a style="color:black;" href="<?php echo base_url('Ekspor_komoditi'); ?>"><?php echo number_format($jumlah, 2, ",", "."); ?> Kg</a></h5>
                                    <span class="description-text">TOTAL EKSPOR KOMODITI</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block border-right">
                                    <?php
                                    foreach ($rugi->result_array() as $a) {
                                        $jumlah = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    foreach ($rugimin->result_array() as $a) {
                                        $jumlahmin = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($jumlah < $jumlahmin) {
                                        # 
                                    ?>
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i></span>
                                    <?php
                                    } else { ?>
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                                    <?php
                                    }

                                    ?>
                                    <h5 class="description-header"><a style="color:black;" href="<?php echo base_url('Banyak_bencana'); ?>"><?php echo "Rp. " . number_format($jumlah, 2, ",", "."); ?></a></h5>
                                    <span class="description-text">JUMLAH KERUGIAN BENCANA ALAM</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block">
                                    <?php
                                    foreach ($sampah->result_array() as $a) {
                                        $jumlah = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    foreach ($sampahmin->result_array() as $a) {
                                        $jumlahmin = $a['jumlah'];
                                    ?>

                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($jumlah < $jumlahmin) {
                                        # 
                                    ?>
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i></span>
                                    <?php
                                    } else { ?>
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i></span>
                                    <?php
                                    }

                                    ?>
                                    <h5 class="description-header"><a style="color:black;" href="<?php echo base_url('Perumahan'); ?>"><?php echo number_format($jumlah, 2, ",", "."); ?> Kg</a></h5>
                                    <span class="description-text">JUMLAH SAMPAH TAHUN <?php echo $tahunrumah; ?></span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Pariwisata</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="row">
                            <div class="col-md-11 col-sm-10">
                                <div class="pad">
                                    <!-- Map will be created here -->
                                    <?php
                                    $table = array();
                                    $jumlahk = array();
                                    $bulan = array();
                                    $mancanegara = array();
                                    $domestik = array();
                                    foreach ($wisatawan->result_array() as $a) {
                                        $id = $a['id'];
                                        $id = $a['id'];
                                        $periode = $a['tahun'];
                                        $domestik[] = $a['domestik'];
                                        $mancanegara[] = $a['mancanegara'];
                                        $bulan[] = $a['bulan'];
                                        $jumlahk[] = intval($a['jumlah']);
                                    }
                                    ?>
                                    <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/highcharts/highcharts-more.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/highcharts/drilldown.js"></script>

                                    <div id="tampilr" class="box" style="min-width: 310px; max-width: 90%; height: 80&; margin: 0 auto;">
                                        <script type="text/javascript">
                                            Highcharts.chart('tampilr', {
                                                chart: {
                                                    type: 'line'
                                                },
                                                title: {
                                                    text: 'Grafik Jumlah Wisatawan Menginap di Kabupaten Malang Tahun <?php echo $periode; ?>'
                                                },
                                                subtitle: {
                                                    text: 'Dinas Pariwisata Tahun <?php echo $periode; ?>'
                                                },
                                                xAxis: {
                                                    type: 'category'
                                                },
                                                yAxis: {
                                                    title: {
                                                        text: 'Jumlah Data'
                                                    }

                                                },
                                                legend: {
                                                    enabled: false
                                                },
                                                plotOptions: {
                                                    series: {
                                                        borderWidth: 0,
                                                        dataLabels: {
                                                            enabled: true,
                                                            format: '{point.y:.0f}'
                                                        }
                                                    }
                                                },

                                                tooltip: {
                                                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: Total : <b>{point.y:0f}</b><br/>'
                                                },

                                                series: [{
                                                    name: "Grafik",
                                                    colorByPoint: true,
                                                    data: [

                                                        <?php $arrlength = count($jumlahk);
                                                        for ($x = 0; $x < $arrlength; $x++) { ?> {
                                                                name: <?php echo json_encode($bulan[$x]); ?>,
                                                                y: <?php echo json_encode(intval($jumlahk[$x])); ?>,
                                                                drilldown: <?php echo json_encode($bulan[$x]); ?>
                                                            }
                                                        <?php
                                                            if ($x < $arrlength - 1) {
                                                                echo ",";
                                                            }
                                                        } ?>

                                                    ]
                                                }],
                                                drilldown: {
                                                    series: [
                                                        <?php $arrlength = count($jumlahk);
                                                        for ($x = 0; $x < $arrlength; $x++) { ?> {
                                                                name: <?php echo json_encode($bulan[$x]); ?>,
                                                                id: <?php echo json_encode($bulan[$x]); ?>,
                                                                data: [
                                                                    [
                                                                        "Jumlah",
                                                                        <?php echo json_encode(intval($jumlahk[$x])); ?>
                                                                    ],
                                                                    [
                                                                        "Mancanegara",
                                                                        <?php echo json_encode(intval($mancanegara[$x])); ?>
                                                                    ],
                                                                    [
                                                                        "Domestik",
                                                                        <?php echo json_encode(intval($domestik[$x])); ?>
                                                                    ]
                                                                ]
                                                            }
                                                        <?php
                                                            if ($x < $arrlength - 1) {
                                                                echo ",";
                                                            }
                                                        } ?>
                                                    ]
                                                }
                                            });
                                        </script>
                                    </div>
                                    <br>
                                    <a style="color:black;" href="<?php echo base_url('C_wisatawan'); ?>"><em>Klik untuk melihat lebih banyak data</em></a>


                                </div>
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- DIRECT CHAT -->
                        <div class="box box-warning direct-chat direct-chat-warning">

                            <!-- /.box-header -->
                            <div class="box-header with-border">
                                <h3 class="box-title">Unjuk Rasa</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <?php
                                $array_tahun = array();
                                foreach ($tahun->result_array() as $row1) {

                                    array_push($array_tahun, $row1['periode']);
                                }
                                $array_unjukrasa = array();
                                foreach ($unjukrasa->result_array() as $row2) {

                                    array_push($array_unjukrasa, $row2['unjukrasa']);
                                }

                                $array_data_1 = array();
                                $array_data_2 = array();
                                $array_data_3 = array();
                                $array_data_4 = array();
                                $array_data_5 = array();
                                $array_data_6 = array();
                                foreach ($dataz->result_array() as $row4) {
                                    array_push($array_data_1, $row4['unjukrasa']);
                                    array_push($array_data_2, $row4['jumlah']);
                                    array_push($array_data_3, $row4['periode']);
                                }

                                foreach ($jumlahxx->result_array() as $row5) {
                                    array_push($array_data_5, $row5['jumlah']);
                                }
                                foreach ($jumlahxxx->result_array() as $row6) {
                                    array_push($array_data_6, $row6['jumlah']);
                                }

                                $jumlah = array();
                                $temp = 0;
                                for ($i = 0; $i < count($array_unjukrasa); $i++) {
                                    for ($j = 0; $j < (count($array_tahun)); $j++) {
                                        $isinya = '';
                                        for ($x = 0; $x < count($array_data_1); $x++) {
                                            if ($array_unjukrasa[$i] == $array_data_1[$x] && $array_tahun[$j] == $array_data_3[$x]) {
                                                $isinya = $array_data_2[$x];

                                                $temp = 1;
                                                break;
                                            } else {
                                                $temp = 0;
                                            }
                                        }


                                        if ($temp != 0) {
                                            $array_hasil[$i][$j] = $isinya;
                                            $jumlah[$i][$j] = $array_hasil[$i][$j];
                                        } else {
                                            $array_hasil[$i][$j] = "0";
                                            $jumlah[$i][$j] = $array_hasil[$i][$j];
                                        }
                                    }
                                }


                                ?>

                                <div class="box" id="tampilunjukrasa" style="min-width: 10%; max-width: 90%; height: 100%; margin: 0 auto;">
                                    <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                                    <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                                    <script type="text/javascript">
                                        Highcharts.chart('tampilunjukrasa', {
                                            chart: {
                                                type: 'column'
                                            },
                                            title: {
                                                text: 'Perbandingan Data Unjukrasa'
                                            },
                                            subtitle: {
                                                text: 'Satuan Polisi Pamongpraja Kabupaten Malang'
                                            },
                                            xAxis: {
                                                categories: [
                                                    <?php $arrlength = count($array_tahun);
                                                    for ($x = 0; $x < $arrlength; $x++) {
                                                        echo json_encode(intval($array_tahun[$x]));
                                                        if ($x < $arrlength - 1) {
                                                            echo ",";
                                                        }
                                                    } ?>
                                                ],
                                                crosshair: true
                                            },
                                            yAxis: {
                                                min: 0,
                                                title: {
                                                    text: 'Jumlah Data (Unit)'
                                                }
                                            },
                                            tooltip: {
                                                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}</td><td>: </td>' +
                                                    '<td style="padding:0"><b>{point.y:.0f} Unit</b></td></tr>',
                                                footerFormat: '</table>',
                                                shared: true,
                                                useHTML: true
                                            },
                                            plotOptions: {
                                                column: {
                                                    pointPadding: 0.2,
                                                    borderWidth: 0
                                                }
                                            },
                                            series: [
                                                <?php
                                                $arrlength1 = count($array_unjukrasa);
                                                for ($i = 0; $i < $arrlength1; $i++) { ?> {
                                                        <?php echo "name :" . json_encode($array_unjukrasa[$i]) ?>,
                                                        <?php echo "data: [";
                                                        $arrlength = count($array_tahun);
                                                        for ($x = 0; $x < $arrlength; $x++) {
                                                            echo json_encode(intval($array_hasil[$i][$x]));
                                                            if ($x < $arrlength - 1) {
                                                                echo ",";
                                                            }
                                                        }
                                                        echo "]"; ?>
                                                    }
                                                <?php if ($x < $arrlength1 - 1) {
                                                        echo ",";
                                                    }
                                                } ?>
                                            ]
                                        });
                                    </script>
                                </div>
                                <a style="color:black;" href="<?php echo base_url('C_wisatawan'); ?>"><em>Klik untuk melihat lebih banyak data</em></a>

                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Penanaman Modal</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php
                                $periodex = array();
                                foreach ($grafik_tanam->result_array() as $a) {
                                    $periodei = $a['tahun'];
                                    $periodex[] = intval($a['tahun']);
                                    $value[] = intval($a['nilai_pma']);
                                    $value1[] = intval($a['unit_pma']);
                                    $value2[] = intval($a['nilai_pmdn']);
                                    $value3[] = intval($a['unit_pmdn']);
                                    $value4[] = intval($a['nilai_non']);
                                    $value5[] = intval($a['unit_non']);
                                    $value6[] = intval($a['tenaga_kerja']);
                                ?>
                                    <div class="box" id="tampiltanam" style="min-width: 10%; max-width: 90%; height: 100%; margin: 0 auto;">
                                        <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                                        <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                                        <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                                        <script type="text/javascript">
                                            Highcharts.chart('tampiltanam', {
                                                chart: {
                                                    plotBackgroundColor: null,
                                                    plotBorderWidth: null,
                                                    plotShadow: false,
                                                    type: 'pie'
                                                },
                                                title: {
                                                    text: 'Grafik Penanaman Modal Tahun <?php echo $periodei; ?>'
                                                },
                                                tooltip: {
                                                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                                },
                                                plotOptions: {
                                                    pie: {
                                                        allowPointSelect: true,
                                                        cursor: 'pointer',
                                                        dataLabels: {
                                                            enabled: false
                                                        },
                                                        showInLegend: true
                                                    }
                                                },
                                                series: [{
                                                    name: 'Penanaman Modal',
                                                    colorByPoint: true,
                                                    data: [{
                                                        name: 'Jumlah Investasi PMA',
                                                        y: <?php $arrlength = count($value1);
                                                            for ($x = 0; $x < $arrlength; $x++) {
                                                                echo json_encode(intval($value1[$x]));
                                                                if ($x < $arrlength - 1) {
                                                                    echo ",";
                                                                }
                                                            } ?>
                                                    }, {
                                                        name: 'Jumlah Unit PMDN',
                                                        y: <?php $arrlength = count($value3);
                                                            for ($x = 0; $x < $arrlength; $x++) {
                                                                echo json_encode(intval($value3[$x]));
                                                                if ($x < $arrlength - 1) {
                                                                    echo ",";
                                                                }
                                                            } ?>
                                                    }, {
                                                        name: 'Jumlah Unit Non PMDN',
                                                        y: <?php $arrlength = count($value4);
                                                            for ($x = 0; $x < $arrlength; $x++) {
                                                                echo json_encode(intval($value4[$x]));
                                                                if ($x < $arrlength - 1) {
                                                                    echo ",";
                                                                }
                                                            } ?>
                                                    }]
                                                }]
                                            });
                                        </script>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->
                        </div>
                        <!--/.box -->
                    </div>
                    <!-- /.col -->


                    <div class="col-md-12">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Produksi Perikanan</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">



                                <?php

                                $periodexz = array();
                                $jumlah = array();
                                $periodeez = array();
                                $jenisair = array();
                                $value2 = array();
                                $value3 = array();
                                $value4 = array();
                                $value5 = array();
                                $value6 = array();
                                foreach ($grafikikan->result_array() as $a) {
                                    $periodexz[] = intval($a['tahun']);
                                    $jumlah[] = intval($a['produksi']);
                                    $periodeez[] = $a['tahun'];
                                    $jenisair[] = $a['jenis_air'];



                                ?>
                                    <div class="box" id="tampilikan" style="min-width: 10%; max-width: 90%; height: 100%; margin: 0 auto;">
                                        <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                                        <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                                        <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                                        <script type="text/javascript">
                                            Highcharts.chart('tampilikan', {
                                                chart: {
                                                    type: 'line'
                                                },
                                                title: {
                                                    text: 'Grafik Produksi Ikan Menurut Jenis Air di Kabupaten Malang'
                                                },
                                                subtitle: {
                                                    text: 'Dinas Perikanan dan Kelautan Kabupaten Malang'
                                                },
                                                xAxis: {
                                                    categories: [<?php $arrlength = count($periodexz);
                                                                    for ($x = 0; $x < $arrlength; $x++) {
                                                                        echo json_encode('Produksi Ikan ' . $jenisair[$x] . '(' . $periodeez[$x] . ')');
                                                                        if ($x < $arrlength - 1) {
                                                                            echo ",";
                                                                        }
                                                                    } ?>],
                                                    crosshair: true
                                                },
                                                yAxis: {
                                                    min: 0,
                                                    title: {
                                                        text: 'Jumlah Data'
                                                    }
                                                },
                                                tooltip: {
                                                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}</td><td>: </td>' +
                                                        '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
                                                    footerFormat: '</table>',
                                                    shared: true,
                                                    useHTML: true
                                                },
                                                plotOptions: {
                                                    column: {
                                                        pointPadding: 0.2,
                                                        borderWidth: 0
                                                    }
                                                },
                                                series: [{
                                                    name: 'Jumlah',
                                                    data: [<?php $arrlength = count($jumlah);

                                                            for ($x = 0; $x < $arrlength; $x++) {
                                                                echo json_encode(intval($jumlah[$x]));
                                                                if ($x < $arrlength - 1) {
                                                                    echo ",";
                                                                }
                                                            } ?>]
                                                }]
                                            });
                                        </script>
                                    </div>
                                <?php

                                } ?>












                            </div>
                            <!-- /.box-body -->

                            <!-- /.box-footer -->
                        </div>
                        <!--/.box -->
                    </div>



                </div>
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->

                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Alat Angkut</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">


                        <?php
                        foreach ($grafikangkut->result_array() as $a) {
                            $id = $a['id'];
                            $alatangkut[] = $a['keterangan'];
                            $unit[] = intval($a['jumlah']);
                            $periode = intval($a['periode']);
                        ?>
                            <div class="box" id="tampilalat" style="min-width: 310px; max-width: 90%; height: 100%; margin: 0 auto">
                                <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                                <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                                <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                                <script type="text/javascript">
                                    Highcharts.chart('tampilalat', {
                                        chart: {
                                            type: 'bar'
                                        },
                                        title: {
                                            text: 'Alat Angkut Sampah Yang Tersedia Di Kabupaten Malang'
                                        },
                                        subtitle: {
                                            text: 'Tahun <?= json_encode($periode); ?>'
                                        },
                                        xAxis: {
                                            categories: [<?php $arrlength = count($alatangkut);
                                                            for ($x = 0; $x < $arrlength; $x++) {
                                                                echo json_encode($alatangkut[$x]);
                                                                if ($x < $arrlength - 1) {
                                                                    echo ",";
                                                                }
                                                            } ?>],
                                            title: {
                                                text: null
                                            }
                                        },
                                        yAxis: {
                                            min: 0,
                                            title: {
                                                text: 'Banyaknya Alat Angkut Sampah',
                                                align: 'middle'
                                            },
                                            labels: {
                                                overflow: 'justify'
                                            }
                                        },
                                        tooltip: {
                                            valueSuffix: ' Unit'
                                        },
                                        plotOptions: {
                                            bar: {
                                                dataLabels: {
                                                    enabled: true
                                                }
                                            }
                                        },
                                        legend: {
                                            layout: 'vertical',
                                            align: 'right',
                                            verticalAlign: 'top',
                                            x: -40,
                                            y: 80,
                                            floating: true,
                                            borderWidth: 1,
                                            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                                            shadow: true
                                        },
                                        credits: {
                                            enabled: false
                                        },
                                        series: [{
                                            name: 'Year <?= json_encode($periode); ?>',
                                            data: [<?php $arrlength = count($alatangkut);
                                                    for ($x = 0; $x < $arrlength; $x++) {
                                                        echo json_encode(intval($unit[$x]));
                                                        if ($x < $arrlength - 1) {
                                                            echo ",";
                                                        }
                                                    } ?>]
                                        }]
                                    });
                                </script>
                            </div>
                        <?php } ?>




                        <!-- ./chart-responsive -->

                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->

                    <!-- /.footer -->
                </div>
                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <!-- /.info-box -->

                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Transmigrasi</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <?php
                        $periodex = array();
                        $value = array();
                        $value1 = array();
                        foreach ($grafiktransmigrasi->result_array() as $a) {
                            $periodei = $a['tahun'];
                            $periodex[] = intval($a['tahun']);
                            $value[] = intval($a['laki']);
                            $value1[] = intval($a['perempuan']);
                        ?>
                            <div class="box" id="tampilmigrasi" style="min-width: 10%; max-width: 90%; height: 100%; margin: 0 auto;">
                                <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                                <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                                <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                                <script type="text/javascript">
                                    Highcharts.chart('tampilmigrasi', {
                                        chart: {
                                            plotBackgroundColor: null,
                                            plotBorderWidth: null,
                                            plotShadow: false,
                                            type: 'pie'
                                        },
                                        title: {
                                            text: 'Grafik Transmigran Tahun <?php echo $periodei; ?>'
                                        },
                                        tooltip: {
                                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                        },
                                        plotOptions: {
                                            pie: {
                                                allowPointSelect: true,
                                                cursor: 'pointer',
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                showInLegend: true
                                            }
                                        },
                                        series: [{
                                            name: 'Transmigrasi',
                                            colorByPoint: true,
                                            data: [{
                                                name: 'Jumlah Transmigran Laki - laki',
                                                y: <?php $arrlength = count($value);
                                                    for ($x = 0; $x < $arrlength; $x++) {
                                                        echo json_encode(intval($value[$x]));
                                                        if ($x < $arrlength - 1) {
                                                            echo ",";
                                                        }
                                                    } ?>
                                            }, {
                                                name: 'Jumlah Transmigran Perempuan',
                                                y: <?php $arrlength = count($value1);
                                                    for ($x = 0; $x < $arrlength; $x++) {
                                                        echo json_encode(intval($value1[$x]));
                                                        if ($x < $arrlength - 1) {
                                                            echo ",";
                                                        }
                                                    } ?>
                                            }]
                                        }]
                                    });
                                </script>
                            </div>
                        <?php
                        }
                        ?>







                        <!-- ./chart-responsive -->

                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->

                    <!-- /.footer -->
                </div>
                <!-- /.box -->

                <!-- PRODUCT LIST -->

                <!-- /.box -->
            </div>




        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->