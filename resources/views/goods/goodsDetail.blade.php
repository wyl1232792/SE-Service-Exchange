@extends('general')

@section('body')
<?php
    $status = ['审核中', '通过审核', '已成交'];
?>
<div class="wrap">
<div class="row">
    <div class="col-xs-8">
        <div ng-controller="ActMainCtrl" class="act-part ng-scope">
            <div class="act_tags">
                <div class="act_tag_type">
                    商品类别:<a class="" href="#">
                         {{ $goods->type }} </a>&nbsp;&nbsp;
                    <!-- ngIf: act.creatorid == user.uid -->
                    &nbsp;
                    <!-- ngIf: act.creatorid == user.uid -->
                    &nbsp;
                    <div style="clear:both"></div>
                </div>
            </div>
            <div class="act-title ng-binding" ng-bind="act.name">{{ $goods->name }}</div>

            <div class="act-poster" id="act-brief-con">
                <img class="center-block" max-width="400" default-height="300" type="2" is-zoom-in="true" src="{{ url($goods->image_url) }}" style="height: 400px; width: auto;">
            </div>
            
            <div><p>商品简介</p> <p>{{ $goods->description }}</p> </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="row">
            <div class="col-xs-12">
            <div class="act-brief-part ng-scope" ng-controller="ActMainCtrl">
                <div class="act-brief">
                    <div>
                        建议价格：{{ $goods->price }}
                    </div>
                    <div>
                        状态：{{ $status[$goods->status] }}
                    </div>
                    <div>
                        卖家：<a href="{{ url('profile/'. $goods->user_id) }}">{{ $goods->user()->name }}</a>
                    </div>
                    <div>
                        最新报价：N/A
                    </div>
                    <!-- ngIf: act.team_id !='0' -->
                    <div class="row like-row">
                        <div class="col-xs-5 col-xs-offset-2 ng-scope" tooltip="">
                            <a class="tq-redder ng-binding" ng-click="toggleLike()">
                                <i class="fa fa-2x fa-fw fa-heart-o" ng-class="{'fa-spinner fa-spin': like_proceeding, 'fa-heart-o': !act.is_liked, 'fa-heart': act.is_liked}"></i>
                                {{ $goods->markedCount() }}<span ng-show="act.like_count &lt; 1000">关注</span>
                            </a>
                        </div>
                        <div class="col-xs-5 ng-scope" tooltip="可以在个人中心查看哦！">
                            @if ($goods->isMarked())
                                <a class="text-primary" onclick="$.ajax('{{ url('goods/'. $goods->id. '/unmark') }}')">
                                    <i class="fa fa-2x fa-fw fa-star-o"></i>
                                    <span>已收藏</span>
                                </a>
                            @else
                                <a class="text-primary" onclick="$.ajax('{{ url('goods/'. $goods->id. '/mark') }}')">
                                    <i class="fa fa-2x fa-fw fa-star-o"></i>
                                    <span>收藏</span>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div ng-hide="act.sign_require=='0'" class="btn-container">
                        <!-- ngIf: !act.can_sign_up && !act.sign_not_begin -->

                        <!-- ngIf: !sign.can_sign_up && act.sign_not_begin -->

                        <!-- ngIf: act.can_sign_up && act.is_attend -->
                        <!-- ngIf: act.can_sign_up && !act.is_attend && act.member_full -->
                        <!-- ngIf: act.can_sign_up && !act.is_attend && act.is_login && !need_phone && !act.member_full -->
                        <!-- ngIf: act.can_sign_up && !act.is_attend && act.is_login && need_phone && !act.member_full -->
                        <!-- ngIf: act.can_sign_up && !act.is_attend && !act.is_login && !act.member_full --><div class="btn bg-green ng-scope" ng-if="act.can_sign_up &amp;&amp; !act.is_attend &amp;&amp; !act.is_login &amp;&amp; !act.member_full" ng-click="redirectLogin()">
                            <a class="tq-white">出价</a>
                        </div><!-- end ngIf: act.can_sign_up && !act.is_attend && !act.is_login && !act.member_full -->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection