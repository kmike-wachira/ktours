<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>KTOURS ADMIN</title>
    <link rel="stylesheet" href="{{ asset('styling/css/bootstrap.min.css') }}" media="screen">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('styling/css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('styling/css/style.css') }}">
    <!-- Bootstrap CSS CDN -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> --}}
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styling/css/admin.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>KTOURS ADMIN</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Actions</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Add to database</a>
                    <ul class="list-unstyled nav nav-tabs collapse " id="homeSubmenu" role="tablist">
                        <li class="">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">Add event</a>
                        </li><br>
                        <li class="">
                          <a class="nav-link" id="venue-tab" data-toggle="tab" href="#venue" role="tab" aria-controls="venue"
                            aria-selected="false">Add Venues</a>
                        </li><br>
                        <li class="">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                            aria-selected="false">Add Activity</a>
                        </li><br>
                    </ul>
                </li>
                <li>
                    <a href="#">Check Testimonials</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bookings</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Approve</a>
                        </li>
                        <li>
                            <a href="#">Validate</a>
                        </li>
                        <li>
                            <a href="#">News letter</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    {{-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> --}}
                </li>
                <li>
                    {{-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a> --}}
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/home" target="_blank">Visit site</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">View Bookings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Backup Database</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Raw denim you
                  probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                  cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro
                  keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                  placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                  qui.</div>
                <div class="tab-pane fade" id="venue" role="tabpanel" aria-labelledby="venue-tab">
                     <div class="container">
                         <form action="" class="form">
                            <div class="file-upload-wrapper">
                                <input type="file" accept=".jpg,.png,.jpeg" id="input-file-now-custom-1" class="file-upload" data-default-file="https://mdbootstrap.com/img/Photos/Others/images/89.jpg" />
                            </div>                                                <!-- Material input -->
                        <div class="md-form">
                            <i class="fas fa-user prefix"></i>
                            <input type="text" id="inputIconEx2" class="form-control">
                            <label for="inputIconEx2">Venue Name</label>
                        </div>
                        <!--Textarea with icon prefix-->
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <textarea id="form10" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form10">Icon Prefix</label>
                        </div>
                     </div>
                    </form>

                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                  wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                  lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                  locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                  squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                  etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                  stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
              </div>
            <div class="line"></div>

        </div>
    </div>
    {{-- Scripts --}}
    <script type="text/javascript" src="{{ asset('styling/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('styling/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('styling/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('styling/js/mdb.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
    $(document).ready(
        function(){
            $('.file-upload').file_upload();
        });
    </script>
</body>

</html>