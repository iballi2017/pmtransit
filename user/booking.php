<?php
include_once '../includes/header.php'; ?>


<main class="booking-page mb-5">


    <section class="title-component-wrapper py-5">
        <div class="container">
            <h3 class="page-title">Booking</h3>
        </div>
    </section>

    <!-- booking form -->

    <div class="container hero-booking-form my-5">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <ul class="nav row nav-pills col-block hero-main-nav-pills no-gutters" id="pills-tab" role="tablist">
                    <li class="nav-item col-12 col-md-6">
                        <a class="nav-link active text-center hero-tab-nav-links curve-left-top btn-block"
                            id="pills-seat-booking-tab" data-toggle="pill" href="#pills-seat-booking" role="tab"
                            aria-controls="pills-seat-booking" aria-selected="true"
                            style="border-radius: 10px 0px 0px 0px">BOOK A SEAT</a>
                    </li>
                    <li class="nav-item col-12 col-md-6">
                        <a class="nav-link text-center hero-tab-nav-links curve-right-top" id="pills-bus-hire-tab"
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
                                            <a class="nav-link book-a-seat-tab-nav-links ml-1" id="pills-roundAbout-tab"
                                                data-toggle="pill" href="#pills-roundAbout" role="tab"
                                                aria-controls="pills-roundAbout" aria-selected="false">Round trip</a>
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
                                                                <select id="numberOfPassengers" class="form-control">
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
                                                                <select id="numberOfPassengers" class="form-control">
                                                                    <option selected>Choose...</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-md-2">
                                                        <button type="submit" class="btn custom-form-btn btn-block">BOOK
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

</main>

<?php include_once '../includes/footer-script.php';

?>