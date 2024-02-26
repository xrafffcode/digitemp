<x-layouts.app title="Forum Disuksi">
    <section class="page-header">
        <div class="page-header__top">
            <div class="page-header-bg" style="background-image: url({{ asset('app/images/IMG-20240222-WA0036.jpg') }});">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="container">
                <div class="page-header__top-inner">
                    <h2>Forum Disuksi</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <button class="btn btn-primary mb-4">Buat Diskusi</button>

        <div class="d-flex flex-column gap-4">
            @foreach (range(1, 8) as $item)
                <div class="card card-discussion">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('app/images/tempe.jpg') }}" alt="User" class="rounded-circle"
                                    width="50" height="50">
                                <div>
                                    <h6 class="card-title
                                ">Nama User</h6>
                                    <p class="card-text
                                ">Diposting 2 hari yang
                                        lalu</p>
                                </div>
                            </div>
                        </div>
                        <h6 class="card-title">Bagaimana cara membuat tempe yang enak?</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos
                            voluptates
                            quod
                            quibusdam
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>
