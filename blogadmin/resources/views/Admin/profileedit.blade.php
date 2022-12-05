

<!-- {{ session('email') }}
{{ session('password') }} -->
@extends('Admin.layout.main')
@section('pageTitle', 'Profile Edit')
@section('main-container')




<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Form</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Form Basic
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-secondary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						
						<div class="collapse collapse-box" id="basic-form1">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#copy-pre"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#basic-form1"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="copy-pre">
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Text</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Search</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" placeholder="Search Here" type="search">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="bootstrap@example.com" type="email">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">URL</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="https://getbootstrap.com" type="url">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="1-(111)-111-1111" type="tel">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Password</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="password" type="password">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Number</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="100" type="number">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control date-picker" placeholder="Select Date" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Month</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control month-picker" placeholder="Select Month" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control time-picker" placeholder="Select time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Select</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Color</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="#563d7c" type="color">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="50" type="range">
		</div>
	</div>
</form>
							</code></pre>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms End -->

					<!-- horizontal Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">horizontal Basic Forms</h4>
								<p class="mb-30">All bootstrap element classies</p>
							</div>
							<div class="pull-right">
								<a
									href="#horizontal-basic-form1"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Source Code</a
								>
							</div>
						</div>

                        @if(session('success'))
                      <div class="card-alert card gradient-45deg-green-teal">
                        <div class="card-content white-text">
                          <p>
                            <i class="material-icons">check</i> SUCCESS : {{ session('success') }}</p>
                        </div>
                      </div>
                        @endif


                        @if(session('error'))
                      <div class="card-alert card gradient-45deg-green-teal">
                        <div class="card-content white-text">
                          <p>
                            <i class="material-icons">check</i> SUCCESS : {{ session('error') }}</p>
                        </div>
                      </div>
                        @endif
						<form action="{{route('profileupdate')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <?php foreach($data as $d){ ?>

                            
							<div class="form-group">
								<label>User Name</label>
								<input
									class="form-control"
									type="text" name="name"
									placeholder="Name" required value="<?=$d->name; ?>"
								/>
                                <input type="hidden" name="id" value="<?=$d->id; ?>">
                                @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
							</div>

                            <div class="form-group">
								<label>User Email</label>
								<input
									class="form-control"
									type="email" name="email"
									placeholder="Email" required value="<?=$d->email; ?>"
								/>
                                @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
							</div>
							
							<div class="form-group">
								<label>Current Password</label>
								<input
									class="form-control"
									type="password" name="current_password"
									placeholder="Current Password" value=""
								/>
                                @if ($errors->has('current_password'))
                                      <span class="text-danger">{{ $errors->first('current_password') }}</span>
                                  @endif
							</div>
							
                            <div class="form-group">
								<label>New Password</label>
								<input
									class="form-control"
									type="password" name="new_password"
									placeholder="New Password" value=""
								/>
                                @if ($errors->has('new_password'))
                                      <span class="text-danger">{{ $errors->first('new_password') }}</span>
                                  @endif
							</div>
							
							<?php } ?>
                            <input type="submit" name="submit">
						</form>
						<div class="collapse collapse-box" id="horizontal-basic-form1">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#horizontal-basic"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#horizontal-basic-form1"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="horizontal-basic">
<form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	
	<div class="form-group">
		<label>Example file input</label>
		<input type="file" class="form-control-file form-control height-auto">
	</div>

</form>

</code></pre>
							</div>
						</div>
					</div>
					<!-- horizontal Basic Forms End -->

					<!-- Form grid Start -->
					<!-- <div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Form grid</h4>
								<p class="mb-30">All bootstrap element classies</p>
							</div>
							<div class="pull-right">
								<a
									href="#form-grid-form"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Source Code</a
								>
							</div>
						</div> -->
						<!-- <form>
							<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>col-md-4</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>col-md-4</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group">
										<label>col-md-4</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>col-md-3</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>col-md-3</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>col-md-3</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>col-md-3</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>col-md-6</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>col-md-6</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>col-md-6</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>col-md-3</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group">
										<label>col-md-3</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>col-md-12</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-sm-12">
									<div class="form-group">
										<label>col-md-2</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="form-group">
										<label>col-md-2</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="form-group">
										<label>col-md-2</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="form-group">
										<label>col-md-2</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="form-group">
										<label>col-md-2</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-2 col-sm-12">
									<div class="form-group">
										<label>col-md-2</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
						</form> -->
						<div class="collapse collapse-box" id="form-grid-form">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#form-grid"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#form-grid-form"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="form-grid">
