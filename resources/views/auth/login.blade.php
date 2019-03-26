        <div class="col-md-3 offset-md-1" style="border:solid 1px;">
            <div class="card">           

                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                           

                            <div class="col-md-6 offset-md-1">
                                <input id="email" type="email" placeholder="Email"
                                class="trasparent_text_input_large {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                class="trasparent_text_input_large {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">                               

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       Forgot your password
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                        Continue
                                    </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">  
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                            Register for a new account
                                         </a>                          
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
