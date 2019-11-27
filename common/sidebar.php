<?php
    $page = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>
		  <div class="page-sidebar custom-scroll" id="sidebar">
          <div class="sidebar-header center text-center" style="background:#3a1f47;margin:10px;border-radius:8px;padding:5px 5px;">
            <a class="sidebar-brand center text-center" href="dashboard.php">
              <img src="images/vendor-images/rect_white.png" alt="logo" data-src="images/vendor-images/rect_white.png" data-src-retina="images/vendor-images/rect_white.png" height="47">
            </a>
            <a class="sidebar-brand-mini" href="dashboard.php">
              <img src="images/vendor-images/fav_white.png" alt="logo" data-src="images/vendor-images/fav_white.png" data-src-retina="images/vendor-images/fav_white.png" height="25">
            </a>
          </div>
          <ul class="sidebar-menu metismenu">
            <li class="heading">
              <span>DASHBOARD
              </span>
            </li>
            <!-- <li class="<?php echo (($page == 'products' || $page == 'add_products' || $page == 'attributes' || $page == 'options' || $page == 'products_shipping' || $page == 'product_preview' || $page == 'add_category' || $page == 'add_subcategory')?'mm-active':'')?>">
              <a href="products.php">
                <i class="sidebar-item-icon ft-gift">
                </i>
                <span class="nav-label">Products
                </span>
              </a>
            </li> -->
			<li class="<?php echo (($page == 'products' || $page == 'add_products' || $page == 'attributes' || $page == 'options' || $page == 'products_shipping' || $page == 'product_preview' || $page == 'add_category' || $page == 'add_subcategory')?'mm-active':'')?>"><a href="javascript:;"><i class="sidebar-item-icon ft-gift"></i><span class="nav-label">Indent</span><i class="arrow la la-angle-right"></i></a>
				<ul class="nav-2-level">
					<!-- 2-nd level-->
					<li><a href="#">Add Indent</a></li>
					<li><a href="#">Pending Indent</a></li>
					<li><a href="#">Indent Listing</a></li>
				</ul>
			</li>
            <li class="<?php echo (($page == 'orders' || $page == 'marked_pickup' || $page == 'ready_pickup' || $page == 'outfor_delivery' || $page == 'deliverd' || $page == 'coustomer_cancelled' || $page == 'vendor_cancelled' || $page == 'returns' ||$page == 'exceptions_order')?'mm-active':'')?>">
              <a href="#">
                <i class="sidebar-item-icon ft-layers">
                </i>
                <span class="nav-label">Stock Report
                </span> 
              </a>
            </li>
            <!--<li>
              <a href="javascript:;">
                <i class="sidebar-item-icon ft-user">
                </i>
                <span class="nav-label">Coustomers
                </span>  
              </a>
            </li>-->
			<li class="<?php echo (($page == 'discount_coupon' || $page == 'coupon_details' || $page == 'discount_details')?'mm-active':'')?>">
              <a href="#">
                <i class="sidebar-item-icon ft-tag">
                </i>
                <span class="nav-label">List Of Supplier
                </span>
              </a>
            </li>
            <!--<li class="<?php echo (($page == 'profile_settings')?'mm-active':'')?>">
              <a href="profile_settings.php">
                <i class="sidebar-item-icon ft-shopping-bag">
                </i>
                <span class="nav-label">Store
                </span>
              </a>
            </li>-->
          </ul>
		  <!-- <div class="text-center" style="margin-top:10px;">
			<a class="btn btn-notify btn-lg" href="notifications.php">Notifications</a>
		  </div> -->
        </div>
      