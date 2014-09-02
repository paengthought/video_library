<div class="row">
	<div class="col-xs-12">
				
		<ul class="nav nav-tabs" role="tablist">
		  <li class="active"><a href="#tabSearch" role="tab" data-toggle="tab">Search</a></li>
		  <li><a href="#tabAddNew" role="tab" data-toggle="tab" class="glyphicon glyphicon-plus"> Add New</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="tabSearch">
				<br />
				<form id="formSearch">
					<div class="form-group">
					<label for="formTitle">Title</label>
					<input type="text" name="title" class="form-control" id="formTitle" />
					</div>

					<div class="form-group">
					<label for="formGenre">Genre</label>
					<input type="text" name="genre" class="form-control" id="formGenre" />
					</div>

					<div class="form-group">
					<label for="formArtist">Artist</label>
					<input type="text" name="artist" class="form-control" id="formArtist" />
					</div>

					<div class="form-group">
					<label for="formYear">Year</label>
					<input type="text" name="year" class="form-control" id="formYear" />
					</div>

					<div class="form-group">
					<label for="formRating">Rating</label>
					<select class="form-control" id="formRating" name="ratings">
					<option value=""></option>
					<option value="5">5</option>
					<option value="4">4</option>
					<option value="3">3</option>
					<option value="2">2</option>
					<option value="1">1</option>
					</select>
					</div>

					<div class="form-group pull-right">
					<input type="submit" id="submitSearch" value="Search" class="btn btn-primary" />
					</div>
				</form>
			</div>
			<div class="tab-pane" id="tabAddNew">
				<br />
				<form id="formAddNew">
					<div class="form-group">
					<label for="formTitle">Title</label>
					<input type="text" class="form-control" id="formTitle" name="title" />
					</div>

					<div class="form-group">
					<label for="formGenre">Genre</label>
					<input type="text" class="form-control" id="formGenre" name="genre"  />
					</div>

					<div class="form-group">
					<label for="formArtist">Artist</label>
					<input type="text" class="form-control" id="formArtist" name="artist"  />
					</div>

					<div class="form-group">
					<label for="formYear">Year</label>
					<input type="text" class="form-control" id="formYear" name="year"  />
					</div>

					<div class="form-group">
					<label for="formRating">Rating</label>
					<select class="form-control" id="formRating" name="ratings" >
					<option value=""></option>
					<option value="5">5</option>
					<option value="4">4</option>
					<option value="3">3</option>
					<option value="2">2</option>
					<option value="1">1</option>
					</select>
					</div>
					
					<div class="form-group">
					<label for="formDetails">Location</label>
					<input type="text" class="form-control" id="formYear" name="details"  />
					</div>

					<div class="form-group pull-right">
					<input type="submit" id="submitAddNew" value="Save" class="btn btn-primary" />
					</div>
				</form>
			</div>
		</div>
	

	</div>
</div>