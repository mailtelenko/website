@extends('layouts.app') 
@section('content')
<?php
$post= \App\Http\Controllers\PostController::index();
?>
    <div class="container-fluid post top-title post-full">

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2 id="page-title" style="margin-bottom:20px;padding:10px;">Blog Posts</h2>
            </div>
            <div class="col-sm-12 col-md-6">
                <form action="/search" metho="POST" id="search">
                    <input name="type" type="number" value="4" style="display:none">
                    <input class="form-control" placeholder=<?php if (isset($search)||isset($message)){ echo($query); }else{ echo( "Search");}?>                    type="text" name="query"><span class="input-group-btn">
                    <button class="btn">Search</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid post post-full" style="background-color:#fcfcfc;">
        <div class="container-fluid">
            <div style="text-align:center;" class="row">
                @if(isset($message))
                <h3 style="width:100%; padding:20px">{{$message." for '".$query."'"}}</h3>
                @elseif(isset($search)) @foreach($search as $post)
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="post-tab">
                        <img src="{{asset('img/posts/'.$post->id.'/head.jpg')}}">
                        <h1 style="top:10px!important;">{{$post->title}}</h1>
                        <div class="tags" style="position:relative; height:auto; margin-top:30px; margin-bottom:0px; left:0px; margin-left:7px; width:100%;">
                            <?php $tags = explode(',', $post->tags); foreach($tags as $tag){echo "<form id='".$tag."' style='display:none' action='/search' metho='POST' id='search'><input name='type' type='number' value='4' style='display:none'><input style='display:none' type='text' value='".$tag."' name='query'></form><a onclick='document.getElementById(".'"'.$tag.'"'.").submit();'><div class='tag'><i style='margin-right:5px;' class='fas fa-tag'></i>".$tag."</div></a>";} ?>
                        </div>
                        <div class="intro-container">
                            <div id="intro">
                                <?php echo($post->intro);?>
                            </div>
                        </div>
                        <a href="{{'/posts/'.$post->id}}">
                                    <button style="position:absolute; margin:10%; width:80%; left:0px;" class="btn">Read Post</button>
                                </a>
                    </div>
                </div>
                @endforeach @else @foreach($post as $post)
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="post-tab">
                        <img src="{{asset('img/posts/'.$post->id.'/head.jpg')}}">
                        <h1 style="top:10px!important;">{{$post->title}}</h1>
                        <div class="tags" style="position:relative; height:auto; margin-top:30px; margin-bottom:0px; left:0px; margin-left:7px; width:100%;">
                            <?php $tags = explode(',', $post->tags); foreach($tags as $tag){echo "<form id='".$tag."' style='display:none' action='/search' metho='POST' id='search'><input name='type' type='number' value='4' style='display:none'><input style='display:none' type='text' value='".$tag."' name='query'></form><a onclick='document.getElementById(".'"'.$tag.'"'.").submit();'><div class='tag'><i style='margin-right:5px;' class='fas fa-tag'></i>".$tag."</div></a>";} ?>
                        </div>
                        <div class="intro-container">
                            <div id="intro">
                                <?php echo($post->intro);?>
                            </div>
                        </div>
                        <a href="{{'/posts/'.$post->id}}">
                                <button style="position:absolute; margin:10%; width:80%; left:0px;" class="btn">Read Post</button>
                            </a>
                    </div>
                </div>
                @endforeach @endif
            </div>
        </div>
    </div>
@endsection