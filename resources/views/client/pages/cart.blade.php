@extends('client.app')
@section('cart')

    <!-- Cart -->
    <section style="margin-top:120px" class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            @if($cartItems->isEmpty())
                <p>Không có sản phẩm trong giỏ hàng.</p>
            @else
                <div class="container-table-cart pos-relative">
                    <div class="wrap-table-shopping-cart bgwhite">
                        <table class="table-shopping-cart">
                            <tr class="table-head">
                                <th class="column-1"></th>
                                <th class="column-2">Sản phẩm</th>
                                <th class="column-3">Giá</th>
                                <th class="column-4 p-l-70">Số lượng</th>
                                <th class="column-5">Tổng cộng</th>
                            </tr>

                            @foreach($cartItems as $d)
                                <tr class="table-row">
                                    <td class="column-1">
                                        <div class="cart-img-product b-rad-4 o-f-hidden">
                                            <img src="/storage/{{$d->product->image}}" alt="IMG-PRODUCT">
                                        </div>
                                    </td>
                                    <td class="column-2">{{$d->product->name}}</td>
                                    <td class="column-3">{{ number_format($d->product->price, 0, '.', ',')}}</td>
                                    <td class="column-4">
                                        <div class="flex-w bo5 of-hidden w-size17">
                                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                            </button>

                                            <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{$d->quantity}}">

                                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="column-5">{{ number_format($d->total, 0, '.', ',')}}</td>
                                    <td class="column-6">
                                        <form method="post" action="{{url('deleteCart',[$d->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background-color: #f44336;color: #fff;border: none;padding: 5px 10px;border-radius: 4px;font-size: 16px;cursor: pointer;" class="delete-button">
                                                <span class="delete-icon">&#10006;</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>

                <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                    <div class="flex-w flex-m w-full-sm">
                        <div class="size11 bo4 m-r-10">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Mã giảm giá">
                        </div>

                        <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                            <!-- Button -->
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Áp dụng phiếu giảm giá
                            </button>
                        </div>
                    </div>

                    <div class="size10 trans-0-4 m-t-10 m-b-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Cập nhật giỏ hàng
                        </button>
                    </div>
                </div>

                <!-- Total -->
            <form action="{{ url('addReceipt') }}" method="POST">
                <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                    <h5 class="m-text20 p-b-24">
                        Tổng số giỏ hàng
                    </h5>

                        <!--  -->
                    <div class="flex-w flex-sb-m p-b-12">
                        <span class="s-text18 w-size19 w-full-sm">
                            Tổng thu:
                        </span>

                        <span class="m-text21 w-size20 w-full-sm">
                            {{ number_format($d->total, 0, '.', ',')}}
                        </span>
                    </div>

                    <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                        <span class="s-text18 w-size19 w-full-sm">
                            Đang chuyển hàng:
                        </span>

                        <div class="w-size20 w-full-sm">
                            <p class="s-text8 p-b-23">
                                Không có phương pháp vận chuyển có sẵn. Vui lòng kiểm tra kỹ địa chỉ của bạn hoặc liên hệ với chúng tôi nếu bạn cần bất kỳ sự trợ giúp nào.
                            </p>

                            <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                                <select class="selection-2" name="payment_method">
                                    <option>Phương thức thành toán ...</option>
                                    <option>Ship COD</option>
                                </select>
                            </div>

                            <div class="size13 bo4 m-b-22">
                                <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="address" placeholder="Địa chỉ">
                            </div>

                            <div class="size14 trans-0-4 m-b-10">
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Cập nhật tổng thể
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-sb-m p-t-26 p-b-30">
                        <span class="m-text22 w-size19 w-full-sm">
                            Tổng cộng:
                        </span>

                        <span class="m-text21 w-size20 w-full-sm">
                            {{ number_format($d->total, 0, '.', ',')}}
                        </span>
                    </div>

                    <div class="size15 trans-0-4">
                        @csrf
                        @foreach($cartItems as $cart)
                            <input type="hidden" name="cart_id" value="{{$cart->id}}">
                            <input type="hidden" name="product_id" value="{{$cart->product_id}}">
                            <input type="hidden" name="date" value="2023-08-17">
                            <input type="hidden" name="address" value="Cần Thơ">
                            <input type="hidden" name="payment_method" value="Ship COD">
                            <input type="hidden" name="total" value="{{$cart->total}}">
                        @endforeach
                        <button type="submit" style="color:white;background-color:black;height:50px" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Tiến hành đặt hàng
                        </button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </section>
@endsection