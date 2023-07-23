@extends('client.app')
@section('product')
    <!-- Content page -->
    <section  style="margin-top:120px"  class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            Loại sản phẩm
                        </h4>

                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="#" class="s-text13 active1">
                                    Tất cả
                                </a>
                            </li>
                            @foreach($product_cate as $cate)
                                <hr>
                                <li class="p-t-4">
                                    <a href="{{url('/product-category',[$cate->id])}}" class="s-text13 active1">
                                        {{$cate->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="filter-price p-t-22 p-b-50 bo3">
                            <div class="m-text15 p-b-17">
                                Giá
                            </div>

                            <div class="wra-filter-bar">
                                <div id="filter-bar"></div>
                            </div>

                            <div class="flex-sb-m flex-w p-t-16">
                                <div class="w-size11">
                                    <!-- Button -->
                                    <button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                        Lọc
                                    </button>
                                </div>

                                <div class="s-text3 p-t-10 p-b-10">
                                    Từ: 100.000<span id="value-lower">đ</span> - 300.000<span id="value-upper">đ</span>
                                </div>
                            </div>
                        </div>

                        <div class="search-product pos-relative bo4 of-hidden">
                            <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Tìm kiếm sản phẩm...">

                            <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                                <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                <select class="selection-2" name="sorting">
                                    <option>Mặc định phân loại</option>
                                    <option>Phổ biến nhất</option>
                                    <option>Giá: Thấp đến cao</option>
                                    <option>Giá: Cao đến thấp</option>
                                </select>
                            </div>

                            <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                <select class="selection-2" name="sorting">
                                    <option>Giá</option>
                                    <option>Dưới 200.000đ</option>
                                    <option>200.000đ - 500.000đ</option>
                                    <option>Trên 500.000đ</option>

                                </select>
                            </div>
                        </div>

                        <span class="s-text8 p-t-5 p-b-5">
							Hiển thị 1–12 trên 16 kết quả
						</span>
                    </div>

                    <!-- Product -->

                        <div class="row">
                            @foreach($product as $prod)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img class="w-[300px] h-[300px] " src="storage/{{$prod->image}}" alt="IMG-PRODUCT">

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
                                        <a href="{{url('/product-detail',[$prod->slug])}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$prod->name}}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
										 {{$prod->price}} VND
									    </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        {{ $product->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection