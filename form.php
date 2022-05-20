<?php
$fileName = $_POST["file"];
$sname = $_POST["sname"];
$fname = $_POST["fname"];
$name = $_POST["name"];
$year = $_POST["year"];
$sem = $_POST["sem"];
$roll = $_POST["roll"];
$n = "th";
$m = "th";

$gen = ".";

if($fname == "Monika Kandwal") {
    $gen = "Mrs.";
} else {
    $gen = "Mr.";
}

if($year == 1) {
    $n = "st";
}

if($year == 2) {
    $n = "nd";
}


if($year == 3) {
    $n = "rd";
}

if($sem == 1) {
    $n = "st";
}

if($sem == 2) {
    $n = "nd";
}


if($sem == 3) {
    $n = "rd";
}


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page Maker ITG</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    html {
        background-color: rgb(93, 93, 93);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body {
        width: 8.3in;
        height: 11.7in;
        background-color: white;
        display: grid;
        text-align: center;
        grid-template-rows: max-content max-content max-content max-content;
    }

    .assignmentTitle {
        margin-top: 50px;
        font-size: 25px;
        font-width: 900;
        text-transform: uppercase;
    }

    .subjectName {
        font-size: 30px;
        text-transform: capitalize;
    }

    .logo {
        margin: 50px 0px;
    }

    .footer {
        display: flex;
        gap: 50px;
    }

    .by {
        width: 50%;
        text-align: left;
        padding: 10px;
        display: grid;
        gap: 10px;
        outline: 1px solid black;
        margin-left: 10px;
    }
    
    .to {
        width: 50%;
        text-align: left;
        padding: 10px;
        display: grid;
        gap: 10px;
        outline: 1px solid black;
        margin-right: 10px;
    }
    
    .inp {
        display: flex;
        gap: 5px;
    }

    .input {
        height: 50px;
        display: flex;
        justify-content: center;
    }

    .change:active {
        background-color: lightgreen;
    }
</style>
<body onload="window.print()" ondblclick="print()">
    <div class="assignmentTitle">
        <h1>'. $fileName .'</h1>
    </div>
    <div class="subjectName">
        <p id="subName">' . $sname . '</p>
        <br><br>
        <p>Submitted for</p><h4>Bachelor of Technology<br>in<br><text id="br1" class="change" onclick="brDefine()" style="cursor: pointer;">Computer Science and Engineering</text></h4>
    </div>
    <div class="logo">
        <img src="ITG-LOGO.png" width="300"><br>
        <h1>Institute of Technology Gopeshwar</h1>
        <p>(Department of <text id="br2" class="change" onclick="brDefine()" style="cursor: pointer;">Computer Science and Engineering</text>)</p>
    </div>
    <div class="footer">
        <div class="by">
            Submitted To:<br>
            <div class="byDetails">
                <p><text class="change" id="gen" onclick="genDefine()" style="cursor: pointer;">'.$gen.'</text> <b>'. $fname . '</b><br>
                Assistant Professor <br>
                (C.S.E Department)<br>
            </div>
        </div>
        <div class="to">
            Submitted By:<br>
            <div class="inp"><h4>Name: </h4><p>'.$name.'</p></div>
            <div class="inp"><h4>Year/Sem: </h4><p>'.$year.'<sup>'.$n.'</sup> / '.$sem.'<sup>'.$m.'</sup></p></div>
            <div class="inp"><h4>Roll Number: </h4><p>'.$roll.'</p></div>
        </div>
    </div>
</body>
<script>
    function genDefine() {
        var gd = prompt("Gender", "Mr./Mrs./Miss./Mizz.");
        document.getElementById("gen").innerText = gd;
    }

    function brDefine() {
        var br =  prompt("Branch", "Computer Science and Engineering...");
        var br1 = document.getElementById("br1");
        var br2 = document.getElementById("br2");
        br1.innerText = br;
        br2.innerText = br;
    }
</script>
</html>';

?>