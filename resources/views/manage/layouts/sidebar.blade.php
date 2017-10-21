<!--sidebar nav start-->
<h3 style="text-align: center;color: #ffc427;">后台管理</h3>
<ul class="nav nav-pills nav-stacked custom-nav">

    <li class="menu-list active nav-active" id="nav_0"><a href=""><i class="fa fa-folder-open"></i> <span>分类管理</span></a>
        <ul class="sub-menu-list">
            <li id="nav_0_1"><a href=" {{ route('category_list') }} ">分类管理</a></li>
            <li id="nav_0_2"><a href=" {{ route('category_add') }} ">添加分类</a></li>
            <li id="nav_0_3"><a href="#">商品属性</a></li>
        </ul>
    </li>

    <li class="menu-list active nav-active" id="nav_1"><a href=""><i class="fa fa-shopping-cart"></i> <span>商品管理</span></a>
        <ul class="sub-menu-list">
            <li id="nav_1_1"><a href="{{ route('commodity_list') }}">商品管理</a></li>
            <li id="nav_1_2"><a href="{{ route('commodity_add') }}">添加商品</a></li>
        </ul>
    </li>

    <li class="menu-list active nav-active" id="nav_2"><a href=""><i class="fa fa-user"></i> <span>会员管理</span></a>
        <ul class="sub-menu-list">
            <li id="nav_2_1"><a href="{{ route('user_list') }}">会员管理</a></li>
        </ul>
    </li>

    <li class="menu-list active nav-active" id="nav_3"><a href=""><i class="fa fa-truck"></i> <span>订单管理</span></a>
        <ul class="sub-menu-list">
            <li id="nav_3_1"><a href="{{ route('order_list') }}">订单管理</a></li>
        </ul>
    </li>
</ul>
<!--sidebar nav end-->