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
                            <li class="breadcrumb-item"><a href="#">订单管理</a>
                            </li>
                            <li class="breadcrumb-item"><a href="basic-table.html">资金变动管理</a>
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
                            <h5 class="card-header-text">资金变动管理</h5>
                        </div>
                        <div class="card-header">
                            <div class="card-block">
                                <form class="form-inline" action="{{$pages_all}}">

                                    <div class="form-group m-r-15">
                                        <label for="inline2mail" class="m-r-15 form-control-label">商户号</label>
                                        <input id="inline2mail" type="text" name="memberid" value="{{$memberid}}" class="form-control" placeholder="订单号">
                                    </div>
                                    <div class="form-group m-r-15">
                                        <label for="inline2mail" class="m-r-15 form-control-label">订单号</label>
                                        <input id="inline2mail" type="text" name="orderid" value="{{$orderid}}" class="form-control" placeholder="订单号">
                                    </div>
                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">开始时间</label>
                                        <input class="form-control" type="date"  name="s_date"  value="{{$s_date}}" id="example-date-input">
                                    </div>
                                    <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">结束时间</label>
                                        <input class="form-control" type="date" name="e_date" value="{{$e_date}}" id="example-date-input">
                                    </div>
            {{--                        <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">状态</label>
                                        <select class="form-control" name="status" id="exampleSelect1">
                                            <option value="1" @if( $status==1)selected @endif>未支付</option>
                                            <option value="2" @if( $status==2)selected @endif>已支付</option>

                                        </select>
                                    </div>--}}
                                  <div class="form-group m-r-15">
                                        <label for="inline2pwd" class="m-r-15 form-control-label">通道</label>
                                        <select class="form-control " name="channel">
                                       {{--     <option value="">请选择通道</option>
                                            @foreach ($channels as $channel)
                                            <option value="{{$channel['id']}}" @if( $channel['id'] ==  $channel_id)selected @endif>{{$channel->title}}</option>
                                            @endforeach--}}
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
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>id</th>
                                            <th>订单号</th>
                                            <th>用户名</th>
                                            <th>类型</th>
                                            <th>用户名(提成)</th>
                                            <th>提成级别</th>
                                            <th>原金额</th>
                                            <th>变动金额</th>
                                            <th>变动后金额</th>
                                            <th>变动时间</th>
                                            <th>通道</th>
                                            <th>备注</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                          {{--              <tr>



                                            <td style="text-align:center;">
                                                <switch name="vo.lx">
                                                    <case value="1">付款</case>
                                                    <case value="3">手动增加</case>
                                                    <case value="4">手动减少</case>
                                                    <case value="6">结算</case>
                                                    <case value="10">委托结算</case>
                                                    <case value="11">提款驳回</case>
                                                    <case value="12">代付驳回</case>
                                                    <case value="7">冻结</case>
                                                    <case value="8">解冻</case>
                                                    <case value="9">提成</case>
                                                    <case value="88">平台收入</case>
                                                    <default />未知
                                                </switch>
                                            </td>


                                            <td style="text-align:center;">
                                                <if condition="$vo[ymoney] gt $vo[gmoney]">
                                    <span style="color:#F00">
                                <else />
                                    <span style="color:#030">
                                                </if>
                                                <{$vo.money}>
                                                </span>
                                            </td>
                                            <td style="text-align:center;"><{$vo.gmoney}></td>
                                            <td style="text-align:center;"><{$vo.datetime}></td>
                                            <td style="text-align:center;"><{$vo["tongdao"]|getProduct}></td>
                                            <td style="text-align:center;">
                                                <if condition="$vo.lx == 1 or $vo.lx == 9">
                                                    <{:huoquddlx($vo.transid)}>
                                                    <else />
                                                    <{$vo['contentstr']}>
                                                </if>
                                            </td>
                                        </tr>--}}

                                        @foreach ($lists as $list)
                                            <tr>
                                                <td>
                                                    <div class="to-do-list widget-to-do-list">
                                                        <div class="rkmd-checkbox checkbox-rotate">
                                                            <label class="input-checkbox checkbox-primary">
                                                                <input type="checkbox" id="{{ $list['id'] }}">
                                                                <span class="checkbox"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $list['id'] }}</td>
                                                <td>{{ $list['transid'] }}</td>
                                                <td>{{ $list['userid'] }}</td>
                                                <td>{{ $list['lx'] }}</td>
                                                <td>{{ $list['tcuserid'] }}</td>
                                                <td>{{ $list['tcdengji'] }}</td>
                                                <td>{{ $list['money'] }}</td>
                                                <td>{{ $list['ymoney'] }}</td>
                                                <td>{{$list['gmoney']}}</td>
                                                <td>{{$list['datetime']}}</td>
                                                <td>{{$list['tongdao']}}</td>
                                                <td>{{$list['contentstr']}}</td>

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
            function register_check(){

            }
        </script>

@endsection

