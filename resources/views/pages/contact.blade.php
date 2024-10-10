<x-layout title="Plenus | Contato">

    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    @endpush

    <div class="home-section">
        <div class="row" id="general-content">
            <div class="container-fluid" id="img-fundo-top">
            <p id="image-title">CONTATE-NOS</p>
                <div id="bottom-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-1"></div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2"></div>
                </div>
            </div>

            <div class="container-fluid" id="content-bottom-bar">
                <div class="row">
                    <div class="col-2 img-arrow-bottom">
                        <p>ENDEREÇO</p>
                    </div>
                    <div class="col-2 img-arrow-bottom">
                        <p>TELEFONE</p>
                    </div>
                    <div class="col-2 img-arrow-bottom">
                        <p>E-MAIL</p>
                    </div>
                    <div class="col-10 background-content-bottom"></div>
                </div>
            </div>

        </div>
    </div>

</x-layout>
