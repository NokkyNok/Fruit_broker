@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('admin Dashboard') }}</div>

                <div class="card-body">
                    
                   


                    <table class="table">
                    	<thead>
                    		<tr>
                    			<th scope="col">id</th >
                    			<th scope="col">Name</th >
                    			<th scope="col">phone_number</th>
                    			<th scope="col">ID_Number</th>
                    			<th scope="col">location</th>
                    			<th scope="col">Email</th>
                    			<th scope="col"> Action</th>
                    		</tr>
                    		
                    	</thead>
                    	<tbody>
                    		@foreach($user as $user)
                    		<tr>
                    			<td scope="row">{{$user->id}}</td>
                    			<td>{{$user->name}}</td>
                    			<td>{{$user->phone_number}}</td>
                    			<td>{{$user->ID_Number}}</td>
                    			<td>{{$user->location}}</td>
                    			<td>{{$user->email}}</td>
                    			<td>
                    				<a href="" ><button class="btn btn-secondary">Edit</button></a>
                    				<a href="" ><button class="btn btn-danger">Delete</button></a>
                    			</td>
                    		</tr>
                            @endforeach
                   	        

                    	</tbody>
                    	
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection