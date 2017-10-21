@extends('manage.layouts.app')

@section('title', '主页')

@section('style')
    <!--dashboard calendar-->
    <link href="{{ asset('/static/adminex/css/clndr.css') }}" rel="stylesheet">
    @parent
@endsection

@section('breadcrumb')

@endsection

@section('body')
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    最新订单
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-up"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body" style="display: none;">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>用户</th>
                                <th>商品</th>
                                <th>地址</th>
                                <th>电话</th>
                                <th>价格</th>
                                <th>寄送方式</th>
                                <th>运送编号</th>
                                <th>订单状态</th>
                                <th>更新时间</th>
                                <th>创建时间</th>
                            </tr>
                            </thead>

                            <tbody id="target">
                            @foreach($orders as $list)
                                <tr>
                                    <td>{{ $list['id'] }}</td>
                                    <td>{{ $list->user->name }}</td>
                                    <td>
                                        @foreach($list->orderDetail as $list_detail)
                                            {{ $list_detail->commodity->name }} <br>
                                        @endforeach
                                    </td>
                                    <td>{{ $list['address'] }}</td>
                                    <td>{{ $list['phone'] }}</td>
                                    <td>￥{{ $list['price'] }}</td>
                                    <td>{{ config('site.order_type')[$list['type']] }}</td>
                                    <td>{{ $list['tracking'] }}</td>
                                    <td style="color: red">
                                        {{ config('site.order_status')[$list['status']] }}
                                    </td>
                                    <td>{{ $list['updated_at'] }}</td>
                                    <td>{{ $list['created_at'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    最新会员
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-up"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body" style="display: none;">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>姓名</th>
                                <th>email</th>
                                <th>注册时间</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($lists as $list)
                                    <tr>
                                        <td>{{ $list['id'] }}</td>
                                        <td>{{ $list['name'] }}</td>
                                        <td>{{ $list['email'] }}</td>
                                        <td>{{ $list['created_at'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('script')
    @parent
    <!--Calendar-->
    <script src="{{ asset('/static/adminex/js/calendar/clndr.js') }}"></script>
    <script src="{{ asset('/static/adminex/js/calendar/evnt.calendar.init.js') }}"></script>
    <script src="{{ asset('/static/adminex/js/calendar/moment-2.2.1.js') }}"></script>
    <script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js') }}"></script>

@endsection
