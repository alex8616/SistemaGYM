<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>GYM</title>

    <meta name="description" content="" />
    <link href={{ asset('dashboard/dist/img/favicon/favicon.ico') }} rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />
    <link href={{ asset('dashboard/dist/vendor/fonts/iconify-icons.css') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/css/core.css') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/css/demo.css') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/libs/apex-charts/apex-charts.css') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/js/helpers.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/js/config.js') }} rel="stylesheet"/>

  </head>

  @php
    function userInitials($name) {
      $words = explode(' ', $name);
      return strtoupper(substr($words[0], 0, 1) . (isset($words[1]) ? substr($words[1], 0, 1) : ''));
    }
  @endphp

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme collapsed">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                  
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">GYM</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item" data-id="dashboards">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Perfiles</div>
                </a>
                <ul class="menu-sub">
                <li class="menu-item" class="menu-link">
                    @if(Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="rounded-circle" width="40" height="40">
                    @else
                        <a href="{{ route('cliente.perfil') }}" class="menu-link">
                            <div class="text-truncate" data-i18n="Analytics">{{ userInitials(Auth::user()->name) }} - {{ Auth::user()->name }}</div>
                        </a>
                    @endif                    
                </li>
                </ul>
            </li>

            <li class="menu-item active open" data-id="dashboards">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item active" class="menu-link">
                    <a href="{{ route('cliente.principal') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Analytics">Principal</div>
                    </a>
                </li>
                <li class="menu-item active" class="menu-link">
                    <a href="{{ route('cliente.horario') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Analytics">Horarios</div>
                    </a>
                </li>
                 <li class="menu-item active" class="menu-link">
                    <a href="{{ route('cliente.horario') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Analytics">Inscripciones</div>
                    </a>
                </li>
                 <li class="menu-item active" class="menu-link">
                    <a href="{{ route('cliente.horario') }}" class="menu-link">
                        <div class="text-truncate" data-i18n="Analytics">Pagos</div>
                    </a>
                </li>
              </ul>
            </li>


            <li class="menu-item" data-id="dashboards">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Otros</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item" class="menu-link">
                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-academy-dashboard.html"
                    target="_blank"
                    class="menu-link">
                    <div class="text-truncate" data-i18n="Academy">Contacto</div>
                    <div class="badge rounded-pill bg-label-primary text-uppercase fs-tiny ms-auto">Pro</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Apps &amp; Pages</span>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="icon-base bx bx-menu icon-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center me-auto">
                <div class="nav-item d-flex align-items-center">
                  <span class="w-px-22 h-px-22"><i class="icon-base bx bx-search icon-md"></i></span>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User Menu -->
               <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle d-flex align-items-center p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    @if(Auth::user()->avatar)
      <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="rounded-circle" width="40" height="40">
    @else
      <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; font-weight: bold;">
        {{ userInitials(Auth::user()->name) }}
      </div>
    @endif
  </a>
  <ul class="dropdown-menu dropdown-menu-end shadow-sm">
    <li class="px-3 py-2">
      <div class="d-flex align-items-center">
        @if(Auth::user()->avatar)
          <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="rounded-circle me-2" width="40" height="40">
        @else
          <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center me-2" style="width: 40px; height: 40px; font-weight: bold;">
            {{ userInitials(Auth::user()->name) }}
          </div>
        @endif
        <div>
          <h6 class="mb-0">{{ Auth::user()->name }}</h6>
          <small class="text-muted">{{ Auth::user()->role ?? 'User' }}</small>
        </div>
      </div>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#"><i class="bx bx-user me-2"></i> Mi perfil</a></li>
    <li><a class="dropdown-item" href="#"><i class="bx bx-cog me-2"></i> Configuración</a></li>
    <li><hr class="dropdown-divider"></li>
    <li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="dropdown-item text-danger">
          <i class="bx bx-power-off me-2"></i> Cerrar sesión
        </button>
      </form>
    </li>
  </ul>
</li>

                <!-- /User Menu -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="page-body" style="width: 100%; background: white; padding: 1%">
                    <main>
                        @yield('content')                
                    </main>
                </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <style>
    .menu-sub {
        display: none;
    }
    .menu-item.open > .menu-sub {
        display: block;
    }
    </style>

    <link href={{ asset('dashboard/dist/vendor/libs/jquery/jquery.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/libs/popper/popper.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/js/bootstrap.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/js/menu.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/vendor/libs/apex-charts/apexcharts.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/js/main.js') }} rel="stylesheet"/>
    <link href={{ asset('dashboard/dist/js/dashboards-analytics.js') }} rel="stylesheet"/>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuItems = document.querySelectorAll('.menu-item.menu-toggle, .menu-item > .menu-link.menu-toggle');

            // Restaurar estado desde localStorage
            document.querySelectorAll('.menu-item[data-id]').forEach(item => {
            const id = item.dataset.id;
            if (localStorage.getItem(`menu-${id}`) === 'open') {
                item.classList.add('open');
            }
            });

            // Toggle dinámico con guardar en localStorage
            document.querySelectorAll('.menu-item[data-id] > .menu-link.menu-toggle').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const item = link.closest('.menu-item');
                const id = item.dataset.id;
                item.classList.toggle('open');
                const isOpen = item.classList.contains('open');
                localStorage.setItem(`menu-${id}`, isOpen ? 'open' : 'closed');
            });
            });
        });
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
