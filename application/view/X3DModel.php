<?php
// X3D model: coke,sprite and pepper 
$htmlContent = '';
for ($i = 0; $i < count($modelData); $i++) {
    $htmlContent .= '<div id="' . htmlspecialchars($modelData[$i]['brand']) . '" style="display:none;">';
    $htmlContent .= '<div class="card-title"><h2>' . htmlspecialchars($modelData[$i]['x3dModelTitle']) . '</h2></div>';
    $htmlContent .= '<div class="model3D"><x3d><scene><inline url="' . htmlspecialchars($modelData[$i]['X3D_URL']) . '"></inline></scene></x3d></div>';
    $htmlContent .= '<div class="card-text"><p>' . htmlspecialchars($modelData[$i]['x3dCreationMethod']) . '</p></div>';
    $htmlContent .= '</div>';
}

?>