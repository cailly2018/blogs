{{--继承公共的代码--}}
@extends('common.admin')
@section('content')
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Main content starts -->
        <div class="col-sm-12 p-0">
            <div class="main-header" style="margin-top: 0px;">
                {{-- <h4>设置用户基本信息</h4>--}}
                <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="icofont icofont-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Table</a>
                    </li>
                    <li class="breadcrumb-item"><a href="basic-table.html">Basic Table</a>
                    </li>
                </ol>
            </div>
        </div>
        <div>
            <!-- Row start -->
            <div class="row">
                <!--Input Groups Form starts-->
                <div class="col-lg-12">
                    <i class="icon-user"></i>
                    <i class="icon-people"></i>
                    <i class="icon-user-female"></i>
                    <i class="icon-user-follow"></i>
                    <i class="icon-user-following"></i>
                    <i class="icon-user-unfollow"></i>
                    <i class="icon-login"></i>
                    <i class="icon-logout"></i>
                    <i class="icon-emotsmile"></i>
                    <i class="icon-phone"></i>
                    <i class="icon-call-end"></i>
                    <i class="icon-call-in"></i>
                    <i class="icon-call-out"></i>
                    <i class="icon-map"></i>
                    <i class="icon-location-pin"></i>
                    <i class="icon-direction"></i>
                    <i class="icon-directions"></i>
                    <i class="icon-compass"></i>
                    <i class="icon-layers"></i>
                    <i class="icon-menu"></i>
                    <i class="icon-list"></i>
                    <i class="icon-options-vertical"></i>
                    <i class="icon-arrow-down"></i>
                    <i class="icon-arrow-left"></i>
                    <i class="icon-arrow-right"></i>
                    <i class="icon-arrow-up"></i>
                    <i class="icon-arrow-up-circle"></i>
                    <i class="icon-arrow-left-circle"></i>
                    <i class="icon-arrow-right-circle"></i>
                    <i class="icon-arrow-down-circle"></i>
                    <i class="icon-clock"></i>
                    <i class="icon-plus"></i>
                    <i class="icon-minus"></i>
                    <i class="icon-close"></i>
                    <i class="icon-event"></i>
                    <i class="icon-exclamation"></i>
                    <i class="icon-organization"></i>
                    <i class="icon-trophy"></i>
                    <i class="icon-screen-smartphone"></i>
                    <i class="icon-screen-desktop"></i>
                    <i class="icon-plane"></i>
                    <i class="icon-notebook"></i>
                    <i class="icon-mustache"></i>
                    <i class="icon-mouse"></i>
                    <i class="icon-magnet"></i>
                    <i class="icon-energy"></i>
                    <i class="icon-user"></i>
                    <i class="icon-disc"></i>
                    <i class="icon-cursor"></i>
                    <i class="icon-cursor-move"></i>
                    <i class="icon-crop"></i>
                    <i class="icon-chemistry"></i>
                    <i class="icon-speedometer"></i>
                    <i class="icon-shield"></i>
                    <i class="icon-screen-tablet"></i>
                    <i class="icon-magic-wand"></i>
                    <i class="icon-hourglass"></i>
                    <i class="icon-graduation"></i>
                    <i class="icon-ghost"></i>
                    <i class="icon-game-controller"></i>
                    <i class="icon-fire"></i>
                    <i class="icon-eyeglass"></i>

                    <i class="icon-user"></i>
                    <i class="icon-user"></i>
                    <i class="icon-user"></i>
                    <i class="icon-envelope-open"></i>
                    <i class="icon-envelope-letter"></i>
                    <i class="icon-bell"></i>
                    <i class="icon-badge"></i>
                    <i class="icon-anchor"></i>
                    <i class="icon-wallet"></i>
                    <i class="icon-vector"></i>
                    <i class="icon-speech"></i>
                    <i class="icon-puzzle"></i>
                    <i class="icon-printer"></i>
                    <i class="icon-present"></i>
                    <i class="icon-playlist"></i>
                    <i class="icon-pin"></i>
                    <i class="icon-picture"></i>
                    <i class="icon-handbag"></i>
                    <i class="icon-globe-alt"></i>
                    <i class="icon-globe"></i>
                    <i class="icon-film"></i>
                    <i class="icon-feed"></i>
                    <i class="icon-drop"></i>
                    <i class="icon-drawer"></i>
                    <i class="icon-docs"></i>
                    <i class="icon-doc"></i>
                    <i class="icon-diamond"></i>
                    <i class="icon-cup"></i>
                    <i class="icon-calculator"></i>
                    <i class="icon-bubbles"></i>
                    <i class="icon-briefcase"></i>
                    <i class="icon-basket-loaded"></i>
                    <i class="icon-basket"></i>
                    <i class="icon-bag"></i>
                    <i class="icon-action-undo"></i>
                    <i class="icon-action-redo"></i>
                    <i class="icon-wrench"></i>
                    <i class="icon-umbrella"></i>
                    <i class="icon-trash"></i>
                    <i class="icon-tag"></i>
                    <i class="icon-support"></i>
                    <i class="icon-frame"></i>
                    <i class="icon-size-fullscreen"></i>
                    <i class="icon-size-actual"></i>
                    <i class="icon-shuffle"></i>
                    <i class="icon-share-alt"></i>
                    <i class="icon-share"></i>
                    <i class="icon-rocket"></i>
                    <i class="icon-question"></i>
                    <i class="icon-pie-chart"></i>
                    <i class="icon-pencil"></i>
                    <i class="icon-note"></i>
                    <i class="icon-loop"></i>
                    <i class="icon-home"></i>
                    <i class="icon-grid"></i>
                    <i class="icon-graph"></i>
                    <i class="icon-microphone"></i>
                    <i class="icon-music-tone-alt"></i>
                    <i class="icon-music-tone"></i>
                    <i class="icon-earphones-alt"></i>
                    <i class="icon-earphones"></i>
                    <i class="icon-equalizer"></i>
                    <i class="icon-like"></i>
                    <i class="icon-dislike"></i>
                    <i class="icon-control-start"></i>
                    <i class="icon-control-rewind"></i>
                    <i class="icon-control-play"></i>
                    <i class="icon-control-pause"></i>
                    <i class="icon-control-forward"></i>
                    <i class="icon-control-end"></i>
                    <i class="icon-volume-1"></i>
                    <i class="icon-volume-2"></i>
                    <i class="icon-volume-off"></i>
                    <i class="icon-bubble"></i>
                    <i class="icon-calendar"></i>
                    <i class="icon-bulb"></i>
                    <i class="icon-chart"></i>
                    <i class="icon-ban"></i>
                    <i class="icon-camrecorder"></i>
                    <i class="icon-camera"></i>
                    <i class="icon-cloud-download"></i>
                    <i class="icon-cloud-upload"></i>
                    <i class="icon-envelope"></i>
                    <i class="icon-eye"></i>
                    <i class="icon-flag"></i>
                    <i class="icon-heart"></i>
                    <i class="icon-info"></i>
                    <i class="icon-key"></i>
                    <i class="icon-link"></i>
                    <i class="icon-lock"></i>
                    <i class="icon-lock-open"></i>
                    <i class="icon-magnifier"></i>
                    <i class="icon-magnifier-add"></i>
                    <i class="icon-magnifier-remove"></i>
                    <i class="icon-paper-clip"></i>
                    <i class="icon-paper-plane"></i>
                    <i class="icon-power"></i>
                    <i class="icon-refresh"></i>
                    <i class="icon-reload"></i>
                    <i class="icon-settings"></i>
                    <i class="icon-star"></i>
                    <i class="icon-symbol-female"></i>
                    <i class="icon-symbol-male"></i>
                    <i class="icon-target"></i>
                    <i class="icon-credit-card"></i>
                    <i class="icon-paypal"></i>
                    <i class="icon-social-tumblr"></i>
                    <i class="icon-social-twitter"></i>
                    <i class="icon-social-facebook"></i>
                    <i class="icon-social-instagram"></i>
                    <i class="icon-social-linkedin"></i>
                    <i class="icon-social-pinterest"></i>
                    <i class="icon-social-github"></i>
                    <i class="icon-social-behance"></i>
                    <i class="icon-social-google"></i>
                    <i class="icon-social-reddit"></i>
                    <i class="icon-social-skype"></i>
                    <i class="icon-social-dribbble"></i>
                    <i class="icon-social-foursqare"></i>
                    <i class="icon-social-soundcloud"></i>
                    <i class="icon-social-spotify"></i>
                    <i class="icon-social-stumbleupon"></i>
                    <i class="icon-social-youtube"></i>
                    <i class="icon-social-dropbox"></i>
                    <i class="icon-social-vkontakte"></i>
                    <i class="icon-flask"></i>



                </div>
                <!--Input Groups Form ends-->
            </div>
            <!-- Row end -->
        </div>
        <!-- Main content ends -->
    </div>
    <!-- Container-fluid ends -->
@endsection




@section('js')

    <!-- waves effects.js -->
    <script src="/admin/plugins/Waves/waves.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/admin/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="/admin/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="/admin/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- syntax highlighter js -->
    <script type="text/javascript" src="/admin/plugins/syntaxhighlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="/admin/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
    <script type="text/javascript" src="/admin/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
    <script type="text/javascript">SyntaxHighlighter.all();</script>

    <!-- custom js -->
    <script type="text/javascript" src="/admin/js/main.min.js"></script>
    <script type="text/javascript" src="/admin/pages/elements.js"></script>
    <script src="/admin/js/menu.min.js"></script>

@endsection