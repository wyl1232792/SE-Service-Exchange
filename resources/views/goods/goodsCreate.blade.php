@extends('profile.layout')

@section('main')

	<h3 style="margin-bottom: 30px; font-size: 56px;">申请挂牌</h3>


	<form class="form-horizontal" action="{{url('goods/list')}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label class="col-sm-2 control-label">物品名称</label>
			<div class="col-md-9">
				<input class="form-control" type="text" name="name">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">类型</label>
			<div class="col-md-9">
				<input class="form-control" type="text" name="type">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">建议价格</label>
			<div class="col-md-9">
				<input class="form-control" type="number" name="price">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">图片</label>
			<div class="col-md-9">
				<input class="form-control" type="file" name="photo">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">商品描述</label>
			<div class="col-md-9">
				<textarea class="form-control" name="description" height="120px"></textarea>
			</div>
		</div>
		<div class="col-sm-offset-3 col-sm-3">
			<button class="btn btn-primary">提交</button>
		</div>
	</form>
@endsection