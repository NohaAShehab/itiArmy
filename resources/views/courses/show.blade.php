@extends("layouts.myapp")


@section("myfirstblock")
    <table class="table">
        <tr>
            <td>ID</td>
            <td> {{$mycourse->id}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td> {{$mycourse->name}}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td> {{$mycourse->desc}}</td>
        </tr>
        <tr>
            <td>Max grade</td>
            <td> {{$mycourse->maxgrade}}</td>
        </tr>
{{--        <tr>--}}
{{--            <td>Course owner</td>--}}
{{--            <td> {{$user->name}}</td>--}}
{{--        </tr>--}}

        <tr>
            <td>From the relation</td>
{{--            <td> @dump($mycourse->user)</td>--}}
            <td> <a href="{{route("usercourses",$mycourse->user)}}"> {{$mycourse->user->name}} </a></td>
        </tr>
        <tr>
            <td>Created at</td>
            <td> {{$mycourse->created_at}}</td>
        </tr>
        <tr>
            <td>Updated at</td>
            <td> {{$mycourse->updated_at}}</td>
        </tr>




    </table>


@endsection
