
<!-- {{ session('email') }}
{{ session('password') }} -->
@extends('Admin.layout.main')
@section('pageTitle', 'All Comments')
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
                        <div class="main-container">
				<div class="min-height-200px">
					<div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-8 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-img">
											<img src="{{url('Admin/vendors/images/img2.jpg')}}" alt="" />
										</div>
										<div class="blog-caption">
                                            <?php foreach ($showcomments as $c){  ?>
											<h4 class="mb-10">
                                                <?=$c->name; ?>
											</h4>
                                            <h6><?=$c->email; ?></h6>
											<p>
                                                <?=$c->comment; ?>
											</p>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
					</div>
                </div>
            </div>
</div>

@endsection
