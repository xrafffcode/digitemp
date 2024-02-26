<x-layouts.app title="Home" description="Home page">
    @push('plugin-styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @endpush

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="Slide 1" class="img-fluid">

                <div class="content">
                    <h1>
                        Digital Desa Tempe
                    </h1>
                    <p>
                        DIGITEMP adalah singkatan dari "Digital Desa Tempe", sebuah aplikasi berbasis website yang
                        dikembangkan khusus untuk mendukung pengelolaan dan promosi Desa Wisata Tempe. Aplikasi ini
                        dirancang dengan tujuan untuk memperluas jangkauan pemasaran, mempermudah akses informasi, serta
                        meningkatkan interaksi antara pengelola destinasi, masyarakat setempat, dan wisatawan.

                    </p>
                </div>

                <div class="overlay"></div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="Slide 1" class="img-fluid">

                <div class="content">
                    <h1>
                        Digital Desa Tempe
                    </h1>
                    <p>
                        DIGITEMP adalah singkatan dari "Digital Desa Tempe", sebuah aplikasi berbasis website yang
                        dikembangkan khusus untuk mendukung pengelolaan dan promosi Desa Wisata Tempe. Aplikasi ini
                        dirancang dengan tujuan untuk memperluas jangkauan pemasaran, mempermudah akses informasi, serta
                        meningkatkan interaksi antara pengelola destinasi, masyarakat setempat, dan wisatawan.

                    </p>
                </div>

                <div class="overlay"></div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="Slide 1" class="img-fluid">

                <div class="content">
                    <h1>
                        Digital Desa Tempe
                    </h1>
                    <p>
                        DIGITEMP adalah singkatan dari "Digital Desa Tempe", sebuah aplikasi berbasis website yang
                        dikembangkan khusus untuk mendukung pengelolaan dan promosi Desa Wisata Tempe. Aplikasi ini
                        dirancang dengan tujuan untuk memperluas jangkauan pemasaran, mempermudah akses informasi, serta
                        meningkatkan interaksi antara pengelola destinasi, masyarakat setempat, dan wisatawan.

                    </p>
                </div>

                <div class="overlay"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5">Destinasi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-destination">
                    <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="Card 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Destinasi A</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor, libero at luctus
                            fermentum, nunc libero lacinia libero, nec tincidunt libero nunc id libero.
                        </p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-destination">
                    <img src="{{ asset('app/images/IMG-20240222-WA0039.jpg') }}" alt="Card 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Destinasi B</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor,
                            libero at luctus fermentum, nunc libero lacinia libero, nec tincidunt libero nunc id
                            libero.</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card card-destination">
                    <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="Card 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Destinasi C</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor,
                            libero at luctus fermentum, nunc libero lacinia libero, nec tincidunt libero nunc id
                            libero.</p>
                        <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('plugin-scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endpush

    @push('custom-scripts')
        <script>
            var swiper = new Swiper('.swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    @endpush
</x-layouts.app>
