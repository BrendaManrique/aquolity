
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->

                <a class="navbar-brand" href="index.php?page=indexpage"><img id="img-brand" src="<?php echo base_url();?>assets/img/drop.png"> Aquolity</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="index.php?page=about">PROYECTO</a>  -->
                        <!-- PROYECTO <i class="fa fa-briefcase"></i> -->
                    <!-- </li> -->
                    <li><a href="index.php?page=map">MAPA</a>
                    </li>
                 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIAGRAMAS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=graph-world">Mundiales</a>
                            </li>
                            <li><a href="index.php?page=graph-peru">Perú</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li><a href="index.php?page=faq">FAQ</a> -->
                    <!-- </li> -->
                    <li><a href="http://aquolity.com/blog">BLOG</a>
                    </li>
                   <!--  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> BLOG <b class="caret"></b></a>
                        <!-- BLOG  <span class="glyphicon glyphicon-comment"></span>-->
                       <!--  <ul class="dropdown-menu">
                            <li><a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li><a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li><a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li> --> 
                    <!-- <li><a href="index.php?page=contact">CONTACTO</a> -->
                    <!-- </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
