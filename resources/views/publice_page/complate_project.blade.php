@extends('layouts.public');

@section('content');

<section class="main-about">
    <div class="about-bg">
        <div class="container">
            <h1>Projects- <span class="about-color">Ongoing Projects</span></h1>
        </div>
    </div>

</section>


<section class="container mr-con">

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Project Title</th>
            <th scope="col">Project img</th>
            <th scope="col"> Location (District & City Corporation/Pourasava)</th>

            <th scope="col"> Type of Beneficiaries</th>
        </tr>
        </thead>


        @foreach($ongoing as $key => $porojectData)


            <tr>
                <th scope="row">{{$key+1}}</th>

                <td>{{$porojectData->title}}</td>
                <td><img src="{{$porojectData->img}}" alt="" width="5%"></td>
                <td>{{$porojectData->location_data}}</td>
                <td>{{$porojectData->title}}</td>
            </tr>


        @endforeach

    </table>

</section>

@endsection
