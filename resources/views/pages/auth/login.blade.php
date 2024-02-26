<x-layouts.auth title="Masuk">
    <div class="page-content d-flex align-items-center justify-content-center">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-6 col-xl-4 mx-auto">
                <div class="card">
                    <div class="row flex-column-reverse flex-md-row">

                        <div class="col-md-12 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">
                                    Digitemp
                                </a>
                                <h5 class="text-muted fw-normal mb-4">Silahkan Login Dengan Akun Anda</h5>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <x-forms.input name="email" type="email" />
                                    <x-forms.input name="password" type="password" label="Password" />


                                    <x-ui.base-button class="w-100 mb-3" type="submit" color="primary">
                                        Masuk
                                    </x-ui.base-button>

                                    <a href="">
                                        <x-ui.base-button class="w-100" type="button" color="secondary" outline>
                                            Daftar
                                        </x-ui.base-button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>
