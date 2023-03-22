<!--head contents -->

@include('employee.layouts.head')

<!--head contents -->


<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" id="">
    <div class="nk-app-root">
        <div class="nk-main">
				<!--sidebar -->
			
				@include('dftqc.partials.sidebar');
					<!--sidebar -->
  				<div class="nk-wrap">

  					<!-- Nav Bar -->
  					@include('employee.layouts.header')
  					<!-- Nav Bar -->

					<!-- Popup Messages -->
  					 @include('employee.layouts.flash-message');
  					<!-- Popup Messages -->

	

					<!-- @section('content')-->
  					@yield('content')
					<!-- @section('content')-->

  					<!--footer -->
  					@include('employee.layouts.footer')
  					<!--footer -->

  				</div>

        </div>

	</div>

	<!-- Nav bar contents display -->
	@include('employee.layouts.notification')

	@include('employee.layouts.timer')

	@include('employee.layouts.collapsecontent')
	<!-- Nav bar contents display -->

	<!--scripts / body/html End -->
	@include('employee.layouts.scripts')
	<!--scripts / body/html End -->


