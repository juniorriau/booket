<section class="section-frame overflow-hidden">
    <div class="wrapper bg-soft-primary">
        <div class="container py-12 py-md-16 text-center">
            <div class="row">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3"><?php echo $category->category ?></h1>
                    <p class="lead px-lg-5 px-xxl-8 mb-1"><?php echo $category->description ?></p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8">
                        <?php
                        $tags = array();
                        if ($posts) {

                            foreach ($posts as $p) {
                                $ttag = explode(",", $p->keywords);
                                $tags = array_merge($tags, $ttag);
                                ?>
                                <article class="item post col-md-6">
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="<?php echo site_url($p->postimagethumb) ?>" alt="" /></a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Baca</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                    <a href="<?php echo site_url("web/categories/" . $p->categoryslug) ?>" class="hover" rel="category"><?php echo $p->categoryname ?></a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?php echo site_url("web/posts/" . $p->slug) ?>"><?php echo $p->title ?></a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p><?php echo substr($p->content, 0, 100) ?></p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo date_format(date_create($p->createdat), "d F Y") ?></span></li>
                                                <li class="post-likes ms-auto"><i class="uil uil-heart-alt"></i><?php echo $p->like ?> Suka</li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /.post -->

                                <?php
                            }
                        } else {
                            $this->load->view('404');
                        }
                        ?>
                    </div>
                    <!-- /.row -->
                </div>
                <?php echo $pagination ?>

            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
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
                        <?php
                        foreach ($tags as $kw => $v) {
                            echo '<li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">' . $v . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </aside>
            <!--/column .sidebar-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!--/section-->