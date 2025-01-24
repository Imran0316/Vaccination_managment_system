<?php 
include('shared/header.php');
include('shared/nav.php');
?>
 <!-- Contact Section -->
 <section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="mb-5" data-aos="fade-up" data-aos-delay="200">
 <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6039.041491562165!2d67.0416220329659!3d24.939831650898245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f3daae54d55%3A0x5dae2a3a4b71f12a!2sAptech%20Learning%20North%20Nazimabad%20II%20Center!5e1!3m2!1sen!2sus!4v1736359183660!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><!-- End Google Maps -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Location</h3>
          <p>A108 Adam Street, New York, NY 535022</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Call Us</h3>
          <p>+1 5589 55488 55</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>Email Us</h3>
          <p>info@example.com</p>
        </div>
      </div><!-- End Info Item -->

    </div>

  <div class="col-lg-8 mx-auto mt-5">
  <form action="forms/contactform.php" method="post" data-aos="fade-up" data-aos-delay="200" class="p-4 shadow rounded">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row gy-3">
      
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" required="">
          <label for="floatingName">Your Name</label>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Your Email" required="">
          <label for="floatingEmail">Your Email</label>
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="form-floating">
          <input type="text" name="subject" class="form-control" id="floatingSubject" placeholder="Subject" required="">
          <label for="floatingSubject">Subject</label>
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="form-floating">
          <textarea name="message" class="form-control" id="floatingMessage" placeholder="Message" rows="6" style="height: 150px;" required=""></textarea>
          <label for="floatingMessage">Message</label>
        </div>
      </div>
      
      <div class="col-md-12 text-center">
        <div class="loading text-muted d-none">Loading...</div>
        <div class="error-message text-danger d-none"></div>
        <div class="sent-message text-success d-none">Your message has been sent. Thank you!</div>
        <button type="submit" name="contactsubmit" class="btn btn-primary mt-3 px-5">Send Message</button>
      </div>
      
    </div>
  </form>
</div>


  </div>

</div>

</section><!-- /Contact Section -->
<?php
    include('shared/footer.php');
    ?>