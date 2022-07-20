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
                        <div class="card-title">Data Iklan</div>
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
                                    <th>Judul Iklan</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($iklan as $rowfarrel)
                                <tr>
                                    <td>{{ $rowfarrel->id }}</td>
                                    <td>{{ $rowfarrel->judul }}</td>
                                    <td>{{ $rowfarrel->link }}</td>
                                    <td>
                                        @if ($rowfarrel->status =='1')
                                        active
                                        @else
                                        Draft
                                        @endif
                                    </td>
                                    <td>
                                    <img src="{{ asset('uploads/' . $rowfarrel->gambar_iklan) }}" width="200">
                                    </td>
                                    <td>
                                        <a href="{{ route('iklan.edit', $rowfarrel->id) }}" 
                                            class="btn btn-warning btn-sm"> <i class="fa fa-pen"></i></a>
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