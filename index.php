<!doctype html>
<?php include 'ind.php'; ?>
<html lang="en">
<script>
    var _targetDiv = null;
    function showDiv(id) {
        if(_targetDiv) {
            _targetDiv.style.display = 'none';
            _targetDiv = null;
        } else {
            _targetDiv = document.getElementById(id);
            _targetDiv.style.display = 'block';
        }
    }
    function select(tagClass) {
        if (document.getElementById(tagClass).style.backgroundColor == "white") {
            document.getElementById(tagClass).style.backgroundColor = "rgb(144,144,144";

        } else {
            document.getElementById(tagClass).style.backgroundColor = "white"
        }

    }
</script>
<head>
<meta http-equiv="refresh" content="30" >
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="ios-8859-1">
<title>Taido program generator</title>
</head>
<body>
<div id="headline"><img src="img/banner.jpg" style="height:250px; width:608px;"></div>
<div id="subhead">
<p>Please select if you would like to add exercises or generate a program</p></div>
<div id="selections">
    <a onclick="showDiv('hiddenExercise')">Add new exercise</a>
    <div id="hiddenExercise">
        <div id="close" onclick="showDiv('hiddenExercise')">
            X
        </div>
        <div id="addExercise">
            <b>Add new exercise</b><br>
            <table>
                <tr>
                    <td><table>
                        <form action="index.php" method="post">
                            <tr><td>Headline: </td><td><input type="text" name="headline"></td></tr>
                            <tr><td>Description: </td><td><input type="text" name="description"></td></tr>
                            <tr><td>Duration: </td><td><input type="text" name="duration"></td></tr>
                            <tr><td>Tags:</td><td><input type="text" name="tags"</td></tr>
                            <tr><td>Language: </td><td><select name="language">
                                <option value="SWE" selected>Svenska</option>
                                <option value="ENG" >English</option>
                            </select></td></tr>
                        <tr><td><input type="submit" value="Submit"></td></tr>
                        </form>
                    </table></td>
                    <td width="20"></td>
                    <td> <div id="tags">
                        <!--add all tags from the db here -->
                        <?php

                            $arr = getDb('tags');
                            foreach($arr as $tag)
                            {
                                echo "<div class='tag' onclick='select(".$tag[0].")' id='".$tag[0]."'>".$tag[2] ."</div>";
                            }
                        ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<p></p>
<?php

?>
</body>
</html>


