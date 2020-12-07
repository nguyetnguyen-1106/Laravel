@extends('master')

@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm {{$loai_sp->name}}</h6>				
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($loai as $loai)
                            <li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm</h4>
                        <div class="beta-products-details">
                            {{-- <p class="pull-left">{{ count($sp_theoloai)}}</p> --}}
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sp_theoloai as $theoloai)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="public/source/image/product/{{$theoloai->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$theoloai->name}}</p>
                                        <p class="single-item-price">
                                            @if($theoloai->promotion_price == 0)
                                                <span class="flash-sale">{{$theoloai->unit_price}} đồng</span>
                                            @else 
                                                <span class="flash-del">{{$theoloai->unit_price}} đồng</span>
                                                <span class="flash-sale">{{$theoloai->promotion_price}} đồng</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div> 
                            @endforeach               
                        </div>
                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left"></p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sp_khac as $khac)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="public/source/image/product/{{$khac->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">Sample Woman Top</p>
                                        <p class="single-item-price">
                                            @if($theoloai->promotion_price == 0)
                                                <span class="flash-sale">{{$theoloai->unit_price}} đồng</span>
                                            @else 
                                                <span class="flash-del">{{$theoloai->unit_price}} đồng</span>
                                                <span class="flash-sale">{{$theoloai->promotion_price}} đồng</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

