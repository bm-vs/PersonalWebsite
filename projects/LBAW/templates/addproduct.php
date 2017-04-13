<div class="container-fluid" id="addproduct-body">
	<h1>Add New Product</h1>
	<hr>

    <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="addproduct-content">
		<div>
			<label for="name"><span class="glyphicon glyphicon-tag"></span> Name</label>
			<input type="text" id="name">
		</div>
		<div>
			<label for="sm-description"><span class="glyphicon glyphicon-tags"></span> Small description</label>
			<textarea rows="5" id="sm-description"></textarea>
		</div>
		<div>
			<label for="types"><span class="glyphicon glyphicon-list"></span> Type</label>
			<div class="dropdown" id="types">
				<button class="btn btn-default dropdown-toggle" id="search-order-bttn" data-toggle="dropdown">
					Smartphone &nbsp;&nbsp;<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a>Smartphone</a></li>
					<li><a>Tablet</a></li>
					<li><a>Peripheral</a></li>
					<li><a>Computer</a></li>
					<li><a>Gaming</a></li>
					<li><a>Camera</a></li>
					<li><a>Accessories</a></li>
				</ul>
			</div>
		</div>
		<div>
			<label for="price"><span class="fa fa-money"></span> Price</label>
			<input type="number" id="price">
		</div>
		<div>
			<label for="color"><span class="fa fa-tint"></span> Color</label>
			<div id="color">
				<li><label for='black'>Black </label><div class='custom-checkbox'><input id='black' type='checkbox' value=''><label for='black'></label></div></li>
				<li><label for='white'>White </label><div class='custom-checkbox'><input id='white' type='checkbox' value=''><label for='white'></label></div></li>
				<li><label for='golden'>Golden </label><div class='custom-checkbox'><input id='golden' type='checkbox' value=''><label for='golden'></label></div></li>
				<li><label for='silver'>Silver </label><div class='custom-checkbox'><input id='silver' type='checkbox' value=''><label for='silver'></label></div></li>
			</div>
		</div>
		<div>
			<label for="qty"><span class="glyphicon glyphicon-tags"></span> Quantity</label>
			<input type="number" id="qty">
		</div>
		<div>
			<label><span class="glyphicon glyphicon-picture"></span> Images</label>
			<label for="image-input" id="browse-btn">Browse&hellip;</label>
			<input id="image-input" type="file" style="display: none;">
		</div>
		<div>
			<label for="lg-description"><span class="glyphicon glyphicon-tags"></span> Full description</label>
			<textarea rows="10" maxlength="5" id="lg-description"></textarea>
		</div>
		<div>
			<button id="addbutton" type="button" class="btn btn-primary btn-block profileButton">Add</button>
		</div>
    </div>
</div>