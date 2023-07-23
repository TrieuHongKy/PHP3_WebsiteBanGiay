@extends('client.app')
@section('post')
    <!-- content page -->
    <section style="margin-top:120px" class="bgwhite p-t-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-75">
                    <div class="p-r-50 p-r-0-lg">
                        <!-- item blog -->
                        @foreach($post as $p)
                            <div class="item-blog p-b-80">
                                <a href="{{url('/post-detail',[$p->slug])}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
                                    <img src="storage/{{$p->image}}" alt="IMG-BLOG">

                                    <span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									{{$p->date}}
								</span>
                                </a>

                                <div class="item-blog-txt p-t-33">
                                    <h4 class="p-b-11">
                                        <a href="{{url('/post-detail',[$p->slug])}}" class="m-text24">
                                            {{$p->title}}
                                        </a>
                                    </h4>

                                    <div class="s-text8 flex-w flex-m p-b-21">
									<span>
										Bởi {{$p->author->name}}
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                        <span>
										{{$p->category->name}}
										<span class="m-l-3 m-r-6">|</span>
									</span>
                                    </div>

                                    <p class="p-b-12">
                                        {{$p->content}}
                                    </p>

                                    <a href="{{url('/post-detail',[$p->slug])}}" class="s-text20">
                                        Đọc thêm
                                        <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-r-50">
                        {{ $post->links() }}
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 p-b-75">
                    <div class="rightbar">
                        <!-- Search -->
                        <div class="pos-relative bo11 of-hidden">
                            <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Tìm kiếm...">

                            <button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                                <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>

                        <!-- Categories -->
                        <h4 class="m-text23 p-t-56 p-b-34">
                            Thể loại </h4>

                        <ul>
                            @foreach($post_cate as $cate)
                                <li class="p-t-6 p-b-8 bo6">
                                    <a href="#" class="s-text13 p-t-5 p-b-5">
                                        {{$cate->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Featured Products -->
                        <h4 class="m-text23 p-t-65 p-b-34">
                            Sản phẩm nổi bật </h4>

                        <ul class="bgwhite">
                            @foreach($featuredProducts as $prod)
                                <li class="flex-w p-b-20">
                                    <a href="{{url('/product-detail',[$prod->id])}}" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                        <img style="height:100px" src="/storage/{{$prod->image}}" alt="IMG-PRODUCT">
                                    </a>

                                    <div class="w-size23 p-t-5">
                                        <a href="{{url('/product-detail',[$prod->id])}}" class="s-text20">
                                            {{$prod->name}}
                                        </a>

                                        <span class="dis-block s-text17 p-t-6">
										{{$prod->price}}
									</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Archive -->
                        <h4 class="m-text23 p-t-50 p-b-16">
                            Kho lưu trữ </h4>

                        <ul>
                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 9 2018
                                </a>

                                <span class="s-text13">
									(9)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 10 2018
                                </a>

                                <span class="s-text13">
									(39)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 12 2018
                                </a>

                                <span class="s-text13">
									(29)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 4 2018
                                </a>

                                <span class="s-text13">
									(35)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 1 2018
                                </a>

                                <span class="s-text13">
									(22)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 3 2018
                                </a>

                                <span class="s-text13">
									(32)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 6 2018
                                </a>

                                <span class="s-text13">
									(21)
								</span>
                            </li>

                            <li class="flex-sb-m">
                                <a href="#" class="s-text13 p-t-5 p-b-5">
                                    Tháng 11 2017
                                </a>

                                <span class="s-text13">
									(26)
								</span>
                            </li>
                        </ul>

                        <!-- Tags -->
                        <h4 class="m-text23 p-t-50 p-b-25">
                            Thẻ </h4>

                        <div class="wrap-tags flex-w">
                            <a href="#" class="tag-item">
                                Thời trang
                            </a>

                            <a href="#" class="tag-item">
                                Cuộc sống
                            </a>

                            <a href="#" class="tag-item">
                                Vải Jean
                            </a>

                            <a href="#" class="tag-item">
                                Phong cách đường phố
                            </a>

                            <a href="#" class="tag-item">
                                Thủ công
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection