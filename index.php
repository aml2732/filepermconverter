<!doctype html>
<HTML>
<HEAD>
  <title>Converter</title>
  <script>
  function convertfp(){
    var str = document.getElementById("filepermissions").value;
    console.log("str: ")
    console.log(str);
    if(str.length > 0){
      var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("computedValue").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "convertFilePermissions.php?str=" + str, true);
        xmlhttp.send();
    }
    else{
      console.log("an error occurred.")
    }
  }
  </script>
</HEAD>
<BODY>
  <h1>Learning PHP - Convert File Permissions</h1>
  <p>This small converter takes the human-readable ls -l file permissions as input, and outputs the related chmod command. It demonstrates basic PHP concepts such as:
  <ul>
    <li>variables and variable computation/concatination</li>
    <li>if statements</li>
    <li>for loops</li>
    <li>responding to a AJAX request</li>
  </ul></p>
  <h3> Enter file permissions</h3>
  <input id="filepermissions" type="text" placeholder="-rw-r--r--"></input>
  <button id="submitfilepermissions" onclick="convertfp()">Convert</button><br/>
  <h3> chmod command: </h3>
  <p id="computedValue"></p>
</BODY>
</HTML>
