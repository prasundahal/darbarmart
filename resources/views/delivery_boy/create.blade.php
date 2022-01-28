@extends('layouts.app')

@section('content')
<div>
    <h1 class="page-header text-overflow">Add New Delivery Boy</h1>
</div>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<form class="form form-horizontal mar-top" action="" method="POST" enctype="multipart/form-data" id="choice_form">
			@csrf
			<input type="hidden" name="added_by" value="admin">
			<div class="panel">
				<div class="panel-heading bord-btm">
					<h3 class="panel-title">{{__('Delivery Boy Information')}}</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('First Name')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="first_name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Middle Name')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="middle_name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Last Name')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="last_name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Phone Number')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="phone_number" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('DOB')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="dob">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Blood Group')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="blood_group" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Commission')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="commission">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Avatar')}}</label>
						<div class="col-lg-7">
							<input type="file" class="form-control" name="avatar">
						</div>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-heading bord-btm">
					<h3 class="panel-title">{{__('Login Info')}}</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Email Address')}}</label>
						<div class="col-lg-7">
							<input type="email" class="form-control" name="email" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Pincode')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="password" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Active Status')}}</label>
						<div class="col-lg-7">
							<select class="form-control demo-select2-placeholder" name="active_status" id="active_status">
								<option value="1">{{__('Active')}}</option>
								<option value="0">{{__('InActive')}}</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Availability Status')}}</label>
						<div class="col-lg-7">
							<select class="form-control demo-select2-placeholder" name="availability_status" id="availability_status">
								<option value="1">{{__('Active')}}</option>
								<option value="0">{{__('InActive')}}</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-heading bord-btm">
					<h3 class="panel-title">{{__('Address Info')}}</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Address')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="address" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('City')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="city" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Countries')}}</label>
						<div class="col-lg-7">
							<select class="form-control demo-select2-placeholder" name="country_id" id="country">
								<option value="">Select Country</option>
								@foreach($countries as $country)
								<option value="{{ $country->id }}" {{ old('country_id') ? 'selected': '' }}>{{ $country->name }}</option>
								@endforeach
								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('States')}}</label>
						<div class="col-lg-7">
							<select class="form-control demo-select2-placeholder" name="state_id" id="state">
								<option value="">Select State</option>
								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Zip Code')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="zip_code" required>
						</div>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-heading bord-btm">
					<h3 class="panel-title">{{__('Vechile Info')}}</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Vechile Name')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="vechile_name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Owner Name')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="owner_name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Owner Name')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="owner_name" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Vechile Color')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="vechile_color" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Vechile Registration No')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="vechile_registration_no" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Vechile Details')}}</label>
						<div class="col-lg-7">
							<input type="text" class="form-control" name="vechile_details" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Driving License')}}</label>
						<div class="col-lg-7">
							<input type="file" class="form-control" name="driving_license_no" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Vechile Rc Book')}}</label>
						<div class="col-lg-7">
							<input type="file" class="form-control" name="vechile_rc_book_no" required>
						</div>
					</div>
				</div>
			</div>
			<div class="panel">
				<div class="panel-heading bord-btm">
					<h3 class="panel-title">{{__('Account Details')}}</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Account Name')}}</label>
						<div class="col-lg-7">
							<input type="text" name="account_name" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Account Number')}}</label>
						<div class="col-lg-7">
							<input type="text" name="account_number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Gpay Number')}}</label>
						<div class="col-lg-7">
							<input type="text" name="gpay_number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Bank Address')}}</label>
						<div class="col-lg-7">
							<input type="text" name="bank_address" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('IFSC code')}}</label>
						<div class="col-lg-7">
							<input type="text" name="ifsc_code" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">{{__('Branch Name')}}</label>
						<div class="col-lg-7">
							<input type="text" name="branch_name" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="mar-all text-right">
				<button type="submit" name="button" class="btn btn-info">{{ __('Add New Product') }}</button>
			</div>
		</form>
	</div>
</div>


@endsection

@section('script')

