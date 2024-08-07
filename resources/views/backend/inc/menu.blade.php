<div class="br-logo"><a href="{{route('dashboard')}}"><span>[</span>LARA <i>VEL</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{route('dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <!-- Mailbox -->
        <!-- <li class="br-menu-item">
          <a href="mailbox.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </a>
        </li> -->
        <!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Brands</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('brand.manage')}}" class="sub-link">Manage All Brands</a></li>
            <li class="sub-item"><a href="{{route('brand.create')}}" class="sub-link">Add New Brands</a></li>
            <li class="sub-item"><a href="card-listing.html" class="sub-link">Shop &amp; Listing</a></li>
          </ul>
        </li>
        <!-- br menu item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
          <li class="sub-item"><a href="{{route('category.manage')}}" class="sub-link">Manage All Category</a></li>
            <li class="sub-item"><a href="{{route('category.create')}}" class="sub-link">Add New Category</a></li>
          </ul>
        </li>
        <!-- br menu item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-color-filter-outline tx-24"></i>
            <span class="menu-item-label">Products</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('product.manage')}}" class="sub-link">Manage All Product</a></li>
            <li class="sub-item"><a href="{{route('product.create')}}" class="sub-link">Add New Product</a></li>
          </ul>
        </li>
        <!-- br menu item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Divisions</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('division.manage')}}" class="sub-link">Manage All Division</a></li>
            <li class="sub-item"><a href="{{route('division.create')}}" class="sub-link">Add New Division</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
            <!-- menu-item-icon ion-ios-redo-outline tx-24  (share_icon) -->
            <span class="menu-item-label">Districts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('district.manage')}}" class="sub-link">Manage All District</a></li>
            <li class="sub-item"><a href="{{route('district.create')}}" class="sub-link">Add New District</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
            <span class="menu-item-label">Sliders</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('slider.manage')}}" class="sub-link">Manage All Slider</a></li>
            <li class="sub-item"><a href="{{route('slider.create')}}" class="sub-link">Add New Slider</a></li>
          </ul>
        </li><!-- br-menu-item -->
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="chart-morris.html" class="sub-link">Morris Charts</a></li>
            <li class="sub-item"><a href="chart-flot.html" class="sub-link">Flot Charts</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Forms</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="form-elements.html" class="sub-link">Form Elements</a></li>
            <li class="sub-item"><a href="form-layouts.html" class="sub-link">Form Layouts</a></li>
          </ul>
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="map-google.html" class="sub-link">Google Maps</a></li>
            <li class="sub-item"><a href="map-leaflet.html" class="sub-link">Leaflet Maps</a></li>
            <li class="sub-item"><a href="map-vector.html" class="sub-link">Vector Maps</a></li>
          </ul>
        </li><!-- br-menu-item -->

        <!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Utilities</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="background.html" class="sub-link">Background</a></li>
            <li class="sub-item"><a href="border.html" class="sub-link">Border</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="pages.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Apps &amp; Pages</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
      </div><!-- info-list -->

      <br>
    </div>