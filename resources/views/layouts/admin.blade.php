<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.head')
<body data-sidebar="dark">
	<!-- Begin page -->
    <div id="layout-wrapper">
	    @include('admin.partials.topbar')
	    @include('admin.partials.left-sidebar')
	        <!-- Start main Content -->
	        <div class="main-content">    
		        @yield('content')
		        @include('admin.partials.footer')
	        </div>
            <!-- end main content-->
    </div>
    @include('admin.partials.right-sidebar')
        <!-- END layout-wrapper -->
    @include('admin.partials.script')
</body>
</html>
