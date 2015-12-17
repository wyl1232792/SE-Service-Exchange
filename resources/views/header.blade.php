<!---nav bar-->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" >
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">secondEx</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">secondEx</a>
			</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/">首页</a></li>
				<li><a href="#">闲逛</a></li>
				<li><a href="#">商户服务</a></li>
			</ul>
			<!-- User Info-->
      	@if (!Auth::check())
			 <ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="用户名">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="密码">
						</div>
						<button class="btn btn-default" type="submit">登录</button>
						<a class="btn btn-default" href="/signup">注册</a>
					</form>
					<li><a href="/jaccount">jaccount登陆</a></li>
			 </ul>
      	@else
			 <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">你好，{{ Auth::User()->getDisplayName() }}
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/home">个人设置</a></li>
						<li><a href="#">历史纪录</a></li>
						<li><a href="#">收藏</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="/logout">登出</a></li>
					</ul>
				</li>

			 </ul>
      	@endif
		</div><!-- /.navbar-collapse -->
	 </div><!-- /.container-fluid -->
	</nav>