<!DOCTYPE html>
<html>
<head>
	<title>Part Search</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/animate.css">

<script type="text/javascript" src="http://www.carqueryapi.com/js/jquery.min.js"></script>
<script type="text/javascript" src="http://www.carqueryapi.com/js/carquery.0.3.4.js"></script>
<script type="text/javascript">
	$(document).ready(
	function()
	{
		//Create a variable for the CarQuery object.  You can call it whatever you like.
		var carquery = new CarQuery();

		//Run the carquery init function to get things started:
		carquery.init();
		
		//Optionally, you can pre-select a vehicle by passing year / make / model / trim to the init function:
		//carquery.init('2000', 'dodge', 'Viper', 11636);

		//Optional: Pass sold_in_us:true to the setFilters method to show only US models. 
		carquery.setFilters( {sold_in_us:true} );

		//Optional: initialize the year, make, model, and trim drop downs by providing their element IDs
		carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models', 'car-model-trims');

		//Optional: set the onclick event for a button to show car data.
		$('#cq-show-data').click(  function(){ carquery.populateCarData('car-model-data'); } );

		//Optional: initialize the make, model, trim lists by providing their element IDs.
		carquery.initMakeModelTrimList('make-list', 'model-list', 'trim-list', 'trim-data-list');

		//Optional: set minimum and/or maximum year options.
		carquery.year_select_min = 1950;
		carquery.year_select_max = 2020;
	
		//Optional: initialize search interface elements.
		//The IDs provided below are the IDs of the text and select inputs that will be used to set the search criteria.
		//All values are optional, and will be set to the default values provided below if not specified.
		var searchArgs =
		({
			body_id:                       "cq-body"
			,default_search_text:           "Keyword Search"
			,doors_id:                      "cq-doors"
			,drive_id:                      "cq-drive"
			,engine_position_id:            "cq-engine-position"
			,engine_type_id:                "cq-engine-type"
			,fuel_type_id:                  "cq-fuel-type"
			,min_cylinders_id:              "cq-min-cylinders"
			,min_mpg_hwy_id:                "cq-min-mpg-hwy"
			,min_power_id:                  "cq-min-power"
			,min_top_speed_id:              "cq-min-top-speed"
			,min_torque_id:                 "cq-min-torque"
			,min_weight_id:                 "cq-min-weight"
			,min_year_id:                   "cq-min-year"
			,max_cylinders_id:              "cq-max-cylinders"
			,max_mpg_hwy_id:                "cq-max-mpg-hwy"
			,max_power_id:                  "cq-max-power"
			,max_top_speed_id:              "cq-max-top-speed"
			,max_weight_id:                 "cq-max-weight"
			,max_year_id:                   "cq-max-year"
			,search_controls_id:            "cq-search-controls"
			,search_input_id:               "cq-search-input"
			,search_results_id:             "cq-search-results"
			,search_result_id:              "cq-search-result"
			,seats_id:                      "cq-seats"
			,sold_in_us_id:                 "cq-sold-in-us"
		}); 
		carquery.initSearchInterface(searchArgs);

		//If creating a search interface, set onclick event for the search button.  Make sure the ID used matches your search button ID.
		$('#cq-search-btn').click( function(){ carquery.search(); } );
	});
</script>





</head>
<body>

<?php
  include "partials/navbar.php";
  ?>

<?php
  include "partials/modal.php";
?>
<!-- <img id="HMenuBtn" data-toggle="modal" data-target="#LKQModalCenter" src="./images/HMenu2.png" alt="Hamburger Menu" /> -->

<h1 id="header">Part Search: Nashville</h1>

<div class="container">
	<div class="row">
		<p id="pSearchText" class="col-sm-7">Often times the part that you're looking for may be found on other years, makes and models. 
											 Just fill in your vehicle and the part you're looking for and we'll do the rest.</p>
	</div>
</div>


