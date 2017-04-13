<div id="ban-users-container">
	<div class="container">
		<div class="row" style="margin-top: 2%;">
			<div class="col-xs-8 col-sm-8" id="search-users">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xs-4 col-sm-4" id="reports-button-container">
				<button id="reports-button" type="button" class="btn btn-block btn-danger">Reports</button>
			</div>
		</div>

		<div class="row" style="margin-top: 2%;">
			<div class="col-xs-12">
				<div class="table-responsive">

					<table id="mytable" class="table table-hover">

						<thead>

						<th><div class='custom-checkbox'><input id='checkall' type='checkbox' value=''><label for='checkall'></label></div></th>
						<th>Username</th>
						<th>Email</th>
						<th>Report</th>
						<th>Ban</th>
						</thead>
						<tbody>

						<tr>
							<td><div class='custom-checkbox'><input id='checkthis1' type='checkbox' value=''><label for='checkthis1'></label></div></td>
							<td>António Melo</td>
							<td>antoniomelo@gmail.com</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#show_bio" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td><div class='custom-checkbox'><input id='checkthis2' type='checkbox' value=''><label for='checkthis2'></label></div></td>
							<td>Bruno Santos</td>
							<td>brunosantos@gmail.com</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#show_bio" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td><div class='custom-checkbox'><input id='checkthis3' type='checkbox' value=''><label for='checkthis3'></label></div></td>
							<td>Tiago Grosso</td>
							<td>tiago grosso@gmail.com</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#show_bio" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td><div class='custom-checkbox'><input id='checkthis4' type='checkbox' value=''><label for='checkthis4'></label></div></td>
							<td>Rui Oliveira</td>
							<td>ruioliveira@gmail.com</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#show_bio" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td><div class='custom-checkbox'><input id='checkthis5' type='checkbox' value=''><label for='checkthis5'></label></div></td>
							<td>Professor</td>
							<td>professor@gmail.com</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#show_bio" ><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						</tbody>
					</table>

					<div class="clearfix"></div>
					<ul class="pagination pull-right">
						<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
					</ul>

				</div>

			</div>
		</div>
	</div>

	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title custom_align" id="Heading">Ban user</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">
						<p><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to ban this user?</p>
						<p>Explain the reason to inform the user.</p>
					</div>
					<div class="form-group">
						<label for="comment">Reason:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
				<div class="modal-footer ">
					<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
				</div>
			</div>
			<div class="col-xs-12">
			</div>
		</div>
	</div>

	<div class="modal fade" id="show_bio" tabindex="-1" role="dialog" aria-labelledby="show_bio" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title custom_align" id="Heading">Description</h4>
				</div>
				<div class="modal-body">
					Curabitur aliquet felis rutrum ex aliquam laoreet. Pellentesque porttitor, tortor convallis varius sagittis, felis turpis commodo lacus, feugiat auctor est massa at erat.
					Fusce varius cursus dignissim. Integer sed augue semper, interdum massa ac, tincidunt metus. Morbi cursus ante eget pellentesque gravida.
					Cras vel feugiat mi. Etiam magna sapien, euismod sit amet mollis in, ornare eget ipsum. Etiam congue eu dolor ut vulputate.
					Pellentesque tortor lorem, malesuada vitae efficitur vitae, efficitur vel eros.
					Sed iaculis, ante eget porttitor fermentum, massa nulla dictum augue, vitae euismod magna arcu in orci.
				</div>
			</div>
		</div>
	</div>
</div>