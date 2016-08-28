<?php
include_once("includes/header.php");
include_once("includes/navbar.php");
?>

<div class="container-fluid container-page">
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Forum</a></li>
		<li class="active">Some Forum</li>
	</ol>
	<h3>Some Forum</h3>
	<div class="small"style="margin-bottom: 15px">
		blah blah blah...blah blah blah...<br>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New Thread</a>
		</div>
		<div class="col-xs-6">
			<nav class="pull-right" aria-label="Page navigation">
				<ul class="pagination">
					<li class="previous disabled">
						<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="active">
						<a href="#">1 <span class="sr-only">(current)</span></a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-middle table-primary">
			<thead>
				<tr>
					<th style="width:65%">Title</th>
					<th class="text-center" style="width:10%">Author</th>
					<th class="text-center" style="width:8%">Replies</th>
					<th>Last Post</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div><a href="#">Hello World!</a></div>
						<div class="small">2016-8-27 7:53PM</div>
					</td>
					<td class="text-center"><a href="#">Admin</a></td>
					<td class="text-center">124</td>
					<td>
						<div>By <a href="#">Someone</a></div>
						<div class="small">2016-8-27 7:57PM</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="#">Where is ds?</a></div>
						<div class="small">2016-8-27 8:12PM</div>
					</td>
					<td class="text-center"><a href="#">honfai99</a></td>
					<td class="text-center">78</td>
					<td>
						<div>By <a href="#">Someone</a></div>
						<div class="small">2016-8-27 8:20PM</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="#">How is it going?</a></div>
						<div class="small">2016-8-28 12:29PM</div>
					</td>
					<td class="text-center"><a href="#">ds</a></td>
					<td class="text-center">20</td>
					<td>
						<div>By <a href="#">Someone</a></div>
						<div class="small">2016-8-28 12:30PM</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="#">Who is Justin Bieber?</a></div>
						<div class="small">2016-8-28 12:25PM</div>
					</td>
					<td class="text-center"><a href="#">justin</a></td>
					<td class="text-center">12</td>
					<td>
						<div>By <a href="#">Someone</a></div>
						<div class="small">2016-8-28 12:26PM</div>
					</td>
				</tr>
				<tr>
					<td>
						<div><a href="#">Why did Harry Styles cut his hair short?</a></div>
						<div class="small">2016-8-28 11:32PM</div>
					</td>
					<td class="text-center"><a href="#">harry</a></td>
					<td class="text-center">8</td>
					<td>
						<div>By <a href="#">Someone</a></div>
						<div class="small">2016-8-28 11:39PM</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New Thread</a>
		</div>
		<div class="col-xs-6">
			<nav class="pull-right" aria-label="Page navigation">
				<ul class="pagination">
					<li class="previous disabled">
						<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="active">
						<a href="#">1 <span class="sr-only">(current)</span></a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<?php include_once("includes/footer.php"); ?>