<?php

$pageTitle = 'contact';

?>

<div class="contact-section my-5">

    <div class="row">
        <div class="container">
            <h1 class="display-4 main-color font-weight-bold mb-5">Contacte</h1>
            <div class="row my-5">

                <div class="col-lg-12">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Name"
                                       class="form-control input-text">
                            </div>
                            <div class="col-lg-4">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Email"
                                       class="form-control input-text">
                            </div>
                            <div class="col-lg-4">
                                <label for="subject">Subject</label>
                                <select name="subject" class="form-control input-text" id="subject">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control input-textarea"
                                          placeholder="Message" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-lg-4 my-2">
                                <button type="submit" name="submit" class="form-control btn-conatct">
                                    <i class="fas fa-paper-plane"></i> Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12">
                    <div class="map my-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13296.36267747183!2d-7.624061221929626!3d33.57699504180419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda632cf9f46a401%3A0xbf637c322b375b3f!2sBen+M&#39;Sick%2C+Casablanca!5e0!3m2!1sen!2sma!4v1535814318657"  height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
