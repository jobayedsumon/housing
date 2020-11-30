@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('career/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('career?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('career/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('career/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) }}</td>
						<td>{{ $row->name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Father Name', (isset($fields['father_name']['language'])? $fields['father_name']['language'] : array())) }}</td>
						<td>{{ $row->father_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mother Name', (isset($fields['mother_name']['language'])? $fields['mother_name']['language'] : array())) }}</td>
						<td>{{ $row->mother_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Of Birth', (isset($fields['date_of_birth']['language'])? $fields['date_of_birth']['language'] : array())) }}</td>
						<td>{{ $row->date_of_birth}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nationality', (isset($fields['nationality']['language'])? $fields['nationality']['language'] : array())) }}</td>
						<td>{{ $row->nationality}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nid', (isset($fields['nid']['language'])? $fields['nid']['language'] : array())) }}</td>
						<td>{{ $row->nid}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Blood Group', (isset($fields['blood_group']['language'])? $fields['blood_group']['language'] : array())) }}</td>
						<td>{{ $row->blood_group}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tanning', (isset($fields['tanning']['language'])? $fields['tanning']['language'] : array())) }}</td>
						<td>{{ $row->tanning}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Job Post Id', (isset($fields['job_post_id']['language'])? $fields['job_post_id']['language'] : array())) }}</td>
						<td>{{ $row->job_post_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mailing Address', (isset($fields['mailing_address']['language'])? $fields['mailing_address']['language'] : array())) }}</td>
						<td>{{ $row->mailing_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Permanent Address', (isset($fields['permanent_address']['language'])? $fields['permanent_address']['language'] : array())) }}</td>
						<td>{{ $row->permanent_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Religion', (isset($fields['religion']['language'])? $fields['religion']['language'] : array())) }}</td>
						<td>{{ $row->religion}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Marital Status', (isset($fields['marital_status']['language'])? $fields['marital_status']['language'] : array())) }}</td>
						<td>{{ $row->marital_status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Hobbies', (isset($fields['hobbies']['language'])? $fields['hobbies']['language'] : array())) }}</td>
						<td>{{ $row->hobbies}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Extra Curricular Activities', (isset($fields['extra_curricular_activities']['language'])? $fields['extra_curricular_activities']['language'] : array())) }}</td>
						<td>{{ $row->extra_curricular_activities}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Langauge Proficiency', (isset($fields['langauge_proficiency']['language'])? $fields['langauge_proficiency']['language'] : array())) }}</td>
						<td>{{ $row->langauge_proficiency}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Computer Literacy', (isset($fields['computer_literacy']['language'])? $fields['computer_literacy']['language'] : array())) }}</td>
						<td>{{ $row->computer_literacy}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Personal Quality', (isset($fields['personal_quality']['language'])? $fields['personal_quality']['language'] : array())) }}</td>
						<td>{{ $row->personal_quality}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ssc', (isset($fields['ssc']['language'])? $fields['ssc']['language'] : array())) }}</td>
						<td>{{ $row->ssc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Hsc', (isset($fields['hsc']['language'])? $fields['hsc']['language'] : array())) }}</td>
						<td>{{ $row->hsc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Graduation', (isset($fields['graduation']['language'])? $fields['graduation']['language'] : array())) }}</td>
						<td>{{ $row->graduation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Post Graduation', (isset($fields['post_graduation']['language'])? $fields['post_graduation']['language'] : array())) }}</td>
						<td>{{ $row->post_graduation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mobile', (isset($fields['mobile']['language'])? $fields['mobile']['language'] : array())) }}</td>
						<td>{{ $row->mobile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reference', (isset($fields['reference']['language'])? $fields['reference']['language'] : array())) }}</td>
						<td>{{ $row->reference}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
