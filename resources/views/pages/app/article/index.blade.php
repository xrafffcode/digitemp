<x-layouts.app title="Artikel Terbaru">
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url({{ asset('app/images/IMG-20240222-WA0036.jpg') }});">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Artikel Terbaru</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            @foreach (range(1, 8) as $item)
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <div class="card card-product">
                        <img src="{{ asset('app/images/IMG-20240222-WA0037.jpg') }}" alt="Card 1"
                            class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">
                                Mahasiswa ITTP Ciptakan Website DIGITEMP untuk Promosikan Desa
                            </h6>
                            <p class="card-text product-price">
                                <small class="text-muted
                            ">Diposting 2 hari yang
                                    lalu</small>
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
