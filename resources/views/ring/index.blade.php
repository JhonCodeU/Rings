@extends('layouts.template')
@section('title','Rings')
@livewire('navigation-dropdown')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10 mt-4"><h1 class="text-center">RINGS</h1></div>
            <div class="col-2 mt-4">
                    <p>
                      <a href="{{ route('rings.create') }}" class="btn btn-primary">Create new</a>
                  </p>
                  <br>
                  </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if($rings->isNotEmpty())
                <table class="table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>id</th>
                        <th>Description</th>
                        <th>Reference</th>
                        <th>Material</th>
                        <th>Preview</th>
                        <th>category</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($rings as $ring)
                        <tr class="">
                            <td scope="row">{{$ring->id}}</td>
                            <td>{{$ring->ring_description}}</td>
                            <td>{{$ring->ring_reference}}</td>
                            <td>{{$ring->ring_material}}</td>
                            <td><img src="{{ asset('previewRings') }}/{{$ring->ring_preview}}" width="60"></td>
                            <td>{{$ring->category->nameCategory}}</td>
                            <td>
                                <form action="{{ url('/rings/' . $ring->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('/rings/' . $ring->id) }}" class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg></a>
                                    <a href="{{ url('/rings/' . $ring->id . '/edit') }}" class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg></a>

                                    <button type="submit" class="btn btn-link" onclick="return confirm('Estas seguro quieres Borrar este archivo?');"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-12">
                      <span>
                        {{$rings->links()}}
                      </span>
    
                      <style>
                        .w-5{
                          display: none;
                        }
                      </style>
                    </div>
                  </div>

                  
                  @else
                    <p>No hay Registros</p>
                  @endif
            </div>
        </div>
    </div>

@endsection

