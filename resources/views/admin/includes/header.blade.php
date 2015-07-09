<div class="row">
    <div class="col-md-12">        
        <nav class="nav navbar-default navbar-fixed-top mynavbar">
            <div class="container">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">Welcome to Dashboard </a>
                    <!-- responsive mentu main button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mymenu" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mymenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Dashboard</a></li>
                        <li>
                            <a href="{{ route('dashboard::category') }}">Categories</a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard::post') }}">Posts</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">User
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#mobile">Profile</a></li>
                                <li><a href="#web">Setting</a></li>
                                <li><a href="#desktop">Log out</a></li>
                            </ul>
                        </li>
                    </ul>               
                </div>
            </div>
        </nav>
    </div>
</div>

