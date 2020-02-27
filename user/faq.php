<?php
include_once '../includes/header.php'; ?>


<main class="faq-container mb-5">



    <section class="title-component-wrapper py-5">
        <div class="container">
            <h3 class="page-title">Frequently Asked Questions</h3>

        </div>
    </section>


    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col">


                    <div class="row">
                        <div class="col">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed faq-accordion-button" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                1. Why PME Transit
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            PME Transit is a pre-scheduled bus booking platform with the latest
                                            technology for an effective and efficient service delivery. We offer the
                                            most affordable prices with great offers and discounts while still providing
                                            safety and comfort.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed faq-accordion-button" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                2. What are the payment methods for booking bus tickets?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            With PME Transit bus booking, you have the ease of choosing different
                                            methods for payments. Payment options like bank transfer, POS and online
                                            transfer are available for the convenience of our customers.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed faq-accordion-button" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                3. What to do if I lose my ticket?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            The online booking facility allows you having a copy of your bus ticket in
                                            your inbox. You can obtain this again from your email.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed faq-accordion-button" type="button"
                                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                4. How do I get a refund if I cancel my ticket?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            We have a no-refund policy, but however, ticket is valid for a one month
                                            period whereby a customer has to confirm next travel date three (3) days
                                            before scheduled travel date.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed faq-accordion-button" type="button"
                                                data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                5. How many slots are available for Military personnel?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            It is our policy to allocate only two (2) slots per trip for active members
                                            of the military in appreciation of their sacrifice for our great country.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>






<?php include_once '../includes/footer.php';

?>