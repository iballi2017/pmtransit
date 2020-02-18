<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PM Transit</title>
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="./css/animate.css">
    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg main-nav-bar sticky-top">

        <div class="container">
            <a class="navbar-brand" href="./">
                <h2>Brand Logo</h2>
            </a>
            <button class="navbar-toggler mobile-menu-icon" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-ellipsis-v fa-1x"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item main-animate-nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item main-animate-nav-item">
                        <a class="nav-link custom-nav-link" href="./user/about-us.php">About Us</a>
                    </li>
                    <li class="nav-item main-animate-nav-item">
                        <a class="nav-link custom-nav-link" href="https://postmailexpress.com/users/cargo-service"
                            target="_blank">Cargo</a>
                    </li>
                    <li class="nav-item main-animate-nav-item">
                        <a class="nav-link custom-nav-link" href="./user/booking.php">Hire a Bus</a>
                    </li>
                    <li class="nav-item main-animate-nav-item">
                        <a class="nav-link custom-nav-link" href="./user/contact-us.php">Contact Us</a>
                    </li>
                    <li class="nav-item main-animate-nav-item">
                        <a class="nav-link custom-nav-link" href="./user/user-account-profile.php">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-custom-green-outline nav-link custom-nav-btn px-3 mx-2"
                            href="./user/login.php">Sign
                            In</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-custom-green-outline nav-link custom-nav-btn px-3 mx-2"
                            href="./user/register.php">Sign
                            Up</a>
                    </li>
                    <li class="nav-item">
                        <buton class="btn btn-sm btn-custom-green-outline nav-link custom-nav-btn px-3 mx-2">Logout
                        </buton>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        <section class="hero">
            <div class="container">
                <div class="text-content-top">
                    <div class="hero-title">
                        <h5 class="animated fadeInDown delay-1s">We are always there at your service</h5>
                        <h3 class="animated fadeInUp delay-1s">FAST and RELIABLE way to find QUALITY anywhere you need
                            it</h3>
                    </div>
                </div>
            </div>


        </section>
        <div class="container index-booking-form hero-booking-form">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <ul class="nav row nav-pills col-block hero-main-nav-pills no-gutters" id="pills-tab"
                        role="tablist">
                        <li class="nav-item col-12 col-md-6">
                            <a class="nav-link active text-center hero-tab-nav-links btn-block"
                                id="pills-seat-booking-tab" data-toggle="pill" href="#pills-seat-booking" role="tab"
                                aria-controls="pills-seat-booking" aria-selected="true">BOOK A SEAT</a>
                        </li>
                        <li class="nav-item col-12 col-md-6">
                            <a class="nav-link text-center hero-tab-nav-links" id="pills-bus-hire-tab"
                                data-toggle="pill" href="#pills-bus-hire" role="tab" aria-controls="pills-bus-hire"
                                aria-selected="false">HIRE A BUS</a>
                        </li>
                    </ul>
                    <div class="tab-content hero-tab-main-content-wrapper p-3 mb-5 shadow" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-seat-booking" role="tabpanel"
                            aria-labelledby="pills-seat-booking-tab">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active book-a-seat-tab-nav-links mr-1"
                                                    id="pills-one-way-tab" data-toggle="pill" href="#pills-one-way"
                                                    role="tab" aria-controls="pills-one-way" aria-selected="true">One
                                                    way</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link book-a-seat-tab-nav-links ml-1"
                                                    id="pills-roundAbout-tab" data-toggle="pill"
                                                    href="#pills-roundAbout" role="tab" aria-controls="pills-roundAbout"
                                                    aria-selected="false">Round trip</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content text-left" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-one-way" role="tabpanel"
                                                aria-labelledby="pills-one-way-tab">

                                                <!-- one way form -->
                                                <form>
                                                    <div class="row">

                                                        <div class="form-group col-12 col-md-6">
                                                            <select id="travellingFrom" class="form-control">
                                                                <option selected>Travelling From</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-12 col-md-6">
                                                            <select id="travellingTo" class="form-control">
                                                                <option selected>Travelling To</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="form-group col-12 col-md-2">
                                                            <input type="text" class="form-control" id="departureDate"
                                                                placeholder="Departure Date">
                                                        </div>

                                                        <div class="form-group col-12 col-md-4">
                                                            <div class="row">
                                                                <label for="numberOfPassengers"
                                                                    class="col-md-7 col-form-label">No of
                                                                    passengers</label>
                                                                <div class="col-md-5">
                                                                    <select id="numberOfPassengers"
                                                                        class="form-control">
                                                                        <option selected>Choose...</option>
                                                                        <option>...</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-md-6">
                                                            <button type="submit" class="btn custom-form-btn">BOOK
                                                                NOW</button></div>

                                                    </div>
                                                </form>

                                            </div>
                                            <div class="tab-pane fade" id="pills-roundAbout" role="tabpanel"
                                                aria-labelledby="pills-roundAbout-tab">

                                                <!-- round trip form -->
                                                <form>
                                                    <div class="row">

                                                        <div class="form-group col-12 col-md-6">
                                                            <select id="travellingFrom" class="form-control">
                                                                <option selected>Travelling From</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-12 col-md-6">
                                                            <select id="travellingTo" class="form-control">
                                                                <option selected>Travelling To</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="form-group col-6 col-md-3">
                                                            <input type="text" class="form-control" id="departureDate"
                                                                placeholder="Departure Date">
                                                        </div>

                                                        <div class="form-group col-6 col-md-3">
                                                            <input type="text" class="form-control" id="returnDate"
                                                                placeholder="Return Date">
                                                        </div>

                                                        <div class="form-group col-12 col-md-4">
                                                            <div class="row">
                                                                <label for="numberOfPassengers"
                                                                    class="col-md-7 col-form-label">No of
                                                                    passengers</label>
                                                                <div class="col-md-5">
                                                                    <select id="numberOfPassengers"
                                                                        class="form-control">
                                                                        <option selected>Choose...</option>
                                                                        <option>...</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-md-2">
                                                            <button type="submit"
                                                                class="btn custom-form-btn btn-block">BOOK
                                                                NOW</button></div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-left" id="pills-bus-hire" role="tabpanel"
                            aria-labelledby="pills-bus-hire-tab">

                            <!-- hire-a-bus form -->
                            <form>
                                <div class="row">

                                    <div class="form-group col-12 col-md-6">
                                        <select id="travellingFrom" class="form-control">
                                            <option selected>Travelling From</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-md-6">
                                        <select id="travellingTo" class="form-control">
                                            <option selected>Travelling To</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-6 col-md-3">
                                        <input type="text" class="form-control" id="departureDate"
                                            placeholder="Departure Date">
                                    </div>

                                    <div class="col-6 col-md-2 offset-md-1">
                                        <button type="submit" class="btn custom-form-btn btn-block">BOOK
                                            NOW</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="why-choose-us my-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center section-title mb-5">Why Choose us</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <ul class="why-choose-us-list">
                            <li><img src="./images/punctuality.png" class="img img-fluid" alt="">
                                <p><strong>Puntuality</strong></p>
                            </li>
                            <li><img src="./images/air-condition.png" class="img img-fluid" alt="">
                                <p>
                                    <strong>Air Conditioned
                                        Buses</strong>
                                </p>
                            </li>
                            <li><img src="./images/comfort.png" class="img img-fluid" alt="">
                                <p><strong>Refreshment</strong></p>
                            </li>
                            <li><img src="./images/refreshment.png" class="img img-fluid" alt="">
                                <p><strong>Comfortable seats
                                        & leg space</strong></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works">
            <div class="container-fluid" style="height: 100%;">
                <div class="row" style="height: 100%;">
                    <div class="col-12 col-md-6 offset-md-6 content-area pl-5" style="height: 100%;">
                        <div class="how-it-works-inner">
                            <div>
                                <h2 class="my-5 section-title">How it works</h2>

                                <ul class="">
                                    <li>Select location & Destination and dates</li>
                                    <li>Provide required details</li>
                                    <li>Book & make payment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="problem-then-contact-us">
            <div class="container py-4 text-white problem-then-contact-us-inner">
                <h4>Having Any Problem Booking? Let Us Know ! ! !</h4>
                <a href="#" class="btn custom-form-btn btn-lg">CONTACT US</a>
            </div>
        </section>

    </main>


    <footer class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <ul>
                        <li>
                            <a class="navbar-brand" href="#">
                                <h2>Brand</h2>
                            </a>
                        </li>
                        <li>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio blanditiis soluta
                                eligendi iure sunt pariatur accusamus veniam, unde non est?
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <ul>
                        <li>
                            <h6 class="footer-column-title">QUICK LINKS</h6>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Home</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">About us</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">FAQ</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Privacy policy</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Terms and condition</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <ul>
                        <li>
                            <h6 class="footer-column-title">CONTACT</h6>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Address 1</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Address 2</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Phn number</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Email</a>
                        </li>
                        <li>
                            <a href="#" class="footer-links">Email</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                    <ul>
                        <li class="footer-column-title">SOCIAL MEDIA</li>
                        <li>
                            <ul class="social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f social-icon"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram social-icon"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter social-icon"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr style="border-top: 1px solid #fff">
        <div class="container p-0">Copyright &copy; 2020</div>

    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./js/app.js"></script>
</body>

</html>