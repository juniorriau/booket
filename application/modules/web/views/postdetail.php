<section class="wrapper image-wrapper bg-image bg-overlay text-white" data-image-src="./assets/img/photos/bg5.jpg">
    <div class="container pt-18 pb-15 pt-md-20 pb-md-19 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line text-white">
                        <a href="#" class="text-reset" rel="category"><?php echo $post->categoryname ?></a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4 text-white"><?php echo $post->title ?></h1>
                    <ul class="post-meta text-white">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo date_format(date_create($post->createdat), "d F y") ?></span></li>
                        <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span><?php echo $page->fullname ? $page->fullname : $page->username ?></span></a></li>
                        <li class="post-likes"><i class="uil uil-heart-alt"></i><a id="likecounter" href="#" class="text-reset"><?php echo $post->like ?><span> Likes</span></a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <div class="blog single">
                    <div class="card">
                        <figure class="card-img-top"><img src="<?php echo site_url($post->postimage) ?>" alt="<?php echo $post->title ?>" /></figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <?php echo $post->content ?>
                                    </div>
                                    <!-- /.post-content -->
                                    <hr />
                                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                        <div>
                                            <ul class="list-unstyled tag-list mb-0">
                                                <?php
                                                if (!empty($post->keywords)) {
                                                    $k = explode(",", $post->keywords);
                                                    foreach ($k as $kw => $v) {
                                                        echo '<li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">' . $v . '</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="mb-0 mb-md-2">
                                            <div class="dropdown share-dropdown btn-group">
                                                <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="uil uil-share-alt"></i> Share </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="uil uil-twitter"></i>Twitter</a>
                                                    <a class="dropdown-item" href="#"><i class="uil uil-facebook-f"></i>Facebook</a>
                                                    <a class="dropdown-item" href="#"><i class="uil uil-linkedin"></i>Linkedin</a>
                                                </div>
                                                <!--/.dropdown-menu -->
                                                <button id='btnlike' onclick="postlike(<?php echo $post->id ?>)" class="btn btn-sm btn-blue rounded-pill btn-icon btn-icon-start"><i class="uil uil-thumbs-up"></i> Suka</button>
                                            </div>

                                            <!--/.share-dropdown -->
                                        </div>
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Artikel Populer</h4>
                    <ul class="image-list">
                        <?php
                        if ($popular) {
                            foreach ($popular as $pp) {
                                ?>
                                <li>
                                    <figure class="rounded"><a href="<?php echo site_url("web/posts/" . $pp->slug) ?>"><img src="<?php echo site_url($pp->postimagethumb) ?>" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-2"> <a class="link-dark" href="<?php echo site_url("web/posts/" . $pp->slug) ?>"><?php echo $pp->title ?></a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo date_format(date_create($pp->createdat), "d F Y") ?></span></li>
                                            <li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i><?php echo $pp->like ?></a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <!-- /.image-list -->
                </div>
                <div class="widget">
                    <h4 class="widget-title mb-3">Artikel Terbaru</h4>
                    <ul class="image-list">
                        <?php
                        if ($latest) {
                            foreach ($latest as $lp) {
                                ?>
                                <li>
                                    <figure class="rounded"><a href="<?php echo site_url("web/posts/" . $lp->slug) ?>"><img src="<?php echo site_url($lp->postimagethumb) ?>" alt="" /></a></figure>
                                    <div class="post-content">
                                        <h6 class="mb-2"> <a class="link-dark" href="<?php echo site_url("web/posts/" . $lp->slug) ?>"><?php echo $lp->title ?></a> </h6>
                                        <ul class="post-meta">
                                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo date_format(date_create($lp->createdat), "d F Y") ?></span></li>
                                            <li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i><?php echo $lp->like ?></a></li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <!-- /.image-list -->
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Categories</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        <?php
                        if ($categories) {
                            foreach ($categories as $c) {
                                echo '<li><a href="' . site_url("web/categories/" . $c->slug) . '">' . $c->category . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Tags</h4>
                    <ul class="list-unstyled tag-list">
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Still Life</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Urban</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Landscape</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Macro</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Fun</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Workshop</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photography</a></li>
                    </ul>
                </div>
                <!-- /.widget -->

            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->