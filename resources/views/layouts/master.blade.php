<!DOCTYPE html>
<html lang="en">


        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>
              @yield('title','P3 Project')
            </title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


            <!-- Bootstrap -->
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="/css/bootstrap.min.css">

            <!-- Optional theme -->
            <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="/css/grid.css">
            <link rel="stylesheet" href="/css/p3.css">

        </head>
    <body>


      <nav>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div class="titleMain m-b-md">
                  <a href='/'>Project p3</a>
              </div>
              <a href='https://github.com/ranjayd-harvard/p3' target='_blank'><i class='fa fa-github'></i> View on Github</a> &nbsp;&nbsp;
              <a href='http://p3.ranjayd.me/' target='_blank'><i class='fa fa-link'></i> View Live</a>

            </div>
          </div>
        </div>

        @if ( !Request::is('/'))
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="projectDiv">
                <a class="btn btn-info btn-bold-big" href='/'>Project Home</a>
            </div>
          </div>
            <div class="col-md-4">
              <div class="projectDiv">
                <a class="btn btn-info btn-bold-big" href='/ipsum/create'>Lorem ipsum Generator</a>
            </div>
          </div>
            <div class="col-md-4">
              <div class="projectDiv">
                <a class="btn btn-info btn-bold-big" href='/users/create'>Random User Generator</a>
            </div></div>
          </div>
        </div>
        @endif


      </nav>




              <div>
                <div class="content">
                    <div class="title m-b-md">
                        @yield('page-header')
                    </div>
                </div>
              </div>

      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section><h4><h4>
                    {{-- Main page content will be yielded here --}}
                    @yield('content')
                </section>
              </div>
        </div>
      </div>



        {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
        @yield('body')


        <footer>

          <div class="container">
            <div class="row">
                <div class="col-md-12">
            &copy; {{ date('Y') }} &nbsp;&nbsp;
            <a href='https://github.com/ranjayd-harvard/p3' target='_blank'><i class='fa fa-github'></i> View on Github</a> &nbsp;&nbsp;
            <a href='http://p3.ranjayd.me/' target='_blank'><i class='fa fa-link'></i> View Live</a>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>
