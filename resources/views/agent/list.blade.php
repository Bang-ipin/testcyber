@extends('layouts.admin')

@section('title')
	<title> Agent  </title>
@endsection
@section('section')
<div class="row">
	<div class="col-md-12">
		<div class="portlet box yellow">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-gift"></i>
					<span class="caption-subject bold uppercase">Agent</span>
				</div>
			</div>
			
			<div class="portlet-body">
				<div class="table-container">
					<table  class="table table-striped table-bordered table-hover">
						<thead>
							<tr role="row" class="heading">
								<th width="5%">
										No
								</th>
								<th width="15%">
										Name
								</th>
								<th width="35%">
										Total Customer
								</th>
							</tr>
						</thead>
						<tbody>
						@if($topagent->count() > 0)
							@foreach($topagent as $item)
							<tr>
								<td>
									{{ $loop->iteration}}
								</td>
								<td>
									{{ $item->store_name}}
								</td>
								<td>
									{{ $item->total}}
								</td>
							</tr>
							@endforeach
						@else
							<tr>
								<td colspan="3" align="center">Data Not Found</td>
							</tr>
						@endif
						</tbody>
					</table>
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