@extends('layouts.kami')

@section('content')



	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Tipe</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Tipe Motor</h2>
					<ul class="cate">
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Bebek</a></li>
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sport</a></li>
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Trail</a></li>
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Matic</a></li>
						<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Vespa</a></li>

					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				 		@php
                        $motor = App\Motorrr::all();
                        @endphp
                        @foreach($motor as $data)
				<div class="agile_top_brands_grids">
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
                                                            <a href=#"><img title=" " alt=" " src="{{ asset('/img/'.$data->foto.'') }}" width="150" height="150" /></a>        
                                                <p>{{$data->nama}}</p>
												<h4></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
														<input type="hidden" name="amount" value="35.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
						<br>
					</div>
				</div>
				@endforeach
				
				
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


@endsection