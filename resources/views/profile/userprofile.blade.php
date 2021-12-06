@extends("layouts/app")

@section("contentblock")
<h1> My Profile </h1>
<div class="container">
<div class="card" style="width: 18rem;">
{{--    @dump($profiledata)--}}
    <img src="{{$profiledata["img"]}}" class="card-img-top" alt="...">
    {{  $profiledata->img }}
    <div class="card-body">
        <p class="card-text">This is {{$profiledata["studentname"]}} profile</p>
        <p class="card-text">ID = {{$profiledata["id"]}} </p>
        <p class="card-text">Grade = {{$profiledata["grade"]}} </p>
        <p class="card-text">Created at = {{$profiledata->created_at}} </p>
        <p class="card-text">Updated at = {{$profiledata->updated_at}} </p>



    </div>
</div>
</div>
@endsection
