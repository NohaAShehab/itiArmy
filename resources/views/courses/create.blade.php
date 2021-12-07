@extends("layouts/app")

@section("myfirstblock")
    <h1> Add Course </h1>
    <form method="post" action="{{route("courses.store")}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control"
                   value="{{old("name")}}"
                   name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <input type="text" class="form-control"
                   value="{{old("desc")}}"
                   name="desc" id="" aria-describedby="emailHelp">
        </div>
        @error('desc')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="" class="form-label">Max Grade</label>
            <input type="number"  value="{{old("maxgrade")}}"
                   class="form-control" name="maxgrade" id="" aria-describedby="emailHelp">
        </div>
        @error('maxgrade')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


