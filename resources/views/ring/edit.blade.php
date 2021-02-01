@extends('layouts.template')
@section('title','ring')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-4">Update Ring</h1>
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
                <form action="{{route('rings.update', $ring)}}" method="POST" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="name">Reference</label>
                        <input type="text" class="form-control" id="ring_reference" name="ring_reference" value="{{old('ring_reference', $ring->ring_reference)}}">
                    </div>

                    <div class="form-group">
                        <label for="ring_material">Materials</label>
                        <select id="ring_material" name="ring_material" class="form-control">
                          <option selected>Choose...</option>
                          <option value="Gold" {{old('ring_material', $ring->ring_material) == 'Gold' ? 'selected' : ''}}>Oro</option>
                          <option value="Silver" {{old('ring_material', $ring->ring_material) == 'Silver' ? 'selected' : ''}}>Plata</option>
                          <option value="Bronze" {{old('ring_material', $ring->ring_material) == 'Bronze' ? 'selected' : ''}}>Bronce</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{($category->id)}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->nameCategory}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ring_description">Description</label>
                        <textarea class="form-control" name="ring_description" id="ring_description" svalue="{{old('ring_description')}}">{{$ring->ring_description}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="img">Select an image</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col my-6">
                            <button type="submit" class="btn btn-primary btn-block submit">Update</button>
                        </div>
                        <div class="col mt-6">
                            <a href="{{route('rings.index')}}" class="btn btn-danger btn-block">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
