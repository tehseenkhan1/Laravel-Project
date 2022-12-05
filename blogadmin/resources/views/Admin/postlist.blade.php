
<!-- {{ session('email') }}
{{ session('password') }} -->
@extends('Admin.layout.main')
@section('pageTitle', 'Post List')
@section('main-container')


<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
                    <div class="card-box mb-30">
                    @if(session('status'))
                  <div class="card-alert card gradient-45deg-green-teal">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">check</i> SUCCESS : {{ session('status') }}</p>
                    </div>
                  </div>
                    @endif
						<div class="pd-20">
							<h4 class="text-blue h4">Data Table Simple</h4>
							<p class="mb-0">
								you can find more options
								<a
									class="text-primary"
									href="https://datatables.net/"
									target="_blank"
									>Click Here</a
								>
							</p>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Id</th>
										<th>Post Name</th>
										<th>Post Desc</th>
										<th>Post Image</th>
										<th>Post Date</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php 
                                    $i=1;
                                    foreach($data as $d){ ?>
									<tr>
										<td class="table-plus"><?=$i; ?></td>
										<td><?=$d->post_name; ?></td>
										<td><?=$d->post_description; ?></td>
										<td><img src="<?=url('uploads/apifileregistration/'.$d->post_image); ?>" style="width: 80px;" ></td>
										<td><?=$d->created_at; ?></td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<!-- <a class="dropdown-item" href="<?=$d->post_id; ?>"
														><i class="dw dw-eye"></i> View</a
													> -->
													<a class="dropdown-item" href="{{url('post_edit/'.$d->post_id)}}"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="{{url('post_delete/'.$d->post_id)}}"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<?php
                                    $i++;
                                } ?>
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
</div>

@endsection
