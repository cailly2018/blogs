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
                        <div class="card-header"><h5 class="card-header-text">修改密码</h5>
                            <div class="f-right">
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="刷新">
                                    <i class="icofont icofont-refresh"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-block">
                            <form class="row">
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label" style="">原密码</label></div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" value="0" id="example-number-input">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label" style="">新密码</label></div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" value="0" id="example-number-input">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="col-md-2 "><label class="form-control-label" style="">重复新密码</label></div>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" value="0" id="example-number-input">
                                    </div>
                                </div>
                                <div class="col-md-8" style="padding-top: 20px;">
                                    <div class="card-block button-list">
                                        <button type="button" class="btn btn-success active waves-effect waves-light m-r-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="提交">提交
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