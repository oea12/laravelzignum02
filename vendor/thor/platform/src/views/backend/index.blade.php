@extends('thor::backend.layout')
@section('main')
<br>
<div class="row">
	<div class="jumbotron">
		<h1>Zignum  Admin Panel</h1>
		<p>From here you can manage the contents of the pages, and replace fruits, places and companions that are displayed in the game of "mezclas de la vida".</p>

		<p>And also replace the ID of the video vine to be shown in the section of "lo más nuevo".</p> 

		<p>You can also add new events and photos in the Events section. </p>

		<p>Within the section of cocktails, you can add different cocktails for Zignum Silver and Reposado. You can add a photo of cocktail and its icon, name, and the recipe for its preparation.</p>
	</div>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><i class="fa fa-globe fa-fw"></i> Place Section</div>
			<div class="panel-body">
				You can replace the information of the Places that the mix of life is shown during the game. Only items listed will be those shown on the page.
				<br>
				<br>
				When clicking on <button class="btn btn-success">Replace</button>  the form will be displayed, which is recommended to be filled out completely.
				<br>
				<br>
				This contains the Title, Icon and Title (en) fields. This should be filled with the name of the element, an icon for the inserted and translated to English the title element. If there is error in this form will redirect to the page where all locations are listed.
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-group fa-fw"></i> Companion Section</h3>
			</div>
			<div class="panel-body">
				You can replace the information of the Companion that the mix of life is shown during the game. Only items listed will be those shown on the page.
				<br>
				<br>
				When clicking on <button class="btn btn-success">Replace</button>  the form will be displayed, which is recommended to be filled out completely.
				<br>
				<br>
				This contains the Title, Icon and Title (en) fields. This should be filled with the name of the element, an icon for the inserted and translated to English the title element. If there is error in this form will redirect to the page where all locations are listed.
			</div>
		</div>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-lemon-o fa-fw"></i> Fruit Section</h3>
			</div>
			<div class="panel-body">
				You can replace the information of the Fruit that the mix of life is shown during the game. Only items listed will be those shown on the page.
				<br>
				<br>
				When clicking on <button class="btn btn-success">Replace</button>  the form will be displayed, which is recommended to be filled out completely.
				<br>
				<br>
				This contains the Title, Icon and Title (en) fields. This should be filled with the name of the element, an icon for the inserted and translated to English the title element. If there is error in this form will redirect to the page where all locations are listed.
			</div>
		</div>
	</div><!-- /.col-lg-12 -->
	<div class="col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading"><i class="fa fa-glass fa-fw"></i> Cocktail Section</div>
			<div class="panel-body">
			Inside the section of cocktails you can find at first a section where the product ordered cocktails <strong>Zignum Silver</strong> or <strong>Zignum Reposado</strong> listed. If there are records of cocktails in one of the sections text area with the title "Search" is displayed. When writing the code name of a cocktail here once the matches with that name will be shown. 
			<br>
			<br>
			Here you will find the <button class="btn btn-success">+ Add new cocktail </button> button. Click here to give form to add a new cocktail. 
			<p>The fields are: </p>
			<br>
			<br>
			<ul>
			<li><strong>Product:</strong> Here one must select the type of product. </li>

			<li><strong>Name:</strong> This will be the name of the cocktail. (This field is required). </li>

			<li><strong>Cocktail Image:</strong> This will be the image corresponding to this cocktail. </li>

			<li><strong>Cocktail Icon:</strong></strong> This image will be small cocktail. If this image has recommended inserting the same image in Cocktail Image added. </li>

			<li><strong>Instructions:</strong> Here you provide the recipe for cocktail preparation. Each step of the recipe must be separated by an enter to the prescription is shown correctly on the page / cocteleszignumsilver o / coteleszignumreposado as appropriate.  (This field is required)</li>
			</ul>
			The <strong>Name (En)</strong> and <strong>Instructions (En)</strong> fields must be filled with the translation of the above fields.
			
			</div>
		</div>

		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-camera-retro fa-fw"></i> Events Section</h3>
			</div>
			<div class="panel-body">
				<p>Within this section you can find a list of all existing events. </p>
				<p>Here you will find the <button class="btn btn-success">+ Add new Event </button> button. Click here to give form to add a new Event. </p>
			<p>The fields are: </p>
			<ul>
				<li><strong>Name:</strong> Here you must enter the name of the album.</li>
				<li><strong>Description:</strong> Here write the description of the event.</li>
				<p>In the <strong>Name(En)</strong> and <strong>Description(En)</strong> fields must be the English translation of the fields above.</p>
			</ul>
			After cocktail added when clicking on the button <button class="btn btn-success">Picture</button> a new section where you must enter the current event photos are displayed. 
			<br>
			<br>
			<br>
			<p>By clicking on the button <button class="btn btn-success">+ Add new picture </button> the form will be shown to insert a new photo to the album.</p> 
			<p>This has the following fields:</p>
			<ul>
				<li><strong>Picture: </strong>Add here a new image for the event.</li>
			</ul>
			</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa  fa-vine fa-fw"></i> Vine Section</h3>
			</div>
			<div class="panel-body">
				<p>You can replace the id of the video vine, this will be the video that will be shown in section <strong>/lomasnuevo</strong>. By clicking on the <button class="btn btn-success">Edit</button> button you can edit this content.</p>
			</div>
		</div>

	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
@stop