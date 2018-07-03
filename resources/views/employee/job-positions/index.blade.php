@extends('layouts.app')
@section('content')
  <div class="panel-heading">
    Lista de Puestos
  </div><!-- /. panel-heading --> 
  <div class="panel-body">
      <div class="container-fluid">
        <div class="text-right">
          <a href="{{ route('employee.job-positions.create') }}" 
            title="Registrar puesto" 
            class="btn btn-default">
            Registrar puesto
          </a>
        </div>
      </div>
    <hr>
    <table id="job_position-table" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Titulo</th>
          <th>Creado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($job_positions as $job_position)
        <tr>
          <td>{{ $job_position->name }}</td>
          <td>{{ $job_position->created_at->diffForHumans() }}</td>
          <td>
              <a href="{{ route('employee.job-positions.edit', $job_position) }}" 
                 class="btn btn-xs btn-default">
                <i class="fa fa-pencil"></i>
              </a>
              <form method="POST" 
                    action="{{ route('employee.job-positions.destroy', $job_position) }}" 
                    style="display: inline">

              {{ csrf_field() }} {{ method_field('DELETE') }}

                <button class="btn btn-xs btn-default" 
                        onclick="return confirm('Estás seguro de querer eliminar esta puesto?')">
                  <i class="fa fa-times"></i>
                </button>
              </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div><!-- /. panel-body --> 
@endsection
