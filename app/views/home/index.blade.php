@extends('home.master')
@section('header')
<!-- Header -->
<header>
    <div class="container" id="mainjumbo">
        <div class="row">
            <div class="col-lg-12">
            <img src="{{asset('img/dbzencircle1.png')}}" class="img-responsive"/>
                <div class="intro-text">
                    <span class="name">Codhidharma</span>
                    <hr class="star-light">
                    <span class="skills">Programmer - Designer - Writer </span>
                </div>
            </div>
        </div>
    </div>
</header>
@stop
@section('content')

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Portfolio</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
        @if ($projects)
        @foreach($projects as $project)
            <div class="col-sm-4 portfolio-item">
                <a href={{ "#portfolioModal". $project->id }} class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ asset('img/'. $project->img_url) }}" class="img-responsive img-centered "/>
                </a>
            </div>
        @endforeach
        @endif
         </div>
    </div>
</section>
<!-- Portfolio Modals -->

<section>
        @if ($projects)
        @foreach($projects as $project)
        <div class="portfolio-modal modal fade" id={{"portfolioModal" . $project->id}} tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>{{$project->name}}</h2>
                                <hr class="star-primary">
                                <p>Designed and build my porfolio using modern frameworks such as Laravel, Twitter Bootstrap, and jQuery</p>
                                <ul class="list-inline item-details">
                                <li><strong>Client:</strong> {{$project->client}}
                                        <a href="#"></a> 
                                    </li>
                                    <li><strong>Date:</strong> {{$project->date}}
                                        <a href="#"></a>
                                    </li>
                                    <li><strong>Role:</strong> {{$project->role}}
                                        <a href="#"></a>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
</section>



<!-- About Section -->
<section class="success" id="about">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p class="about">Greetings internet denizens and welcome to my Zendo. My name is James Edward, and I run Codhidharma,
                 a loose network of writers, bards, programmers, and adventurers. How loose of a network? Well, 
                 I guess for now it's only me. But soon there will be other loyalists and henchmen.</p>
            </div>
            <div class="col-lg-4">
                <p id="about2">--Escape the Infinite Loop</p>
            </div>
        </div>
    
</section>

  <!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contact Me</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form name="sentMessage" id="contactForm" action="mailto:codhidharma@gmail.com" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-sm-4">
                        <h3>Location</h3>
                        <p>Austin, TX</p>
                    </div>
                    <div class="footer-col col-sm-4">
                        <div class="row" "col-sm-12">
                            <h3>Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="http://www.twitter.com/Codhidharma" class="btn-social btn-outline">
                                    <i class="fa fa-fw fa-dribbble">T</i></a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com/in/jameseholcomb/" class="btn-social btn-outline">
                                    <i class="fa fa-fw fa-fa-dribbble">L</i></a>
                                </li>
                                <li>
                                    <a href="http://github.com/Codhidharma" class="btn-social btn-outline">
                                    <i class="fa fa-fw fa-dribbble">G</i></a>
                                </li>
                                <li>
                                    <a href="http://stackoverflow.com/users/4036837/codhidharma" class="btn-social btn-outline">
                                    <i class="fa fa-fw fa-dribbble">S</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col col-sm-4">
                        <h3>Words</h3>
                        <p>Sign <a href="#">off</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; You Should Steal This
                    </div>
                </div>
            </div>
        </div>
    </footer>


@stop