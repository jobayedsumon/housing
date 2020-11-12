

		 {!! Form::open(array('url'=>'career', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> career</legend>
				{!! Form::hidden('id', $row['id']) !!}					
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
										<label for="Father's Name" class=" control-label col-md-4 text-left"> Father's Name </label>
										<div class="col-md-6">
										  <textarea name='father_name' rows='5' id='father_name' class='form-control form-control-sm '  
				           >{{ $row['father_name'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mother's Name" class=" control-label col-md-4 text-left"> Mother's Name </label>
										<div class="col-md-6">
										  <textarea name='mother_name' rows='5' id='mother_name' class='form-control form-control-sm '  
				           >{{ $row['mother_name'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Of Birth" class=" control-label col-md-4 text-left"> Date Of Birth </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('date_of_birth', $row['date_of_birth'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nationality" class=" control-label col-md-4 text-left"> Nationality </label>
										<div class="col-md-6">
										  <textarea name='nationality' rows='5' id='nationality' class='form-control form-control-sm '  
				           >{{ $row['nationality'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="NID" class=" control-label col-md-4 text-left"> NID </label>
										<div class="col-md-6">
										  <textarea name='nid' rows='5' id='nid' class='form-control form-control-sm '  
				           >{{ $row['nid'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Blood Group" class=" control-label col-md-4 text-left"> Blood Group </label>
										<div class="col-md-6">
										  <textarea name='blood_group' rows='5' id='blood_group' class='form-control form-control-sm '  
				           >{{ $row['blood_group'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Religion" class=" control-label col-md-4 text-left"> Religion </label>
										<div class="col-md-6">
										  <textarea name='religion' rows='5' id='religion' class='form-control form-control-sm '  
				           >{{ $row['religion'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Marital Status" class=" control-label col-md-4 text-left"> Marital Status </label>
										<div class="col-md-6">
										  <textarea name='marital_status' rows='5' id='marital_status' class='form-control form-control-sm '  
				           >{{ $row['marital_status'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Contact No" class=" control-label col-md-4 text-left"> Contact No </label>
										<div class="col-md-6">
										  <textarea name='mobile' rows='5' id='mobile' class='form-control form-control-sm '  
				           >{{ $row['mobile'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <textarea name='email' rows='5' id='email' class='form-control form-control-sm '  
				           >{{ $row['email'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="SSC" class=" control-label col-md-4 text-left"> SSC </label>
										<div class="col-md-6">
										  <textarea name='ssc' rows='5' id='ssc' class='form-control form-control-sm '  
				           >{{ $row['ssc'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="HSC" class=" control-label col-md-4 text-left"> HSC </label>
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
										<label for="Experience" class=" control-label col-md-4 text-left"> Experience </label>
										<div class="col-md-6">
										  <textarea name='experience' rows='5' id='experience' class='form-control form-control-sm '  
				           >{{ $row['experience'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Training" class=" control-label col-md-4 text-left"> Training </label>
										<div class="col-md-6">
										  <textarea name='tanning' rows='5' id='tanning' class='form-control form-control-sm '  
				           >{{ $row['tanning'] }}</textarea> 
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
										<label for="Hobbies" class=" control-label col-md-4 text-left"> Hobbies </label>
										<div class="col-md-6">
										  <textarea name='hobbies' rows='5' id='hobbies' class='form-control form-control-sm '  
				           >{{ $row['hobbies'] }}</textarea> 
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
										<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["image"],"/uploads/images") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Reference 1" class=" control-label col-md-4 text-left"> Reference 1 </label>
										<div class="col-md-6">
										  <textarea name='reference_1' rows='5' id='reference_1' class='form-control form-control-sm '  
				           >{{ $row['reference_1'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Reference 2" class=" control-label col-md-4 text-left"> Reference 2 </label>
										<div class="col-md-6">
										  <textarea name='reference_2' rows='5' id='reference_2' class='form-control form-control-sm '  
				           >{{ $row['reference_2'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('job_post_id', $row['job_post_id']) !!}{!! Form::hidden('mailing_address', $row['mailing_address']) !!}{!! Form::hidden('permanent_address', $row['permanent_address']) !!}{!! Form::hidden('personal_quality', $row['personal_quality']) !!}{!! Form::hidden('status', $row['status']) !!}</fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
