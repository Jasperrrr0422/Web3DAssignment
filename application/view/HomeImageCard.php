<?php
// X3D model: coke,sprite and pepper 

$htmlCode = '';
for ($i = 0; $i < count($contentData); $i++) {
    $htmlCode .= '<div class="col-sm-4">';
    $htmlCode .= '<div class="card">';
    $htmlCode .=  '<a href = "'.htmlspecialchars($contentData[$i]['RenderURL']).'"data-fancybox="coke_3dFancyBox" data-caption="'.htmlspecialchars($contentData[$i]['Caption']).'">';
    $htmlCode .= '<img class="card-img-top img-fluid img-thumbnail" src="'.htmlspecialchars($contentData[$i]['MainURL']).'" alt="Coca Cola"/>';
    $htmlCode .= '</a>';
    $htmlCode .= '<div class="card-body">';
    $htmlCode .='<div class="card-title"><h2>'.htmlspecialchars($contentData[$i]['Title']).'</h2></div>';
    $htmlCode .='<div class="card-subtitle"><h3>'.htmlspecialchars($contentData[$i]['SubTitle']).'</h3></div>';
    $htmlCode .='<div class="card-text"><p>'.htmlspecialchars($contentData[$i]['Descrition']).'</p></div>';
    $htmlCode .='<a href ="'.htmlspecialchars($contentData[$i]['Website']).'" class="btn btn-primary">Find Out more ...</a>';
    $htmlCode .='</div>';
    $htmlCode .='</div>';
    $htmlCode .='</div>';
}
?>