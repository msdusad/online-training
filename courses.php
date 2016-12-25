<?php require_once('header.php');?>
    
    
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Courses</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-inner">
                                <div class="course-search">
                                    <h3>Find a course</h3>

                                    <form id="quick_form" class="course-search-form">

                                        <input name="input" id="input" class="searchbox" placeholder="Type Course Title in Here" autocomplete="off"  title="Course Title">

                                        <div id="search_advanced" class="clearfix">
                                            
                                            <p class="search-form-item">
                                            <label class="alabel" for="Campus">Campus:</label>
                                            <select class="searchselect" id="Campus" name="Campus">
                                                <option value="-1">-- select --</option>
                                                <option value="Ballarat">Ballarat</option>
                                                <option value="Brisbane">Brisbane</option>
                                                <option value="Canberra">Canberra</option>
                                                <option value="Melbourne">Melbourne</option>
                                                <option value="North Sydney">North Sydney</option>
                                                <option value="Strathfield">Strathfield</option>
                                            </select>
                                            </p>
                                            <p class="search-form-item">
                                            <label class="alabel" for="Discipline">Discipline:</label>
                                            <select class="searchselect" id="Discipline" name="Discipline">
                                                <option value="-1">-- select --</option>
                                                <option value="Accounting and Finance">Accounting and Finance</option>
                                                <option value="Applied Public Health">Applied Public Health</option>
                                                <option value="Arts and Media">Arts and Media</option>
                                                <option value="Business Administration">Business Administration</option>
                                                <option value="Clinical Education">Clinical Education</option>
                                                <option value="Counselling">Counselling</option>
                                                <option value="Creative Arts">Creative Arts</option>
                                                <option value="Visual Arts and Design">Visual Arts and Design</option>
                                                <option value="Cross Institutional">Cross Institutional</option>
                                                <option value="Education Law">Education Law</option>
                                                <option value="Educational Leadership">Educational Leadership</option>
                                            </select>
                                            
                                            <p class="search-form-item">
                                            <label class="alabel" for="Study_Level">Study Level:</label>
                                            <select class="searchselect" id="Study_Level" name="Study_Level">
                                                <option value="-1">-- select --</option>
                                                <option value="Undergraduate">Undergraduate</option>
                                                <option value="Postgraduate">Postgraduate</option>
                                                <option value="CPD">CPD</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            
                                            <p class="search-form-item select-yes">
                                            <label class="alabel" for="Online">Online:</label>
                                            <input value="Yes" id="Online" name="Online" type="checkbox">
                                            <span>Yes</span>
                                            
                                            <p class="search-form-item select-yes">
                                            <label class="alabel" for="International">International:</label>
                                            <input value="Yes" id="International" name="International" type="checkbox">
                                            <span>Yes</span>
                                            
                                            <p class="search-form-item select-yes">
                                            <label class="alabel" for="Midyear">Midyear Entry:</label>
                                            <input value="1" id="Midyear" type="checkbox" name="Midyear">
                                            <span>Yes</span>

                                        </div>
                                        <input class="mainBtn" value="Submit Search" type="submit">
                                    </form>

                                </div>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-inner">
                                
                                <dl class="course-list" role="tablist">
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Short Courses</span>
                                        <a href="course-single.html">Master of Business Administration <span class="label label-success">New Course</span></a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Postgraduate</span>
                                        <a href="course-single.html">Distance Learning MBA Business Management</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">CPD</span>
                                        <a href="course-single.html">Environmental Science BTEC (HND) Course</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Postgraduate</span>
                                        <a href="course-single.html">Criminal Justice & Criminology</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Other</span>
                                        <a href="course-single.html">Understanding Substance Misuse QCF Level 3</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Short Courses</span>
                                        <a href="course-single.html">AutoCAD Mechanical 2012 Beginner to Advanced Training</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">CPD</span>
                                        <a href="course-single.html">Introduction to Web Design with HTML <span class="label label-warning">Save 30%</span></a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Postgraduate</span>
                                        <a href="course-single.html">Creative Suite: CS6 Design & Web Workflow</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Short Courses</span>
                                        <a href="course-single.html">Illustrator Jumpstart - zero to HERO</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Other</span>
                                        <a href="course-single.html">Marketing, Media and Advertising (BTEC HND)</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Other</span>
                                        <a href="course-single.html">CAM Diploma in Digital Marketing <span class="label label-danger">Not Avaliable</span></a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Short Courses</span>
                                        <a href="course-single.html">Higher Level Teaching Assistant & Child Psychology</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">CPD</span>
                                        <a href="course-single.html">Special Education Needs (SEN) Teaching Assistant Level 3</a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Postgraduate</span>
                                        <a href="course-single.html">Masters degree in Education </a>
                                    </dt>
                                    <dt>
                                        <i class="fa fa-caret-right ui-icon"></i>
                                        <span class="level">Other</span>
                                        <a href="course-single.html">TAP Training Delivery skills (for new trainers)</a>
                                    </dt>
                                </dl>
    
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Click here to load more</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->


            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Top Professors</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="http://placehold.it/75x75" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="http://placehold.it/75x75" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="http://placehold.it/75x75" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg" title="Gallery Tittle One">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg" title="Gallery Tittle Two">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <!-- begin The Footer -->
<?php require_once('footer.php');?>