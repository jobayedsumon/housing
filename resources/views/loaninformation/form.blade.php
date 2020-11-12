@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'loaninformation?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> Loan Information</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
										<div class="col-md-6">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Category" class=" control-label col-md-4 text-left"> Category </label>
										<div class="col-md-6">
										  <select name='category' rows='5' id='category' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Short Description" class=" control-label col-md-4 text-left"> Short Description </label>
										<div class="col-md-6">
										  <textarea name='short_description' rows='5' id='short_description' class='form-control form-control-sm '  
				           >{{ $row['short_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Show Home Page" class=" control-label col-md-4 text-left"> Show Home Page </label>
										<div class="col-md-6">
										  <?php $show_home_page = explode(",",$row['show_home_page']); ?>
					  
					<input type='checkbox' name='show_home_page[]' value ='1'   class=' minimal-green' 
					@if(in_array('1',$show_home_page))checked @endif 
					 /> YES  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Thumbnail Image" class=" control-label col-md-4 text-left"> Thumbnail Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="icon" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="icon-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["icon"],"/loan") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Image Size 600*400"><i class="icon-question2"></i></a>
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Banner Image" class=" control-label col-md-4 text-left"> Banner Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="about" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="about-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["about"],"/uploads/images") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	<a href="#" data-toggle="tooltip" placement="left" class="tips" title="Image Size 1900*480"><i class="icon-question2"></i></a>
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Product Features" class=" control-label col-md-4 text-left"> Product Features </label>
										<div class="col-md-6">
										  <textarea name='feature' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['feature'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Document Required" class=" control-label col-md-4 text-left"> Document Required </label>
										<div class="col-md-6">
										  <textarea name='eligibility' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['eligibility'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Loan Term and Amount" class=" control-label col-md-4 text-left"> Loan Term and Amount </label>
										<div class="col-md-6">
										  <textarea name='types_loan' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['types_loan'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Interest Rate" class=" control-label col-md-4 text-left"> Interest Rate </label>
										<div class="col-md-6">
										  <input  type='text' name='interest_rate' id='interest_rate' value='{{ $row['interest_rate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 '   ></select> 
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
		
		
		
		$("#category").jCombo("{!! url('loaninformation/comboselect?filter=vmsl_loan_category:id:name') !!}",
		{  selected_value : '{{ $row["category"] }}' });
		
		$("#status").jCombo("{!! url('loaninformation/comboselect?filter=vmsl_status:id:name') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("loaninformation/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop