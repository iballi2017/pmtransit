<!-- header -->
<?php include_once '../includes/header.php'; ?>


<main class="step-2-fill-information-page mb-5">

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
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="">

                        <div class="accordion" id="accordionExample">

                            <div class="card my-2">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0"
                                        style="display: flex; justify-content: space-between; align-items: center">
                                        <span>Passenger #1</span>
                                        <button
                                            class="btn btn-link passenger-accordion-btn passenger-accordion-minus-btn"
                                            type="button" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <small>Please enter name as they appear on identification document</small>
                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <select class="custom-select" id="validationDefault04" required>
                                                    <option selected disabled value="">Adult</option>
                                                    <option>Children</option>
                                                    <option>Elderly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault03">Full name</label>
                                                <input type="text" class="form-control" id="validationDefault03"
                                                    required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault04">Gender</label>
                                                <select class="custom-select" id="validationDefault04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card my-2">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0"
                                        style="display: flex; justify-content: space-between; align-items: center">
                                        <span>Passenger #2</span>
                                        <button
                                            class="btn btn-link collapsed passenger-accordion-btn passenger-accordion-plus-btn"
                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <small>Please ensure you come to the terminal on planned day of travel with a
                                            photocopy of your Child(ren) identification to enjoy this discount.</small>
                                        <div class="form-row">
                                            <div class="col-12 mb-3">
                                                <select class="custom-select" id="validationDefault04" required>
                                                    <option selected disabled value="">Adult</option>
                                                    <option>Children</option>
                                                    <option>Force Personnel</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault03">Full name</label>
                                                <input type="text" class="form-control" id="validationDefault03"
                                                    required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault04">Gender</label>
                                                <select class="custom-select" id="validationDefault04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-button-container"
                            style="display: flex; justify-content: space-between; align-items: center">
                            <button class="btn px-4" type="button" onclick="goBack()">Back</button>
                            <button class="btn" type="submit">Continue</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <div class="bg-white mt-2 p-3">
                        <h4>Trip Summary</h4>
                        <p class="enroute">Lagos to Abuja</p>
                        <p class="date">1st of Feburary 2020</p>
                        <p class="vehicle"><span>SEIENA</span><span class="ml-5">Seat(s): (3,4,5,6)</span></p>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="3">1X Adult(s), 2x Child(ren)</th>
                                    <td>#20000</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">Adult discount</th>
                                    <td>#000</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">Child(ren) discount</th>
                                    <td>#000</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">Total To Pay</th>
                                    <td>#20000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- footer -->

<?php include_once '../includes/footer-script.php';

?>