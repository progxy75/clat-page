



<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>form</title>
	
	<link href="https://www.imsindia.com/ims-india/wp-content/themes/ims-india-new/css/fonts.css" rel="stylesheet"/>
	<link rel='stylesheet' id='bootstrap-css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css?ver=6.1.3' type='text/css' media='all' />
	<link rel='stylesheet' id='main-css' href='https://www.imsindia.com/ims-india/wp-content/themes/ims-india-new/css/main.css?ver=6.1.3' type='text/css' media='all' />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js#asyncload"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#Product').on('change',function(){
				var Product = $(this).val();
				var campaign = 1046;
				
				if(Product){
					$.ajax({
						type:'POST',
						url:'websitenewgetcity2.php',
						data: 'txtproduct='+Product+'&txtlimacampaign='+campaign,
						success:function(html){
							$('#LeadCity').html(html);
						}
					}); 
				}else{
					$('#LeadCity').html('<p>Select Program first</p>'); 
				}
			});

			$('#LeadCity').on('change',function(){
				var LeadCity = $(this).val();
				var Product = $('#Product').find(":selected").val();
				var campaign = 1046;
				if(LeadCity){
					$.ajax({
						type:'POST',
						url:'websitenewgetcenter2.php',
						data: 'txtproduct='+Product+'&LeadCity='+LeadCity+'&txtlimacampaign='+campaign,
						success:function(html){
							$('#Center').html(html);
						}
					}); 
				}else{
					$('#Center').html('<option value="">Select centre first</option>'); 
				}
			});
			
		});
	</script>
	
	<style>
		.form-control{color: #7f919a; font-size: 0.9rem; height: 46px !important; border: 1px solid #7f919a;}
	</style>
</head>

<body style="background-color: none !important;">
	
		<div class="registration-form__body hideAfterSubmit">
              <h4 class="h4 text-438 fnt-700 mb-0">Please fill in below details</h4>
              <h6 class="text-438 text-16 fnt-500 mb-3"></h6>
              <form autocomplete="off" action="website-response.php" class="free-consultation-form-sub" method="POST" data-parsley-validate="" id="onlineform" onsubmit="return checkForm(this);">
			  
				<input type="hidden" name="action_type" value="send_data">
			  
                <div class="form-div">
                  <div class="row">
                    <div class="col-6">
                      <div class="row">
                        <div class="form-required col-md-12">
                          <div class="form-fields">
                            <input class="input" type="text" data-parsley-error-message="Name Required" autocomplete="off" id="FirstName" name="FirstName" onkeydown="return /[a-z]/i.test(event.key)" oninvalid="this.setCustomValidity('This Field is Required.')" onchange="try{setCustomValidity('')}catch(e){}" oninput="setCustomValidity(' ')" required="required"/>
                            <label class="form-fields__label">First name</label><span class="form-fields__border"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="row">
                        <div class="form-required col-md-12">
                          <div class="form-fields">
                            <input class="input" type="text" id="LastName" data-parsley-error-message="Name Required" name="LastName" autocomplete="off" required="required"/>
                            <label class="form-fields__label">Last name</label><span class="form-fields__border"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <div class="row">
                        <div class="form-required col-md-12">
                          <div class="form-fields">
                            <input class="input" type="email" name="Email" id="leademailId" value="" data-parsley-error-message="Email is not valid" autocomplete="off" required="required"/>
                            <label class="form-fields__label">Email ID</label><span class="form-fields__border"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="form-required col-md-12">
                          <div class="form-fields">
                            <input class="input" type="text" id="Mobile" name="Mobile" value="" data-parsley-error-message="Enter a 10 digit mobile number" minlength="10" maxlength="10" data-parsley-type="number" autocomplete="off" data-parsley-trigger="keyup" required="required"/>
                            <label class="form-fields__label">Mobile Number</label><span class="form-fields__border"></span>
                          </div>
                        </div>
                      </div>
                    </div>
          
          
                                        <div class="col-12">
                      <div class="row">
                        <div class="form-required col-md-12">
							<select class="form-control" id="Product" name="Product" required>
								<option value="">Select Program</option>
								

									<option value="3-yr LLB_1236">3-yr LLB</option>
									
									<option value="BBA_1198">BBA</option>
									
									<option value="CAT_1193">CAT</option>
									
									<option value="CET_1197">CET</option>
									
									<option value="CMAT_1224">CMAT</option>
									
									<option value="CUET_1239">CUET</option>
									
									<option value="GATE_1240">GATE</option>
									
									<option value="GMAT_1195">GMAT</option>
									
									<option value="GRE_1196">GRE</option>
									
									<option value="IELTS_1199">IELTS</option>
									
									<option value="Law_1214">Law</option>
									
									<option value="SAT_1231">SAT</option>
									
									<option value="TOEFL_1200">TOEFL</option>
									
									<option value="Venturi-IELTS_1241">Venturi-IELTS</option>
									
															</select>
						</div>
                      </div>
                    </div>
					<div class="col-12">
                      <div class="row">
                        <div class="form-required col-md-12">
							<select class="form-control" id="LeadCity" name="LeadCity" required>
								<option value="">Select City</option>
							</select>
						  
						</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="form-required col-md-12">
							<select class="form-control" id="Center" name="Center" required>
								<option value="">Select Preferred IMS Center</option>
								
							</select>
						</div>
                      </div>
                    </div>
                    
										
										
					
                    <!--<div class="col-12">
                      <div class="row">
                        <div class="form-required col-md-12">
							<select class="form-control" id="PreferredTime" name="PreferredTime" required>
								<option value="">Select Preferred Time </option>
								<option value="Immediate">Immediate</option>
								<option value="10 AM to 12 PM">10 AM to 12 PM</option>
								<option value="12 PM to 2 PM">12 PM to 2 PM</option>
								<option value="2 PM to 4 PM">2 PM to 4 PM</option>
								<option value="4 PM to 6 PM">4 PM to 6 PM</option>
								<option value="6 PM to 8 PM">6 PM to 8 PM</option>
							</select>
							
							<div class="box Immediate" style="margin-top: 10px;"><p><strong>Note:</strong> Immediate call back available between 10am to 7pm.</p></div>
						</div>
						
                      </div>
                    </div>-->
                    
                    
                  </div>
                </div>
				
				
				
                <input type="hidden" class="form-control" id="CampaingName" name="CampaingName"
					value="" placeholder="Source" readonly>
				
				<input type="hidden" class="form-control" id="SourceMedium" name="SourceMedium"
					value="" placeholder="Source" readonly>
				
				<input type="hidden" class="form-control" id="LeadSource" name="LeadSource"
					value="a0J2u000004IKw7EAG" placeholder="Source" readonly>

				<input type="hidden" class="form-control" id="LeadMode" name="LeadMode"
					value="a092u00000DpcldAAB" placeholder="Mode" readonly>

				<input type="hidden" class="form-control" id="CampaingId" name="CampaingId"
					value="" placeholder="campaign id" readonly>
				<input type="hidden" class="form-control" id="txtlimacampaign" name="txtlimacampaign" value="1046">
                <div class="col-12">
                  <div class="form-submission w-100 text-center">
				  <input type="submit" class="button button-primary" id="sub" value="Submit" style="background-color: orange; color: white; padding: 10px;" name="myButton"/>
                                      </div>
                </div>
              </form>
            </div>
    
<script>

  var checkForm = function(form) { /* Submit button was clicked */

    //
    // check form input values
    //

    form.myButton.disabled = true;
    form.myButton.value = "Please wait...";
    return true;
  };

  var resetForm = function(form) { /* Reset button was clicked */
    form.myButton.disabled = false;
    form.myButton.value = "Submit";
  };

</script>

<script>
$(document).ready(function(){
    $("#PreferredTime").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

</body>

</html>