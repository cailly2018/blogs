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
                        <div class="card-header"><h5 class="card-header-text">邮箱设置</h5>
                        </div>

                        <div class="card-block">
                            <form class="row">
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">smtp服务器</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="smtp服务器" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">smtp端口</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="smtp端口" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">smtp用户名</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="smtp用户名" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">smtp密码</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="smtp密码" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">发件人Email</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="发件人Email" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">发件人姓名</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="发件人姓名" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 10px;">
                                    <div class="input-group">
                                        <span class="input-group-btn" id="btn-addon1">
                                            <button type="submit" class="btn btn-info shadow-none addon-btn waves-effect waves-light">网站登录地址</button></span>
                                        <input type="text" id="btnaddon1" class="form-control" placeholder="网站登录地址" aria-describedby="btn-addon1">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="card-block button-list">
                                        <button type="button" class="btn btn-success active waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="提交">提交
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

@endsection