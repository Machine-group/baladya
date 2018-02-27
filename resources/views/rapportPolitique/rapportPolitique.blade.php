@extends('layouts.app')

@section('head')

    <head>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap-clearmin.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/roboto.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/material-design.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/small-n-flat.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/c3.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('style/style.css')}}">


        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto|Raleway:600,400,200' rel='stylesheet' type='text/css'>

        <!-- Test container style sheets -->
        <link rel="stylesheet" href="{{URL::asset('RadialProgress/styles/examples.css')}}">

        <!-- Vizuly specific style sheets -->
        <link rel="stylesheet" href="{{URL::asset('RadialProgress/externallib/lib/styles/vizuly.css')}}">
        <link rel="stylesheet" href="{{URL::asset('RadialProgress/externallib/lib/styles/vizuly_radial_progress.css')}}">

        <!-- Supporting test container files:  Vizuly does NOT rely on these -->


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="{{URL::asset('assets/js/lib/jquery-2.1.3.min.js')}}"></script>
        <script src="{{URL::asset('RadialProgress/externallib/lib/cssmenu.js')}}"></script>

        <!-- D3.js ... of course! -->

        <script src="{{URL::asset('RadialProgress/lib/d3.min.js')}}"></script>

        <!-- debug source scripts: start -->
        <!--
        <script src="src/core/_namespace.js"></script>
        <script src="src/theme/radialprogress.js"></script>
        <script src="src/core/component.js"></script>
        <script src="src/core/util.js"></script>
        <script src="src/svg/gradient.js"></script>
        <script src="src/svg/filter.js"></script>
        <script src="src/viz/radialprogress.js"></script>

        -->
        <!-- debug source scripts: end -->



        <script src="{{URL::asset('RadialProgress/lib/vizuly_core.min.js')}}"></script>
        <script src="{{URL::asset('RadialProgress/lib/vizuly_radialprogress.min.js')}}"></script>

        <script src="{{URL::asset('RadialProgress/radialprogress_test.js')}}"></script>

        <!--Bubble liquid-->
        <link type="text/css" rel="stylesheet" href="{{URL::asset('liquideFillGauge/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('Bubble/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/mycss/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('menu/styles.css')}}" />


        <script src="http://d3js.org/d3.v3.min.js"></script>


        <script src="http://phuonghuynh.github.io/js/bower_components/d3-transform/src/d3-transform.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/cafej/src/extarray.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/cafej/src/misc.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/cafej/src/micro-observer.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/microplugin/src/microplugin.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/bubble-chart/src/bubble-chart.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/bubble-chart/src/plugins/central-click/central-click.js"></script>
        <script src="http://phuonghuynh.github.io/js/bower_components/bubble-chart/src/plugins/lines/lines.js"></script>


        <!--   My javaScript Start  -->
        <script src="{{URL::asset('Bubble/main.js')}}"></script>
        <script src="{{URL::asset('liquideFillGauge/main.js')}}" language="JavaScript"></script>
        <!--end bubble-->
        <!-- map link -->
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <style>
            #maps {
                height: 350px;
                width: 100%;
            }
        </style>

        <!-- radial map Link -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('map/leaflet.css')}}">
        <script src="{{URL::asset('lib/leaflet.js')}}"></script>
        <script src="{{URL::asset('lib/leaflet.ajax.min.js')}}"></script>
        <script src="{{URL::asset('lib/spin.js')}}"></script>
        <script src="{{URL::asset('lib/leaflet.spin.js')}}"></script>

        <script src="{{URL::asset('lib/randomColor.js')}}"></script>
        <script src="{{URL::asset('map/gov.geojson')}}"></script>
        <script src="{{URL::asset('map/secteur.geojson')}}"></script>
        <script src="{{URL::asset('map/map.js')}}"></script>
        <!--- radial progress end -->
        <!-- end map -->
        <!--        barchart horizontal-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('')}}horizontalBarchart/style.css" />
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
            zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        </script>
        <!-- end barchart-->

        <!--liquid-->
        <link type="text/css" rel="stylesheet" href="{{URL::asset('liquideFillGauge/style.css')}}" />
        <!--end liquid-->


        <title>Baladya</title>
        <li id="currentDisplay" class="selected" style="display: none;"><a></a></li>

    </head>

    @endsection





