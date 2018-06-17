@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="dashboard">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif 
                    
                    <p class="card-text">
                        Overzicht van deze maand.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    naam
                                </th>
                                <th>
                                    Bedrag
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($incomes)
                                @foreach($incomes as $in)
                                    <tr>
                                        <td>
                                            {{ $in->id }}
                                        </td>
                                        <td>
                                            {{ $in->source }}
                                        </td>
                                        <td>
                                            <span class="count_plus text-success">
                                                &euro; {{ $in->amount }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3">Er zijn nog geen inkomsten deze maand</td>
                                </tr>
                            @endif
                            @if($expenses)
                                @foreach($expenses as $ex)
                                    <tr>
                                        <td>
                                            {{ $ex->id }}
                                        </td>
                                        <td>
                                            {{ $ex->source }}
                                        </td>
                                        <td>
                                            <span class="count_min text-danger">
                                                &euro; {{ $ex->amount }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Er zijn nog geen uitgaven deze maand</td>
                                    </tr>
                            @endif
                            <tfoot>
                                <tr>
                                    <th colspan="2">
                                        Totaal:
                                    </th>
                                    <td>
                                        <span data-total="{{ $total }}">
                                            &euro; {{$total}}
                                        </span>
                                    </td>
                                </tr>
                            </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="app"><change-income></change-income></div>
@endsection