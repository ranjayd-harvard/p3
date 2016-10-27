@extends('layouts.master')


@section ('page-header', 'Developers Best Friend ')

@section('content')
        <div>

            <div class="content">

              <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="links">
                            <div class="content">
                                <!-- Returns one paragraph of lorem ipsum -->

                                <p>
                                      In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
                                </p>

                                    The package used for this generator is provided by
                                    <a target='_blank' href="http://www.danieleckermann.com/blog/even-simpler-lorem-ipsum-laravel">Daniel Eckermann
                                </a>
                                  <br/><br/>
                                <a class="btn btn-danger btn-bold-big"  href="/ipsum/create">Lorem Ipsum Generator</a>

                            </div>
                        </div>
                      </div>

                      <div class="col-md-6">

                          <div class="links">
                                <p>
                                Create random user data for your applications. Like Lorem Ipsum, but for people.
                              </p>
                          </div>
                          <br/><br/>
                          <a class="btn btn-primary btn-bold-big"  href="/users/create">Random Users Generator</a>
                      </div>

                </div>
              </div>
            </div>
        </div>

@endsection
