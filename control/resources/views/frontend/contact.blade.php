@extends('layouts.frontEndMaster')
@section('title')
    Contact
@endsection

@section('stylesheets')

@endsection

@section('scripts')
    <!-- GMaps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/widgets/maps/gmaps/gmaps.js')}}"></script>
    <script type="text/javascript" src="{{asset('/frontend/assets/widgets/parsley/parsley.js')}}"></script>
    <script>

        $(document).ready(function() {

            map2 = new GMaps({
                div: '#map-marker',
                lat: -12.043333,
                lng: -77.028333
            });
            map2.addMarker({
                lat: -12.043333,
                lng: -77.03,
                title: 'Lima',
                details: {
                    database_id: 42,
                    author: 'HPNeo'
                },
                click: function(e) {
                    if (console.log)
                        console.log(e);
                    alert('You clicked in this marker');
                }
            });
            map2.addMarker({
                lat: -12.042,
                lng: -77.028333,
                title: 'Marker with InfoWindow',
                infoWindow: {
                    content: '<p>HTML Content</p>'
                }
            });

        });

    </script>
@endsection

@section('main_container')
    <div class="hero-box hero-box-smaller bg-gradient-5 font-inverse">
        <div class="container">
            <h1 class="pad0A hero-heading font-size-28 wow fadeInDown" data-wow-duration="0.6s">Contact us</h1>
        </div>
        <div class="hero-overlay bg-black"></div>
    </div>
    <div id="map-marker" style="height: 350px;"></div>
    <div class="mrg25T pad25T pad25B">
        <div class="container mrg25T mrg25B row">
            <div class="col-md-8">
                <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate>
                    <div class="content-box">
                        <h3 class="content-box-header bg-default">
                            Send us an email
                        </h3>
                        <div class="content-box-wrapper">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Name:</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Required Field" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email:</label>
                                    <div class="col-sm-6">
                                        <input type="text" data-parsley-type="email" placeholder="Email address" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Website:</label>
                                    <div class="col-sm-6">
                                        <input type="text" data-parsley-type="url" placeholder="URL address" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Message:</label>
                                    <div class="col-sm-6">
                                        <textarea id="" name="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label"></label>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required name="terms">
                                                Accept Terms &amp; Conditions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-pane">
                            <button class="btn btn-info">Send</button>
                            <button class="btn btn-link font-gray-dark">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
                <div class="row mrg15T">
                    <div class="col-md-4">
                        <a href="#" title="Follow us on Facebook" class="btn btn-block tooltip-button bg-facebook">
                            <i class="glyph-icon icon-facebook"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" title="Follow us on Twitter" class="btn btn-block tooltip-button bg-twitter">
                            <i class="glyph-icon icon-twitter"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" title="Follow us on Google+" class="btn btn-block tooltip-button bg-google">
                            <i class="glyph-icon icon-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="divider mrg25T mrg25B"></div>
                <h3>Get in touch</h3>
                <ul class="contact-list mrg15T mrg25B reset-ul">
                    <li>
                        <i class="glyph-icon icon-home"></i>
                        5804 Quaking Embers Trail, Tiger, Missouri
                    </li>
                    <li>
                        <i class="glyph-icon icon-phone"></i>
                        (636) 517-1243
                    </li>
                    <li>
                        <i class="glyph-icon icon-envelope-o"></i>
                        <a href="#" title="">homepage@example.com</a>
                    </li>
                </ul>
                <div class="divider mrg25T mrg25B"></div>
                <h3 class="mrg15B">About us</h3>
                <p class="font-gray-dark">For science, music, sport. The languages only differ in their grammar, their pronunciation and their most common words.</p>
            </div>
        </div>
    </div>

@endsection