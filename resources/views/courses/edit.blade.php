@extends("layouts/myapp")

@section("myfirstblock")
    <h1> Edit Course </h1>
{{--    @dump($course)--}}
    <form method="post" action="{{route("courses.update",$course)}}">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" value="{{$course->name}}"
                   class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input type="text" value="{{$course->desc}}"
                   class="form-control" name="desc" id="" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Max Grade</label>
            <input type="number" value="{{$course->maxgrade}}"
                   class="form-control" name="maxgrade" id="" aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


