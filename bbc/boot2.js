(function() {
    var Event = YAHOO.util.Event,
        Dom   = YAHOO.util.Dom,
        Anim = YAHOO.util.Anim,
        lang  = YAHOO.lang,
        slider, 
        bg="slider-bg", thumb="slider-thumb", 
        valuearea="slider-value", textfield="slider-converted-value", bg2="slider-bg2", thumb2="slider-thumb2", 
        valuearea2="slider-value2", textfield2="slider-converted-value2"
    var screenwidth = Dom.getViewportWidth();
    var screenheight = Dom.getViewportHeight();
    //Average Settings
    var cycle_efficiency = 20;
    var bike_efficiency = 45;
    var car_efficiency = 14;
    var petrol = 76;
    var diesel = 55;
    var distance,bike_fuel_cost,car_fuel_cost,cycle_fuel_cost = 0,cycle_time,bike_time,car_time;
    var cycle_speed = 15,bike_speed = 50,car_speed = 40; 
    //

    // The slider can move 0 pixels up
    var topConstraint = 0,topConstraint2 = 0;
    // The slider can move 200 pixels down
    var bottomConstraint = 600,bottomConstraint2 = 600;
    // Custom scale factor for converting the pixel offset into a real value
    var scaleFactor = 1.5;
    // The amount the slider moves when the value is changed with the arrow
    // keys
    var keyIncrement = 5,keyIncrement2 = 1;
    var tickSize = 25;
    //Type Name
    var typename;
    Event.onDOMReady(function() {
        //Set default values
        var class_name = Dom.getElementsByClassName("blk");
        //YAHOO.all(".blk").setStyle("height", screenheight+"px");
        Dom.setStyle(class_name,"height",screenheight+"px");
        //Slider 1
        slider = YAHOO.widget.Slider.getHorizSlider(bg, 
                         thumb, topConstraint, bottomConstraint, 25);
        slider.getRealValue = function() {
            return Math.round((this.getValue())/5);
        }
        slider.subscribe("change", function(offsetFromStart) {
            var valnode = Dom.get(valuearea);
            var fld = Dom.get(textfield);
            // Display the pixel value of the control
            valnode.innerHTML = offsetFromStart;
            var actualValue = slider.getRealValue();
            fld.value = actualValue;
        });
        //End Slider 1

        //Slider 2
        slider2 = YAHOO.widget.Slider.getHorizSlider(bg2, 
                         thumb2, topConstraint2, bottomConstraint2, 1);
        slider2.getRealValue2 = function() {
            return Math.round(this.getValue()/6);
        }
        slider2.subscribe("change", function(offsetFromStart2) {
            var valnode2 = Dom.get(valuearea2);
            var fld2 = Dom.get(textfield2);
            // Display the pixel value of the control
            valnode2.innerHTML = offsetFromStart2;
            var actualValue2 = slider2.getRealValue2();
            fld2.value = actualValue2;
        });
        //End Slider 2

        //Type Selection click
        var typeclick = function (event, matchedEl, container) {
            typename = Dom.getAttribute(this,"data-value");
            if((typename === '2')||(typename === '3')){
                alert("Open Car / Bike");
                //Show the fuel slider with animation
                //YAHOO.util.Dom.setStyle(document.body, 'opacity', '0');
                /*var ani = new YAHOO.util.Anim('bike-car' , {
                 opacity: {from: 0, to: 1 }
                 }, 1, YAHOO.util.Easing.easeOut);
                ani.animate();*/
                Dom.setStyle('bike-car', 'display', 'block');
            }else{
                Dom.setStyle('bike-car', 'display', 'none');
            }
        };
        Event.delegate("typeselection", "click", typeclick, "li"); 
        //End Type Selection

        //Distance click
        var distanceclick = function (event, matchedEl, container) {
            distance = Dom.getAttribute("distancedata","value");
            alert(distance);
        };
        Event.delegate("distance", "click", distanceclick); 
        Event.on("distance", 'click', rundata);
        function rundata(){
            distance = Dom.get("distancedata").value;
            bike_fuel_cost = fuelcost(distance,bike_efficiency,petrol);
            car_fuel_cost = fuelcost(distance,car_efficiency,petrol);
            //Set Fuel Data
            //var cc = Dom.get("cycle_cost");
            Dom.get("cycle_cost").innerHTML = cycle_fuel_cost;
            Dom.get("bike_cost").innerHTML = bike_fuel_cost;
            Dom.get("car_cost").innerHTML = car_fuel_cost;
            //End Fuel Data
            //Set Time
            cycle_time = getTime(distance,cycle_speed);
            bike_time = getTime(distance,bike_speed);
            car_time = getTime(distance,car_speed);
            Dom.get("cycle_time").innerHTML = cycle_time;
            Dom.get("bike_time").innerHTML = bike_time;
            Dom.get("car_time").innerHTML = car_time;
            //End Time
        }
        //End Distance click

        //Basic Function
        //Function to get calorie

        function fuelcost(totaldistance,efficiency,cost)
            {
                return  Math.round((totaldistance / efficiency) * cost );
            }

        //To find Time
        function getTime(totaldistance,speed){
            var ntime = Math.round((totaldistance / speed)*60);
            var nhour =  parseInt(ntime/60);
            var nmin =  parseInt(ntime%60);
            return "H: "+nhour+"M: "+nmin;
        }

        //Calorie
        function getCalorie(){

        }

        //


    });
})();

