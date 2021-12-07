@extends("layouts.app")


@section("myfirstblock")

    @dump($courses)

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Max grade</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->desc}}</td>
                <td>{{$course->maxgrade}}</td>
                <td><a href="{{route('courses.show',$course)}}" class="btn btn-success">Show </a></td>
                <td><a href="{{route('courses.edit',$course)}}" class="btn btn-warning">Edit </a></td>
                <td><form method="post"
                          action="{{route("courses.destroy",$course)}}">
                        @csrf
                        @method("delete")

                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form></td>

            </tr>
        @endforeach
    </table>

@endsection
