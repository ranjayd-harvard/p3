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

                        <div class="links">
                            <a href="/ipsum/create">Lorem Ipsum Generator</a>
                            <div class="content">
                                <!-- Returns one paragraph of lorem ipsum -->

                                The package used for this generator is http://www.danieleckermann.com/blog/even-simpler-lorem-ipsum-laravel
                                {!! lorem(1) !!}
                            </div>
                        </div>
                      </div>

                      <div class="col-md-6">

                          <div class="links">
                              <a href="/users/create">Random Users Generator</a>
                          </div>

                      </div>

                </div>
              </div>
            </div>
        </div>
    </body>
</html>
