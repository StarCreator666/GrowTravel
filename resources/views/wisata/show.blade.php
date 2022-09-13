@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/wisata.css') }}">
<style>
    .container-show{
        padding: 2%;
        box-sizing: border-box;
        padding-bottom: 2%;
    }
    .right{
        height: 200px;
        width: 33%;
        background: black;
        float: right;
    }
    .left{
        height: auto;
        width: 67%;
        background: white;
        float: left;
    }
    

    .question-answer {
    width: 90% !important;
    }

    .question {
    display: flex;
    justify-content: space-between;
    }

    .title-question {
    margin: 1.4rem 0rem;
    font-size: 1.2rem;
    font-weight: 500;
    color: #000;
    }

    .question-btn {
    font-size: 1.5rem;
    background: transparent;
    border-color: transparent;
    cursor: pointer;
    }
    .question-btn:focus{
        outline: none;
    }

    .up-icon {
    display: none;
    }

    .answer {
    font-size: 1.2rem;
    line-height: 1.8;
    display: none;
    }

    .show-text .answer {
    display: block;
    }

    .show-text .up-icon {
    display: inline;
    }

    .show-text .down-icon {
    display: none;
    }

    @media screen and (min-width: 992px) {
    .accordion {
        width: 920px;
        height: 0;
        display: flex;
    }

    .accordion-img {
        position: relative;
        width: 420px;
        top: 88px;
    }

    .question-answer {
        width: 380px;
    }

    .content-accordion {
        margin-top: 85px;
    }

    .title {
        margin-top: 50px;
        font-size: 3rem;
    }
    }

</style>

<div class="jumbotron">
</div>
<div class="container-show">
    <div class="left">
        <h1 style="font-weight: 700;">{{ $wisata->judul }}</h1>  
        <p style="color: grey; font-size:1.4rem; font-weight: 300;"><i class="fas fa-map-marker-alt" style="padding-right: 2px;"></i>  {{ $wisata->lokasi }}</p> 
        <h3 style="color: orange; font-weight:600; font-size:22px; padding-bottom:10px;">Overview</h3>
        <p style="font-size: 15px; padding-bottom:20px; width:90%;">{!! nl2br($wisata->deskripsi) !!}</p>
        <hr width="90%">

        @php
            $jadwalday = explode('+',$wisata->day);  
            $jadwalketerangan = explode('+',$wisata->keterangan);  
            $noinn = 1;
        @endphp
        <div class="jadwal">
            <h3 style="color: orange; font-size:22px; font-weight:600; padding-bottom:10px;">Itinerary</h3>
            @foreach($jadwalday as $jd)
            @if($jd != null)
            @foreach($jadwalketerangan as $jk)
            @if($jk != null)
            <div class="question-answer" >
                <div class="question" style="background: rgba(128, 128, 128,0.1); padding: 0 10px;">
                    <h3 class="title-question" style="font-size: 15px; font-weight:400;">
                        <i class="fas fa-map-marker-alt" style="padding-right: 4px; color: #000"></i> Day {{ $noinn++ }}: {{ $jd }}
                    </h3>
                    <button class="question-btn">
                        <span class="up-icon">
                            <i class="fas fa-chevron-up"></i>
                        </span>
                        <span class="down-icon">
                            <i class="fas fa-chevron-down"></i>
                        </span>
                    </button>
                </div>
                <div class="answer" style="background: white;">
                    <p>{!! nl2br($jk) !!}</p>
                </div>
            </div>
            @endif
            @endforeach
            @endif
            @endforeach
            <br>
            <hr width="90%">
            <h3 style="color: orange; font-size:22px; font-weight:600; padding:10px 0;">Inclusions</h3>
            @php
                $inclusion = explode(',',$wisata->inclusion);  
                $exclusion = explode(',',$wisata->exclusion);  
                $addons = explode(',',$wisata->add_ons);  
                $noin = 1;
                $noex = 1;
                $noan = 1;
            @endphp
             @foreach($inclusion as $in)
             @if($in != null)
                 <p style="font-size: 15px; font-weight:300;"><i class="fas fa-check fa-xs" style="color: rgb(35, 190, 35); padding-right:3px;"></i> {{ $in }}</p>
                 @endif
             @endforeach
             <h3 style="color: orange; font-size:22px; font-weight:600; padding:10px 0;">Exclusions</h3>
             @foreach($exclusion as $ex)
             @if($ex != null)
                 <p style="font-size: 15px; font-weight:300;"><i class="fas fa-times fa-xs" style="color:red; padding-right:3px;"></i> {{ $ex }}</p>
                 @endif
             @endforeach
             <h3 style="color: orange; font-size:22px; font-weight:600; padding:10px 0;">Add-ons (optional):</h3>
             @foreach($addons as $ao)
             @if($ao != null)
                 <p style="font-size: 15px; font-weight:300;"><i class="fas fa-plus fa-xs" style="color:rgb(0, 183, 255); padding-right:3px;"></i> {{ $ao }}</p>
                 @endif
             @endforeach
        </div>
    </div>
    <div class="right"></div>
    <h1 style="clear: both"></h1>
</div>
    <script>
        const questions = document.querySelectorAll('.question-answer');
            questions.forEach(function(question) {
                const btn = question.querySelector('.question-btn');
                btn.addEventListener("click", function() {
                    questions.forEach(function(item) {
                        if (item !== question) {
                            item.classList.remove("show-text");
                        }
                    })
                    question.classList.toggle("show-text");
            })
        })
        
    </script>
@endsection