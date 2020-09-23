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

						<div class='col-sm-12 col-md-12 product-info-block'>
							<div class="product-info">
                            <form action="{{ route('buy.via.card') }}" method="post">
                                @csrf
								<div class="card">
                                  <h4 class="card-header">Payable Amount : <b>${{ $be_paid }}</b></h4>
                                  <input type="hidden" value="{{ $be_paid }}" name="amount">
                                  <div class="card-body">
                                    <p class="card-text">You have linked your credit card information via Stripe.</p>
                                    <h5 class="card-header">E-mail : <b>{{ Auth::user()->email }}</b></h5>
                                    <h5 class="card-header">Customer ID : <b>{{ Auth::user()->stripe_id }}</b></h5>

                                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                                    <button class="btn btn-primary" type="submit">Confirm Pay</button>
                                  </div>
                                </div>
                            </form>
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