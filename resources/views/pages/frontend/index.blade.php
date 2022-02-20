@extends('layouts.frontend')

@section('content')
<div class="hr">
    <hr style="
        border-color: #F4F4F4;
        background-color: #F4F4F4;
        opacity: 1;
        margin: 0 !important;
    " />
  </div>

  <div>
    <div class="mx-auto d-flex flex-lg-row flex-column hero " >
      <!-- Left Column -->
      <div
        class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
        <p class="text-caption" style="color: #8AB6D6;">Bidan Terpercaya</p>
        <h1 class="title-text">
          Adisti Putri Pratiwi
        </h1>
        <h1 class="title-text-big">
          Siap Melayani Anda
        </h1>
        <p class="text-caption">
          Assalamualaikum,
          Selamat datang di web PMB APP melayani pelayanan kebidanan kesehatan ibu dan anak, meliputi<br class="d-sm-block d-none" />
           pemeriksaan kehamilan, pertolongan persalinan, pelayanan <br class="d-sm-block d-none" />
           ibu nifas, keluarga berencana,  kesehatan bayi dan balita.
        </p>
        <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
          <button class="btn btn-get text-white d-inline-flex">
            Get Started
          </button>
          
        </div>
      </div>

      <!-- Right Column -->
      <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
        <img class="position-absolute d-lg-block d-none d-sm-block hero-right"
          src="images/banner-header.png" width="470"
          alt="" />
        <div class="d-flex align-items-end card-outer">
          <div class="mx-auto d-flex flex-wrap align-items-center">
            <div class="card border-0 position-relative d-flex flex-column">
              <div class="d-flex align-items-center" style="margin-bottom: 1.25rem">
                <div>
                  <img style="margin-right: 1rem"
                    src="images/ic-round.png"
                    width="50"
                    alt="" />
                </div>
                <div class="text-start">
                  <p class="card-name">Adisti Putri</p>
                  <p class="card-job">Bidan</p>
                </div>
              </div>
              <div class="row text-start" style="margin-bottom: 1.25rem">
                <div class="col-6">
                  <p class="card-price-left">64,100</p>
                  <p class="card-caption">Followers</p>
                </div>
                <div class="col-6 ps-0">
                  <p class="card-price-right">106</p>
                  <p class="card-caption">Reviews</p>
                </div>
              </div>
              <button class="btn btn-hire text-white">
                <div class="test d-none">show</div>
                Hire Me
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection