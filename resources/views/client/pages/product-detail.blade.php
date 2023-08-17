@extends('client.app')
@section('product-detail')
    <!-- breadcrumb -->
    <div style="margin-top:140px" class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="{{url('/')}}" class="s-text16">
            Trang chủ
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="product.html" class="s-text16">
            Nữ
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="#" class="s-text16">
            Giày da
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
			Giày
		</span>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            @foreach($product as $prod)
                <div class="w-size13 p-t-30 respon5">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>

                        <div class="slick3">
                            <div class="item-slick3" data-thumb="/storage/{{$prod->image}}">
                                <div class="wrap-pic-w">
                                    <img src="/storage/{{$prod->image}}" alt="IMG-PRODUCT">
                                </div>
                            </div>

                            <div class="item-slick3" data-thumb="/storage/{{$prod->image}}">
                                <div class="wrap-pic-w">
                                    <img src="/storage/{{$prod->image}}" alt="IMG-PRODUCT">
                                </div>
                            </div>

                            <div class="item-slick3" data-thumb="/storage/{{$prod->image}}">
                                <div class="wrap-pic-w">
                                    <img src="/storage/{{$prod->image}}" alt="IMG-PRODUCT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-size14 p-t-30 respon5">
                    <h4 style="font-weight:700" class="product-detail-name m-text5 p-b-13">
                        {{$prod->name}}
                    </h4>

                    <span style="font-size:20px" class="m-text17">
					{{ number_format($prod->price, 0, '.', ',')}} VND
				</span>

                    <p class="s-text8 p-t-10">
                        {{$prod->description}}
                    </p>

                    <!--  -->
                    <div class="p-t-33 p-b-60">
                        <div class="flex-m flex-w p-b-10">
                            <div class="s-text15 w-size15 t-center">
                                Kích thước
                            </div>

                            <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                                <select class="selection-2" name="size">
                                    <option>Chọn kích thước giày</option>
                                    <option>Kích cỡ S</option>
                                    <option>Kích cỡ M</option>
                                    <option>Kích cỡ L</option>
                                    <option>Kích cỡ XL</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-m flex-w">
                            <div class="s-text15 w-size15 t-center">
                                Màu
                            </div>

                            <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                                <select class="selection-2" name="color">
                                    <option>Chọn màu giày</option>
                                    <option>Đen</option>
                                    <option>Đỏ</option>
                                    <option>Xám</option>
                                    <option>Trắng</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-r-m flex-w p-t-10">
                            <div class="w-size16 flex-m flex-w">
                                <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                    </button>

                                    <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                        <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <form action="{{url('/addCart')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                        <!-- Button -->
                                        <input name="price" type="hidden" value="{{$prod->price}}">
                                        <input name="product_id" type="hidden" value="{{$prod->id}}">
                                        <input name="product_name" type="hidden" value="{{$prod->name}}">
                                        <input name="image" type="hidden" value="{{$prod->image}}">
                                        <input name="quantity" type="hidden" value="1">
                                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-b-45">
                        <span class="s-text8 m-r-35">Mã SP: SP-0{{$prod->id}}</span>
                        <span class="s-text8">Loại: Giày Nike, Hàng hiệu</span>
                    </div>

                    <!--  -->
                    <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                            Mô tả
                            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                        </h5>

                        <div class="dropdown-content dis-none p-t-15 p-b-23">
                            <p class="s-text8">
                                Được làm từ da thủ công do các thợ hành ngày lâu năm gia công, mang đến chất lượng tốt nhất cho khách hàng và người sử dụng, mặc dù giá khá cao nhưng Nike SB Dunk sẽ không làm bạn thất vọng </p>
                        </div>
                    </div>

                    <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                            Thông tin thêm
                            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                        </h5>

                        <div class="dropdown-content dis-none p-t-15 p-b-23">
                            <p class="s-text8">
                                Bây giờ anh cần một nụ cười nhưng anh tự tâng bốc để tô điểm cho nó hay anh muốn. Đối với những người chơi cung đang mang thai, một đôi giày đàng hoàng </p>
                        </div>
                    </div>

                    <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                            Đánh giá (0)
                            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                        </h5>

                        <div class="dropdown-content dis-none p-t-15 p-b-23">
                            <p class="s-text8">
                                Không có đánh giá nào </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Sản phẩm liên quan </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div style="height:429px" class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img src="/assets/images/item-nb2.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Nike SB Dunk
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									7.200.000đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div style="height:429px" class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="/assets/images/item-nb3.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Giày Ecco Citytray Da Nâu
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img style="height:429px" src="/assets/images/item-nb5.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Túi xách nữ cao cấp Elly ET79
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                <img style="height:429px" src="/assets/images/item-nb7.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Kính mát Rayban Wayfater
                                </a>

                                <span class="block2-oldprice m-text7 p-r-5">
									7.100.000 đ
								</span>

                                <span class="block2-newprice m-text8 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <img style="height:429px" src="/assets/images/item-nb2.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Nike SB Dunk
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img style="height:429px" src="/assets/images/item-nb3.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Giày Ecco Citytray Da Nâu
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img style="height:429px" src="/assets/images/item-nb5.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Túi xách nữ cao cấp Elly
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                <img style="height:429px" src="/assets/images/item-nb7.jpg" alt="IMG-PRODUCT">

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
                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                    Kính mát Rayban Wayfater
                                </a>

                                <span class="block2-oldprice m-text7 p-r-5">
									7.100.000 đ
								</span>

                                <span class="block2-newprice m-text8 p-r-5">
									7.100.000 đ
								</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection