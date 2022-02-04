<div>

<form action="/AddProduct" method="POST" name="AddProduct" id="login-form" enctype="multipart/form-data">
						@csrf  
						  <fieldset class="input">
						    <p id="login-form-username">
							  <label for="modlgn_username" style="color: #255784;">Name</label>
							  				@error('Name')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						      <input id="modlgn_username" type="text" name="Name" class="inputbox" size="18" autocomplete="off" value="{{ old('Name') }}">
						    </p>

						    <p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">Description</label>
							  				@error('Description')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						      <input id="modlgn_passwd" type="text" name="Description" class="inputbox" size="18" autocomplete="off" value="{{ old('Description') }}">
							</p>
							<p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">Tari</label>
							  				@error('Tari')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						      <input id="modlgn_passwd" type="text" name="Tari" class="inputbox" size="18" autocomplete="off" value="{{ old('Tari') }}">
							</p>
                            <p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">Janr</label>
							  				@error('Janr')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						      <input id="modlgn_passwd" type="text" name="Janr" class="inputbox" size="18" autocomplete="off" value="{{ old('Janr') }}">
							</p>
                            <p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">Rejisor</label>
							  				@error('Rejisor')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						      <input id="modlgn_passwd" type="text" name="Rejisor" class="inputbox" size="18" autocomplete="off" value="{{ old('Rejisor') }}">
							</p>
                            <p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">Tevoxutyun</label>
							  				@error('Tevoxutyun')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						      <input id="modlgn_passwd" type="text" name="Tevoxutyun" class="inputbox" size="18" autocomplete="off" value="{{ old('Tevoxutyun') }}">
							</p>
							


							
							<p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">photo</label>
							  				@error('photo')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<input type="file" name="photo[]" id=" " multiple>
							</p>
                            <p id="login-form-password">
							  <label for="modlgn_passwd" style="color: #255784;">video</label>
							  				@error('video')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<input type="file" name="video[]" id=" " multiple>
							</p>
							<a href="/index"><input type="submit" name="Submit" class="button" value="save" id="sirun"></a>
						    <div class="remember">
							   
							
								
							 </div>
						  </fieldset>
						 </form>
</div>