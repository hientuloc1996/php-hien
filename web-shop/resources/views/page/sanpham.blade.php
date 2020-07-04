@extends('master')
@section('content')

<div class="container">
	<div class="pull-left">
		<h6 class="inner-title">Sản phẩm {{$loai_sp->name}}</h6>
	</div>
	<div class="pull-right">
		<div class="beta-breadcrumb font-large">
			<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Sản phẩm</span>
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
						@foreach($loai as $caclsp)
						<li><a href="{{route('loai-san-pham',$caclsp->id)}}">{{$caclsp->name}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>Sản phẩm mới</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($sp_theoloai)}}</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($sp_theoloai as $loaisp)
							<div class="col-sm-4">
								<div class="single-item" style="width:15rem; margin-top:10px;">
									@if($loaisp->promotion_price < $loaisp->unit)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img style="height:16rem;"
													src="image/product/{{$loaisp->image}}" alt="..."></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$loaisp->name}}</p>
											<p class="single-item-price">
												@if($loaisp->promotion_price < $loaisp->unit)
													<span class="flash-del">{{$loaisp->unit}}</span>
													@endif
													<span class="flash-sale">{{$loaisp->promotion_price}} </span> <span
														style="color:blue;">Đồng</span>
											</p>
										</div>
										<div class="single-item-caption d-flex justify-content-center">
											<a class="add-to-cart pull-left"
												href="{{route('themgiohang',$loaisp->id)}}"><i
													class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary"
												href="{{route('chi-tiet-san-pham',$loaisp->id)}}">Đặt LUÔN VÀ NGAY <i
													class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sẩn phẩm khác</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($sp_khac)}}</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($sp_khac as $sp_k)
							<div class="col-sm-4">
								<div class="single-item" style="width:15rem; margin-top:10px;">
									@if($sp_k->promotion_price < $sp_k->unit)
										<div class="ribbon-wrapper">
											<div class="ribbon sale">Sale</div>
										</div>
										@endif
										<div class="single-item-header">
											<a href="product.html"><img style="height:16rem;"
													src="image/product/{{$sp_k->image}}" alt="..."></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp_k->name}}</p>
											<p class="single-item-price">
												@if($sp_k->promotion_price < $sp_k->unit)
													<span class="flash-del">{{$sp_k->unit}}</span>
													@endif
													<span class="flash-sale">{{$sp_k->promotion_price}} </span> <span
														style="color:blue;">Đồng</span>
											</p>
										</div>
										<div class="single-item-caption d-flex justify-content-center">
											<a class="add-to-cart pull-left"
												href="{{route('themgiohang',$sp_k->id)}}"><i
													class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="loaisp">Đặt LUÔN VÀ NGAY <i
													class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row"> {{$sp_khac->links()}}</div>
						<div class="space40">&nbsp;</div>

					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection