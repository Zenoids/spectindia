
@extends('layouts.app') 
@section('content')
    <div class=" d-flex flex-column h-75 text-center bg-light justify-content-center my-5  py-5 row">

	<div>
		<h1 class="site-header__title text-center " data-lead-id="site-header-title">THANK YOU!</h1>

		<div class="main-content text-center ">
			<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
			<p class="main-content__body" data-lead-id="main-content-body">Thanks for filling that out. It means a lot to us, just like you do! We really appreciate you voulunteering with us.</p>
			<p class="main-content__body" data-lead-id="main-content-body">Click here to fill <a href="/register">another form</a></p>
		</div>
	</div>

</div>
@endsection
