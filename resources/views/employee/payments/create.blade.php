@extends('layouts.app')
@section('content')
    <div class="panel-heading">
    	Registrar Abono a Contrato - {{ $contract->name_of_holder }}
    </div><!-- /. panel-heading --> 
    <div class="panel-body">
        <div class="col-md-8 col-md-offset-2">
             @include('layouts.partials.errors')
            <form method="POST" action="{{ route('employee.payments.store', 'contract_id='. $contract->id) }}" accept-charset="UTF-8" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-4 control-label">
                        Titular del contrato
                    </label>
                    <div class="col-md-6">
                        <label class="control-label">
                            {{ $contract->name_of_holder }}
                        </label>
                    </div>
                </div><!-- /. form-group -->
                <div class="form-group {{ $errors->has('date_of_payment') ? ' has-error' : '' }}">
                    <label for="date_of_payment" class="col-md-4 control-label">
                        Fecha del abono
                    </label>
                    <div class="col-md-6">
                        <input class="form-control" name="date_of_payment" type="date" value="{{ old('date_of_payment', $date) }}" id="date_of_payment">
                    </div>
                </div><!-- /. form-group -->
                <div class="form-group {{ $errors->has('value_of_payment') ? ' has-error' : '' }}">
                    <label for="value_of_payment" class="col-md-4 control-label">
                        Valor a abonar
                    </label>
                    <div class="col-md-6">
                        <input class="form-control"  name="value_of_payment" type="number" id="value_of_payment" value="{{ old('value_of_payment') }}">
                    </div>
                </div><!-- /. form-group -->
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                         <input class="btn btn-default" type="submit" value="Registrar">
                    </div>
                </div><!-- /. form-group -->
            </form>
        </div>
    </div>
@endsection