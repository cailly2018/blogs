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
                            <li class="breadcrumb-item"><a href="#">用户管理</a>
                            </li>
                            <li class="breadcrumb-item"><a href="basic-table.html">订单列表</a>
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
                        </div>
                        <div class="card-header">
                            <div class="card-block">

                                <table class="table table-striped table-bordered table-responsive" id="example-2">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First</th>
                                        <th>Last</th>
                                        <th>Nickname</th>
                                        <th class="tabledit-toolbar-column"></th></tr>
                                    </thead>
                                    <tbody>
                                    <tr class="danger">
                                        <th scope="row">1</th>
                                        <td class="tabledit-view-mode"><span class="tabledit-span" style="">Mark</span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Mark" style="display: none;" disabled=""></td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span" style="">Otto</span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="Otto" style="display: none;" disabled=""></td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span" style="">@mdo</span><select class="tabledit-input form-control input-sm" name="Nickname" style="display: none;" disabled=""><option value="1" selected="selected">@mdo</option><option value="2">@fat</option><option value="3">@twitter</option></select></td>
                                        <td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="float: none; display: none;">Save</button>
                                                <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                                <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                            </div></td></tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Jacob</span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Jacob" style="display: none;" disabled=""></td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Thorntonkk</span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="Thorntonkk" style="display: none;" disabled=""></td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span><select class="tabledit-input form-control input-sm" name="Nickname" disabled="" style="display:none;"><option value="1">@mdo</option><option value="2">@fat</option><option value="3">@twitter</option></select></td>
                                        <td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                                <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                                <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                            </div></td></tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Larry</span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Larry" style="display: none;" disabled=""></td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">the Bird</span><input class="tabledit-input form-control input-sm" type="text" name="Last Name" value="the Bird" style="display: none;" disabled=""></td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span><select class="tabledit-input form-control input-sm" name="Nickname" disabled="" style="display:none;"><option value="1">@mdo</option><option value="2">@fat</option><option value="3">@twitter</option></select></td>

                                        <td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                <div class="btn-group btn-group-sm" style="float: none;"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button><button type="button" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></div>
                                                <button type="button" class="tabledit-save-button btn btn-sm btn-success" style="display: none; float: none;">Save</button>
                                                <button type="button" class="tabledit-confirm-button btn btn-sm btn-danger" style="display: none; float: none;">Confirm</button>
                                                <button type="button" class="tabledit-restore-button btn btn-sm btn-warning" style="display: none; float: none;">Restore</button>
                                            </div></td></tr>

                                    </tbody>
                                </table>

                                <div class="table-bordered p-10 m-t-15">
                                    <div class="sub-title">Top Right badge
                                        <a href="" class="f-right" data-toggle="modal" data-target="#top-right-Modal">
                                            <i class="icofont icofont-code-alt"></i>
                                        </a>
                                    </div>

                                    <div class="modal fade modal-flex" id="top-right-Modal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <h5 class="modal-title">Code Explanation for Top Right Badge </h5>
                                                </div>
                                                <!-- end of modal-header -->
                                                <div class="modal-body">
                                                    <div><div id="highlighter_681389" class="syntaxhighlighter  html"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">/* Use For Badge Top Right */</code></div><div class="line number2 index1 alt1">&nbsp;</div><div class="line number3 index2 alt2"><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"label-icon"</code><code class="html plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">i</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"icofont icofont-envelope"</code><code class="html plain">&gt;&lt;/</code><code class="html keyword">i</code><code class="html plain">&gt;</code></div><div class="line number5 index4 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"badge bg-primary badge-top-right"</code><code class="html plain">&gt;9&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div></div></td></tr></tbody></table></div></div>
                                                </div>
                                                <!-- end of modal-body -->
                                            </div>
                                            <!-- end of modal-content -->
                                        </div>
                                        <!-- end of modal-dialog -->
                                    </div>
                                    <!-- end of modal -->

                                    <p>
                                        Use class <code>badge-top-right</code>
                                    </p>
                                    <div class="label-icon">
                                        <i class="icofont icofont-envelope"></i>
                                        <label class="badge bg-primary badge-top-right">9</label>
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

