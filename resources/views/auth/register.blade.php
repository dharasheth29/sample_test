@extends('layouts.app')

@section('content')
<script>
jQuery(document).ready(function($) {
    $('.datepicker').datepicker({
        dateFormat: "dd/mm/yy"
    });
});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><h2>CREATE ACCOUNT</h2></div>
                <div class="card-header text-center">Complete your account below</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">                        
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="EMAIL"
                                onclick="this.placeholder = ''"
                                onblur="this.placeholder = 'EMAIL'"
                                class="trasparent_text_input_extra_large_small_font{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" 
                                value="" required> 

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                               
                            </div>
                        </div>
                        <div class="form-group row">                        
                            <div class="col-md-2">                                                              
                                <select id="title" name="title" class="form-group" placeholder="TITLE" required>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs.</option>                                    
                                </select>                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                        
                                <div class="col-md-6">                                                              
                                        <input id="firstname" type="text" placeholder="FIRST NAME"
                                        onclick="this.placeholder = ''"
                                        onblur="this.placeholder = 'FIRST NAME'"
                                        class="trasparent_text_input_large_small_font" name="firstname" 
                                        value="" required>                              
                                    </div>
                            </div>
                            <div class="form-group">                        
                                    <div class="col-md-6">                                                              
                                        <input id="lastname" type="text" placeholder="LAST NAME"
                                        onclick="this.placeholder = ''"
                                        onblur="this.placeholder = 'LAST NAME'"
                                        class="trasparent_text_input_large_small_font" name="lastname" 
                                        value="" required>                              
                                    </div>
                            </div>
                        </div>
                        <div class="form-group row">                          
                            <div class="col-md-6">
                                <input id="mobile" type="number" placeholder="MOBILE"
                                onclick="this.placeholder = ''"
                                onblur="this.placeholder = 'MOBILE'"
                                 class="trasparent_text_input_extra_large_small_font{{ $errors->has('mobile') ? ' is-invalid' : '' }}" 
                                 name="mobile"  value="{{ old('mobile') }}"  minlength="10" size="10" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">                          
                                    <div class="col-md-6">
                                        <input id="postcode" type="number"  placeholder="POSTCODE" 
                                        onclick="this.placeholder = ''"
                                        onblur="this.placeholder = 'POSTCODE'"
                                        class="trasparent_text_input_large_small_font{{ $errors->has('postcode') ? ' is-invalid' : '' }}" 
                                        name="postcode" value="{{ old('postcode') }}" maxlength="4" size="4" required>
        
                                        @if ($errors->has('postcode'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('postcode') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-6">
                                        <input id="dob" type="text" class="trasparent_text_input_large_small_font datepicker"
                                        name="dob" required placeholder="DD/MM/YYYY"
                                        onclick="this.placeholder = ''"
                                        onblur="this.placeholder = 'DD/MM/YYYY'" size="10"  required>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" 
                                class="trasparent_text_input_extra_large_small_font{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required placeholder="PASSWORD"
                                onclick="this.placeholder = ''"
                                onblur="this.placeholder = 'PASSWORD'" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="checkbox" id="terms" name="terms" required> I agree to<a href="#" class="btn btn-link">terms of use</a>
                            </div>
                        </div>         
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
