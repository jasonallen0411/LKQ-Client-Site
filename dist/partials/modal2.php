<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
<link rel="stylesheet" type="text/css" href="styles/animate.css">




<div class="modal fade" id="LKQSell" tabindex="-1" role="dialog" aria-labelledby="LKQSellTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LKQSellTitle">Your Car Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span id="modalX" aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div class="container">
          <div class="col">
            <form>
              <div class="partSearchForm form-group col-sm-6 offset-sm-3">
                <label for="car-years"><h2 id="year">Year</h2></label>
                <select name="car-years" id="car-years" class="form-control"></select> 
              </div>
              <div class="partSearchForm col-sm-6 offset-sm-3">
                <label for="car-makes"><h2 id="make">Make</h2></label>
                <select name="car-makes" id="car-makes" class="form-control"></select> 
              </div>
              <div class="partSearchForm col-sm-6 offset-sm-3">
                <label for="car-models"><h2 id="model">Model</h2></label>
                <select name="car-models" id="car-models" class="form-control"></select>    
              </div>
              <div class="partSearchForm col-sm-6 offset-sm-3">
                <label for="firstName"><h2 id="model">First Name</h2></label>
                <input name="firstName" type="text" placeholder="First Name">
              </div>
              <div class="partSearchForm col-sm-6 offset-sm-3">
                <label for="lastName"><h2 id="model">Last Name</h2></label>
                <input name="lastName" type="text" placeholder="Last Name">
              </div>
              <div class="partSearchForm col-sm-6 offset-sm-3">
                <label for="phoneNumber"><h2 id="model">Phone</h2></label>
                <input name="phoneNumber" type="number" placeholder="Phone Number">
              </div>
              <div class="partSearchForm col-sm-6 offset-sm-3">
                <label for="email"><h2 id="model">Email</h2></label>
                <input name="email" type="email" placeholder="Email">
              </div>
                <button id="modalLocationSearchBtn" type="submit" class="btn">Get Quote</button><br>
            </form>
        
          </div>
        </div>
      </div>
      <hr>
      
    </div>
  </div>
</div>

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

<script src="JQuery/jquery.min.js"></script>
<script src="JQuery/TweenMax.min.js"></script>	
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="scripts/skrollr.min.js"></script>
<script src="scripts/main.js"></script>