<script type="text/javascript">
	function add_more_customer_choice_option(i, name){
		$('#customer_choice_options').append('<div class="form-group"><div class="col-lg-2"><input type="hidden" name="choice_no[]" value="'+i+'"><input type="text" class="form-control" name="choice[]" value="'+name+'" placeholder="Choice Title" readonly></div><div class="col-lg-7"><input type="text" class="form-control" name="choice_options_'+i+'[]" placeholder="Enter choice values" data-role="tagsinput" onchange="update_sku()"></div></div>');

		$("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
	}

	$('input[name="colors_active"]').on('change', function() {
	    if(!$('input[name="colors_active"]').is(':checked')){
			$('#colors').prop('disabled', true);
		}
		else{
			$('#colors').prop('disabled', false);
		}
		update_sku();
	});

	$('#colors').on('change', function() {
	    update_sku();
	});

	$('input[name="unit_price"]').on('keyup', function() {
	    update_sku();
	});

	$('input[name="name"]').on('keyup', function() {
	    update_sku();
	});

	function delete_row(em){
		$(em).closest('.form-group').remove();
		update_sku();
	}

	function update_sku(){
		$.ajax({
		   type:"POST",
		   url:'{{ route('products.sku_combination') }}',
		   data:$('#choice_form').serialize(),
		   success: function(data){
			   $('#sku_combination').html(data);
			   if (data.length > 1) {
				   $('#quantity').hide();
			   }
			   else {
					$('#quantity').show();
			   }
		   }
	   });
	}

	function get_subcategories_by_category(){
		var category_id = $('#category_id').val();
		$.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
		    $('#subcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#subcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		    get_subsubcategories_by_subcategory();
		});
	}

	function get_subsubcategories_by_subcategory(){
		var subcategory_id = $('#subcategory_id').val();
		$.post('{{ route('subsubcategories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
		    $('#subsubcategory_id').html(null);
			$('#subsubcategory_id').append($('<option>', {
				value: null,
				text: null
			}));
		    for (var i = 0; i < data.length; i++) {
		        $('#subsubcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		    //get_brands_by_subsubcategory();
			//get_attributes_by_subsubcategory();
		});
	}

	function get_brands_by_subsubcategory(){
		var subsubcategory_id = $('#subsubcategory_id').val();
		$.post('{{ route('subsubcategories.get_brands_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
		    $('#brand_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#brand_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		});
	}

	function get_attributes_by_subsubcategory(){
		var subsubcategory_id = $('#subsubcategory_id').val();
		$.post('{{ route('subsubcategories.get_attributes_by_subsubcategory') }}',{_token:'{{ csrf_token() }}', subsubcategory_id:subsubcategory_id}, function(data){
		    $('#choice_attributes').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#choice_attributes').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		    }
			$('.demo-select2').select2();
		});
	}

	$(document).ready(function(){
	    get_subcategories_by_category();
		$("#photos").spartanMultiImagePicker({
			fieldName:        'photos[]',
			maxCount:         10,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#thumbnail_img").spartanMultiImagePicker({
			fieldName:        'thumbnail_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#featured_img").spartanMultiImagePicker({
			fieldName:        'featured_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#flash_deal_img").spartanMultiImagePicker({
			fieldName:        'flash_deal_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
		$("#meta_photo").spartanMultiImagePicker({
			fieldName:        'meta_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
	});

	$('#category_id').on('change', function() {
	    get_subcategories_by_category();
	});

	$('#subcategory_id').on('change', function() {
	    get_subsubcategories_by_subcategory();
	});

	$('#subsubcategory_id').on('change', function() {
	    // get_brands_by_subsubcategory();
		//get_attributes_by_subsubcategory();
	});

	$('#choice_attributes').on('change', function() {
		$('#customer_choice_options').html(null);
		$.each($("#choice_attributes option:selected"), function(){
			//console.log($(this).val());
            add_more_customer_choice_option($(this).val(), $(this).text());
        });
		update_sku();
	});


</script>

@endsection
