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
        height: fit-content;
        width: 33%;
        border: 1px solid black;
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
    .boxs{
        width: 85%;
        background: white;
        margin: 2rem auto;
        text-align: center;
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
    <div class="right">
        <div class="box-containers" style="background: yellow;">

            <div class="box" style="height: 200px; background:#000;">

            </div>
    
            <div class="boxs">
                <a href="">
                    <div class="badges">
                        <center>

                        <div class="animated_badge animated_badge_1 hide">
                            <div class="animated_stars">
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut yellow"></div>
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut"></div>
                                <div class="animated_star plus yellow"></div>
                            </div>
                            <svg class="animated_badge_svg" width="75" height="100" viewBox="0 0 75 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="badge_ribbon left"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="#A5ACB9" />
                                <path class="badge_ribbon left"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="#CD7F32" />
                                <path class="badge_ribbon left"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="url(#paint0_linear)" />
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="16" y="57" width="44" height="43">
                                    <path
                                        d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                        fill="#999999" />
                                    <path
                                        d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                        fill="url(#paint1_linear)" />
                                </mask>
                                <g class="badge_ribbon left" mask="url(#mask0)">
                                    <rect x="30" y="60" width="15" height="40" fill="#EAEDF2" />
                                </g>
                                <circle class="badge_circle" cx="37.5" cy="37.5" r="33.5" fill="#CD7F32" stroke="#C0C6CF" stroke-width="8" />
                                <path class="badge_number" d="M36.272 45H38.772V30.7H36.572C36.332 32.28 35.292 32.82 32.832 32.88V34.78H36.272V45Z" fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="38" y1="57" x2="38" y2="89.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#616468" />
                                        <stop offset="1" stop-color="#A5ACB9" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="38" y1="57" x2="38" y2="89.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div></center>
                    </div>
                    <h3 style="color: black;">Bronze</h3>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                </a>
            </div>
    
            <div class="boxs">
                <a href="">
                    <div class="badges">
                        <center>
                        <div class="animated_badge animated_badge_2 hide">
                            <div class="animated_stars">
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut yellow"></div>
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut"></div>
                                <div class="animated_star plus yellow"></div>
                            </div>
                            <svg class="animated_badge_svg" width="75" height="100" viewBox="0 0 75 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="badge_ribbon"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="#71A1F4" />
                                <path class="badge_ribbon"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="#71A1F4" />
                                <path class="badge_ribbon"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="url(#paint0_linear)" />
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="16" y="57" width="44" height="43">
                                    <path
                                        d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                        fill="#71A1F4" />
                                    <path
                                        d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                        fill="url(#paint1_linear)" />
                                </mask>
                                <g class="badge_ribbon" mask="url(#mask0)">
                                    <rect x="30" y="60" width="15" height="40" fill="#ABC7F9" />
                                </g>
                                <circle class="badge_circle" cx="37.5" cy="37.5" r="33.5" fill="#71A1F4" stroke="#CEDCF5" stroke-width="8" />
                                <path class="badge_number"
                                    d="M41.1783 45V42.86H35.0183C37.2183 40.82 41.1783 38.44 41.1783 34.8C41.1783 32.3 39.3983 30.42 36.4383 30.42C33.3583 30.42 31.6983 32.54 31.6983 35.14C31.6983 35.18 31.7183 35.22 31.7183 35.28H34.0983C34.1183 33.76 34.8383 32.62 36.4383 32.62C37.8183 32.62 38.6383 33.52 38.6383 34.86C38.6383 36.22 37.8583 37.38 36.0583 39.04C34.3783 40.62 31.8183 42.92 31.8183 42.92V45H41.1783Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="38" y1="57" x2="38" y2="89.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="38" y1="57" x2="38" y2="89.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div></center>
                    </div>
                    <h3 style="color: black;">Silver</h3>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                </a>
            </div>

            <div class="boxs">
                <a href="">
                    <div class="badges">
                        <center>
                        <div class="animated_badge animated_badge_3 hide">
                            <div class="animated_stars">
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut yellow"></div>
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut"></div>
                                <div class="animated_star plus yellow"></div>
                            </div>
                            <svg class="animated_badge_svg" width="75" height="100" viewBox="0 0 75 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="badge_ribbon"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="#71A1F4" />
                                <path class="badge_ribbon"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="#71A1F4" />
                                <path class="badge_ribbon"
                                    d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                    fill="url(#paint0_linear)" />
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="16" y="57" width="44" height="43">
                                    <path
                                        d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                        fill="#71A1F4" />
                                    <path
                                        d="M16 86.7506V62C16 59.2386 18.2386 57 21 57H55C57.7614 57 60 59.2386 60 62V86.8112C60 88.7561 58.8722 90.5246 57.1087 91.3448L40.5616 99.0411C39.2517 99.6504 37.7424 99.6633 36.4223 99.0766L18.9693 91.3197C17.1637 90.5172 16 88.7266 16 86.7506Z"
                                        fill="url(#paint1_linear)" />
                                </mask>
                                <g class="badge_ribbon" mask="url(#mask0)">
                                    <rect x="23" y="60" width="8" height="40" fill="#ABC7F9" />
                                    <rect x="43" y="60" width="8" height="40" fill="#ABC7F9" />
                                </g>
                                <circle cx="37.5" cy="37.5" r="33.5" fill="#DBDFE7" stroke="#FCD977" stroke-width="8" />
                                <circle class="badge_circle" cx="37.5" cy="37.5" r="29.5" fill="#FCD977" stroke="#FFA826" stroke-width="4" />
                                <path class="badge_number"
                                    d="M32.72 40.88C32.9 43.36 34.62 45.26 37.64 45.26C40.72 45.26 42.66 43.42 42.66 40.78C42.66 39.02 41.72 37.68 40.02 37.12C41.16 36.52 41.94 35.5 41.94 34.16C41.94 31.94 40.28 30.42 37.7 30.42C35.12 30.42 33.48 32.04 33.42 34.26H35.72C35.84 33.14 36.6 32.5 37.64 32.5C38.64 32.5 39.46 33.06 39.48 34.24C39.48 35.76 38.24 36.24 36.66 36.24V38.24H37.22C38.86 38.24 40.14 38.96 40.14 40.7C40.14 42.06 39.2 43.16 37.7 43.16C36.14 43.16 35.32 42.24 35.16 40.88H32.72Z"
                                    fill="#FFA826" />
                                <defs>
                                    <linearGradient id="paint0_linear" x1="38" y1="57" x2="38" y2="89.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="38" y1="57" x2="38" y2="89.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div></center>
                    </div>
                    <h3 style="color: black;">Gold</h3>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                </a>
            </div>

            <div class="boxs">
                <a href="">
                    <div class="badges">
                        <center>
                        <div class="animated_badge animated_badge_5 hide">
                            <div class="animated_stars">
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut yellow"></div>
                                <div class="animated_star plus"></div>
                                <div class="animated_star donut"></div>
                                <div class="animated_star plus yellow"></div>
                            </div>
                            <svg class="animated_badge_svg" width="84" height="99" viewBox="0 0 84 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="badge_ribbon"
                                    d="M0.761166 82.9447L17.3041 50.8886C17.5574 50.3979 18.1606 50.2053 18.6513 50.4586L43.875 63.4756C44.3658 63.7289 44.5583 64.332 44.305 64.8228L27.7788 96.8466C27.4294 97.5236 26.4817 97.5769 26.0586 96.9435L17.8756 84.694C17.6881 84.4133 17.3716 84.2461 17.0341 84.2495L1.65981 84.4033C0.906487 84.4108 0.415676 83.6142 0.761166 82.9447Z"
                                    fill="#F04152" />
                                <path class="badge_ribbon"
                                    d="M0.761166 82.9447L17.3041 50.8886C17.5574 50.3979 18.1606 50.2053 18.6513 50.4586L43.875 63.4756C44.3658 63.7289 44.5583 64.332 44.305 64.8228L27.7788 96.8466C27.4294 97.5236 26.4817 97.5769 26.0586 96.9435L17.8756 84.694C17.6881 84.4133 17.3716 84.2461 17.0341 84.2495L1.65981 84.4033C0.906487 84.4108 0.415676 83.6142 0.761166 82.9447Z"
                                    fill="url(#paint0_linear)" />
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="50" width="44" height="46">
                                    <path
                                        d="M3.80623 77.0441L15.4697 54.4432C16.7361 51.9893 19.752 51.0266 22.2059 52.293L40.3204 61.6412C42.7743 62.9076 43.737 65.9235 42.4707 68.3774L30.8904 90.817C29.1437 94.2016 24.4052 94.4685 22.2895 91.3014L19.0777 86.4935C18.1402 85.09 16.5578 84.2543 14.8701 84.2712L8.29946 84.3369C4.53283 84.3745 2.07879 80.3915 3.80623 77.0441Z"
                                        fill="#71A1F4" />
                                    <path
                                        d="M3.80623 77.0441L15.4697 54.4432C16.7361 51.9893 19.752 51.0266 22.2059 52.293L40.3204 61.6412C42.7743 62.9076 43.737 65.9235 42.4707 68.3774L30.8904 90.817C29.1437 94.2016 24.4052 94.4685 22.2895 91.3014L19.0777 86.4935C18.1402 85.09 16.5578 84.2543 14.8701 84.2712L8.29946 84.3369C4.53283 84.3745 2.07879 80.3915 3.80623 77.0441Z"
                                        fill="url(#paint1_linear)" />
                                </mask>
                                <g class="badge_ribbon" mask="url(#mask0)">
                                    <rect width="9.73445" height="46.9502" transform="matrix(0.894023 0.448022 -0.445194 0.895434 24.272 60.4499)"
                                        fill="#FCD977" />
                                </g>
                                <path class="badge_ribbon right"
                                    d="M56.5365 97.1074L38.5 65.8673C38.2239 65.389 38.3877 64.7774 38.866 64.5013L63.4476 50.3091C63.9259 50.0329 64.5375 50.1968 64.8137 50.6751L82.832 81.8838C83.2129 82.5435 82.7458 83.3698 81.9841 83.3836L67.2552 83.6511C66.9177 83.6572 66.6061 83.8332 66.4266 84.1191L58.2494 97.1392C57.8487 97.7772 56.9132 97.7598 56.5365 97.1074Z"
                                    fill="#F04152" />
                                <path class="badge_ribbon right"
                                    d="M56.5365 97.1074L38.5 65.8673C38.2239 65.389 38.3877 64.7774 38.866 64.5013L63.4476 50.3091C63.9259 50.0329 64.5375 50.1968 64.8137 50.6751L82.832 81.8838C83.2129 82.5435 82.7458 83.3698 81.9841 83.3836L67.2552 83.6511C66.9177 83.6572 66.6061 83.8332 66.4266 84.1191L58.2494 97.1392C57.8487 97.7772 56.9132 97.7598 56.5365 97.1074Z"
                                    fill="url(#paint2_linear)" />
                                <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="38" y="49" width="45" height="47">
                                    <path
                                        d="M53.2165 91.357L40.5 69.3314C39.1193 66.9399 39.9387 63.882 42.3301 62.5013L59.9835 52.3091C62.375 50.9283 65.4329 51.7477 66.8137 54.1392L79.4394 76.0076C81.3438 79.3061 79.0082 83.4376 75.2001 83.5068L69.419 83.6118C67.7314 83.6424 66.1732 84.5224 65.2756 85.9517L61.7808 91.5162C59.7774 94.7061 55.0999 94.6192 53.2165 91.357Z"
                                        fill="#71A1F4" />
                                    <path
                                        d="M53.2165 91.357L40.5 69.3314C39.1193 66.9399 39.9387 63.882 42.3301 62.5013L59.9835 52.3091C62.375 50.9283 65.4329 51.7477 66.8137 54.1392L79.4394 76.0076C81.3438 79.3061 79.0082 83.4376 75.2001 83.5068L69.419 83.6118C67.7314 83.6424 66.1732 84.5224 65.2756 85.9517L61.7808 91.5162C59.7774 94.7061 55.0999 94.6192 53.2165 91.357Z"
                                        fill="url(#paint3_linear)" />
                                </mask>
                                <g class="badge_ribbon right" mask="url(#mask1)">
                                    <rect width="9.73445" height="46.9502" transform="matrix(0.860033 -0.510239 0.512954 0.858416 50.3103 65.1699)"
                                        fill="#FCD977" />
                                </g>
                                <circle cx="39.5" cy="37.5" r="33.5" fill="#DBDFE7" stroke="#8C62F5" stroke-width="8" />
                                <circle class="badge_circle" cx="39.5" cy="37.5" r="29.5" fill="#8C62F5" stroke="#D1C0FB" stroke-width="4" />
                                {{-- <path class="badge_number"
                                d="M43.16 39.98H41.28V30.7H39.04C39 30.76 37.64 32.78 36.82 33.96L32.54 40.12V42.08H39.02V45H41.28V42.08H43.16V39.98ZM39.06 33.9C39.04 34.58 39.02 35.68 39.02 36.46V39.98H35.02C35.02 39.98 35.84 38.76 36.52 37.78L37.46 36.4C38.1 35.46 38.86 34.16 39.02 33.9H39.06Z"
                                fill="#FFA826" /> --}}
                                <path class="badge_number"
                                d="M43.16 39.98H41.28V30.7H39.04C39 30.76 37.64 32.78 36.82 33.96L32.54 40.12V42.08H39.02V45H41.28V42.08H43.16V39.98ZM39.06 33.9C39.04 34.58 39.02 35.68 39.02 36.46V39.98H35.02C35.02 39.98 35.84 38.76 36.52 37.78L37.46 36.4C38.1 35.46 38.86 34.16 39.02 33.9H39.06Z"
                                fill="#E3D9FC" /> -->
                                <defs>
                                    <linearGradient id="paint0_linear" x1="31.2632" y1="56.9671" x2="13.7695" y2="90.8654"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A31523" />
                                        <stop offset="1" stop-color="#F04152" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear" x1="31.2632" y1="56.9671" x2="13.7695" y2="90.8654"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear" x1="51.1568" y1="57.4052" x2="70.2299" y2="90.4407"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A31523" />
                                        <stop offset="1" stop-color="#F04152" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear" x1="51.1568" y1="57.4052" x2="70.2299" y2="90.4407"
                                        gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#27539F" />
                                        <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div></center>
                    </div>
                    <h3 style="color: black;">Luxury</h3>
                    <p style="color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id.</p>
                </a>
            </div>
    
        </div>

    </div>
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
        // Badge
        
        setTimeout(() => {
        document.querySelector(".animated_badge_1").classList.remove("hide");
        }, 0);

        setTimeout(() => {
        document.querySelector(".animated_badge_2").classList.remove("hide");
        }, 1600);

        setTimeout(() => {
        document.querySelector(".animated_badge_3").classList.remove("hide");
        }, 3200);

        setTimeout(() => {
        document.querySelector(".animated_badge_5").classList.remove("hide");
        }, 4800);
        // Badge end
    </script>
@endsection