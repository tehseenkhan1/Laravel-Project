
<!-- {{ session('email') }}
{{ session('password') }} -->
@extends('Admin.layout.main')
@section('pageTitle', 'All Likes')
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
										<th>Post Image</th>
										<th>Post Likes</th>
									</tr>
								</thead>
								<tbody>
                                    <?php 
                                    $i=0;
                                    foreach($alllikes as $d){ ?>
									<tr>
										<td class="table-plus"><?=$i; ?></td>
										<td><?=$d->post_name; ?></td>
										<td><img src="<?=url('uploads/apifileregistration/'.$d->post_image); ?>" style="width: 80px;" ></td>
										
                                        <td><?=$total[$i];
                                        ?></td>
										
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
