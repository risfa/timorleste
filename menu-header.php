<nav class="navbar navbar-default navbar-fixed-top">
      <div class="col-lg-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-right:5px;"><img src="images/logo.png" style="width:167px;"> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">English</a></li>
						<li><a href="#">Timor Leste</a></li>
						<li><a href="#">Indonesia</a></li>                
					</ul>-->
					<a href="index.php"><img src="images/logo.png" style="width:235px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
						<!--<li class="dropdown" style="padding:0px">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:0px;padding-bottom:0px"><img src="images/timorleste.png" style="width:100px;"> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Timor Leste</a></li>
                <li><a href="#">Indonesia</a></li>                
              </ul>
            </li>-->
						<!--<li <?php echo ($param == "") ? "class='active'" : ""; ?>><a href="index.php"><i class="fa fa-home"></i></a></li>-->
            <li <?php echo ($param == "News") ? "class='active'" : ""; ?>><a href="menu.php?id=news">NEWS</a></li>
            <li <?php echo ($param == "Finance") ? "class='active'" : ""; ?>><a href="menu.php?id=finance">FINANCE</a></li>
            <li <?php echo ($param == "Sport") ? "class='active'" : ""; ?>><a href="menu.php?id=sport">SPORT</a></li>
						<li <?php echo ($param == "Health") ? "class='active'" : ""; ?>><a href="menu.php?id=health">HEALTH</a></li>
						<li <?php echo ($param == "Tech") ? "class='active'" : ""; ?>><a href="menu.php?id=tech">TECH</a></li>
						<li <?php echo ($param == "Automotive") ? "class='active'" : ""; ?>><a href="menu.php?id=automotive">AUTOMOTIVE</a></li>
            <li class="dropdown dropdown-large">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">MORE <b class="caret"></b></a>
							
							<ul class="dropdown-menu dropdown-menu-large row">
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Lorem ipsum</li>
										<li><a href="#">Dolor sit amet</a></li>
										<li class="disabled"><a href="#">Consectetuer adipiscing</a></li>
										<li><a href="#">Sed diam </a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Elit</li>
										<li><a href="#">Nonummy</a></li>
										<li><a href="#">Nibh euismod tincidunt</a></li>
										<li><a href="#">Ut laoreet dolore</a></li>
										<li><a href="#">Magna </a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Est usus</li>
										<li><a href="#">Legentis in iis</a></li>
										<li><a href="#">Eleifend option</a></li>
										<li><a href="#">Imperdiet </a></li>
										<li><a href="#">Doming </a></li>
										<li><a href="#">Claritatem insitam</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Aliquam erat</li>
										<li><a href="#">Volutpat</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Dignissim </li>
										<li><a href="#">Luptatum zzril </a></li>
										<li><a href="#">Seacula</a></li>
										<li><a href="#">Anteposuerit litterarum formas</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Videntur</li>
										<li><a href="#">Parum</a></li>
										<li><a href="#">Sollemnes</a></li>
										<li><a href="#">Futurum</a></li>
									</ul>
								</li>
								<li class="col-sm-3">
									<ul>
										<li class="dropdown-header">Ullamcorper suscipit</li>
										<li><a href="#">Lobortis</a></li>
										<li><a href="#">Commodo consequat</a></li>
										<li><a href="#">Duis autem</a></li>
										<li><a href="#">Nam liber</a></li>
										<li><a href="#">Demonstraverunt</a></li>
										<li><a href="#">Lectores</a></li>
										<li><a href="#">Legere </a></li>
										<li><a href="#">Mutationem consuetudium</a></li>
										<li><a href="#">Mirum est</a></li>
									</ul>
								</li>
							</ul>
							
						</li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="padding-right:15px;padding-top:13px">
            <li>
							<div style="padding:10px 5px 5px 5px">
							<a href="#" style="color:#fff">
							<i class="fa fa-2x fa-twitter-square"></i></a>&nbsp;&nbsp;
							<a href="#" style="color:#fff"><i class="fa fa-2x fa-facebook-square"></i></a>
							</div>
						</li>
							
            <li>
							<form class="navbar-form" role="search">
								<div class="input-group">
										<input type="text" class="form-control" placeholder="Search (Dummy)" name="q">
										<div class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
										</div>
								</div>
							</form>
						</li>            
						
          </ul>
				
        </div><!--/.nav-collapse -->
				
      </div>
    </nav>