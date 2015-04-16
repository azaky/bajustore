@extends('admin-layout')

@section('content')
<!-- Nav -->
	<nav id="nav">
		<a href="#promo" class="icon fa-desktop active"><span>Promo</span></a>
		<a href="#product" class="icon fa-list"><span>Produk</span></a>
	</nav>

<!-- Main -->
	<div id="main">
		
		<!-- Me -->
			<article id="promo" class="panel">
				<header>
					<h2>Daftar Promo<a href="add-promo" class="icon fa-plus"><span></span></a></h2>
				</header>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Promo</th>
                            <th>Deskripsi</th>
                            <th>Akhir Berlaku</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promos as $promo)
                        <tr>
                            <td>{{ $promo->name }}</td>
                            <td>{{ $promo->description }}</td>
                            <td>{{ $promo->valid_until }}</td>
                            <td>
                                <a href="edit-promo/{{ $promo->id }}"><span class="fa fa-edit"></span></a>
                                <a href="delete-promo/{{ $promo->id }}"><span class="fa fa-remove"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</article>

		<!-- Work --> 
			<article id="product" class="panel">
				<header>
					<h2>Daftar Produk Barang<a href="add-item" class="icon fa-plus"><span></span></a></h2>
				</header>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="edit-item/{{ $product->id }}"><span class="fa fa-edit"></span></a>
                                <a href="delete-item/{{ $product->id }}"><span class="fa fa-remove"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</article>

	</div>
@endsection