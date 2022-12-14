<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
        </div>
        <div class="header-right">
            <ul class="clearfix">
                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{ asset('quixlab/images/user/form-user.png') }}" height="40" width="40"
                            alt="">
                    </div>
                    <div class="drop-down dropdown-profile dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{ route('profile') }}"><i class="icon-user"></i>
                                        <span>Profile</span></a>
                                </li>
                                <hr class="my-2">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <li>
                                        <button type="submit" class="icon-key btn btn-danger btn-block btn-sm">
                                            <span>Keluar</span>
                                        </button>
                                    </li>
                                </form>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
