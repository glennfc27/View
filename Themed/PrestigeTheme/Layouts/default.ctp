<!DOCTYPE html>
    <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Prestige Home & Realty</title>
		
		<?php 
			echo $this->Html->css('app');
	
			echo $this->Html->script('libs/modernizr');
		?>

    </head>
    
    <body>
        <div class="off-canvas-wrap canvas-wrapper" data-offcanvas>
        <div class="inner-wrap panel">
            <nav class="mobile-menu show-for-small-up hide-for-large-up tab-bar">
                <section class="left-small">
                  <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
                </section>
          
                <section class="right tab-bar-section">
                  <h1 class="title">PHRDC</h1>
                </section>
            </nav>
            <!-- Off Canvas Menu -->
            <aside class="left-off-canvas-menu">
                <!-- whatever you want goes here -->
                <ul>
                    <li><a href="#">Item 1</a></li>
                </ul>
            </aside>
            
            <header class="main-header show-for-large-up">
                <div class="row">
				<div class="large-6 columns">
					<h1><a href="#">Prestige Home & Realty Development Corporation</a></h1>
				</div>
                <div class="large-6 columns">
                    <nav>
                        <ul>
                            <li class="selected">
                                <a href="#"><i class="fa fa-home fa-2x"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-download fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-gear fa-2x"></i></a></li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-2x"></i></a>
                                <div class="submenu-container">
                                    <div class="inner-container">
                                        <div class="submenu"
                                            <h6 class="subheader">SUBNAVIGATION</h6>
                                            <ul>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                            </ul>
                                        </div>
                                        <div class="submenu"
                                            <h6 class="subheader">SUBNAVIGATION</h6>
                                            <ul>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                            </ul>
                                        </div>
                                        <div class="submenu"
                                            <h6 class="subheader">SUBNAVIGATION</h6>
                                            <ul>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                            </ul>
                                        </div>
                                        <div class="submenu"
                                            <h6 class="subheader">SUBNAVIGATION</h6>
                                            <ul>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                                <li><a href="">link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <?php if(!$logged_in){?>
                                    <a href="#" data-reveal-id="home-login"><i class="fa fa-users fa-2x"></i></a>
                                <?php }else{?>
                                    <a href='<?php echo $this->Html->url(array("controller"=>"users", "action"=>"logout"))?>'><i class="fa fa-user fa-2x"></i></a>
                                <?php }?>
                                
                            </li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </header>
        
        <section class="main-container">
            <div class="row">
                <div class="small-12 medium-12 large-12 columns">
                    
                    <?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
					
                </div>
            </div>
        </section>
        
        
        <footer class="main-footer">
            <div class="row">
                <div class="large-12 columns">
                    <div class="cc">
                        &copy; Prestige Home & Realty Development Corporation
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
        </div><!--end off canvas inner-->
    </div><!--end off canvas-->
    <?php
        echo $this->Html->script('libs/jquery');
        echo $this->Html->script('libs/foundation');
        echo $this->Html->script('app');
    ?>
	
	
    </body>
</html>