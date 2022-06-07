@extends('layouts.admin')

@section('title')
	<title> Detail Order </title>
@endsection	
@section('section')
<div class="row">
	<div class="col-md-12">
		<div class="portlet box yellow-saffron">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>
					<span class="caption-subject bold uppercase">Detail Order</span>
				</div>
			</div>
				
			<div class="portlet-body form">
				<form class="form-horizontal form-bordered form-label-stripped">
					<div class="form-body ">
                        <h1> Detail Order </h1>
                        <hr/>
						<div class="form-group">
							<label class="col-md-2 control-label">Order ID</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->id }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Invoice ID </label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->invoice_id }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Agent Name</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->agent_name }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Order Time</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->order_time }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Delivery Date</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->delivery_date }}" readonly>
							</div>
						</div>
					</div>
					<div class="form-body ">
                        <h1> Detail Customer </h1>
                        <hr/>
						<div class="form-group">
							<label class="col-md-2 control-label">Customer Name</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->name }}" readonly>
							</div>
						</div>
					</div>
					<div class="form-body ">
                        <h1> Detail Product </h1>
                        <hr/>
						<div class="form-group">
							<label class="col-md-2 control-label">Product Name</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->product_name }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Qty</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->qty }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Total Payment</label>
							<div class="col-md-10">
								<input class="form-control" type="text" value="{{ $detailorder->payment_total }}" readonly>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')
@stop

@section('js')
@stop

@section('script')
@stop


