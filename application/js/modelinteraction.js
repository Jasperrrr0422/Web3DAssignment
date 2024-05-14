

var spinning = false;

// Function 
function spin()
{
	spinning = !spinning;
    if($('#coke').is(':visible')){
        	document.getElementById('model__CokeCan-X').setAttribute('enabled', spinning.toString());
    }
    if($('#sprite').is(':visible')){
            document.getElementById('models__spritebottle-X').setAttribute('enabled', spinning.toString());
            document.getElementById('models__spritetop-X').setAttribute('enabled', spinning.toString());
    }
    if($('#pepper').is(':visible')){
        document.getElementById('modelss__Cylinder001-X').setAttribute('enabled', spinning.toString());
        document.getElementById('modelss__PepperCup-X').setAttribute('enabled', spinning.toString());
    }
}


// Function about Y rotation 
function spin2()
{  
    spinning = !spinning;
    if($('#coke').is(':visible')){
    document.getElementById('model__CokeCan-Y').setAttribute('enabled', spinning.toString());
    }
    if($('#sprite').is(':visible')){
        document.getElementById('models__spritebottle-Y').setAttribute('enabled', spinning.toString());
        document.getElementById('models__spritetop-Y').setAttribute('enabled', spinning.toString());
    }
    if($('#pepper').is(':visible')){
        document.getElementById('modelss__Cylinder001-Y').setAttribute('enabled', spinning.toString());
        document.getElementById('modelss__PepperCup-Y').setAttribute('enabled', spinning.toString());
    }
}

// Function about Z rotation
function spin3()
{
    spinning = !spinning;
    if($('#coke').is(':visible')){
    document.getElementById('model__CokeCan-Z').setAttribute('enabled', spinning.toString());
    }
    if($('#sprite').is(':visible')){
        document.getElementById('models__spritebottle-Z').setAttribute('enabled', spinning.toString());
        document.getElementById('models__spritetop-Z').setAttribute('enabled', spinning.toString());
    }
    if($('#pepper').is(':visible')){
        document.getElementById('modelss__Cylinder001-Z').setAttribute('enabled', spinning.toString());
        document.getElementById('modelss__PepperCup-Z').setAttribute('enabled', spinning.toString());
    }
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__CokeCan-X').setAttribute('enabled', spinning.toString());
    document.getElementById('model__CokeCan-Y').setAttribute('enabled', spinning.toString());
    document.getElementById('model__CokeCan-Z').setAttribute('enabled', spinning.toString());
    document.getElementById('models__spritebottle-X').setAttribute('enabled', spinning.toString());
    document.getElementById('models__spritetop-X').setAttribute('enabled', spinning.toString());
    document.getElementById('models__spritebottle-Y').setAttribute('enabled', spinning.toString());
    document.getElementById('models__spritetop-Y').setAttribute('enabled', spinning.toString());
    document.getElementById('models__spritebottle-Z').setAttribute('enabled', spinning.toString());
    document.getElementById('models__spritetop-Z').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__Cylinder001-X').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__PepperCup-X').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__Cylinder001-X').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__PepperCup-X').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__Cylinder001-Y').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__PepperCup-Y').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__Cylinder001-Z').setAttribute('enabled', spinning.toString());
    document.getElementById('modelss__PepperCup-Z').setAttribute('enabled', spinning.toString());
}

function XRotate()
{
    if(document.getElementById('model__CokeCan-X').getAttribute('enabled')!= 'true'){
        document.getElementById('model__CokeCan-X').setAttribute('enabled', 'true');
        document.getElementById('model__CokeCan-Y').setAttribute('enabled', 'false');
        document.getElementById('model__CokeCan-Z').setAttribute('enabled', 'false');
    }else{
        document.getElementById('model__CokeCan-X').setAttribute('enabled', 'false');
    }
        
        
}


function YRotate(){
    if(document.getElementById('model__CokeCan-Y').getAttribute('enabled')!= 'true'){
        document.getElementById('model__CokeCan-Y').setAttribute('enabled', 'true');
        document.getElementById('model__CokeCan-X').setAttribute('enabled', 'false');
        document.getElementById('model__CokeCan-Z').setAttribute('enabled', 'false');
    }else{
        document.getElementById('model__CokeCan-Y').setAttribute('enabled', 'false');
    }
            
}

function ZRotate(){
    if(document.getElementById('model__CokeCan-Z').getAttribute('enabled')!= 'true'){
        document.getElementById('model__CokeCan-Z').setAttribute('enabled', 'true');
        document.getElementById('model__CokeCan-X').setAttribute('enabled', 'false');
        document.getElementById('model__CokeCan-Y').setAttribute('enabled', 'false');
    }else{
        document.getElementById('model__CokeCan-Z').setAttribute('enabled', 'false');
    }
}

