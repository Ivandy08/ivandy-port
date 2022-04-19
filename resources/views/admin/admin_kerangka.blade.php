<!DOCTYPE html>
<html lang="en">
 @include('admin/admin_layouts/admin_header')
  <body>
    <div class="container-scroller">
     @include('admin/admin_layouts/admin_sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      @include('admin/admin_layouts/admin_navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
         @include('admin/admin_layouts/admin_footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin/admin_layouts/admin_js')
  </body>
</html>