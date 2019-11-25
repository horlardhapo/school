@extends('layouts.app')

@section('title','Add New Department')

    @section('content')

        <div class="container">
       
            <div class="card">
                <div class="card-header">Add Student</div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status')}}
                            </div>
                        @endif
                <div class="card-body">
                    <form method="POST" action="{{url('student/save', '$data->id')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Student Name: </label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="title" value="{{ $data->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Email: </label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data->email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-sm-4 col-form-label text-md-right">Phone Number: </label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ $data->phone_number }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="father_name" class="col-sm-4 col-form-label text-md-right">Father's Name: </label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}" name="father_name" value="{{ $data->father_name) }}" required autofocus>

                                @if ($errors->has('father_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('father_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="mother_name" class="col-sm-4 col-form-label text-md-right">Mother's Name: </label>

                            <div class="col-md-6">
                                <input id="mother_name" type="text" class="form-control{{ $errors->has('mother_name') ? ' is-invalid' : '' }}" name="mother_name" value="{{ $data->mother_name }}" required autofocus>

                                @if ($errors->has('mother_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mother_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="roll" class="col-sm-4 col-form-label text-md-right">Roll: </label>

                            <div class="col-md-6">
                                <input id="roll" type="text" class="form-control{{ $errors->has('roll') ? ' is-invalid' : '' }}" name="roll" value="{{ $data->roll_id }}" required autofocus>

                                @if ($errors->has('roll'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('roll') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="reg_id" class="col-sm-4 col-form-label text-md-right">Reg ID: </label>

                            <div class="col-md-6">
                                <input id="reg_id" type="text" class="form-control{{ $errors->has('reg_id') ? ' is-invalid' : '' }}" name="reg_id" value="{{ $data->reg_id }}" required autofocus>

                                @if ($errors->has('reg_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reg_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="department_id" class="col-sm-4 col-form-label text-md-right">Department: </label>

                            <div class="col-md-6">
                                <select lass="form-control{{ $errors->has('department_id') ? ' is-invalid' : '' }}" name="department_id" value="{{ $data->department_id }}" required>
                                    @foreach($departments as $department)
                                        <option value="">Select One</option>
                                    <option value="{{ $department->id}}">{{ $department->title }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department_id" class="col-sm-4 col-form-label text-md-right">: </label>

                            <div class="col-md-6">
                                <select lass="form-control{{ $errors->has('classes_id') ? ' is-invalid' : '' }}" name="department_id" value="{{ $data->classes_id }}" required>
                                    @foreach($classes as $class)
                                        <option value="">Select One</option>
                                    <option value="{{ $classes->id}}">{{ $classes->title }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('classes_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('classes_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="classes_id" class="col-sm-4 col-form-label text-md-right">Phone Number: </label>

                            <div class="col-md-6">
                                <input id="classes_id" type="text" class="form-control{{ $errors->has('classes_id') ? ' is-invalid' : '' }}" name="classes_id" value="{{ $data->classes_id }}" required autofocus>

                                @if ($errors->has('classes_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('classes_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="present_address" class="col-sm-4 col-form-label text-md-right">Present Address: </label>

                            <div class="col-md-6">
                                <input id="present_address" type="text" class="form-control{{ $errors->has('present_address') ? ' is-invalid' : '' }}" name="present_address" value="{{ $data->present_address }}" required autofocus>

                                @if ($errors->has('present_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('present_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="permanent_address" class="col-sm-4 col-form-label text-md-right">Permanent Address: </label>

                            <div class="col-md-6">
                                <input id="permanent_address" type="text" class="form-control{{ $errors->has('permanent_address') ? ' is-invalid' : '' }}" name="permanent_address" value="{{ $data->permanent_address }}" required autofocus>

                                @if ($errors->has('permanent_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permanent_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="home_number" class="col-sm-4 col-form-label text-md-right">Home Number: </label>

                            <div class="col-md-6">
                                <input id="home_number" type="text" class="form-control{{ $errors->has('home_number') ? ' is-invalid' : '' }}" name="home_number" value="{{ $data->home_number }}" required autofocus>

                                @if ($errors->has('home_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('home_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

           
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Record
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection