<!-- header -->
<?php include_once '../includes/header.php'; ?>


<main class="step-1-select-a-bus-page mb-5">

    <section class="select-bus-page-header">
        <div class="container text-white">
            <h2>DESTINATIONS TO AND FRO</h2>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <span>Selected Date: 20/02/2020</span>
                    </div>
                    <div class="col-12 col-md-4">
                        <span>Number of Seats: 3</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="select-bus-condition-wrapper py-2">
            <div class="container">
                <p class="m-0 text-white">N.B: You can only fill in 2 seats for force personnel</p>
            </div>
        </div>

    </section>




    <section>
        <div class="container">

            <table class="table bg-light">
                <tbody>
                    <tr>
                        <div class="container">
                            <td>
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <img src="../images/vehicle-1.png" class="img img-fluid" alt=""></div>
                                    <div class="col-12 col-md-2">
                                        <p>Name of vehicle<br />A/C</p>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <p>Departing<br />06:30am</p>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <p>Seat(s)<br />9</p>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <p>Price<br />#19000</p>
                                    </div>
                                    <div class="col-6 col-md-2">
                                        <button class="btn btn-sm form-btn" type="button" data-toggle="collapse"
                                            data-target="#collapseExample" aria-expanded="false"
                                            aria-controls="collapseExample">
                                            Select
                                            Bus
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </div>
                    </tr>
                </tbody>
            </table>

            <div class="collapse mb-5" id="collapseExample">
                <div class="card card-body">
                    <form action="" class="seat-arrangement">
                        <!-- <img src="../images/seat.svg" class="img img-fluid" style="background-color: red" alt=""> -->
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-1-checkbox">
                            <label class="custom-control-label" for="seat-1-checkbox">Seat 1</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-2-checkbox">
                            <label class="custom-control-label" for="seat-2-checkbox">Seat 2</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-3-checkbox">
                            <label class="custom-control-label" for="seat-3-checkbox">Seat 3</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-4-checkbox">
                            <label class="custom-control-label" for="seat-4-checkbox">Seat 4</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-5-checkbox">
                            <label class="custom-control-label" for="seat-5-checkbox">Seat 5</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-6-checkbox">
                            <label class="custom-control-label" for="seat-6-checkbox">Seat 6</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-7-checkbox">
                            <label class="custom-control-label" for="seat-7-checkbox">Seat 7</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-8-checkbox">
                            <label class="custom-control-label" for="seat-8-checkbox">Seat 8</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seat-9-checkbox">
                            <label class="custom-control-label" for="seat-9-checkbox">Seat 9</label>
                        </div>
                        <button type="submit" class="btn btn-sm form-btn px-3">Continue</button>

                    </form>
                    <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. -->
                </div>
            </div>

        </div>
    </section>

</main>

<!-- footer -->

<?php include_once '../includes/footer-script.php';

?>