<!-- <form>
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>col-md-4</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>col-md-4</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="form-group">
				<label>col-md-4</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label>col-md-6</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label>col-md-6</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group">
				<label>col-md-6</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="form-group">
				<label>col-md-3</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="form-group">
				<label>col-md-12</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="col-md-2 col-sm-12">
			<div class="form-group">
				<label>col-md-2</label>
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
</form> -->
							</code></pre>
							</div>
						</div>
					</div>
					<!-- Form grid End -->

					<!-- Input Validation Start -->
					<div class="pd-20 card-box mb-30">
						<!-- <div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Input Validation</h4>
								<p class="mb-30">
									Validation styles for error, warning, and success
								</p>
							</div>
							<div class="pull-right">
								<a
									href="#input-validation-form"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Source Code</a
								>
							</div>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group has-success">
										<label class="form-control-label">Input with success</label>
										<input
											type="text"
											class="form-control form-control-success"
										/>
										<div class="form-control-feedback">
											Success! You've done it.
										</div>
										<small class="form-text text-muted"
											>Example help text that remains unchanged.</small
										>
									</div>
									<div class="form-group has-warning">
										<label class="form-control-label">Input with warning</label>
										<input
											type="text"
											class="form-control form-control-warning"
										/>
										<div class="form-control-feedback">
											Shucks, check the formatting of that and try again.
										</div>
										<small class="form-text text-muted"
											>Example help text that remains unchanged.</small
										>
									</div>
									<div class="form-group has-danger">
										<label class="form-control-label">Input with danger</label>
										<input
											type="text"
											class="form-control form-control-danger"
										/>
										<div class="form-control-feedback">
											Sorry, that username's taken. Try another?
										</div>
										<small class="form-text text-muted"
											>Example help text that remains unchanged.</small
										>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group has-success row">
										<label
											class="form-control-label col-sm-12 col-md-3 col-form-label"
											>Input with success</label
										>
										<div class="col-sm-12 col-md-9">
											<input
												type="text"
												class="form-control form-control-success"
											/>
											<div class="form-control-feedback">
												Success! You've done it.
											</div>
											<small class="form-text text-muted"
												>Example help text that remains unchanged.</small
											>
										</div>
									</div>
									<div class="form-group has-warning row">
										<label
											class="form-control-label col-sm-12 col-md-3 col-form-label"
											>Input with warning</label
										>
										<div class="col-sm-12 col-md-9">
											<input
												type="text"
												class="form-control form-control-warning"
											/>
											<div class="form-control-feedback">
												Shucks, check the formatting of that and try again.
											</div>
											<small class="form-text text-muted"
												>Example help text that remains unchanged.</small
											>
										</div>
									</div>
									<div class="form-group has-danger row">
										<label
											class="form-control-label col-sm-12 col-md-3 col-form-label"
											>Input with danger</label
										>
										<div class="col-sm-12 col-md-9">
											<input
												type="text"
												class="form-control form-control-danger"
											/>
											<div class="form-control-feedback">
												Sorry, that username's taken. Try another?
											</div>
											<small class="form-text text-muted"
												>Example help text that remains unchanged.</small
											>
										</div>
									</div>
								</div>
							</div>
						</form> -->
						<div class="collapse collapse-box" id="input-validation-form">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#input-validation"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#input-validation-form"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="input-validation">
<form>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success">
				<label class="form-control-label">Input with success</label>
				<input type="text" class="form-control form-control-success">
				<div class="form-control-feedback">Success! You've done it.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-warning">
				<label class="form-control-label">Input with warning</label>
				<input type="text" class="form-control form-control-warning">
				<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-danger">
				<label class="form-control-label">Input with danger</label>
				<input type="text" class="form-control form-control-danger">
				<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with success</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-success">
					<div class="form-control-feedback">Success! You've done it.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-warning row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with warning</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-warning">
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-danger row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with danger</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-danger">
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
		</div>
	</div>
</form>
							</code></pre>
							</div>
						</div>
					</div>
					<!-- Input Validation End -->
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>





@endsection