<x-layout title="Plenus | Quem Somos">

    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    @endpush

    <div class="home-section">
        <div class="row" id="general-content">
            <div class="container-fluid" id="img-fundo-top">
                <div id="bottom-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-1"></div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="card" id="card">
                                <div class="card-body">
                                    <h5 class="card-title">PLENUS GESTÃO DE TALENTOS</h5>
                                    <p class="card-text">Constituída em 17 de maio de 2020, com o propósito de
                                        prestar serviço diferenciado, tem como foco atender as empresas com agilidade,
                                        desenvolvendo e qualificando o mercado de trabalho, através da contratação de
                                        profissionas efetivos, treinamento e consultoria em Recursos Humanos.</p>
                                    <div class="row">
                                        <div class="col-lg-9 col-md-1 col-sm-1">
                                        </div>
                                        <div class="col-lg-3 col-md-11 col-sm-11">
                                            <button type="submit" class="btn btn-custom-card">
                                                <span class="btn-icon-card"><i class="fa fa-plus"></i></span>
                                                Saiba mais
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2"></div>
                </div>
            </div>

            <div class="container-fluid" id="content-bottom-bar">
                <div class="row">
                    <div class="col-2 img-arrow-bottom"></div>
                    <div class="col-10 background-content-bottom">
                        <p>Clique aqui e cadastre seu currículo</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



</x-layout>
