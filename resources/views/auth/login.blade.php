<div class="col-md-4">
    <div class="card-body">                      
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <div class="col-md-6 offset-md-1">
                    <input id="email" type="email" placeholder="Email"
                    onclick="this.placeholder = ''"
                    onblur="this.placeholder = 'EMAIL'"
                    class="trasparent_text_input_large_small_font {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-1">
                    <input id="password" type="password" placeholder="Password"
                    onclick="this.placeholder = ''"
                    onblur="this.placeholder = 'PASSWORD'"
                    class="trasparent_text_input_large_small_font {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row" style="padding-top:10px;">
                <div class="col-md-8">                               
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="#">
                            Forgot your password
                        </a>
                    @endif
                    <button type="submit" class="btn btn-primary">
                        Continue
                    </button>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">  
                    <a class="btn btn-link" href="{{ route('register') }}">
                        Register for a new account
                    </a>                          
                </div>
            </div>
        </form>                
    </div>
</div>