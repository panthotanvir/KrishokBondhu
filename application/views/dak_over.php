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
                                    <li><?php echo "<a href=\"" .base_url(). "index.php/krishifirst/business\">ক্রয় বিক্রয় </a>";?></li>
                                    
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
            				<h2 align="center"> হৃদয়ে মাটি ও মানুষের ডাক</h2>
                            
                                
                               
                               
                            
                            <p>
                            Shykh Seraj টেলিভিশনে তার কর্মজীবন শুরু করেন অন্তত 35 বছর পিছনে হয় এবং প্রায় 30 বছর সরাসরি জন্য উন্নয়ন সাংবাদিকতার সাথে জড়িত. 1982 সালে তিনি একটি BTV মধ্যে টেলিভিশন প্রোগ্রাম, Mati হে Manush (মাটি ও পুরুষ) জন্য উপস্থাপক (বাংলাদেশ টেলিভিসন, রাষ্ট্র শুধুমাত্র রান দেশের স্থলজ টেলিভিশন) হিসাবে নিয়োগ করেন. তিনি 1996 সাল পর্যন্ত অব্যাহত ছিল এবং যখন তিনি প্রোগ্রাম যাব তারপর উপস্থাপনার 588 পর্বের অভিজ্ঞতা তার ব্যাগে ইতিমধ্যে ছিল. তিনি দিয়েছিলেন একটি ভিন্ন চেহারা কৃষি. তিনি মন্তব্য করেন যে, 'বাংলাদেশে শুধুমাত্র কৃষি সংস্কৃতি হয়.' ঠিক কোন উপায় নাই যে আপনি এই অবশ্যম্ভাবী সত্য, যা আমাদের অর্থনীতিকে হয় pedaling পইঠা থেকে দূরে যেতে পারে এখন পর্যন্ত. পরে তিনি শুরু ইমপ্রেস টেলেফিল্ম লিঃ / চ্যানেল তোমার কাজ, তিনি কৃষি প্রকৃত সত্য খুঁজে পেতে আরও অনুপ্রবিষ্ট. Hridoye Mati Manush হে (মাটির & হার্ট মধ্যে পুরুষ), Hridoye Mati হে Manusher Daak (মাটি ও হার্ট মধ্যে পুরুষ Post ') চ্যানেল তোমার জন্য এবং: দীর্ঘ গবেষণা পরে উপরন্তু, তার দলের সঙ্গে তিনি বরাবর 3 বিভিন্ন কৃষি প্রোগ্রাম উত্পাদিত করেনি কৃষি Dibanishi (কৃষি: সারাদিন ধরে) শুধুমাত্র রাষ্ট্র রান বাংলাদেশ আঞ্চলিক টেলিভিশন, BTV (বাংলাদেশ টেলিভিশন) জন্য. তার এমনকি আরও বাংলাদেশের প্রান্তিক, দরিদ্র এবং অন্ধকারাচ্ছন্ন কৃষকদের সুবিধার জন্য চরম উচ্চতায় পৌছতে সরাতে. কৃষক এবং জানা Shykh Seraj মন্তব্য: 'অসময়ের বন্ধু প্রকৃত বন্ধুই'. Seraj সত্যিই মহান মানুষ, যিনি কৃষকদের জন্য করেনি কেবল টেলিভিশনের মাধ্যমে তার জীবন উত্সৃষ্ট প্রোগ্রাম-এই পুরোপুরি একটি বিশ্ব জুড়ে বিস্ময়কর বিবরণ. করেনি যে কৃষির ইতিহাস পূর্বে কেহ সম্পন্ন? কৃষকদের 'উদ্দেশ্যে টেলিভিশন বাক্স ব্যবহার করা হল উদীয়মান ধারণা যে Shykh Seraj দ্বারা সর্বোচ্চ যাও বাস্তবায়িত হয়েছিল.


Hridoye Mati হে Manusher Daak (মাটি ও হার্ট মধ্যে পুরুষ Post ')

Hridoye Mati হে Manusher Daak হয় স্থল ভাঙার বিশ্বের কোনো টেলিভিশনে কৃষি প্রোগ্রাম যেখানে Shykh Seraj সর্বাপেক্ষা উজ্জ্বল নীতিনির্ধারকদের, সরকার থেকে সংশ্লিষ্ট ব্যক্তিদের এবং সবচেয়ে গুরুত্বপূর্ণভাবে প্রান্তিক কৃষক এবং স্ব - উদ্যোক্তাদের যারা অনেক প্রশ্ন আছে আনয়ন করা হয় কৃষি সংক্রান্ত তাদের উন্নয়নশীল বা সুবিধা এবং তাদের কৃষি ভবন পর্যন্ত সহায়তা পেয়ে. একটি বাংলাদেশ মধ্যে ঘাস-root-স্তরের কৃষক এমনকি কিন্তু তার স্বপ্ন দেখুন না বীজ পাওয়া সংক্রান্ত সার বা সমর্থন বা কিছু নীতি সৃষ্টিকর্তা বা সংশ্লিষ্ট কর্তৃপক্ষের কৃষি সংক্রান্ত থাকার প্রশ্ন জিজ্ঞাসা করতে পারেন. Shykh Seraj একক স্বচ্ছন্দভাবে সম্ভব অসম্ভব তৈরি এবং মূলধারার মিডিয়াতে, এই প্রথম বাংলাদেশে খুব সময় যে একটি প্রান্তিক কৃষক একটি অত্যন্ত প্রভাবশালী নীতি সৃষ্টিকর্তা সঙ্গে বিতর্কমূলক কথোপকথন করা হয়েছে স্থল ছিল.

এই বিশেষ একটি জবাবদিহিতা ভিত্তিক টক শো, হোস্ট Shykh Seraj যেখানে একটি প্রান্তিক কৃষক সরাসরি নীতি সৃষ্টিকর্তা এবং এই প্রোগ্রামের সাথে আলোচনা এক্সেস আছে এবং নির্দেশিত করেনি প্রকৃতপক্ষে হত্তয়া প্রান্তিক কৃষক এবং নীতি সৃষ্টিকর্তা মধ্যে একটি সেতু
                                      
                                    </p>
         			</div>
                        </td>
                        
                        <td width="0px">
                        </td>
                        
                        <td width="0px">
                        <div class="emne">
                        <h4> </h4>
                        </div>
                        </td>
                    </tr>
                 </table>
                        	
                        
                <div class="cleaner"></div>
            </div> <!-- END of templatemo_main_wrapper -->
        </div> <!-- END of templatemo_main -->
        
         <!-- END of templatemo_slider_wrapper -->
        
        
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