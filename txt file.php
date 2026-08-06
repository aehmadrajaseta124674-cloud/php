<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest Example</title>
</head>
<body>

    <h2>Read Data from TXT File</h2>

    <button onclick="loadText()">Load Text</button>

    <p id="demo"></p>

    <script>
        function loadText() {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            };

            xhttp.open("GET", "data.txt", true);
            xhttp.send();
        }
    </script>

</body>
</html>