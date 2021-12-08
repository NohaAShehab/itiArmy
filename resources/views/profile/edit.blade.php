
@extends("layouts/myapp")

@section("myfirstblock")
    <h1> Edit Student </h1>
    <form method="post" action="{{route("student.update",$student->id)}}">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="studentname"
                   value="{{$student->studentname}}"
                   id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="text" class="form-control"
                   value="{{$student->img}}"
                   name="img" id="" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">grade</label>
            <input type="number" class="form-control"
                   value="{{$student->grade}}"
                   name="grade" id="" aria-describedby="emailHelp">
        </div>

        <div class="mb-3 form-check">
            @if($student->is_absent ==true)
            <input type="checkbox"
                   name="is_absent"  class="form-check-input" id="exampleCheck1" checked>
            @else
            <input type="checkbox"
                       name="is_absent"  class="form-check-input" id="exampleCheck1">
            @endif
            <label class="form-check-label"
                   for="exampleCheck1">Is Absent</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


