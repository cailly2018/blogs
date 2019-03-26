{{--继承公共的代码--}}
@extends('common.admin')
@section('content')
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Header Starts -->
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="main-header" style="margin-top: 0px;">
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">接贷款管理</a>
                            </li>
                            <li class="breadcrumb-item"><a href="basic-table.html">货款列表</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Header end -->
            <!-- Tables start -->
            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Hover effect table starts -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">订单列表</h5>
                            {{--<i class="icon-user"></i>
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
                            <i class="icon-social-steam"></i>
--}}
                        </div>
                        <div class="card-header">
                            <div class="card-block">
                                <form class="form-inline" action="{{$pages_all}}">
                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">时间</label>
                                        <input class="form-control" type="date"  name="s_date"  value="{{$s_date}}" id="example-date-input">
                                    </div>

                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">状态</label>
                                        <select class="form-control" name="status" id="exampleSelect1">
                                            <option value="">请选择支付状态</option>
                                            <option value="1" @if( $status==1)selected @endif>已还</option>
                                            <option value="2" @if( $status==2)selected @endif>未还</option>

                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" data-original-title="查询"  {{--onclick="register_check()"--}} aria-describedby="tooltip626071">
                                        <i class="icofont icofont-search-alt-2"></i>查询
                                    </button>
                                    <button type="button" class="btn btn-success active waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="导出">导出
                                    </button>
                                </form>

                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row text-uppercase text-center">
                                <div class="col-md-2 waves-effect waves-light">
                                    <div class="bg-primary p-10 ">总：{{$all}}</div>
                                </div>
                                <div class="col-md-2 waves-effect waves-light">
                                    <div class="bg-success p-10">已还：{{$ball}}</div>
                                </div>
                                <div class="col-md-2 waves-effect waves-light">
                                    <div class="bg-danger p-10">待还：{{$nall}}</div>
                                </div>
                                <div class="col-md-2 waves-effect waves-light">
                                    <div class="bg-warning p-10">{{$sum}}/240 期</div>
                                </div>

                            <!-- end of eow -->
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>id</th>
                                            <th>总贷款</th>
                                            <th>月供</th>
                                            <th>年限</th>
                                            <th>状态</th>
                                            <th>还款日期</th>
                                            <th>操作时间</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($lists as $list)
                                            <tr>
                                                <td>
                                                    <div class="to-do-list widget-to-do-list">
                                                        <div class="rkmd-checkbox checkbox-rotate">
                                                            <label class="input-checkbox checkbox-primary">
                                                                <input type="checkbox" id="{{ $list['id']}}">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>{{$list['id']}}</td>
                                                <td>{{ $list['amount']}}</td>
                                                <td>{{ $list['payments'] }}</td>
                                                <td>{{ $list['year']  }}</td>
                                                <td>@if( $list['isback'] ==1)已还@else 未还 @endif</td>
                                                <td>{{ $list['backday']  }}</td>
                                                <td>
                                                    {{ date('Y-m-d H:i:s', $list['uptime'] ) }}

                                                </td>
                                                <td>
                                                    @if( $list['isback'] ==1)@else
                                                        <button type="button" onclick="register_check({{$list['id']}})" class="btn btn-success active waves-effect waves-light m-r-10" data-toggle="tooltip" data-original-title="点击还款">点击还款
                                                        </button> @endif

                                                </td>


                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                    <div aria-label="page list small">

                                      {{--  @if($sum_1 ==0)--}}
                                        @include('page')
                                      {{--  @endif--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                {{ csrf_field() }}
                    <!-- Hover effect table ends -->
            <!-- Row end -->
            <!-- Tables end -->
             </div>
        </div>
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
        <script>
            function register_check(id){
              var  _token =  $("input[name='_token']").val();
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/admin/saves",
                    data: {id:id,_token:_token},
                    success: function (res) {
                        console.log(res);
                        if(res.code ==1){
                            alert(res.msg);
                            window.location.reload();
                        }else {

                        }
                    }
                },'json');
            }
        </script>

@endsection

