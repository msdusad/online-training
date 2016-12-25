<?php require_once('header.php');?>
    
    
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Gallery</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Filter Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="filter" data-filter="all">Show All</li>
                            <li class="filter" data-filter="students">Students Learning</li>
                            <li class="filter" data-filter="campus">Campus Images</li>
                            <li class="filter" data-filter="nature">Nature Of University</li>
                            <li class="filter" data-filter="travel">Traveling with Teachers</li>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Sort Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="sort active" data-sort="default" data-order="desc">Default</li>
                            <li class="sort" data-sort="data-cat" data-order="asc">Ascending</li>
                            <li class="sort" data-sort="data-cat" data-order="desc">Descending</li>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">
                    
                    <div id="Grid">
                        
                    
                    <div class="col-md-4 mix students" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/260x180" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">2014 Faculty Biennial</a></h4>
                                <p class="small-text">Featuring painting, sculpture, ceramics</p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 mix campus" data-cat="1">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/260x180" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">Contemporary Southeastern Art</a></h4>
                                <p class="small-text">January 26 - March 8, 2008</p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 mix nature" data-cat="2">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/260x180" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">Juried Student Exhibition</a></h4>
                                <p class="small-text">Lorem ipsum sit amet, consectetur elit.</p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 mix campus" data-cat="2">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/260x180" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">Game Changer II</a></h4>
                                <p class="small-text">Paintings and Sculpture forms.</p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 mix travel" data-cat="3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/260x180" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">Beauty of Bucknell</a></h4>
                                <p class="small-text">Lorem ipsum sit amet, consectetur elit.</p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                    <div class="col-md-4 mix students" data-cat="2">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/260x180" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">Royal Fort House</a></h4>
                                <p class="small-text">University Institute for Advanced Studies.</p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->

                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Load more images</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->

    <!-- begin The Footer -->
<?php require_once('footer.php');?>