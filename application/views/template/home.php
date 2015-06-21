<div class="row-fluid">
        	<div class="span12 well">
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-centered" src="<?php echo base_url(); ?>assets/img/rice.jpg" alt="">
                        <div class="carousel-caption">
                          <h4>ধান</h4>
                          <p>ধান বাংলাদেশের প্রধান ফসল</p>
                        </div>
                      </div>
                      <div class="item">
                        <img class="img-centered" src="<?php echo base_url(); ?>assets/img/jute.jpg" alt="">
                        <div class="carousel-caption">
                          <h4>পাট</h4>
                          <p>পাট বাংলাদেশের প্রধান অর্থকরী ফসল</p>
                        </div>
                      </div>
                      <div class="item">
                        <img class="img-centered" src="<?php echo base_url(); ?>assets/img/hand.jpg" alt="">
                        <div class="carousel-caption">
                          <h4>ফসল</h4>
                          <p>কৃষকের হাতে ফসল</p>
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>
            </div>
        </div>
        <div class="row-fluid text-center">
        	<div class="span4 well">
            	<img src="<?php echo base_url(); ?>assets/img/info64.png"/>
                <h2>তথ্য</h2>
                <p>চাষাবাদ, কীটনাশক, সার, কৃষি ঋণ ইত্যাদি সংক্রান্ত তথ্য জানুন</p>
                
            </div>
        	<div class="span4 well">
            	<img src="<?php echo base_url(); ?>assets/img/business64.png"/>
                <h2>ব্যবসা-বাণিজ্য</h2>
				<a class="btn btn-primary" href="<?php echo $url['list_sell']; ?>" >ফসল ক্রয় করুন</a>
				<a class="btn btn-primary" href="<?php echo $url['list_buy']; ?>" >ফসল বিক্রয় করুন</a>

            </div>
            <div class="span4 well">
            	<img src="<?php echo base_url(); ?>assets/img/qa64.png"/>
                <h2>প্রশ্ন-উত্তর</h2>
                <a class="btn btn-primary" href="<?php echo $url['all_question']; ?>" >প্রশ্ন-উত্তর দেখুন</a>
                <a class="btn btn-primary" href="<?php echo $url['new_question']; ?>" >নতুন প্রশ্ন করুন</a>
            </div>
        </div>
