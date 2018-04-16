@extends('master')
@section('noidung')
<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
    <h2>Sign up</h2>
     
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
            <label>Fullname</label>
            <input type="email" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="email" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="email" class="form-control" placeholder="" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
    </div>
    </form>
     
</div>
</div>
@endsection