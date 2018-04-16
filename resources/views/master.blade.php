
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>mobileshop</title>
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">MobileShop</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                  
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           @foreach($brand as $type)
                            <li><a href="{{route('product',$type->id)}}">{{$type->name}}</a></li>
                         @endforeach
                        </ul>
                    </li>
                    
                    <li><a href="{{route('contact')}}">Contact</a></li>
                     <li><a href="{{route('login')}}">Log in</a></li>
                      <li><a href="{{route('signup')}}">Sign up</a></li>
                       <li><a href="#">Cart</a></li>  
                      <li><a href={{route('news')}}">News</a></li>  
                </ul>
                  <div id="searchbox">
      <span id="icon"><i id="fa fa-search"></i></span>
      <input type="text" id="search" placeholder="search..." />
      <button id="search-button" type="submit"> &#128269;</button>
</div> 
          
            </div><!--/.nav-collapse -->
        </div>
               
   <img src="{{URL::to('image/banner.jpg')}}" width="100%" height="80px">
    </nav>
 
  <div id="main">   
     @yield('noidung')
</div>

 
   
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>   