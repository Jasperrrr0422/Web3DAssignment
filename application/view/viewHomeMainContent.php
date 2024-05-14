<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <link rel="stylesheet" href="../application/css/custom.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
	
	$.getJSON('../application/model/createHomeContent.php', function(data) {
  	
        var output="";
        for (var i in data.HomeContent) {
            output+="<h2>" + data.HomeContent[i].Title +"</h2>";
            output+="<h3>" + data.HomeContent[i].Subtitle +"</h3>";
            output+="<p>" + data.HomeContent[i].Description +"</p>";
			;
        }

        output+="";
        console.log(output);
        // Assign HTML to the placeholder tag yuisnbg JQuery .htnl() method
        $('#main_text').html(output);
        });
    </script>
</body>
</html>