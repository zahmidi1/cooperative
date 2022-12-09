@extends('layouts.app')


@section('namePage')
    client
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
    <!-- Button trigger modal -->

    <div class="row">
        <div class="col-sm">
            <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#ajouter_client">
                Ajouter client <i class="fa fa-plus color-info"></i>
            </button>
        </div>
        <div class="col-sm-7">

        </div>
        <div class="col-sm">
            <!-- Button ajouter lait include et modal -->
            @include('include.ajouterLait')
        </div>
    </div>




    <div class="table-responsive">
        <table id="example5" class="display" style="min-width: 845px; min-height: 50%;">
            <thead>
                <tr>
                    <th>
                        <div class="form-check custom-checkbox ms-2">
                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                            <label class="form-check-label" for="checkAll"></label>
                        </div>
                    </th>
                    <th>N client</th>
                    <th>Nom et Prenom</th>
                    <th>CIN</th>
                    <th>Adress</th>
                    <th>telefone</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>

                        <td>
                            <div class="form-check custom-checkbox ms-2">
                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                <label class="form-check-label" for="customCheckBox2"></label>
                            </div>
                        </td>
                        <td>00{{ $client->id }}</td>
                        <td>{{ $client->nameCLI }}</td>
                        <td>{{ $client->cin }}</td>
                        <td>{{ $client->adress }}</td>
                        <td>{{ $client->telefone }}</td>
                        <td>
                            <a href="invoice/{{ $client->id }}&{{ $client->date_pyment }}"
                                class="badge badge-secondary">factur</a>
                            <a href="client/show/{{ $client->id }}" class="badge badge-success">reception de lait</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>




    <!-- Modal -->
    <div class="modal fade" id="ajouter_client" tabindex="-1" aria-labelledby="ajouter_client" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <legend>ajouter une client </legend>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('client_store') }}" method="post">


                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">name et prenom</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="name prénom ">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="cin" class="form-label">CIN</label>
                            <input type="text" id="cin" name="cin" class="form-control"
                                placeholder="ex: KA12345 ">
                            <span class="text-danger">
                                @error('cin')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="adress" class="form-label">Adress</label>
                            <input type="text" id="adress" name="adress" class="form-control"
                                placeholder="entrer l'adress">
                            <span class="text-danger">
                                @error('adress')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">entrer le nemero de telefone</label>
                            <input type="number" id="telefone" name="telefone" class="form-control"
                                placeholder="ex: 0612345678">
                            <span class="text-danger">
                                @error('telefone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annullé</button>
                        <button type="submit" class="btn btn-primary"> Enregistrer </button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection






@section('secript')
    @if (session('status'))
        <script>
            toastr.success("{{ session('status') }}", "Top Right", {
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @endif





    @error('name')
        <script>
            toastr.error("This Is error {{ $message }}", "Top Right", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @enderror
    @error('cin')
        <script>
            toastr.error("This Is error {{ $message }}", "Top Right", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @enderror
    @error('adress')
        <script>
            toastr.error("This Is error {{ $message }}", "Top Right", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @enderror

    @error('telefone')
        <script>
            toastr.error("This Is error {{ $message }}", "Top Right", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @enderror
@endsection
