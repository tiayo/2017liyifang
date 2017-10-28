@extends('home.layouts.app')

@section('title', '首页')

@section('body')
    <div class="index clearfix">
        <div class="search">
            <a href="{{ route('home.category_list') }}" class="fenlei"></a>
            <a href="{{ route('home.search') }}" class="search-input"><input type="text" placeholder="搜索礼品"/></a>
            <a href="{{ route('home.car') }}" class="shopping-cartt"><em>{{ $car_count }}</em></a>
        </div>
        <div class="swiper-container index-bigpic clearfix">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('/style/home/picture/bigpic1.jpg') }}"/></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('/style/home/picture/bigpic2.jpg') }}"/></a>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="{{ asset('/style/home/picture/bigpic3.jpg') }}"/></a>
                </div>
            </div>
            <!-- 分页器 -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="nav-top clearfix">
            <a href="{{ route('home.category_group', ['id' => 1]) }}">精选产品</a>
            <a href="{{ route('home.category_group', ['id' => 2]) }}">新品上架</a>
            <a href="{{ route('home.category_group', ['id' => 3]) }}">热卖宝贝</a>
            <a href="{{ route('home.category_group', ['id' => 4]) }}">折扣专区</a>
        </div>
        <div class="goods">
            <b class="hot-exchange clearfix" style="width: 100%;padding-left: 1em;">今日推荐</b>
            <ul class="goods-con clearfix">
                @foreach($recommend_today as $commodity)
                    <li>
                        <a href="{{ route('home.commodity_view', ['id' => $commodity['id']]) }}">
                            <h3>
                                <img src="{{ $commodity['image_0'] }}" height="750" width="750"/>
                            </h3>
                            <h2>{{ $commodity['name'] }}</h2>
                            <strong class="price clearfix">
                                <h4>{{ $commodity['price'] }}</h4>
                                <!-- <h5><em>100</em>.00</h5> -->
                            </strong>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="copyright">
            <h1>© {{ config('site.title') }} 版权所有</h1>
            <h2>李艺芳提供技术支持</h2>
        </div>
        <div class="nav clearfix">
            @include('home.layouts.sidebar')
        </div>
    </div>
    <em class="return-top">顶部</em>
    <script type="text/javascript">
        var mySwiper = new Swiper ('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            autoplay: 3000,
            autoplayDisableOnInteraction : false,
            // 分页器
            pagination: '.swiper-pagination',
        });
        var mySwiperNews = new Swiper ('.swiper-containerNews', {
            direction: 'vertical',
            loop: true,
            autoplay: 3000,
            autoplayDisableOnInteraction : false,
        });
    </script>
@endsection