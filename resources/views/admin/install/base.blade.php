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
                    <div class="card">
                        <div class="card-header"><h5 class="card-header-text">设置用户基本信息</h5>
                        </div>
                        <div class="card-block">
                            <form class="row" id="groupForm" method="post">
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站名称</button></span>
                                        <input type="text" id="websitename"  name="websitename" value="{{$website['websitename']}}" class="form-control" placeholder="网站名称" aria-describedby="btn-addon1">
                                        <input type="hidden" name="id" value="{{$website['id']}}">

                                    </div>
                                </div>

                                {{ csrf_field() }}

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站地址</button></span>
                                        <input type="text" id="domain" name="domain" value="{{$website['domain']}}" class="form-control" placeholder="网站地址" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">联系邮箱</button></span>
                                        <input type="text" id="email" name="email" value="{{$website['email']}}" class="form-control" placeholder="联系邮箱" aria-describedby="btn-addon1">
                                    </div>
                                </div>


                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">客服电话</button></span>
                                        <input type="text" id="mobile" name="mobile" value="{{$website['mobile']}}" class="form-control" placeholder="客服电话" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站客服QQ</button></span>
                                        <input type="text" id="qq" name="qq" value="{{$website['qq']}}" class="form-control" placeholder="网站客服QQ" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站后台目录</button></span>
                                        <input type="text" id="directory" name="directory" value="{{$website['directory']}}" class="form-control"   placeholder="网站后台目录" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站登录地址</button></span>
                                        <input type="text" id="login" name="login" value="{{$website['login']}}" class="form-control" placeholder="网站登录地址" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站备案号</button></span>
                                        <input type="text" id="icp" name="icp" value="{{$website['icp']}}" class="form-control" placeholder="网站备案号" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">公司名称</button></span>
                                        <input type="text" id="company" name="company" value="{{$website['company']}}"  class="form-control" placeholder="公司名称" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                    <div class="col-md-8" style="padding-top: 20px;">
                                        <div class="col-md-2 "><label class="form-control-label">商户logo</label></div>
                                        <div class="col-md-10 ">
                                            <div class="md-group-add-on">
                                            <span class="md-add-on-file">
                                                <button class="btn btn-success waves-effect waves-light">上传图片</button>
                                            </span>
                                                <div class="md-input-file">
                                                    <input type="file" name="file" class="">
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-sm-3 col-xs-12">
                                                <a href="/admin/images/light-box/l5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing.">
                                                    <img src="/admin/images/light-box/sl5.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">商户前台登录错误次数</button></span>
                                        <input type="text" name="login_warning_num" class="form-control" value="{{$website['login_warning_num']}}" placeholder="商户前台登录错误次数" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站备案号</button></span>
                                        <input type="text" name="ptsr" class="form-control" placeholder="网站备案号"  value="{{$website['ptsr']}}" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">商户代付</label></div>
                                    <div class="col-md-10">
                                        <label class="custom-control custom-radio">
                                            <input name="payingservice" type="radio" @if( $website['payingservice']==1)checked @endif  checked value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="payingservice" type="radio" @if( $website['payingservice']==0)checked @endif value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">商户认证</label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input  name="authorized" type="radio" @if( $website['authorized']==1)checked @endif value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="authorized" type="radio" @if( $website['authorized']==0)checked @endif  value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">邀请码注册</label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input  name="invitecode" type="radio" @if( $website['invitecode']==1)checked @endif   value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="invitecode" type="radio" @if( $website['invitecode']==0)checked @endif  value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">提现通知</label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input  name="withdraw" type="radio" @if( $website['withdraw']==1)checked @endif value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="withdraw" type="radio" @if( $website['withdraw']==0)checked @endif value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">允许重复订单</label></div>
                                    <div class="col-md-10">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" name="is_repeat_order" type="radio" @if( $website['is_repeat_order']==1)checked @endif value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="is_repeat_order" @if( $website['is_repeat_order']==0)checked @endif type="radio" value="2" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">IP登录白名单</label></div>
                                    <div class="col-md-10 ">
                                        <textarea class="form-control max-textarea" name="login_ip" maxlength="255" rows="4">{{$website['login_ip']}}</textarea>

                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">网站统计代码</label></div>
                                    <div class="col-md-10 ">
                                        <textarea class="form-control max-textarea" name="tongji" maxlength="255" rows="4">{{$website['tongji']}}</textarea>

                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">谷歌令牌登录验证</label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input name="google_auth" type="radio"   @if( $website['google_auth']==1)checked @endif value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="google_auth" type="radio"  @if( $website['google_auth']==0)checked @endif value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">代付API</label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input  name="df_api" type="radio"   @if( $website['df_api']==1)checked @endif value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input  name="df_api" type="radio"  @if( $website['df_api']==0)checked @endif  value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">使用随机商户号</label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input name="random_mchno" type="radio" @if( $website['random_mchno']==1)checked @endif value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input name="random_mchno"  @if( $website['random_mchno']==0)checked @endif type="radio" value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">用户注册是否需要激活 </label></div>
                                    <div class="col-md-10 ">
                                        <label class="custom-control custom-radio">
                                            <input  name="register_need_activate" type="radio"  @if( $website['register_need_activate']==1)checked @endif  value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input name="register_need_activate" @if( $website['register_need_activate']==0)checked @endif  type="radio"  value="0" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="card-block button-list">
                                        <button type="button" onclick="register_check()" class="btn btn-success active waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="提交">提交
                                        </button>
                                        <button type="reset" class="btn btn-warning active waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="重置" aria-describedby="tooltip508176">重置
                                        </button>

                                    </div>
                                    <!-- end of card-block -->
                                </div>
                            </form>
                        </div>
                    </div>
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
    <script>
        function register_check(){
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/admin/save",
                data: $('#groupForm').serialize(),
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