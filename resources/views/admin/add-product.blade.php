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
                <h2>Penambahan Produk</h2>
            </header>
            <form action="add-product" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="4u">
                        {{ $errors->first("image") }}
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="row">
                    <div class="4u">
                        {{ $errors->first("name") }}
                        <input type="text" name="name" placeholder="Nama" />
                    </div>
                    <div class="4u">
                        {{ $errors->first("category_id") }}
                        <select name="category_id">
                            <option disabled selected>Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        {{ $errors->first("description") }}
                        <textarea name="description" placeholder="Deskripsi"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Tambah">
                    </div>
                </div>
            </form>
        </article>
	</div>
@endsection