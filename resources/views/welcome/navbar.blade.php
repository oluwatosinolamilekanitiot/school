<!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Men<span>tro</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())

              <li>{{Auth::user()->name}}</li>

             @endif

          <li><a href="/posts/create">Post Question</a></li>
          <li><a href="/courses">Courses</a></li>
          <li class="btn-trial"><a href="/login">Logout</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->