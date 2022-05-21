<?php
/*
  Template Name: Gym
  Description:  Gym Protien HTML Template
  Author: Sarvesh/Yuraj
  Author URI: 
  file:Index.php
  Version: 1.0
  Company:
  Created: 12-May-2022
*/
?>
<?php require_once 'config.php'; ?>
<!-- Modal About Us Start-->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="line-height:normal; text-align:center; font-size:30px; font-weight: bold; color:#a30b0b;">About Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php include_once 'aboutus.php'; ?>
      </div>
    </div>
  </div>
</div>
<!-- Modal About Us End-->
<?php require_once 'head.php'; ?>
<?php require_once 'navbar2.php'; ?>
<?php require_once 'dgnutrition_product.php'; ?>
<?php include_once 'contact.php'?>
<?php require_once 'footer.php'; ?>