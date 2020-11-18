<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Talibs Institute Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  @include('admin.partials.css')

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="app" class="wrapper">

   @include('admin.partials.sidebar')

       <router-view> </router-view>
       <router-link to="/backend/admin/dashboard"> Dashboard </router-link>

    {{-- @include('admin.partials.footer') --}}

  <div class="{{ asset('control-sidebar-bg') }}"></div>
</div>
<!-- ./wrapper -->

 @include('admin.partials.js')
<script src="{{ asset('/js/app.js') }}"> </script>
</body>
</html>

