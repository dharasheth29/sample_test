    <div class="col-md-3 offset-md-1" style="border:solid 1px;">
        <div class="card">        
            <div class="card-body">
                <form method="POST" action="{{ route('guestlogin') }}">
                    @csrf

                    <div class="form-group">
                        
                        <div class="col-md-2">
                            <input id="year_digit_1" type="text" placeholder="1"
                            class="trasparent_text_input_small" name="year_digit_1" 
                            value="" required>                                
                        </div>
                    </div>

                    <div class="form-group">
                        

                        <div class="col-md-2">
                            <input id="year_digit_2" type="text" placeholder="9"
                            class="trasparent_text_input_small" name="year_digit_2" 
                            value="" required> 

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <input id="year_digit_3" type="text" placeholder="0"
                            class="trasparent_text_input_small" name="year_digit_3" 
                            value="" required> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input id="year_digit_4" type="text" placeholder="0"
                            class="trasparent_text_input_small" name="year_digit_" 
                            value="" required> 
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Continue
                            </button>                               
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



