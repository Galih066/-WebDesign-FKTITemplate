<!DOCTYPE html>
<html>
	<head>
		<title>CSIT Unmul</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<nav class="uk-navbar uk-navbar-container uk-margin-remove">
			<div class="uk-navbar-left">
				<a class="uk-navbar-item uk-logo" href="#">
					<img width="50px" height="50px" src="resc/Unmul_logo_low.svg">
				</a>
			</div>
		    <div class="uk-navbar-right">
		    	<ul class="uk-subnav uk-subnav-divider">
		    		<li>
		    			<a href="#" uk-icon="icon: users" uk-tooltip="title: Visitors; pos: top">
				    		<span class="uk-badge">2806</span>
				    	</a>
		    		</li>
		    		<li>
		    			<div class="uk-inline">
		    				<a href="" uk-icon="icon: bell" uk-tooltip="title: Notification; pos: top">
				    			<span class="uk-badge">2</span>
				    		</a>
				    		<div uk-drop="mode: click">
				    			<div class="uk-card uk-card-body uk-card-default uk-width-large">
				    				<ul uk-list class="uk-list uk-list-divider">
				    					<li>
				    						<a href="" class="uk-link-reset">1 Information updated</a>
				    					</li>
				    					<li>
				    						<a href="" class="uk-link-reset">1 Announcement updated</a>
				    					</li>
				    					<li>
				    						<a href="" class="uk-link-reset">1 Announcement updated</a>
				    					</li>
				    				</ul>
				    			</div>
				    		</div>
		    			</div>
			    	</li>
		    		<li>
		    			<div class="uk-inline">
		    				<a href="" uk-icon="icon: download" uk-tooltip="title: Download; pos: top"></a>
				    		<div uk-drop="mode: click">
				    			<div class="uk-card uk-card-body uk-card-default uk-width-large">
				    				<ul uk-list class="uk-list uk-list-divider">
				    					<li>
				    						<a href="" class="uk-link-reset">e-Repository CSIT</a>
				    					</li>
				    					<li>
				    						<a href="" class="uk-link-reset">e-Course CSIT</a>
				    					</li>
				    				</ul>
				    			</div>
				    		</div>
		    			</div>
		    		</li>
			    	<a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-nav" href="#">
			            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
			        </a>
		    	</ul>
		    </div>
		</nav>
		<div id="offcanvas-nav" uk-offcanvas="overlay: true; mode: push; flip: true">
		    <div class="uk-offcanvas-bar">
		    	<button class="uk-offcanvas-close" type="button" uk-close></button>
		        <ul class="uk-nav uk-nav-default uk-list uk-list-divider">
		        	<li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Home</a></li>
		            <li>
		            	<a href="#">
		            		<span class="uk-margin-small-right" uk-icon="icon: info"></span>
		            		 About
		            		 <span uk-icon="icon: triangle-down"></span>
		            	</a>
		            	<div class="uk-light uk-background-secondary" uk-dropdown="mode: click">
			            	<ul class="uk-nav uk-dropdown-nav">
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Vision and Mission</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Organizational Structure</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Address</a></li>
			            	</ul>
		            	</div>
		            </li>
		            <li>
		            	<a href="#">
		            		<span class="uk-margin-small-right" uk-icon="icon: users"></span>
		            		Unit
		            		<span uk-icon="icon: triangle-down"></span>
		            	</a>
		            	<div class="uk-light uk-background-secondary" uk-dropdown="mode: click">
		            		<ul class="uk-nav uk-dropdown-nav">
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Quality Assurance</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Cooperation & Career Development</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">ICT, Publication & Digital Library</a></li>
			            	</ul>
		            	</div>
		            </li>
		            <li>
		            	<a href="#">
		            		<span class="uk-margin-small-right" uk-icon="icon: world"></span>
		            		 Departmen
		            		 <span uk-icon="icon: triangle-down"></span>
		            	</a>
		            	<div class="uk-light uk-background-secondary" uk-dropdown="mode: click">
		            		<ul class="uk-nav uk-dropdown-nav">
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Computer Science</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">IT & Communication</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Information System</a></li>
			            	</ul>
		            	</div>
		            </li>
		            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: question"></span> Information</a></li>
		            <li>
		            	<a href="#">
		            		<span class="uk-margin-small-right" uk-icon="icon: laptop"></span>
		            		Facilities
		            		<span uk-icon="icon: triangle-down"></span>
		            	</a>
		            	<div class="uk-light uk-background-secondary" uk-dropdown="mode: click">
		            		<ul class="uk-nav uk-dropdown-nav">
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Laboratory</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Library</a></li>
			            	</ul>
		            	</div>
		            </li>
		            <li>
		            	<a href="#">
		            		<span class="uk-margin-small-right" uk-icon="icon: world"></span>
		            		 Publication
		            		<span uk-icon="icon: triangle-down"></span>
		            	</a>
		            	<div class="uk-light uk-background-secondary" uk-dropdown="mode: click">
		            		<ul class="uk-nav uk-dropdown-nav">
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Journal Informatics Mulawarman</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Journal Information Technology</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Journal SAKTI</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">IJCANDI</a></li>
			            		<li class="uk-margin-small-left"><a href="" class="uk-margin-small-left">Proceding SAKTI 2019</a></li>
			            	</ul>
		            	</div>
		            </li>
		            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: nut"></span> Alumni</a></li>
		        </ul>
		    </div>
		</div>

		<div class="uk-background-default uk-width-1-1 uk-height-medium uk-margin-remove-top uk-position-relative">
			<div class="uk-container-small uk-position-center">
				<h1 class="uk-heading-small uk-text-center change-font">
					Faculty of Computer Science and <br> Information Technology
				</h1>
				<hr class="uk-divider-small uk-position-center">
				<h3 class="uk-h3 uk-text-center uk-text-muted">
					Academic Information and Related Activities and Information Technology Campus
				</h3>
			</div>	
		</div>
		<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true; autoplay: true">
		    <ul class="uk-slider-items uk-grid">
		        <li class="uk-width-1-1">
		            <div class="uk-panel">
		                <img class="uk-width-expand" src="https://cdn.pixabay.com/photo/2016/02/19/11/19/computer-1209641_960_720.jpg" alt="">
		                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
		                    <h3 class="uk-margin-remove">Bottom</h3>
		                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		                </div>
		            </div>
		        </li>
		        <li class="uk-width-1-1">
		            <div class="uk-panel">
		                <img class="uk-width-expand" src="https://cdn.pixabay.com/photo/2015/02/24/02/05/website-647013_960_720.jpg" alt="">
		                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
		                    <h3 class="uk-margin-remove">Bottom</h3>
		                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		                </div>
		            </div>
		        </li>
		        <li class="uk-width-1-1">
		            <div class="uk-panel">
		                <img class="uk-width-expand" src="https://cdn.pixabay.com/photo/2015/09/05/20/02/coding-924920_960_720.jpg" alt="">
		                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
		                    <h3 class="uk-margin-remove">Bottom</h3>
		                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		                </div>
		            </div>
		        </li>
		        <li class="uk-width-1-1">
		            <div class="uk-panel">
		                <img class="uk-width-expand" src="https://cdn.pixabay.com/photo/2015/06/24/15/45/code-820275__340.jpg" alt="">
		                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
		                    <h3 class="uk-margin-remove">Bottom</h3>
		                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		                </div>
		            </div>
		        </li>
		        <li class="uk-width-1-1">
		            <div class="uk-panel">
		                <img class="uk-width-expand" src="https://cdn.pixabay.com/photo/2017/08/10/08/47/code-2620118_960_720.jpg" alt="">
		                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
		                    <h3 class="uk-margin-remove">Bottom</h3>
		                    <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		                </div>
		            </div>
		        </li>
		    </ul>
		    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
		    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
		</div>
		<div class="uk-container uk-container-small uk-margin-large-top uk-margin-large-bottom">
			<div uk-grid>
				<div class="uk-width-1-2">
					<img src="https://images.pexels.com/photos/256401/pexels-photo-256401.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
				</div>
				<div class="uk-width-1-2">
					<div class="uk-margin-medium">
						<p class="uk-heading-small uk-heading-bullet change-font">Welcome!</p>
						<p class="uk-text-bold">Officials Website CSIT <a href="" class="uk-text-danger">Mulawarman University</a></p>
						<p>
							Obtain the latest information related academic activities, events, and useful information related to the development of information technology today. If you require further information please click button below.
						</p>
						<button class="uk-button uk-button-secondary">
							<a href="" class="uk-light uk-link-reset">Contact Us</a>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-container uk-container-small uk-margin-medium-bottom">
			<p class="uk-heading-small uk-heading-bullet change-font">Latest Information</p>
			<p class="uk-text-bold">News, Scholarship Information, Announcement, Event, and Job Vacancy</p>
			<div class="uk-child-width-expand@s" uk-grid>
				<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 100;">
					<div class="uk-card uk-card-default uk-width-medium uk-height-medium">
						<div class="uk-badge uk-position-absolute uk-position-right uk-label">new</div>
					    <div class="uk-card-header">
					        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-large">Information Title</h3>
					        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2019</time></p>
					    </div>
					    <div class="uk-card-body">
					    	Short decription about content
					    </div>
					    <div class="uk-card-footer uk-text-center">
					    	<a href="#open-modal" class="uk-margin-small-right" uk-tooltip="Open" uk-toggle>
					    		<span uk-icon="icon: push"></span>
					    	</a>
					    	<div id="open-modal" class="uk-modal-container uk-modal-container-medium" uk-modal>
							    <div class="uk-modal-dialog">
							        <div class="uk-modal-header">
							            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Information Title</a></h1>
							            <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>
							        </div>
							        <div class="uk-modal-body" uk-overflow-auto>
							            <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							        </div>
							        <div class="uk-modal-footer uk-text-right">
							            <button class="uk-button uk-button-default uk-modal-close" type="button">quit</button>
							        </div>
							    </div>
							</div>
					    	<a href="#" class="uk-margin-small-right" uk-tooltip="Share">
					    		<span uk-icon="icon: social"></span>
					    	</a>
					    </div>
					</div>
				</div>
				<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 100">
					<div class="uk-card uk-card-default uk-width-medium uk-height-medium">
						<div class="uk-badge uk-position-absolute uk-position-right uk-label">new</div>
						<div class="uk-card-header">
					        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-large">Information Title</h3>
					        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2019</time></p>
					    </div>
					    <div class="uk-card-body">
					    	Short decription about content
					    </div>
					    <div class="uk-card-footer uk-text-center">
					    	<a href="#open-modal" class="uk-margin-small-right" uk-tooltip="Open" uk-toggle>
					    		<span uk-icon="icon: push"></span>
					    	</a>
					    	<div id="open-modal" class="uk-modal-container uk-modal-container-medium" uk-modal>
							    <div class="uk-modal-dialog">
							        <div class="uk-modal-header">
							            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Information Title</a></h1>
							            <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>
							        </div>
							        <div class="uk-modal-body" uk-overflow-auto>
							            <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							        </div>
							        <div class="uk-modal-footer uk-text-right">
							            <button class="uk-button uk-button-default uk-modal-close" type="button">quit</button>
							        </div>
							    </div>
							</div>
					    	<a href="#" class="uk-margin-small-right" uk-tooltip="Share">
					    		<span uk-icon="icon: social"></span>
					    	</a>
					    </div>
					</div>
				</div>
				<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 100">
					<div class="uk-card uk-card-default uk-width-medium uk-height-medium">
						<div class="uk-badge uk-position-absolute uk-position-right uk-label">new</div>
						<div class="uk-card-header">
					        <h3 class="uk-card-title uk-margin-remove-bottom uk-text-large">Information Title</h3>
					        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2019</time></p>
					    </div>
					    <div class="uk-card-body">
					    	Short decription about content
					    </div>
					    <div class="uk-card-footer uk-text-center">
					    	<a href="#open-modal" class="uk-margin-small-right" uk-tooltip="Open" uk-toggle>
					    		<span uk-icon="icon: push"></span>
					    	</a>
					    	<div id="open-modal" class="uk-modal-container uk-modal-container-medium" uk-modal>
							    <div class="uk-modal-dialog">
							        <div class="uk-modal-header">
							            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Information Title</a></h1>
							            <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a href="#">Blog</a></p>
							        </div>
							        <div class="uk-modal-body" uk-overflow-auto>
							            <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
							            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							        </div>
							        <div class="uk-modal-footer uk-text-right">
							            <button class="uk-button uk-button-default uk-modal-close" type="button">quit</button>
							        </div>
							    </div>
							</div>
					    	<a href="#" class="uk-margin-small-right" uk-tooltip="Share">
					    		<span uk-icon="icon: social"></span>
					    	</a>
					    </div>
					</div>
				</div>
			</div>
			<button class="uk-button uk-button-secondary uk-margin-medium uk-align-center">All Information</button>
			<p class="uk-heading-small uk-heading-bullet change-font">Our Facilities</p>
			<div uk-slider="center: true" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200">
			    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
			        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
			            <li>
			                <div class="uk-card uk-card-default">
			                    <div class="uk-card-media-top">
			                        <img src="https://cdn.pixabay.com/photo/2014/04/26/02/29/computers-332238_960_720.jpg" alt="">
			                    </div>
			                    <div class="uk-card-body">
			                        <h3 class="uk-card-title">Headline</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			                    </div>
			                </div>
			            </li>
			            <li>
			                <div class="uk-card uk-card-default">
			                    <div class="uk-card-media-top">
			                        <img src="https://cdn.pixabay.com/photo/2014/09/10/23/47/integrated-circuit-441294_960_720.jpg" alt="">
			                    </div>
			                    <div class="uk-card-body">
			                        <h3 class="uk-card-title">Headline</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			                    </div>
			                </div>
			            </li>
			            <li>
			                <div class="uk-card uk-card-default">
			                    <div class="uk-card-media-top">
			                        <img src="https://cdn.pixabay.com/photo/2014/09/10/23/45/integrated-circuit-441291_960_720.jpg" alt="">
			                    </div>
			                    <div class="uk-card-body">
			                        <h3 class="uk-card-title">Headline</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			                    </div>
			                </div>
			            </li>
			            <li>
			                <div class="uk-card uk-card-default">
			                    <div class="uk-card-media-top">
			                        <img src="https://cdn.pixabay.com/photo/2014/09/10/23/46/integrated-circuit-441292_960_720.jpg" alt="">
			                    </div>
			                    <div class="uk-card-body">
			                        <h3 class="uk-card-title">Headline</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			                    </div>
			                </div>
			            </li>
			            <li>
			                <div class="uk-card uk-card-default">
			                    <div class="uk-card-media-top">
			                        <img src="https://cdn.pixabay.com/photo/2014/09/10/23/45/integrated-circuit-441291_960_720.jpg" alt="">
			                    </div>
			                    <div class="uk-card-body">
			                        <h3 class="uk-card-title">Headline</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
			                    </div>
			                </div>
			            </li>
			        </ul>
			        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			    </div>
			    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
			<p class="uk-heading-small uk-heading-bullet change-font">Our People</p>
			<div uk-scrollspy="cls: uk-animation-slide-left; target: .uk-card; delay: 200">
				<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
				    <div class="uk-card-media-left uk-cover-container">
				        <img src="https://images.pexels.com/photos/736716/pexels-photo-736716.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">Rex Leonhart</h3>
				            <blockquote class="uk-text-small">"When you don't create things, you become defined by your tastes rather than ability. your tastes only narrow & exclude people. so create"</blockquote>
				            <ul class="uk-subnav uk-subnav-divider" uk-margin>
							    <li><a href="#" uk-icon="icon: facebook; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: instagram; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: linkedin; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: google; ratio: .8"></a></li>
							</ul>
				        </div>
				    </div>
				</div>
				<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
				    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
				        <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">Stephanie Steward</h3>
				            <blockquote class="uk-text-small">"Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live"</blockquote>
				            <ul class="uk-subnav uk-subnav-divider" uk-margin>
							    <li><a href="#" uk-icon="icon: facebook; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: instagram; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: linkedin; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: google; ratio: .8"></a></li>
							</ul>
				        </div>
				    </div>
				</div>
				<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
				    <div class="uk-card-media-left uk-cover-container">
				        <img src="https://images.pexels.com/photos/874158/pexels-photo-874158.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" uk-cover>
				        <canvas width="600" height="400"></canvas>
				    </div>
				    <div>
				        <div class="uk-card-body">
				            <h3 class="uk-card-title">Jhon Doe</h3>
				            <blockquote class="uk-text-small">"Any fool can write code that a computer can understand. Good programmers write code that humans can understand"</blockquote>
				            <ul class="uk-subnav uk-subnav-divider" uk-margin>
							    <li><a href="#" uk-icon="icon: facebook; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: instagram; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: linkedin; ratio: .8"></a></li>
							    <li><a href="#" uk-icon="icon: google; ratio: .8"></a></li>
							</ul>
				        </div>
				    </div>
				</div>
			</div>
		</div>
		<div class="uk-container uk-height-small uk-margin-large uk-position-relative">
			<div uk-slider="finite: true">
				<ul class="uk-slider-items uk-child-width-1-6@s uk-child-width-1-6@ uk-grid">
					<li>
						<img src="resc/oracle_academy.jpg">
					</li>
					<li>
						<img src="resc/building.jpg">
					</li>
					<li>
						<img src="resc/sia.jpg">
					</li>
					<li>
						<img src="resc/toga.jpg">
					</li>
					<li>
						<img src="resc/mahasiswa.jpg">
					</li>
					<li>
						<img src="resc/kkn.jpg">
					</li>
					<li>
						<img src="resc/mikrotik.jpg">
					</li>
				</ul>
			</div>
		</div>
		<div class="uk-container uk-height-large uk-margin-medium-top">
			<div class="uk-child-width-expand@s" uk-grid>
				<div>
					<p class="uk-heading-line uk-text-bold"><span>Contact Us</span></p>
					<p class="uk-text-small">
						Faculty Computer Science and Information Technology (CSIT) Jl. Panajam Kampus Gunung Kelua Mulawarman University Samarinda-Kalimantan Timur 75123 Indonesia.
					</p>
					<ul class="uk-list">
						<li><span uk-icon="icon: location" class="uk-margin-small-right"></span><a href="" class="uk-text-small">Location</a></li>
					</ul>
				</div>
				<div>
					<p class="uk-heading-line uk-text-bold"><span>Related Link</span></p>
					<ul class="uk-list uk-list-small uk-list-divider">
						<li><a href="" class="uk-text-small">Kemenristek Dikti</a></li>
						<li><a href="" class="uk-text-small">SIM Libtabmas</a></li>
						<li><a href="" class="uk-text-small">Sim Belmawa</a></li>
						<li><a href="" class="uk-text-small">Forlab Ristek Dikti</a></li>
						<li><a href="" class="uk-text-small">PIU-IDB Program</a></li>
						<li><a href="" class="uk-text-small">E-Journal Unmul</a></li>
						<li><a href="" class="uk-text-small">SINTA Ristek Dikti</a></li>
						<li><a href="" class="uk-text-small">SPRINGER</a></li>
					</ul>
				</div>
				<div>
					<p class="uk-heading-line uk-text-bold"><span>Scholarship Information</span></p>
					<ul class="uk-list uk-list-small uk-list-divider">
						<li><a href="" class="uk-text-small">LPDP Scholarship</a></li>
						<li><a href="" class="uk-text-small">Bidik Misi Scholarship</a></li>
						<li><a href="" class="uk-text-small">Unggulan Scholarship</a></li>
						<li><a href="" class="uk-text-small">Masyarakat Berprestasi Scholarship</a></li>
						<li><a href="" class="uk-text-small">Tanoto Foundation Scholarship</a></li>
						<li><a href="" class="uk-text-small">Erasmus Mundus Scholarship</a></li>
					</ul>
				</div>
				<div>
					<p class="uk-heading-line uk-text-bold"><span>Social Media</span></p>
					<ul class="uk-subnav uk-subnav-divider" uk-margin>
						<li><a href="#" uk-icon="icon: facebook; ratio: .8"></a></li>
						<li><a href="#" uk-icon="icon: linkedin; ratio: .8"></a></li>
						<li><a href="#" uk-icon="icon: google; ratio: .8"></a></li>
						<li><a href="#" uk-icon="icon: github; ratio: .8"></a></li>
						<li><a href="#" uk-icon="icon: twitter; ratio: .8"></a></li>
					</ul>
					<button uk-totop uk-scroll class="uk-button uk-button-text uk-align-center">Back To Top</button>
				</div>
			</div>
		</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
	</body>
</html>