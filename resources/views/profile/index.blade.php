@extends("layouts/app")


@section("myfirstblock")
    <div class="container">
        <h1> Students list</h1>
        @dump($students)
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Grade</th>
        </tr>
        @foreach($students as $std)
        <tr>
            <td> {{$std->id}} </td>
           <td> <a href="{{route("studentprofile",$std->id)}}"> {{$std->studentname}} </a> </td>
            <td>  {{$std->img}} </td>
            <td>  {{$std->grade}} </td>

        </tr>
        @endforeach
    </table>

@endsection
