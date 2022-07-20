@extends('front.layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="div">
                <img src="{{ asset('uploads/'. $artikel->gambar_artikel) }}" class="img-fluid">
            </div>
            <div class="detail-content mt-2 p-4">
                <div class="detail-badge">
                    <a href="" class="badge badge-warning">{{ $artikel->kategori->nama_kategori }}</a><br>

                </div>
                <h2>{{ $artikel->judul }}</h2>
                <div class="detail-body">
                    <p>
                        {!! $artikel->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-4 ">
        <div class="detail-sidebar-iklan">
            <h4>{{ $iklanA->judul }}</h4>
            <hr>
            <a href="">
                <img src="{{ asset('uploads/' . $iklanA->gambar_iklan) }}" width="250">
            </a>
        </div>
        <div class="detail-sidebar-kategori">
            <h4 class="mt-4"></h4>
            <hr>
            @foreach ($category as $rowfarrel)
            <div class="sidebar-kategori d-flex flex-wrap">
                <a href="" style="text-decoration: none;">
                    <p>{{ $rowfarrel->nama_kategori }}</p>
                </a>
                <p class="ml-auto text-right"><span class="badge badge-dark">{{ $rowfarrel->artikel->count() }}</span></p>
            </div>
            @endforeach
            <!-- <div class="sidebar-kategori d-flex flex-wrap">
                <a href="" style="text-decoration:none;">
                    <p>Nama Kategori</p>
                </a>
                <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
            </div>
        </div>
        <div class="sidebar-kategori d-flex flex-wrap">
            <a href="" style="text-decoration:none;">
                <p>Nama Kategori</p>
            </a>
            <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
        </div> -->

        <div class="detail-sidebar-artikel">
            <h4 class="mt-4">Artikel Terbaru</h4>
            <hr>
            @foreach ($postinganTerbaru as $rowfarrel)
            <div class="media mt-3">
                <img src="{{ asset('uploads/' . $rowfarrel->gambar_artikel) }}" width="70px" class="mr-3" alt="...">
                <div class="media-body">
                    <h6 class="mt-0">{{ $rowfarrel->judul }}</h6>
                </div>
            </div>
            </div>
            @endforeach
            

        </div>
    </div>
</div>

</div>

</div>
@endsection