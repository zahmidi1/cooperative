@extends('layouts.app')


@section('namePage')
    receptions de lait
@endsection


@section('nav')
    <li><a href="/" class="ai-icon" aria-expanded="false">
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
                        <strong>Status:</strong> Pending</span> </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="mt-4 col-6">
                            <h6>From:</h6>
                            <div> <strong>Annassim al akhedar</strong> </div>
                            <div>coopérative laitière</div>
                            <div>assilah a had gharbia, maroc</div>
                            <div>Email: info@anassimalakhar.com</div>
                            <div>Phone: +212 618181155</div>
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
                                {{ $total = 0, $id_client = 0, $date_py = 0 }}
                                @foreach ($milk_reception as $reception)
                                    <tr>

                                        <td>

                                            @php $date_py= $reception->created_at @endphp
                                            {{ $reception->created_at }}
                                        </td>

                                        @php
                                            $id_client = $reception->id_client;
                                        @endphp

                                        <td>{{ $reception->period }}</td>

                                        <td>{{ $reception->quantity }}L</td>


                                        @php
                                            $total = $total + $reception->quantity;
                                        @endphp

                                    </tr>
                                @endforeach
                                {{-- @foreach ($jours as $jour)
                                                <tr>
                                                    <td>{{ $jour->created_at }}</td>
                            <td>{{ $total = $jour->lait_matin }}</td>
                            <td>{{ $jour->lait_soir }}</td>
                            <td>{{ $jour->lait_total }}</td>
                            <td>{{ $jour->alf_kg }}</td>
                            </tr>
                            @endforeach --}}




                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">


                            <div class="col-12">

                                <h6>To:</h6> N client : 00{{ $id_client }}
                                <h6>{{ $date_py }}</h6>
                                <h6> cache de coperative </h6>
                            </div>



                        </div>
                        <div class="col-lg-4 col-sm-5 ms-auto">
                            <div class="table-responsive">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Totale lait</strong></td>
                                            <td class="right">{{ $total }}</td>
                                        </tr>

                                        <tr>
                                            <td class="left"><strong>prix de lait)</strong></td>
                                            <td class="right"><input type="number" name="prix_lait" id="prix_lait"
                                                    value="{{ $prix = 3.4 }}">DH</td>
                                        </tr>

                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right"><strong>{{ $total }}x{{ $prix }}</strong><br>
                                                <strong>{{ $total * $prix }} DH</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
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
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
    </script>
@endsection
