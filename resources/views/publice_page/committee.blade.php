@php
    $committee = \App\Models\card::all();
@endphp

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




        @foreach($committee as $key=> $comdata)


            <div class="col-md-4">

                <div class="singale-card">

                    <img src="{{asset($comdata->img)}}" class="img-fluid other-card" alt="">


                    <table class="mx-auto" style="width: 200px;">
                        <tr>
                            <td>Position</td>
                            <td>: {{$comdata->position}}</td>
                        </tr>
                        <tr>
                            <td>Mobile </td>
                            <td>: {{$comdata->mobile}}</td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td>: {{$comdata->email}}</td>
                        </tr>
                    </table>

                    <a href="{{route('singaleCard',$comdata)}}" class="readmore mt-4">See More →</a>

                </div>

            </div>

        @endforeach



    </div>
</div>



@endsection
