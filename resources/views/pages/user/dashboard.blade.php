@extends('layouts.admin')
@section('title')
    Dashboard User | Progress Learning
@endsection
@section('sub-title')
  Progress Learning
@endsection
@section('content')
  <!-- Content Row -->
  <div class="row">
      <!-- Area Chart -->
      <div class="col-xl-12">
          <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My Superpower</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                          aria-labelledby="dropdownMenuLink">
                          <div class="dropdown-header">Dropdown Header:</div>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                  </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                  <div class="">
                      <canvas id="chart"></canvas>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
@push('prepend-script')
    <script src="/dist/vendor/jquery/jquery.min.js"></script>
    <script src="/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/dist/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/dist/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="/dist/vendor/chart.js/Chart.min.js"></script>
		
		<script>
			var ctx = document.getElementById('chart').getContext('2d');
			var myChart = new Chart(ctx, {
					type: 'radar',
					data: {
						labels: [
							'Eating',
							'Drinking',
							'Sleeping',
							'Designing',
							'Coding',
							'Cycling',
							'Running',
							'Kontol',
						],
						datasets: [{
							label: 'My Skills',
							data: [28, 48, 40, 19, 96, 27, 100],
							fill: true,
							backgroundColor: 'rgba(54, 162, 235, 0.2)',
							borderColor: 'rgb(54, 162, 235)',
							pointBackgroundColor: 'rgb(54, 162, 235)',
							pointBorderColor: '#fff',
							pointHoverBackgroundColor: '#fff',
							pointHoverBorderColor: 'rgb(54, 162, 235)'
						}]
					},
					options: {
						elements: {
							line: {
								borderWidth: 3
							}
						}
					},
			});
			</script>
@endpush