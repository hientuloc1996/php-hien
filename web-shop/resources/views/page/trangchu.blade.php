@extends('master')
@section('content')
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer">
			<div class="banner">
				<ul>
					@foreach($slide as $sl)
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide"
						style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
							data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
							data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
							data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
							data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
							data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
								data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
								src="image/slide/{{$sl->image}}" data-src="image/slide/{{$sl->image}}"
								style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Sảm phẩm mới</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm mới</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($new_product as $new)
							<div class="col-sm-3 ">
								<div class="single-item" style="width:15rem; margin-top:10px;">
									@if($new->promotion_price < $new->unit)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$new->id)}}"><img style="height:16rem;"
													src="image/product/{{$new->image}}" alt="..."></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												@if($new->promotion_price < $new->unit)
													<span class="flash-del">{{$new->unit}}</span>
												@endif
													<span class="flash-sale">{{$new->promotion_price}} </span> <span
														style="color:blue;">Đồng</span>
											</p>
										</div>
										<div class="single-item-caption d-flex justify-content-center">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i
													class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary"
												href="{{route('chi-tiet-san-pham',$new->id)}}">Đặt LUÔN VÀ NGAY <i
													class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">{{$new_product->links()}}</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản phẩm khuyễn mãi</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($promotion_product)}} sản phẩm khuyễn mãi</p>
							<div class="clearfix"></div>
						</div>

						<div class="space40">&nbsp;</div>
						<div class="row d-flex justify-content-around">
							@foreach($promotion_product as $pro)
							<div class="col-sm-3 mt-3">
								<div class="single-item" style="width:15rem; margin-top:10px;">
									<div class="ribbon-wrapper">
										<div class="ribbon sale">Sale</div>
									</div>
									<div class="single-item-header">
										<a href="{{route('chi-tiet-san-pham',$pro->id)}}"><img style="height:16rem;"
												src="image/product/{{$pro->image}}" alt="..."></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$pro->name}}</p>
										<p class="single-item-price">
											<span class="flash-del">{{$pro->unit}}</span>
											<span class="flash-sale">{{$pro->promotion_price}}</span> <span
												style="color:blue;">Đồng</span>
										</p>
									</div>
									<div class="single-item-caption d-flex justify-content-center">
										<a class="add-to-cart pull-left" href="{{route('themgiohang',$pro->id)}}"><i
												class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$pro->id)}}">Đặt
											LUÔN VÀ NGAY <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>

								</div>
							</div>
							@endforeach
						</div>
						<div class="row">{{$promotion_product->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection