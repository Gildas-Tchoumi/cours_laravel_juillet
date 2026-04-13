@extends('Home.master')

@section('content')
<div class="main-content">
        <div class="content-wrapper">
          <div class="container-fluid"><!--Statistics cards Starts-->
            <div class="row">
                <h1>Create user</h1>
                <div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title-wrap bar-info">
												<h4 class="card-title" id="basic-layout-round-controls">Complaint Form
												</h4>
											</div>
											<p class="mb-0">This is a variation to the default form control styling. In
												this example all the form controls has round styling. To
												apply round style add class
												<code>round</code> to any form control.
											</p>
										</div>
										<div class="card-body">
											<div class="px-3">

												<form class="form" action="{{ route('users.store') }}" method="post">
                                                    @csrf
													<div class="form-body">

														<div class="form-group">
															<label for="firstname">firstName</label>
															<input type="text" id="firstname" class="form-control round" name="firstname">
														</div>
                                                        <div class="form-group">
															<label for="sexe">Sexe</label>
															<select id="sexe" class="form-control round" name="sexe">
																<option value="masculin">Masculin</option>
																<option value="feminin">Féminin</option>
															</select>
														</div>
                                                        <div class="form-group">
															<label for="email">Email</label>
															<input type="email" id="email" class="form-control round" name="email">
														</div>
														<div class="form-group">
															<label for="password">Password</label>
															<input type="password" id="password" class="form-control round" name="password">
														</div>
														{{-- <div class="form-group">
															<label for="quantity">Quantity</label>
															<input type="number" id="quantity" class="form-control round" name="quantity">
														</div> --}}
														{{-- <div class="form-group">
															<label for="category_id">Category</label>
															<select id="category_id" class="form-control round" name="category_id">
																<option value="">Select a category</option>
																@foreach ($categories as $category)
																	<option value="{{ $category->id }}">{{ $category->name }}</option>
																@endforeach
															</select>
														</div> --}}

														{{-- <div class="form-group">
															<label for="description">Description</label>
															<textarea id="complaindescriptiontinput5" rows="5"
																class="form-control round"
																name="description"></textarea>
														</div> --}}

													</div>

													<div class="form-actions">
														<button type="" class="btn btn-danger mr-1">
															<i class="icon-trash"></i> Cancel
														</button>
														<button type="submit" class="btn btn-success">
															<i class="icon-note"></i> Save
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
                </div>
              </div>
                </div>
                </div>
@endsection
