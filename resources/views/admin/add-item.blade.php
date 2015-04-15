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
            <form>
                <div class="row">
                    <div class="4u">
                        <input type="file">
                    </div>
                </div>
                <div class="row">
                    <div class="4u">
                        <input type="text" name="name" placeholder="Nama" />
                    </div>
                    <div class="4u">
                        <select>
                            <option disabled selected>Kategori</option>
                            <option>BMW</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <textarea placeholder="Deskripsi"></textarea>
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