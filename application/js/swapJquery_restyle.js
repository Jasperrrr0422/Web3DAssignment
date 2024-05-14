// // Use Jquery to show and hide page
$(document).ready(function() {
    selectPage();
    selectModel();
    selectSomeOfFunction()
    // Function to control the visibility of sections
    function selectPage(){
        $('#home').show();
        $('#3DModelAndGallery').hide();
        $('#Coke3D_Description').hide();
        $('#Sprite3D_Description').hide();
        $('#Pepper3D_Description').hide();
        $('#interaction').hide();
        $('#CameraViews').hide();
        $('#Animation').hide();
        $('#RenderLights').hide();

        $('#Header_homeButton').click(function(){
            $('#home').show();
            $('#3DModelAndGallery').hide();
            $('#Coke3D_Description').hide();
            $('#Sprite3D_Description').hide();
            $('#Pepper3D_Description').hide();
            $('#interaction').hide();
            $('#CameraViews').hide();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });

        $('#Header_cokeButton').click(function(){
            $('#home').hide();
            $('#3DModelAndGallery').show();
            $('#coke').show();
            $('#sprite').hide();
            $('#pepper').hide();
            $('#Coke3D_Description').show();
            $('#Sprite3D_Description').hide();
            $('#Pepper3D_Description').hide();
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });

        $('#Header_spriteButton').click(function(){
            $('#home').hide();
            $('#3DModelAndGallery').show();
            $('#coke').hide();
            $('#sprite').show();
            $('#pepper').hide();
            $('#Coke3D_Description').hide();
            $('#Sprite3D_Description').show();
            $('#Pepper3D_Description').hide();
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });
        $('#Header_pepperButton').click(function(){
            $('#home').hide();
            $('#3DModelAndGallery').show();
            $('#coke').hide();
            $('#sprite').hide();
            $('#pepper').show();
            $('#Coke3D_Description').hide();
            $('#Sprite3D_Description').hide();
            $('#Pepper3D_Description').show();
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });


    }
    function selectModel(){
        $('#cokeButton_3DPage').click(function(){
            $('#home').hide();
            $('#coke').show();
            $('#sprite').hide();
            $('#pepper').hide();
            $('#Coke3D_Description').show();
            $('#Sprite3D_Description').hide();
            $('#Pepper3D_Description').hide();
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });
        $('#spriteButton_3DPage').click(function(){
            $('#home').hide();
            $('#coke').hide();
            $('#sprite').show();
            $('#pepper').hide();
            $('#Coke3D_Description').hide();
            $('#Sprite3D_Description').show();
            $('#Pepper3D_Description').hide();
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });
        $('#pepperButton_3DPage').click(function(){
            $('#home').hide();
            $('#coke').hide();
            $('#sprite').hide();
            $('#pepper').show();
            $('#Coke3D_Description').hide();
            $('#Sprite3D_Description').hide();
            $('#Pepper3D_Description').show();
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        });
    }

    function selectSomeOfFunction(){
        $('#CameraViews_Button').click(function(){
            $('#interaction').show();
            $('#CameraViews').show();
            $('#Animation').hide();
            $('#RenderLights').hide();
        
        });
        $('#AnimationOptions_Button').click(function(){
            $('#interaction').show();
            $('#CameraViews').hide();
            $('#Animation').show();
            $('#RenderLights').hide();
        
        });
        $('#RenderLights_Button').click(function(){
            $('#interaction').show();
            $('#CameraViews').hide();
            $('#Animation').hide();
            $('#RenderLights').show();
        
        });

    };

    
});
function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerClor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}