function RenderLightsDefault()
{
    if($('#coke').is(':visible')){
    var e1 = document.getElementById('model');
    // document.querySelectorAll('PointLight').setAttribute('on','false');
    const allLights = document.querySelectorAll('PointLight');
    allLights.forEach(light => {
        light.setAttribute('on', 'FALSE');
    });
    e1.runtime.togglePoints(false);
	e1.runtime.togglePoints(false);
    document.getElementById('model__NavInfo001').setAttribute('headlight', 'false');
    }
    if($('#sprite').is(':visible')){
        var e2 = document.getElementById('models');
        // document.querySelectorAll('PointLight').setAttribute('on','false');
        const allLights = document.querySelectorAll('PointLight');
        allLights.forEach(light => {
            light.setAttribute('on', 'FALSE');
        });
        e2.runtime.togglePoints(false);
        e2.runtime.togglePoints(false);
        document.getElementById('models__NavInfo001').setAttribute('headlight', 'false');
    }
    if($('#pepper').is(':visible')){
        var e3 = document.getElementById('modelss');
        // document.querySelectorAll('PointLight').setAttribute('on','false');
        const allLights = document.querySelectorAll('PointLight');
        allLights.forEach(light => {
            light.setAttribute('on', 'FALSE');
        });
        e3.runtime.togglePoints(false);
        e3.runtime.togglePoints(false);
        document.getElementById('modelss__NavInfo001').setAttribute('headlight', 'false');
    }
}
// The function about wireframe
function wireframe()
{
    if($('#coke').is(':visible')){
	var e1 = document.getElementById('model');
	e1.runtime.togglePoints(true);
	e1.runtime.togglePoints(true);
    }
    if($('#sprite').is(':visible')){
        var e2 = document.getElementById('models');
        e2.runtime.togglePoints(true);
        e2.runtime.togglePoints(true);
    }
    if($('#pepper').is(':visible')){
        var e3 = document.getElementById('modelss');
        e3.runtime.togglePoints(true);
        e3.runtime.togglePoints(true);
    }

}

function toggleVertices() {
    if($('#coke').is(':visible')){
        var e1 = document.getElementById('model');
        var currentPoints = e1.runtime.togglePoints(); // Toggle points on first call
        if (currentPoints) {
            e1.runtime.togglePoints(false); // If points are on, turn them off
        } else {
            e1.runtime.togglePoints(true); // If points are off, turn them on
        }
    }

    if($('#sprite').is(':visible')){
        var e2 = document.getElementById('models');
        var currentPoints = e2.runtime.togglePoints(); // Toggle points on first call
        if (currentPoints) {
            e2.runtime.togglePoints(false); // If points are on, turn them off
        } else {
            e2.runtime.togglePoints(true); // If points are off, turn them on
        }
    }

    if($('#pepper').is(':visible')){
        var e3 = document.getElementById('modelss');
        var currentPoints = e3.runtime.togglePoints(); // Toggle points on first call
        if (currentPoints) {
            e3.runtime.togglePoints(false); // If points are on, turn them off
        } else {
            e3.runtime.togglePoints(true); // If points are off, turn them on
        }
    }
    
}

var lightOn = true;


// The function turn on or oof the head lights 
function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__NavInfo001').setAttribute('headlight', lightOn.toString());
    document.getElementById('models__NavInfo001').setAttribute('headlight', lightOn.toString());
    document.getElementById('modelss__NavInfo001').setAttribute('headlight', lightOn.toString());
}


// The function turn on or turn off the Onmi lights 
function pointlight() {
   
    const allLights = document.querySelectorAll('PointLight');
    allLights.forEach(light => {
        light.setAttribute('on', light.getAttribute('on') === 'TRUE' ? 'FALSE' : 'TRUE');
    });
}

function cameraFront()
{
	document.getElementById('model__FrontCamera').setAttribute('set_bind', 'true');
    document.getElementById('models__FrontCamera').setAttribute('set_bind', 'true');
    document.getElementById('modelss__FrontCamera').setAttribute('set_bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__BackCamera').setAttribute('set_bind', 'true');
    document.getElementById('models__BackCamera').setAttribute('set_bind', 'true');
    document.getElementById('modelss__BackCamera').setAttribute('set_bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__LeftCamera').setAttribute('set_bind', 'true');
    document.getElementById('models__LeftCamera').setAttribute('set_bind', 'true');
    document.getElementById('modelss__LeftCamera').setAttribute('set_bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__RightCarmera').setAttribute('set_bind', 'true');
    document.getElementById('models__RightCarmera').setAttribute('set_bind', 'true');
    document.getElementById('modelss__RightCarmera').setAttribute('set_bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__TopCamera').setAttribute('set_bind', 'true');
    document.getElementById('models__TopCamera').setAttribute('set_bind', 'true');
    document.getElementById('modelss__TopCamera').setAttribute('set_bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__BottomCarmera').setAttribute('set_bind', 'true');
    document.getElementById('models__BottomCarmera').setAttribute('set_bind', 'true');
    document.getElementById('modelss__BottomCarmera').setAttribute('set_bind', 'true');
}