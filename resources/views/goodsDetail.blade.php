@extends('general')

@section('body')
<div class="wrap">
<div class="row">
    <div class="col-xs-8">
        <div ng-controller="ActMainCtrl" class="act-part ng-scope">
            <div class="act_tags">
                <div class="act_tag_type">
                    活动类别:<a class="tq-redder ng-binding" href="http://www.tongqu.me/index.php/act/type?type=2">
                         讲座 </a>&nbsp;&nbsp;
                    <!-- ngIf: act.creatorid == user.uid -->
                    &nbsp;
                    <!-- ngIf: act.creatorid == user.uid -->
                    &nbsp;
                    <a class="tq-cursor" ng-click="pop_qr_code()"><i class="fa fa-th"></i>&nbsp;&nbsp;生成二维码</a>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div class="act-title ng-binding" ng-bind="act.name">学在交大——名师面对面</div>

            <div class="act-poster" id="act-brief-con">
                <img ng-click="zoomIn()" poster="http://www.tongqu.me/upload/acts/20151129/origin_07520156635132936631cc7859bf8623.jpg" class="center-block ng-isolate-scope tq-cursor-zoom" max-width="200" default-height="200" type="2" is-zoom-in="true" src="http://www.tongqu.me/upload/acts/20151129/origin_07520156635132936631cc7859bf8623.jpg" style="height: 200px; width: auto;">
            </div>
            
            <!--TODO:xss-->
            <div class="act_desc ng-binding" ng-bind-html="act.body | to_trusted"><p><span style="font-family: 宋体;">你眼中的名师，不仅仅出现在讲台上——名师面对面</span></p><p><span style="font-family: Calibri;">&nbsp;</span></p><p><span style="font-family: 宋体;">“世上最远的距离，是你在台上谈笑风生，我却只能在台下仰望……”</span></p><p><span style="font-family: Calibri;">&nbsp;</span></p><p><span style="font-family: 宋体;">巍巍交大，名师荟萃。</span></p><p><span style="font-family: 宋体;">我交可谓汇聚着无数名师的智慧光环、学术辉煌。</span></p><p><span style="font-family: 宋体;">不管是院士、教授、博士、讲师，无一不在台上神采奕奕，令人为之神往。</span></p><p><span style="font-family: Calibri;">&nbsp;</span></p><p><span style="font-family: 宋体;">我们有重量级的中科院院士又帅气酷炫的杰哥，</span><span style="font-family: 宋体;">也有为我们上开学第一课谈笑风生调侃复旦同济的姜斯宪书记</span></p><p><span style="font-family: 宋体;"><br></span></p><p><span style="font-family: 宋体;">然而，</span></p><p><span style="font-family: Calibri;">&nbsp;</span></p><p><span style="font-family: 宋体;">学在交大的你，是不是常常只能在台下远远看着讲师们神采飞扬地授课？</span></p><p><span style="font-family: 宋体;">学在交大的你，是不是只能看到学术界大法们治学严谨的一面？</span></p><p><span style="font-family: 宋体;">学在交大的你，是不是对名师背后的故事有一千零一个问号？</span></p><p><span style="font-family: Calibri;">&nbsp;</span></p><p><span style="font-family: 宋体;">但这统统都不是问题！</span></p><p><span style="font-family: Calibri;">&nbsp;</span></p><p><span style="font-family: Calibri;"></span><span style="font-family: 宋体;">12月2日晚，我们将为你带来交大的两位重磅名师嘉宾，他们是</span></p><p><span style="font-family: 宋体;"><br></span></p><p><span style="font-family: 宋体;"></span><span style="font-family: 宋体; font-size: 15px;">担任《形势与政策》主讲教师长达十二年之久的汪雨申老师：</span></p><p><span style="font-family: 宋体; font-size: 15px;"></span><span style="font-family: 宋体; font-size: 15px;">小编：告诉你一个秘密，他可是创造了把一门水课上得一点也不水的奇迹哦~每次选《形势与政策》他的课程名额都被一抢而空！</span></p><p><span style="font-family: 宋体; font-size: 15px;"></span><span style="font-family: 宋体; font-size: 16px;"><br></span></p><p><span style="font-family: 宋体; font-size: 16px;">上海交通大学SMC-晨星优秀青年教师获得者、科学史博士——黄庆桥</span><span style="font-family: 宋体; font-size: 15px;">老师：</span></p><p><span style="font-family: 宋体; font-size: 15px;"></span><span style="font-family: 宋体;">小编：他的学生偷偷告诉我，这是一个很逗逼的老师！是不是看照片就能隐隐感受到这份气息呢！</span></p><p><span style="font-family: 宋体;"><br></span></p><p><span style="font-family: 宋体;"></span><span style="font-family: Calibri;">他们会给我们带来学术成果背后的秘密，还有更多不为人知的趣事，更可以针对他们的私密问题进行询问、互动哟！</span></p><p><span style="font-family: Calibri;"><br></span></p><p><span style="font-family: Calibri;"></span><span style="font-family: 宋体; font-size: 16px;">小编：我们还将进行现场抽奖，到场的观众都将有机会获得我们的神秘礼品哦</span><span style="font-size: 16px;"><span style="font-family: Calibri;">~</span></span></p><p><span style="font-size: 16px;"><span style="font-family: Calibri;"><br></span></span></p><p><span style="font-size: 16px;"><span style="font-family: Calibri;">是不是心动了呢~</span></span></p><p><span style="font-size: 16px;"><span style="font-family: Calibri;"><br></span></span></p><p><span style="font-size: 16px;"><span style="font-family: Calibri;"></span></span><span style="font-family: 宋体; font-size: 20px;">1</span><span style="font-family: 宋体; font-size: 20px;">2</span><span style="font-family: 宋体; font-size: 20px;">月2日19:00逸夫楼210，骚年，约吗？</span></p><p></p></div>
            <!-- ngIf: act.attachfiles.length -->
            <div class="clearfix"></div>
        </div>

        <div ng-controller="ActCommentCtrl" class="comment-part ng-scope">
            <div class="comment-title pull-left">评论</div>
            <div class="comment-title-right pull-left">写下你对活动的看法或者精彩回忆~</div>
            <div style="clear:both"></div>
            <div class="col-xs-12">
                <div class="alert alert-success" ng-show="alertshow">
                    <button type="button" ng-click="alertshow = false" class="close" aria-hidden="true">×
                    </button>
                    <p id="comment-status-info"><span ng-bind="response" class="ng-binding">请登录后评论~</span></p>
                </div>
            </div>
            <div id="exist-comment">
                <!-- ngRepeat: comment in comment_data.data -->
            </div>
            <div style="clear:both"></div>
            <div class="load-more-comment">
                <!-- ngIf: comments.length>load_number -->
            </div>
            <div style="clear:both"></div>
            <!-- ngIf: commentshow -->
        </div>
    </div>
    <div class="col-xs-4">
        <div class="row">
            <div class="col-xs-12">
            <div class="act-brief-part ng-scope" ng-controller="ActMainCtrl">
                <div class="bdsharebuttonbox bdshare-button-style1-24" data-tag="share_2" data-bd-bind="1448795402069">
                    <a class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                    <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <!--<a class="bds_qzone" data-cmd="qzone" href="#"></a>
                    <a class="bds_count" data-cmd="count"></a>-->
                </div>
                <div class="act-brief">
                    <div class="ng-binding">
                        时间：2015-12-02 19:00&nbsp;&nbsp;至&nbsp;&nbsp;2015-12-02 22:00
                    </div>
                    <div ng-hide="act.sign_require=='0'" class="ng-binding">
                        报名：2015-11-29 15:13&nbsp;&nbsp;至&nbsp;&nbsp;2015-12-02 18:59
                    </div>
                    <div>
                        地点：<span ng-bind="act.location" class="ng-binding">上海交通大学逸夫楼210</span>
                    </div>
                    <div class="ng-binding">
                        人数：2/60
                    </div>
                    <div>
                        浏览：<span ng-bind="act.view_count||0" class="ng-binding">95</span>
                    </div>
                    <div>
                        发起：<!-- ngIf: act.source==null||act.source=='' --><!-- ngIf: act.source!==null --><span ng-if="act.source!==null" class="ng-binding ng-scope">上海交通大学学术中心</span><!-- end ngIf: act.source!==null -->
                    </div>
                    <!-- ngIf: act.team_id !='0' -->
                    <div class="row like-row">
                        <div class="col-xs-5 col-xs-offset-2 ng-scope" tooltip="">
                            <a class="tq-redder ng-binding" ng-click="toggleLike()">
                                <i class="fa fa-2x fa-fw fa-heart-o" ng-class="{'fa-spinner fa-spin': like_proceeding, 'fa-heart-o': !act.is_liked, 'fa-heart': act.is_liked}"></i>
                                0<span ng-show="act.like_count &lt; 1000">喜欢</span>
                            </a>
                        </div>
                        <div class="col-xs-5 ng-scope" tooltip="可以在个人中心查看哦！">
                            <a class="text-primary" ng-click="toggleFavorite()">
                                <i class="fa fa-2x fa-fw fa-star-o" ng-class="{'fa-spinner fa-spin': favorite_proceeding, 'fa-star-o': !act.is_favorite, 'fa-star': act.is_favorite}"></i>
                                <span ng-show="act.is_favorite" class="ng-hide">已收藏</span>
                                <span ng-show="!act.is_favorite">收藏</span>
                            </a>
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
                            <a class="tq-white">我要去</a>
                        </div><!-- end ngIf: act.can_sign_up && !act.is_attend && !act.is_login && !act.member_full -->
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xs-12">
                <div ng-controller="ActAttendCtrl" class="act-member-part ng-scope">
                    <div class="act-member-title">他们也会去
                        (<span ng-bind="member_count" class="ng-binding">2</span>)
                        <!-- ngIf: member_count>5 -->
                    </div>
                    <div class="act-members">
                        <div class="member-con">
                            <!-- ngIf: member_count==0 -->
                            <!-- ngRepeat: member in firstFive --><div class="act-member ng-scope" ng-repeat="member in firstFive">
                                <!-- ngIf: member.photo --><div class="act-member-photo ng-scope" ng-if="member.photo">
                                    <img onerror="tq.image.avatar(this)" ng-src="/avatar/small/41.png" src="/avatar/small/41.png">
                                </div><!-- end ngIf: member.photo -->
                                <!-- ngIf: !member.photo -->
                                <div class="act-member-name">
                                    <span ng-bind="member.user_name" class="ng-binding">caozhong1234</span>
                                </div>
                            </div><!-- end ngRepeat: member in firstFive --><div class="act-member ng-scope" ng-repeat="member in firstFive">
                                <!-- ngIf: member.photo --><div class="act-member-photo ng-scope" ng-if="member.photo">
                                    <img onerror="tq.image.avatar(this)" ng-src="/avatar/small/51.png" src="/avatar/small/51.png">
                                </div><!-- end ngIf: member.photo -->
                                <!-- ngIf: !member.photo -->
                                <div class="act-member-name">
                                    <span ng-bind="member.user_name" class="ng-binding">lrfsjtu912536035</span>
                                </div>
                            </div><!-- end ngRepeat: member in firstFive -->
                        </div>
                    </div>
                    <!--<tq-member-slide tq-members="members"></tq-member-slide>-->
                </div>
            </div>
            <div class="col-xs-12">
                <div class="act-recommend-part type-panel-con ng-scope" id="type-recmd" ng-controller="ActRecommendCtrl" ng-hide="acts.length == 0">
                    <div class="act-recommend-title">相关活动</div>
                    <div class="act-recommend-body">
                        <!-- ngRepeat: act in acts -->
                        <tq-one-act ng-repeat="act in acts" tq-act="act" class="ng-scope ng-isolate-scope">
      <div class="one-related-act">
            <div class="poster-con" ng-click="showDetail(act.actid)">
                <img ng-click="zoomIn()" poster="http://www.tongqu.me/upload/acts/20151123/normal_ff764ef38af65370b8799e963a1d82b4.jpg" height="95" width="100" type="2" class="ng-isolate-scope" src="http://www.tongqu.me/upload/acts/20151123/normal_ff764ef38af65370b8799e963a1d82b4.jpg" style="width: 100px; height: auto;">
            </div>
            <div class="desc-con">
                <div class="name ng-binding" ng-click="showDetail(act.actid)" title="梦想导师" ng-class="{small:act.name.length&gt;25,ssmall:act.name.length&gt;30}">
                    梦想导师
                </div>
                <div class="time">
                    <span class="num ng-binding" ng-bind="getDiffTimeNum(act.end_time)">397</span>
                    <span ng-bind="getDiffTimeUnit(act.end_time)" class="ng-binding">天</span>后结束
                </div>
                <div>
                    <span ng-click="showTeam(act.team_id)" ng-class="{'tq-redder':act.team_id &amp;&amp; act.team_id!=0, 'tq-cursor':act.team_id &amp;&amp; act.team_id!=0}" class="ng-binding tq-redder tq-cursor">
                        美丽中国
                    </span>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
