<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/stylesheet.css') }}">
  
  </head>

  <body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
      <!-- ! Sidebar -->
      @include('partial.sidebar')
      
      <div class="main-wrapper">
        <!-- ! Main nav -->
       @include('partial.nav')
        <!-- ! Main -->
        <main class="main users chart-page" id="skip-target">
          <div class="container">
            <h2 class="main-title">Dashboard</h2>
           
            <div class="row">
                <div class="col-lg-12">
                <div class="users-table table-wrapper">
                  {{-- isi --}}
                </div>
              </div>
             
            </div>
          </div>
        </main>
        <!-- ! Footer -->
        <footer class="footer">
          <div class="container footer--flex">
            <div class="footer-start">
              <p>
                2021 © Elegant Dashboard -
                <a
                  href="elegant-dashboard.com"
                  target="_blank"
                  rel="noopener noreferrer"
                  >elegant-dashboard.com</a
                >
              </p>
            </div>
            <ul class="footer-end">
              <li><a href="##">About</a></li>
              <li><a href="##">Support</a></li>
              <li><a href="##">Puchase</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </div>
    <!-- Chart library -->
    <script src="{{ asset('assets/plugins/chart.min.js') }}"></script>
    <!-- Icons library -->
    <script src="{{ asset('assets/plugins/feather.min.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>
