@extends('public.top')
@extends('public.footer')
@section('data')
@section('datas')
	
	<!-- wishlist -->
	<div class="wishlist section">
		<div class="container">
			<div class="pages-head">
				<h3>WISHLIST</h3>
			</div>
			<div class="content">
				<div class="cart-1">
					<div class="row">
						<div class="col s5">
							<h5>Image</h5>
						</div>
						<div class="col s7">
							<img src="{{$data->goods_pic}}" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Name</h5>
						</div>
						<div class="col s7">
							<h5><a href="">{{$data->goods_name}}</a></h5>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Stock Status</h5>
						</div>
						
						<input type="hidden" id="show" value="{{$data->show}}">
							<input type="button" class="less" value="-">
						<input type="text" style=width:50px;height:27px; value="1" id="buy_num">
							<input type="button" class="add" value="+">
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Price</h5>
						</div>
						<div class="col s7">
							<h5>{{$data->goods_price}}</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s5">
							<h5>Action</h5>
						</div>
						<div class="col s7">
							<h5><i class="fa fa-trash"></i></h5>
						</div>
					</div>
					<div class="row">
						<div class="col 12">
							<button class="btn button-default">SEND TO CART</button>
						</div>
					</div>
				</div>
				<div class="divider"></div>
	
			</div>
		</div>
	</div>
	<!-- end wishlist -->

	@endsection('data')
	@endsection('datas')

	<!-- loader -->
	<div id="fakeLoader"></div>
	<!-- end loader -->
	<script>
		$(function(){
			//点击加号
			$('.add').click(function(){
				var show=$("#show").val();
				var buy_num=parseInt($('#buy_num').val());
				if(buy_num>=show){
					$(this).prop('disabled',true);
				}else{
					buy_num+=1;
					$('#buy_num').val(buy_num);
					$('.less').prop('disabled',false);
				}
			})
			//点击减号
		    $('.less').click(function(){
				var buy_num=parseInt($('#buy_num').val());
				if(buy_num<=1){
					$(this).prop('disabled',true);
				}else{
					buy_num-=1;
					$('#buy_num').val(buy_num);
					$('.add').prop('disabled',false);
				}
				//newprice();
	     })
		//      $('#buy_num').blur(function(){
		// 			var _this=$(this);
		// 			var buy_num=_this.val();
		// 			var reg=/^\d+$/;
		// 			//为空||购买数量<=1||不是数字
		// 			if(buy_num==''||buy_num<=1||!reg.test(buy_num)){
		// 				_this.val(1);
		// 			}else if(parseInt(buy_num)>=parseInt(show)){
		// 				_this.val(show);
		// 			}else{
		// 				buy_num=parseInt(buy_num);
		// 				_this.val(buy_num);
		// 			}
		// 	})
		});
	</script>

	<!-- end footer -->
	
