@extends('admin-layout')

@section('content')
<!-- Nav -->
	<nav id="nav">
		<a href="#promo" class="icon fa-plus active"><span>Produk</span></a>
	</nav>

<!-- Main -->
	<div id="main">
        <article id="promo" class="panel">
            <header>
                <h2>Perbaharui Promo</h2>
            </header>
            <form action="../edit-promo/{{ $promo->id }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="4u">
                        {{ $errors->first("image") }}
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="row">
                    <div class="6u">
                        <input type="text" name="name" placeholder="Nama" value="{{ $promo->name }}"/>
                    </div>
                    <div class="6u">
                        <input type="date" name="valid_until" placeholder="Akhir Tanggal Promo"  value="{{ $promo->valid_until }}">
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <textarea name="description" placeholder="Deskripsi">{{ $promo->description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Pembaharui">
                    </div>
                </div>
            </form>
        </article>
	</div>
@endsection