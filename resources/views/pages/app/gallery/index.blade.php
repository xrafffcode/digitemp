<x-layouts.app title="Galeri Kami">

    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('app/plugins/lightbox/css/lightbox.css') }}">
    @endpush

    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url({{ asset('app/images/IMG-20240222-WA0036.jpg') }});">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Galeri Kami</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row ">
            <div class="col-md-4 col-sm-6 col-6 mb-3">
                <a href="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" class="d-block" data-lightbox="gambar"
                    data-title="Gambar Pemdes">
                    <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="image" class="img-gallery">
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-3">
                <a href="{{ asset('app/images/IMG-20240222-WA0039.jpg') }}" class="d-block" data-lightbox="gambar"
                    data-title="Gambar Tugu">
                    <img src="{{ asset('app/images/IMG-20240222-WA0039.jpg') }}" alt="image" class="img-gallery">
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-3">
                <a href="{{ asset('app/images/IMG-20240222-WA0037.jpg') }}" class="d-block" data-lightbox="gambar"
                    data-title="Gambar Sawah">
                    <img src="{{ asset('app/images/IMG-20240222-WA0037.jpg') }}" alt="image" class="img-gallery">
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-3">
                <a href="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" class="d-block" data-lightbox="gambar"
                    data-title="Gambar Pemdes">
                    <img src="{{ asset('app/images/IMG-20240222-WA0036.jpg') }}" alt="image" class="img-gallery">
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-3">
                <a href="{{ asset('app/images/IMG-20240222-WA0039.jpg') }}" class="d-block" data-lightbox="gambar"
                    data-title="Gambar Tugu">
                    <img src="{{ asset('app/images/IMG-20240222-WA0039.jpg') }}" alt="image" class="img-gallery">
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-6 mb-3">
                <a href="{{ asset('app/images/IMG-20240222-WA0037.jpg') }}" class="d-block" data-lightbox="gambar"
                    data-title="Gambar Sawah">
                    <img src="{{ asset('app/images/IMG-20240222-WA0037.jpg') }}" alt="image" class="img-gallery">
                </a>
            </div>
        </div>
    </div>

    @push('plugin-scripts')
        <script src="{{ asset('app/plugins/lightbox/js/lightbox-plus-jquery.min.js') }}"></script>

        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true
            })
        </script>
    @endpush
</x-layouts.app>
