@extends('layouts.fullWidth')

@section('content')
	<div class="col-md-12">
		<div class="page-header">
			<h3>
				{{ $title }}
			</h3>
		</div>
		@include('includes.alert')
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Area</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($areas as $area)
					<tr>

						<td>{{ $area->area_name }}</td>
						
						<td>
							<a href="{{ URL::route('area.edit',$area->id); }}" class='btn btn-success btn-sm'>
					        	Edit
							</a>
						</td>
	        			<td>
							<a href="{{ URL::route('area.delete',$area->id); }}" class='btn btn-danger btn-sm'>
					        	Delete
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<div class="text-center">{{ $areas->links() }}</div>
	</div>




@stop