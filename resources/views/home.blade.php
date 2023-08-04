@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perfiles') }}</div>
                @php
                    $identificacion=Auth::user()->id;
                @endphp
                <div class="float-right">
                    <a class="btn btn-sm btn-primary " href="{{ route('inicio',Auth::user()->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ingresar') }}
                </a>
                  </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
