@include('common.head')
<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->

        <header class="main-header-top hidden-print">
            @include('common.top')
        </header>

        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
          @include('common.leftbutton')
        </aside>

        <!-- Sidebar chat start -->
        <div id="sidebar" class="p-fixed header-users showChat">
            @include('common.showChat')
        </div>
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="icofont icofont-rounded-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-circle m-t-5" src="/admin/images/avatar-1.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-circle m-t-5" src="/admin/images/avatar-2.png" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                    </a>
                </div>
            </div>
            <div class="media chat-reply-box">
                <div class="md-input-wrapper">
                    <input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
                    <label>Share your thoughts</label>
                    <span class="highlight"></span>
                    <span class="bar"></span>  <button type="button" class="chat-send waves-effect waves-light">
                        <i class="icofont icofont-location-arrow f-20 "></i>
                    </button>

                    <button type="button" class="chat-send waves-effect waves-light">
                        <i class="icofont icofont-location-arrow f-20 "></i>
                    </button>
                </div>

            </div>
        </div>
        <!-- Sidebar chat end-->
        <div class="content-wrapper">
            {{--给非公共的地方设定填充页面--}}
            @yield('content')
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
    @include('common.warning')
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script src="/admin/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/admin/plugins/tether/dist/js/tether.min.js"></script>
    <!-- Required Fremwork -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    @yield('js')

</body>
</html>