</tq-one-act><!-- end ngRepeat: act in acts --><tq-one-act ng-repeat="act in acts" tq-act="act" class="ng-scope ng-isolate-scope">
      <div class="one-related-act">
            <div class="poster-con" ng-click="showDetail(act.actid)">
                <img ng-click="zoomIn()" poster="http://www.tongqu.me/upload/acts/20151128/normal_e359d59c30175612454296ed80934c2b.jpg" height="95" width="100" type="2" class="ng-isolate-scope" src="http://www.tongqu.me/upload/acts/20151128/normal_e359d59c30175612454296ed80934c2b.jpg" style="height: 95px; width: auto;">
            </div>
            <div class="desc-con">
                <div class="name ng-binding small" ng-click="showDetail(act.actid)" title="我们为什么热爱摄影——知名摄影师七七小菇凉分享独家摄影秘籍" ng-class="{small:act.name.length&gt;25,ssmall:act.name.length&gt;30}">
                    我们为什么热爱摄影——知名摄影师七七小菇凉分享独家摄影秘籍
                </div>
                <div class="time">
                    <span class="num ng-binding" ng-bind="getDiffTimeNum(act.end_time)">8</span>
                    <span ng-bind="getDiffTimeUnit(act.end_time)" class="ng-binding">天</span>后结束
                </div>
                <div>
                    <span ng-click="showTeam(act.team_id)" ng-class="{'tq-redder':act.team_id &amp;&amp; act.team_id!=0, 'tq-cursor':act.team_id &amp;&amp; act.team_id!=0}" class="ng-binding tq-redder tq-cursor">
                        上海交通大学校友会思源全媒体中心
                    </span>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
