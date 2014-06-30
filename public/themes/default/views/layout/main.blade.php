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

        {{ HTML::style('bootplus/css/font-awesome.min.css') }}

        {{ HTML::style('css/dataTables.bootstrap.css') }}

        {{ HTML::style('css/bootstrap-timepicker.css') }}

        {{ HTML::style('css/bootstrap-modal.css') }}

        {{ HTML::style('css/sm-datepicker/bootstrap-datetimepicker.min.css') }}

        {{ HTML::style('css/flick/jquery-ui-1.9.2.custom.min.css') }}

        {{ HTML::style('css/pickacolor/pick-a-color-1.1.8.min.css') }}

        {{ HTML::style('css/daterangepicker-bs3.css') }}

        {{-- HTML::style('css/blueimp-gallery.min.css') --}}

        {{ HTML::style('css/bootstrap-select.css')}}

        {{ HTML::style('css/jquery.tagsinput.css') }}

        {{ HTML::style('css/jquery-fileupload/css/jquery.fileupload-ui.css') }}

        {{ HTML::style('css/app2.css') }}

        {{ HTML::style('css/form.css') }}

        {{ HTML::style('css/gridtable.css') }}

        {{ HTML::script('js/jquery-1.9.1.js')}}
        {{ HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}


        {{-- HTML::script('js/jquery.ui.addresspicker.js') --}}

        <script type="text/javascript">
            var base = '{{ URL::to('/') }}/';
        </script>

        <style type="text/css">
            .content-7 {
                padding-top: 15px;
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
                                @include('partials.topnav')
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="content-7 v-center">
              <div>
                <div class="container">
                    @yield('content')
                </div>
              </div>
            </section>



            <!-- footer-2 -->
            <footer class="footer-2 bg-midnight-blue">
                <div class="container">

                    <nav class="pull-left">
                        @include('partials.bottomnav')
                    </nav>
                    <div class="social-btns pull-right">
                        <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
                        <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                        <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
                    </div>
                    <div class="additional-links">
                        Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </footer>
        </div>



        <!-- Placed at the end of the document so the pages load faster -->
        {{--
        <script src="{{ URL::to('sf')}}/common-files/js/jquery-1.11.1.min.js"></script>
        --}}
        <script src="{{ URL::to('sf')}}/flat-ui/js/bootstrap.min.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/modernizr.custom.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/page-transitions.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/startup-kit.js"></script>

        {{ HTML::script('js/bootstrap-modalmanager.js') }}
        {{ HTML::script('js/bootstrap-modal.js') }}

        {{ HTML::script('js/jquery.removeWhitespace.min.js')}}
        {{ HTML::script('js/jquery.collagePlus.min.js')}}
        {{ HTML::script('js/jquery.collageCaption.js')}}
        {{ HTML::script('js/jquery-datatables/jquery.datatables.min.js')}}
        {{ HTML::script('js/jquery-datatables/datatables.bootstrap.js')}}

        {{ HTML::script('js/jquery.tagsinput.js') }}

        {{-- HTML::script('js/bootstrap-timepicker.js') --}}
        {{ HTML::script('js/sm-datepicker/bootstrap-datetimepicker.min.js') }}

        {{ HTML::script('js/moment.min.js') }}
        {{ HTML::script('js/daterangepicker.js') }}

        {{ HTML::script('js/app.js') }}

        {{ HTML::script('js/blueimp-gallery.min.js') }}
        {{ HTML::script('js/jquery.blueimp-gallery.min.js') }}

        {{ HTML::script('js/wysihtml5-0.3.0.min.js') }}

        {{ HTML::script('js/bootstrap-wysihtml5-0.0.2.min.js') }}

        {{ HTML::script('js/bootstrap-select/bootstrap-select.js') }}

        {{ HTML::script('js/jquery-fileupload/vendor/jquery.ui.widget.js') }}

        {{ HTML::script('js/js-load-image/load-image.min.js') }}

        {{ HTML::script('js/js-canvas-to-blob/canvas-to-blob.min.js') }}

        {{ HTML::script('js/jquery-fileupload/jquery.iframe-transport.js') }}

        {{ HTML::script('js/jquery-fileupload/jquery.fileupload.js') }}

        {{ HTML::script('js/tinycolor-0.9.15.min.js')}}
        {{ HTML::script('js/pickacolor/pick-a-color-1.1.8.min.js') }}

        {{ HTML::script('js/jquery-fileupload/jquery.fileupload-process.js') }}
        {{ HTML::script('js/jquery-fileupload/jquery.fileupload-image.js') }}
        {{ HTML::script('js/jquery-fileupload/jquery.fileupload-audio.js') }}
        {{ HTML::script('js/jquery-fileupload/jquery.fileupload-video.js') }}
        {{ HTML::script('js/jquery-fileupload/jquery.fileupload-validate.js') }}

    </body>
</html>