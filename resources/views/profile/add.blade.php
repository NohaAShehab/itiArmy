@extends("layouts/app")

@section("myfirstblock")
    <h1> Add Student </h1>
    <form method="post" action="{{route("student.store")}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="studentname" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input type="text" class="form-control" name="img" id="" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">grade</label>
            <input type="number" class="form-control" name="grade" id="" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox"  name="is_absent"  class="form-check-input" id="exampleCheck1">
            <label class="form-check-label"
                   for="exampleCheck1">Is Absent</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


