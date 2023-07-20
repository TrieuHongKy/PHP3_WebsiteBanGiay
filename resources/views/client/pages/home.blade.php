@extends('client.app')
@section ('home')
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(/assets/images/master-slide-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Bộ sưu tập nam 2023
						</span>

                        <h2 class="font-poppins font-bold caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Sản phẩm mới nhất
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="{{url('/product')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(/assets/images/master-slide-02.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Bộ sưu tập nam 2023
						</span>

                        <h2 class="font-poppins font-bold caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                            Sản phẩm mới nhất
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                            <a href="{{url('/product')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(/assets/images/master-slide-03.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Bộ sưu tập nam 2023
						</span>

                        <h2 class="font-poppins font-bold caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                            Sản phẩm mới nhất
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="{{url('/product')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua Ngay
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="/assets/images/banner-vay.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Váy, đầm
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="/assets/images/banner-kinh.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Kính râm
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="/assets/images/banner-xem.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Xem
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="/assets/images/banner-giay.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Giày, dép
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src="/assets/images/banner-bag.jpg" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                Túi
                            </a>
                        </div>
                    </div>

                    <!-- block2 -->
                    <div class="block2 wrap-pic-w pos-relative m-b-30">
                        <img src="/assets/images/icons/bg-01.jpg" alt="IMG">

                        <div class="block2-content sizefull ab-t-l flex-col-c-m">
                            <h4 class="m-text4 t-center w-size3 p-b-8">
                                Đăng ký và nhận ngay ưu đãi 20%
                            </h4>

                            <p class="t-center w-size4">
                                Hãy là người đầu tiên biết về những tin tức thời trang mới nhất và nhận ưu đãi độc quyền
                            </p>

                            <div class="w-size2 p-t-25">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    Đăng ký
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Sản phẩm nổi bật
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

                    @foreach($featuredProducts as $prod)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img style="height:300px" src="/storage/{{$prod->image}}" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="{{url('/product-detail',[$prod->id])}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$prod->name}}
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
									{{$prod->price}}đ
								</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- Banner2 -->
    <section class="banner2 bg5 p-t-55 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="hov-img-zoom pos-relative">
                        <img src="/assets/images/banner-bst2.jpg" alt="IMG-BANNER">

                        <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Bộ sưu tập
							</span>

                            <h3 class="l-text1 fs-35-sm">
                                Sắc đẹp
                            </h3>

                            <a href="#" class="s-text4 hov2 p-t-20 ">
                                Xem bộ sưu tập
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
                        <img src="/assets/images/banner-bst1.jpg" alt="IMG-BANNER">

                        <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
{{--                            <div class="t-center">--}}
{{--                                <a href="{{url('/product-detail')}}" class="dis-block s-text3 p-b-5">--}}
{{--                                    Giày Tây--}}
{{--                                </a>--}}

{{--                                <span class="block2-oldprice m-text7 p-r-5">--}}
{{--									$29.50--}}
{{--								</span>--}}

{{--                                <span class="block2-newprice m-text8">--}}
{{--									$15.90--}}
{{--								</span>--}}
{{--                            </div>--}}

                            <div class="flex-c-m p-t-44 p-t-30-xl">
                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

                                    <span class="s-text5">
										ngày
									</span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										04
									</span>

                                    <span class="s-text5">
										giờ
									</span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										32
									</span>

                                    <span class="s-text5">
										phút
									</span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

                                    <span class="s-text5">
										giây
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="sec-title p-b-52">
                <h3 class="m-text5 t-center">
                   Bài viết của chúng tôi
                </h3>
            </div>

            <div class="row">
                @foreach($getPost as $post)
                    <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                        <!-- Block3 -->
                        <div class="block3">
                            <a href="{{url('/post-detail',[$post->id])}}" class="block3-img dis-block hov-img-zoom">
                                <img style="width:400px;height:400px" src="/storage/{{$post->image}}" alt="IMG-BLOG">
                            </a>

                            <div class="block3-txt p-t-14">
                                <h4 class="p-b-7">
                                    <a href="{{url('/post-detail',[$post->id])}}" class="m-text11">
                                        {{$post->title}}
                                    </a>
                                </h4>

                                <span class="s-text6">By</span> <span class="s-text7">{{$post->author}}</span>
                                <span class="s-text6">on</span> <span class="s-text7">{{$post->date}}</span>

                                <p class="s-text8 p-t-16">
                                    {{$post->content}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Instagram -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                @ THEO DÕI CHÚNG TÔI TRÊN INSTAGRAM
            </h3>
        </div>

        <div class="flex-w">
            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img style="height:252px" src="/assets/images/ins1.avif" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                           Không có sô cô la, mà là kết quả của laoreet, bởi vì con sư tử bị bắn tên, và tôi sống từ một nơi nào đó trên thế giới. Không có cách nào để trang trí khu đất, và hồ sinh thái. Điều quan trọng đối với phòng khám. Vì anh ấy cần sự sợ hãi.
                        </p>

                        <span class="s-text9">
							Photo by Trieu Hong Ky
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img style="height:252px" src="/assets/images/ins2.avif" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                           Không có sô cô la, mà là kết quả của laoreet, bởi vì con sư tử bị bắn tên, và tôi sống từ một nơi nào đó trên thế giới. Không có cách nào để trang trí khu đất, và hồ sinh thái. Điều quan trọng đối với phòng khám. Vì anh ấy cần sự sợ hãi.
                        </p>

                        <span class="s-text9">
							Photo by Trieu Hong Ky
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img style="height:252px" src="/assets/images/ins3.avif" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                           Không có sô cô la, mà là kết quả của laoreet, bởi vì con sư tử bị bắn tên, và tôi sống từ một nơi nào đó trên thế giới. Không có cách nào để trang trí khu đất, và hồ sinh thái. Điều quan trọng đối với phòng khám. Vì anh ấy cần sự sợ hãi.
                        </p>

                        <span class="s-text9">
							Photo by Trieu Hong Ky
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img style="height:252px" src="/assets/images/ins4.avif" alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                           Không có sô cô la, mà là kết quả của laoreet, bởi vì con sư tử bị bắn tên, và tôi sống từ một nơi nào đó trên thế giới. Không có cách nào để trang trí khu đất, và hồ sinh thái. Điều quan trọng đối với phòng khám. Vì anh ấy cần sự sợ hãi.
                        </p>

                        <span class="s-text9">
							Photo by Trieu Hong Ky
						</span>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Giao hàng miễn phí trên toàn thế giới
                </h4>

                <a href="#" class="s-text11 t-center">
                    Bấm vào để biết thêm chi tiết
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    30 ngày trở lại
                </h4>

                <span class="s-text11 t-center">
					Miễn phí hoàn trả nếu có lỗi hoặc sự cố trong 30 ngày
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Khai trương cửa hàng
                </h4>

                <span class="s-text11 t-center">
                    Cửa hàng hoạt động 8:00 - 21:00 từ thứ 2 đến chủ nhật
				</span>
            </div>
        </div>
    </section>

@endsection