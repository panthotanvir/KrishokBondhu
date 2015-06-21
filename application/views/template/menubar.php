		<div class="navbar navbar-static">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">

                        <li><a href="<?php echo $url['home']; ?>">প্রথম পাতা</a></li>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            তথ্য
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- crops  -->
                                <li class="dropdown-submenu">
									<a tabindex="-1" href="<?php echo $url['crop']; ?>">ফসল</a>
									<ul class="dropdown-menu">
									<?php foreach($crop as $type => $tarray) { ?>
										<li class="dropdown-submenu">
											<a tabindex="-1" href="<?php echo $url['crop'] . '/' . $type; ?>"><?php echo $type; ?></a>
											<ul class="dropdown-menu">
												<?php foreach($tarray as $subtype => $starray) { ?>
												<li class="dropdown-submenu">
													<a tabindex="-1" href="<?php echo $url['crop'] . '/' . $type . '/' . $subtype; ?>"><?php echo $subtype; ?></a>
													<ul class="dropdown-menu">
														<?php foreach($starray as $crop_title => $crop_url ) {  ?>
														<li><a href="<?php echo $crop_url; ?>"><?php echo $crop_title; ?></a></li>
														<?php } ?>
													</ul>
												</li>
												<?php } ?>
											</ul>
										</li>
									<?php } ?>
									</ul>
                                </li>
                                <!-- crops ends here  -->
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">কৃষি ঋণ</a>
                                    <ul class="dropdown-menu">
										<?php foreach( $bank as $bank_name => $bank_url ) { ?>
                                        <li><a href="<?php echo $bank_url; ?>"><?php echo $bank_name; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            ব্যবসা-বাণিজ্য
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $url['new_buy']; ?>">ক্রয়ের বিজ্ঞাপন দিন</a></li>
                                <li><a href="<?php echo $url['list_buy']; ?>">ক্রয়ের বিজ্ঞাপনের তালিকা</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $url['new_sell']; ?>">বিক্রয়ের বিজ্ঞাপন দিন</a></li>
                                <li><a href="<?php echo $url['list_sell']; ?>">বিক্রয়ের বিজ্ঞাপনের তালিকা</a></li>

                                <li class="divider"></li>
                                <li><a href="<?php echo $url['market_analysis']; ?>">বাজার বিশ্লেষণ</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            প্রশ্ন-উত্তর
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="<?php echo $url['all_question']; ?>">প্রশ্নসমূহ</a></li>
                                <li><a href="<?php echo $url['new_question']; ?>">নতুন প্রশ্ন</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $url['about']; ?>">আমাদের সম্পর্কে</a></li>
                    </ul>
                    <?php if( $logged_in == false ) { ?>
                    <form class="navbar-form pull-right" method="post" action="<?php echo $url['login']; ?>">
                        <input class="span2" type="text" placeholder="ব্যবহারকারীর নাম" name="user"/>
                        <input class="span2" type="password" placeholder="শব্দ চাবি" name="password" />
                        <input class="btn btn-primary" type="submit" value="প্রবেশ করুন" name="login" />
                        <a class="btn btn-info" href="<?php echo $url['signup']; ?>">নিবন্ধন করুন</a>
                    </form>
                    <?php } else { ?>
						<div class="pull-right">
							<a class="btn" href="<?php echo $url['profile']; ?>">প্রোফাইল</a>
							<a class="btn btn-primary" href="<?php echo $url['logout']; ?>">প্রস্থান করুন</a>
						</div>
                    <?php } ?>
                </div>
            </div>
        </div>
