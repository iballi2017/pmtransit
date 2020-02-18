<?php
include_once '../includes/header.php'; ?>


<main class="vehicle-selection-container mb-5">



    <!-- <section class="title-component-wrapper py-5">
        <div class="container">
            <h1 class="page-title">About</h1>
        </div>
    </section> -->

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
            <div class="vehicle-selection">


                <form id="regForm" action="">

                    <!-- Circles which indicates the steps of the form: -->
                    <div class="step-indicators p-5">
                        <span class="step active" id="step-1-indicator">
                            <div>
                                <p>1</p>
                            </div>
                            <p class="text-secondary step-label" style="position: absolute; margin-top: 70px">
                                Select a bus</p>
                        </span>

                        <span class="step" id="step-2-indicator">
                            <p>2</p>
                            <p class="text-secondary step-label" style="position: absolute; margin-top: 70px">
                                Filling out complete
                                information</p>
                        </span>

                        <span class="step" id="step-3-indicator">
                            <p>3</p>
                            <p class="text-secondary step-label" style="position: absolute; margin-top: 70px">
                                Contacts details
                                and Payment metod</p>
                        </span>
                        <div class="line-through-steps"></div>
                    </div>


                    <!-- One "tab" for each step in the form: -->
                    <div class="bg-warning p-4">
                        <div class="tab">Name:
                            <p><input placeholder="First name..." oninput="this.className = ''"></p>
                            <p><input placeholder="Last name..." oninput="this.className = ''"></p>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="customRadio"
                                    class="custom-control-input userInput">
                                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="customRadio"
                                    class="custom-control-input userInput" checked>
                                <label class="custom-control-label" for="customRadio2" checked>Or toggle this other
                                    custom
                                    radio</label>
                            </div>


                        </div>
                    </div>


                    <div class="tab">Contact Info:
                        <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
                        <p><input placeholder="Phone..." oninput="this.className = ''"></p>
                    </div>

                    <div class="tab">Birthday:
                        <p><input placeholder="dd" oninput="this.className = ''"></p>
                        <p><input placeholder="mm" oninput="this.className = ''"></p>
                        <p><input placeholder="yyyy" oninput="this.className = ''"></p>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" class="btn btn-secondary" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-success" id="nextBtn"
                                onclick="nextPrev(1)">Nextf</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </section>
</main>






<?php include_once '../includes/footer-script.php';

?>