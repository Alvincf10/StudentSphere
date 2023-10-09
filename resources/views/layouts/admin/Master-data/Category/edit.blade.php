@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Edit Category Name</h5>
    <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('category.update',['id'=>$category['id']])}}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Category Name</label>
              <input type="text" class="form-control" name="category_name" value="{{$category['category_name']}}">
              @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <a href="{{route('category')}}" class="btn btn-light mr-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>
@endsection
