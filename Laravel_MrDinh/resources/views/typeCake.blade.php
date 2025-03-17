@extends('cake')
@section('content')
<section class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="/cake">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</section>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ( $loai_sp as $lsp )
                            <li><a href="{{ route('type-cake', $lsp->id) }}">{{ $lsp->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">438 styles found</p>
                            <div class="clearfix"></div>
                        </div>
                        @for ($i = 0; $i < count($sp_theoloai)/3; $i++)
                            <div class="row">
                                @for ($j = $i * 3; $j < ($i + 1) * 3; $j++)
                                    @if(isset($sp_theoloai[$j])) 
                                        <div class="col-sm-4" style="margin-bottom: 30px;">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="/product-detail/{{ $sp_theoloai[$j]->id }}"><img src="image/product/{{ $sp_theoloai[$j]->image }}" style="height: 250px; object-fit:cover"alt=""></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{ $sp_theoloai[$j]->name }}</p>
                                                    <p class="single-item-price">
                                                        <span>{{ $sp_theoloai[$j]->unit_price }}</span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="/product-detail/{{ $sp_theoloai[$j]->id }}">Details <i class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor

                            </div>
                        @endfor
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Top Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">438 styles found</p>
                            <div class="clearfix"></div>
                        </div>
                        @for ($i = 0; $i < count($sp_theoloai)/3; $i++)
                            <div class="row">
                                @for ($j = $i * 3; $j < ($i + 1) * 3; $j++)
                                    @if(isset($sp_theoloai[$j])) 
                                        <div class="col-sm-4" style="margin-bottom: 30px;">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="/product-detail/{{ $sp_theoloai[$j]->id }}"><img src="image/product/{{ $sp_theoloai[$j]->image }}" style="height: 250px; object-fit:cover" alt=""></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{ $sp_theoloai[$j]->name }}</p>
                                                    <p class="single-item-price">
                                                        <span>{{ $sp_theoloai[$j]->unit_price }}</span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="/product-detail/{{ $sp_theoloai[$j]->id }}">Details <i class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        @endfor
                        <div class="space40">&nbsp;</div>
                        
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection