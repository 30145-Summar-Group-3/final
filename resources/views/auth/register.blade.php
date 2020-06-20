@extends('layouts.app')

@section('content')
<link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
						@csrf
                        <div class="form fA tabs">
					
					
		<div class="formContent tabsBody">
			<div class="tab current" id="accessTabSignIn" role="tabpanel" aria-hidden="false" aria-labelledby="accessTab-1">
			
				<form action="{{ route('login') }}" method="POST" id="frmHeaderLogin">
					
					<header class="formHead">
						<p class="formTitle">{{ __('Register') }}</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>

                        <div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderLoginEmail" name="name" placeholder="Name" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

						<div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderLoginEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderLoginPassword" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderLoginPassword" name="password" placeholder="Password" data-msg-required="Password is required" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                       	</div>
                           <div class="formRow">
							<label for="frmHeaderLoginPassword" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderLoginPassword" name="password_confirmation" placeholder="Confirm Password" data-msg-required="Password is required" />
                               
                            </div>
                       	</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formRow">
								<div class="checkbox">
									<input type="checkbox" id="frmHeaderLoginAccept" name="accept" value="1" />
									<label for="frmHeaderLoginRemember">Accept of conditions</label>
								</div>
					
								
							</div>
					
                            
                            <div class="col-md-8 offset-md-4">
                            
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">{{ __('Register') }}</button>
                            </div>
					        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
