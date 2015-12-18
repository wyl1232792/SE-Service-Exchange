@extends('general')

@section('body')
 <div class="Intropage">
     <div class="row">
             <div class=" col-md-2"></div>
             <div class=" col-md-5">
                    <h1>校园物品拍卖系统</h1>
                    <p>这是我们团队制作的一款用于校园拍卖的交易平台网站，在这里你可以拍卖自己不需要的物品或者淘到自己喜爱的物品。</p>
             </div>
             <div class=" col-md-3"></div>
    	     <div class="col-md-2"></div>
    	</div>
 </div>
<nav class="navbar navbar-default " id="navtitle" >
        <div class="container" id="padnavleft">
         <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#">最新物品</a>
         </div> 
         <form class="navbar-form navbar-left" role="search" action="/goods/search">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
                <ul class="nav navbar-nav navbar-right">
                    <li id="padnavright"><a href="#">更多</a></li>
                </ul>
        <div class="container">
</nav>
<!--goodscolumn-->
<div class="goodscolumn" id="goods-container">
    <div class="row">
    <!--此处用于接受输出商品-->
        @foreach ($goods as $good)
            <a class=" col-md-3" >
                <div class="poster">
                    <img src="{{ $good->image_url }}">
                </div>
                <div class="bottom">
                    <p>{{ $good->name }}</p>
                </div>
            </a> 
        @endforeach
<!--         <div class=" col-md-3" >
                    <div class="poster">
                        <img    src="img/6.gif">
                    </div>
                    <div class="bottom">
                    <p>物品简介</p>
                    </div>
        </div> 
        <div class=" col-md-3" >
                    <div class="poster">
                        <img    src="img/1.jpg">
                    </div>
                    <div class="bottom">
                    <p>物品简介</p>
                    </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/4.jpg">
                 </div>
                 <div class="bottom">
                     <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/2.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/4.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/1.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/2.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div> 
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>    
        <div class=" col-md-3">
                 <div class="poster">
                     <img    src="img/3.jpg">
                 </div>
                 <div class="bottom">
                 <p>物品简介</p>
                 </div>
        </div>         -->
            <!--end of goodscolumn-->

    </div>	
 <!--end of row-->
                <!--pager -->
                <nav>
    <ul class="pager" id="pagerctl" id="pager">
        <li >
            <a href="#" aria-label="Previous">
                <span aria-hidden="true" >&laquo;</span>
            </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true" >&raquo;</span>
            </a>
        </li>
    </ul>
</nav>                            
</div>
        <!--end of goods-container-->
@endsection