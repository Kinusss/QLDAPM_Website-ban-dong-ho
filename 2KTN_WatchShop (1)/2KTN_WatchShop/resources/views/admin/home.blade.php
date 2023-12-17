@extends('layouts.app')

@section('content')
	<div class="content">
		<div class="container">
			<div class="page-title">
				<h3>Trang chủ</h3>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<h5 class="card-header">Trang chủ</h5>
								<div class="card-body">
									@if (session('status'))
										<div class="alert alert-success" role="alert">
											{{ session('status') }}
										</div>
									@endif
									Trang chủ quản trị.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
