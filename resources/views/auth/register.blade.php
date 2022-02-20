

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
				background-color: #FAFCFF;
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
            <li class="nav-item position-relative">
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
          <img src="images/ic-round.png" width="70" alt="">
        </div>
      </nav>

    </div>
  </section>

  <x-jet-validation-errors class="row justify-center text-center text-red-500 mt-4" />
      @if (session('status'))
          <div class="mb-4 font-medium text-sm" role="alert" >
              {{ session('status') }}
          </div>
      @endif

  <section class="section-page-register" style="padding-bottom: 50px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <form method="POST" action="{{ route('register') }}" class="mr-3">
            @csrf
            <div class="form-group mt-5">
             
              <label class="ml-4">
                <svg width="20" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.3125 8.9375C10.3125 12.3489 13.0886 15.125 16.5 15.125C19.9114 15.125 22.6875 12.3489 22.6875 8.9375C22.6875 5.52613 19.9114 2.75 16.5 2.75C13.0886 2.75 10.3125 5.52613 10.3125 8.9375ZM27.5 28.875H28.875V27.5C28.875 22.1939 24.5561 17.875 19.25 17.875H13.75C8.4425 17.875 4.125 22.1939 4.125 27.5V28.875H27.5Z" fill="#232323"/>
                </svg>
                Full Name
              </label>
                <input
                  type="text"
                  class="form-control mt-2"
                  aria-describedby="nameHelp"
                  name="name"
                  id="name"
                />
            </div>
            <div class="form-group mt-2">
              
              <label>
                <svg width="20" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.196 0H25.721C27.846 0 28.917 1.003 28.917 3.043V17.357C28.917 19.38 27.846 20.4 25.721 20.4H3.196C1.071 20.4 0 19.38 0 17.357V3.043C0 1.003 1.071 0 3.196 0ZM14.45 14.62L25.908 5.219C26.316 4.879 26.639 4.097 26.129 3.4C25.636 2.703 24.735 2.686 24.14 3.111L14.45 9.673L4.777 3.111C4.182 2.686 3.281 2.703 2.788 3.4C2.278 4.097 2.601 4.879 3.009 5.219L14.45 14.62Z" fill="#232323"/>
                </svg>
                Email
              </label>
                <input
                  type="text"
                  class="form-control mt-2"
                  aria-describedby="emailHelp"
                  name="email"
                  id="email"
                />
            </div>

            <div class="form-group mt-2">
              
              <label>
                <svg width="20" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.8667 16.8666H15.3334V15.3333H16.8667V16.8666Z" fill="#232323"/>
                  <path d="M12.2667 16.8666H13.8001V15.3333H12.2667V16.8666Z" fill="#232323"/>
                  <path d="M19.9334 16.8666H18.4V15.3333H19.9334V16.8666Z" fill="#232323"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6 9.2V5.36667C4.6 4.66191 4.73881 3.96405 5.00851 3.31293C5.27821 2.66182 5.67352 2.0702 6.17186 1.57186C6.6702 1.07352 7.26182 0.678213 7.91293 0.408513C8.56404 0.138813 9.2619 0 9.96667 0C10.6714 0 11.3693 0.138813 12.0204 0.408513C12.6715 0.678213 13.2631 1.07352 13.7615 1.57186C14.2598 2.0702 14.6551 2.66182 14.9248 3.31293C15.1945 3.96405 15.3333 4.66191 15.3333 5.36667V9.2H17.6333C18.2433 9.2 18.8283 9.44232 19.2597 9.87365C19.691 10.305 19.9333 10.89 19.9333 11.5V12.3433C20.7999 12.5193 21.579 12.9894 22.1386 13.6741C22.6981 14.3587 23.0038 15.2158 23.0038 16.1C23.0038 16.9842 22.6981 17.8413 22.1386 18.5259C21.579 19.2106 20.7999 19.6807 19.9333 19.8567V20.7C19.9333 21.31 19.691 21.895 19.2597 22.3263C18.8283 22.7577 18.2433 23 17.6333 23H2.3C1.69 23 1.10499 22.7577 0.673654 22.3263C0.242321 21.895 0 21.31 0 20.7L0 11.5C0 10.89 0.242321 10.305 0.673654 9.87365C1.10499 9.44232 1.69 9.2 2.3 9.2H4.6ZM6.13333 5.36667C6.13333 4.35 6.5372 3.37498 7.25609 2.65609C7.97498 1.9372 8.95 1.53333 9.96667 1.53333C10.9833 1.53333 11.9584 1.9372 12.6772 2.65609C13.3961 3.37498 13.8 4.35 13.8 5.36667V9.2H6.13333V5.36667ZM13.0333 13.8C12.4233 13.8 11.8383 14.0423 11.407 14.4737C10.9757 14.905 10.7333 15.49 10.7333 16.1C10.7333 16.71 10.9757 17.295 11.407 17.7263C11.8383 18.1577 12.4233 18.4 13.0333 18.4H19.1667C19.7767 18.4 20.3617 18.1577 20.793 17.7263C21.2243 17.295 21.4667 16.71 21.4667 16.1C21.4667 15.49 21.2243 14.905 20.793 14.4737C20.3617 14.0423 19.7767 13.8 19.1667 13.8H13.0333Z" fill="#232323"/>
                </svg>
                Password
              </label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control mt-2"                
                  
                />
            </div>

            <div class="form-group mt-2">
              
              <label>
                <svg width="20" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.8667 16.8666H15.3334V15.3333H16.8667V16.8666Z" fill="#232323"/>
                  <path d="M12.2667 16.8666H13.8001V15.3333H12.2667V16.8666Z" fill="#232323"/>
                  <path d="M19.9334 16.8666H18.4V15.3333H19.9334V16.8666Z" fill="#232323"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6 9.2V5.36667C4.6 4.66191 4.73881 3.96405 5.00851 3.31293C5.27821 2.66182 5.67352 2.0702 6.17186 1.57186C6.6702 1.07352 7.26182 0.678213 7.91293 0.408513C8.56404 0.138813 9.2619 0 9.96667 0C10.6714 0 11.3693 0.138813 12.0204 0.408513C12.6715 0.678213 13.2631 1.07352 13.7615 1.57186C14.2598 2.0702 14.6551 2.66182 14.9248 3.31293C15.1945 3.96405 15.3333 4.66191 15.3333 5.36667V9.2H17.6333C18.2433 9.2 18.8283 9.44232 19.2597 9.87365C19.691 10.305 19.9333 10.89 19.9333 11.5V12.3433C20.7999 12.5193 21.579 12.9894 22.1386 13.6741C22.6981 14.3587 23.0038 15.2158 23.0038 16.1C23.0038 16.9842 22.6981 17.8413 22.1386 18.5259C21.579 19.2106 20.7999 19.6807 19.9333 19.8567V20.7C19.9333 21.31 19.691 21.895 19.2597 22.3263C18.8283 22.7577 18.2433 23 17.6333 23H2.3C1.69 23 1.10499 22.7577 0.673654 22.3263C0.242321 21.895 0 21.31 0 20.7L0 11.5C0 10.89 0.242321 10.305 0.673654 9.87365C1.10499 9.44232 1.69 9.2 2.3 9.2H4.6ZM6.13333 5.36667C6.13333 4.35 6.5372 3.37498 7.25609 2.65609C7.97498 1.9372 8.95 1.53333 9.96667 1.53333C10.9833 1.53333 11.9584 1.9372 12.6772 2.65609C13.3961 3.37498 13.8 4.35 13.8 5.36667V9.2H6.13333V5.36667ZM13.0333 13.8C12.4233 13.8 11.8383 14.0423 11.407 14.4737C10.9757 14.905 10.7333 15.49 10.7333 16.1C10.7333 16.71 10.9757 17.295 11.407 17.7263C11.8383 18.1577 12.4233 18.4 13.0333 18.4H19.1667C19.7767 18.4 20.3617 18.1577 20.793 17.7263C21.2243 17.295 21.4667 16.71 21.4667 16.1C21.4667 15.49 21.2243 14.905 20.793 14.4737C20.3617 14.0423 19.7767 13.8 19.1667 13.8H13.0333Z" fill="#232323"/>
                </svg>
                Confirm Password
              </label>
                <input
                  type="password"
                  id="password_confirmation"
                  name="password_confirmation"
                  class="form-control mt-2"
                  
                />
            </div>

            <button type="submit" class="btn btn-register col-lg-12 col-12 btn-block text-white mt-4">
              Register
            </button>

            <p class="text-center  mt-3">
              Sudah Punya Akun?
              <a href="{{ route('login') }}"><span>Masuk disini</span></a>
            </p>

          </form>
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
  

</body>
</html>
