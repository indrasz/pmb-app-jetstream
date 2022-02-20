

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles/main.css">
    <title> PMB App</title>
</head>
<body>

  <section class="h-50 w-100" style="
				box-sizing: border-box;
				position: relative;
			">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      
      .header-3-3 .modal-backdrop.show {
        background-color: #000;
        opacity: 0.6;
      }

      .header-3-3 .modal-item.modal {
        top: 2rem;
      }

      .header-3-3 .navbar {
        padding: 0rem 1rem;
      }

      .header-3-3 .navbar-light .navbar-nav .nav-link {
        font: 300 0.875rem/1.5rem Poppins, sans-serif;
        color: #8B9CAF;
        padding: 0rem 1.25rem 0rem 0rem;
        margin-right: 0;
        margin-left: 0;
      }

      .header-3-3 .navbar-light .navbar-nav .nav-link:hover {
        font: 500 0.875rem/1.5rem Poppins, sans-serif;
        color: #243142;
      }

      .header-3-3 .navbar-light .navbar-nav .active {
        position: relative;
        width: fit-content;
      }

      .header-3-3 .navbar-light .navbar-nav .active>.nav-link,
      .header-3-3 .navbar-light .navbar-nav .nav-link.active,
      .header-3-3 .navbar-light .navbar-nav .nav-link.show,
      .header-3-3 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 500;
      }

      .header-3-3 .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-3-3 .btn:focus,
      .header-3-3 .btn:active {
        outline: none !important;
      }

      .header-3-3 .btn-fill {
        font: 500 0.875rem/1.25rem Poppins, sans-serif;
        border: 1px solid #4E91F9;
        background-color: #4E91F9;
        border-radius: 999px;
        padding: 0.75rem 1.5rem;
        transition: 0.3s;
      }

      .header-3-3 .btn-fill:hover {
        background-color: #6DA4F9;
        border: 1px solid #6DA4F9;
      }

      .header-3-3 .btn-no-fill {
        font: 500 0.875rem/1.25rem Poppins, sans-serif;
        color: #8B9CAF;
        padding: 0.75rem 2rem;
      }

      .header-3-3 .btn-no-fill:hover {
        color: #243142;
      }

      .header-3-3 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
      }

      .header-3-3 .responsive li {
        padding: 1rem;
      }

      .header-3-3 .hr {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      .header-3-3 .hero {
        padding: 4rem 2rem;
      }

      .header-3-3 .left-column {
        margin-bottom: 0.75rem;
        width: 100%;
      }

      .header-3-3 .title-text-big {
        font: 600 2.25rem / normal Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #243142;
      }

      .header-3-3 .text-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #8B9CAF;
      }

      .header-3-3 .btn-get {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2rem;
        border-radius: 999px;
        border: 1px solid #4E91F9;
        background-color: #4E91F9;
        transition: 0.3s;
      }

      .header-3-3 .btn-get:hover {
        background-color: #6DA4F9;
        border: 1px solid #6DA4F9;
      }

      .header-3-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 999px;
        background-color: transparent;
        border: 1px solid #A6B1BE;
        color: #A6B1BE;
        transition: 0.3s;
      }

      .header-3-3 .btn-outline:hover {
        border: 1px solid #6DA4F9;
        color: #6DA4F9;
      }

      .header-3-3 .btn-outline:hover div path {
        fill: #6DA4F9;
      }

      .header-3-3 .btn-outline:hover div rect {
        stroke: #6DA4F9;
      }

      .header-3-3 .right-column {
        width: 100%;
      }

      .header-3-3 .hero-right {
        right: 2rem;
        bottom: 0;
      }

      .header-3-3 .card-outer {
        padding-left: 0;
        z-index: 1;
      }

      .header-3-3 .card {
        transition: 0.4s;
        top: 0px;
        left: 0px;
        background-color: #FFFFFF;
        padding: 1.25rem;
        border-radius: 0.75rem;
        width: 100%;
        margin-top: 2.5rem;
        box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
      }

      .header-3-3 .card:hover {
        top: -3px;
        left: -3px;
        transition: 0.4s;
        box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
      }

      .header-3-3 .card-name {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        margin-bottom: 0.25rem;
      }

      .header-3-3 .card-job {
        font: 300 0.75rem/1rem Poppins, sans-serif;
        color: #aaa6a6;
        margin-bottom: 0;
      }

      .header-3-3 .card-price-left {
        font: 500 1rem/1.5rem Poppins, sans-serif;
        margin-bottom: 0.125rem;
        color: #1B8171;
      }

      .header-3-3 .card-caption {
        font: 300 0.75rem/1rem Poppins, sans-serif;
        color: #aaa6a6;
        margin-bottom: 0;
      }

      .header-3-3 .card-price-right {
        font: 500 1rem/1.5rem Poppins, sans-serif;
        margin-bottom: 0.125rem;
        color: #FF7468;
      }

      .header-3-3 .btn-hire {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 0.75rem 4rem;
        border-radius: 0.75rem;
        margin-bottom: 0.125rem;
        border: 1px solid #4E91F9;
        background-color: #4E91F9;
        transition: 0.3s;
      }

      .header-3-3 .btn-hire:hover {
        background-color: #6DA4F9;
        border: 1px solid #6DA4F9;
      }

      .header-3-3 .form {
        border-radius: 999px;
        background-color: #eef4fd;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0rem 1rem;
        padding-right: 0.5rem;
        outline: none;
      }

      .header-3-3 .form div input[type="text"] {
        background-color: #eef4fd;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0rem 0.5rem;
        outline: none;
        width: 100%;
      }

      .header-3-3 .center-search {
        bottom: 0.5rem;
      }     

      @media (min-width: 576px) {
        .header-3-3 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-3-3 .navbar {
          padding: 2rem;
        }

        .header-3-3 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-3-3 .navbar {
          padding: 2rem 4rem;
        }

        .header-3-3 .hr {
          padding-left: 4rem;
          padding-right: 4rem;
        }

        .header-3-3 .hero {
          padding: 4rem;
        }

        .header-3-3 .left-column {
          margin-bottom: 3rem;
        }

        .header-3-3 .hero-right {
          right: 4rem;
        }

        .header-3-3 .card {
          margin-left: auto;
          margin-top: 0;
        }
        
       
      }

      @media (min-width: 992px) {

        .header-3-3 .navbar-light .navbar-nav .active:before {
          content: "";
          position: absolute;
          margin-left: auto;
          margin-right: auto;
          left: 0;
          right: 0;
          text-align: center;
          bottom: 0;
          height: 0px;
          width: 80%;
          /* or 100px */
          border-bottom: 2px solid #4E91F9;
        }

        .header-3-3 .navbar {
          padding: 2rem 6rem;
        }

        .header-3-3 .navbar-light .navbar-nav .nav-link {
          padding: 0;
          margin-right: 1rem;
          margin-left: 1rem;
        }

        .header-3-3 .navbar-light .navbar-nav .active:before {
          width: 40%;
        }

        .header-3-3 .hr {
          padding-left: 6rem;
          padding-right: 6rem;
        }

        .header-3-3 .hero {
          padding: 4rem 6rem 5rem;
        }

        .header-3-3 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-3-3 .title-text-big {
          font-size: 3rem;
          line-height: 1.25;
        }

        .header-3-3 .right-column {
          width: 50%;
        }

        .header-3-3 .hero-right {
          right: 6rem;
        }

        .header-3-3 .card-outer {
          padding-left: 4rem;
        }

        .header-3-3 .center-search {
          left: 48%;
          top: 50%;
          bottom: auto;
          transform: translate(-48%, -50%);
        }

        .header-3-3 .form {
          width: 340px;
        }
      }

      @media (max-width: 1023px) {
        .header-3-3 .form div input[type="text"] {
          width: 100%;
        }
      }
     
    </style>
    <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif;">
      <nav class="navbar navbar-expand-lg navbar-light">
      
        <a href="#">
          <img style="margin-right: 0.75rem"
            src="images/logo.png" width="70" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Mobile Interface -->
        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem"
                    src="images/logo.png"
                    width="50"
                    alt="" />
                </a>
                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active position-relative">
                    <a class="nav-link main" style="color: #243142;" href="#">Home</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#">Feature</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                      aria-controls="collapse">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                          fill="#8B9CAF" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                          fill="#8B9CAF" />
                      </svg>
                    </a>
                    <form method class="collapse position-absolute form center-search border-0" id="collapse">
                      <div class="d-flex">
                        <input type="text" class="rounded-full border-0 focus:outline-none" placeholder="Search" />
                        <button class="btn" type="button">
                          <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse"
                            role="button" aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                          </svg>
                        </button>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                <button class="btn btn-fill text-white">Register</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Dekstop Interface -->

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav mx-auto mt-1 mt-lg-0">
            <li class="nav-item active position-relative">
              <a class="nav-link main=" style="color: #243142;" href="#">Home</a>
            </li>
            <li class="nav-item position-relative">
              <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item position-relative">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item position-relative">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item my-auto">
              <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                aria-controls="collapse">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                    fill="#8B9CAF" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                    fill="#8B9CAF" />
                </svg>
              </a>
              <form class="collapse position-absolute form center-search border-0" id="collapse">
                <div class="d-flex">
                  <input type="text" class="rounded-full border-0 focus:outline-none" placeholder="Search" />
                  <button class="btn" type="button">
                    <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse" role="button"
                      aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                    </svg>
                  </button>
                </div>
              </form>
            </li>
          </ul>
          <button class="btn btn-fill text-white">Register</button>
        </div>
      </nav>

    </div>
  </section>

  <x-guest-layout>
    <x-jet-validation-errors class="row justify-center text-center text-red-500" />
      @if (session('status'))
          <div class="mb-4 font-medium text-sm" role="alert" >
              {{ session('status') }}
          </div>
      @endif
  </x-guest-layout>

  <section class="h-100 w-100" style="box-sizing: border-box;">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-5 .btn:focus,
      .content-3-5 .btn:active {
        outline: none !important;
      }

      .content-3-5 .width-left {
        width: 0%;
      }

      .content-3-5 .width-right {
        width: 100%;
        height: 100%;
        padding: 8rem 2rem;
        background-color: #fcfdff;
      }

      .content-3-5 .centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .content-3-5 .right {
        width: 100%;
      }

      .content-3-5 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 0.75rem;
      }

      .content-3-5 .caption-text {
        font: 400 0.875rem/1.75rem Poppins, sans-serif;
        color: #a8adb7;
      }

      .content-3-5 .input-label {
        font: 500 1.125rem/1.75rem Poppins, sans-serif;
        color: #39465b;
      }

      .content-3-5 .div-input {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.25rem;
        margin-top: 0.75rem;
        border-radius: 0.75rem;
        border: 1px solid #cacbce;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .div-input:focus-within {
        border: 1px solid #8AB6D6;
        color: #2a3240;
        transition: 0.3s;
      }

      .content-3-5 .div-input input::placeholder {
        color: #cacbce;
        transition: 0.3s;
      }

      .content-3-5 .div-input:focus-within input::placeholder {
        color: #2a3240;
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .div-input .icon-toggle-empty-3-5 path,
      .content-3-5 .div-input:focus-within .icon path {
        transition: 0.3;
        fill: #8AB6D6;
        transition: 0.3s;
      }

      .content-3-5 .input-field {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        width: 100%;
        background-color: #fcfdff;
        transition: 0.3s;
      }

      .content-3-5 .input-field:focus {
        outline: none;
        transition: 0.3s;
      }

      .content-3-5 .forgot-password {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        color: #cacbce;
        transition: 0.3s;
        text-decoration: none;
      }

      .content-3-5 .forgot-password:hover {
        color: #2a3240;
      }

      .content-3-5 .btn-fill {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        background-color: #8AB6D6;
        padding: 0.75rem 1rem;
        margin-top: 2.25rem;
        border-radius: 0.75rem;
        transition: 0.5s;
      }

      .content-3-5 .btn-fill:hover {
        background-color: hsl(198, 35%, 71%);
        transition: 0.5s;
      }

      .content-3-5 .bottom-caption {
        font: 400 0.875rem/1.25rem Poppins, sans-serif;
        margin-top: 2rem;
        color: #2a3240;
      }

      .content-3-5 .green-bottom-caption {
        color: #8AB6D6;
        font-weight: 500;
      }

      .content-3-5 .green-bottom-caption:hover {
        transition: 1.3s;
        color: #0195ff;
        cursor: pointer;
        text-decoration: underline;
      }

      @media (min-width: 576px) {
        .content-3-5 .width-right {
          padding: 8rem 4rem;
        }

        .content-3-5 .right {
          width: 58.333333%;
        }
      }

      @media (min-width: 768px) {
        .content-3-5 .right {
          width: 66.666667%;
        }
      }

      @media (min-width: 992px) {
        .content-3-5 .width-left {
          width: 48%;
        }

        .content-3-5 .width-right {
          width: 52%;
        }

        .content-3-5 .right {
          width: 75%;
        }
      }

      @media (min-width: 1200px) {
        .content-3-5 .right {
          width: 58.333333%;
        }
      }
    </style>
    

    <div class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row"
      style="font-family: 'Poppins', sans-serif">
      <div class="position-relative d-none d-lg-block h-100 width-left">
        <img class="position-absolute img-fluid centered"
          src="images/banner-header.png"
          alt="" />
      </div>
      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0" >
        <div class="right mx-lg-0 mx-auto">
          <div class="align-items-center justify-content-center d-lg-none d-flex">
            <img class="img-fluid"
              src="images/banner-header.png"
              alt="" />
          </div>
          <h3 class="title-text">Log In to continue</h3>
          <p class="caption-text">
            langkah mudah untuk <br> masa
              kehamilan bunda.
          </p>
          <form style="margin-top: 1.5rem" method="POST" action="{{ route('login') }}">
            @csrf
            <div style="margin-bottom: 1.75rem">
              <label for=""  class="d-block input-label">Email Address</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                    fill="#CACBCE" />
                </svg>
                <input class="input-field border-0" type="email" name="email" id="" placeholder="Your Email Address"
                  autocomplete="on" required />
                  
              </div>
            </div>
            <div style="margin-top: 1rem">
              <label for="" class="d-block input-label">Password</label>
              <div class="d-flex w-100 div-input">
                <svg class="icon" style="margin-right: 1rem" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.81592 4.25974C7.12462 5.48872 7 6.95088 7 8H6C4.34315 8 3 9.34315 3 11V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V11C21 9.34315 19.6569 8 18 8L17 7.99998C17 6.95087 16.8754 5.48871 16.1841 4.25973C15.829 3.62845 15.3194 3.05012 14.6031 2.63486C13.8875 2.22005 13.021 2 12 2C10.979 2 10.1125 2.22005 9.39691 2.63486C8.68058 3.05012 8.17102 3.62845 7.81592 4.25974ZM9.55908 5.24026C9.12538 6.01128 9 7.04912 9 8H15C15 7.04911 14.8746 6.01129 14.4409 5.24027C14.2335 4.87155 13.9618 4.57488 13.6 4.36514C13.2375 4.15495 12.729 4 12 4C11.271 4 10.7625 4.15495 10.4 4.36514C10.0382 4.57488 9.76648 4.87155 9.55908 5.24026ZM14 14C14 14.7403 13.5978 15.3866 13 15.7324V17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17V15.7324C10.4022 15.3866 10 14.7403 10 14C10 12.8954 10.8954 12 12 12C13.1046 12 14 12.8954 14 14Z"
                    fill="#CACBCE" />
                </svg>
                <input class="input-field border-0" type="password" name="password" id="password-content-3-5"
                  placeholder="Your Password" minlength="6" required />
                  
                <div onclick="togglePassword()">
                  <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                      fill="#CACBCE" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end" style="margin-top: 0.75rem">
              <a href="#" class="forgot-password fst-italic">Forgot Password?</a>
            </div>
            <button class="btn btn-fill text-white d-block w-100" type="submit">
              Log In To My Account
            </button>
          </form>
          <p class="text-center bottom-caption">
            Dont have an account yet?
            <a href="{{ route('register') }}"><span class="green-bottom-caption">Register Here</span></a>
          </p>
          
        </div>
        
      </div>
      
    </div>
    
  </section>
  
  
  <footer>
    <svg viewBox="0 0 1440 252" xmlns="http://www.w3.org/2000/svg">
      <path d="M1062.12 76.6906C1255.72 1.49064 1389.45 60.3573 1432.12 99.1906C1459.32 76.3907 1536.45 124.024 1571.62 150.691L1597.62 304.691L45.6201 267.191C-0.879871 203.691 -65.9799 64.1906 45.6201 14.1906C185.12 -48.3094 347.62 113.691 606.62 150.691C865.62 187.691 820.12 170.691 1062.12 76.6906Z" fill="#B8DFD8"/>
      <path d="M1150.5 133.5C1257.3 65.5 1435 49.1667 1495 48V281.5L-54 298.5V150.5C71 65 236.5 59.5 424.5 116C612.5 172.5 1017 218.5 1150.5 133.5Z" fill="#C1CFC0"/>
    </svg>
  </footer>
 
  <script src="vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/navbar-scroll.js"></script>
  <script>
    function togglePassword() {
      var x = document.getElementById("password-content-3-5");
      if (x.type === "password") {
        x.type = "text";
        document
          .getElementById("icon-toggle")
          .setAttribute("fill", "#0195ff");
      } else {
        x.type = "password";
        document
          .getElementById("icon-toggle")
          .setAttribute("fill", "#CACBCE");
      }
    }
  </script>

</body>
</html>
