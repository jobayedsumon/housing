@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'career?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Career Request</legend>
									
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
										<div class="col-md-6">
										  <textarea name='name' rows='5' id='name' class='form-control form-control-sm '  
				           >{{ $row['name'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Father Name" class=" control-label col-md-4 text-left"> Father Name </label>
										<div class="col-md-6">
										  <input  type='text' name='father_name' id='father_name' value='{{ $row['father_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mother Name" class=" control-label col-md-4 text-left"> Mother Name </label>
										<div class="col-md-6">
										  <input  type='text' name='mother_name' id='mother_name' value='{{ $row['mother_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Of Birth" class=" control-label col-md-4 text-left"> Date Of Birth </label>
										<div class="col-md-6">
										  <input  type='text' name='date_of_birth' id='date_of_birth' value='{{ $row['date_of_birth'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nationality" class=" control-label col-md-4 text-left"> Nationality </label>
										<div class="col-md-6">
										  <input  type='text' name='nationality' id='nationality' value='{{ $row['nationality'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nid" class=" control-label col-md-4 text-left"> Nid </label>
										<div class="col-md-6">
										  <input  type='text' name='nid' id='nid' value='{{ $row['nid'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Blood Group" class=" control-label col-md-4 text-left"> Blood Group </label>
										<div class="col-md-6">
										  <input  type='text' name='blood_group' id='blood_group' value='{{ $row['blood_group'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Training" class=" control-label col-md-4 text-left"> Training </label>
										<div class="col-md-6">
										  <input  type='text' name='tanning' id='tanning' value='{{ $row['tanning'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mailing Address" class=" control-label col-md-4 text-left"> Mailing Address </label>
										<div class="col-md-6">
										  <textarea name='mailing_address' rows='5' id='mailing_address' class='form-control form-control-sm '  
				           >{{ $row['mailing_address'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Permanent Address" class=" control-label col-md-4 text-left"> Permanent Address </label>
										<div class="col-md-6">
										  <textarea name='permanent_address' rows='5' id='permanent_address' class='form-control form-control-sm '  
				           >{{ $row['permanent_address'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Religion" class=" control-label col-md-4 text-left"> Religion </label>
										<div class="col-md-6">
										  <input  type='text' name='religion' id='religion' value='{{ $row['religion'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Marital Status" class=" control-label col-md-4 text-left"> Marital Status </label>
										<div class="col-md-6">
										  <input  type='text' name='marital_status' id='marital_status' value='{{ $row['marital_status'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Hobbies" class=" control-label col-md-4 text-left"> Hobbies </label>
										<div class="col-md-6">
										  <textarea name='hobbies' rows='5' id='hobbies' class='form-control form-control-sm '  
				           >{{ $row['hobbies'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Extra Curricular Activities" class=" control-label col-md-4 text-left"> Extra Curricular Activities </label>
										<div class="col-md-6">
										  <textarea name='extra_curricular_activities' rows='5' id='extra_curricular_activities' class='form-control form-control-sm '  
				           >{{ $row['extra_curricular_activities'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Langauge Proficiency" class=" control-label col-md-4 text-left"> Langauge Proficiency </label>
										<div class="col-md-6">
										  <textarea name='langauge_proficiency' rows='5' id='langauge_proficiency' class='form-control form-control-sm '  
				           >{{ $row['langauge_proficiency'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Computer Literacy" class=" control-label col-md-4 text-left"> Computer Literacy </label>
										<div class="col-md-6">
										  <textarea name='computer_literacy' rows='5' id='computer_literacy' class='form-control form-control-sm '  
				           >{{ $row['computer_literacy'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Personal Quality" class=" control-label col-md-4 text-left"> Personal Quality </label>
										<div class="col-md-6">
										  <textarea name='personal_quality' rows='5' id='personal_quality' class='form-control form-control-sm '  
				           >{{ $row['personal_quality'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ssc" class=" control-label col-md-4 text-left"> Ssc </label>
										<div class="col-md-6">
										  <textarea name='ssc' rows='5' id='ssc' class='form-control form-control-sm '  
				           >{{ $row['ssc'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Hsc" class=" control-label col-md-4 text-left"> Hsc </label>
										<div class="col-md-6">
										  <textarea name='hsc' rows='5' id='hsc' class='form-control form-control-sm '  
				           >{{ $row['hsc'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Graduation" class=" control-label col-md-4 text-left"> Graduation </label>
										<div class="col-md-6">
										  <textarea name='graduation' rows='5' id='graduation' class='form-control form-control-sm '  
				           >{{ $row['graduation'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Post Graduation" class=" control-label col-md-4 text-left"> Post Graduation </label>
										<div class="col-md-6">
										  <textarea name='post_graduation' rows='5' id='post_graduation' class='form-control form-control-sm '  
				           >{{ $row['post_graduation'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mobile" class=" control-label col-md-4 text-left"> Mobile </label>
										<div class="col-md-6">
										  <input  type='text' name='mobile' id='mobile' value='{{ $row['mobile'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
										<div class="col-md-6">
										  <input  type='text' name='image' id='image' value='{{ $row['image'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Reference" class=" control-label col-md-4 text-left"> Reference </label>
										<div class="col-md-6">
										  <textarea name='reference' rows='5' id='reference' class='form-control form-control-sm '  
				           >{{ $row['reference'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("career/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop