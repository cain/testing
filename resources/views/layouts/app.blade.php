<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>danbeat</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="/css/theme.css" rel="stylesheet">






    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="app-layout">
    <div class="top-nav">
    <div class="boundary">
    <div class="logo"><a href="/"><img src="img/logo.png" style="margin-bottom: 8px;"></a></div> 
      <div style="display:inline; margin-top:5px;">  
       <p class="logo-desc">Discover The Best New EDM Songs</p>
        </div>  

          <div class="searchbar " style="">
    <div class="input-group">
      <input type="text " class="form-control nav-height" placeholder="Search for, users, categories, tracks">
      <span class="input-group-btn ">
        <button class="btn btn-default nav-height" style="padding-top:3px;" type="button"><i class="fa fa-search"></i></button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
        <a href="/register"><button class="btn btn-primary nav-button float-right " type="button" style=""> Create Account</button></a>
        <a href="/login"><button class="btn btn-default nav-button float-right " type="button" style=""> Sign in</button></a>

<a href="" class="float-right share"  data-toggle="modal" data-target="#shareModal">Share Music</a>

        

    </div>
    </div>
    <div class="sub-genre-nav">
    <div class="boundary">
     
        <div class="genre-label">
        <a href="#"><span class="label label-success "></span></a>
        <div class="btn-group genre-btn-group">
                <span  class="label label-success dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DRUM & BASS
                <span class="caret"> 

                </span>

                </span>
              
              <ul class="dropdown-menu">
                <li><a href="#">Drum and Bass</a></li>
                <li><a href="#">Jungle</a></li>
                <li><a href="#">Drumstep</a></li>
              </ul>
        </div>

        <div class="btn-group genre-btn-group">
                <span  class="label label-warning dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DUBSTEP
                <span class="caret"> 

                </span>

                </span>
              
              <ul class="dropdown-menu">
                <li><a href="#">Drum and Bass</a></li>
                <li><a href="#">Jungle</a></li>
                <li><a href="#">Drumstep</a></li>
              </ul>
        </div>

        <a href="#"><span class="label label-warning ">TECHNO</span></a>
        <a href="#"><span class="label label-danger ">TRANCE</span></a>
        <a href="#"><span class="label label-default ">DUPSTEP</span></a>
        <a href="#"><span class="label label-info" >CHILL</span></a>
        <a href="#"><span class="label label-primary ">TRAP</span></a>
        <a href="#"><span class="label label-primary label-purple ">HARDSTYLE</span></a>
        </div>
     
    </div>
    </div>


    @yield('content')

    @include('modals.share')


    @yield('footer')

    <!-- JavaScripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
</body>
</html>
