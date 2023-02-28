<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<title>Admin :: @yield('title') </title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
<meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin_assets/assets/vendor/fonts/boxicons.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_assets/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin_assets/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin_assets/assets/css/demo.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('admin_assets/assets/vendor/css/pages/page-auth.css') }}">
<script src="{{ asset('admin_assets/assets/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/config.js') }}"></script>
</head>
<body>
<div class="layout-wrapper layout-content-navbar  ">
<div class="layout-container">
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
<div class="app-brand demo ">
<a href="index.html" class="app-brand-link">
<span class="app-brand-logo demo">
</span>
<span class="app-brand-text demo menu-text fw-bolder ms-2">Career Clinic</span>
</a>

<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
<i class="bx bx-chevron-left bx-sm align-middle"></i>
</a>
</div>

<div class="menu-inner-shadow"></div>



<ul class="menu-inner py-1">

<!-- Dashboard -->
<!-- <li class="menu-item"> -->
  <li class="menu-item @yield('dashboard')">
<a href="{{ url('admin/dashboard') }}" class="menu-link">
<i class="menu-icon tf-icons bx bx-home-circle"></i>
<div data-i18n="Analytics">Dashboard</div>
</a>
</li>

<!-- Layouts -->
<li class="menu-item @yield('country')">
<a href="javascript:void(0);" class="menu-link menu-toggle">
<i class="menu-icon tf-icons bx bx-layout"></i>
<div data-i18n="Layouts">Manage Country</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a href="{{ url('admin/country') }}" class="menu-link">
<div data-i18n="Without menu">Manage Country</div>
</a>
</li>
</ul>
</li>

<li class="menu-item @yield('course')">
<a href="javascript:void(0);" class="menu-link menu-toggle">
<i class="menu-icon tf-icons bx bx-layout"></i>
<div data-i18n="Layouts">Manage Course</div>
</a>
<ul class="menu-sub">
<li class="menu-item">
<a href="{{ url('admin/course') }}" class="menu-link">
<div data-i18n="Without menu">Manage Course</div>
</a>
</li>
</ul>
</li>

<li class="menu-item @yield('university')">
  <a href="javascript:void(0);" class="menu-link menu-toggle">
  <i class="menu-icon tf-icons bx bx-layout"></i>
  <div data-i18n="Layouts">Manage University</div>
  </a>
  <ul class="menu-sub">
  <li class="menu-item">
  <a href="{{ url('admin/university') }}" class="menu-link">
  <div data-i18n="Without menu">Create University</div>
  </a>
  </li>
  <li class="menu-item">
  <a href="{{ url('admin/university/list') }}" class="menu-link">
  <div data-i18n="Without menu">Manage University</div>
  </a>
  </li>
  </ul>
  </li>



</ul>

</aside>
<!-- / Menu -->



<!-- Layout container -->
<div class="layout-page">
<!-- Content wrapper -->
<div class="content-wrapper">
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            Welcome Admin
            </a>
          </li>

          <li class="nav-item navbar-dropdown dropdown-user ">
            <!-- <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" title="logout" data-bs-toggle="dropdown"> -->
            <a class="nav-link" href="{{ url('admin/logout') }}" title="logout" >
            <i class='bx bx-power-off'></i>
            </a>
          </li>
        </ul>
      </div>
  </nav>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
@yield('content')
</div>
<!-- / Content -->




<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
<div class="mb-2 mb-md-0">
© <script>
document.write(new Date().getFullYear())
</script>
, Designed & Developed by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">Css Founder.com</a>
</div>
<div>
</div>
</div>
</footer>
<!-- / Footer -->


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
<script src="{{ asset('admin_assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin_assets/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('admin_assets/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin_assets/assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/main.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@yield('script')
</body>
</html>
