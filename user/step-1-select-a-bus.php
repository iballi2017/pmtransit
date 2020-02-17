<!-- header -->
<?php include_once '../includes/header.php'; ?>


<main class="step-1-select-a-bus-page mb-5">

    <section class="bg-primary">
        <div class="container text-white">
            <h2>DESTINATIONS TO AND FRO</h2>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="#">Select Date</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Select Seat</a>
                </li>
            </ul>
        </div>

        <div class="bg-warning py-2">
            <div class="container">
                <p class="m-0 text-white">N.B: You can only fill in 2 seats for force personnel</p>
            </div>
        </div>

    </section>




    <section>
        <div class="container">
            <form class="bg-white p-5">
                <!-- <div class="table-responsive"> -->
                <table class="table bg-light">
                    <!-- <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead> -->
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
                                            <p>Depareting<br />06:30am</p>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <p>Seat(s)<br />9</p>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <p>Price<br />#19000</p>
                                        </div>
                                        <div class="col-6 col-md-2">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label btn btn-sm form-btn"
                                                    for="customRadio1">Select
                                                    Bus</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="container"> -->
                                    <div class="row">
                                        <div class="col col-md-8 offset-2 bg-primary p-3">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">

                                                        <ul class='seat-numbers bg-light p-3' style="">
                                                            <li class="occupied">
                                                                1
                                                            </li>
                                                            <li>
                                                                2
                                                            </li>
                                                            <li class="selected">
                                                                3
                                                            </li>
                                                            <li>
                                                                4
                                                            </li>
                                                            <li class="occupied">
                                                                5
                                                            </li>
                                                            <li>
                                                                6
                                                            </li>
                                                            <li class="selected">
                                                                7
                                                            </li>
                                                            <li class="occupied">
                                                                8
                                                            </li>
                                                            <li>
                                                                9
                                                            </li>
                                                            <li class="occupied">
                                                                10
                                                            </li>
                                                            <li>
                                                                11
                                                            </li>
                                                            <li>
                                                                12
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <ul class='seat-label-info bg-light p-3'
                                                            style="list-style: none; padding: 0">
                                                            <li>
                                                                <span class="selected"></span> selected seat
                                                            </li>
                                                            <li>
                                                                <span></span>Available seat
                                                            </li>
                                                            <li>
                                                                <span class="occupied"></span> occupied seat
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn form-btn">Continue</button>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </td>
                            </div>
                            <!-- <th scope="row">
                                <img src="../images/vehicle-1.png" class="img img-fluid" alt="">
                            </th>
                            <td>
                                <p>Name of vehicle<br />A/C</p>
                            </td>
                            <td>
                                <p>Depareting<br />06:30am</p>
                            </td>
                            <td>
                                <p>Seat(s)<br />9</p>
                            </td>
                            <td>
                                <p>Price<br />#19000</p>
                            </td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label btn form-btn" for="customRadio1">Select
                                        Bus</label>
                                </div>
                            </td> -->
                        </tr>
                        <!-- <tr>
                            <th scope="row">
                                <img src="../images/vehicle-2.png" class="img img-fluid" alt="">
                            </th>
                            <td>
                                <p>Name of vehicle<br />A/C</p>
                            </td>
                            <td>
                                <p>Depareting<br />06:30am</p>
                            </td>
                            <td>
                                <p>Seat(s)<br />9</p>
                            </td>
                            <td>
                                <p>Price<br />#19000</p>
                            </td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label btn form-btn" for="customRadio2">Select
                                        Bus</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="../images/vehicle-3.png" class="img img-fluid" alt=""></th>
                            </th>
                            <td>
                                <p>Name of vehicle<br />A/C</p>
                            </td>
                            <td>
                                <p>Depareting<br />06:30am</p>
                            </td>
                            <td>
                                <p>Seat(s)<br />9</p>
                            </td>
                            <td>
                                <p>Price<br />#19000</p>
                            </td>
                            <td>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label btn form-btn" for="customRadio3">Select
                                        Bus</label>
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <!-- </div> -->
            </form>
        </div>
    </section>

</main>

<!-- footer -->

<?php include_once '../includes/footer-script.php';

?>