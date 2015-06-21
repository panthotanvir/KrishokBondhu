<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>

<link href="<?php echo base_url(); ?>assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/css/jquery.dualSlider.0.2.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_side_menu", 
	orientation: 'v', 
	classname: 'ddsmoothmenu', 
	
	contentsource: "markup" 
})

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", 
	orientation: 'h', 
	classname: 'ddsmoothmenu', 
	
	contentsource: "markup" 
})

</script>

<script src="<?php echo base_url(); ?>assets/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:true,
            autoDelay: 3000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
	
     
</script>

</head>
<body>
<table align="center" border="0" bgcolor="#DBFFB7">
    <tr>
        <td width="30" >
        <div id="templatemo_header_wrapper">
            <div id="templatemo_header">
                <div id="site_title"><a href="#">Free CSS Templates</a></div>
                <div class="ddsmoothmenu_header">
                    <div id="templatemo_menu" class="ddsmoothmenu">
                        <ul>
                            <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/index\">প্রথম পাতা</a>";?></li>
                             <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/about\">আমাদের কথা</a>";?></li>
                            <li><a href="#"> ব্যবসা বানিজ্য </a>
                                <ul>
                                    <li><a href="#"> বাজার-বিশ্লেষণ </a></li>
                                    <li><?php echo anchor('product/buy', 'ক্রয়'); ?></li>
                                    <li><?php echo anchor('product/sell', 'বিক্রয়'); ?></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">ঋণ দাতা সংস্থা </a>
                                <ul>
                               
									<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/0\">বাংলাদেশ ব্যাংক</a>";?></li>                               
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/1\">কৃষি ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/2\">সোনালী ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/3\">অগ্রণী ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/4\">গ্রামীণ ব্যাংক</a>";?></li>
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/bankloan/5\">জনতা ব্যাংক</a>";?></li>
                                </ul>
                            </li>
                            <li><a href="#"> তথ্য ও প্রযুক্তি </a></li> 
                             <li><a href="#"> প্রশ্নসমূহ </a></li>
                             <?php if($_SESSION['x']==1) { ?>
							<li><?php echo "<a href=\"" .base_url(). "index.php/user/myProfile\">প্রোফাইল</a>";?></li>
                             <li><?php echo "<a href=\"" .base_url(). "index.php/user/unsetSession\">LOG OUT</a>";?></li>
                             <?php if($_SESSION['id']=="admin" && $_SESSION['password']=="admin") {?>
                            <li><?php echo "<a href=\"" .base_url(). "index.php/user/admin\">অ্যাডমিন </a>";?></li> 
                            <?php } ?>

                             <?php } ?>
                               
                        </ul>
                        <br style="clear: left" />
                    </div> <!-- end of templatemo_menu -->
                </div> <!-- end of ddsmoothmenu_header class -->
            </div> <!-- END of templatemo_header -->
        </div> <!-- END of templatemo_header_wrapper -->
        
        
         <div id="templatemo_main_wrapper">
            <div id="templatemo_main">
                <table >
                	<tr>
                    	<td>
                        	<div class="ddsmoothmenu_sider">
                                 <div id="templatemo_side_menu" class="ddsmoothmenu">
                                    <ul>
                                        <li><a href="#" > খাদ্য ও পুষ্টি </a></li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > পরিবেশ </a></li>
                                     </ul>
                                     <ul>
                                     	<li><a href="#">কৃষি অনুষ্ঠান </a>
                                            <ul>
                                                <li><a href="#">হৃদয়ে মাটি ও মানুষ</a>
                                                	<ul>
                                                    	<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/0\">পরিদর্শন</a>";?></li>
                                                		<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/1\">প্রোগ্রাম তালিকা</a>";?></li>
                                                    </ul>
                                                 </li>
                                                    <li><a href="#">কৃষি দিবানিশি</a>
                                                    	<ul>
                                                    	<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/2\">পরিদর্শন</a>";?></li>
                                                		<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/3\">প্রোগ্রাম তালিকা</a>";?></li>
                                                    	</ul>
                                                    </li>
                                                	<li><a href="#">হৃদয়ে মাটি ও মানুষের ডাক</a>
                                                    <ul>
                                                    	<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/4\">পরিদর্শন</a>";?></li>
                                                		<li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/program/5\">প্রোগ্রাম তালিকা</a>";?></li>
                                                    </ul>
                                                    </li>
                                                
                                             </ul>
                                         </li>
                                                
                                       </ul>
                                      	
                                     
                                     <ul>
                                        <li><a href="#"> ফসল </a>
                                           
											<ul >
	
		<li>
			<a href="#">মাঠ ফসল</a>
				<ul>
                            		<li>
                                		<a href="#">দানা ফসল</a>
							<ul>
                                    				<li><a href="#">ধান</a></li>
								<li><a href="#">গম</a></li>
								<li><a href="#">ভুট্টা</a></li>
                                        			<li><a href="#">সরগম</a></li>
                                        			<li><a href="#">বার্লি</a></li>
							</ul>
					</li>
                                 	<li> 
						<a href="#">ডাল ফসল</a>
                                 		<ul>
                                    			<li><a href="#">মসুর</a></li>
							<li><a href="#">মুগ </a></li>
							<li><a href="#">মাসকলাই </a></li>
                                        		<li><a href="#">কাউন</a></li>
                                        		<li><a href="#">খেশারি</a></li>
                                        		<li><a href="#">ছোলা </a></li>
                                       		 	<li><a href="#">অঢ়রহ</a></li>
                                        		<li><a href="#">মটর</a></li>
                                        
						</ul>
                                 	</li>
                                 	<li> <a href="#">তেল ফসল</a>
                                  		<ul>
                                    			<li><a href="#">সরিষা</a></li>
							<li><a href="#">সয়াবিন </a></li>
							<li><a href="#">তিসি</a></li>
                                        		<li><a href="#">সূর্যমুখী </a></li>
                                        		<li><a href="#">বাদাম </a></li>
                                        		<li><a href="#">তিল </a></li>
                                        
                                        
						</ul>
                                 	</li>
                                 	<li> <a href="#">অর্থকরী ফসল</a>
                                 		<ul>
                                			<li><a href="#">পাট </a></li>
							<li><a href="#">চা </a></li>
							<li><a href="#">তুলা </a></li>
        		                                <li><a href="#">তামাক </a></li>
							<li><a href="#">আখঁ </a></li>                    
		                                        <li><a href="#">পান </a></li>
                	                        <li><a href="#">চিনাবাদাম </a></li>
                        	              </ul>
					</li>
                              
          
                                 </ul>
			</li>	
    			<li><a href="#">উদ্যান ফসল</a>
                        	   <ul>
                                	<li><a href="#">ফল </a>
                                		<ul>
                                			<li><a href="#">আম </a></li>
							<li><a href="#">কাঁঠাল </a></li>
							<li><a href="#">লিচু </a></li>
        		                                <li><a href="#">পেঁপে </a></li>
							<li><a href="#">পেয়ারা </a></li>                    
		                                        <li><a href="#">জলপাই </a></li>
                		                        <li><a href="#">আমরা </a></li>
                                		        <li><a href="#">সফেদা </a></li>
                                        		<li><a href="#">কুল </a></li>
                                        		<li><a href="#">লেবু </a></li>
						</ul>
					</li>
                            
					<li><a href="#">শাক সবজি </a>
        	                        	<ul>
                	                		<li><a href="#">আলু </a></li>
							<li><a href="#">পটল </a></li>
							<li><a href="#">ফুলকপি </a></li>
                                        		<li><a href="#">বাঁধাকপি </a></li>
							<li><a href="#">লালশাক </a></li>                    
                                		        <li><a href="#">বেগুন </a></li>
                                        		<li><a href="#">টমেটো </a></li>
                                        		<li><a href="#">মূলা </a></li>
                                        		<li><a href="#">সীল  </a></li>
                                        		<li><a href="#">লাউ </a></li>
						</ul>
					</li>
                             
					<li><a href="#">মশলা</a>
                                		<ul>
                                			<li><a href="#">পেয়াঁজ </a></li>
							<li><a href="#">মরিচ </a></li>
							<li><a href="#">আদা </a></li>
                                        		<li><a href="#">রসুন </a></li>
							<li><a href="#">ধনিয়া </a></li>                    
                                		        <li><a href="#">হলুদ </a></li>
                                        		<li><a href="#">জিরা </a></li>
                                       			 <li><a href="#">তেজপাতা </a></li>
                                       			 <li><a href="#">কালোজিরা  </a></li>
                                        		<li><a href="#">দারুচিনি </a></li>
						</ul>
					</li>
                                
                    
                                        
				</ul>
			</li>
			<li><a href="#">ভেষজ</a>
                        	<ul>
                                	<li><a href="#">আমলকি </a></li>
					<li><a href="#">চন্দন </a></li>
					<li><a href="#">শিমূল </a></li>
                                        <li><a href="#">আড়হর </a></li>
					<li><a href="#">নয়নতারা </a></li>                    
                                        <li><a href="#">পাথরকুঁচি</a></li>
                                        <li><a href="#">মেহেদী</a></li>
                                        <li><a href="#">সজিনা</a></li>
                                        <li><a href="#">থানকুনি </a></li>
                                        <li><a href="#">সর্পগন্ধা </a></li>
				</ul>
			</li>
                        	
		</ul>					


                                        </li>
                                     </ul>
  
                                     <ul>
                                        <li><a href="#"> চাষাবাদ </a>
                                            <ul>
                                                <li><a href="#">Sub menu 1</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                                <li><a href="#">Sub menu 2</a></li>
                                            </ul>
                                        </li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > কীটনাষক </a></li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > যন্ত্রপাতি </a></li>
                                     </ul>
                                     <ul>
                                        <li><a href="#" > সার </a></li>
                                     </ul>
                                     
                                      <ul>
                                        <li><a href="#" > নীতিমালা </a></li>
                                     </ul>
                                                                   
                                </div> 
                             </div> 
                             
                        </td>
                       
                        <td width="500px">
                    <div class="emne">  
            				<h2 align="center"> কৃষি বার্তা </h2>
                            <p>
                                        কৃষি বার্তায়  আপনাকে স্বাগতম . . . 
                বাংলা ভাষায় কৃষি বিষয়ক তথ্য সমৃদ্ধ  ওয়েব সাইট ´কৃষিবার্তা ´ এ আপনাকে স্বাগতম। কৃষি সমপ্রসারণ অধিদপ্তরের প্রযুক্তিগত সহযোগিতায় এ ওয়েব সাইটটি তৈরী করা হয়েছে।  
                দেশের কৃষি উন্নয়নের লক্ষ্যে তথ্য যোগাযোগ প্রযুক্তি (ICT) ব্যবহারের মাধ্যমে আধুনিক কৃষি প্রযুক্তির দ্রুত সমপ্রসারণ ও কৃষি সংশ্লিষ্ট সকলের কাছে কৃষিতথ্য সহজলভ্যকরণের লক্ষ্যে এবং কৃষকদের তাদের ফসল ক্রয়-বিক্রিয়ের  সুবিধার্থে ´কৃষিবার্তা ´ নামে বাংলা ভাষায় বৃহত্তম কৃষি বিষয়ক ওয়েব সাইট চালু করা হয়েছে । এ কৃষি বিষয়ক ওয়েব পোর্টালে কৃষক, ছাত্র-ছাত্রী, সমপ্রসারণ কর্মী, শিক্ষক, গবেষক, বিজ্ঞানী, নীতি নির্ধারক সহ কৃষি সংশ্লিষ্ট সকল পর্যায়ের জনসাধারণ বিনামূল্যে তাঁদের চাহিদামাফিক কৃষি তথ্য পেতে পারেন।
                                    </p>
         			</div>
                        </td>
                        
                        <td width="50px">
                        </td>
                        
                        <td width="300px">
                        <div class="emne">
                       <?php if($_SESSION['x']!=1){?>
                        <table>
                       
                        
                         <?php echo "<form method=\"post\" action=\"". base_url() . "index.php/user/login\">" ;?>
                        <tr><td colspan="2"> গ্রাহক নম্বর  </td><td> <input type="text" name="user"></td></tr>
                        <tr><td colspan="2">  পাসওয়ার্ড </td><td> <input type="password" name="password"></td></tr>
                        
                        <tr><td align="right"  ><input type="submit" name="login" value="Login"></td></tr>
                        
                        
                    <table>
                        
                       <tr> <td width="200">Not sign in yet! oh  Please <?php echo "<a href=\"" .base_url(). "index.php/user/sign\">Sign Up</a>";?>
                    
                 </td></tr>
                        
                        
                        </table>
                        <?php }?>
                        
                        </div>
                        </td>
                    </tr>
                 </table>
                        	
                        
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main_wrapper -->
        </div> <!-- END of templatemo_main -->
        
        <div id="templatemo_slider_wrapper">
            <div id="templatemo_slider">
            <div id="carousel">
                <div class="panel">
                        
                        <div class="details_wrapper">
                            
                            <div class="details">
                            
                                <div class="detail">
                                    <h2><a href="#">Dolor sit amet</a></h2>
                                    <p>Pellentesque quis velit augue, sit amet ultrices dui. Aenean eget nisi quis est pulvinar sagittis. Fusce congue dignissim libero sed vulputate. Donec in massa ac lacus laoreet gravida non quis velit ac scelerisque.</p>
                                    <a href="#" title="Read more" class="more">Read more</a>
                                </div><!-- /detail -->
                                
                                <div class="detail">
                                    <h2><a href="#">Sed malesuada luctus</a></h2>
                                    <p>Duis dignissim tincidunt turpis eget pellentesque. Nulla consectetur accumsan facilisis. Sed vel interdum sapien. roin ac consequat ante. Pellentesque consectetur blandit magna, at ornare urna iaculis sit amet.</p>
                                    <a href="#" title="Read more" class="more">Read more</a>
                                </div><!-- /detail -->
                                
                                <div class="detail">
                                    <h2><a href="#">Aenean massa cum sociis</a></h2>
                                    <p>Sed vel interdum sapien. Aliquam consequat, diam sit amet iaculis ultrices, diam erat faucibus dolor, quis auctor metus libero vel mi. Nunc odio dolor, eleifend non fringilla nec, dapibus eu nibh. Proin id condimentum purus.</p>
                                    <a href="#" title="Read more" class="more">Read more</a>
                                </div><!-- /detail -->
                            
                            </div><!-- /details -->
                            
                        </div><!-- /details_wrapper -->
                        
                        <div class="paging">
                            <div id="numbers"></div>
                            <a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
                            <a href="javascript:void(0);" class="next" title="Next">Next</a>
                        </div><!-- /paging -->
                        
                     
                        
                    </div><!-- /panel -->
                    
                    <div id="slider-image-frame">
                        <div class="backgrounds">
                            
                            <div class="item item_1">
                                <img src="<?php echo base_url(); ?>assets/images/slider/02.jpg" alt="Image 01" />
                            </div><!-- /item -->
                            
                            <div class="item item_2">
                                <img src="<?php echo base_url(); ?>assets/images/slider/03.jpg" alt="Image 02" />
                            </div><!-- /item -->
                            
                            <div class="item item_3">
                                <img src="<?php echo base_url(); ?>assets/images/slider/01.jpg" alt="Image 03" />
                            </div><!-- /item -->
                            
                        </div><!-- /backgrounds -->
                    </div>
                </div>
            </div> <!-- END of templatemo_slider -->
        </div> <!-- END of templatemo_slider_wrapper -->
        
        
        <div id="templatemo_footer_wrapper">
            <div id="templatemo_footer">
                Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
            </div> <!-- END of templatemo_footer -->
        </div> <!-- END of templatemo_footer_wrapper -->
        </td>
    </tr>
</table>
</body>
</html>