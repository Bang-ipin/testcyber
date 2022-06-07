@extends('layouts.admin')

@section('title')
	<title> Order  </title>
@endsection
@section('section')
<div class="row">
	<div class="col-md-12">
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>
					<span class="caption-subject bold uppercase">Order</span>
				</div>
			</div>
			
			<div class="portlet-body">
				<form method="GET" class="form-horizontal form-bordered form-label-stripped" action="{{ url('order')}}">
					<div class="form-body">
						<div class="form-group">
							<div class="col-md-5">
								<label class="col-md-3 control-label">Filter : </label>
								<div class="col-md-9">
									<input class="form-control" type="text" id="keyword" name="keyword" placeholder="Keyword">
								</div>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-sm  green-haze btn-circle"></i>Search</button>
							</div>
						</div>
					</div>
				</form>
				<div class="table-container">
					<table  class="table table-striped table-bordered table-hover">
						<thead>
							<tr role="row" class="heading">
								<th width="5%">
										No
								</th>
								<th width="15%">
										Invoice
								</th>
								<th width="10%">
										Customer
								</th>
								<th width="10%">
										Agent
								</th>
								<th width="15%">
										Order Time
								</th>
								<th width="15%">
										Delivery Date
								</th>
								<th width="10%">
										Total Payment
								</th>
								<th width="10%">
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						@if($order->count() > 0)
							@foreach($order as $item)
								
							<tr>
								<td>
									{{ $loop->iteration}}
								</td>
								<td>
									{{ $item->id}}
								</td>
								<td>
									{{ $item->name}}
								</td>
								<td>
									{{ $item->agent_name}}
								</td>
								<td>
									{{ $item->order_time}}
								</td>
								<td>
									{{ $item->delivery_date}}
								</td>
								<td>
									{{ $item->payment_total}}
								</td>
								<td>
									<a class="btn btn-warning btn-sm" type="button" data-toggle="tooltip"  title="Detail"  href="{{ url('order/'.$item->id.'/detail') }}"><i class='fa fa-pencil'></i> </a>
								</td>
							</tr>
							@endforeach
						@else
							<tr>
								<td colspan="8" align="center">Data Not Found</td>
							</tr>
						@endif
						</tbody>
					</table>
					{{ $order->links() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css" rel="stylesheet" >
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js" type="text/javascript"></script>
@stop

@section('script')
<script>
	
</script>
@stop