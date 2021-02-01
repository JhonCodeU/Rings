@extends('layouts.template')
@section('title','show')

@section('content')

    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <img src="img/bg.jpg" class="" alt="">
                    <img class="rounded mx-auto d-block" src="{{ asset('previewRings') }}/{{$ring->ring_preview}}" width="200">
                    <div class="card-body">
                        <h3 class="card-tittle">Reference: {{$ring->ring_reference}}</h3>
                        <p class="card-text">{{$ring->ring_description}}</p>
                        <div class="form-group">
                            <label for="id"><strong>Id: </strong>{{$ring->id}}</label>
                        </div> 
        
                        <div class="form-group">
                            <label for="name"><strong>Material: </strong>{{$ring->ring_material}}</label>
                          </div>
        
                          <div class="form-group">
                            <label for="status"><strong>Category: </strong>{{$ring->category->nameCategory}}</label>
                        </div>
            
                        <div class="form-group">
                          <label for="created_at"><strong>Created: </strong>{{($ring->created_at != null) ? $ring->created_at : 'There is no information.'}}</label>
                        </div>
                        <div class="form-group">
                          <label for="updated_at"><strong>Updated: </strong>{{(($ring->updated_at != null) && ($ring->updated_at != $ring->created_at)) ? $ring->updated_at : 'Never been updated.'}}</label>
                        </div>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary btn-block btn-lg">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection