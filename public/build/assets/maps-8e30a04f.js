const n=()=>{mapboxgl.accessToken="pk.eyJ1IjoibWFyY2VsaXRvb29vIiwiYSI6ImNrMHNsdmhwdjAzcjIzZ3BldTlqdWhnaWEifQ.EWZE383Tn4xBt0E5pSXh6Q",document.getElementById("map").dataset.zoom;var e=new mapboxgl.Map({container:"map",style:"mapbox://styles/marcelitoooo/ck16ms7m51nlo1cmwnqrbjuyq?optimize=true",center:[8.520781997910886,47.36371381453558],zoom:13});e.addControl(new mapboxgl.NavigationControl),e.scrollZoom.disable();var o={type:"FeatureCollection",features:[{type:"Feature",geometry:{type:"Point",coordinates:[8.520781997910886,47.36371381453558]},properties:{title:"EIBE 8045 – Wohnen in der Binz",description:"Pfäffikon ZH"}}]};o.features.forEach(function(a){var t=document.createElement("div");t.className="marker",new mapboxgl.Marker(t).setLngLat(a.geometry.coordinates).addTo(e)})},m=()=>{var e=document.createElement("script");e.src="https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js",e.async=!0,document.head.appendChild(e),e.onload=()=>{document.getElementById("map")!==null&&n()}};m();
