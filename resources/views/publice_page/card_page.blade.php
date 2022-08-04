

@extends('layouts.public');

@section('content');
<section class="main-about">
			<div class="about-bg">
				<div class="container">
					<h1>About-	<span class="about-color">Committee</span></h1>
				</div>
			</div>

		</section>



		<div class="container">
			<div class="row">

				<div class="col-md-12">

                    <div class="singale-card" style="width: 30%">
                        <img src="{{asset($result->img)}}" class="img-fluid other-card" style="border: 1px solid #ccbdbd;" alt="">

                        <table class="mx-auto" style="width: 200px; font-weight: bold">
                            <tr>
                                <td>Position</td>
                                <td>: {{$result->position}}</td>
                            </tr>

                            <tr>
                                <td>Name</td>
                                <td>: {{$result->name}}</td>
                            </tr>

                            <tr>
                                <td>Mobile </td>
                                <td>: {{$result->mobile}}</td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>: {{$result->email}}</td>
                            </tr>
                        </table>
                    </div>

				</div>


                <p class="border-ot mt-2 textp">
                    {!! nl2br($result->description) !!}
                </p>




			</div>
		</div>







@endsection
