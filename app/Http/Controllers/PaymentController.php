<?php

namespace App\Http\Controllers;

use App\Payment;

use App\Contract;

use Illuminate\Http\Request;

use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::all();
        return view('employee.payments.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {  
        $contract = Contract::findOrFail($id);
        $date = horario('date');
        return view('employee.payments.create', compact('contract','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentRequest $request)
    {

        $contract = Contract::findOrFail($request->contract_id);
        $contract_id = $contract->id;
        $total_cost = $contract->total_cost;
        $value_of_payment = $request->value_of_payment;

        $payment = new Payment($request->all());
        $payment->contract()->associate($contract);
        $payment->save();

        $contract->state = $payment->contractState($contract_id, $value_of_payment, $total_cost);
        $contract->save(); 

        

        return redirect()->to('employee/payments/'.$contract->id)->withFlash('El Abono ha sido registrado de forma exitosa!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        $payments = Payment::where('contract_id', '=', $contract->id)->get();
        $totalPayment = null;
        foreach($payments as $payment){  $totalPayment = $payment->value_of_payment + $totalPayment; }
        return view('employee.payments.show', compact('contract','payments','totalPayment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        
        $contract_id = $payment->contract_id; 
        $contract = Contract::findOrFail($contract_id);
        
        $total_cost = $contract->total_cost;
        $value_of_payment = null;

        $contract->state = $payment->contractState($contract_id, $value_of_payment, $total_cost);
        $contract->save(); 

        return back()->withFlash('El Abono ha sido eliminado de forma exitosa!');
    }
}
