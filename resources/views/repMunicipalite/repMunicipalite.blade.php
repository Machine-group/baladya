@extends('layouts.app')

@section('styles')
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
@endsection


@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('change','#gv',function(){
                //console.log("Gouvernorat change");
                var gv_id=$(this).val();
                //console.log(gv_id);
                var div=$(this).parent();
                //
                var op=" ";

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findMun')!!}',
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
                $(document).on('change','#mnp',function(){


                    var muni_id=$(this).val();
                    //console.log(muni_id);

                    var div=$(this).parent().parent().parent().parent().parent();

                    var op=" ";

                    $.ajax({
                        type:'get',
                        url:'{!!URL::to('findRep')!!}',
                        data:{'id':muni_id},
                        success:function(data){
                            console.log('success');

                            console.log(data);

                            //console.log(data.length);
                            for(var i=0;i<data.length;i++){
                                op+= '<tr class="row100 body"><td class="cell100 column1">'+data[i].nom+'</td><td class="cell100 column2">'+data[i].age+'</td><td class="cell100 column3">'+data[i].profession+'</td><td class="cell100 column4">'+data[i].type+'</td><td class="cell100 column5">'+data[i].secteur+'</td><td class="cell100 column5">'+data[i].niveau_academique+'</td></tr>';
                            }

                            div.find('#representant').html(" ");
                            div.find('#representant').append(op);
                        },
                        error:function(){

                        }
                    });
                });

            });

        });
    </script>

@endsection


@section('content')
    <div>
    <section class="branch-area">
        <div class="disp_in ctn"  style="margin-left: 100px;">
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
                </div>
            </div>
        </div>
    </section>

        <div class="table100 ver1 m-b-110" style="width: 1000px">
            <div class="table100-head">
                <table>
                    <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Nom</th>
                        <th class="cell100 column2">Age</th>
                        <th class="cell100 column3">Profession</th>
                        <th class="cell100 column4">Type</th>
                        <th class="cell100 column5">Secteur</th>
                        <th class="cell100 column5">Niv.académique</th>
                    </tr>
                    </thead>
                </table>
            </div>

            <div class="table100-body js-pscroll">
                <table>
                    <tbody id="representant">
                    <tr class="row100 body">
                        <td class="cell100 column1">Like a butterfly</td>
                        <td class="cell100 column2">Boxing</td>
                        <td class="cell100 column3">9:00 AM - 11:00 AM</td>
                        <td class="cell100 column4">Aaron Chapman</td>
                        <td class="cell100 column5">10</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('customScripts')
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });


    </script>
    <!--===============================================================================================-->
    <script src="{{asset('js/table.js')}}"></script>


@endsection