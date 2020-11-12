<?php

namespace App\Http\Controllers;

use App\Models\DepositRequest;
use App\Models\Loanrequest;
use Illuminate\Http\Request;
use App\Models\Vmsl;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Spatie\Sitemap\SitemapGenerator;

class VmslController extends Controller{


	public function loans(Request $req){
			$data = Vmsl::getSingleLoan($req->any);
			return view('layouts.vmsl.loan.index')->with("allData",$data);
	}
	public function deposits(Request $req ){

		if($req->any == 'all'){
			$data = Vmsl::getAllDeposit();
			return view('layouts.vmsl.deposit.index')->with("allData",$data);
		}else{
			$data = Vmsl::getSingleDeposit($req->any);
			return view('layouts.vmsl.deposit.view')->with("allData",$data);
		}


	}

	public function directors(Request $req ){
			$data = Vmsl::getSingleDirectors($req->any);
			$this->data['title'] = 'Bord of Directors';
			return view('layouts.vmsl.directors.index')->with("allData",$data);
	}

	public function faq(){
		$data = [];
		return view('layouts.vmsl.faq.index')->with("allData",$data);
	}
	public function calculator(){
		$data = [];
		return view('layouts.vmsl.calculator.loan')->with("allData",$data);
	}
	public function downloads(){
		$data = Vmsl::documents(2);
		return view('layouts.vmsl.downloads.index')->with("allData",$data);
	}
	public function strategic_partners(){
		$data = Vmsl::strategic_partners();
		return view('layouts.vmsl.strategic_partners.index')->with("allData",$data);
	}
	public function regulatory_disclosures(){
		$data = Vmsl::documents(3);
		return view('layouts.vmsl.regulatory_disclosures.index')->with("allData",$data);
	}

	public function files_info($id){
		$data['doc'] = Vmsl::documents($id);

		$data['title'] = DB::table('vmsl_document_type')->where('id',$id)->first()->name;
		return view('layouts.vmsl.files.index')->with("allData",$data);
	}



	public function news_bulletin(){
		$data = Vmsl::documents(4);
		return view('layouts.vmsl.news_bulletin.index')->with("allData",$data);
	}

	public function vacancy_announcement(){
		$circular = DB::table('vmsl_vacancy_announcement')->where('status',1)->whereDate('end_date', '>=', date("Y-m-d"))->get();
		return view('layouts.vmsl.vacancy_announcement.index')->with(compact('circular'));
	}



	public function financial_report(){
		$data = [];
		$data['annualFinance'] = Vmsl::documents(5);
		$data['annualReport'] = Vmsl::documents(6);
		$data['halfQuater'] = Vmsl::documents(7);
		return view('layouts.vmsl.financial_report.index')->with("allData",$data);
	}


	public function whynhfc(){
	    $data = [];
		return view('layouts.vmsl.page.whynhfc')->with("allData",$data);
	}
	public function location(){
	    $data = Vmsl::getAllLocation();
		return view('layouts.vmsl.page.location')->with("allData",$data);
	}
	public function news(){
	    $data = Vmsl::getAllNews();
		return view('layouts.vmsl.page.news')->with("allData",$data);
	}
	public function csr(){
	    $data = Vmsl::getAllCsr();
		return view('layouts.vmsl.page.csr')->with("allData",$data);
	}


	public function complain_cell(){
		return view('layouts.vmsl.page.complain_cell');
	}
	public function shareholding_structure(){
		return view('layouts.vmsl.page.shareholding_structure');
	}

	public function featured_program(){
	    $data = [];
		return view('layouts.vmsl.page.featured_program')->with("allData",$data);
	}

	public function management_team(){
	    $data = [];
	    $data['team'] = Vmsl::managementTeam();
	    $data['teamType'] = Vmsl::managementTeamType();
	    return view('layouts.vmsl.page.management_team')->with('allData', $data);

	}

	public function news_details($id)
    {
        $data = Vmsl::getAllNews();
        $news = Vmsl::getSingleNews($id);

        return view('layouts.vmsl.page.news_details')->with('allData', $data)->with('news', $news);


    }

    public function loan_request(Request $request)
    {
       $loanRequest = new Loanrequest;

        $loanRequest->loan_type = $request->loan_type;
        $loanRequest->name = $request->name;
        $loanRequest->address= $request->address;
        $loanRequest->business_name = $request->business_name ?? '';
        $loanRequest->business_address = $request->business_address ?? '';
        $loanRequest->business_sector = $request->business_sector ?? '';
        $loanRequest->business_experience = $request->business_experience ?? '';
        $loanRequest->district = $request->district;
        $loanRequest->contact_number = $request->contact_number;
        $loanRequest->email = $request->email;
        $loanRequest->status = 1;
        $loanRequest->company_name = $request->company_name ?? '';
        $loanRequest->company_address = $request->company_address ?? '';
        $loanRequest->company_designation = $request->company_designation ?? '';

        $loanRequest->save();

        return redirect()->back()->with('msg', 'Loan application sent successfully!');
    }

    public function deposit_request(Request $request)
    {
        $depositRequest = new DepositRequest;

        $depositRequest->deposit_type = $request->deposit_type;
        $depositRequest->name = $request->name;
        $depositRequest->address= $request->address;
        $depositRequest->business_name = $request->business_name ?? '';
        $depositRequest->business_address = $request->business_address ?? '';
        $depositRequest->business_sector = $request->business_sector ?? '';
        $depositRequest->business_experience = $request->business_experience ?? '';
        $depositRequest->district = $request->district;
        $depositRequest->contact_number = $request->contact_number;
        $depositRequest->email = $request->email;
        $depositRequest->status = 1;
        $depositRequest->company_name = $request->company_name ?? '';
        $depositRequest->company_address = $request->company_address ?? '';
        $depositRequest->company_designation = $request->company_designation ?? '';

        $depositRequest->save();

        return redirect()->back()->with('msg', 'Deposit application sent successfully!');
    }

    public function sitemap()
    {
        return \view('layouts.vmsl.page.sitemap');
    }


}

?>
