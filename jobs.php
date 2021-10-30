<?php include('include/profileheader.php'); ?>
<section id="hero" style="background: url(img/hero-bg.jpg); height: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12">
                
            </div>
        </div>
    </div>
</section>
<section id="feature-job-online-list" style="padding-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4">Jobs</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="buttons-container">
                    <ul class="list-grid-btn">
                        <li>View : </li>
                        <li>
                            <button class="view-btn active list-view" id="list" onclick="listView()"><i class="fas fa-bars"></i></button>
                        </li>
                        <li>
                            <button class="view-btn grid-view" id="grid" onclick="gridView()"><i class="fas fa-th-large"></i></button>
                        </li>
                    </ul>
                    <ul class="sort-options">
                        <li>Sort By :</li>
                        <li>
                            <select name="sort-job" id="sort-lists">
                                <option value="Newest">Newest</option>
                                <option value="Oldest">Oldest</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo1.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">Travel Agency Responsive Minimal Website Design with Mobile App </a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag7.png" alt="" class="flag"> USA</a></span>
                            <span class="job-category cat-color-one"><a href="#">Web Design</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>21 Days</p></li>
                                <li class="amount"><p>$3500</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo2.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">A complete 20 sec Short Film 3D Animation </a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag1.png" alt="" class="flag">China</a></span>
                            <span class="job-category cat-color-two"><a href="#">3D Animation</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>30 - 50 Hr</p></li>
                                <li class="amount"><p>$25/hr</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo3.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">Travel Agency Responsive Minimal Website Design</a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag5.png" alt="" class="flag">Germany</a></span>
                            <span class="job-category cat-color-three"><a href="#">Web Design</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>10 Days</p></li>
                                <li class="amount"><p>$2500</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo4.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">Crowdfunding Mobile App  Design from Scratch</a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag4.png" alt="" class="flag">AUS</a></span>
                            <span class="job-category cat-color-four"><a href="#">UI/UX</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>25 - 30 Hr</p></li>
                                <li class="amount"><p>$22/hr</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo5.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">Market Research, and Digital Marketing</a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag2.png" alt="" class="flag">UK</a></span>
                            <span class="job-category cat-color-five"><a href="#">Marketing</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>07 Days</p></li>
                                <li class="amount"><p>$2050</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo1.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">Travel Agency Responsive Minimal Web</a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag6.png" alt="" class="flag">UAE</a></span>
                            <span class="job-category cat-color-one"><a href="#">Web Design</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>21 Days</p></li>
                                <li class="amount"><p>$3500</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo2.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">A complete 20 sec Short Film now </a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag5.png" alt="" class="flag">Germany</a></span>
                            <span class="job-category cat-color-two"><a href="#">Animation</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>30 - 50 Hr</p></li>
                                <li class="amount"><p>$25/hr</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
                <div class="feature-job-items">
                    <article class="feature-full__job-posts">
                        <div class="company-logo">
                            <a href="#"><img src="img/company-logo/company-logo3.png" alt=""></a>
                        </div>
                        <div class="job-description">
                            <h5 class="job-title"><a href="#">Travel Agency Responsive Minimal Website Design</a></h5>
                            <span class="location"><a href="#"><img src="img/flag/flag1.png" alt="" class="flag">China</a></span>
                            <span class="job-category cat-color-three"><a href="#">Web Design</a></span>
                            <audio controls class="demo">
                                <source src="audio/demo.mp3" type="audio/mp3">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <div class="budget">
                            <ul>
                                <li class="duration"><p>10 Days</p></li>
                                <li class="amount"><p>$2500</p></li>
                            </ul>
                        </div>
                        <div class="apply">
                            <a href="#" class="apply-btn">Contact</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="pagination-area">
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php'); ?>