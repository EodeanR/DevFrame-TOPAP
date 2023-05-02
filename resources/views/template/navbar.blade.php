<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" alt="TOPAP-LOGO" height="44px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link active" href="{{ url('/')}}" aria-current="page">Home</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/games')}}">Games</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pulsa')}}">Pulsa</a></li>
                            <li><a class="dropdown-item" href="{{ url('/voucher')}}">Voucher</a></li>
                            <li><a class="dropdown-item" href="{{ url('/joki')}}">Joki</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="{{ url('/pricelist')}}">Daftar harga</a>
                    <a class="nav-link" href="{{ url('/about-us')}}">Tentang kami</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container my-4">