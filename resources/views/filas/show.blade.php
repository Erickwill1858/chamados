@extends('master')

@section('styles')
@parent
<style>
    .disable-links {
        pointer-events: none;
    }

</style>
@endsection

@section('content')
@parent

@include('common.list-table-modal')
<div class="row">
    <div class="col-md-12">

        <div class="card card-outline card-primary">
            <div class="card-header">
                <div class="card-title form-inline my-0">
                    <a href="filas">Filas</a> <i class="fas fa-angle-right mx-2"></i> ({{ $fila->setor->sigla }}) {{ $fila->nome }} | &nbsp;
                    @include('filas.partials.enable-disable-btn')
                    @if($fila->users->isEmpty())
                    <span class="badge badge-danger ml-3">Cadastre pelo menos uma pessoa nessa fila</span>
                    @endif
                </div>
            </div>

            <div class="card-body {{ $fila->estado == 'Desativada' ? 'disable-links': '' }}">
                <div class="row">
                    <div class="col-md-7">
                        @include('filas.partials.principal-card') {{-- Principal --}}
                        <br>
                        @include('filas.partials.config-card') {{-- Config --}}
                        <br>
                        @include('filas.partials.estados-card') {{-- Estados --}}
                        <br>
                        @include('filas.partials.formulario-card') {{-- Formulario --}}
                    </div>
                    <div class="col-md-5">
                        @include('filas.partials.pessoas-card') {{-- Secundário --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
