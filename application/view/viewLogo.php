<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JSON Sample</title>
</head>
<body>
    <div id="Coca_Logo"></div>
    <link rel="stylesheet" href="../application/css/custom.css">
    <!-- Use a more recent version of jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        var url = '../application/model/CreateLogoJson.php';
        $.getJSON(url, function(data) {
      
            // $('#Coca_Logo').html(output);
            // console.log(output); // Correct function to output to console
        var output="";
        for (var i in data.Logo) {
            output+="<h1>" + data.Logo[i].coca_logo +"</h1>";
            output+="<h2>" + data.Logo[i].Cola_logo +"</h2>";
            output+="<h3>" + data.Logo[i].Journey_logo +"</h3>";
            output+="<p>" + data.Logo[i].Text_logo +"</p>";
			;
        }

        output+="";
        console.log(output);
        // Assign HTML to the placeholder tag yuisnbg JQuery .htnl() method
        $('#Looo').html(output);
        });
    });
    </script>
</body>
</html>