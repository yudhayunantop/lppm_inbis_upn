<main id="main">

<div class="content">
    <div class="container-xl">

<div class="content">
<div class="container-xl">
<div class="row row-cards">
    <div class="col-lg-8">
        <div class="card mb-2">
            <div class="card-body">
                <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url(); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?= $post->category_name; ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $post->post_title; ?></li>
                </ol>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <span class="badge bg-blue-lt mb-1">
                    <svg style="height: 12px;" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 3l9 9a1.5 1.5 0 0 1 0 2l-6 6a1.5 1.5 0 0 1 -2 0l-9 -9v-4a4 4 0 0 1 4 -4h4" />
                        <circle cx="9" cy="9" r="2" />
                    </svg>
                    <?= $post->category_name; ?>
                </span>
                <h1 class="text-capitalize mb-3"><?= $post->post_title; ?></h1>
                <div class="post-meta">
                    <div>
                        <a href="#" class="btn btn-sm">
                            <?php if ($post->avatar) : ?>
                                <span class="avatar" style="background-image: url(<?= base_url('assets/dist/img/users/') . $post->avatar ?>)"></span>
                            <?php else : ?>
                                <span class="avatar bg-blue-lt"><?= user_initial($post->fullname); ?></span>
                            <?php endif; ?>
                            <?= $post->fullname; ?>
                        </a>
                        <button type="button" class="btn btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                            <?= custom_date('d M Y', $post->post_date); ?>
                        </button>
                    </div>
                </div>
                <hr class="my-3">
                <?php if ($post->post_thumbnail) : ?>
                    <img src="<?= base_url('assets/dist/img/posts/') . $post->post_thumbnail ?>" class="img-fluid mb-2">
                <?php endif; ?>
                <div class="markdown">
                    <?= $post->post_body; ?>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <?php $this->load->view('post/sidebar'); ?>
    </div>
</div>
</div>
</div>
