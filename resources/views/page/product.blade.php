@extends('master')
@section('noidung')

<div class="container"> 

 <div class="row products"> 
  <div class="col-md-12">

<h6 align="left"> have found {{count($product_type)}} products </h6>
<div class="container"> 
 <div class="row"> 
 
   @foreach($product_type as $brand)

  <div class="col-md-3"> 
   <div> <img src="{{URL::to('image/')}}/{{$brand->image}}" alt=""class ="img-thumbnail"  style="max-width: 250px; height:250px;"> 
    <h2>{{$brand->name}}</h2> 
    <h4>price:${{number_format($brand->unit_price)}}</h4>
 
    <a href="http://localhost/mobileshop/public/detail" class="btn btn-primary" title="Chi tiết">Detail »</a> 
     <a href="http://localhost/mobileshop/public/cart" class="btn btn-danger" title="Chi tiết">Cart</a>   

   </div> 
  </div> 
  @endforeach
 </div>
</div> 

<h2 align="left"> Other products </h2>

<div class="container"> 
 <div class="row"> 
 
   @foreach($other_product as $other)

  <div class="col-md-3"> 
   <div> <img src="{{URL::to('image/')}}/{{$other->image}}" alt=""class ="img-thumbnail"  style="max-width: 250px; height:250px;"> 
    <h2>{{$brand->name}}</h2> 
    <h4>price:${{number_format($other->unit_price)}}</h4>
 
    <a href="http://localhost/mobileshop/public/detail" class="btn btn-primary" title="Chi tiết">Detail »</a> 
     <a href="http://localhost/mobileshop/public/cart" class="btn btn-danger" title="Chi tiết">Cart</a>   
</div>
</div>
@endforeach
</div>
<div class ="row">{{$other_product->links()}}</div>
</div>

</div>
</div>
</div>
@endsection