<div id="login-form" class="main-form">
	<img src="/images/7_option_logo.svg">
	<img onclick="form_close()" class="form-close" src="/images/close.png">
	<p class="title-text">Login</p>
	<div class="login-form-block">
		<p class="small-text">Your email</p>
		<input class="text-input" type="email" placeholder="adv.example@gmail.com">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<p class="small-text">Password</p>
		<input class="text-input" type="text" placeholder="create a password">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<label class="form-container">Remember me!
			<input type="checkbox">
			<span class="checkmark"></span>
		</label>
		<div class="yellow-button"><a href="#">Enter</a></div>
   		<div onclick="forgot_form()" class="black-button"><a href="#">Forgot password?</a></div>
      	<div onclick="sign_form()" class="black-button"><a href="#">Create account <img class="right-create" src="/images/right.png"></a></div>
	</div>
</div>
<div id="sign-form" class="main-form">
	<img src="/images/7_option_logo.svg">
	<img onclick="form_close()" class="form-close" src="/images/close.png">
	<p class="title-text">Sign Up</p>
	<div class="sign-form-block">
		<p class="small-text">Name</p>
		<input class="text-input" type="text" placeholder="create a name">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<p class="small-text">Skype or Telegram</p>
		<input class="text-input" type="text" placeholder="your account name">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<p class="small-text">Your email</p>
		<input class="text-input" type="email" placeholder="enter your email">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<p class="small-text">Password</p>
		<input class="text-input" type="text" placeholder="create a password">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<div class="form-currency">
			<p class="small-text">Select<br />currency</p>
			<label class="form-container">US Dollar
  				<input type="radio" checked="checked" name="radio">
  				<span class="checkmark"></span>
			</label>
			<label class="form-container">Euro
  				<input type="radio" name="radio">
  				<span class="checkmark"></span>
			</label>
		</div>
		<label class="form-container"><span class="s-small-text">Я принимаю условия Соглашения и Политики конфиденциальности и подтверждаю, что достиг совершеннолетнего возраста и полностью дееспособен.</span>
			<input type="checkbox">
			<span class="checkmark"></span>
		</label>
		<div class="sign-form-buttons">
			<div class="yellow-button"><a href="#">Start earning!</a></div>
   			<div onclick="login_form()" class="black-button"><a href="#">Already have<br />account? <img class="right-sign" src="/images/right.png"></a></div>
   		</div>
	</div>
</div>
<div id="forgot-form" class="main-form">
	<img src="/images/7_option_logo.svg">
	<img onclick="form_close()" class="form-close" src="/images/close.png">
	<div onclick="login_form()" class="black-button"><a class="back-button" href="#"><img class="left-back" src="/images/left.png">Back to Login</a></div>
	<p class="title-text">Forgot<br />password</p>
	<div class="login-form-block">
		<p class="small-text">Your email</p>
		<input class="text-input" type="email" placeholder="enter your email">
		<div class="form-line">
			<div class="form-line-left"><hr /></div>
			<div class="form-line-right"><hr /></div>
		</div>
		<div class="yellow-button big-yellow-button"><a href="#">Sent me new password</a></div>
      	<div onclick="sign_form()" class="black-button"><a href="#">Create account <img class="right-create" src="/images/right.png"></a></div>
	</div>
</div>