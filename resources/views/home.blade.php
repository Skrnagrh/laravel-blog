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

@endsection

