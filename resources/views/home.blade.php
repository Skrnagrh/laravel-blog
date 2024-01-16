@extends('layouts.main')

@section('container')
    <!--  Hero Slider Section  -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators mb-5">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('/img/home/post-slide-1.jpg');">
                <div class="img-bg-inner">
                  <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                </div>
              </a>
          </div>
          <div class="carousel-item">
            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('/img/home/post-slide-2.jpg');">
              <div class="img-bg-inner">
                <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
              </div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('/img/home/post-slide-3.jpg');">
              <div class="img-bg-inner">
                <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
              </div>
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- End Hero Slider Section -->

    <!--  Post Grid Section  -->
    {{-- <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
          <div class="row g-6">
            <div class="col-md-4">
              <div class="post-entry-1 lg">
                <a href="single-post.html">
                    <img src="/img/home/post-slide-4.jpg" alt="" class="img-fluid">
                </a>
                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur modi eveniet rem nesciunt. Ipsum nulla quam aspernatur rerum cumque, aut enim obcaecati praesentium tempora atque dolore perferendis ipsam corporis quaerat dignissimos sapiente quas veritatis asperiores nemo, provident temporibus? Repellendus, mollitia.</p>
            </div>
            </div>
  
            <div class="col-lg-8">
              <div class="row g-6">
                <div class="col-lg-6 border-start custom-border">
                  <div class="post-entry-1">
                    <a href="#"><img src="/img/home/post-slide-2.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="#">Let’s Get Back to Work, New York</a></h2>
                  </div>
                </div>
                <div class="col-lg-6 border-start custom-border">
                  <div class="post-entry-1">
                    <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                  </div>
              </div>
            </div>
  
          </div> 
        </div>
    </section> --}}
      <!-- End Post Grid Section -->

@endsection

