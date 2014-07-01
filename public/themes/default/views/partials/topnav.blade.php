<?php
    function sa($item){
        if(URL::to($item) == URL::full() ){
            return  'class="active"';
        }else{
            return '';
        }
    }
?>
<ul class="nav">
    @if(Auth::check())
        <li><a href="{{ URL::to('feed') }}" {{ sa('feed') }} ><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ URL::to('music') }}" {{ sa('music') }} ><i class="fa fa-music"></i> My Music</a></li>
        <li><a href="{{ URL::to('video') }}" {{ sa('video') }} ><i class="fa fa-youtube-play"></i> My Movie</a></li>
        <li><a href="{{ URL::to('playlist') }}" {{ sa('playlist') }} ><i class="fa fa-list"></i> My Playlist</a></li>
        <li><a href="{{ URL::to('uploads') }}" {{ sa('uploads') }} ><i class="fa fa-cloud-upload"></i> My Uploads</a></li>
        <li><a href="{{ URL::to('video') }}" {{ sa('video') }} ><i class="fa fa-usd"></i> My Store</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-cogs" ></i> Option
                <b class="caret"></b>
              </a>
            <ul class="dropdown-menu">
                <li><a href="{{ URL::to('profile') }}" {{ sa('profile') }} ><i class="fa fa-user"></i> Profile</a></li>
            </ul>
        </li>
    @endif
</ul>