</tq-one-act><!-- end ngRepeat: act in acts --><tq-one-act ng-repeat="act in acts" tq-act="act" class="ng-scope ng-isolate-scope">
      <div class="one-related-act">
            <div class="poster-con" ng-click="showDetail(act.actid)">
                <img ng-click="zoomIn()" poster="http://www.tongqu.me/upload/acts/20151128/normal_a95d0e1d3ca475864547a436c4ade1f2.jpg" height="95" width="100" type="2" class="ng-isolate-scope" src="http://www.tongqu.me/upload/acts/20151128/normal_a95d0e1d3ca475864547a436c4ade1f2.jpg" style="height: 95px; width: auto;">
            </div>
            <div class="desc-con">
                <div class="name ng-binding small" ng-click="showDetail(act.actid)" title="【职业讲座】羡慕马云？李彦宏？教你如何打开互联网行业的大门" ng-class="{small:act.name.length&gt;25,ssmall:act.name.length&gt;30}">
                    【职业讲座】羡慕马云？李彦宏？教你如何打开互联网行业的大门
                </div>
                <div class="time">
                    <span class="num ng-binding" ng-bind="getDiffTimeNum(act.end_time)">5</span>
                    <span ng-bind="getDiffTimeUnit(act.end_time)" class="ng-binding">天</span>后结束
                </div>
                <div>
                    <span ng-click="showTeam(act.team_id)" ng-class="{'tq-redder':act.team_id &amp;&amp; act.team_id!=0, 'tq-cursor':act.team_id &amp;&amp; act.team_id!=0}" class="ng-binding">
                        BeBeyond
                    </span>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
