@extends('layouts.app')

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
                                <a href="{{ route('fotos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Id</th>
										<th>Foto</th>
										<th>Usuario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    @endphp
                                    @foreach ($fotos as $foto)
                                    @php
                                        $loginId = Session::get('loginId');
                                        $idFoto = $foto->usuario_id;
                                    @endphp
                                    @if($idFoto==$loginId)
                                        <tr>
                                            <td>{{ $foto->id }}</td>
                                            <td>
                                                <img src="{{ asset($foto->foto)}}" width="50" height="50" class="img img-responsive">
                                            </td>
											<td>{{ $foto->usuario_id }}</td>

                                            <td>
                                                <form action="{{ route('fotos.destroy',$foto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('fotos.show',$foto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fotos.edit',$foto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
                {!! $fotos->links() !!}
            </div>
        </div>
    </div>
@endsection
