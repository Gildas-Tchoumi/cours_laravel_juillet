@extends('Home.master')

@section('content')
<div class="main-content">
        <div class="content-wrapper">
          <div class="container-fluid"><!--Statistics cards Starts-->
            <div class="row">
                <h1>List users</h1>
<!--Basic Table Starts-->
              <section id="simple-table">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title-wrap bar-success">
                          <h4 class="card-title"></h4>
                        </div>
                        <p>
                          For basic styling add the base class
                          <code>.table</code> to any <code>&lt;table&gt;</code>.
                          It may seem super redundant, but given the widespread
                          use of tables for other plugins like calendars and
                          date pickers, we've opted to isolate our custom table
                          styles.
                        </p>
                      </div>
                      <div class="card-body">
                        <div class="card-block">
                          <table class="table">
                            <thead>
                              <tr>
                                {{-- <th>#</th> --}}
                                <th>First Name</th>
                                <th>Sexe</th>
                                <th>Email</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($utilisateurs as $utilisateur)
                                <tr>
                                    {{-- <th scope="row">1</th> --}}
                                    <td>{{ $utilisateur->firstname }}</td>
                                    <td>{{ $utilisateur->sexe }}</td>
                                    <td>{{ $utilisateur->email }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
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
                
              </section>
              <!--Basic Table Ends-->
              </div>
                </div>
                </div>
                </div>
@endsection