@extends('master')
@section('noidung')

<div class="container">
		<div id="content">
			
			<form action="#" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h4>Log in</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-group">
							<label for="email">Email address*</label>
							<input type="email" class="form-control" id="email" required>
						</div>
						<div class="form-group">
							<label for="phone">Password*</label>
							<input type="text" class="form-control" id="phone" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection
