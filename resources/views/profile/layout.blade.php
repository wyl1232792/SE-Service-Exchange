@extends('general')

@section('body')
	<div id="panel">
		<div class="container">
			<div class="row">
				<div class="col-md-3 xs-hidden">
					<div class="panel panel-default">
						<div class="panel-body">
							{{ Auth::User()->getDisplayName() }}

						</div>
					</div>
					<div class="list-group">
						<a href="{{ url('home') }}" class="list-group-item {{ (\Request::is('/home')) ? 'active' : '' }}">个人面板</a>
						<a class="list-group-item">修改密码</a>
						<a href="{{ url('profile/listGoods') }}" class="list-group-item">申请挂牌</a>
						<a class="list-group-item">个人商品</a>
						<a class="list-group-item">交易记录</a>
						<a class="list-group-item">收藏关注</a>
					</div>
				</div>
				<div class="col-md-9 col-xs-12">
					@yield('main')
				</div>
			</div>
		</div>
	</div>
@endsection