@extends('broker.ex')
@section('content')


<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
                @include('flash-message')
              <h3 class="page-title">Indicate Your Estimate monthly expense</h3>
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
                    <h4 class="card-title"></h4>
                    <p class="card-description"> {{Auth::user()->name}} Mothly submission Estimate</p>
                    <form class="forms-sample" action="{{route('expense.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                   
                      <div class="form-group">
                        <label for="supplier_contact">Enter your Months Estimate Expense</label>
                        <input type="text" name="total_monthly_expenses" class="form-control"  placeholder="Monthly Expense">
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