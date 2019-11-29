<?php
    $page = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>
		  <div class="page-sidebar custom-scroll" id="sidebar">
          <div class="sidebar-header center text-center" style="background:#3a1f47;margin:10px;border-radius:8px;padding:5px 5px;">
            <a class="sidebar-brand center text-center" href="dashboard.php">
              <img src="images/6.png" alt="logo" data-src="images/6.png" data-src-retina="images/6.png" height="47" style="background:#ccc;"> <span style="font-size:16px;color:#fff;">City Construction</span>
            </a>
            <a class="sidebar-brand-mini" href="dashboard.php">
              <img src="images/6.png" alt="logo" data-src="images/6.png" data-src-retina="images/6.png" height="25">
            </a>
          </div>
          <ul class="sidebar-menu metismenu">
			<!-- <li class="<?php echo (($page == 'emails')?'mm-active':'')?>">
              <a href="emails.php">
                <i class="sidebar-item-icon fa fa-envelope">
                </i>
                <span class="nav-label">Email
                </span> 
              </a>
            </li> -->
			<li class="<?php echo (($page == 'projects')?'mm-active':'')?>">
              <a href="projects.php">
                <i class="sidebar-item-icon ft-layers">
                </i>
                <span class="nav-label">Projects
                </span> 
              </a>
            </li>
			<li class="<?php echo (($page == 'employees')?'mm-active':'')?>">
              <a href="employees.php">
                <i class="sidebar-item-icon fa fa-users">
                </i>
                <span class="nav-label">Employees
                </span>
              </a>
            </li>
			<li class="<?php echo (($page == 'suppliers')?'mm-active':'')?>">
              <a href="suppliers.php">
                <i class="sidebar-item-icon ft-tag">
                </i>
                <span class="nav-label">Suppliers
                </span>
              </a>
            </li>
			<li class="<?php echo (($page == 'grn')?'mm-active':'')?>">
              <a href="grn.php">
                <i class="sidebar-item-icon ft-tag">
                </i>
                <span class="nav-label">GRN
                </span>
              </a>
            </li>
          </ul>
        </div>
      