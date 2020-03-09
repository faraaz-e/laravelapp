<!DOCTYPE html>
<title>
	Form
</title>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0InzEbEsN3Ch5soJL1y0DvPXakbrdoNg&libraries=places"></script>
		
		
    <script>
   
		  function initialize() {
          var input = document.getElementById('location');
          var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('name').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
                document.getElementById('city').value = place.address_components[0].long_name;
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>

	
 
	
	<div class="container">
	<div class="col-lg-6 mx-auto pt-4">

	<center><h3>FORM</h3></center>
	<hr/>

	<div class="jumbotron">



@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


	  
	   <form action = "/create" method = "post">
	   
 		{{ csrf_field() }}

	    <fieldset>

		 <div class="form-group">

		  <label class="col-form-label" for="inputDefault">Location</label>


            <input id="location" name="location" class="form-control" type="text" placeholder="Enter a location" autocomplete="on"/>
            <input type="hidden" id="name" name="name" class="form-control" placeholder="Name"/>
		    <input type="text" id="cityLat" name="cityLat" class="form-control" placeholder="Latitude"/>
		    <input type="text" id="cityLng" name="cityLng" class="form-control" placeholder="Longitude"/>
		    
          
		</div>

		  <br/>

		  <div class="form-group">
		  <label class="col-form-label" for="inputDefault">City</label>
		
		  <input type="text" id="city" name="city" class="form-control" placeholder="City"/>
	      </div>

	      <br/>

	      <div class="form-group">
	      <label class="col-form-label" for="inputDefault">Month</label><br/>
	      
	      {!! Form::selectMonth('month','month', ['class'=>'form-control']) !!}	
	      </div>

	      <br/>

	    
	      <div class="form-group">
         {!! Form::submit('Save', array( 'class'=>'btn btn-danger form-control' )) !!}
          </div>

       {{ Form::close() }}

       </fieldset>

    <div class="alert-warning">
        @foreach( $errors->all() as $error )
           <br> {{ $error }}
        @endforeach
    </div>

	  


    </div>
	</div>
    </div>
</div>

</body>
</html>