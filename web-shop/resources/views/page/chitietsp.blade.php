@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">{{$chitietsp->name}}</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>{{$chitietsp->name}}</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-4">
						@if($chitietsp->promotion_price < $chitietsp->unit)
							<div class="ribbon-wrapper">
								<div class="ribbon sale">Sale</div>
							</div>
							@endif
							<img src="image/product/{{$chitietsp->image}}" height="250px" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<h1>{{$chitietsp->name}}</h1>
							@if($chitietsp->promotion_price < $chitietsp->unit)
								<span class="flash-del">{{$chitietsp->unit}}</span>
								@endif
								<p class="single-item-price">
									<span>{{$chitietsp->promotion_price}} Đồng</span>
								</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>{{$chitietsp->description}}</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Lựa chọn:</p>
						<div class="single-item-options">
							<select class="wc-select" name="size">
								<option>Kich thước</option>
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
							<select class="wc-select" name="color">
								<option>Số lượng</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add-to-cart" href="{{route('themgiohang',$chitietsp->id)}}"><i
									class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô tả</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
							consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
							est, qui dolorem ipsum quia dolor sit amet.</p>
						<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
							dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
							exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
							consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil
							molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản phẩm liên quan</h4>

					<div class="row">
						@foreach($sanphamk as $spk)
						<div class="col-sm-4">
							@if($spk->promotion_price < $spk->unit)
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>
								@endif
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('chi-tiet-san-pham',$spk->id)}}"><img
												src="image/product/{{$spk->image}}" height="250px" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$spk->name}}</p>
										<p class="single-item-price">
											@if($spk->promotion_price < $spk->unit)
												<span class="flash-del">{{$spk->unit}}</span>
												@endif
												<span>{{$spk->promotion_price}}Đồng</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$spk->id)}}"><i
												class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$spk->id)}}">Đặt
											NGAY VÀ LUÔN <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
						</div>
						@endforeach
					</div>
					<div class="row">{{$sanphamk->links()}}</div>
				</div> <!-- .beta-products-list -->
			</div>
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Best Sellers</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/1.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/2.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/3.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
									src="assets/dest/images/products/sales/4.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- best sellers widget -->
				<div class="widget">
					<h3 class="widget-title">New Products</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/1.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/2.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/3.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
							<div class="media beta-sales-item">
								<a class="pull-left" href="product.html"><img
										src="assets/dest/images/products/sales/4.png" alt=""></a>
								<div class="media-body">
									Sample Woman Top
									<span class="beta-sales-price">$34.55</span>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- best sellers widget -->
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection