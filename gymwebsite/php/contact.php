<?php
/*
  Template Name: Gym
  Description:  Gym Protien HTML Template
  Author: Sarvesh/Yuraj
  Author URI: 
  file:Contact.php
  Version: 1.0
  Company:
  Created: 12-May-2022
*/
?>
<section class="section-padding bg-white">
         <div class="container" id="contactUs">
         <h2 style="line-height:normal; text-align:center; font-size:30px;margin-top: 10px; font-weight: bold; padding:21px 0px; color:#a30b0b;">CONTACT US</h2>
            <div class="row">
               <div class="col-lg-6 col-md-6">
               <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate>
                  <div class="control-group form-group text-left">
                     <div class="controls">
                        <label class="text-dark">Full Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="control-group form-group col-md-6 text-left">
                        <label class="text-dark">Phone Number <span class="text-danger">*</span></label>
                        <div class="controls">
                           <input type="tel" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                     </div>
                     <div class="control-group form-group col-md-6 text-left">
                        <div class="controls">
                           <label class="text-dark">Email Address <span class="text-danger">*</span></label>
                           <input type="email" placeholder="Email Address"  class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                     </div>
                  </div>
                  <div class="control-group form-group text-left">
                     <div class="controls">
                        <label class="text-dark">Message <span class="text-danger">*</span></label>
                        <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                     </div>
                  </div>
                  <div id="success"></div>
                  <!-- For success/fail messages -->
                  <button type="submit" class="btn btn-info">Send Message</button>
               </form>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.19658195564!2d75.78663251672796!3d30.900473637371658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1530462134939" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Contact Us -->
      <!-- Contact Me -->
      <section class="bg-white pt-4 pb-3">
      <div class="container">
       <div class="col-lg-12 row">
          <div class="col-lg-3 responsive-contact">
             <p class="m-0 text-left" style="font-size: 18px;font-weight: 600;color: #938e93;">Address :</p>
             <p class="m-0 text-left text-dark">86 Petersham town, New South wales Waedll Steet, Australia PA 6550</p>
          </div>
          <div class="col-lg-3 responsive-contact">
            <p class="m-0 text-left " style="font-size: 18px;font-weight: 600;color: #938e93;">Phone :</p>
            <p class="m-0 text-left text-dark">(+20) 220 145 6589, +91 12345-67890</p>
          </div>
          <div class="col-lg-3 responsive-contact">
            <p class="m-0 text-left " style="font-size: 18px;font-weight: 600;color: #938e93;">Email :</p>
            <p class="m-0 text-left text text-dark">iamosahan@gmail.com, info@gmail.com</p>
          </div>
          <div class="col-lg-3 responsive-contact">
            <p class="m-0 text-left " style="font-size: 18px;font-weight: 600;color: #938e93;">Website :</p>
            <p class="m-0 text-left text-dark">www.gym.com</p>
          </div>
       </div>
      </div>
      </section>