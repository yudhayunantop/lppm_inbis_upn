<?php if (userdata()) : ?>
    <?= form_open('comment/add', '', ['post_id' => $post_id]); ?>
    <div class="card mb-3">
        <div class="card-body">
            <h3 class="card-title">Type a Comment</h3>
            <textarea class="form-control" rows="4" name="comment_body" placeholder="Type here"></textarea>
            <?= form_open('comment_body'); ?>
        </div>
        <div class="card-footer text-right">
            <button type="reset" class="btn btn-secondary">Clear</button>
            <button type="submit" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="10" y1="14" x2="21" y2="3" />
                    <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
                </svg>
                Publish
            </button>
        </div>
    </div>
    <?= form_close(); ?>
<?php else : ?>
    <div class="alert alert-info text-center">
        Sign in to write comment.
        <a href="<?= base_url('signin'); ?>" class="d-block small font-weight-bold">Sign in</a>
    </div>
<?php endif; ?>

<div class="card mb-4" id="comment-box">
    <div class="card-body">
        <h5 class="card-title mb-3 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                <line x1="12" y1="12" x2="12" y2="12.01" />
                <line x1="8" y1="12" x2="8" y2="12.01" />
                <line x1="16" y1="12" x2="16" y2="12.01" />
            </svg>
            <?= $this->comment->number_of_comments($post->post_id); ?> Comments
        </h5>
        <?php if (!$comments) : ?>
            <div class="alert alert-warning">No Comment</div>
        <?php else : ?>
            <?php foreach ($comments as $c) : ?>
                <div class="divide-y-4" id="c<?= $c->comment_id; ?>">
                    <div>
                        <div class="row">
                            <div class="col-auto">
                                <?php if ($c->avatar) : ?>
                                    <span class="avatar mr-3 rounded-circle" style="background-image: url(<?= base_url('assets/dist/img/users/') . $c->avatar ?>)"></span>
                                <?php else : ?>
                                    <span class="avatar mr-3 rounded-circle bg-blue-lt"><?= user_initial($c->fullname); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="col">
                                <div class="text-truncate">
                                    <strong><?= $c->fullname ? $c->fullname : "Anonymous"; ?></strong>
                                    <p><?= $c->comment_body; ?></p>
                                </div>
                                <div class="small text-muted"><?= custom_date('d M Y', $c->comment_date); ?></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <?php if (userdata()) : ?>
                                    <div class="text-right mb-3">
                                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#reply-box-<?= $c->comment_id; ?>">
                                            Reply
                                        </button>
                                        <?php if (userdata()->user_id == $c->user_id || userdata()->role == "admin") : ?>
                                            <a onclick="return confirm('Confirm Delete?')" href="<?= base_url('comment/delete/' . $c->comment_id); ?>" class="btn btn-default">
                                                Delete
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <div class="collapse" id="reply-box-<?= $c->comment_id; ?>">
                                        <?= form_open('comment/add', '', ['post_id' => $post_id, 'comment_parent' => $c->comment_id]); ?>
                                        <div class="card mb-3 bg-light">
                                            <div class="card-status-top bg-primary"></div>
                                            <div class="card-body">
                                                <h3 class="card-title">Write a Reply</h3>
                                                <textarea class="form-control" rows="4" name="comment_body" placeholder="Type here"></textarea>
                                                <?= form_open('comment_body'); ?>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="reset" class="btn btn-secondary">Clear</button>
                                                <button type="submit" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="10" y1="14" x2="21" y2="3" />
                                                        <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
                                                    </svg>
                                                    Send
                                                </button>
                                            </div>
                                        </div>
                                        <?= form_close(); ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Replies -->
                                <?php foreach ($replies[$c->comment_id] as $reply) : ?>
                                    <div class="divide-y-4" id="c<?= $reply->comment_id; ?>">
                                        <div>
                                            <div class="row">
                                                <div class="col-2 col-md-1"></div>
                                                <div class="col-auto">
                                                    <?php if ($reply->avatar) : ?>
                                                        <span class="avatar mr-3 rounded-circle" style="background-image: url(<?= base_url('assets/dist/img/users/') . $reply->avatar ?>)"></span>
                                                    <?php else : ?>
                                                        <span class="avatar mr-3 rounded-circle bg-blue-lt"><?= user_initial($reply->fullname); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        <strong><?= $reply->fullname ? $reply->fullname : "Anonymous"; ?></strong>
                                                        <p><?= $reply->comment_body; ?></p>
                                                    </div>
                                                    <div class="small text-muted"><?= custom_date('d M Y', $c->comment_date); ?></div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col">
                                                    <?php if (userdata()) : ?>
                                                        <?php if (userdata()->user_id == $reply->user_id || userdata()->role == "admin") : ?>
                                                            <div class="text-right mb-3">
                                                                <a onclick="return confirm('Confirm Delete?')" href="<?= base_url('comment/delete/' . $reply->comment_id); ?>" class="btn btn-default">
                                                                    Delete
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>