<div class="left-side-menu">

    <div class="h-100" data-simplebar>


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
                <li>
                    <a href="/">
                        <i class="mdi mdi-apps"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href=<?php echo e(route('add.trip')); ?>>
                        <i class="mdi mdi-television-guide"></i>
                        <span>Create a Trip </span>
                    </a>
                </li>

                <li>
                    <a href=<?php echo e(route('book.trip')); ?>>
                        <i class="mdi mdi-forum-outline"></i>
                        <span>Booking a Trip</span>
                    </a>
                </li>

                <li>

                    <a href=<?php echo e(route('get.ticket')); ?>>
                        <i class="mdi mdi-clipboard-check"></i>
                        <span>Purchased Ticket List</span>
                    </a>
                </li>

                

                <li>
                    <a href=<?php echo e(route('get.ticket')); ?>>
                        <i class="mdi mdi-clipboard-check"></i>
                        <span>My Ticket</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
<?php /**PATH C:\laragon\www\ticket-Booking-System\resources\views/layout/leftsidebar.blade.php ENDPATH**/ ?>