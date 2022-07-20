@extends('layouts.default')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			
		</div>
	</div>
</div>
<div class="page-inner mt--5">

	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Artikel</div>
                        <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-sm ml-auto"><i class="fas fa-plus">Tambah Artikel</i></a>
					</div>
				</div>
				<div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session('success') }}
                    </div>
                    @endif
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                             
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($artikel as $rowfarrel)
                            <tr>
                                <td>{{ $rowfarrel->id }}</td>
                                <td>{{ $rowfarrel->judul }}</td>
                                <td>{{ $rowfarrel->slug }}</td>
                                <td>{{ $rowfarrel->kategori->nama_kategori }}</td>
                                
                                <td><img src="{{ asset('uploads/' . $rowfarrel->gambar_artikel) }}" width="250"></td>
                                <td>
                                    <a href="{{ route('artikel.edit', $rowfarrel->id) }}" class="btn btn-warning btn-sm"> <i class="fa fa-pen"></i></a>

                                    <form action="{{ route('artikel.destroy', $rowfarrel->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method ('delete')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>                                       
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
