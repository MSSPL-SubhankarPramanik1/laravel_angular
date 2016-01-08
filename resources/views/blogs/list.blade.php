@extends('header')

@section('title') Blogs @stop

@section('content')
<div class="row">
	<div class="col-md-8" ng-controller="blogsController">

		<h1>Latest Posts</h1>

		<article ng-repeat="blog in blogs">
			<h2><a href="singlepost.html"><%= blog.name %></a></h2>

	        <div class="row">
	          	<div class="col-sm-6 col-md-6">
	          		<span class="glyphicon glyphicon-folder-open"></span> &nbsp;<a href="#">Signs</a>
	          		&nbsp;&nbsp;<span class="glyphicon glyphicon-bookmark"></span> <a href="#">Aries</a>, <a href="#">Fire</a>, <a href="#">Mars</a>
	          	</div>
	          	<div class="col-sm-6 col-md-6">
	          		<span class="glyphicon glyphicon-pencil"></span> <a href="singlepost.html#comments">20 Comments</a>			          		
	          		&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <%= blog.created_at %>August 24, 2013 9:00 PM			          		
	          	</div>
	          </div>

	          <hr>

	          <!-- <img src="http://placehold.it/900x300" class="img-responsive"> -->

	          <br />

	          <p class="lead"><%= blog.content %></p>

			  <p class="text-right">
		          <a href="singlepost.html">
		          	continue reading...
		          </a>
		      </p>
	          <hr>
		</article>	
			
		<ul class="pager">
			<li class="previous"><a href="#">&larr; Previous</a></li>
			<li class="next"><a href="#">Next &rarr;</a></li>
		</ul>

	</div>
	<div class="col-md-4">

		<div class="well text-center">
			<p class="lead">
				Don't want to miss updates? Please click the below button!
			</p>
			<button class="btn btn-primary btn-lg">Subscribe to my feed</button>
		</div>

		<!-- Latest Posts -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Latest Posts</h4>
			</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="singlepost.html">1. Aries Sun Sign March 21 - April 19</a></li>
				<li class="list-group-item"><a href="singlepost.html">2. Taurus Sun Sign April 20 - May 20</a></li>
				<li class="list-group-item"><a href="singlepost.html">3. Gemini Sun Sign May 21 - June 21</a></li>
				<li class="list-group-item"><a href="singlepost.html">4. Cancer Sun Sign June 22 - July 22</a></li>
				<li class="list-group-item"><a href="singlepost.html">5. Leo Sun Sign July 23 - August 22 </a></li>
			</ul>
		</div>

		<!-- Categories -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Categories</h4>
			</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#">Signs</a></li>
				<li class="list-group-item"><a href="#">Elements</a></li>
				<li class="list-group-item"><a href="#">Planets</a></li>
				<li class="list-group-item"><a href="#">Cusps</a></li>
				<li class="list-group-item"><a href="#">Compatibility</a></li>
			</ul>
		</div>

		<!-- Tags -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Tags</h4>
			</div>
			<div class="panel-body">
				<ul class="list-inline">
					<li><a href="#">Aries</a></li>
					<li><a href="#">Fire</a></li>
					<li><a href="#">Mars</a></li>
					<li><a href="#">Taurus</a></li>
					<li><a href="#">Earth</a></li>
					<li><a href="#">Moon</a></li>
					<li><a href="#">Gemini</a></li>
					<li><a href="#">Air</a></li>
					<li><a href="#">Mercury</a></li>
					<li><a href="#">Cancer</a></li>
				</ul>
			</div>
		</div>

		<!-- Recent Comments -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Recent Comments</h4>
			</div>
			<ul class="list-group">
				<li class="list-group-item"><a href="#">I don't believe in astrology but still your writing style is really great! - <em>john</em></a></li>
				<li class="list-group-item"><a href="#">Wow.. what you said is really true! I'm an aries though - <em>Anto</em></a></li>
				<li class="list-group-item"><a href="#">Does capricorn and aries is compatibile? - <em>Sarah</em></a></li>
				<li class="list-group-item"><a href="#">I'm a cancer woman been in love with Leo. Will this work? - <em>Mary</em></a></li>
			</ul>
		</div>

	</div>
</div>

<script src="<?= asset('app/controllers/blogs.js') ?>"></script>        

@stop
