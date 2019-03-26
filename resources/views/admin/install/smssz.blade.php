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
                        <div class="card-header"><h5 class="card-header-text">短信设置</h5>
                            <div class="f-right">
                                <button type="button" class="btn btn-primary waves-effect waves-light m-r-30">添加模板</button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="刷新">
                                    <i class="icofont icofont-refresh"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-block">
                            <form class="row" id="groupForm" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$list['id']}}">
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">短信通道</button></span>
                                        <input type="text" name="sms_channel"  value="{{$list['sms_channel']}}" class="form-control" placeholder="短信通道" aria-describedby="btn-addon1">
                                    </div>
                                </div>

                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">阿里云App Key</button></span>
                                        <input type="text" name="app_key"  value="{{$list['app_key']}}" class="form-control" placeholder="阿里云App Key" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">阿里云App Secret</button></span>
                                        <input type="text"  name="app_secret"  value="{{$list['app_secret']}}" class="form-control" placeholder="阿里云App Secret" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">短信宝账号</button></span>
                                        <input type="text" name="smsbao_pass"  value="{{$list['smsbao_pass']}}" class="form-control" placeholder="短信宝账号" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">短信宝密码</button></span>
                                        <input type="text" name="smsbao_user"  value="{{$list['smsbao_user']}}"  class="form-control" placeholder="短信宝密码" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">短信签名</button></span>
                                        <input type="text"  name="sign_name"  value="{{$list['sign_name']}}"class="form-control" placeholder="短信签名" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label">短信设置</label></div>
                                    <div class="col-md-10">
                                        <label class="custom-control custom-radio">
                                            <input  name="is_receive" type="radio" @if( $list['is_receive']==1)checked @endif  value="1" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">开启</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input name="is_receive" type="radio" value="0"  @if( $list['is_receive']==0)checked @endif class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">关闭</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="card-block button-list">
                                        <button type="button"  onclick="register_check()" class="btn btn-success active waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="提交">提交
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
                url: "/admin/savesm",
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