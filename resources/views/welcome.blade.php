<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/p3.css">

    </head>
    <body>
        <div>

            <div class="content">
                <div class="title m-b-md">
                    Developer's Best Friend
                </div>

              <div class="container">
                <div class="row">
                    <div class="col-md-6">
                      <a class="btn btn-danger btn-bold-big"  href="/ipsum/create">Lorem Ipsum Generator</a>
                        <br/><br/>
                        <div class="links">
                            <div class="content">
                                <!-- Returns one paragraph of lorem ipsum -->

                                <p>
                                      In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
                                </p>


                                                                The package used for this generator is provided by
                                                                <a target='_blank' href="http://www.danieleckermann.com/blog/even-simpler-lorem-ipsum-laravel">Daniel Eckermann
                                </a>
                            </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <a class="btn btn-primary btn-bold-big"  href="/users/create">Random Users Generator</a>
                          <br/><br/>
                          <div class="links">
                                <p>
                                Create random user data for your applications. Like Lorem Ipsum, but for people.
                              </p>
                          </div>

                      </div>

                </div>
              </div>
            </div>
        </div>

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
