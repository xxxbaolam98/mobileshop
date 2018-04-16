@extends('master')
@section('noidung')
<div class="inner-header">
		<div class="container">
			
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

		<div id="content">
			<div class="row">
				<div class="col-md-10">
                  <div class="col-md-2"></div>
					<div class="row">
						<div class="col-md-4">
							<img src="{{URL::to('image/')}}/{{$product->image}}" alt="" 	style="max-width: 250px; height:250px;">
						</div>
						<div class="col-md-4">
							
							<div class="single-item-body">
								<p class="single-item-title"><h2> {{$product->name}} </h2></p></div>
							
								 <dl class="dl-horizontal"> 

                                  <dt>Price:</dt> 
                                  <dd> ${{number_format($product->unit_price)}}</dd> 
                                  <dt>Condition:</dt> 
                                  <dd>{{$product->condition}}</dd> 
                                  <dt>Brand: </dt> 
                                  <dd></dd> 
                                   <dt>Descrption: </dt> 
                                  <dd>{{$product->description}}</dd> 
                                   
                                  </dl>
                                 
    
                                  <a href="#" class="btn btn-danger" title="Chi tiết">Cart »</a> 
                                  	</div>                               
					
							</div>

							<div class="space20">&nbsp;</div>

						
							
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					
							</div>
						</div>
				

@endsection