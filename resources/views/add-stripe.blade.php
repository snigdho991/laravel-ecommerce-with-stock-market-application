<style type="text/css">
	.outer-top-xs {
	    margin-top: 0px !important;
	}

	.StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

	.alert-danger {
		color: #fff !important;
		background-color: #DC3545 !important;
		border-color: #DC3545 !important;
	}

</style>

@extends('layouts.frontend')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled appendSize">
				
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class='container'>
               
		<div class='row single-product'>
            
			<div class="col-md-12">
	            <div class="detail-block" style="margin-bottom: 25px;">
					<div class="row wow fadeInUp">

						<div class="alert alert-danger alert-dismissible" id="card-error" style="display: none;">
			              	{{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> --}}
			                <ul id="appendCardError">
			                	
			                </ul>
		            	</div>
	                			
						<div class='col-sm-12 col-md-12 product-info-block'>
							<div class="product-info">
								<div class="form-group">
									<label for="">Card Holder</label>								
		                            <input id="card-holder-name" class="form-control unicase-form-control text-input" type="text"><br>

									<!-- Stripe Elements Placeholder -->
									<label for="">Card Details</label>
									<div id="card-element"></div> <br>

									<button id="card-button" class="btn btn-primary" data-secret="{{ $intent->client_secret }}">
									    Save Card Details
									</button>
								</div>
							</div><!-- /.product-info -->
						</div><!-- /.col-sm-12 -->
					</div><!-- /.row -->

	            </div>
	            
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- /.body-content -->

@endsection

@section('add-stripe')
	<script src="https://js.stripe.com/v3/"></script>
    <script>
    	
        window.addEventListener('load', function() {
            const stripe = Stripe('{{env('STRIPE_KEY')}}');
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;
            /*const plan = document.getElementById('subscription-plan').value;*/
            cardButton.addEventListener('click', async (e) => {
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                    console.log(error.message)
                    $('#appendCardError').empty();
                    $('#card-error').css('display', 'block');
                    $('#appendCardError').append('<li>' + error.message + '</li>');
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);
                    axios.post('/save-card',{
                        payment_method: setupIntent.payment_method,
                        /*plan : plan*/
                    }).then((data)=>{
                        /*location.replace(data.data.success_url)*/
                        
                        window.location.href = '/';
                        new Noty({ 
                          type:'success', 
                          layout:'bottomLeft', 
                          text: 'Payment added successfully !', 
                          timeout: 5000
                    	}).show();
                    });
                }
            });
        });
    </script>
@endsection