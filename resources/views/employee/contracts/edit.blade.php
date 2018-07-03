@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Editar Contrato - {{ $contract->name_of_holder }}
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.contracts.update', $contract) }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-group {{ $errors->has('order') ? ' has-error' : '' }}">
                <label for="order" class="col-md-4 control-label">
                    Folio
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" min="0" name="order" type="number" id="order" value="{{ old('order', $contract->order) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('date') ? ' has-error' : '' }}">
                <label for="date" class="col-md-4 control-label">
                    Fecha
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="date" type="date" id="date" value="{{ old('date', $contract->date) }}">
                </div>
            </div><!-- /. form-group -->
           <div class="form-group  {{ $errors->has('name_of_holder') ? ' has-error' : '' }}">
                <label for="name_of_holder" class="col-md-4 control-label">
                    Nombre del titular
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="name_of_holder" type="text" id="name_of_holder" value="{{ old('name_of_holder', $contract->name_of_holder) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('age_of_the_holder') ? ' has-error' : '' }}">
                <label for="age_of_the_holder" class="col-md-4 control-label">
                    Edad del titular
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="age_of_the_holder" type="number" id="age_of_the_holder" value="{{ old('age_of_the_holder', $contract->age_of_the_holder) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="street" class="col-md-4 control-label">
                    Calle
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="street" type="text" id="street" value="{{ old('street', $contract->street) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="street_number" class="col-md-4 control-label">
                    Número
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="street_number" type="number" id="street_number" value="{{ old('street_number', $contract->street_number) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="colony" class="col-md-4 control-label">
                    Colonia
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="colony" type="text" id="colony" value="{{ old('colony', $contract->colony) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="municipality" class="col-md-4 control-label">
                    Municipio
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="municipality" type="text" id="municipality" value="{{ old('municipality', $contract->municipality) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="home_phone" class="col-md-4 control-label">
                    Teléfono de casa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="home_phone" type="text" id="home_phone" value="{{ old('home_phone', $contract->home_phone) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="mobile_phone" class="col-md-4 control-label">
                    Teléfono móvil
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="mobile_phone" type="text" id="mobile_phone" value="{{ old('mobile_phone', $contract->mobile_phone) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="reference" class="col-md-4 control-label">
                    Referencia
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="reference" type="text" id="reference" value="{{ old('reference', $contract->reference) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="relationship_with_your_reference" class="col-md-4 control-label">
                    Parentesco
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="relationship_with_your_reference" type="text" id="relationship_with_your_reference" value="{{ old('relationship_with_your_reference', $contract->relationship_with_your_reference) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="phone_your_reference" class="col-md-4 control-label">
                    Teléfono de referencia
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="phone_your_reference" type="text" id="phone_your_reference" value="{{ old('phone_your_reference', $contract->phone_your_reference) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="company_name" class="col-md-4 control-label">
                    Nombre de empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="company_name" type="text" id="company_name" value="{{ old('company_name', $contract->company_name) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="company_address" class="col-md-4 control-label">
                    Dirección de la empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="company_address" type="text" id="company_address" value="{{ old('company_address', $contract->company_address) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="job_position" class="col-md-4 control-label">
                    Cargo dentro de la compañía
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="job_position" type="text" id="job_position" value="{{ old('job_position', $contract->job_position) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="company_phone" class="col-md-4 control-label">
                    Teléfono de la empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="company_phone" type="text" id="company_phone" value="{{ old('company_phone', $contract->company_phone) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="extension_of_the_company" class="col-md-4 control-label">
                    Extensión de la empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="extension_of_the_company" type="text" id="extension_of_the_company" value="{{ old('extension_of_the_company', $contract->extension_of_the_company) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('hitch') ? ' has-error' : '' }}">
                <label for="hitch" class="col-md-4 control-label">
                    Enganche
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="hitch" type="number" id="hitch" value="{{ old('hitch', $contract->hitch) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('monthly_payments') ? ' has-error' : '' }}">
                <label for="monthly_payments" class="col-md-4 control-label">
                    Mensualidades
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="monthly_payments" type="number" id="monthly_payments" value="{{ old('monthly_payments', $contract->monthly_payments) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('monthly_amount') ? ' has-error' : '' }}">
                <label for="monthly_amount" class="col-md-4 control-label">
                    Importe mensualidades
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="monthly_amount" type="number" id="monthly_amount" value="{{ old('monthly_amount', $contract->monthly_amount) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('balance') ? ' has-error' : '' }}">
                <label for="balance" class="col-md-4 control-label">
                    Saldo
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="balance" type="number" id="balance" value="{{ old('balance', $contract->balance) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group {{ $errors->has('total_cost') ? ' has-error' : '' }}">
                <label for="total_cost" class="col-md-4 control-label">
                    Coste total
                </label>
                <div class="col-md-6">
                    <input class="form-control" required="" name="total_cost" type="number" id="total_cost" value="{{ old('total_cost', $contract->total_cost) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="payment_method" class="col-md-4 control-label">
                    Método de pago
                </label>
                <div class="col-md-6">
                    <select class="form-control" id="payment_method" name="payment_method">
                        <option value="cash" {{ old( 'payment_method', $contract->payment_method ) == 'cash' ? 'selected' : '' }}>EFECTIVO</option>
                        <option value="bank" {{ old( 'payment_method', $contract->payment_method ) == 'bank' ? 'selected' : '' }}>BANCO</option>
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="bank" class="col-md-4 control-label">
                    Banco
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="bank" type="text" id="bank" value="{{ old('bank', $contract->bank) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="employees_id" class="col-md-4 control-label">
                    Asesor
                </label>
                <div class="col-md-6">
                    <select name="employee_id" id="employee_id" class="form-control">
                    <option value="">SELECCIONA UN ASESOR</option>
                    @foreach($employees as $employee)
                        <option 
                            value="{{ $employee->id }}"
                            {{ old('employee_id', $contract->employee_id ) == $employee->id ? 'selected' : '' }} >
                            {{ $employee->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label class="col-md-4 control-label">
                    Sucursal
                </label>
                <div class="col-md-6">
                    <select name="branch_office_id" id="branch_office_id" class="form-control">
                    <option value="">SELECCIONA UNA SUCURSAL</option>
                    @foreach($branch_offices as $branch_office)
                        <option 
                            value="{{ $branch_office->id }}"
                            {{ old('branch_office_id', $contract->branch_office_id ) == $branch_office->id ? 'selected' : '' }} >
                            {{ $branch_office->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-default" type="submit" value="Editar">
                </div>
            </div><!-- /. form-group -->
        </form>
	</div>
</div><!-- /. panel-body --> 
@endsection