@extends('layouts.app')

@section('title','Update Department Info')

	@section('content')

		<div class="container">
       
            <div class="card">
                <div class="card-header">Update Department Info # {{ $department->id }}</div>
                		@if (session('status'))
                			<div class="alert alert-success" role="alert">
                				{{ session('status')}}
                			</div>
                		@endif
                <div class="card-body">
                    <form method="POST" action="{{url('department/update', $department->id)}}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $department->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
           
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Record
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

	@endsection