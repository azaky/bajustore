@extends('admin-layout')

@section('content')
<!-- Nav -->
	<nav id="nav">
		<a href="#me" class="icon fa-sign-in active"><span>Login</span></a>
	</nav>

<!-- Main -->
	<div id="main">
		
		<!-- Me -->
			<article id="sign-in" class="panel">
				<header>
					<h1>BajuStore</h1>
					<p>Halaman Masuk</p>
				</header>
                <form action="admin" method="post">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div>
						<div class="row">
							<div class="4u">
								<input type="text" name="email" placeholder="Email" />
							</div>
						</div>
                        <div class="row">
							<div class="4u">
								<input type="password" name="password" placeholder="Kata Sandi" />
							</div>
						</div>
                        <div class="row">
							<div class="4u">
                                <input type="submit" value="Masuk"/>
							</div>
						</div>
					</div>
				</form>
			</article>

	</div>
@endsection