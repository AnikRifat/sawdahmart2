<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('slider.index') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-color">Slider</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Orders Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">

                        <li>
                            <a href="{{ route('order.index') }}">
                                <span data-key="t-chat">Requested Order</span>
                            </a>
                            <a href="{{ route('accept.view') }}">
                                <span data-key="t-chat">Accepted Order</span>
                            </a>
                            <a href="{{ route('cancel.view') }}">
                                <span data-key="t-chat">Canceled Order</span>
                            </a>
                        </li>

                        {{-- <li>
                            <a href="{{ route('order.complete') }}">
                        <span data-key="t-chat">Completed Order</span>
                        </a>
                </li>
                <li>
                    <a href="{{ route('order.pending') }}">
                        <span data-key="t-chat">Pending Order</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('order.cancaled') }}">
                        <span data-key="t-chat">cancaled Order</span>
                    </a>
                </li> --}}
            </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="grid"></i>
                    <span data-key="t-apps">Products Management</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">

                    <li>
                        <a href="{{ route('addproduct') }}">

                            <span data-key="t-chat">Add Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('product.index') }}">
                            <span data-key="t-chat">View Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('viewsize') }}">
                            <span data-key="t-size">Size</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('viewcolor') }}">
                            <span data-key="t-color">Color</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="grid"></i>
                    <span data-key="t-apps">Category</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('viewcategory') }}">
                            <span data-key="t-chat">Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('viewsubcategory') }}">
                            <span data-key="t-chat">Sub Category</span>
                        </a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="grid"></i>
                    <span data-key="t-apps">Websites</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('content') }}">
                            <span data-key="t-calendar">Content</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('viewreview') }}">
                            <span data-key="t-chat">Testimonial</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="grid"></i>
                    <span data-key="t-apps">User</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('customer.index') }}">
                            <span data-key="t-chat">Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.index') }}">
                            <span data-key="t-chat">Admin</span>
                        </a>
                    </li>
                </ul>

            </li>




            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
