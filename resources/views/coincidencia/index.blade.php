@extends('layouts.app')

@section('template_title')
    Coincidencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Coincidencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('coincidencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Usuarioid1</th>
										<th>Usuarioid2</th>
										<th>Match1</th>
										<th>Match2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coincidencias as $coincidencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $coincidencia->usuarioId1 }}</td>
											<td>{{ $coincidencia->usuarioId2 }}</td>
											<td>{{ $coincidencia->match1 }}</td>
											<td>{{ $coincidencia->match2 }}</td>

                                            <td>
                                                <form action="{{ route('coincidencias.destroy',$coincidencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('coincidencias.show',$coincidencia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('coincidencias.edit',$coincidencia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $coincidencias->links() !!}
            </div>
        </div>
    </div>
@endsection
