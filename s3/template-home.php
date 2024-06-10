<?php

/*
  Template Name: Página Home
*/

//get_header();

//if (have_posts()) : while (have_posts()) : the_post();
include("header.php");
?>
<main role="main">
  <section id="banner">
    <div class="container h-100">
      <div class="row h-100 d-flex align-items-center">
        <div class="col-7">
          <h1>Your <span class="destaque-titulo">trusted partner</span> in digital healthcare.</h1>
          <p> <span class="destaque-subtitulo">Empowering Your Health at Every Step.</span> Experience personalized medical care from the comfort of your home. Connect with <span class="destaque-subtitulo">certified doctors</span>, or manage prescriptions, and schedule appointments with ease. Ready to take control of your health? <span class="destaque-subtitulo">Get Started</span> or Book an Appointment today.</p>
          <div class="mt-5">
            <a href="" class="btn btn-primary font-24 text-white py-2 px-4">Book an appoiment <span class="ps-2"><i class="fa-solid fa-chevron-right"></i></span></a>
          </div>
          <div class="mt-5 marcas">
            <p>Trusted by millions across the globe:</p>
            <div class="d-flex align-items-center gap-4 mt-1">
              <a href="" class="font-30 text-dark"><i class="fa-brands fa-amazon"></i></a>
              <a href="" class="font-30 text-dark"><i class="fa-brands fa-apple"></i></a>
              <a href="" class="font-30 text-dark"><i class="fa-brands fa-google"></i></a>
              <a href="" class="font-30 text-dark"><i class="fa-brands fa-slack"></i></a>
              <a href="" class="font-30 text-dark"><i class="fa-brands fa-spotify"></i></a>
            </div>
          </div>
        </div>
        <div class="col-5 d-flex align-items-center ">
          <div class="img-100">
            <img src="assets/img/doctor-banner.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="appointment">
    <div class="container">
      <div class="bloco-appointment py-4 px-5">
        <h2>Easily book an appointment in 3 simple steps.</h2>
        <div class="row mt-4">
          <div class="col-3">
            <h3 class="text-light font-16"><span class="text-secondary font-20 pe-2"><i class="fa-solid fa-envelope"></i></span>Email Adress</h3>
            <form action="">
              <div class="mt-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control py-2" id="exampleFormControlInput1" placeholder="Email address">
              </div>
            </form>
          </div>
          <div class="col-3">
            <h3 class="text-light font-16"><span class="text-secondary font-20 pe-2"><i class="fa-solid fa-phone"></i></span>Contact Number</h3>
            <form action="">
              <div class="mt-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control py-2" id="exampleFormControlInput1" placeholder="Enter Your Contact Number">
              </div>
            </form>
          </div>
          <div class="col-3">
            <h3 class="text-light font-16"><span class="text-secondary font-20 pe-2"><i class="fa-solid fa-calendar-days"></i></span>Date of Appoitment</h3>
            <form action="">
              <div class="mt-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="date" class="form-control py-2" id="exampleFormControlInput1" placeholder="Select Date of Appoitment">
              </div>
            </form>
          </div>
          <div class="col-3 d-flex align-items-end justify-content-end">
            <form action="">
              <div class="">
                <button type="submit" class="btn btn-secondary text-white py-2 px-4">Book Now <span class="ps-2 text-white font-20"><i class="fa-solid fa-circle-check"></i></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services">
    <div class="container">
      <div class="text-center">
        <h2>Top <span class="destaque">services</span> we offer</h2>
        <div class="sub-title">
          <p>In today’s fast-paced world, your health deserves the utmost attention and convenience. That’s why HealNet offers a suite of integrated services designed to cater to your healthcare needs digitally:</p>
        </div>
        <div class="bloco-servicos margin-top-40">
          <div class="row d-flex justify-content-center">
            <div class="col-7  mb-5 text-start">
              <div class="servicos h-100 d-flex align-items-center px-5">
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <h3 class="mt-3">Online Consultations</h3>
                  <p>Consult with top doctors across various specialties via video or chat communication. It’s totally secure, private, and convenient. Choose the best time for an in-person visit with our easy-to-use scheduling system, or proceed with our online consultation.</p>
                </div>
              </div>
            </div>
            <div class="col-5  mb-5 text-start">
              <div class="servicos d-flex align-items-center px-5">
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <h3 class="mt-3">Online Consultations</h3>
                  <p>Consult with top doctors across various specialties via video or chat communication. It’s totally secure, private, and convenient. Choose the best time for an in-person visit with our easy-to-use scheduling system, or proceed with our online consultation.</p>
                </div>
              </div>
            </div>
            <div class="col-4  mb-5 text-start">
              <div class="servicos d-flex align-items-center px-4">
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <h3 class="mt-3">Online Consultations</h3>
                  <p>Consult with top doctors across various specialties via video or chat communication. It’s totally secure, private, and convenient. Choose the best time for an in-person visit with our easy-to-use scheduling system, or proceed with our online consultation.</p>
                </div>
              </div>
            </div>
            <div class="col-4  mb-5 text-start">
              <div class="servicos d-flex align-items-center px-4">
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <h3 class="mt-3">Online Consultations</h3>
                  <p>Consult with top doctors across various specialties via video or chat communication. It’s totally secure, private, and convenient. Choose the best time for an in-person visit with our easy-to-use scheduling system, or proceed with our online consultation.</p>
                </div>
              </div>
            </div>
            <div class="col-4  mb-5 text-start">
              <div class="servicos d-flex align-items-center px-4">
                <div>
                  <div class="icon">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <h3 class="mt-3">Online Consultations</h3>
                  <p>Consult with top doctors across various specialties via video or chat communication. It’s totally secure, private, and convenient. Choose the best time for an in-person visit with our easy-to-use scheduling system, or proceed with our online consultation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about-us">
    <div class="container">
      <div class="sobre-nos py-5 px-5">
        <h2 class="text-center"><span class="destaque">HealNet’s Story:</span> Get to know us</h2>
        <div class="row mt-5">
          <div class="col-5 img-100">
            <img src="assets/img/doctor.png" alt="">
          </div>
          <div class="col-7 text-start px-3">
            <p>HealNet is more than just an online medical service; it’s a movement towards accessible, efficient, and compassionate healthcare for all. Founded by a team of visionary doctors, healthcare professionals, and technology experts, we are driven by the mission to deliver exceptional medical care directly to you, no matter where you are. Our platform is built on the pillars of trust, innovation, and patient-centricity, ensuring that every interaction is personalized and every treatment plan is tailored to your unique needs. With a network of licensed practitioners from diverse medical fields, we guarantee comprehensive care that’s just a click away.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="plataforma">
    <div class="container">
      <div class="text-center">
        <h2>How <span class="destaque">our platform</span> works</h2>
        <p>Navigating your healthcare journey with HealNet is seamless. Just follow these steps mentioned below to proceed with your selected services. You can also see our FAQ section for more guidance:</p>
        <div class="row margin-top-80">
          <div class="col-5">
            <div class="bloco-plataforma text-start mb-5">
              <div class="d-flex gap-2 mb-3 ">
                <div class="circle">
                  <span>1</span>
                </div>
                <h3>Create Your Profile</h3>
              </div>
              <p>Sign up and fill in your medical history securely. Setting up your profile this way would ensure that you stay up-to-date with your medical processes.</p>
            </div>
            <div class="bloco-plataforma text-start mb-5">
              <div class="d-flex gap-2 mb-3 ">
                <div class="circle">
                  <span>1</span>
                </div>
                <h3>Create Your Profile</h3>
              </div>
              <p>Sign up and fill in your medical history securely. Setting up your profile this way would ensure that you stay up-to-date with your medical processes.</p>
            </div>
            <div class="bloco-plataforma text-start mb-5">
              <div class="d-flex gap-2 mb-3 ">
                <div class="circle">
                  <span>1</span>
                </div>
                <h3>Create Your Profile</h3>
              </div>
              <p>Sign up and fill in your medical history securely. Setting up your profile this way would ensure that you stay up-to-date with your medical processes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
include("footer.php");
//endwhile; 
//endif; 
//get_footer();
?>