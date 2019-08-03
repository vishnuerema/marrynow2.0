
@include('header')
<hr class="menu_bord wow lightSpeedIn" style="visibility: visible; animation-name: lightSpeedIn;">
<!-- header -->
<!-- edit payment -->
<section class="payments">
  </div>
	 <div class="container">
		<div class="payment_matchss_comm">
			<div class="payment_matchss_head">
				<p class="payment_p_head">Payment Plans</p>
				<p class="payment_p_head1">An Expert Relationship Manager with a proven track record in matchmaking will search, shortlist and find the right match for you</p>
			</div>
      <div class="dropdown payments_drop">
        <select onchange="paydrop()" id="payselect" class="form-control drrop_pay">
        <option value="500"><a class="dropdown-item" >Silver pack (₹500)</a>  
        <option value="1000"><a class="dropdown-item" >Gold pack (₹1000)</a></option>
        <option value="1500"><a class="dropdown-item" >Platinam(₹1500)</a></option>
        <option value="2000"><a class="dropdown-item" >Emerald(₹2000)</a></option>
        <option value="3500"><a class="dropdown-item" >Sapphire(₹3500)</a></option>
        <option value="5000"><a class="dropdown-item" >Pearl(₹5000)</a></option>
        <option value="10000"> <a class="dropdown-item" >Ruby(₹10000)</a></option>
        <option value="20000"><a class="dropdown-item" >Alexandrite(₹20000)</a></option>
        <option value="50000"><a class="dropdown-item" >Opal(₹50000)</a></option>
        <option value="100000"><a class="dropdown-item" >Garnet(₹100000)</a></option>
        <option value="500000"><a class="dropdown-item" >diamond(₹500000)</a></option>
      </select>
      </div>
			<div class="payment_matchss_body">
				<div class="payment_mtvss_body">
          <div class="payment_mtvss_basic">
            <p class="basic_pay">Silver pack</p>
          </div>
          <div class="payment_mtvss_amt">
            <p class="basic_amt">Rs.500</p>
          </div>
          <div class="payment_mtvss_vali">
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt">User can view all profiles</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt view">User can view 10 numbers to see</div> 
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt horoscope">Not provided with brokers assistance and horoscope checker</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt background_check">Not provided with background check</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro">Not provided with life planner</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro1">Not provided with full life problem solver</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro2">Not provided marriage interview</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro3">Not provided marriage meeting one on one</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro4">Not provided marriage visiting each other houses</div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro5">Not provided health check up </div>
            <div class="basic_vali_tick"><i class="fas fa-check"></i></div>
            <div class="basic_vali_cnt planner_pro16">Not provided mental fitness</div>
          </div>
          <div class="payment_mtvss_btn">
          
              <form action="make_basic_payment"  id="payselt1" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="50000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_gold_payment" class="pay_none" id="payselt11" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="100000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_platinum_payment" class="pay_none" id="payselt12" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="150000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_emerald_payment" class="pay_none" id="payselt13" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="200000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_sapphire_payment" class="pay_none" id="payselt14" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="350000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form><form action="make_pearl_payment" class="pay_none" id="payselt15" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="500000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_rubby_payment" class="pay_none" id="payselt16" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="1000000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_alexandrite_payment" class="pay_none" id="payselt17" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb "
                    data-amount="2000000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_operl_payment" class="pay_none" id="payselt18" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="5000000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_garnet_payment" class="pay_none" id="payselt19" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="10000000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
              <form action="make_diamond_payment" class="pay_none" id="payselt20" method="POST">
                <!-- Note that the amount is in paise = 50 INR -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_live_h5BGxXf2NYXfkb"
                    data-amount="50000000"
                    data-buttontext="Pay with Razorpay"
                    data-name="Marrynow.in"
                    data-description="marrynow payment"
                    data-image="images/5.png"
                    data-prefill.name="{{$usr_name[0]->user_name}}"
                    data-prefill.email="{{$usr_name[0]->user_email}}"
                    data-theme.color="#702775"
                ></script>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="Hidden Element" name="hidden">
              </form>
          </div>
        </div>
			</div>
		</div>
    
</section>
 @include('footer')