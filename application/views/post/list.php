
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
