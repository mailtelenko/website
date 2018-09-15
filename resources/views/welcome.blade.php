@extends('layouts.app') 
@section('content')
<?php
$post= \App\Http\Controllers\PostController::index();
?>
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
    <div class="landing" style="background-image: url({{asset('/img/landingImage.jpg')}}">
        <div class="landingText">
            <h1 style="padding-left:2vw;">Liam Telenko</h1>
            <hr/>
            <h3 style="padding-left:2vw;">Concepts for your Cranium - Personal Blog</h3>
        </div>
        <div id="down">&#x25BC;</div>
    </div>
    <!-- Featured Article -->
    <div style="background-image:url('{{asset('img/landingImage2.jpg')}}'); width:100%; height:auto; background-attachment:fixed; background-size:cover;">
        <div id="featured" style="background-color:rgb(243, 241, 241);" class="container-fluid">
            <h2>Featured Posts</h2>
            <hr/>
            <div class="row">
                <?php $counter = 1?> @foreach($post as $post) @if($post->featured == "true")
                <div class="col-sm-12 col-md-4">
                    <div id=" featured{{$counter}} " class="post-featured ">
                        <span>Featured</span>
                        <h1>{{$post->title}}</h1>
                        <img src="{{asset( 'img/posts/'.$post->id.'/head.jpg')}}">
                        <div class="featured-author">
                            <div class="name-container">
                                <a href="{{'/authors/'.\App\Http\Controllers\AuthorController::nameFind($post->author)}}">
                                    <h2>{{$post->author}}</h2>
                                </a>
                            </div>
                            <img src="{{asset('img/staff/'.$post->author.'.jpg')}}">
                        </div>
                        <div class="intro">
                            <?php echo($post->intro); ?>
                        </div>
                        <a href="/posts/{{$post->id}}">
                <button class="readMore btn" class="btn">Read More</button>
                </a>
                        <div class="tags">
                            <?php $tags = explode(',', $post->tags); foreach($tags as $tag){echo "<form id='".$tag."' style='display:none' action='/search' metho='POST' id='search'><input name='type' type='number' value='4' style='display:none'><input style='display:none' type='text' value='".$tag."' name='query'></form><a onclick='document.getElementById(".'"'.$tag.'"'.").submit();'><div class='tag'><i style='margin-right:5px;' class='fas fa-tag'></i>".$tag."</div></a>";} ?>
                        </div>
                    </div>
                </div>
                <?php $counter = $counter +1 ?> @endif @endforeach
            </div>
        </div>

        <div style="height:25vh;"></div>
        <!-- Featured Article -->
        <div id="links" style="background-color:rgb(243, 241, 241);" class="container-fluid">
            <div class="row">
                <a style="width:99%; height:60px;" href="/blog/posts"><button style="width:100%; height:60px;" class="btn">All Posts</button></a>
            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <style>
        #app {
            padding-top: 0px;
        }
    </style>
@endsection