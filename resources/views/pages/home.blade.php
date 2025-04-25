@extends('layouts.app')

@section('title')
  Store Homepage
@endsection

@section('content')
  <div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0">
                </li>
                <li data-target="#storeCarousel" data-slide-to="1">
                </li>
                <li data-target="#storeCarousel" data-slide-to="2">
                </li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/banner.jpg" alt="Careousel Image" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="images/banner.jpg" alt="Careousel Image" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="images/banner.jpg" alt="Careousel Image" class="d-block w-100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="store-trend-categories mt-4">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="images/categories-gadgets.svg" alt="" class="w-100">
                <p class="categories-text">Gadgets</p>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="images/categories-furniture.svg" alt="" class="w-100">
                <p class="categories-text">Furniture</p>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="images/categories-makeup.svg" alt="" class="w-100">
                <p class="categories-text">Make Up</p>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="images/categories-sneaker.svg" alt="" class="w-100">
                <p class="categories-text">Sneaker</p>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="images/categories-tools.svg" alt="" class="w-100">
                <p class="categories-text">Tools</p>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="images/categories-baby.svg" alt="" class="w-100">
                <p class="categories-text">Baby</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Product</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/apple-watch-4.jpg');">
                </div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $890
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/orange-bogota.jpg');">
                </div>
              </div>
              <div class="products-text">
                Orange Bogotta
              </div>
              <div class="products-price">
                $94,509
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/sofa-ternyaman.jpg');">
                </div>
              </div>
              <div class="products-text">
                Sofa Ternyaman
              </div>
              <div class="products-price">
                $1,409
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/bubuk-maketti.jpg');">
                </div>
              </div>
              <div class="products-text">
                Bubuk Maketi
              </div>
              <div class="products-price">
                $225
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/bubuk-maketti.jpg');">
                </div>
              </div>
              <div class="products-text">
                Tatakan Gelas
              </div>
              <div class="products-price">
                $45,184
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/mavic-kawe.jpg');">
                </div>
              </div>
              <div class="products-text">
                Mavic Kawe
              </div>
              <div class="products-price">
                $503
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/black-edition-nike.jpg');">
                </div>
              </div>
              <div class="products-text">
                Black Edition Nike
              </div>
              <div class="products-price">
                $70,482
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('images/monkey-toys.jpg');">
                </div>
              </div>
              <div class="products-text">
                Monkey Toys
              </div>
              <div class="products-price">
                $783
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection