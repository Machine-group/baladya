@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('style/style.css')}}">

    <link type="text/css" rel="stylesheet" href="{{URL::asset('dendogram/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('squenceChart/sequences.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />

    <style>
        #mapid {
            height: 500px;
            width: 300px;
        }
    </style>
    <!-- end map -->
@endsection


@section('scripts')
    <!-- map link -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

    <script src="https://d3js.org/d3.v4.min.js"></script>

@endsection


@section('content')
    <div style="width: 80%; margin-left: auto ; margin: auto;">
    <header id="cm-header">
    </header>
    <div id="global">

        <div class="container-fluid">
            <div class="row cm-fix-height">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="height: 100px;">
                                <h2>Rapport Municipale</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row cm-fix-height">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Carte</h2>
                        </div>
                        <div class="panel-body">
                            <div style="height: 400px;">
                                <div id="mapid"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Sequence Diagrma</h2>
                        </div>
                        <div class="panel-body">
                            <div style="height: 50px;">

                                <div id="SquenceChart" class="row">
                                    <div id="main" class="col-sm-4">
                                        <div id="sequence"></div>
                                        <div id="chart">
                                            <div id="explanation" style="visibility: visible;">
                                                <span id="percentage"></span><br/> of visits begin with this sequence of pages
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sidebar" class="col-sm-3">
                                        <input type="checkbox" id="togglelegend"> Legend<br/>
                                        <div id="legend" style="visibility: visible;"></div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Trinagle Diagrma</h2>
                        </div>
                        <div class="panel-body">
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cm-fix-height">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tree Diagrma</h2>
                        </div>
                        <div class="panel-body">
                            <div style="">
                                <svg id="chartHuge" width="650" height="650"></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tree Diagrma</h2>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td style="white-space:nowrap">population</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" style="width:50%"></div>
                                        </div>
                                    </td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">logement</td>
                                    <td style="width:100%">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" style="width:9%"></div>
                                        </div>
                                    </td>
                                    <td>9%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">homme </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:12%"></div>
                                        </div>
                                    </td>
                                    <td>12%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">femme</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:38%"></div>
                                        </div>
                                    </td>
                                    <td>38%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">ménages</td>
                                    <td style="width:100%">
                                        <div class="progress">
                                            <div class="progress-bar" style="width:47%"></div>
                                        </div>
                                    </td>
                                    <td>47%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>
                                <tr>
                                    <td style="white-space:nowrap">Chomages</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width:73%"></div>
                                        </div>
                                    </td>
                                    <td>73%</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cm-fix-height">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tree Diagrma</h2>
                        </div>
                        <div class="panel-body">
                            <div style="height: 400px;">Géographique</div>
                            <div id="d1-c1" style="height:150px"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tree Diagrma</h2>
                        </div>
                        <div class="panel-body">
                            <div style="height: 400px;">Digital</div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body" id="demo-buttons">
                    <p>Click buttons below to change navbar main color :</p>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-primary" data-switch-color="primary">primary</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-success" data-switch-color="success">success</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-info" data-switch-color="info">info</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-warning" data-switch-color="warning">warning</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-danger" data-switch-color="danger">danger</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-gray" data-switch-color="gray">gray</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-yellow" data-switch-color="yellow">yellow</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-purple" data-switch-color="purple">purple</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-turquoise" data-switch-color="turquoise">turquoise</button>
                            <br>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <button class="btn btn-block btn-midnight" data-switch-color="midnight">midnight</button>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="cm-footer"><span class="pull-left">www.bladeya.tn</span><span class="pull-right">&copy; Copyright 2018</span></footer>
    </div>
    </div>

@endsection


@section('customScripts')
    <script src="{{URL::asset('assets/js/lib/jquery-2.1.3.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.cookie.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/fastclick.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/clearmin.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/demo/home.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('squenceChart/sequences.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('TrianglChart/data.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('dendogram/main.js')}}"></script>

    <script src="{{URL::asset('assets/js/lib/c3.min.js')}}"></script>

    <script src="{{URL::asset('menu/script.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--end scripts-->
    <script>
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYWJuZXUiLCJhIjoiY2pkbWJubzlhMDFmcjMya2dzNmxrNXN1eSJ9.w1Hr51bdWB-aQnVilZa0aw', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
    </script>


@endsection