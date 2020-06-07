<?php
$positif = $nasional[0]['positif'];
$sembuh = $nasional[0]['sembuh'];
$dirawat = $nasional[0]['dirawat'];
$meninggal = $nasional[0]['meninggal'];
?>

<div class="row">
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $positif ?></h3>

                <p>POSITIF</p>
            </div>
            <div class="icon">
                <i class="fa fa-ambulance"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $sembuh ?></h3>

                <p>SEMBUH</p>
            </div>
            <div class="icon">
                <i class="fa fa-medkit"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $dirawat ?></h3>

                <p>DIRAWAT</p>
            </div>
            <div class="icon">
                <i class="fa fa-hospital"></i>
            </div>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $meninggal ?></h3>

                <p>MENINGGAL</p>
            </div>
            <div class="icon">
                <i class="fa fa-bed"></i>
            </div>
        </div>
    </div>




    <!-- /.col -->

    <!-- /.row -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Data Statistik Dan Presentase Kenaikan Kasus Covid 19 Di Indonesia</h5>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <p class="text-center">
                            <strong>Statistik: 1 Mei 2020 - 7 Juni 2020</strong>
                        </p>

                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <div id="myfirstchart" style="height: 70%;"></div>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <?php
                        $sem = str_replace(",", "", $sembuh);
                        $pos = str_replace(",", "", $positif);
                        $raw = str_replace(",", "", $dirawat);
                        $meni = str_replace(",", "", $meninggal);


                        $persenSembuh = $sem / $pos * 100;
                        $persenRawat = $raw / $pos * 100;
                        $persenMeninggal = $meni / $pos * 100;

                        ?>

                        <p class="text-center">
                            <strong>Persentase</strong>
                        </p>

                        <div class="progress-group">
                            Sembuh
                            <span class="float-right"><b><?= ceil($persenSembuh); ?></b>%</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: <?= ceil($persenSembuh) . '%'; ?>"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->

                        <div class="progress-group">
                            Dirawat
                            <span class="float-right"><b><?= floor($persenRawat); ?></b>%</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: <?= floor($persenRawat) . '%'; ?>"></div>
                            </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                            Meninggal
                            <span class="float-right"><b><?= ceil($persenMeninggal); ?></b>%</span>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width: <?= ceil($persenMeninggal) . '%'; ?>"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Positif</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($provinsi as $key => $value) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $value['attributes']['Provinsi']; ?></td>
                                <td><?php echo $value['attributes']['Kasus_Posi']; ?></td>
                                <td><?php echo $value['attributes']['Kasus_Semb']; ?></td>
                                <td><?php echo $value['attributes']['Kasus_Meni']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</div>
<!-- /.row -->

<script type="text/javascript">
    Morris.Line({
        element: 'myfirstchart',
        data: [{
                x: '2020-05-01',
                a: 10551,
                b: 1591,
                c: 800
            },
            {
                x: '2020-05-02',
                a: 10843,
                b: 1665,
                c: 831
            },
            {
                x: '2020-05-03',
                a: 11192,
                b: 1876,
                c: 845
            },
            {
                x: '2020-05-04',
                a: 11587,
                b: 1954,
                c: 864
            },
            {
                x: '2020-05-05',
                a: 12071,
                b: 2197,
                c: 872
            },
            {
                x: '2020-05-06',
                a: 12438,
                b: 2317,
                c: 895
            },
            {
                x: '2020-05-07',
                a: 12776,
                b: 2381,
                c: 930
            },
            {
                x: '2020-05-08',
                a: 13112,
                b: 2494,
                c: 943
            },
            {
                x: '2020-05-09',
                a: 13645,
                b: 2607,
                c: 959
            },
            {
                x: '2020-05-10',
                a: 14032,
                b: 2698,
                c: 973
            },
            {
                x: '2020-05-11',
                a: 14265,
                b: 2881,
                c: 991
            },
            {
                x: '2020-05-12',
                a: 14749,
                b: 3063,
                c: 1007
            },
            {
                x: '2020-05-13',
                a: 15438,
                b: 3287,
                c: 1028
            },
            {
                x: '2020-05-14',
                a: 16006,
                b: 3518,
                c: 1043
            },
            {
                x: '2020-05-15',
                a: 16496,
                b: 3803,
                c: 1076
            },
            {
                x: '2020-05-16',
                a: 17025,
                b: 3911,
                c: 1089
            },
            {
                x: '2020-05-17',
                a: 17514,
                b: 4129,
                c: 1148
            },
            {
                x: '2020-05-18',
                a: 18010,
                b: 4324,
                c: 1191
            },
            {
                x: '2020-05-19',
                a: 18496,
                b: 4467,
                c: 1221
            },
            {
                x: '2020-05-20',
                a: 19189,
                b: 4575,
                c: 1242
            },
            {
                x: '2020-05-21',
                a: 20162,
                b: 4838,
                c: 1278
            },
            {
                x: '2020-05-22',
                a: 20796,
                b: 5057,
                c: 1326
            },
            {
                x: '2020-05-23',
                a: 21745,
                b: 5249,
                c: 1351
            },
            {
                x: '2020-05-24',
                a: 22271,
                b: 5402,
                c: 1372
            },
            {
                x: '2020-05-25',
                a: 22750,
                b: 5642,
                c: 1391
            },
            {
                x: '2020-05-26',
                a: 23165,
                b: 5877,
                c: 1418
            },
            {
                x: '2020-05-27',
                a: 23851,
                b: 6057,
                c: 1473
            },
            {
                x: '2020-05-28',
                a: 24538,
                b: 6240,
                c: 1496
            },
            {
                x: '2020-05-29',
                a: 25216,
                b: 6492,
                c: 1520
            },
            {
                x: '2020-05-30',
                a: 25773,
                b: 7015,
                c: 1573
            },
            {
                x: '2020-05-31',
                a: 26473,
                b: 7308,
                c: 1613
            },
            {
                x: '2020-06-01',
                a: 26940,
                b: 7637,
                c: 1641
            },
            {
                x: '2020-06-02',
                a: 27549,
                b: 7935,
                c: 1663
            },
            {
                x: '2020-06-03',
                a: 28233,
                b: 8406,
                c: 1698
            },
            {
                x: '2020-06-04',
                a: 28818,
                b: 8892,
                c: 1721
            },
            {
                x: '2020-06-05',
                a: 29521,
                b: 9443,
                c: 1770
            },
            {
                x: '2020-06-06',
                a: 30514,
                b: 9907,
                c: 1801
            },
            {
                x: '2020-06-07',
                a: 31186,
                b: 10498,
                c: 1851
            },
        ],
        lineColors: ['red', 'green', 'orange'],
        xkey: 'x',
        ykeys: ['a', 'b', 'c'],
        labels: ['Positif', 'Sembuh', 'Meninggal']
    });
</script>