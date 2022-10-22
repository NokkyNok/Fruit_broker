@extends('broker.ex')

@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Supply Requests </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Supplier Listings</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            
            @include('flash-message')
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Request made to broker</h4>
                    <p class="card-description"> <code></code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> </th>
                          <th> Total To Receive</th>
                          <th> Fruits </th>
                          <th> Grade/size</th>
                          <th>State</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($supply as $supply)
                        <tr>
                          <td> 1 </td>
                          <td> {{$supply->Total_to_be_paid}} </td>
                          <td>
                            {{$supply->supply_fruits_no}} Fruits
                          </td>
                          <td> {{$supply->fruit_grade}} </td>
                          <td>Pending</td>
                        
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