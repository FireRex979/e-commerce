<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('judul')</title>
	<link rel="stylesheet" href="{{ asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css') }}">
  	<!-- endinject -->
  	<!-- inject:css -->
  	<link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
  	<!-- endinject -->
  	<link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.png') }}" />
</head>
<body>
@yield('content')
  <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/admin/js/template.js') }}"></script>
</body>
</html>