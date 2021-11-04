<main id="main">

<div class="content">
    <div class="container-xl">

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

        <section class="services">
            <div class="section-title">
                <h2>Hasil Pencarian</h2>
            </div>
                
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($posts as $post) :
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
            <?php endforeach; ?>
            <!-- <div class="col-md-12 text-center">
                <a href="<?= base_url('post/index') . '?category=2 &search=' ?>" class="btn btn-primary btn-lg" role="button">Read More</a>
            </div> -->
        </div>
        </div>
        </section>
                    
        <div class="row mt-4">
            <div class="col-12">
            <?= $this->pagination->create_links(); ?>
            </div>
        </div>

    </div>
</div>