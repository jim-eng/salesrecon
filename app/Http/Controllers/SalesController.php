<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class SalesController extends Controller
{
   
    
    public function AeonCoStore(){
        $store = DB::table('Companies')->where('Company', 'Aeon Co')->get();
        return view('admin.aeonco_store', compact('store'));
    }
    
    public function AeonBigStore(){
        $store = DB::table('Companies')->where('Company', 'Aeon Big')->get();
        return view('admin.aeonbig_store', compact('store'));
    }
    
    public function CashTransaction(){
        return view('admin.cash_transaction');
    }
    
    public function TenderTransaction(){
        return view('admin.tender_transaction');
    }
    
    public function BankTransaction(){
        return view('admin.bank_transaction');
    }
    
    public function CashierForm(){
        return view('admin.cashier_form');
    }
    
    public function Remarks(){
        return view('admin.remark');
    }
    
    public function ManageTender(){
        $tender = DB::table('tenders')->get();
        return view('admin.tender_manage', compact('tender'));
    }
    
    public function TenderEdit($id){
//        $categories = Category::find($id);
        $tender_edit = DB::table('tenders')->where('id', $id)->first();
        return view('admin.tender_edit',compact('tender_edit'));
    }
}