</tq-one-act><!-- end ngRepeat: act in acts --><tq-one-act ng-repeat="act in acts" tq-act="act" class="ng-scope ng-isolate-scope">
      <div class="one-related-act">
            <div class="poster-con" ng-click="showDetail(act.actid)">
                <img ng-click="zoomIn()" poster="http://www.tongqu.me/upload/acts/20151124/normal_f22d2d8a52f88ad86deb2e38e5b82ce2.jpg" height="95" width="100" type="2" class="ng-isolate-scope" src="http://www.tongqu.me/upload/acts/20151124/normal_f22d2d8a52f88ad86deb2e38e5b82ce2.jpg" style="height: 95px; width: auto;">
            </div>
            <div class="desc-con">
                <div class="name ng-binding" ng-click="showDetail(act.actid)" title="【公开课】 简历为何石沉大海？面试为何屡屡悲剧？" ng-class="{small:act.name.length&gt;25,ssmall:act.name.length&gt;30}">
                    【公开课】 简历为何石沉大海？面试为何屡屡悲剧？
                </div>
                <div class="time">
                    <span class="num ng-binding" ng-bind="getDiffTimeNum(act.end_time)">12</span>
                    <span ng-bind="getDiffTimeUnit(act.end_time)" class="ng-binding">天</span>后结束
                </div>
                <div>
                    <span ng-click="showTeam(act.team_id)" ng-class="{'tq-redder':act.team_id &amp;&amp; act.team_id!=0, 'tq-cursor':act.team_id &amp;&amp; act.team_id!=0}" class="ng-binding">
                        Bebeyond
                    </span>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
</tq-one-act><!-- end ngRepeat: act in acts -->
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection