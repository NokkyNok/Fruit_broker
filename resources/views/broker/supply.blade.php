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
                    <h4 class="card-title">History of Supplies</h4>
                    
                    <a href="{{ url('reports/supply-report') }}" class="btn btn-danger">Print Cumulative report</a>
                    <p class="card-description"> <code></code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> </th>
                          <th> Broker supplier </th>
                          <th> Broker Contact</th>
                          <th> Supply Amount </th>
                          <th> Supplier Location </th>
                          <th> Fruit Grade</th>
                          <th> Due After </th>
                          <th>State</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($supply as $supply)
                        <tr>
                          <td> 1 </td>
                          <td> {{$supply->supplier_name}} </td>
                          <td>
                            {{$supply->supplier_contact}}
                          </td>
                          <td> {{$supply->supply_amount}} </td>
                          <td> {{$supply->location}} </td>
                          <td>Grade/size {{$supply->fruit_grade}}</td>
                          <td> {{$supply->due_after}} days</td>
                          <td>{{$supply->state}}</td>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

@endsection