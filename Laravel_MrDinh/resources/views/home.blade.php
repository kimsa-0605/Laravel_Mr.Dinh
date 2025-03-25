@extends('cake')
@section('content')
<section class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div class="banner">
                        <ul>
                            <!-- THE FIRST SLIDE -->
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="image/slide/{{$slides[0]->image}}" data-src="image/slide/{{$slides[0]->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/{{$slides[0]->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>
                            </li>
                            @for($i = 1; $i < count($slides); $i++)
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="image/slide/{{$slides[$i]->image}}" data-src="image/slide/{{$slides[$i]->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/{{$slides[$i]->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!--slider-->
    </section>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">{{ count($products) }} styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            @for ($i = 0; $i < count($products)/4; $i++)
                                <div class="row">
                                    @for ($j = $i*4; $j < ($i + 1)*4; $j++ )
                                        @if(isset($products[$j]))
                                            <div class="col-sm-3" style="margin-bottom: 30px;">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="/product-detail/{{ $products[$j]->id }}"><img src='image/product/{{ $products[$j]->image }}' style="height: 250px; object-fit:cover"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{ $products[$j]->name }}</p>
                                                        <p class="single-item-price">
                                                            <span>{{ $products[$j]->unit_price }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa-brands fa-youtube"></i></a>
                                                        <a class="beta-btn primary" href="/product-detail/{{ $products[$j]->id }}">Details <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            @endfor
                            <div class="d-flex justify-content-center">
                                {{ $products->links('pagination::bootstrap-4') }}
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Top Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">{{ count($topProducts) }} styles found</p>
                                <div class="clearfix"></div>
                            </div>
                            @for ($i = 0; $i < 2; $i++)
                                <div class="row">
                                    @for ($j = $i*4; $j < ($i + 1)*4; $j++ )
                                        @if(isset($topProducts[$j]))
                                            <div class="col-sm-3" style="margin-bottom: 30px;">
                                                <div class="single-item">
                                                    <div class="single-item-header">
                                                        <a href="product.html"><img src='image/product/{{ $topProducts[$j]->image }}' style="height: 250px; object-fit:cover"></a>
                                                    </div>
                                                    <div class="single-item-body">
                                                        <p class="single-item-title">{{ $topProducts[$j]->name }}</p>
                                                        <p class="single-item-price">
                                                            <span>{{ $topProducts[$j]->unit_price }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="single-item-caption">
                                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            @endfor
                            <div class="d-flex justify-content-center">
                                {{ $topProducts->links('pagination::bootstrap-4') }}
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection