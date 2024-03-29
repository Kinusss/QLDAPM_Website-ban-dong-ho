@extends('layouts.app')

@section('content')
	<div class="content">
		<div class="container">
			<div class="page-title">
				<h3>Bài viết
					<a href="{{ route('admin.baiviet.them') }}" class="btn btn-nm btn-outline-success float-end"><i class="fas fa-plus"></i> Thêm Mới</a>
				</h3>
			</div>
			<div class="box box-primary">
				<div class="box-body">
					<table width="100%" class="table table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>#</th>
								<th>Chủ đề</th>
								<th>Thông tin bài viết</th>
								<th colspan="4" class="text-center">Hành động</th>
							</tr>
						</thead>
						<tbody>
							@foreach($baiviet as $value)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $value->ChuDe->tenchude }}</td>
									<td>
										<span class="d-block fw-bold text-primary"><a href="{{ route('admin.baiviet.sua', ['id' => $value->id]) }}">{{ $value->tieude }}</a></span>
										<span class="d-block small">
											Ngày đăng: <strong>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)->format('d/m/Y H:i:s') }}</strong>
											<br />Người đăng: <strong>{{ $value->NguoiDung->name }}</strong>
											<br />Có <strong>{{ $value->luotxem }}</strong> lượt xem
										</span>
									</td>
									<td class="text-center" title="Trạng thái kiểm duyệt">
										<a href="{{ route('admin.baiviet.kiemduyet', ['id' => $value->id]) }}">
											@if($value->kiemduyet == 1)
												<i class="fas fa-check-circle"></i>
											@else
												<i class="fas fa-times-circle text-danger"></i>
											@endif
										</a>
									</td>
									<td class="text-center" title="Trạng thái hiển thị">
										<a href="{{ route('admin.baiviet.kichhoat', ['id' => $value->id]) }}">
											@if($value->kichhoat == 1)
												<i class="fas fa-eye"></i>
											@else
												<i class="fas fa-eye-slash text-danger"></i>
											@endif
										</a>
									</td>
									<td class="text-center">
										<a href="{{ route('admin.baiviet.sua', ['id' => $value->id]) }}" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
										<a href="{{ route('admin.baiviet.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết &quot;{{ $value->tieude }}&quot; không?');" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection