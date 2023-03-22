<!--head contents -->

@include('consumer.layouts.employee.head')

<!--head contents -->


<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" id="">
    <div class="nk-app-root">
        <div class="nk-main">
				<!--sidebar -->
			
				@include('consumer.layouts.employee.sidebar');
					<!--sidebar -->
  				<div class="nk-wrap">

  					<!-- Nav Bar -->
  					@include('consumer.layouts.employee.header')
  					<!-- Nav Bar -->

					<!-- Popup Messages -->
  					 @include('consumer.layouts.employee.flash-message');
  					<!-- Popup Messages -->

	

					<!-- @section('content')-->
  					@yield('content')
					<!-- @section('content')-->

  					<!--footer -->
  					@include('consumer.layouts.employee.footer') 
  					<!--footer -->

  				</div>

        </div>

	</div>

	<!-- Nav bar contents display -->
	@include('consumer.layouts.employee.notification')


	@include('consumer.layouts.employee.collapsecontent')
	<!-- Nav bar contents display -->

	<!--scripts / body/html End -->
	@include('consumer.layouts.employee.scripts')
	<!--scripts / body/html End -->


