@extends('master')
@section('noidung')
<div class="container"> 

 <div class="row products"> 
  <div class="col-md-12">
<h3 align="center">New smartphones have come to town</h3>
<h6 align="left"> have found {{count($new_product)}} products </h6>
<div class="container"> 

 <div class="row"> 
 
@foreach($new_product as $new)

  <div class="col-md-3"> 
   <div> <img src="image/{{$new->image}}" alt="IphoneX" class="img-thumbnail"
   	style="max-width: 250px; height:250px;"> 
    <h2>{{$new->name}}</h2> 
    <h4>price:${{number_format($new->unit_price)}}</h4>
    <a href="{{route('detail',$new->id)}}" class="btn btn-primary" title="Chi tiết">Detail »</a> 
   <a href="http://localhost/mobileshop/public/cart" class="btn btn-danger" title="Chi tiết">Cart</a>
   </div> 
  </div> 
  @endforeach
</div> 
</div> 
 </div>
</div> 
</div>


@endsection