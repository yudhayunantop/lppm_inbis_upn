
        <form action="<?= base_url('post/all'); ?>" method="get">
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <circle cx="10" cy="10" r="7" />
                                                    <line x1="21" y1="21" x2="15" y2="15" />
                                                </svg>
                                            </span>
                                            <input type="hidden" name="category" value="<?= set_value('category', $selected_category); ?>">
                                            <input type="text" name="search" class="form-control" placeholder="Search…">
                                        </div>
        </form>
        
        <!-- Page Pengumuman -->
        <section class="services" id="pengumuman">
            <div class="section-title">
                <h2>Pengumuman</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($pengumuman as $post) :
                        if($post->category_name=='Pengumuman') :
                        $thumbnail = $post->post_thumbnail ? $post->post_thumbnail : $this->config->item('post_thumbnail_default');
                    ?>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="img-thumbnail">
                                <a href="<?= base_url('post/view/') . $post->post_slug; ?>">
                                <img src="<?= base_url('assets/dist/img/posts/') . $thumbnail  ?>" class="card-img-top">
                            </div>
                            <h4 class="title"><?= $post->post_title; ?></h4>
                        </a>
                                    <p class="description"><?= $post->category_name; ?>|<?= custom_date('d F Y', $post->post_date); ?></p>
                                </div>
                        </div>
                        
                        <?php endif;?>
            <?php endforeach; ?>
            <div class="col-md-12 text-center">
                <a href="<?= base_url('post/all') . '?category=6 &search=' ?>" class="btn btn-primary btn-lg" class="btn btn-primary btn-lg" role="button">Read More</a>
            </div>
        </div>
        </div>
        </section>

        <!-- Page Berita -->
        <section class="services" id="berita">
            <div class="section-title">
                <h2>Berita</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($berita as $post) :
                        if($post->category_name=='Berita') :
                        $thumbnail = $post->post_thumbnail ? $post->post_thumbnail : $this->config->item('post_thumbnail_default');
                    ?>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="img-thumbnail">
                                <a href="<?= base_url('post/view/') . $post->post_slug; ?>">
                                <img src="<?= base_url('assets/dist/img/posts/') . $thumbnail  ?>" class="card-img-top">
                            </div>
                            <h4 class="title"><?= $post->post_title; ?></h4>
                        </a>
                                    <p class="description"><?= $post->category_name; ?>|<?= custom_date('d F Y', $post->post_date); ?></p>
                                </div>
                        </div>
                        
                        <?php endif;?>
            <?php endforeach; ?>
            <div class="col-md-12 text-center">
                <a href="<?= base_url('post/all') . '?category=2' ?>" class="btn btn-primary btn-lg" role="button">Read More</a>
            </div>
        </div>
        </div>
        </section>

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">       
                <div class="row">
                    <?php foreach ($video as $x => $post) : ?>
                            <?php if($x==0):?> 
                                <div class="col-md-1">
                                </div>
                                <div class="col-lg-6">
                                    <div class="wadah">
                                    <iframe class="responsive-iframe" src="<?= $post->link?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            <?php endif;?>
                    <?php break; endforeach;?>  
                                <div class="col-lg-3">
                                    <div class="row">
                                    <?php foreach ($video as $x => $post) : ?>
                                        <?php if($x==1):?> 
                                            <div class="col-lg-12">
                                                <div class="wadah embed-responsive embed-responsive-16by9 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">
                                                    <iframe class="responsive-iframe" src="<?= $post->link?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                        <?php if($x==2):?> 
                                            <div class="col-lg-12">
                                                <div class="wadah embed-responsive embed-responsive-16by9 wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">
                                                    <iframe class="responsive-iframe" src="<?= $post->link?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        <?php endif;?>
                                    <?php endforeach;?>    
                                    </div>
                                </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- Page Galeri -->
        <section class="services" id="galeri">
            <div class="section-title">
                <h2>Galeri</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($galeri as $post) :
                        if($post->category_name=='Galeri') :
                        $thumbnail = $post->post_thumbnail ? $post->post_thumbnail : $this->config->item('post_thumbnail_default');
                    ?>
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="img-thumbnail">
                                <a href="<?= base_url('post/view/') . $post->post_slug; ?>">
                                <img src="<?= base_url('assets/dist/img/posts/') . $thumbnail  ?>" class="card-img-top">
                            </div>
                            <h4 class="title"><?= $post->post_title; ?></h4>
                        </a>
                                    <p class="description"><?= $post->category_name; ?>|<?= custom_date('d F Y', $post->post_date); ?></p>
                                </div>
                        </div>
                        
                        <?php endif;?>
            <?php endforeach; ?>
            <div class="col-md-12 text-center">
                <a href="<?= base_url('post/all') . '?category=8 &search=' ?>" class="btn btn-primary btn-lg" class="btn btn-primary btn-lg" role="button">Read More</a>
            </div>
        </div>
        </div>
        </section>

		<!-- Page Tenant -->
		<section class="services" id="tenant">
			<div class="section-title">
				<h2>Tenant</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>
			<div class="container">
				<div class="container mt-5">
					<div class="carousel-container position-relative row">

						<!-- Sorry! Lightbox doesn't work - yet. -->

						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" data-slide-number="0">
									<img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="1">
									<img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="2">
									<img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="3">
									<img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="4">
									<img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="5">
									<img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="6">
									<img src="https://source.unsplash.com/uanoYn1AmPs/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="7">
									<img src="https://source.unsplash.com/_snqARKTgoc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="8">
									<img src="https://source.unsplash.com/M9F8VR0jEPM/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
								<div class="carousel-item" data-slide-number="9">
									<img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
								</div>
							</div>
						</div>

						<!-- Carousel Navigation -->
						<div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row mx-0">
										<div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
											<img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
											<img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
											<img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
											<img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
											<img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
											<img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row mx-0">
										<div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
											<img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
											<img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
											<img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
										</div>
										<div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
											<img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
										</div>
										<div class="col-2 px-1 py-2"></div>
										<div class="col-2 px-1 py-2"></div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div> <!-- /row -->
				</div> <!-- /container -->
			</div>
		</section>

