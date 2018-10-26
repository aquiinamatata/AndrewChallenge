<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blogsite</title>
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   
</head>
    <body>

        @include('inc.navbar')


        <div class="container">

        <!-- <img src="/img/111.png"> -->

        @if(Request::is('/'))
        
        @include('inc.showcase')
        @endif

        <div class="row">
            <div class="col-md-8 col-lg-8">
        

         <div class="container">

        <!-- <h2>Goals in Life</h2> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="/img/Graduates.jpg" alt="Graduate" style="width:100%;">
          <div class="carousel-caption">
            <h3>Graduate</h3>
             <p>Is the most awaited event of my entire life!</p>
          </div>
      </div>



      <div class="item">
          <img src="/img/travel.jpg" alt="Travel" style="width:100%;">
            <div class="carousel-caption">
              <h3>Travelling</h3>
                <p>To travel around the world!</p>
            </div>
      </div>


    
      <div class="item">
         <img src="/img/job.jpg" alt="Job" style="width:100%;">
            <div class="carousel-caption">
              <h3>Job</h3>
               <p>Find a decent job!</p>
           </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

        
           
            @include('inc.messages')
            @yield('content')

            </div>

                       
        </div>

        </div>


        <footer id="footer" class="text-center">

        <p> Simple Blogsite</p>
        
               
        </footer>

    </body>
</html>