@section('content')

    <div class="se-pre-con"></div>
    <div style="width: 80%; margin-left: auto ; margin: auto;">

        <div id="global" style="padding-top: 0px;">
            <div class="container-fluid">

                <!-- Our main content container-->

                <div class="row cm-fix-height">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div style="height: 100px;">
                                    <h2>Rapport Politique</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="contenu panel-body" id="contenu">
                                <div id="viz_container" class="z-depth-3 radialChart" style="height: 300px;">

                                    <div id="div1" class="radial_container" style="height: 100px;">
                                        <h3 style="text-align: center;">nombre d'inscrit</h3>
                                    </div>
                                    <div id="div2" class="radial_container" style="height: 100px;">
                                        <h3 style="text-align: center;">nombre d'inscrit</h3>
                                    </div>
                                    <div id="div3" class="radial_container" style="height: 100px;">
                                        <h3 style="text-align: center;">nombre d'inscrit</h3>
                                    </div>
                                    <div id="div4" class="radial_container" style="height: 100px;">
                                        <h3 style="text-align: center;">nombre d'inscrit</h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cm-fix-height">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>Bubble</h2>

                                <div class="bubbleChart"> </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div>
                                    <div id="maps"></div>

                                </div>
                                <div>
                                    <div class="panel col-sm-6" style="background-color: #eee ; ">
                                        <h3> <img src="{{URL::asset('assets/img/md/dark/map.svg')}}" height="40" width="40">Superficie : <span style="font-size: 24px; color: darkred; font-weight: bold;">4586 KM</span></h3>
                                    </div>

                                    <div class="panel col-sm-6" style="background-color: #eee ; ">
                                        <h3> <img src="{{URL::asset('assets/img/md/dark/map.svg')}}" height="40" width="40">Superficie : <span style="font-size: 24px; color: darkred; font-weight: bold;">4586 KM</span></h3>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel panel-default">

                                        <table class="table">
                                            <thead>
                                            <th>Nom du Bureau</th>
                                            </thead>
                                            <tbody>
                                            <tr class="">
                                                <td>1 bureau x</td>
                                            </tr>
                                            <tr>
                                                <td>2 bureau y</td>

                                            </tr>
                                            <tr class="">
                                                <td>1 bureau x</td>
                                            </tr>
                                            <tr>
                                                <td>2 bureau y</td>

                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">

                                        <table class="table">
                                            <thead>
                                            <th>Nom du Bureau</th>
                                            </thead>
                                            <tbody>
                                            <tr class="">
                                                <td>1 bureau x</td>
                                            </tr>
                                            <tr>
                                                <td>2 bureau y</td>

                                            </tr>
                                            <tr class="">
                                                <td>1 bureau x</td>
                                            </tr>
                                            <tr>
                                                <td>2 bureau y</td>

                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cm-fix-height">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div style="height: auto; width: 100%;">
                                    <div id='myChart'></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <center>
                                    <div class="bubbles col-sm-6" style="display: none;">
                                        <svg id="Chartfillgauge1" onclick="gauge1.update(NewValue());"></svg>
                                    </div>
                                    <div class="col-sm-6">

                                        <h3 style="">Homme</h3>
                                        <svg id="Chartfillgauge2" height="100" onclick="gauge2.update(NewValue());" style="width: 100px"></svg>

                                    </div>

                                    <div class="bubbles col-sm-6">
                                        <h3>Femme</h3>
                                        <svg id="Chartfillgauge3" height="100" onclick="gauge3.update(NewValue());" style="width: 100px"></svg>
                                    </div>

                                    <div class="bubbles col-sm-6" style="display: none;">
                                        <h3>Chomage</h3>
                                        <svg id="Chartfillgauge4" height="100" onclick="gauge4.update(NewValue());" style="width: 100px"></svg>
                                    </div>

                                    <div class="bubbles col-sm-6">
                                        <h3 style="">Dépenses</h3>
                                        <svg id="Chartfillgauge5" height="100" onclick="gauge5.update(NewValue());" style="width: 100px"></svg>
                                    </div>

                                    <div class="bubbles col-sm-6">
                                        <h3>Population</h3>
                                        <svg id="Chartfillgauge6" height="100" onclick="gauge6.update(NewValue());" style="width: 100px"></svg>
                                    </div>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Serie temporelle-->

                <div class="panel panel-default">
                    <div class="panel-heading">C3 Splines</div>
                    <div class="panel-body">
                        <div id="d1-c4" style="height:320px"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="cm-footer"><span class="pull-left">www.Baladya.tn</span><span class="pull-right">&copy;Copyright 2018</span></footer>
    </div>


    <script src="{{URL::asset('assets/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.cookie.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/fastclick.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/clearmin.min.js')}}"></script>
    <!--    <script src="assets/js/lib/d3.min.js"></script>-->
    <script src="{{URL::asset('assets/js/lib/c3.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/demo/dashboard.js')}}"></script>
    <script src="{{URL::asset('horizontalBarchart/script.js')}}"></script>
    <script src="{{URL::asset('liquideFillGauge/setting.js')}}" language="JavaScript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script src="{{URL::asset('')}}menu/script.js"></script>

    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");
        });
    </script>

    <script>
        // initialize the map
        var map = L.map('maps').setView([33.7967419, 9.2763324], 6.5);

        // load a tile layer
        /*
        L.tileLayer(
            'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + k ,{
            maxZoom: 18
        }).addTo(map);
            */

        L.tileLayer('https://api.tiles.mapbox.com/styles/v1/{username}/{id}/tiles/{tileSize}/{z}/{x}/{y}?access_token={accessToken}', {
            maxZoom: 18,
            username: 'chokou',
            id: 'cjdhdfyrdfh1w2sscy0tz2pgc',
            accessToken: 'pk.eyJ1IjoiY2hva291IiwiYSI6ImNqZGRxczFudjAyY2Qyd21zN2I1ZzU5cDEifQ.tLMddZPOBAJYQl6_JoLZ7w',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);
        var data = L.geoJson(gov, {
            style: style,
            onEachFeature: onEachFeature
        });
        var data3 = L.geoJson(sect, {
            style: styleSect,
            onEachFeature: onEachFeatureSect
        });

        map.addLayer(data);
        info.addTo(map);
    </script>

    <script>
        //Once the document is ready we set javascript and page settings
        var screenWidth;
        var screenHeight = 600;

        $(document).ready(function() {

            var rect;
            if (self == top) {
                rect = document.body.getBoundingClientRect();
            } else {
                rect = parent.document.body.getBoundingClientRect();
            }

            //Set display size based on window size.
            screenWidth = (rect.width < 960) ? Math.round(rect.width * .95) : Math.round((rect.width - 210) * .95)
            screenWidth = document.getElementById("contenu").offsetWidth;
            screenHeight = document.getElementById("contenu").offsetHeight;
            d3.select("#currentDisplay")
                .attr("item_value", screenWidth + "," + screenHeight)
                .attr("class", "selected")
                .html("<a>" + screenWidth + "px - " + screenHeight + "px</a>");


            // Set the size of our container element.
            viz_container = d3.selectAll("#viz_container")
                .style("width", "100%")
                .style("height", "auto");

            initialize();


        });
    </script>


@endsection