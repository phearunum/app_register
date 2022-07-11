 <!--**********************************
            Sidebar start
        ***********************************-->
 <div class="dlabnav">
     <div class="dlabnav-scroll">
         <ul class="metismenu" id="menu">
             <li class="dropdown header-profile">
                 <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                     <img src="/images/1.jpeg" width="20" alt="">
                     <div class="header-info ms-3">
                         <span class="font-w600 ">Hi,<b>{{ Auth::user()->username }}</b></span>
                         <small class="text-end font-w400">{{ Auth::user()->email }}</small>
                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end">
                     <a href="app-profile.html" class="dropdown-item ai-icon">
                         <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                             <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                             <circle cx="12" cy="7" r="4"></circle>
                         </svg>
                         <span class="ms-2">Profile </span>
                     </a>
                     <a href="email-inbox.html" class="dropdown-item ai-icon">
                         <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                             <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                             <polyline points="22,6 12,13 2,6"></polyline>
                         </svg>
                         <span class="ms-2">Inbox </span>
                     </a>
                     <a href="/logout" class="dropdown-item ai-icon">
                         <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                             <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                             <polyline points="16 17 21 12 16 7"></polyline>
                             <line x1="21" y1="12" x2="9" y2="12"></line>
                         </svg>
                         <span class="ms-2">Logout </span>
                     </a>
                 </div>
             </li>
             <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                     <i class="flaticon-025-dashboard"></i>
                     <span class="nav-text">Dashboard</span>
                 </a>
                 <ul aria-expanded="false">
                     <li><a href="index.html">Dashboard Light</a></li>
                     <li><a href="index-2.html">Dashboard Dark</a></li>
                     <li><a href="my-wallet.html">My Wallet</a></li>
                     <li><a href="page-invoices.html">Invoices</a></li>
                     <li><a href="cards-center.html">Cards Center</a></li>
                     <li><a href="page-transaction.html">Transaction</a></li>
                     <li><a href="transaction-details.html">Transaction Details</a></li>
                 </ul>

             </li>
             <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                     <i class="flaticon-050-info"></i>
                     <span class="nav-text">Apps</span>
                 </a>
                 <ul aria-expanded="false">
                     <li><a href="app-profile.html">Profile</a></li>
                     <li><a href="post-details.html">Post Details</a></li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                         <ul aria-expanded="false">
                             <li><a href="email-compose.html">Compose</a></li>
                             <li><a href="email-inbox.html">Inbox</a></li>
                             <li><a href="email-read.html">Read</a></li>
                         </ul>
                     </li>
                     <li><a href="app-calender.html">Calendar</a></li>
                     <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                         <ul aria-expanded="false">
                             <li><a href="ecom-product-grid.html">Product Grid</a></li>
                             <li><a href="ecom-product-list.html">Product List</a></li>
                             <li><a href="ecom-product-detail.html">Product Details</a></li>
                             <li><a href="ecom-product-order.html">Order</a></li>
                             <li><a href="ecom-checkout.html">Checkout</a></li>
                             <li><a href="ecom-invoice.html">Invoice</a></li>
                             <li><a href="ecom-customers.html">Customers</a></li>
                         </ul>
                     </li>
                 </ul>
             </li>

             <li><a class=" " href="/logout" aria-expanded="false">
                     <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                         <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                         <polyline points="16 17 21 12 16 7"></polyline>
                         <line x1="21" y1="12" x2="9" y2="12"></line>
                     </svg>
                     <span class="nav-text">Logout</span>
                 </a>

             </li>
         </ul>
         <div class="copyright">
             <p> © 2022 All Rights Reserved</p>

         </div>
     </div>
 </div>
 <!--**********************************
            Sidebar end
        ***********************************-->
