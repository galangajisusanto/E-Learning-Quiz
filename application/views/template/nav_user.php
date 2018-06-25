  <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
           <div class="navbar nav_title" style="border: 0; text-align: center;">
              <a href="<?=base_url()?>user/coba" class="site_title"><span>   
               Code Studio</span></a>
            </div>

            <div class="clearfix"></div>
             <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url()?>images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2> <?=$user?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
              <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="<?=base_url();?>user"><i class="fa fa-dashboard"></i> Home </a>
                  </li>
                 
                  <li><a href="<?=base_url();?>user/modul"><i class="fa fa-book"></i> Modul Belajar </a>
                  </li>

                  <li><a href="<?=base_url();?>user/rank"><i class="fa fa-trophy"></i> Ranking System </a>
                  </li>

                  <li><a href="<?=base_url();?>user/profil"><i class="fa fa-star"></i> My Experience </a>
                  </li>
                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="<?=base_url()?>administrator/edit_profil"> Update Profile</a></li>
                    <li>
                      <a href="<?=base_url()?>administrator/update_password">
                      Ganti Password</a>
                    </li>
                    <li>
                      <a href="<?=base_url()?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
