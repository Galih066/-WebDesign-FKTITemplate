<!DOCTYPE html>
<html>
	<head>
		<title>CSIT Information</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/info.css">
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
		<div class="uk-container uk-container-medium">
			<div class="uk-height-medium uk-position-relative">
				<div class="uk-position-center-left">
					<h1 class="uk-text-bold color-change">INFORMATION</h1>
					<p class="uk-text-small">Find the information you need here.</p>
				</div>
			</div>
			<hr>
			<div class="uk-height-small uk-position-relative">
				<div class="uk-position-center uk-text-center">
					<h5 class="uk-width-xlarge">All information is here, you can find all information about campus. Including <span class="uk-text-bold uk-text-warning">Annoucement, News, Information, Job vacancy, and Scholarship</span>.</h5>
					<div class="uk-margin">
					    <form class="uk-search uk-search-default uk-width-medium">
					        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
					        <input class="uk-search-input" type="search" placeholder="Search your information here">
					    </form>
					</div>
				</div>
			</div>
			<hr>
			<div class="uk-width-1-1 uk-child-width-1-4@s uk-grid-match uk-margin-auto" uk-grid>
				<div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <a class="uk-button uk-button-text uk-position-bottom-right uk-padding-small" href="#modal-container" uk-toggle>Open</a>
			        	<div id="modal-container" class="uk-modal-container" uk-modal>
						    <div class="uk-modal-dialog">
						        <button class="uk-modal-close-default" type="button" uk-close></button>
						        <div class="uk-modal-header">
						            <h2 class="uk-modal-title">Modal Title</h2>
						        </div>
						        <div class="uk-modal-body" uk-overflow-auto>
						            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						        </div>
						        <div class="uk-modal-footer uk-text-right">
						            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
						            <button class="uk-button uk-button-primary" type="button">Save</button>
						        </div>
						    </div>
						</div>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			    <div>
			        <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-position-relative">
			            <h3 class="uk-card-title">Hover</h3>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			            <button class="uk-button uk-button-text uk-position-bottom-right uk-padding-small">Open</button>
			        </div>
			    </div>
			</div>
			<ul class="uk-pagination uk-margin-large-top uk-margin-medium-bottom">
			    <li><a href="#"><span class="uk-margin-small-right" uk-pagination-previous></span> Previous</a></li>
			    <li class="uk-margin-auto-left"><a href="#">Next <span class="uk-margin-small-left" uk-pagination-next></span></a></li>
			</ul>
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
		<!-- Javascript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
	</body>
</html>