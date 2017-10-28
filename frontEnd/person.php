<!DOCTYPE html>
<html>
    <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>

<body>

<div ng-app="">
  <p>Name: <input type="text" ng-model="name"></p>
  <p ng-bind="name"></p>
</div>
<?php


function writeMsg() {
    echo 'hello world from person.php';
    echo "<a href = 'popo.html'>popo</a>";
}

writeMsg();
?>
</body>
</html>