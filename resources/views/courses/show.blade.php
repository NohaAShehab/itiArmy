@extends("layouts.app")


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
