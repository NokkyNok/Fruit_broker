@extends('broker.ex')
@section('content')


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                @include('flash-message')
              <h3 class="page-title"> Deliver ready</h3>
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
                    <h4 class="card-title">Ready Avocadoes</h4>
                    <p class="card-description"> Supply submission</p>
                    <form class="forms-sample" action="{{route('inquire.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                      <label for="supplier_name">Fruit Type</label>
                      <select name="fruit_grade">
                      
                            <option value="Fuete">Fuete</option>
                            <option value="Hass">Hass</option>
                            <option value="Pinkerton">Pinkerton</option>
                            <option value="Ordinary">Ordinary</option>
                        
                        
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="supplier_contact">Your Phone No</label>
                        <input type="text" name="phone" class="form-control"  placeholder="+254798729292">
                      </div>
                      <div class="form-group">
                        <label for="supplier_amount">Total Fruits</label>
                        <input type="text" name="fruits_no" class="form-control"  placeholder="3000">
                      </div>
                      <div class="form-group">
                        <label for="fruit_grade">Price/Fruit</label>
                        <input type="number"  name="price_per"class="form-control"  placeholder="Ksh 10">
                      </div>
                      <div class="form-group">
                        <label for="due_after">Delivered within</label>
                        <input type="text" name="date_ready" class="form-control"   placeholder="5 days">
                      </div>
                      
      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
@endsection