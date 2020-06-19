</div>
</section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/template/dist/js/demo.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


<!-- page script -->
<script type="text/javascript">
    var map = L.map("map").setView([-3.824181, 117.8191513], 5);
    var api = 'https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json';
    var dataCovid = [];
    var geojson = [];
    getData();
    $(document).on("click", ".list-covid .list-group-item", function() {
        var id = $(this).data("id");
        var set = geojson[id];
        set.eachLayer(function(feature) {
            feature.openPopup();
            map.fitBounds(feature.getBounds());
        });
        console.log("KLIK ID :" + id)
    })


    function getColor(positif) {
        color = "#0d0";
        if (positif > 1000) {
            color = "#222";
        } else if (positif > 500) {
            color = "#555";
        } else if (positif > 200) {
            color = "#f00";
        } else if (positif > 100) {
            color = "#f90";
        } else if (positif > 50) {
            color = "#09d";
        } else if (positif > 20) {
            color = "#090";
        }
        return color;
    }


    // atur style
    function style(f) {
        var KODE = f.properties.KODE;
        data = dataCovid[KODE];
        return {
            weight: 1,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7,
            fillColor: getColor(data.Kasus_Posi)
        }
    }


    // update jika hover
    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 1,
            color: '#f00',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }
    }

    // update info
    function resetHighlight(e) {
        var layer = e.target;
        layer.setStyle({
            weight: 1,
            opacity: 1,
            color: '#f00',
            dashArray: '3',
            fillOpacity: 0.7
        });
    }



    function onEachFeature(f, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight
        });
        var KODE = f.properties.KODE;
        data = dataCovid[KODE];
        var popUp = '<table>' +
            '<tr>' +
            '<td colspan="4"><h6>' + data.Provinsi + '</h6></td>' +
            '</tr>' +
            '<tr>' +
            '<td class="bg-primary" width="20">&nbsp;</td>' +
            '<td>Positif</td>' +
            '<td>' + data.Kasus_Posi + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td class="bg-success"></td>' +
            '<td>Sembuh</td>' +
            '<td>' + data.Kasus_Semb + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td class="bg-danger"></td>' +
            '<td>Meninggal</td>' +
            '<td>' + data.Kasus_Meni + '</td>' +
            '</tr>' +
            '</table>';
        layer.bindPopup(popUp);
    }

    var legend = L.control({
        position: 'bottomright'
    });

    legend.onAdd = function(map) {
        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 20, 50, 100, 200, 500],
            labels = [],
            from, to;

        for (var i = 0; i < grades.length; i++) {
            from = grades[i];
            to = grades[i + 1];

            labels.push(
                '<i style="background:' + getColor(from + 1) + '"></i>' +
                from + (to ? '&ndash;' + to : '+'));
        }

        div.innerHTML = labels.join('<br>');
        return div;
    };

    legend.addTo(map);



    function getData() {
        $.ajax({
            url: api,
            dataType: 'JSON',
            success: function(data) {
                var features = data.features;
                for (i = 0; i < features.length; i++) {
                    var attributes = features[i].attributes;
                    var Kode_Provi = attributes.Kode_Provi;
                    dataCovid[Kode_Provi] = attributes;
                    var list = '<h5>' + attributes.Provinsi + '</h5>' +
                        '<span class="text-primary">Positif : ' + attributes.Kasus_Posi + '</span>' +
                        '<br><span class="text-success">Sembuh : ' + attributes.Kasus_Semb + '</span>' +
                        '<br><span class="text-danger">Meninggal : ' + attributes.Kasus_Meni + '</span>';
                    $(".list-covid").append('<li class="list-group-item" data-id="' + Kode_Provi + '">' + list + '</li>');
                }

                for (i = 0; i < features.length; i++) {
                    var attributes = features[i].attributes;
                    var Kode_Provi = attributes.Kode_Provi;
                    if (Kode_Provi != 0) {
                        $.getJSON("geojson/" + Kode_Provi + ".geojson", function(data) {
                            var KODE = data.features[0].properties.KODE;
                            geojson[KODE] = L.geoJSON(data, {
                                onEachFeature: onEachFeature,
                                style: style,
                            }).addTo(map);
                        });
                    }
                }
            }
        });

    }
</script>


<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


</body>

</html>