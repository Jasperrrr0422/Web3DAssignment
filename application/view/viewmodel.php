<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>
    <div id="jsoncoke"></div>
    <div id="jsonsprite"></div>
    <div id="jsonpepper"></div>
    <!-- <link rel="stylesheet" href="../application/css/custom.css"> -->
    <!-- Use a more recent version of jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    <script type='text/javascript' src='../application/js/x3dom.js'></script>
    <script>
    $(document).ready(function() {
        var url = '..application/model/create3djson.php';
        $.getJSON(url, function(data) {

        var output1="";
        var output2="";
        var output3="";
        for (var i in data.modelthree) {
            output1 += '<inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="' + data.modelthree[i].url1 + '"> </inline>';
            output2+= '<inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="' + data.modelthree[i].url2 + '"> </inline>';
            output3+='<inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="' + data.modelthree[i].url3 + '"> </inline>';
			;
        }

        // Assign HTML to the placeholder tag yuisnbg JQuery .htnl() method
        $('#jsoncoke').html(output1);
        $('#jsonsprite').html(output2);
        $('#jsonpepper').html(output3);
        });
    });
    </script>
</body>
</html>