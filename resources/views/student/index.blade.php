@extends('layouts.app')

@section('title','Student List')

	@section('content')

		<div class="card">
			<div class="card-body">
				<strong>STUDENT LIST </strong> || <a href="{{ url('student/create')}}">Add Student</a>
			</div>
		
		@if (session('status'))
               <div class="alert alert-success" role="alert">
                	{{ session('status')}}
                </div>
        @endif

		<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">S/N</th>
			      <th scope="col">Name</th>
			      <th scope="col">Father's Name</th>
			      <th scope="col">Mother's Name</th>
			      <th scope="col">Phone</th>
			      <th scope="col">Home Number</th>
			      <th scope="col">Email</th>
			      <th scope="col">Department</th>
			      <th scope="col">Class</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			 
			  </tbody>
		</table>
     </div>
	@endsection