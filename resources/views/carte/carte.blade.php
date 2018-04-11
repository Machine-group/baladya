@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/leaflet.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
@endsection


@section('scripts')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('lib/leaflet.js')}}"></script>
    <script src="{{asset('lib/leaflet.ajax.min.js')}}"></script>
    <script src="{{asset('lib/spin.js')}}"></script>
    <script src="{{asset('lib/leaflet.spin.js')}}"></script>

    <script src="{{asset('lib/jquery.min.js')}}"></script>
    <script src="{{asset('lib/randomColor.js')}}"></script>


    <script src="{{asset('js/gov.geojson')}}"></script>
    <script src="{{asset('js/secteur.geojson')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('css/semantic.min.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('change','#gv',function(){
              //console.log("Gouvernorat change");
                var g =  this.value ;

                if(g > 0)
                    searchGovZ(g);


                var gv_id=$(this).val();
                //console.log(gv_id);
                 var div=$(this).parent();
                //
                var op=" ";

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findMunicipalite')!!}',
                    data:{'id':gv_id},
                    success:function(data){
                     //  console.log('success');

                       // console.log(data);

                       // console.log(data.length);
                        op+='<option value="0" selected disabled>Choisir municipalité</option>';
                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].Code_Muni+'">'+data[i].nom_muni_Ar +'</option>';

                        }

                        div.find('#mnp').html(" ");
                        div.find('#mnp').append(op);
                    },
                    error:function(){

                    }

                });


            });

            $(document).on('change','#mnp',function(){

                var g =  this.value ;


                var muni_id=$(this).val();
                console.log(muni_id);

               var div=$(this).parent();

               var op=" ";

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findSecteur')!!}',
                    data:{'id':muni_id},
                    success:function(data){
                        console.log('success');

                        console.log(data);

                        //console.log(data.length);
                        op+='<option value="0" selected disabled>Choisir secteur</option>';
                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].Cod_Sect+'">'+data[i].Lib_Sect_Fr +'</option>';
                        }

                        div.find('#sct').html(" ");
                        div.find('#sct').append(op);
                    },
                    error:function(){

                    }
                });
                if(g > 0)
                searchSectM();
            });

        });
    </script>

@endsection

@section('nav')
    <ul class="navigation">
        <li><a href="{{asset('')}}">Accueil</a></li>
        <li  class="dropdown"><a href="#">Rapports</a>
            <ul>
                <li class="dropdown">
                    <a href="{{route('RM')}}">Rapport municipal</a>
                </li>
                <li>
                    <a href="{{route('RPL')}}"> Rapport législatif</a>
                </li>
                <li>
                    <a href="{{route('RPP')}}"> Rapport présidentiel</a>
                </li>
            </ul>
        </li>

        <li class="current"><a href="{{route('carteIntelligente.index')}}">Carte intelligente</a></li>

        <li class="dropdown"><a href="#">Projets</a>
            <ul>
                <li><a href="#">Project Gallery</a></li>
                <li><a href="#">Project Grid</a></li>
                <li><a href="#">Projects Grid With Filter</a></li>
                <li><a href="#">Project With Sidebar</a></li>
                <li><a href="#">Project Manasory</a></li>
                <li><a href="#">Project Single Detail</a></li>
            </ul>
        </li>

        <li class="dropdown"><a href="#">Profile</a>
            <ul>
                @if (Route::has('login'))
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}"><span>Login</span></a></li>
                        <li><a href="{{ route('register') }}"><span>Adhérer</span></a></li>
                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                <span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                @endif
            </ul>
        </li>
    </ul>
@endsection
@section('content')
    <section class="branch-area">
    <div class="disp_in ctn"   >
        <div class="choice_box">
            <div class="select-field">
                <br>
                <br>
            <select id="gv" name="gv" class="selectpicker">
                <option value="0" disabled="true" selected="true">-Nom gouvernorat-</option>
                @foreach($gouvernorats as $gouvernorat)
                    <option value="{{ $gouvernorat->Code_Gov }} "> {{ $gouvernorat->Nom_Gov_Fr }} </option>
                @endforeach
            </select>
            <br>
            <select id="mnp" class="selectpicker">

                <option value="0" disabled="true" selected="true">-Nom municiapalité-</option>
            </select>
                <br>
            <select id="sct" class="selectpicker">
                <option value="0" disabled="true" selected="true">-Nom secteur-</option>
            </select>
            </div>
            </div>
            <div id="map" >
                <script>
                    // initialize the map
                    var map = L.map('map').setView([33.7967419, 9.2763324], 6.5);

                    L.tileLayer('https://api.tiles.mapbox.com/styles/v1/{username}/{id}/tiles/{tileSize}/{z}/{x}/{y}?access_token={accessToken}', {
                        maxZoom: 18,
                        username: 'chokou',
                        id: 'cjdhdfyrdfh1w2sscy0tz2pgc',
                        accessToken: 'pk.eyJ1IjoiY2hva291IiwiYSI6ImNqZGRxczFudjAyY2Qyd21zN2I1ZzU5cDEifQ.tLMddZPOBAJYQl6_JoLZ7w',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(map);
                    var data = L.geoJson(gov , {style: style , onEachFeature: onEachFeature});
                    var data3 = L.geoJson(sect , {style: styleSect , onEachFeature: onEachFeatureSect});

                    map.addLayer(data);
                    info.addTo(map);
                </script>
            </div>
    </div>
    </section>



@endsection


@section('customScripts')

@endsection