

@extends('broker.ex')

@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">  </h3>
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
                    <h4 class="card-title"> Brokers</h4>
                    
                    
                    <p class="card-description"> <code></code>
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> </th>
                          <th> Broker</th>
                          <th> Broker Email address</th>
                          <th> Phone</th>

                          <th> ID</th>

                          <th> </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($user as $user)
                        <tr>
                          <td>  </td>
                          <td> {{$user->name}} </td>
                          <td> {{$user->email}} </td>
                          <td>
                            {{$user->phone_number}}
                          </td>
                          <td> {{$user->ID_Number}} </td>
                          <td></td>
                          

                         
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

@endsection
