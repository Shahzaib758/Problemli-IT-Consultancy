<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Contact</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <main>
      <section class="contact-form page">
         <div class="container contact-page-form-heading">
            <h1>Let’s Talk</h1>
            <p>Have some big idea or brand to develop and need help? Then reach <br> out we'd love to hear about your project and provide help</p>
         </div>

         <div class="container contact-form-body">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <img class="wow animate__zoomIn" src="./assets/images/contact-form.png" alt="">
               </div>
               <div class="col-md-6">
                  <div class="input-container">
                     <label for="">
                        <span>Full Name</span>
                        <input type="text">
                     </label>
                     <label for="">
                        <span>Email Address</span>
                        <input type="email">
                     </label>
                  </div>

                  <div class="input-container">
                     <label for="">
                        <span>Phone Number</span>
                        <input type="text">
                     </label>
                     <label for="">
                        <span>Service</span>
                        <input type="email">
                     </label>
                  </div>
                  <div class="input-container">
                     <label for="">
                        <span>Your Message</span>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                     </label>
                  </div>

                  <div class="btn-container">
                     <div class="btn">Submit</div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include("includes/faq.php"); ?>

   </main>


   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
</body>

</html>