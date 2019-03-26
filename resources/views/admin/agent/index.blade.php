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
                            <li class="breadcrumb-item"><a href="#">代理管理</a>
                            </li>
                            <li class="breadcrumb-item"><a href="basic-table.html">代理列表</a>
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
                            <h5 class="card-header-text">代理列表</h5>
                        </div>
                        <div class="card-header">
                            <div class="card-block">
                                <form class="form-inline" action="{{$pages_all}}">
                                    <div class="form-group m-r-15">
                                        <label for="inline2mail" class="m-r-15 form-control-label">商户号</label>
                                        <input id="inline2mail" type="text" name="memberid" value="{{$memberid}}" class="form-control" placeholder="商户号">
                                    </div>

                                    <div class="form-group m-r-15">
                                        <label for="inline2mail" class="m-r-15 form-control-label">用户名</label>
                                        <input id="inline2mail" type="text" name="parentid" value="{{$parentid}}" class="form-control" placeholder="用户名">
                                    </div>

                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">代理级别</label>
                                        <select class="form-control" name="agent_cate" id="exampleSelect1">
                                            <option value="">请选择级别</option>
                                            <option value="1" @if( $agent_cate==1)selected @endif>高级代理</option>
                                            <option value="2" @if( $agent_cate==2)selected @endif>中级代理</option>
                                            <option value="2" @if( $agent_cate==2)selected @endif>普通代理</option>
                                        </select>
                                    </div>
                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">开始时间</label>
                                        <input class="form-control" type="date"  name="s_date"  value="{{$s_date}}" id="example-date-input">
                                    </div>
                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">结束时间</label>
                                        <input class="form-control" type="date" name="e_date" value="{{$e_date}}" id="example-date-input">
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
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>id</th>
                                            <th>用户名</th>
                                            <th>代理分类</th>
                                            <th>上级用户</th>
                                            <th>状态</th>
                                            <th>认证</th>
                                            <th>账户总额</th>
                                            <th>注册时间</th>
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
                                                                <input type="checkbox" id="{{$list['id'] }}">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $list['id'] }}</td>
                                                <td>{{ $list['username'] }}</td>
                                                <td>{{ $list['agent_cate'] }}</td>
                                                <td>{{ $list['parentid'] }}</td>
                                                <td> @if($list['status']==1)正常@else 禁止 @endif</td>
                                                <td>@if($list['authorized']==1)已认证@else 未认证 @endif</td>
                                                <td>{{$list['balance'] }}</td>
                                                <td> {{ date('Y-m-d H:i:s',$list['regdatetime'] )}} </td>

                                                <td></td>
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

        </script>

@endsection

