<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontOfficeController extends Controller
{

    public function index(){
        $program = Program::with('organizer','location','category')->get();

        $now = Carbon::now();
        $programSold = Program::where('end_date_program','<=',$now)->get();
        $programAvailable = Program::where('end_date_program','>=',$now)->orderBy('end_date_program','desc')->get();
        return view('layouts.front.home', compact('program','programSold','programAvailable'));
    }

    public function eventPrevious(){
        $now = Carbon::now();
        $eventPrevious = Program::where('end_date_program','<=',$now)->get();
        return view('layouts.front.event.event-previous',compact('eventPrevious'));
    }

    public function transaction(){
        return view('layouts.front.check-transaction');
    }

    public function searchTransaction(Request $request ,Transaction $transaction){
        $transaction_code = $request->input('trans_code');

        $transaction = Transaction::where('trans_code',$transaction_code)->first();

        return  view('layouts.front.check-transaction',compact('transaction'));
    }

    public function aboutUsFront(){
        return view('layouts.front.about-us');
    }

    public function allEvent(){
        $program = Program::with('organizer','location','category')->get();
        return view('layouts.front.event.all-event',compact('program'));
    }

    public function filterEvent(Request $request){
        $dateOption = $request->input('date-option');
        $priceOption = $request->input('price-option');
        $categoryOption = $request->input('category-option');

        $program = Program::query();

        if($dateOption === 'this-month'){
            $program->whereYear('date_program', Carbon::now()->year)->whereMonth('date_program',Carbon::now()->month);
        }elseif($dateOption === 'next-month'){
            $program->whereYear('date_program', Carbon::now()->addMonth()->year)
            ->whereMonth('date_program', Carbon::now()->addMonth()->month);
        }

        if ($priceOption === 'free') {
            $program->where('price', 0);
        } elseif ($priceOption === 'paid') {
            $program->where('price', '>', 0);
        }

        if($categoryOption){
            $program->where('id_category', $categoryOption);
        }

        $filteredProgram = $program->get();

        return view('layouts.front.event.all-event',compact('filteredProgram'));
    }

    public function detailEvent(string $id){
        $mapbox = env('MAPBOX_TOKEN');
        $programDetail = Program::find($id);
        return view('layouts.front.event.detail-event',compact('programDetail','mapbox'));
    }

    public function createTicket(string $id, Transaction $transaction, Request $request){
        $trans_code = 6;

        $transaction = new Transaction();
        $transaction->id_program = $id;
        $transaction->trans_code = generateRandomString($trans_code);
        $transaction->quantity = 1;
        $transaction->total_amount = 10000;
        $transaction->customer_email = $request->input('email');
        $transaction->payment_method = 'Transfer';
        $transaction->transaction_date = Carbon::now();
        $transaction->payment_status = 0;

        $transaction->save();

        $transactionId = $transaction->id;
        return redirect('event/event-detail/'.$id.'/purchase');
    }

    public function purchase(string $id){
        return view('layouts.front.event.purchase',compact('id'));
    }

    public function changePaymentStatus(string $transactionId){
        $transaction = Transaction::find($transactionId);
    }

    public function paymentDetail(string $id){
        $eventTicket = Program::find($id);
        return view('layouts.front.event.payment-detail-event',compact('eventTicket'));
    }




}
