<x-layouts.app title="Produk Kami">
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url({{ asset('app/images/IMG-20240222-WA0036.jpg') }});">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Produk Kami</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            @foreach (range(1, 8) as $item)
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <div class="card card-product">
                        <img src="{{ asset('app/images/tempe.jpg') }}" alt="Card 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                        ">Tempe</h5>
                            <p class="card-text product-price">
                                Rp. 10.000
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
