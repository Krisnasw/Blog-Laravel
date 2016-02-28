	<div class="sidebar" data-color="azure" data-image="{{ asset('assets/img/sidebar-4.jpg') }}">
    {{--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

     --}}

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="christiawan.me" class="simple-text">
                    {{-- Christiawan  --}}
                    <img src="{{ asset('assets/img/mylogo.png') }}" width="40%" alt="..."/>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('blog') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Blog</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('category') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('portfolio')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Portfolio</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Curiculum Vitae</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
