
@include('Admin.Includes.header')
@include('Admin.Includes.sidebar')

		<div class="content">
            <div class="container-fluid">
                <div class="row">
										@yield('content')
                </div>
            </div>
        </div>

@include('Admin.Includes.footer')
