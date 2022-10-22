@extends('broker.ex')
@section('content')


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                @include('flash-message')
              <h3 class="page-title"> Make a Supply Request </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Type Fuete avocadoes</h4>
                    <p class="card-description"> Supply submission</p>
                    <form class="forms-sample" action="{{route('supply.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                      <label for="supplier_name">Supplier Email</label>
                      <select name="supplier_name" >
                      @foreach($user as $emp)
                            <option value="{{$emp->email}}">{{$emp->email}}</option>
                        @endforeach
                        
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="supplier_contact">Supplier Contact</label>
                        <input type="text" name="supplier_contact" class="form-control"  placeholder="+254798729292">
                      </div>
                       <div class="form-group">
                        <label for="supplier_contact">Supplier Location</label>
                        <input type="text" name="location" class="form-control"  placeholder="Nthiiru">
                      </div>
                      <div class="form-group">
                        <label for="supplier_amount">Amount for Supply</label>
                        <input type="text" name="supplier_amount" class="form-control"  placeholder="Ksh. 3000">
                      </div>
                      <div class="form-group">
                        <label for="fruit_grade">Type(Readonly)</label>
                        <input type="text"  name="fruit_grade"class="form-control"  placeholder= "Fuete/Ordinary" >
                      </div>
                      <div class="form-group">
                        <label for="due_after">Due after(days)</label>
                        <input type="text" name="due_after" class="form-control"   placeholder="5 days">
                      </div>
                      
      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Type Hass</h4>
                    <p class="card-description"> Supply Submission </p>
                    <form class="forms-sample" action="{{route('supply.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                      <label for="supplier_name">Supplier Email</label>
                      <select name="supplier_name" >
                      @foreach($user as $emp)
                            <option value="{{$emp->email}}">{{$emp->email}}</option>
                        @endforeach
                        
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="supplier_contact">Supplier Contact</label>
                        <input type="text" name="supplier_contact" class="form-control"  placeholder="+254798729292">
                      </div>
                      <div class="form-group">
                        <label for="supplier_contact">Supplier Location</label>
                        <input type="text" name="location" class="form-control"  placeholder="Nthiiru">
                      </div>
                      <div class="form-group">
                        <label for="supplier_amount">Amount for Supply</label>
                        <input type="text" name="supplier_amount" class="form-control"  placeholder="Ksh. 3000">
                      </div>
                       </div>
                       
                      <div class="form-group">
                        <label for="fruit_grade">Type(Readonly)</label>
                        <input type="text"  name="fruit_grade"class="form-control"  placeholder= "Hass/Pigerton" >
                      </div>
                      <div class="form-group">
                        <label for="due_after">Due after(days)</label>
                        <input type="text" name="due_after" class="form-control"   placeholder="5 days">
                      </div>    
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
@endsection