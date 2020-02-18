<!-- header -->
<?php include_once '../includes/header.php'; ?>


<main class="step-3-payment-page mb-5">

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
            <div class="row">
                <div class="col-12 col-md-8">
                    <form action="">
                        <div class="card mt-2">
                            <div class="card-body">
                                <h5 class="card-title">CONTACT DETAILS</h5>
                                <hr>
                                <small>Kindly fill in this contact details for booking confirmation</small>

                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="inputEmail">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmail">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Change Country</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Nigeria</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="nokName">Next of Kin</label>
                                            <input type="text" class="form-control" id="nokName">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nokPhone">Next of Kins Phone Number</label>
                                            <input type="text" class="form-control" id="nokPhone">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card my-2">
                            <div class="card-body">
                                <h5 class="card-title">SELECT PAYMENT METHOD</h5>


                                <!-- ////////////////////////////////////////////// -->

                                <div class="accordion" id="accordionExample">
                                    <div class="card border-0">
                                        <div class="card-header bg-white" id="headingOne">
                                            <div class="custom-control custom-radio collapsed" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <input type="radio" id="customRadio1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Card</label>
                                            </div>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="cardName">Name on the Card</label>
                                                    <input type="text" class="form-control" id="cardName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cardNumber">Card Number</label>
                                                    <input type="number" class="form-control" id="cardNumber">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Expiry Date</label>
                                                        <div class="container">
                                                            <div class="row">

                                                                <select id="inputState" class="form-control col-md-5">
                                                                    <option selected>Month</option>
                                                                    <option>...</option>
                                                                </select>
                                                                <select id="inputState"
                                                                    class="form-control col-md-5 offset-md-2">
                                                                    <option selected>Year</option>
                                                                    <option>...</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2 offset-md-6">
                                                        <label for="inputAddress2">CVV</label>
                                                        <input type="number" class="form-control" id="inputAddress2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0">
                                        <div class="card-header bg-white" id="headingTwo">
                                            <div class="custom-control custom-radio collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <input type="radio" id="customRadio2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Transfer</label>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">


                                                <table class="table mt-3">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" colspan="2">Bank Account name</th>
                                                            <td>Bank Account name</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" colspan="2">Bank Account Number</th>
                                                            <td>Bank Account Number</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-button-container"
                            style="display: flex; justify-content: space-between; align-items: center">
                            <button class="btn custom-form-btn px-4" type="button" onclick="goBack()">Back</button>
                            <button class="btn custom-form-btn" type="submit">Continue</button>
                        </div>
                    </form>

                </div>
                <div class="col-12 col-md-4">
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