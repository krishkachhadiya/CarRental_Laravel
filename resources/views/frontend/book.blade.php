<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Cental - Book Now</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap">

<!-- FontAwesome & Bootstrap Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries -->
<link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Bootstrap & Custom CSS -->
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>
<body>

<!-- Carousel Start -->
<div class="header-carousel mb-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset('frontend/img/carousel-2.jpg')}}" class="img-fluid w-100" alt="First slide"/>
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated">
                                <div class="bg-secondary rounded p-5">

                                    <h4 class="text-white mb-4">CONTINUE CAR RESERVATION</h4>

                                    <!-- Success message -->
                                    @if(session('success'))
                                        <p class="text-success">{{ session('success') }}</p>
                                    @endif

                                    <!-- Booking Form -->
                                    <form method="POST" action="/book-now">
                                        @csrf
                                        <div class="row g-3">

                                            <div class="col-12">
                                                <select class="form-select" name="car_type" required>
                                                    <option selected>Select Your Car type</option>
                                                    <option value="VW Golf VII">VW Golf VII</option>
                                                    <option value="Audi A1 S-Line">Audi A1 S-Line</option>
                                                    <option value="Toyota Camry">Toyota Camry</option>
                                                    <option value="BMW 320 ModernLine">BMW 320 ModernLine</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span>
                                                        <span class="ms-1">Pick Up</span>
                                                    </div>
                                                    <input type="text" name="pickup_location" class="form-control" placeholder="Enter a City or Airport" required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span>
                                                        <span class="ms-1">Drop off</span>
                                                    </div>
                                                    <input type="text" name="dropoff_location" class="form-control" placeholder="Enter a City or Airport" required>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex gap-2">
                                                <input type="date" name="pickup_date" class="form-control" required>
                                                <select class="form-select" name="pickup_time" required>
                                                    <option value="12:00AM">12:00AM</option>
                                                    <option value="1:00AM">1:00AM</option>
                                                    <option value="2:00AM">2:00AM</option>
                                                    <option value="3:00AM">3:00AM</option>
                                                </select>
                                            </div>

                                            <div class="col-12 d-flex gap-2">
                                                <input type="date" name="dropoff_date" class="form-control" required>
                                                <select class="form-select" name="dropoff_time" required>
                                                    <option value="12:00AM">12:00AM</option>
                                                    <option value="1:00AM">1:00AM</option>
                                                    <option value="2:00AM">2:00AM</option>
                                                    <option value="3:00AM">3:00AM</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-light w-100 py-2">Book Now</button>
                                            </div>

                                        </div>
                                    </form>
                                    <!-- Booking Form End -->

                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Get 15% off your rental! Choose Your Model</h1>
                                    <p>Treat yourself in India</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


</body>
</html>
