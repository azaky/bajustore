@extends('admin-layout')

@section('content')
<!-- Nav -->
	<nav id="nav">
		<a href="#promo" class="icon fa-desktop active"><span>Promo</span></a>
		<a href="#work" class="icon fa-list"><span>Produk</span></a>
	</nav>

<!-- Main -->
	<div id="main">
		
		<!-- Me -->
			<article id="promo" class="panel">
				<header>
					<h2>Promo</h2>
				</header>
                <form>
                    <div class="row">
                        <div class="6u">
                            <input type="file">
                        </div>
                    </div>
                    <div class="row">
                        <div class="6u">
                            <input type="text" name="name" placeholder="Nama" />
                        </div>
                        <div class="6u">
                            <input type="date" name="valid date" placeholder="Akhir Tanggal Promo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <textarea placeholder="Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <input type="submit" value="Perbaharui">
                        </div>
                    </div>
                </form>
			</article>

		<!-- Work --> 
			<article id="produk" class="panel">
				<header>
					<h2>Daftar Produk Barang</h2>
				</header>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item 1</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>
                                <a href="#promo"><span class="fa fa-edit"></span></a>
                                <a href="#promo"><span class="fa fa-remove"></span></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
			</article>

	</div>
@endsection