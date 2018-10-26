<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
     <div class="containter">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">Blogsite</a>
      </div>
       
      <div id="navbar" class="collpase navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li><br>
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
        </ul>
      </div>
     </div>
</nav>

        