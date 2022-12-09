@extends('layouts.app')


@section('namePage')
    receptions de lait
@endsection


@section('nav')
    <li><a href="/dashboard" class="ai-icon" aria-expanded="false">
            <i class="flaticon-025-dashboard"></i>
            <span class="nav-text">Dashboard</span>
        </a>
    </li>

    <li class="mm-active"><a href="/client" class="ai-icon mm-active" aria-expanded="false">
            <i class="flaticon-044-menu"></i>
            <span class="nav-text">Client</span>
        </a>
    </li>
    <li><a href="{{ route('milk_reception') }}" class="ai-icon" aria-expanded="false">
            <i class="flaticon-017-clipboard"></i>
            <span class="nav-text">receptions de lait </span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
            <i class="flaticon-022-copy"></i>
            <span class="nav-text">factur</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
            <i class="flaticon-022-copy"></i>
            <span class="nav-text">Salarié</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
            <i class="flaticon-013-checkmark"></i>
            <span class="nav-text">Partenaire</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
            <i class="fa fa-user"></i>
            <span class="nav-text">Administration</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
            <i class="fa fa-paper-plane"></i>
            <span class="nav-text">Email</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
            <i class="fa fa-desktop" aria-hidden="true"></i>
            <span class="nav-text">Site Web</span>
        </a>
    </li>
@endsection




@section('content')
    <!-- row -->

    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="card mt-3">
                <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-end">
                        <strong>Status:</strong> </span> </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="mt-4 col-8">
                            <h6>From:</h6>
                            <div> <strong>Annassim al akhedar</strong> </div>
                            <div>coopérative laitière</div>
                            <div>assilah a had gharbia, maroc</div>
                            <div>Email: info@anassimalakhar.com</div>
                            <div>Phone: +212 618181155</div>
                        </div>
                        <div class="mt-4 col-4" id="">

                            <h6>â:</h6>
                            <div>N client : <span>00{{ $id_client }}</span></div>
                            <div>nome et prenome : <strong id="nameCLI"></strong> </div>
                            <div>CIN : <span id="cin"></span></div>
                            <div>address : <span id="adress"></span></div>
                            <div>Phone :<span id="telefone"></span> </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>date</th>
                                    <th>period</th>
                                    <th>quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{ $nameCLI = 0, $adress = 0, $telefone = 0, $quantity = 0 }}
                                @foreach ($milk_reception as $reception)
                                    <tr>

                                        <td>{{ $reception->created_at }}</td>
                                        <td>{{ $reception->period }}</td>
                                        <td>{{ $reception->quantity }} L</td>



                                        @php  $nameCLI = $reception->nameCLI @endphp
                                        @php $cin = $reception->cin @endphp
                                        @php $adress = $reception->adress @endphp
                                        @php $telefone = $reception->telefone @endphp
                                        @php  $quantity += $reception->quantity @endphp
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">
                            <div class="col-12">
                                <h6> N client: 00{{ $id_client }}</h6>
                                <h6></h6>
                                <h6> cache de coperative </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-5 ms-auto">
                            <div class="table-responsive">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Totale lait</strong></td>
                                            <td class="right">{{ $quantity }}</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>prix de lait :</strong></td>
                                            <td class="right">{{ $prix }}DH</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>{{ $quantity }}x{{ $prix }}</strong><br>
                                                <strong>{{ $quantity * $prix }} DH</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <form action="{{ route('enregistrer') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <input type="hidden" id="id_client" name="id_client" class="form-control"
                                value="{{ $id_client }}">
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                            <input type="hidden" id="debu" name="debu" class="form-control"
                                value="{{ $debu }}">
                            <input type="hidden" id="fin" name="fin" class="form-control"
                                value="{{ $fin }}">
                            <input type="hidden" id="prix" name="prix" class="form-control"
                                value="{{ $prix }}">
                            <input type="hidden" id="qantiter" name="qantiter" class="form-control"
                                value="{{ $quantity }}">
                            <input type="hidden" id="total" name="total" class="form-control"
                                value="{{ $quantity * $prix }}">
                            <div class="col-6 mb-3">
                                <label for="name" class="form-label">DATE DE PAYMENT</label>
                                <input type="date" id="date_payment" name="date_payment" class="form-control">
                                <span class="text-danger">
                                    @error('date_payment')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"> enregistrer la facture </button>
                                    <a type="button" class="btn btn-secondary" href="/client">annullé</a>
                                </div>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('secript')
    <!-- Form Steps -->
    <script src="vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>



    <script>
        var nameCLI = "{{ $nameCLI }}"

        var cin = "{{ $cin }}"
        var adress = "{{ $adress }}"
        var adress = "{{ $telefone }}"
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();

            $("#nameCLI").append(nameCLI);
            $("#cin").append(cin);
            $("#adress").append(adress);
            $("#telefone").append(telefone);

        });
    </script>
@endsection
