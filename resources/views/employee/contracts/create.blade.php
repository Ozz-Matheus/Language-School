@extends('layouts.app')
@section('content')
<div class="panel-heading">
	Registrar Contrato
</div><!-- /. panel-heading --> 
<div class="panel-body">
    <div class="col-md-8 col-md-offset-2">
        @include('layouts.partials.errors')
        <form method="POST" action="{{ route('employee.contracts.store') }}" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group  {{ $errors->has('order') ? ' has-error' : '' }}">
                <label for="order" class="col-md-4 control-label">
                    Folio
                </label>
                <div class="col-md-6">
                    <input class="form-control" min="0" name="order" type="number" id="order" value="{{ old('order') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('date') ? ' has-error' : '' }}">
                <label for="date" class="col-md-4 control-label">
                    Fecha
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="date" type="date" id="date" value="{{ old('date', $date) }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="number_of_students" class="col-md-4 control-label">
                    Numero de alumnos
                </label>
                <div class="col-md-6">
                    <select class="form-control" id="number_of_students" name="number_of_students">
                        <option value="1" {{ old( 'number_of_students' ) == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old( 'number_of_students' ) == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old( 'number_of_students' ) == '3' ? 'selected' : '' }}>3</option>
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('name_of_holder') ? ' has-error' : '' }}">
                <label for="name_of_holder" class="col-md-4 control-label">
                    Nombre del titular
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="name_of_holder" type="text" id="name_of_holder" value="{{ old('name_of_holder') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('age_of_the_holder') ? ' has-error' : '' }}">
                <label for="age_of_the_holder" class="col-md-4 control-label">
                    Edad del titular
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="age_of_the_holder" type="number" id="age_of_the_holder" value="{{ old('age_of_the_holder') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="one" class="col-md-4 control-label">
                    Nombre del beneficiario 1
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="one" type="text" id="one" value="{{ old('one') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="two" class="col-md-4 control-label">
                    Edad del beneficiario 1
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="two" type="number" id="two" value="{{ old('two') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group hideTwo">
                <label for="three" class="col-md-4 control-label">
                    Nombre del beneficiario 2
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="three" type="text" id="three" value="{{ old('three') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group hideTwo">
                <label for="four" class="col-md-4 control-label">
                    Edad del beneficiario 2
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="four" type="number" id="four" value="{{ old('four') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group hideThree">
                <label for="five" class="col-md-4 control-label">
                    Nombre del beneficiario 3
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="five" type="text" id="five" value="{{ old('five') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group hideThree">
                <label for="six" class="col-md-4 control-label">
                    Edad del beneficiario 3
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="six" type="number" id="six" value="{{ old('six') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="street" class="col-md-4 control-label">
                    Calle
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="street" type="text" id="street" value="{{ old('street') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="street_number" class="col-md-4 control-label">
                    Número
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="street_number" type="number" id="street_number" value="{{ old('street_number') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="colony" class="col-md-4 control-label">
                    Colonia
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="colony" type="text" id="colony" value="{{ old('colony') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="municipality" class="col-md-4 control-label">
                    Municipio
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="municipality" type="text" id="municipality" value="{{ old('municipality') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="home_phone" class="col-md-4 control-label">
                    Teléfono de casa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="home_phone" type="text" id="home_phone" value="{{ old('home_phone') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="mobile_phone" class="col-md-4 control-label">
                    Teléfono móvil
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="mobile_phone" type="text" id="mobile_phone" value="{{ old('mobile_phone') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="reference" class="col-md-4 control-label">
                    Referencia
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="reference" type="text" id="reference" value="{{ old('reference') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="relationship_with_your_reference" class="col-md-4 control-label">
                    Parentesco
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="relationship_with_your_reference" type="text" id="relationship_with_your_reference" value="{{ old('relationship_with_your_reference') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="phone_your_reference" class="col-md-4 control-label">
                    Teléfono de referencia
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="phone_your_reference" type="text" id="phone_your_reference" value="{{ old('phone_your_reference') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="company_name" class="col-md-4 control-label">
                    Nombre de empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="company_name" type="text" id="company_name" value="{{ old('company_name') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="company_address" class="col-md-4 control-label">
                    Dirección de la empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="company_address" type="text" id="company_address" value="{{ old('company_address') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="job_position" class="col-md-4 control-label">
                    Cargo dentro de la compañía
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="job_position" type="text" id="job_position" value="{{ old('job_position') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="company_phone" class="col-md-4 control-label">
                    Teléfono de la empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="company_phone" type="text" id="company_phone" value="{{ old('company_phone') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="extension_of_the_company" class="col-md-4 control-label">
                    Extensión de la empresa
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="extension_of_the_company" type="text" id="extension_of_the_company" value="{{ old('extension_of_the_company') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('hitch') ? ' has-error' : '' }}">
                <label for="hitch" class="col-md-4 control-label">
                    Enganche
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="hitch" type="number" id="hitch" value="{{ old('hitch') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('monthly_payments') ? ' has-error' : '' }}">
                <label for="monthly_payments" class="col-md-4 control-label">
                    Mensualidades
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="monthly_payments" type="number" id="monthly_payments" value="{{ old('monthly_payments') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('monthly_amount') ? ' has-error' : '' }}">
                <label for="monthly_amount" class="col-md-4 control-label">
                    Importe mensualidades
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="monthly_amount" type="number" id="monthly_amount" value="{{ old('monthly_amount') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('balance') ? ' has-error' : '' }}">
                <label for="balance" class="col-md-4 control-label">
                    Saldo
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="balance" type="number" id="balance" value="{{ old('balance') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group  {{ $errors->has('total_cost') ? ' has-error' : '' }}">
                <label for="total_cost" class="col-md-4 control-label">
                    Coste total
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="total_cost" type="number" id="total_cost" value="{{ old('total_cost') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="payment_method" class="col-md-4 control-label">
                    Método de pago
                </label>
                <div class="col-md-6">
                    <select class="form-control" id="payment_method" name="payment_method">
                        <option value="cash" {{ old( 'payment_method' ) == 'cash' ? 'selected' : '' }}>EFECTIVO</option>
                        <option value="bank" {{ old( 'payment_method' ) == 'bank' ? 'selected' : '' }}>BANCO</option>
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="bank" class="col-md-4 control-label">
                    Banco
                </label>
                <div class="col-md-6">
                    <input class="form-control" name="bank" type="text" id="bank" value="{{ old('bank') }}">
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <label for="billing" class="col-md-4 control-label">
                    Facturación
                </label>
                <div class="col-md-6">
                    <select class="form-control" id="billing" name="billing">
                        <option value="no" {{ old( 'billing' ) == 'no' ? 'selected' : '' }}>NO, NO NECESITO FACTURA</option>
                        <option value="yes" {{ old( 'billing' ) == 'yes' ? 'selected' : '' }}>SI, NECESITO FACTURA</option>
                    </select>
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
                            {{ old('employee_id') == $employee->id ? 'selected' : '' }} >
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
                            {{ old('branch_office_id') == $branch_office->id ? 'selected' : '' }} >
                            {{ $branch_office->name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div><!-- /. form-group -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <input class="btn btn-default" type="submit" value="Registrar">
                </div>
            </div><!-- /. form-group -->
        </form>
	</div>
</div><!-- /. panel-body --> 
@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function(){
    function numberOfStudents(){
        var select = $('select[name=number_of_students]').val();
        if(select == 2 ){
            $("#five").val(null);
            $("#six").val(null);
            $(".hideThree").hide();
            $(".hideTwo").show();
        }else if(select == 3){
            $(".hideTwo").show();
            $(".hideThree").show();
        }else{
            $("#three").val(null);
            $("#four").val(null);
            $(".hideTwo").hide();
            $("#five").val(null);
            $("#six").val(null);
            $(".hideThree").hide();
        }
    }

    $("select[name=number_of_students]").change(function(){
        numberOfStudents();
    });

    numberOfStudents();
});
</script>
@endpush
