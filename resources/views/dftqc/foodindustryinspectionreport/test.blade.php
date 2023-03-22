@extends('dftqc.partials.layouts')
@section('css')
<!-- Style Css -->
<link href="{{asset('assets/css/wizard.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Add foodindustryinspectionreport.</h1>

                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ route('foodindustryinspectionreport.foodindustryinspectionreport.index') }}"
                                            class="btn btn-md d-md-none btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                            <span>View Cities</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">

                        <div class="wizard-section card-body">
                            <div class="row no-gutters">
            
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-wizard">
                                        <form action="{{route('foodindustryinspectionreport.foodindustryinspectionreport.storeTest')}}" method="post" role="form">
                                            @csrf
                                            <div class="form-wizard-header">
                                                <p>Fill all form field to go next step</p>
                                                <ul class="list-unstyled form-wizard-steps clearfix">
                                                    <li class="active"><span>1</span></li>
                                                    <li><span>2</span></li>
                                                    <li><span>3</span></li>
                                                    <li><span>4</span></li>
                                                </ul>
                                            </div>
                                            <fieldset class="wizard-fieldset show">
                                                <h5>Personal Information</h5>
                                                <div class="form-group">
                                                    <div class="col-lg-12 mt-2 mb-5">{{createTextValidation("first_name","first_name","First Name",'','','','required')}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-12 mt-2 mb-5">{{createTextValidation("last_name","last_name","Last Name",'','','','required')}}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    Gender
                                                    <div class="wizard-form-radio">
                                                        <input name="radio-name" id="radio1" type="radio">
                                                        <label for="radio1">Male</label>
                                                    </div>
                                                    <div class="wizard-form-radio">
                                                        <input name="radio-name" id="radio2" type="radio">
                                                        <label for="radio2">Female</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-2 mb-5">{{createTextValidation("zip_code","zip_code","Zip Name",'','','','required')}}
                                                </div>
                                                <div class="form-group clearfix">
                                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                </div>
                                            </fieldset>
                                            <fieldset class="wizard-fieldset">
                                                <h5>Account Information</h5>
                                                <div class="form-group">
                                                    <input type="email" class="form-control wizard-required" id="email">
                                                    <label for="email" class="wizard-form-text-label">Email*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control wizard-required" id="username">
                                                    <label for="username" class="wizard-form-text-label">User Name*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control wizard-required" id="pwd">
                                                    <label for="pwd" class="wizard-form-text-label">Password*</label>
                                                    <div class="wizard-form-error"></div>
                                                    <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control wizard-required" id="cpwd">
                                                    <label for="cpwd" class="wizard-form-text-label">Confirm Password*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                </div>
                                            </fieldset>
                                            <fieldset class="wizard-fieldset">
                                                <h5>Bank Information</h5>
                                                <div class="form-group">
                                                    <input type="text" class="form-control wizard-required" id="bname">
                                                    <label for="bname" class="wizard-form-text-label">Bank Name*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control wizard-required" id="brname">
                                                    <label for="brname" class="wizard-form-text-label">Branch Name*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control wizard-required" id="acname">
                                                    <label for="acname" class="wizard-form-text-label">Account Name*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control wizard-required" id="acon">
                                                    <label for="acon" class="wizard-form-text-label">Account Number*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                </div>
                                            </fieldset>
                                            <fieldset class="wizard-fieldset">
                                                <h5>Payment Information</h5>
                                                <div class="form-group">
                                                    Payment Type
                                                    <div class="wizard-form-radio">
                                                        <input name="radio-name" id="mastercard" type="radio">
                                                        <label for="mastercard">Master Card</label>
                                                    </div>
                                                    <div class="wizard-form-radio">
                                                        <input name="radio-name" id="visacard" type="radio">
                                                        <label for="visacard">Visa Card</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control wizard-required" id="honame">
                                                    <label for="honame" class="wizard-form-text-label">Holder Name*</label>
                                                    <div class="wizard-form-error"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control wizard-required" id="cardname">
                                                            <label for="cardname" class="wizard-form-text-label">Card Number*</label>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="col-lg-12 mt-2 mb-5">{{createTextValidation("cvc","cvc","CVC",'','','','required')}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">Expiry Date</div>
                                                    <div class="col-lg-12 col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option value="">Date</option>
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                                <option value="">3</option>
                                                                <option value="">4</option>
                                                                <option value="">5</option>
                                                                <option value="">6</option>
                                                                <option value="">7</option>
                                                                <option value="">8</option>
                                                                <option value="">9</option>
                                                                <option value="">10</option>
                                                                <option value="">11</option>
                                                                <option value="">12</option>
                                                                <option value="">13</option>
                                                                <option value="">14</option>
                                                                <option value="">15</option>
                                                                <option value="">16</option>
                                                                <option value="">17</option>
                                                                <option value="">18</option>
                                                                <option value="">19</option>
                                                                <option value="">20</option>
                                                                <option value="">21</option>
                                                                <option value="">22</option>
                                                                <option value="">23</option>
                                                                <option value="">24</option>
                                                                <option value="">25</option>
                                                                <option value="">26</option>
                                                                <option value="">27</option>
                                                                <option value="">28</option>
                                                                <option value="">29</option>
                                                                <option value="">30</option>
                                                                <option value="">31</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option value="">Month</option>
                                                                <option value="">jan</option>
                                                                <option value="">Feb</option>
                                                                <option value="">March</option>
                                                                <option value="">April</option>
                                                                <option value="">May</option>
                                                                <option value="">June</option>
                                                                <option value="">Jully</option>
                                                                <option value="">August</option>
                                                                <option value="">Sept</option>
                                                                <option value="">Oct</option>
                                                                <option value="">Nov</option>
                                                                <option value="">Dec</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option value="">Years</option>
                                                                <option value="">2019</option>
                                                                <option value="">2020</option>
                                                                <option value="">2021</option>
                                                                <option value="">2022</option>
                                                                <option value="">2023</option>
                                                                <option value="">2024</option>
                                                                <option value="">2025</option>
                                                                <option value="">2026</option>
                                                                <option value="">2027</option>
                                                                <option value="">2028</option>
                                                                <option value="">2029</option>
                                                                <option value="">2030</option>
                                                                <option value="">2031</option>
                                                                <option value="">2032</option>
                                                                <option value="">2033</option>
                                                                <option value="">2034</option>
                                                                <option value="">2035</option>
                                                                <option value="">2036</option>
                                                                <option value="">2037</option>
                                                                <option value="">2038</option>
                                                                <option value="">2039</option>
                                                                <option value="">2040</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                                    <input type="submit" class="form-wizard-submit float-right">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
<script src="{{asset('assets/js/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/js/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/wizard.js')}}"></script>
<script>
    jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('input').each(function(){
			var thisValue = jQuery(this).val();
            
			if( thisValue == "" && $(this).prop('required')) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
    $(document).ready(function(){
        $('.form-wizard-submit').on("click" , function(e){
            e.preventDefault();
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            var submitForm = true;
            parentFieldset.find('input').each(function(){
                var thisValue = jQuery(this).val();
                if( thisValue == "" && $(this).prop('required')) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                    submitForm = false;
                }
                else {
                    submitForm = true;
                    
                }
            });
            var first_name = $('#first_name').val();
            if(submitForm){
                $.ajax({
                    type: "POST",
                    url: "{{route('form1.foodindustryinspectionreport..storeTest')}}",
                    data: {
                        first_name: first_name,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(response){
                        $('.message-alert').append(`<div class="alert alert-success">
                            Your trip plan has been submitted successfully!
                            </div>`);
                        $("#commentForm")[0].reset();
                        setTimeout(function(){
                            $('.message-alert').hide();
                        }, 3000);
                    }
                })
            }
            
            
        })
        
    });

    
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});
});

</script>
@endsection

