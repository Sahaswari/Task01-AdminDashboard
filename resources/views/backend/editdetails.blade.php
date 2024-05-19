<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Dashboard</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('../assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('../assets/vendors/flatpickr/flatpickr.min.css') }}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('../assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
	@include('admin.slidebar')
   
		<!-- partial -->
	
		<div class="page-wrapper">
					
		@include('admin.adminheader')
  
    <div class="page-content">

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Edit Project Details</h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
  
  </div>
</div>




<div class="row">
<div class="container">
  <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
              <h6 class="card-title">Basic Edit Form</h6>
								<form method='POST' action="{{route('editData')}}" class="forms-sample">
                  @csrf
                  <input type="hidden" name="id" value="{{$projects->project_id}}">
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Project Name</label>
										<input type="text" class="form-control" value="{{$projects->project_name}}" name="InputProjectName" autocomplete="off" placeholder="Project Name">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Project Type</label>
										<input type="text" class="form-control" value="{{$projects->project_type}}" name="InputProjectType" placeholder="Project Name">
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Assign Name</label>
										<input type="text" class="form-control" value="{{$projects->assign_name}}" name="InputAssignName" autocomplete="off" placeholder="Assign Name">
									</div>
                  <div class="mb-3">
									<label class="form-label">Type the status</label>
									<input type="text" class="form-control" value="{{$projects->status}}" name="Status" autocomplete="off" placeholder="Status">
								</div>
									<button type="submit" class="btn btn-primary me-2">Update</button>
									<button type="reset"  class="btn btn-secondary">Cancel</button>
								</form>

              </div>
            </div>
					</div>
</div> <!-- row -->

</div>















</div>
    
    



	
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('../assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('../assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('../assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('../assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('../assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->

</body>
</html>    