<b<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <b>PERUSAHAAN KLASIFIKASI INDUSTRI<b>
            <small>KABUPATEN MALANG SATU DATA</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('Dashboard'); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= base_url('Perusahaan_klasifikasi'); ?>"> Perusahaan Klasifikasi</a></li>
            <li class="active"> Crosstab Data Perusahaan Klasifikasi</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Jumlah Perusahaan menurut Klasifikasi Industri Tiap Tahun di Kabupaten Malang</h3>
        </div>
        <div class="box-body">
        <table>
        <tr>
            <!-- <td>
            <a class="btn btn-primary" href="#modalAdd" data-toggle="modal" title="Add">Tambah Data Banyak Bencana</a>
            </td> -->
            <td><div>
            </td></div>
        </tr>
        </table>
        <?php  
        $array_tahun=array();
        foreach ($tahun->result_array() as $row1) {
           
            array_push($array_tahun, $row1['tahun']);
        }
         $array_klasifikasi=array();
        foreach ($nama_klasifikasi->result_array() as $row2) {
           
            array_push($array_klasifikasi, $row2['nama_klasifikasi']);
        }

        $array_data_1=array();
        $array_data_2=array();
        $array_data_3=array();
        $array_data_4=array();
 
        foreach ($data->result_array() as $row4) {
        array_push($array_data_1, $row4['nama_klasifikasi']);
        array_push($array_data_2, $row4['jumlah_perusahaan']);
        array_push($array_data_3, $row4['tahun']);
        }

        foreach ($jumlah->result_array() as $row5) {
        array_push($array_data_4, $row5['jumlah_perusahaan']);

        }


        $temp = 0;  
        for ($i=0; $i < count($array_klasifikasi) ; $i++) { 
            for ($j=0; $j < (count($array_tahun)) ; $j++) { 
                $isinya = '';
                for ($x=0; $x < count($array_data_1) ; $x++) { 
                    if ($array_klasifikasi[$i]==$array_data_1[$x]&& $array_tahun[$j]==$array_data_3[$x]) {
                        $isinya = $array_data_2[$x];
                        $temp = 1;
                        break;
                    } else {
                        $temp=0;
                    }
                } 


                if ($temp != 0 ){
                    $array_hasil[$i][$j]=$isinya;

                } else {
                    $array_hasil[$i][$j]="0";

                }
            } 

       }   

        ?>

        


        <table class="table table-bordered table-striped" style="font-size:15px; width:100%; text-align:center; " id="tampilcrostabklasifikasi">
                <thead>
                   <tr>
                 <th rowspan="2" style="text-align: center; vertical-align: middle;">Klasifikasi</th>
                 <th colspan=<?php echo count($array_tahun);?> style="text-align: center; padding-bottom: 20px;">Tahun</th>
                </tr>
                <tr>
                <?php 
                for ($i=0; $i <count($array_tahun) ; $i++) { 
                     echo "<th style=\"text-align:center;\">$array_tahun[$i]</th>";
                }
                ?>
               
                </tr>
                <tbody>
                <?php
                    for ($i=0; $i <count($array_klasifikasi); $i++) { 
                    echo "<tr>";
                    echo "<td style='text-align: left;'>".$array_klasifikasi[$i]."</td>";
                    for ($j=0; $j < (count($array_tahun)); $j++) { 
                    echo "<td>".$array_hasil[$i][$j]."</td>";
                }
                echo"</tr>";
                }
                ?>
                </tbody>

                <tfoot>
                <tr>
                <th style="text-align: center;">Jumlah</th>
   <?php 
    for ($i=0; $i <count($array_tahun); $i++) {
        
        echo "<th style=\"text-align:center;\">".$array_data_4[$i]."</th>";


    }
    ?>
</tr>
                </tfoot>

        </table>
        
    </div>
    </div><!-- /.box -->
    </section>
    <!-- /.content -->

</div>
</body>
</html>
