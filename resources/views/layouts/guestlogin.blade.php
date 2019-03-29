<div class="col-md-4 offset-md-1">            
    <div class="card-body">
        <form method="POST" action="{{ route('guestlogin') }}">
            @csrf
            <div class="row">
                <div class="form-group">                        
                    <div class="col-md-2">
                        <input id="year_digit_1" type="text" placeholder="1"
                        onclick="this.placeholder = ''"
                        onblur="this.placeholder = '1'"
                        class="trasparent_text_input_small" name="year_digit_1" 
                        value="1" required>     
                    </div>
                </div>
                <div class="form-group">                  
                    <div class="col-md-2">
                        <input id="year_digit_2" type="text" placeholder="9"
                        onclick="this.placeholder = ''"
                        onblur="this.placeholder = '9'"
                        class="trasparent_text_input_small" name="year_digit_2" 
                        value="9" required> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <input id="year_digit_3" type="text" placeholder="0"
                        onclick="this.placeholder = ''"
                        onblur="this.placeholder = '0'"
                        class="trasparent_text_input_small_light" name="year_digit_3" 
                        value="" required> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <input id="year_digit_4" type="text" placeholder="0"
                        onclick="this.placeholder = ''"
                        onblur="this.placeholder = '0'"                            
                        class="trasparent_text_input_small_light" name="year_digit_4" 
                        value="" required> 
                    </div>
                </div>
            </div>
            <div class="form-group row row" style="padding-top:10px;">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">
                        Continue
                    </button>                               
                </div>
            </div>
        </form>
    </div>
</div>



