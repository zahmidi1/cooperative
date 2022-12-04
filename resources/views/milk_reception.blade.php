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
                <th>period</th>
                <th>quantity</th>
                <th>density</th>
                <th>heat</th>
                <th>date</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($milk_reception as $reception)
                <tr>

                    <td>
                        <div class="form-check custom-checkbox ms-2">
                            <input type="checkbox" class="form-check-input" id="{{ $reception->id }}" required="">
                            <label class="form-check-label" for="{{ $reception->id }}"></label>
                        </div>
                    </td>

                    <td>{{ $reception->id_user }}</td>
                    <td>00{{ $reception->id_client }}</td>
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
@endsection
