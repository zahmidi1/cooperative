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

    <li><a href="/client" class="ai-icon " aria-expanded="false">
            <i class="flaticon-044-menu"></i>
            <span class="nav-text">Client</span>
        </a>
    </li>
    <li class="mm-active"><a href="{{ route('milk_reception') }}" class="ai-icon mm-active" aria-expanded="false">
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
    <form action="{{ route('invoice') }}" method="post">
        @csrf
        <div class="row">
            <input type="hidden" name="user" value="{{ Auth::user()->id }}">
            <div class="col-6 mb-3">
                <label for="name" class="form-label">DATE DE DEBU</label>
                <input type="date" id="debu" name="debu" class="form-control">

                <span class="text-danger">
                    @error('debu')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-6 mb-3">
                <label for="cin" class="form-label">DATE DE FIN</label>
                <input type="date" id="fin" name="fin" class="form-control">
                <span class="text-danger">
                    @error('fin')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="col-6 mb-3">
                <label for="cin" class="form-label">PRIX DE LAIT</label>
                <input type="number" step="0.01" id="prix" name="prix" class="form-control" value="3.80">

                <span class="text-danger">
                    @error('prix')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <input type="hidden" id="id_cli" name="id_cli" class="form-control" value="">

            <div class="col-6 mb-3">

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"> create facture </button>
                </div>
            </div>

        </div>
    </form>

    <table id="example5" class="display" style="min-width: 845px; min-height: 50%;">
        <thead>
            <tr>
                <th>
                    <div class="form-check custom-checkbox ms-2">
                        <input type="checkbox" class="form-check-input" id="checkAll" required="">
                        <label class="form-check-label" for="checkAll"></label>
                    </div>
                </th>
                <th>CONTRÔLEUR</th>
                <th> N client</th>
                <th> nome </th>
                <th>period</th>
                <th>quantity</th>
                <th>density</th>
                <th>heat</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($milk_receptions as $reception)
                <tr>

                    <td>
                        <div class="form-check custom-checkbox ms-2">
                            <input type="checkbox" class="form-check-input" id="{{ $reception->id }}" required="">
                            <label class="form-check-label" for="{{ $reception->id }}"></label>
                        </div>
                    </td>
                    <td>{{ $reception->nameUSE }}</td>
                    <td>00{{ $reception->id }}</td>
                    @php $id_cli= $reception->id @endphp
                    <td>{{ $reception->nameCLI }}</td>
                    <td>{{ $reception->period }}</td>
                    <td>{{ $reception->quantity }}L</td>
                    <td>{{ $reception->density }}</td>
                    <td>{{ $reception->heat }}Cº</td>
                    <td>{{ $reception->created_at }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

@section('secript')
    <script>
        var id_cli = "{{ $id_cli }}"
        $(document).ready(function() {
            $('#id_cli').val(id_cli);
        });
    </script>
@endsection
