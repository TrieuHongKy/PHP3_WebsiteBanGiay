<header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">
                <div class="topbar-social">
                    <a href="https://www.facebook.com/ky111103"  target="_blank" class="topbar-social-item fa fa-facebook"></a>
                    <a href="https://www.instagram.com/trieu_hongky/"  target="_blank" class="topbar-social-item fa fa-instagram"></a>
                    <a href="https://www.pinterest.com/tttitttytttt/" target="_blank"  class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="https://www.youtube.com/channel/UCpc_URdeUnnzWo1Lcn9sspA"  target="_blank" class="topbar-social-item fa fa-youtube-play"></a>
                </div>

                <span class="topbar-child1">
					Miễn phí vận chuyển cho đơn hàng trên 300.000đ
				</span>

                <div class="topbar-child2">
					<span class="topbar-email">
						kythpc04340@fpt.edu.vn
					</span>
                </div>
            </div>

            <div class="wrap_header">
                <!-- Logo -->
                <a href="{{url('/')}}" class="logo">
                    <img src="/assets/images/icons/logo.png" style="max-height:200px;height:100px;width:198px" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        @if(Auth::check() && Auth::user()->userType === 'ADM')
                            <ul class="main_menu">
                                <li>
                                    <a href="{{url('/')}}">Trang chủ</a>
                                </li>

                                <li>
                                    <a href="/admin">Trang Quản trị</a>
                                </li>

                                <li>
                                    <a href="{{url('/product')}}">Sản phẩm</a>
                                </li>

                                <li>
                                    <a href="{{url('/about')}}">Giới thiệu</a>
                                </li>

                                <li>
                                    <a href="{{url('/contact')}}">Liên hệ</a>
                                </li>

                                <li>
                                    <a href="{{url('/post')}}">Bài viết</a>
                                </li>

                                <li>
                                    <a href="{{url('/cart')}}">Hóa đơn</a>
                                </li>
                            </ul>
                            @else
                            <ul class="main_menu">
                                <li>
                                    <a href="/">Trang chủ</a>
                                </li>

                                <li>
                                    <a href="{{url('/product')}}">Sản phẩm</a>
                                </li>

                                <li>
                                    <a href="{{url('/about')}}">Giới thiệu</a>
                                </li>

                                <li>
                                    <a href="{{url('/contact')}}">Liên hệ</a>
                                </li>

                                <li>
                                    <a href="{{url('/post')}}">Bài viết</a>
                                </li>

                                <li>
                                    <a href="{{url('/reciept')}}">Hóa đơn</a>
                                </li>
                            </ul>
                        @endif
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons">
                        <a href="{{url('/profile')}}" class="pr-4 header-wrapicon1 dis-block">
                            <img src="/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                        </a>
                    <a href="{{url('/cart')}}" class="header-wrapicon1 dis-block">
                        <img src="/assets/images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
                    </a>
                </div>
            </div>
        </div>
    </header>
