<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		    </button>
			<a class="navbar-brand" href="#">WatchOut</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			    <li><a href="#">Home</a></li>
			    <li><a href="#about">About</a></li>
			    <li><a href="#contact">Contact</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
			  	<li><a href="<?php echo Yii::app()->createUrl('login'); ?>">Login</a></li>
			</ul>
		</div>
	</div>
</div>