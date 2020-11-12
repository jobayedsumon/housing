<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vmsl;

class Helper
{
	
    public static function getHomepageLoans(){
        $value = DB::table('vmsl_loan')->where('show_home_page', 1)->orderBy('priority', 'DESC')->get();
		return $value;
    }
    public static function getHomepageDeposits(){
        $value = DB::table('vmsl_deposit')->where('show_home_page', 1)->orderBy('id', 'DESC')->get();
		return $value;
    }
    
    
    public static function getLoanCategory(){
        $value = DB::table('vmsl_loan')->where('status', 1)->groupby('name')->orderBy('id', 'DESC')->get();
		return $value;
    }

    public static function getLoanCategory_byID($any){
        $value = DB::table('vmsl_loan')->where('id', $any)->get();
		return $value;
    }


    public static function getDepositCategory(){
        $value = DB::table('vmsl_deposit')->where('status', 1)->groupby('name')->orderBy('id', 'DESC')->get();
		return $value;
    }
    
    public static function getDistrict(){
        $value = DB::table('vmsl_district')->orderBy('name', 'ASC')->get();
		return $value;
    }

    public static function getDocumentsByname($name){
        $value = DB::table('vmsl_documents')->where('name', $name)->first();
		return '/uploads/files/'.$value->pdf_link;
    }

 
    public static function getDepositName($id){
        return DB::table('vmsl_deposit')->where('category', $id)->orderby('priority','asc')->get();
    }
    public static function getLoanName($id){
        return DB::table('vmsl_loan')->where('category', $id)->orderby('priority','asc')->get();
    }
    public static function getAllCsr(){
        return DB::table('vmsl_csr')->groupby('type')->get();
    }

    public static function getLoanCat(){
        return DB::table('vmsl_loan_category')->where('status', 1)->orderby('priority','asc')->get();
    }

    public static function getDepositCat(){
        return DB::table('vmsl_deposit_category')->where('status', 1)->orderby('priority','asc')->get();
    }
    public static function getJobName($id){
        return DB::table('vmsl_vacancy_announcement')->where('id', $id)->first()->title;
    }
    

    
	
	
}