<nav class="navbar navbar-expand-lg bg-white py-4">
    <div class="container">
        <a class="navbar-brand" href="#">Digitemp</a><button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? ' active' : '' }}" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Destinasi</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('produk') ? ' active' : '' }}"
                        href="{{ route('product.index') }}">Produk Kami</a></li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle {{ request()->is('galeri') ? ' active' : '' }}" href="#"
                        id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Apa itu DIGITEMP</a></li>
                        <li><a class="dropdown-item {{ request()->is('galeri') ? ' active' : '' }}"
                                href="{{ route('gallery.index') }}">Galeri</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link  {{ request()->is('artikel') ? ' active' : '' }}"
                        href="{{ route('article.index') }}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('forum') ? ' active' : '' }}"
                        href="{{ route('forum.index') }}">Forum</a></li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-primary">Masuk</button>
                <button class="btn btn-primary">Daftar</button>
            </div>
        </div>
    </div>
</nav>
