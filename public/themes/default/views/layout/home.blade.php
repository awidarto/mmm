<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ Config::get('site.name')}}</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="{{ URL::to('sf')}}/flat-ui/images/favicon.ico">
        <link rel="stylesheet" href="{{ URL::to('sf')}}/flat-ui/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" href="{{ URL::to('sf')}}/flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/common-files/css/animations.css">

        <!-- If you don't use any of these blocks just remove unnecessary CSS files -->
        <!-- content -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-content/css/style.css">
        <!-- footer -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-footer/css/style.css">
        <!-- header -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-header/css/style.css">
        <!-- price -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-price/css/style.css">

        {{ HTML::style('css/typography.css')}}
        {{ HTML::style('css/home.css')}}
        {{ HTML::style('css/buttons.css')}}

        <style type="text/css">
            .half-field{
                display: table-cell;
                width: 50%;
            }

            .left{
                padding-right: 5px;
            }
        </style>

    </head>

    <body>

        <div class="page-wrapper" id="about">
            <!-- header-11 -->
            <header class="header-11">
                <div class="container">
                    <div class="row">
                        <div class="navbar col-sm-12" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle"></button>
                                <a class="brand" href="#"><img src="{{ URL::to('/')}}/img/logo@2x.png" width="50" height="50" alt=""> {{ Config::get('site.name')}}</a>
                            </div>
                            <div class="collapse navbar-collapse pull-right">
                                <ul class="nav pull-left">
                                    <li class="active"><a href="#">HOME</a></li>
                                    <li><a href="#apps">APPS</a></li>
                                    <li><a href="#">SIGN UP</a></li>
                                    <li><a href="#">BLOG</a></li>
                                    <li><a href="#">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="header-11-sub" style="background-color:#96281B">
                <div class="background" style="background-image:url({{ URL::to('sf')}}/common-files/img/getah2.jpg)">
                    &nbsp;
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            {{--

                            <h3>Because You are THE BOZZ.</h3>
                            <p>
                                Your business is getting bigger by minutes, meaning, small tasks become more and more tedious and time consuming,and organizing is a daunting task.
                            </p>
                            <p>
                                Let's make it lean, let's make it mean. And do it all just like a BOZZ.
                            </p>
                            --}}
                        </div>
                        <div class="col-sm-4 ">
                            <p>Already have an account ? Please sign in</p>
                            <div class="signup-form">
                                @if (Session::get('loginError'))
                                    <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
                                         <button type="button" class="close" data-dismiss="alert"></button>
                                @endif

                                {{ Form::open(array('url' => 'login')) }}
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="text" placeholder="Your E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-info">Sign In</button>
                                    {{ Form::close() }}
                                </form>
                            </div>

                            <p>If you haven't got an account, then let's get started</p>
                            <div class="signup-form">
                                @if (Session::get('signupSuccess'))
                                    <div class="alert alert-info">{{ Session::get('signupSuccess') }}</div>
                                         <button type="button" class="close" data-dismiss="alert"></button>
                                @endif
                                @if (Session::get('signupError'))
                                    <div class="alert alert-danger">{{ Session::get('signupError') }}</div>
                                         <button type="button" class="close" data-dismiss="alert"></button>
                                @endif

                                {{ Form::open(array('url' => 'signup')) }}
                                    <div class="form-group">
                                        <div class="half-field left" >
                                            <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="half-field" >
                                            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <div class="half-field left" >
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="half-field" >
                                            <input type="password" name="repass" class="form-control" placeholder="Confirmation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="half-field left" >
                                            <input type="checkbox" name="gender" value="male" checked="checked" > Male
                                        </div>
                                        <div class="half-field" >
                                            <input type="checkbox" name="gender" value="female" > Female
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-info">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="additional-links">
                                By signing up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--
            <!-- price-1 -->
            <section class="price-1" id="packages">
                <div class="container">
                    <h3>Take a look to our Packages</h3>
                    <p class="lead">
                        Pick one that suit your business, if you need more just contact us, we'll be happy to assist and help you get the most of our offerings.
                    </p>
                    <div class="row plans">
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">General Retail</div>
                                <div class="price">19$/month</div>
                                <div class="description">
                                    <ul>
                                        <li>Point Of Sales</li>
                                        <li>Product Catalog</li>
                                        <li>Inventory</li>
                                        <li>Sales Transaction</li>
                                        <li>Customer Database</li>
                                        <li>Invoicing & Expense Tracking</li>
                                        <li>Reporting
                                            <ul>
                                                <li>Transaction Report</li>
                                                <li>Sales Report</li>
                                                <li>Inventory Status Report</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary" href="#">Choose Plan <span class="badge">Beta</span></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Service Provider</div>
                                <div class="price">19$/month</div>
                                <div class="description">
                                    <ul>
                                        <li>Service Catalog</li>
                                        <li>Task & Calendar</li>
                                        <li>Customer Database</li>
                                        <li>Invoicing & Expense Tracking</li>
                                        <li>Reporting
                                            <ul>
                                                <li>Transaction Report</li>
                                                <li>Service Time Report</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary" href="#">Choose Plan <span class="badge">Beta</span></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Building Administrator</div>
                                <div class="price">Call for pricing</div>
                                <div class="description">
                                    <ul>
                                        <li>Tenant Fascility
                                            <ul>
                                                <li>Tenant Portal</li>
                                                <li>Event Calendar</li>
                                            </ul>
                                        </li>
                                        <li>Maintenance
                                            <ul>
                                                <li>Supply Inventory</li>
                                                <li>Task & Calendar</li>
                                                <li>Maintenance Logging</li>
                                            </ul>
                                        </li>
                                        <li>Invoicing & Expense Tracking</li>
                                        <li>Reporting
                                            <ul>
                                                <li>Service Time Report</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary" href="#">Choose Plan <span class="badge">Beta</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row plans next-row">
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Customer Care & Back Office</div>
                                <div class="price">19$/month</div>
                                <div class="description">
                                    <ul>
                                        <li>Customer Care
                                            <ul>
                                                <li>Advanced Customer Database</li>
                                                <li>Newsletter & Brochure Maker</li>
                                            </ul>
                                        </li>
                                        <li>Back Office
                                            <ul>
                                                <li>Invoicing & Expense Tracking</li>
                                                <li>Document Management</li>
                                                <li>Human Resource Manager</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary" href="#">Choose Plan <span class="badge">Beta</span></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Culinary & Restaurant</div>
                                <div class="price">19$/month</div>
                                <div class="description">
                                    <ul>
                                        <li>Point Of Sales</li>
                                        <li>Delivery Order Form</li>
                                        <li>Menu Manager</li>
                                        <li>Inventory</li>
                                        <li>Sales Transaction</li>
                                        <li>Customer Database</li>
                                        <li>Invoicing & Expense Tracking</li>
                                        <li>Reporting
                                            <ul>
                                                <li>Transaction Report</li>
                                                <li>Sales Report</li>
                                                <li>Inventory Status Report</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-primary disabled" href="#">Coming Soon <span class="badge">Beta</span></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Delivery Manager</div>
                                <div class="price">19$/month</div>
                                <div class="description">
                                    <ul>
                                        <li>Administration
                                            <ul>
                                                <li>Order Listing</li>
                                                <li>Order Assignment</li>
                                            </ul>
                                        </li>
                                        <li>Android Application
                                            <ul>
                                                <li>Delivery Order List</li>
                                                <li>GPS Assisted Address Locator</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn disabled" href="#">Your Current Plan</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- content-13  -->
            <section class="content-13 subscribe-form bg-turquoise">
                <div class="container">
                    <div class="row">
                        <form>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Enter your e-mail" spellcheck="false">
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-large btn-primary" type="submit">
                                    Subscribe now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            --}}

            <!-- footer-2 -->
            <footer class="footer-2 bg-midnight-blue" >
                <div class="container">
                    <nav class="pull-left">
                        @include('partials.bottompublicnav')
                    </nav>
                    {{--

                    <div class="social-btns pull-right">
                        <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
                        <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                        <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
                    </div>
                    --}}
                    <div class="additional-links">
                        Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </footer>
        </div>



        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ URL::to('sf')}}/common-files/js/jquery-1.11.1.min.js"></script>
        <script src="{{ URL::to('sf')}}/flat-ui/js/bootstrap.min.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/modernizr.custom.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/page-transitions.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/startup-kit.js"></script>
    </body>
</html>