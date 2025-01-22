@extends('layouts.app')

@section('content')
<body class="index-page">

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              

              <h1 class="mb-4">
                Healthy Smile, <br>
                {{-- Consectetur Led <br> --}}
                <span class="accent-text"> More Meaningful Life</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Maha Dental Care is here to provide the best care, because dental health is the key to your confidence and quality of life.
              </p>

              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
               
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ ('assets/logo.png') }}" alt="Hero Image" class="img-fluid" style="width: 58%">
            </div>
          </div>
        </div>

      

      </div>

    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">GET TO KNOW US</span>
            <h2 class="about-title">Maha Dental Care</h2>
            <p class="about-description">
              Maha Dental Care is a modern dental health clinic founded and owned by Drg. Agung Nickita, 
              a dedicated professional with a passion for providing exceptional dental care. 
              Prioritizing comfort, quality, and professional service, the clinic integrates the latest innovations with a team of 
              experienced doctors to ensure the best care for your dental and oral health. Maha Dental Care is not just a clinic, 
              but your trusted partner for a healthy and confident smile.
            </p>

            <div class="row feature-list-wrapper">
              
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                    <img src="assets/img/owner.png" alt="CEO Profile" class="profile-image">
                    <div>
                      <h4 class="profile-name">Drg. Agung Nickita</h4>
                      <p class="profile-position">Owner</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number">+62 878 6200 7055</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="assets/img/about-5.webp" alt="image" class="img-fluid main-image rounded-4">
                <img src="assets/img/profile2.png" alt="image" class="img-fluid small-image rounded-4">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="" class="features section">
    
      <div class="container">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" >
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Drg. I Gusti Agung Ayu Nickita Maharani S.K.G.</h3>
                <p class="fst-italic">
                  Dedicated to excellence in dental and oral health care, Drg. I Gusti Agung Ayu Nickita Maharani S.K.G. strives to deliver exceptional services to every patient. With years of experience and professionalism, she is committed to ensuring healthy and confident smiles for all.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>3 Years of Professional Dental Experience</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Specializes in providing comfortable and modern dental care.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Committed to high-quality service, utilizing the latest technology to achieve the best results.</span></li>
                </ul>
                <p class="fst-italic mt-3">
                  With a friendly and personalized approach, Dr. Nickita believes that every patient deserves tailored care that meets their unique needs. Together with Maha Dental Care, let us help you achieve your best smile!
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/profile2.png" alt="Drg. I Gusti Agung Ayu Nickita Maharani" class="img-fluid rounded-4">
              </div>
            </div>
          </div><!-- End tab content item -->
        
        </div>
        
        </div>

      </div>

    </section><!-- /Features Section -->

    {{-- <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-box orange">
              <i class="bi bi-award"></i>
              <h4>Corporis voluptates</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-box blue">
              <i class="bi bi-patch-check"></i>
              <h4>Explicabo consectetur</h4>
              <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-box green">
              <i class="bi bi-sunrise"></i>
              <h4>Ullamco laboris</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div><!-- End Feature Borx-->

          <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="feature-box red">
              <i class="bi bi-shield-check"></i>
              <h4>Labore consequatur</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
          </div><!-- End Feature Borx-->

        </div>

      </div>

    </section><!-- /Features Cards Section --> --}}

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row content justify-content-center align-items-center position-relative">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="display-4 mb-4">Your Smile, Our Priority</h2>
            <p class="mb-4">
              At Maha Dental Care, we believe that every smile deserves the best care. Our team of experienced professionals is here to provide you with the highest quality dental services in a comfortable and modern environment. 
            </p>
            <a href="#contact" class="btn btn-cta">Book Your Appointment Today</a>
          </div>
    
          <!-- Abstract Background Elements -->
          <div class="shape shape-1">
            <img src="assets/svg/white.svg" alt="Custom Shape" />
          </div>
    
          <div class="shape shape-2">
            <img src="assets/svg/white.svg" alt="Custom Shape" />
          </div>
          {{-- <div class="shape shape-2">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
            </svg>
          </div> --}}
    
          <!-- Dot Pattern Groups -->
          <div class="dots dots-1">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              </pattern>
              <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
            </svg>
          </div>
    
          <div class="dots dots-2">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              </pattern>
              <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
            </svg>
          </div>
    
          <div class="shape shape-3">
            <img src="assets/svg/white.svg" alt="Custom Shape" />

          </div>
        </div>
    
      </div>
    
    </section><!-- /Call To Action Section -->
 
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

   <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>Before-and-after photos showcase the difference we’ve made in addressing various dental concerns with personalized care.</p>
  </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">
          @foreach ($testimonials as $testimonial)
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <img src="{{ asset('assets/images/'.$testimonial->before.'') }}" class="img-fluid rounded"  style="width: 90px;" alt="">
              <i class="bi bi-arrow-right"></i>
              <img src="{{ asset('assets/images/'.$testimonial->after.'') }}" class="img-fluid rounded"  style="width: 90px;" alt="">

              <h3>{{ $testimonial->patient_name }}</h3>
              <h4>Issue: {{ $testimonial->issue }}</h4>
              <h4>Treatment: {{ $testimonial->treatment}}</h4>
              {{-- <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div> --}}
              <h3>Treatment:</h3>
              <p>
                {{ $testimonial->treatment}}
                {{-- <i class="bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i> --}}
              </p>
            </div>
          </div><!-- End testimonial item -->
            
          @endforeach

          {{-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item --> --}}

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Treatment</h2>
        <p>Discover a wide range of personalized dental treatments designed to restore and enhance your smile. From routine check-ups to advanced cosmetic and restorative procedures, our expert team is here to provide the care you deserve.</p>
      </div><!-- End Section Title -->
      

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          @foreach ($treatments as $treatment)
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-activity"></i>
              </div>
              <div>
                <h3>{{ $treatment->name }}</h3>
                <p>{{ substr($treatment->description, 0, 120) }}</p>
                <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Card -->
            
          @endforeach

          
          <a href="/catalog" class="hero-button me-0 me-sm-2 mx-1 text-center " >See More Treatment Catalog...</a>          

          
          <!-- End Service Card -->

        </div>

      </div>

    </section><!-- /Services Section -->

    {{-- <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section --> --}}

  </main>
  
</body>

@endsection