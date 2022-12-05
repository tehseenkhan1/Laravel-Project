<!-- {{ session('email') }}
{{ session('password') }} -->
@extends('Admin.layout.main')
@section('pageTitle', 'Blogs Page')
@section('main-container')

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Product</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Product
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="product-wrap">
						<div class="product-list">
							<ul class="row">
                                <?php 
                               
                                foreach($data_blog as $d){ ?>
								<li class="col-lg-4 col-md-6 col-sm-12">
									<div class="product-box">
										<div class="producct-img">
											<img src="<?=url('uploads/apifileregistration/'.$d->post_image); ?>" style="height: 200px; width: 100%;" alt="" />
										</div>
										<div class="product-caption">
											<h4><a href="#"><?=$d->post_name; ?></a></h4>
											<div class="price"><?=$d->post_description; ?></div>
											<!-- <a href="#" class="btn btn-outline-primary" id="<?=$d->post_id;?>">Comments</a> -->
                                            <div class="btn btn-outline-primary" style="color: #fff; background-color: #d9c39c; border-color: #7a71c3;">
								<a
									href="#"
									class="btn-block btn-outline-primary" id="<?=$d->post_id;?>"
									data-toggle="modal"
									data-target="#Medium-modal"
									type="button"
								>
                                Comments
								</a>
								<div
									class="modal fade"
									id="Medium-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title btn-outline-primary" id="<?=$d->post_id;?>">
													Add Comments
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<form action="{{route('addcomment')}}" method="POST">
                                                                            @csrf                        
                                                                        <span id="msg">
                                                                            </span>
                                                                            <input type="textarea" name="comments" style=" width: 100%; height: 250px; ">                                                                        
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
												<button type="submit" class="btn btn-primary">
                                                                            Save changes
                                                                        </button>
											</div>
                                            </form>
										</div>
									</div>
								</div>
							</div>

                                            
                                            <?php $i = 0;
                                            foreach($data_like as $l){
                                                if($l ->blog_id ==  $d->post_id){
                                                    $i++; 
                                                     }
                                                }
                                                if ($i == 1){
                                                   ?>  
                                            <a  href="{{url('dislike/'.$d->post_id)}}" class="btn dislike" data-bgcolor="#bd081c" data-color="#ffffff" style="color: rgb(255, 255, 255); background-color: rgb(189, 8, 28);">
                                                <i class="fa fa-pinterest-p"></i> Dislike
                                                </a> 
                                               <?php } else { ?> 
                                            <a href= "{{url('like/'.$d->post_id)}}" class="btn like" data-bgcolor="#00b489" data-color="#ffffff" style="color: rgb(255, 255, 255); background-color: rgb(0, 180, 137);">
                                                <i class="fa fa-vine"></i> Like
                                                </a>
                                            <?php }
                                          ?>
										</div>
									</div>
								</li>
							<?php
                           
                        
                        } ?>	
							</ul>
						</div>
						<div class="blog-pagination mb-30">
							<div class="btn-toolbar justify-content-center mb-15">
								<div class="btn-group">
									<a href="#" class="btn btn-outline-primary prev"
										><i class="fa fa-angle-double-left"></i
									></a>
									<a href="#" class="btn btn-primary current">1</a>
									<!-- <a href="#" class="btn btn-outline-primary">2</a>
									<span class="btn btn-outline-primary">3</span>
									<a href="#" class="btn btn-outline-primary">4</a>
									<a href="#" class="btn btn-outline-primary">5</a> -->
									<a href="#" class="btn btn-outline-primary next"
										><i class="fa fa-angle-double-right"></i
									></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                $(".btn-outline-primary").click(function(){
                    $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
                    var blog_id = $(this).attr('id');
                    // alert(blog_id);
                    //         return;
                    $.ajax({
                        type:'POST',
                        url:'{{ route('blogform') }}',
                        // url: "blogform/"+id,
                        data:{
                            "_token": "{{ csrf_token() }}","blog_id": blog_id
                      },
                        success:function(data) {
                            // alert(data);
                            // return;
                            $("#msg").html(data);
                        }
                    });
                });
                });
                </script>
@endsection