<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking.com - Facilities</title>
    
    <?php require('inc/link.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- swipper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>


  </head>

<body class="bg-light">
  <!-- navbar-->
  <?php require('inc/header.php');?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font"> CONTACT Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium 
      similique illum porro nisi autem quibusdam unde <br>debitis soluta magnam officiis recusandae, 
      fuga eum nostrum nemo ipsam eaque amet impedit voluptatum.</p>
  </div>


  <!--Contact Map -->
<div class="container">
    <div class="row">
      <!-- LEFT PART -->
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4  pop">
        <!--Address -->
        <iframe class="w-100 rounded mb-3" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.5851838428!2d-0.26640253299971084!3d51.52852620463016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2s!4v1739004948143!5m2!1sen!2s" loading="lazy"></iframe>
        <h5> Address</h5>
        <a href ="https://maps.app.goo.gl/yRqDf13Y4ekucbJ56" target="_blank" class="text-decoration-none d-inline-block mb-2">
          <i class="bi bi-geo-alt"></i>Luton London
        </a>
        <!--contact -->
        <h5 class="mt-2">Call us</h5>
        <a href="tel:+ 923355392030" class="d-inline-block mb-2 text-decoration-none">
          <i class="bi bi-telephone-outbound-fill me-1"></i> +923355392030</a>
        
        <!--email -->
        <h5 class="mt-2">Email us</h5>
        <a href="mailto:Reservation@booking.com" class="d-inline-block mb-4 text-decoration-none">
        <i class="bi bi-envelope-exclamation-fill"></i> Reservation@booking.com </a>

        <!--Follow us -->
        <h5 class="mt-2">Follow us</h5>
        <a href="#" class="d-inline-block me-2">
          <i class="bi bi-facebook me-1"></i>
        </a>
        <a href="#" class="d-inline-block me-2">
          <i class="bi bi-twitter me-1"></i>
        </a>
        <a href="#" class="d-inline-block">
          <i class="bi bi-instagram me-1"></i>
        </a>
       </div>
      </div>

      <!-- RIGHT PART -->
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4">
        <form>
          <h5> Send a Message </h5>
          <div class="mt-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" class="form-control shadow-none">
          </div>   
          <div class="mt-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" class="form-control shadow-none">
          </div>   
          <div class="mt-3">
            <label class="form-label fw-bold">Subject</label>
            <input type="text" class="form-control shadow-none">
          </div>   
          <div class="mt-3">
            <label class="form-label fw-bold">Message</label>
            <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
          </div>   
          <button type="submit" class="btn text-white btn-dark mt-3 shadow"> Send </button>
        </form>
      </div>
    </div>
  </div>
</div>


<!--footer -->
<?php require('inc/footer.php');?>

    
</body>