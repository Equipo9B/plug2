@extends('layouts.app4')

@section('template_title')
    Foto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Fotos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fotos.create') }}" class="btn btn-secondary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Foto</th>
										<th>Acción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fotos as $foto)
                                    @php
                                        $loginId = Auth::user()->id;
                                        $idFoto = $foto->usuario_id;
                                    @endphp
                                    @if($idFoto==$loginId)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($foto->foto)}}" width="250" height="250" class="img img-responsive">
                                            </td>
                                            <td>
                                                <form action="{{ route('fotos.destroy',$foto->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
