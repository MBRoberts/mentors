@extends('layouts.master')

@section('title', 'Profile')

@section('links')
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	{{-- Custom CSS --}}
    <link rel="stylesheet" href="/css/profile.css">
@stop

@section('content')
	<div class="container">
	    <div class="fb-profile">
	    	<div class="crop">
	    		<div class="mast__bg" id="particles-js"></div>
    		</div>
	        <img align="left" class="fb-image-profile thumbnail" src="http://i2.wp.com/codeup.com/wp-content/uploads/2014/10/FW8A6296.jpg?resize=1024%2C1024" alt="Profile image example"/>
	        <div class="fb-profile-text">
	            <h1 class="mast__title title-span">Ryan Orsinger</h1>
	            <p class="mast__text text-span">Codeup Instructor</p>
	            <p class="mast__text text-span">Do the loop.</p>
	        </div>
	    </div>

	    <div class="bio">
	    	<h2>Bio</h2>
	    	<hr>
	    	<p>
		    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio laudantium tenetur quia modi velit obcaecati hic, tempore est beatae consequatur, illum dolores voluptate! Molestias consequatur, suscipit, nobis qui quidem explicabo!
	    	</p>
	    </div>
	</div> <!-- /container -->  
@stop


@section('scripts')

    {{-- Particles JS --}}
    <script type="text/javascript" src="/js/particles.js"></script>
    {{-- Custom JS --}}
    <script src="/js/profile.js"></script>
@stop