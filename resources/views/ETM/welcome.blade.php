@extends('ETM.layouts.app') 
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!--
    <div class="info-section">
         Calendar Version 
        <div class="inner-section">
            <div class="day">
                <h1>Today is a:</h1>
                <h1><strong>Day 2</strong></h1>
            </div>
            <div class="week">
                <p>This will be a calendar event</p>
                <p>This will be a calendar event</p>
            </div>
        </div>
!-->

    <!-- Just Title -->
    <!--
        <h1>The Lyon</h1>
        <h3>Read | Rant | Roar</h3>
    </div>
-->
    <!--
    <div class="nextBtns">
        <button id="nextLeft" style="left:20px;" class="btn nextButton"><span class="fa fa-angle-left"></span></button>
        <button id="nextRight" style="right:20px;" class="btn nextButton"><span class="fa fa-angle-right"></span></button>

    </div>
-->
    <div class="landing container-fluid" style="min-height:calc(70vh - 175px); height:auto; overflow:auto; background-color:#292929; }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="post post-full">
                    <h2 style="text-align:center;">Edgy Teen Memez</h2>
                    <hr/>
                    <p style="padding-left:3vw; padding-right:3vw; font-size:16px; margin:0px;">Edgy teen memez is a revolutionary social media experience which embodies the spirit of the edgiest of teens. The private repository of pure edgyness is accessible through Instagram by request only. Below is a taste of the anxiety fruit that is the Edgy Teen Memez Instagram account.</p>
                    <hr/>
                </div>
            </div>
            <div class="col-sm-12">
                <div style="text-align:center;" class="post post-full">
                <h2>Quality Content</h2>
                <hr/>
                Content under curation.
                <!-- LightWidget WIDGET <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/0055618a654250d3870fc9b7498d3e6f.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>    -->
            </div>
            </div>
            <div class="col-sm-12">
                <div style="text-align:center;" class="post post-full">
                <hr/>
                    <button class="button contentBtn">Submit Content</button>
                    <button class="button curateBtn">Become a Curator</button>
                    <button class="button contactBtn">Contact Edgelords</button>
                <hr/>
                </div>
            </div>
        </div>
    </div>
    
    <div id="contentPopup" class="hide fixedPopup">
        <h1>Submit Content</h1>
        <hr/>
        <p>To submit content please contact Edgy Teen Memez with the image and any other context required via. email or Instagram direct messages. Submitted content is not guarenteed to be added to the quite edgy collection of memes. Please be respectful of the vibe created and no schenanigan entries.</p>
        <hr/>
        <a href="mailto:edge@edgyteenmemez.tk" target="_blank"><button style="margin:10px;" class="button">Email</button></a><a href="https://instagram.com/edgyteenmemez" target="_blank"><button style="margin:10px;" class="button">Instagram DM</button></a><button style="margin:10px;" class="button contentBtn">Close</button>
    </div>

    <div id="curatePopup" class="hide fixedPopup">
        <h1>Curate Content</h1>
        <hr/>
        <p>Want to shape the future of Edgy Teen Memez? Want to become a part of an elite group of individuals who hold all of the power? Then apply to become an ETM curator! Curators assist in the collection and posting of content on ETM. If interested, please send an application to ETM either via. email or Instagram DM outlining who you are, what makes you edgy, and a portfolio of your edgiest works.</p>
        <hr/>
        <a href="mailto:edge@edgyteenmemez.tk" target="_blank"><button style="margin:10px;" class="button">Email</button></a><a href="https://instagram.com/edgyteenmemez" target="_blank"><button style="margin:10px;" class="button">Instagram DM</button></a><button style="margin:10px;" class="button curateBtn">Close</button>
    </div>

    <div id="contactPopup" class="hide fixedPopup">
        <h1>Contact ETM</h1>
        <hr/>
        <p>To contact ETM for any reason, please either email or Instagram direct message us.<br/>Thank you.</p>
        <hr/>
        <a href="mailto:edge@edgyteenmemez.tk" target="_blank"><button style="margin:10px;" class="button">Email</button></a><a href="https://instagram.com/edgyteenmemez" target="_blank"><button style="margin:10px;" class="button">Instagram DM</button></a><button style="margin:10px;" class="button contactBtn">Close</button>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <style>
        #app {
            padding-top: 0px;
        }

        .developed-by img{
            display:none!important;
        }

        .fixedPopup{
            display:block;
            margin-top:5vh;
            margin-left:5vw;
            width:90vw;
            height:90vh;
            background-color:white;
            border-radius:3px;
            position:fixed; 
            top:0px;
            box-shadow:0px 0px 50vw rgba(0,0,0,5);
            padding:50px;
            z-index:2000;
        }

        .hide{
            display:none;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(".contentBtn").click(function(){
            $("#contentPopup").toggleClass("hide");
        });

        $(".curateBtn").click(function(){
            $("#curatePopup").toggleClass("hide");
        });

        $(".contactBtn").click(function(){
            $("#contactPopup").toggleClass("hide");
        });
    </script>
@endsection