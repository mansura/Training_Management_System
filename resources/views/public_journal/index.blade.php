@extends('master/master')
@section('title', 'Journals')
    <style>

        .gray {
            background-color: #80CBC4 !important;
        }
        .red {
            background-color: #CCFF90 !important;
        }
        .gra {
            background-color: #E1BEE7 !important;
        }
        .gr {
            background-color: #F8BBD0 !important;
        }
        .about-bard{
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 30px;
        }
        h4>b{
            font-size: 18px;
        }
        .modal-body p{
            text-align: justify;
        }
        .about_img{
            margin-top: 20px;
            margin-bottom: 20px;
            cursor: pointer;
        }
        .about_modal_img{
            margin-bottom: 20px;
            border: 6px solid #fff;
        }

        .about_img img{
            width: 100%;
            height: 100px;
        }
        .about_modal_img img
        {
            width: 100%;
            height: 65%;
        }
    </style>

@section('content')
    <div class="container">
        <h2 class="about-bard bg-info">List Of Journals</h2>
        <div class="row">
            @foreach($journals as $journal)
            <div class="well col-md-12">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 dg_speech">
                    <div class="about_img" >
                        <img src="{!! asset($journal->logo) !!}" alt="about image">
                    </div>
                </div>
                <span class="pull-right">Frequency: {{$journal->frequency}}</span>
                <div class="col-md-9 justify">
                    <a href="{!!URL('/public_journal/'.$journal->id.'/Volumes')!!}"><h4><b>{{$journal->title}}</b></h4></a>
                    <span>{{$journal->description}} </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection