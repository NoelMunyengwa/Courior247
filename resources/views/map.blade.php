<html>
  <head>
    <title>Places Search Box</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    
    <style>
        /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
#map {
  height: 50%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#origin-input,
#destination-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 200px;
}

#origin-input:focus,
#destination-input:focus {
  border-color: #4d90fe;
}

#mode-selector {
  color: #fff;
  background-color: #4d90fe;
  margin-left: 12px;
  padding: 5px 11px 0px 11px;
}

#mode-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}
    </style>
    
  </head>
  <body>
  <div style="display: none">
      <input
        id="origin-input"
        class="controls"
        type="text"
        placeholder="Enter an origin location"
      />

      <input
        id="destination-input"
        class="controls"
        type="text"
        placeholder="Enter a destination location"
      />

      <div id="mode-selector" class="controls">
        <input
          type="radio"
          name="type"
          id="changemode-walking"
          checked="checked"
        />
        <label for="changemode-walking">Walking</label>

        <input type="radio" name="hidden" id="changemode-transit" />
        <label for="changemode-transit">Transit</label>

        <input type="radio" name="type" id="changemode-driving" />
        <label for="changemode-driving">Driving</label>
      </div>
    </div>

    <div id="map"></div>


      <script>
      // This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    mapTypeControl: false,
    center: { lat: -33.8688, lng: 151.2195 },
    zoom: 13,
  });
  const geocoder = new google.maps.Geocoder();
  const service = new google.maps.DistanceMatrixService();

  new AutocompleteDirectionsHandler(map,geocoder,service);
  
}



class AutocompleteDirectionsHandler {
    geocoder;
    service;

  map;
  originPlaceId;
  destinationPlaceId;
  travelMode;
  directionsService;
  directionsRenderer;
  constructor(map,geocoder,service) {
    this.geocoder=geocoder;
    this.service=service;
    this.map = map;
    this.originPlaceId = "";
    this.destinationPlaceId = "";
    this.travelMode = google.maps.TravelMode.WALKING;
    this.directionsService = new google.maps.DirectionsService();
    this.directionsRenderer = new google.maps.DirectionsRenderer();
    this.directionsRenderer.setMap(map);

    const originInput = document.getElementById("origin-input");
    const destinationInput = document.getElementById("destination-input");
    const modeSelector = document.getElementById("mode-selector");
    // Specify just the place data fields that you need.
    const originAutocomplete = new google.maps.places.Autocomplete(
      originInput,
      { fields: ["place_id"] },
    );
    // Specify just the place data fields that you need.
    const destinationAutocomplete = new google.maps.places.Autocomplete(
      destinationInput,
      { fields: ["place_id"] },
    );

    this.myDistance();

    this.setupClickListener(
      "changemode-walking",
      google.maps.TravelMode.WALKING,
    );
    this.setupClickListener(
      "changemode-transit",
      google.maps.TravelMode.TRANSIT,
    );
    this.setupClickListener(
      "changemode-driving",
      google.maps.TravelMode.DRIVING,
    );
    this.setupPlaceChangedListener(originAutocomplete, "ORIG");
    this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
      destinationInput,
    );
    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
  }
  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  setupClickListener(id, mode) {
    const radioButton = document.getElementById(id);

    radioButton.addEventListener("click", () => {
      this.travelMode = mode;
      this.route();
    });
  }

  myDistance(){
    const origin1 = { lat: 55.93, lng: -3.118 };
  const origin2 = "Greenwich, England";
  const destinationA = "Stockholm, Sweden";
  const destinationB = { lat: 50.087, lng: 14.421 };
  const request = {
    origins: [origin1, origin2],
    destinations: [destinationA, destinationB],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: false,
  };

  // put request on page
//   document.getElementById("request").innerText = JSON.stringify(
//     request,
//     null,
//     2,
//   );

  // get distance matrix response
  this.service.getDistanceMatrix(request).then((response) => {
    // put response
   const res = JSON.stringify(
      response,
      null,
      2,
    );
    const distance = response.rows[0].elements[0].distance;

// Extract the distance value in meters
const distanceValue = distance.value;

// Optional: Format the distance for display (already in meters)
const formattedDistance = distanceValue.toLocaleString() + " meters";

    document.getElementById("response").innerText=formattedDistance;

    // show on map
    // document.getElementById("response").innerText= response.originAddresses;
    const destinationList = response.destinationAddresses;
  });
  }
  setupPlaceChangedListener(autocomplete, mode) {
    autocomplete.bindTo("bounds", this.map);
    autocomplete.addListener("place_changed", () => {
      const place = autocomplete.getPlace();

      if (!place.place_id) {
        window.alert("Please select an option from the dropdown list.");
        return;
      }

      if (mode === "ORIG") {
        this.originPlaceId = place.place_id;
      } else {
        this.destinationPlaceId = place.place_id;
      }

      this.route();
    });
  }
  route() {
    if (!this.originPlaceId || !this.destinationPlaceId) {
      return;
    }

    const me = this;

    this.directionsService.route(
      {
        origin: { placeId: this.originPlaceId },
        destination: { placeId: this.destinationPlaceId },
        travelMode: this.travelMode,
      },
      (response, status) => {
        if (status === "OK") {
            console.log(response)
          me.directionsRenderer.setDirections(response);
        } else {
          window.alert("Directions request failed due to " + status);
        }
      },
    );
  }
}

window.initMap = initMap;
        </script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API_KEY')}}&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>

    <div class=" text-center my-10">
        <h1 id="response">Distance </h1>
    </div>
  </body>
</html>