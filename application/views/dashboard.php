<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= count($category); ?></h3>

                <p>Category</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-tags fa-fw"></i>
            </div>
            <a href="<?= base_url('category'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= count($posts); ?></h3>

                <p>Posts</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-newspaper fa-fw"></i>
            </div>
            <a href="<?= base_url('post/data'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= count($video); ?></h3>

                <p>Video</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-video"></i>
            </div>
            <a href="<?= base_url('video'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= count($uploadF); ?></h3>

                <p>Unggahan File</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-file"></i>
            </div>
            <a href="<?= base_url('uploadf'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<h3><?= count($tenant); ?></h3>

				<p>Tenant</p>
			</div>
			<div class="icon">
				<i class="nav-icon fas fa-building fa-fw"></i>
			</div>
			<a href="<?= base_url('tenant/data'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>

    <!-- ./col -->
    <!-- <div class="col-lg-3 col-6"> -->
        <!-- small box -->
        <!-- <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= count($comments); ?></h3>

                <p>Comments</p>
            </div>
            <div class="icon">
                <i class="fa fa-images"></i>
            </div>
            <a href="<?= base_url('comment'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div> -->
    <!-- </div> -->
    <!-- ./col -->

        <!-- ./col -->
    <!-- <div class="col-lg-3 col-6"> -->
        <!-- small box -->
        <!-- <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= count($members); ?></h3>

                <p>Members</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('member'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <!-- ./col -->
</div>
