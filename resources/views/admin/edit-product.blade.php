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
                <h2>Pembaharuan Produk</h2>
            </header>
            <form action="../edit-product/{{ $product->id }}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="name" placeholder="Nama" value="{{ $product->name }}"/>
                    </div>
                    <div class="4u">
                        {{ $errors->first("category_id") }}
                        <select name="category_id">
                            <option disabled>Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        {{ $errors->first("description") }}
                        <textarea name="description" placeholder="Deskripsi">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Perbaharui">
                    </div>
                </div>
            </form>
        </article>
	</div>
@endsection