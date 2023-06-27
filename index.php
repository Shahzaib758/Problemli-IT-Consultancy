<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Home</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>
   <main>
      <section class="mainBanner">
         <div class="container">
            <h1>
               Banner Here
            </h1>
         </div>
      </section>

      <section class="about">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos hic voluptatibus soluta labore natus
                     cupiditat quas explicabo, dolor illum minima. Illum ratione
                     necessitatibus assumenda vel voluptas.
                  </p>
               </div>
               <div class="col-md-6">
                  <img src="./assets/images/About Image.png" alt="">
               </div>
            </div>
         </div>
      </section>

      <section class="services" style="background-image: url('./assets/images/marketing\ Section\ bg.png'); background-size: cover; background-repeat: no-repeat;">
         <div class="container services-heading">
            <h4>Services</h4>
            <h3>Elevating Client Satisfaction, One Successful Project at a Time</h3>
         </div>

         <div class="container services-body">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
               <div class="col">
                  <div class="card" style="background-image: url('https://images.unsplash.com/photo-1560617544-b4f287789e24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80'); background-size: cover; background-repeat: no-repeat;">
                     <div class="card-content">
                        <h4>Web design</h4>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="background-image: url('https://images.unsplash.com/photo-1562577308-9e66f0c65ce5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'); background-size: cover; background-repeat: no-repeat;">
                     <div class="card-content">
                        <h4>Marketing</h4>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="background-image: url('https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80'); background-size: cover; background-repeat: no-repeat;">
                     <div class="card-content">
                        <h4>Security/Backup</h4>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="background-image: url('https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80'); background-size: cover; background-repeat: no-repeat;">
                     <div class="card-content">
                        <h4>Process Optimization</h4>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="background-image: url('https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80'); background-size: cover; background-repeat: no-repeat;">
                     <div class="card-content">
                        <h4>Law-Compliance</h4>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="background-image: url('https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80'); background-size: cover; background-repeat: no-repeat;">
                     <div class="card-content">
                        <h4>Programming</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </section>

      <section class="portfolio">
         <div class="container-new portfolio-heading">
            <h4>Portfolio</h4>
            <h3>Unveiling Our Diverse Range of Exceptional Projects</h3>
         </div>

         <div class="container portfolio-body">
            <ul class="nav nav-pills mb-3 justify-content-center align-items-center" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-All-tab" data-bs-toggle="pill" data-bs-target="#pills-All" type="button" role="tab" aria-controls="pills-All" aria-selected="true">All</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Graphics-tab" data-bs-toggle="pill" data-bs-target="#pills-Graphics" type="button" role="tab" aria-controls="pills-Graphics" aria-selected="false">Graphics</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Amazon-tab" data-bs-toggle="pill" data-bs-target="#pills-Amazon" type="button" role="tab" aria-controls="pills-Amazon" aria-selected="false">Amazon</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Digital-tab" data-bs-toggle="pill" data-bs-target="#pills-Digital" type="button" role="tab" aria-controls="pills-Digital" aria-selected="false">Digital Marketing</button>
               </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-All" role="tabpanel" aria-labelledby="pills-All-tab" tabindex="0">
                  <div class="d-flex flex-wrap">
                     <div>
                        <img src="https://images.unsplash.com/photo-1516116216624-53e697fedbea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="">
                        <h4>The Escape: Mastermind</h4>
                        <p class="content">Masterminding an escapegame.</p>
                        <p class="tags"><span class="tag">Php</span></p>
                     </div>
                     <div>
                        <img src="https://images.unsplash.com/photo-1560617544-b4f287789e24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="">
                        <h4>Local Internet Cafe</h4>
                        <p class="content">Software support for lightning-fast tyre changes</p>
                        <p class="tags"><span class="tag">Flutter</span></p>
                     </div>
                     <div>
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
                        <h4>Ciccone TyreMaster</h4>
                        <p class="content">Software support for lightning-fast tyre changes</p>
                        <p class="tags"><span class="tag">Networking</span></p>
                     </div>
                     <div>
                        <img src="https://images.unsplash.com/photo-1562577308-9e66f0c65ce5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
                        <h4>Ciccone TyreMaster</h4>
                        <p class="content">Software support for lightning-fast tyre changes</p>
                        <p class="tags"><span class="tag">Marketing</span></p>
                     </div>
                     <div>
                        <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="">
                        <h4>FountainVoice Audio</h4>
                        <p class="content">Software support for lightning-fast tyre changes</p>
                        <p class="tags"><span class="tag">Design</span></p>
                     </div>
                     <div>
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="">
                        <h4>FountainVoice Audio</h4>
                        <p class="content">Software support for lightning-fast tyre changes.</p>
                        <p class="tags"><span class="tag">Security</span></p>
                     </div>

                  </div>
               </div>
               <div class="tab-pane fade" id="pills-Graphics" role="tabpanel" aria-labelledby="pills-Graphics-tab" tabindex="0">Graphics</div>
               <div class="tab-pane fade" id="pills-Amazon" role="tabpanel" aria-labelledby="pills-Amazon-tab" tabindex="0">Amazon</div>
               <div class="tab-pane fade" id="pills-Digital" role="tabpanel" aria-labelledby="pills-Digital-tab" tabindex="0">Digital</div>
            </div>

            <div class="button-container">
               <button class="btn">View All</button>
            </div>
         </div>
      </section>

      <section class="quote" style="height: 300px;width:100%;background-color:blueviolet">
         <p></p>
      </section>

      <section class="blogs" style="background-image: url('./assets/images/backgound.png'); background-size: cover; background-repeat: no-repeat;">
         <div class="container blogs-heading">
            <h4>Blogs</h4>
            <h3>Unveiling Our Diverse Range of Exceptional Projects</h3>
         </div>

         <div>
            <div class="container blogs-body">
               <div class="row">
                  <div class="card col-md-4">
                     <img src="https://images.unsplash.com/photo-1560617544-b4f287789e24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="">
                     <div class="d-flex justify-content-between align-items-center">
                        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
                        <button class="btn"><img src="./assets/images/icons/icon-4.png" alt=""></button>
                     </div>
                  </div>
                  <div class="card col-md-4">
                     <img src="https://images.unsplash.com/photo-1562577308-9e66f0c65ce5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="">
                     <div class="d-flex justify-content-between align-items-center">
                        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
                        <button class="btn"><img src="./assets/images/icons/icon-4.png" alt=""></button>
                     </div>
                  </div>

                  <div class="card col-md-4">
                     <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="">
                     <div class="d-flex justify-content-between align-items-center">
                        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
                        <button class="btn"><img src="./assets/images/icons/icon-4.png" alt=""></button>
                     </div>
                  </div>
               </div>


               <div class="button-container">
                  <button class="btn">View All</button>
               </div>
            </div>
         </div>
      </section>

      <section class="faq">
         <div class="container faq-heading">
            <h4>FAQ</h4>
            <h3>Unveiling Our Diverse Range of Exceptional Projects</h3>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <div class="faq-body">
                     <div class="faq-div">
                        <ul class="faq-ul">
                           <li class="wow fadeInLeftBig">
                              <h4>How can a marketing agency help my business grow?</h4>
                              <div class="p1">
                                 <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con, Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con
                                 </p>
                              </div>
                           </li>
                           <li class="wow fadeInLeftBig">
                              <h4>What is the typical timeline for a marketing campaign?</h4>
                              <div class="p1">
                                 <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae temporibus hic perferendis excepturi perspiciatis voluptatibus! Vero, modi impedit dicta nostrum ipsam numquam?
                                 </p>
                              </div>
                           </li>
                           <li class="wow fadeInLeftBig">
                              <h4>What is the pricing structure for your marketing services?</h4>
                              <div class="p1">
                                 <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae temporibus hic perferendis excepturi perspiciatis voluptatibus! Vero, modi impedit dicta nostrum ipsam numquam?
                                 </p>
                              </div>
                           </li>
                           <li class="wow fadeInLeftBig">
                              <h4>Can you provide examples of websites or apps you have designed and developed?</h4>
                              <div class="p1">
                                 <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae temporibus hic perferendis excepturi perspiciatis voluptatibus! Vero, modi impedit dicta nostrum ipsam numquam?
                                 </p>
                              </div>
                           </li>
                           <li class="wow fadeInLeftBig">
                              <h4>What platforms and technologies do you specialize in for website and app design?</h4>
                              <div class="p1">
                                 <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae temporibus hic perferendis excepturi perspiciatis voluptatibus! Vero, modi impedit dicta nostrum ipsam numquam?
                                 </p>
                              </div>
                           </li>
                           <li class="wow fadeInLeftBig">
                              <h4>How do you optimize websites and apps for search engines (SEO)?</h4>
                              <div class="p1">
                                 <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem recusandae temporibus hic perferendis excepturi perspiciatis voluptatibus! Vero, modi impedit dicta nostrum ipsam numquam?
                                 </p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <img src="./assets/images/FAQ section.png" alt="">
               </div>
            </div>
         </div>
      </section>

      <section class="quote" style="height: 300px;width:100%;background-color:blueviolet">
         <p></p>
      </section>

      <section class="contact-form">
         <div class="container contact-form-heading">
            <h4>Quote</h4>
            <h3>Together, We'll Create Something Extraordinary</h3>
         </div>

         <div class="container contact-form-body">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <img src="./assets/images/contact-form.png" alt="">
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
               </div>
            </div>
         </div>
      </section>
   </main>


   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
</body>

</html