<div class="container">
	<div class="col">
		<form>
			<div class="partSearchForm form-group col-sm-2 offset-sm-3">
				<label for="car-years"><h2 id="year">Year</h2></label>
				<select name="car-years" id="car-years" class="form-control"></select> 
			</div>
			<div class="partSearchForm col-sm-2 offset-sm-3">
				<label for="car-makes"><h2 id="make">Make</h2></label>
				<select name="car-makes" id="car-makes" class="form-control"></select> 
			</div>
			<div class="partSearchForm col-sm-2 offset-sm-3">
				<label for="car-models"><h2 id="model">Model</h2></label>
				<select name="car-models" id="car-models" class="form-control"></select>    
			</div>
			<div class="partSearchForm col-sm-2 offset-sm-3">
				<label for="car-parts"><h2 id="part">Parts</h2></label>
				<select name="car-parts" id="car-parts" class="form-control" title="Select a Part" tabindex="4">
                        <option value="0">Select a Part</option>
						<option value="545">A LOCK BRAKE PARTS</option><option value="682">AC COMP</option><option value="680">AC EVAPORATOR</option><option value="319">AIR CLEANER</option><option value="334">AIR CLEANER RESON</option><option value="336">AIR FLOW METER</option><option value="601">ALTERNATOR</option><option value="434">AXLE ASSY, FR 4WD</option><option value="435">AXLE ASSY, RE</option><option value="437">AXLE HOUSING</option><option value="447">AXLE SHAFT</option><option value="275">BACK GLASS</option><option value="615">BLOWER MTR (HVAC)</option><option value="105">BMP ASSY, FR</option><option value="541">BRAKE MAST CYL</option><option value="533">BRAKES, REAR</option><option value="190">BUMPER ASSY, RE</option><option value="107">BUMPER BAR - FRONT</option><option value="101">BUMPER COVER - FR</option><option value="995">BUMPER COVER - RE</option><option value="536">CALIPER</option><option value="440">CARRIER ASSEMBLY</option><option value="610">COIL</option><option value="517">COIL SPRING</option><option value="629">COLUMN SWITCH</option><option value="679">CONDENSER</option><option value="241">CONSOLE</option><option value="302">CYLINDER BLOCK</option><option value="306">CYLINDER HEAD</option><option value="251">DASH PANEL</option><option value="170">DECKLID / TAILGATE</option><option value="606">DISTRIBUTOR</option><option value="120">DOOR ASSEMBLY, FR</option><option value="641">DOOR ELEC SWITCH</option><option value="277">DOOR GLASS, FRONT</option><option value="278">DOOR GLASS, REAR</option><option value="129">DOOR HANDLE</option><option value="125">DOOR WIND REG, FR</option><option value="135">DOOR WIND REG, RE</option><option value="130">DR ASSEMBLY, REAR</option><option value="430">DRIVE SHAFT, FRONT</option><option value="431">DRIVE SHAFT, REAR</option><option value="591">ELEC CHAS CTRL MOD</option><option value="590">ELEC ENG CTRL MOD</option><option value="300">ENGINE ASSEMBLY</option><option value="327">EXHAUST MANIFOLD</option><option value="110">FENDER</option><option value="409">FLYWHEEL</option><option value="100">FRONT END ASSEMBLY</option><option value="116">FRONT LAMP</option><option value="322">FUEL INJECT PARTS</option><option value="323">FUEL PUMP</option><option value="646">FUSE BOX</option><option value="260">GLOVE BOX</option><option value="104">GRILLE</option><option value="309">HARMONIC BALANCER</option><option value="114">HEADLAMP ASSEMBLY</option><option value="676">HEATER CORE</option><option value="117">HOOD</option><option value="538">HUB</option><option value="633">IGNITION SWITCH</option><option value="329">INTAKE MANIFOLD</option><option value="268">INTERIOR SUN VISOR</option><option value="513">LOW CTRL ARM, RE</option><option value="512">LOWER CTRL ARM, FR</option><option value="311">OIL PAN</option><option value="540">POW BRAKE BOOSTER</option><option value="553">POW STEERING PUMP</option><option value="1078">POW WINDOW SWITCH</option><option value="617">POWER WINDOW MOTOR</option><option value="284">QUARTER GLASS</option><option value="671">RAD OVERFLOW BOT</option><option value="674">RAD/CON FAN MOTOR</option><option value="675">RADIATOR</option><option value="109">RADIATOR CORE SUPP</option><option value="638">RADIO - AV EQUIP</option><option value="152">ROOF ASSEMBLY</option><option value="210">SEAT BELT ASSEMBLY</option><option value="202">SEAT, FRONT</option><option value="215">SEAT, REAR</option><option value="128">SIDE VIEW MIRROR</option><option value="257">SPEEDO HD CLUSTER</option><option value="515">SPIN/KNUCKLE, FR</option><option value="524">STABILIZER BAR</option><option value="604">STARTER MOTOR</option><option value="238">STEERING COLUMN</option><option value="551">STEERING GEAR/RACK</option><option value="527">STRUT</option><option value="477">SUSP XMEMBER/K-FRM</option><option value="166">TAIL LAMP</option><option value="655">TEMP CONTROL</option><option value="337">THROTTLE BODY ASSY</option><option value="308">TIMING COVER</option><option value="400">TRANSMISSION</option><option value="511">UPPER CTRL ARM, FR</option><option value="324">WATER PUMP</option><option value="1154">WHEEL AND TIRE SET</option><option value="270">WINDSHIELD GLASS</option><option value="620">WIPER MOTOR</option><option value="412">XFER CASE ASSY</option>
				</select>
			</div>
				<!-- <div class="col-sm-3">
					<select name="car-model-trims" id="car-model-trims" class="form-control"></select> 
				</div> -->
				<button id="modalLocationSearchBtn" type="submit" class="btn">Search</button><br>
		</form>
			
	</div>
</div>

<?php
  include "partials/footer.php";
?>




<script src="JQuery/jquery.min.js"></script>
<script src="JQuery/TweenMax.min.js"></script>	
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="scripts/skrollr.min.js"></script>
<script src="scripts/index.js"></script>
</body>
</html>