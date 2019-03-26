<section class="sidebar" id="sidebar-scroll">

    <div class="user-panel">
        <div class="f-left image"><img src="/admin/images/avatar-1.png" alt="User Image" class="img-circle"></div>
        <div class="f-left info">
            <p>{{$info['username']}}{{--{{ auth('admin')->user()->name }}--}}</p>
            <p class="designation">操作 <i class="icofont icofont-caret-down m-l-5"></i></p>
        </div>
    </div>
    <!-- sidebar profile Menu-->
    <ul class="nav sidebar-menu extra-profile-list">
        <li>
            <a class="waves-effect waves-dark" href="profile.html">
                <i class="icon-user"></i>
                <span class="menu-text">View Profile</span>
                <span class="selected"></span>
            </a>
        </li>
        <li>
            <a class="waves-effect waves-dark" href="javascript:void(0)">
                <i class="icon-settings"></i>
                <span class="menu-text">设置</span>
                <span class="selected"></span>
            </a>
        </li>
        <li>
            <a class="waves-effect waves-dark" href="{{ route('admin.logouts') }} " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="icon-logout"></i>
                <span class="menu-text">退出</span>
                <span class="selected"></span>
                <form id="logout-form" action="{{ route('admin.logouts') }}" method="GET" style="display: none;">

                    @csrf
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input name="_method" type="hidden" value="GET">
                </form>
            </a>
        </li>



    </ul>
    <!-- Sidebar Menu-->
    <ul class="sidebar-menu">

        @foreach($rule as $key=>$sort)
            @if($sort['pid'] == 0)
                <li class="nav-level">{{$sort['title']}}</li>
            @endif
            @foreach($sort['pid2'] as $ke1=>$sort1)

                <li class=" {{$sort1['fun']}} treeview">
                    @if( $sort1['pid']==1 )

                        <a class="waves-effect waves-dark" href="index">
                            <i class="{{$sort1['icon']}}"></i><span> {{$sort1['title']}}</span>
                        </a>
                    @else
                        <a class="waves-effect waves-dark" href="#!">
                            <i class="{{$sort1['icon']}}"></i><span> {{$sort1['title']}}</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            @foreach($sort1['pid3'] as $ke2=>$sort2)
                                <li><a class="waves-effect waves-dark"   style="{{$sort2['color']}}"  href="{{$sort2['menu_name']}}"><i class="{{$sort2['icon']}}"></i> {{$sort2['title']}}</a></li>
                            @endforeach
                        </ul>
                    @endif

                </li>

            @endforeach
        @endforeach
        {{--
        <li class="nav-level">首页管理</li>
        <li class="active treeview">
            <a class="waves-effect waves-dark" href="index">
                <i class="icon-speedometer"></i><span> Dashboard</span>
            </a>
        </li>
        <li class="nav-level">聚合系统</li>
        <li class="treeview">
            <a class="waves-effect waves-dark" href="#!">
                <i class="icon-settings"></i><span> 用户设置</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/install"><i class="icon-wrench"></i> 基本设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/email"><i class="icon-drawer"></i> 邮箱设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-speech"></i> 短信设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/planning"><i class="icon-layers"></i> 任务设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/mobile"><i class="icon-phone"></i> 手机设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/clearData"><i class="icon-social-dropbox"></i> 数据清理</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/editPassword"><i class="icon-key"></i> 修改密码</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/cio"><i class="icon-arrow-right"></i> 图标</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="waves-effect waves-dark" href="#!">
                <i class="icon-user"></i><span> 管理员管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/user"><i class="icon-people"></i> 管理员管理</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/email"><i class="icon-user-follow"></i>角色管理</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-note"></i>  权限配置</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="waves-effect waves-dark" href="#!">
                <i class="icon-people"></i><span> 用户管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/user"><i class="icon-user-following"></i>已认证用户</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/email"><i class="icon-key"></i>待认证用户</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-user-female"></i>未认证用户</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-user-unfollow"></i>冻结用户</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-pin"></i>邀请码</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-eyeglass"></i>登录记录</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="waves-effect waves-dark" href="#!">
                <i class="icon-organization"></i><span> 代理管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/user"><i class="icon-user-follow"></i>代理列表</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/email"><i class="icon-pie-chart"></i>佣金记录</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-list"></i>代付Api订单</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-pencil"></i>修改代理分类</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> 订单管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-like"></i>成功订单</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-dislike"></i>未支付订单</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-question"></i>异常订单</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-link"></i> 投诉保证金设置</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-diamond"></i><span> 提款管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-wrench"></i> 提款设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-chemistry"></i>手动结算</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-support"></i> 代付结算</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-paypal"></i><span> 通道管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-wrench"></i>入金渠道设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-chemistry"></i>支付产品设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-support"></i>代付渠道设置</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-film"></i><span> 文章管理</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-options-vertical"></i> 栏目列表</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i> 文章列表</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-graph"></i><span> 财务分析</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-options-vertical"></i>  交易统计</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>商户交易统计</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>代理商交易统计</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>接口交易统计</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>充值排行榜</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>代理商交易统计</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>投诉保证金统计</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-layers"></i>平台报表</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-chart"></i>商户报表</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/order"><i class="icon-equalizer"></i>代理报表</a></li>
            </ul>
        </li>
        <li class="nav-level">商品系统</li>
        <li class="treeview">
            <a class="waves-effect waves-dark" href="#!">
                <i class="icon-briefcase"></i><span> 用户设置</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="/admin/install"><i class="icon-arrow-right"></i> 基本设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/email"><i class="icon-arrow-right"></i> 邮箱设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/smssz"><i class="icon-arrow-right"></i> 短信设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/planning"><i class="icon-arrow-right"></i> 任务设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/mobile"><i class="icon-arrow-right"></i> 手机设置</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/clearData"><i class="icon-arrow-right"></i> 数据清理</a></li>
                <li><a class="waves-effect waves-dark" href="/admin/install/editPassword"><i class="icon-arrow-right"></i> 修改密码</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="waves-effect waves-dark" href="basic-table.html">
                <i class="icon-list"></i><span> Table</span>
            </a>
        </li>
        <li class="nav-level">More</li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                        <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                        <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                        <li><a class="waves-effect waves-dark" href="profile.html"><i class="icon-arrow-right"></i> Profile</a></li>
                    </ul>
                </li>
                <li><a class="waves-effect waves-dark" href="lock-screen.html" target="_blank"><i class="icon-arrow-right"></i> Lock Screen</a></li>
                <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                <li><a class="waves-effect waves-dark" href="search-result.html"><i class="icon-arrow-right"></i> Search Result</a></li>
            </ul>
        </li>
        <li class="nav-level">Menu Level</li>
        <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-arrow-right"></i>
                        Level Two
                    </a>
                </li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-arrow-right"></i>
                        <span>Level Two</span>
                        <i class="icon-arrow-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Three
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Three</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Four
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Four
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>--}}
    </ul>
</section>
