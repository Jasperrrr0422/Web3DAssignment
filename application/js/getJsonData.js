// Javascript Document 
$(document).ready(function(){
    $.getJSON('../application/model/data.json',function(jsonObject){
        console.log(jsonObject);

        // Get the home page main text data 
        $('#Home_Title').html('<h2>'+ jsonObject.PageTextData[0].title +'</h2>');
        $('#Home_Subtitle').html('<h3>'+jsonObject.PageTextData[0].subTitle +'</h3>');
        $('#Home_Description').html('<p>'+jsonObject.PageTextData[0].description +'</p>');
        // Get the home page first text card
        $('#title_firstCard').html('<h2>'+ jsonObject.PageTextData[1].title +'</h2>');
        $('#subtitle_firstCard').html('<h3>'+ jsonObject.PageTextData[1].subTitle +'</h3>');
        $('#description_firstCard').html('<p>'+ jsonObject.PageTextData[1].description +'</p>');
        // Get the home page first card's image url
        $('#cokeRenderPage').attr('href',jsonObject.ImageURLdata[0].imageURLCokeRender_FirstCard);
        $('#cokeMainPageImg').attr('src',jsonObject.ImageURLdata[0].imageURL2CokeMain_FirstCard)
      
        // Get the home page second text card
        $('#title_secondCard').html('<h2>'+ jsonObject.PageTextData[2].title +'</h2>');
        $('#subtitle_secondCard').html('<h3>'+ jsonObject.PageTextData[2].subTitle +'</h3>');
        $('#description_secondCard').html('<p>'+ jsonObject.PageTextData[2].description +'</p>');

        // Get the home page second card's image url
        $('#spriteRenderPage').attr('href',jsonObject.ImageURLdata[1].imageURLSpriteRender_SecondCard);
        $('#spriteMainPageImg').attr('src',jsonObject.ImageURLdata[1].imageURL2SpriteMain_SecondCard);

        // Get the home page third text card 
        $('#title_thirdCard').html('<h2>'+ jsonObject.PageTextData[3].title +'</h2>');
        $('#subtitle_thirdCard').html('<h3>'+ jsonObject.PageTextData[3].subTitle +'</h3>');
        $('#description_thirdCard').html('<p>'+ jsonObject.PageTextData[3].description +'</p>');

        // Get the home page third card's image url
        $('#pepperRenderPage').attr('href',jsonObject.ImageURLdata[2].imageURLPepperRender_ThirdCard);
        $('#pepperMainPageImg').attr('src',jsonObject.ImageURLdata[2].imageURL2PepperMain_ThirdCard);

        // Get the coke x3d page text 
        $('#x3dModelTitle_coke').html('<h2>'+ jsonObject.PageTextData[4].x3dModelTitle +'</h2>');
        $('#x3dCreationMethod_coke').html('<p>'+ jsonObject.PageTextData[4].x3dCreationMethod +'</p>');
        $('#CokeBottom_Title').html('<h2>'+ jsonObject.PageTextData[4].title+'</h2>');
        $('#CokeBottom_SubTitle').html('<h3>'+ jsonObject.PageTextData[4].subTitle+'</h3>');
        $('#CokeBottom_Description').html('<p>'+ jsonObject.PageTextData[4].description+'</p>');

        // Get the sprite x3d page text 
        $('#x3dModelTitle_sprite').html('<h2>'+ jsonObject.PageTextData[5].x3dModelTitle +'</h2>');
        $('#x3dCreationMethod_sprite').html('<p>'+ jsonObject.PageTextData[5].x3dCreationMethod +'</p>');
        $('#SpriteBottom_Title').html('<h2>'+ jsonObject.PageTextData[5].title+'</h2>');
        $('#SpriteBottom_SubTitle').html('<h3>'+ jsonObject.PageTextData[5].subTitle+'</h3>');
        $('#SpriteBottom_Description').html('<p>'+ jsonObject.PageTextData[5].description+'</p>');

        // Get the pepper x3d page text
        $('#x3dModelTitle_pepper').html('<h2>'+ jsonObject.PageTextData[6].x3dModelTitle +'</h2>');
        $('#x3dCreationMethod_pepper').html('<p>'+ jsonObject.PageTextData[6].x3dCreationMethod +'</p>');
        $('#PepperBottom_Title').html('<h2>'+ jsonObject.PageTextData[6].title+'</h2>');
        $('#PepperBottom_SubTitle').html('<h3>'+ jsonObject.PageTextData[6].subTitle+'</h3>');
        $('#PepperBottom_Description').html('<p>'+ jsonObject.PageTextData[6].description+'</p>');

        // Get the Gallery data text
        $('.title_gallery').html('<h2>' + jsonObject.PageTextData[7].galleryTitle + '<h2>');
		$('.description_gallery').html('<p>' + jsonObject.PageTextData[7].galleryDescription + '</p>');

        // Get Animation text
        $('.AnimationText').html('<p>' + jsonObject.PageTextData[11].AnimationSubtitle +'</p>')

       

        // Get text of Find out more in Home page 
        $('#FindMoreInfo_coke').html(jsonObject.PageTextData[8].FindMore )
        $('#FindMoreInfo_sprite').html(jsonObject.PageTextData[8].FindMore )
        $('#FindMoreInfo_pepper').html(jsonObject.PageTextData[8].FindMore)

        // Get Cola logo text
        $('#1_logo').html('<h1>'+ jsonObject.PageTextData[9].one_logo + '<h1/>')
        $('#oca_logo').html('<h1>'+ jsonObject.PageTextData[9].oca_logo +'</h1>')
        $('#Cola_logo').html('<h2>'+ jsonObject.PageTextData[9].Cola_logo + '</h2>')
        $('#Journey').html('<h3>'+ jsonObject.PageTextData[9].Journey_logo + '</h3>')
        $('#text_logo').html('<p>'+ jsonObject.PageTextData[9].Text_logo + '</p>')

        // Find out more...(info)
        $('#FindMoreInfo_coke').attr('href',jsonObject.WebsiteURL[0].FirstCard_Website)
        $('#FindMoreInfo_sprite').attr('href',jsonObject.WebsiteURL[0].SecondCard_Website)
        $('#FindMoreInfo_pepper').attr('href',jsonObject.WebsiteURL[0].ThirdCard_Website)

        // Find out more...(info) in 3D page
        $('#coke3DWebsite').attr('href',jsonObject.WebsiteURL[1].FirstCard3D_Website)
        $('#sprite3DWebsite').attr('href',jsonObject.WebsiteURL[1].SecondCard3D_Website)
        $('#pepper3DWebsite').attr('href',jsonObject.WebsiteURL[1].ThirdCard3D_Website)

        // Interaction Camera
        $('#CameraViews_Button').html(jsonObject.PageTextData[10].Camera_Header_interaction)
        $('#Camera_Header').html(jsonObject.PageTextData[10].Camera_subTitle)
        $('#Frontside').html(jsonObject.PageTextData[10].Front_Camera_dropdown)
        $('#BackSide').html(jsonObject.PageTextData[10].Back_Camera_dropdown)
        $('#LeftSide').html(jsonObject.PageTextData[10].Left_Camera_dropdown)
        $('#RightSide').html(jsonObject.PageTextData[10].Right_Camera_dropdown)
        $('#TopSide').html(jsonObject.PageTextData[10].Top_Camera_dropdown)
        $('#BottomSide').html(jsonObject.PageTextData[10].Bottom_Camera_dropdown)
        $('#Default_Button').html(jsonObject.PageTextData[10].Default_Button)
        $('#Back_Button').html(jsonObject.PageTextData[10].Back_Button)
        $('#Left_Button').html(jsonObject.PageTextData[10].Left_Button)
        $('#Right_Button').html(jsonObject.PageTextData[10].Right_Button)
        $('#Off_button').html(jsonObject.PageTextData[10].Off_Button)

        // Interaction Animation 
        $('#AnimationOptions_Button').html(jsonObject.PageTextData[11].Animation_Header_interaction)
        $('#RotX_Button').html(jsonObject.PageTextData[11].RotX_button)
        $('#RotY_Button').html(jsonObject.PageTextData[11].RotY_button)
        $('#Rotz_Button').html(jsonObject.PageTextData[11].RotZ_button)
        $('#Stop_Button').html(jsonObject.PageTextData[11].Stop_button)

        // Interaction Render and lights
        $('#RenderLights_Button').html(jsonObject.PageTextData[12].RenderLights_Header_interaction)
        $('.RenderLightsText').html('<p>' + jsonObject.PageTextData[12].RenderLightsDescription +'</p>')
        $('#Render_header').html(jsonObject.PageTextData[12].Render_subtitle_dropdown)
        $('#Polygon_dropdown').html(jsonObject.PageTextData[12].Polygon_dropdown)
        $('#Wireframe_dropdown').html(jsonObject.PageTextData[12].Wireframe_dropdown)
        $('#Vertex_dropdown').html(jsonObject.PageTextData[12].Vertex_dropdown)
        $('#Lights_header').html(jsonObject.PageTextData[12].Lights_subtitle_dropdown)
        $('#RenderLights_Default_Button').html(jsonObject.PageTextData[12].Default_dropdown)
        $('#Onmi_button').html(jsonObject.PageTextData[12].Onmi_dropdown)
        $('#Target_Button').html(jsonObject.PageTextData[12].Target_dropdown)
        $('#Headlight_dropdown').html(jsonObject.PageTextData[12].Headlight_dropdown)
        $('#Poly_Button').html(jsonObject.PageTextData[12].Poly_Button)
        $('#Wire_Button').html(jsonObject.PageTextData[12].Wire_Button)
        $('#Headlight_Button').html(jsonObject.PageTextData[12].Headlight_Buttons)
        $('#Default_info_Button').html(jsonObject.PageTextData[12].Default_Button)

    })
})