<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><span>Inkubator Bisnis Teknologi Technopark</span></h2>
            <p class="animate__animated animate__fadeInUp">Inkubator Bisnis Teknologi (IBT) Technopark merupakan lembaga yang di bentuk oleh Universitas Pembangunan Nasional “Veteran”  Jawa Timur yang berfungsi melakukan inkubasi atau pendampingan terhadap Perusahaan Pemula Berbasis Teknologi / startup.</p>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
        <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">“We Are Your Choices”</h2>
            <p class="animate__animated animate__fadeInUp">Pengalaman kami lebih dari 5 tahun dalam kegiatan inkubasi, menjadikan kami inkubator yang berpengalaman untuk menumbuhkembangkan Perusahaan Pemula Berbasis Bekonologi / statrtup.</p>
        </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

    </div>
</section>
<!-- End Hero -->

<main id="main">

<div class="content">
    <div class="container-xl">
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
        <section class="why-us" data-aos="fade-up" date-aos-delay="200" id="video">
            <div class="section-title">
                <h2>Video</h2>
            </div>
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
		<section class="why-us" id="tenant">
			<div class="section-title">
				<h2>Tenant</h2>
            </div>
            <div class="container">
                <section class="customer-logos slider">
                <?php
                    foreach ($tenant as $post) :?>
                        <div class="slide">
                            <a href="<?= $post->linktenant; ?>">
                            <img src="<?= base_url('assets/dist/logo/') . $post->logo  ?>">
                        </a>
                    </div>
                    <?php endforeach;?>
                </section>
            </div>
            <br><br><br>
            <div class="col-md-12 text-center">
                <a href="<?= base_url('tenant/tampiltenant');?>" class="btn btn-primary btn-lg" class="btn btn-primary btn-lg" role="button">Read More</a>
            </div>
		</section>

