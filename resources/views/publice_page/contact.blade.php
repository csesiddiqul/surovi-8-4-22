@extends('layouts.public');
@section('content');

<section class="activitis">

			<div class="container">
				<div class="row">


					<div class="col-md-12">
						<h1 class="title">MAP</h1>
						<div class="flickr">

							<iframe src="{{$results->mapUrl}}" height="400px" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">

								<div class="add-box">
									<i class="fa-solid fa-location-dot"></i>

									<h3>address</h3>
									<p>Surovi, House # 16, Road #1205  Dhaka-1205. </p>
								</div>

							</div>

							<div class="col-md-4">

								<div class="add-box">
									<i class="fa-solid fa-phone"></i>

									<h3>Phone Number</h3>
									<p>Call : {{$results->phone}} </p>
								</div>

							</div>

							<div class="col-md-4">

								<div class="add-box">
									<i class="fa-solid fa-envelope"></i>

									<h3>E-mail Address</h3>
									<p> {{$results->email}}</p>
								</div>

							</div>
						</div>
					</div>

					<div class="col-md-12">
						<h1 class="title">Leave Comment</h1>
						<div class="contacts-form">
							<form>

								<div class="row">
									<div class="col-md-6">
										<input type="text" name="" placeholder="Name" class="form-label contact-input">
									</div>
									<div class="col-md-6">
										<input type="text" name="" placeholder="phone" class="form-label contact-input">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<input type="email" name="" placeholder="Email" class="form-label contact-input">
									</div>
									<div class="col-md-6">
										<input type="text" name="" placeholder="Subject" class="form-label contact-input">
									</div>
								</div>

								<div class="row">
									<div class="cl-md-12">
										<textarea placeholder="Message..." class="form-label cont-heig contact-input"></textarea>
									</div>
								</div>


								<input type="reset" name="" value="Clear-Form" class="button">

								<input type="submit" name="" value="Send!" class="button">

							</form>
						</div>
					</div>





				</div>
			</div>

</section>

@endsection
