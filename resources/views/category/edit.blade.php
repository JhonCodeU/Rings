@extends('layouts.template')
@section('title','Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-4">Update this category</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        - {{$error}} <br>
                    @endforeach
                </div>
                @endif
                <form action="{{route('categories.update', $category)}}" method="POST" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nameCategory">Name</label>
                        <input type="text" class="form-control" name="nameCategory" id="nameCategory" placeholder="Category name" value="{{old('nameCategory', $category->nameCategory)}}">
                      </div>
                      <div class="form-group">
                        <label for="priorityCategory">Prioridad</label>
                        <select class="form-control" name="priorityCategory" id="priorityCategory">
                          <option value="1" {{old('priorityCategory', $category->priorityCategory) == '1' ? 'selected' : ''}}>1</option>
                          <option value="2" {{old('priorityCategory', $category->priorityCategory) == '2' ? 'selected' : ''}}>2</option>
                          <option value="3" {{old('priorityCategory', $category->priorityCategory) == '3' ? 'selected' : ''}}>3</option>
                          <option value="4" {{old('priorityCategory', $category->priorityCategory) == '4' ? 'selected' : ''}}>4</option>
                          <option value="5" {{old('priorityCategory', $category->priorityCategory) == '5' ? 'selected' : ''}}>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="descriptionCategory">Description</label>
                        <textarea class="form-control" id="descriptionCategory" name="descriptionCategory" rows="3" value="{{old('descriptionCategory')}}">{{$category->descriptionCategory}}</textarea>
                      </div>

                      <div class="row">
                        <div class="col my-6">
                            <button type="submit" class="btn btn-primary btn-block submit">Update</button>
                        </div>
                        <div class="col mt-6">
                            <a href="{{ url('categoriesList') }}" class="btn btn-danger btn-block">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
