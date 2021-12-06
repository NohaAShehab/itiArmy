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
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($students as $std)
        <tr>
            <td> {{$std->id}} </td>
           <td> <a href="{{route("studentprofile",$std->id)}}"> {{$std->studentname}} </a> </td>
            <td>  {{$std->img}} </td>
            <td>  {{$std->grade}} </td>
            <td>  <a href="{{route("student.edit",$std->id)}}" class="btn btn-warning">Edit </a> </td>
{{--            <td>  <a href="{{route("student.delete",$std->id)}}"--}}
{{--                     class="btn btn-danger">Delete </a> </td>--}}
            <td>
                <form method="POST" action="{{route("student.delete",$std->id)}}">
                    @csrf
                    @method("delete")
                    <input type="submit" Value="Delete" class="btn btn-danger">
                </form>
            </td>

        </tr>
        @endforeach
    </table>

@endsection
