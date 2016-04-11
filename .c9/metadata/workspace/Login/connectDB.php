{"changed":true,"filter":false,"title":"connectDB.php","tooltip":"/Login/connectDB.php","value":"<?php\n\n\n/**\n \n \n *  Auhtor: Stephen Kearns \n \n */\n\n//includes congfig credentials so that they could be used within file  \ninclude(\"Config.php\");\nclass DBconnect \n{\n    \n    /**\n     * \n     */\n     \n    header('Access-Control-Allow-Origin: *');\n    require_once 'Config.php';\n    public function Connect()\n    {    \n        //Create variables to hold db credentials \n      \n        \n        // Connect to the db\n        $connect = mysqli_connect(dbhost, dbuser, dbname);\n       \n        if(!$connect){\n            return true;\n        }else\n           return $connect;\n        \n    }\n    \n    \n    public function UserRegister($name,$userName,$password,$email){\n        \n        \n        //connect to the database \n        $con = $this->Connect();\n        //prepare statement to stop sql injection\n        $stmt = mysqli_prepare($con, \"INSERT INTO UserLogin (username,name,email,password) VALUES (?,?,?,?) \");\n        mysqli_stmt_bind_param($stmt, \"ssss\", $userName,$name,$password,$email );\n        mysqli_start_execute($stmt);\n        mysqli_stmt_close($stmt);\n        \n        \n    }\n    \n    \n    \n}\n\n\n\n\n\n\n\n\n?>","undoManager":{"mark":-474,"position":100,"stack":[[{"start":{"row":44,"column":73},"end":{"row":44,"column":74},"action":"insert","lines":["e"],"id":1447}],[{"start":{"row":44,"column":74},"end":{"row":44,"column":75},"action":"insert","lines":["m"],"id":1448}],[{"start":{"row":44,"column":75},"end":{"row":44,"column":76},"action":"insert","lines":["a"],"id":1449}],[{"start":{"row":44,"column":72},"end":{"row":44,"column":76},"action":"remove","lines":["$ema"],"id":1450},{"start":{"row":44,"column":72},"end":{"row":44,"column":78},"action":"insert","lines":["$email"]}],[{"start":{"row":44,"column":80},"end":{"row":44,"column":81},"action":"insert","lines":[";"],"id":1451}],[{"start":{"row":44,"column":81},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":1452},{"start":{"row":45,"column":0},"end":{"row":45,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":45,"column":8},"end":{"row":45,"column":9},"action":"insert","lines":["m"],"id":1453}],[{"start":{"row":45,"column":9},"end":{"row":45,"column":10},"action":"insert","lines":["y"],"id":1454}],[{"start":{"row":45,"column":10},"end":{"row":45,"column":11},"action":"insert","lines":["s"],"id":1455}],[{"start":{"row":45,"column":11},"end":{"row":45,"column":12},"action":"insert","lines":["q"],"id":1456}],[{"start":{"row":45,"column":12},"end":{"row":45,"column":13},"action":"insert","lines":["l"],"id":1457}],[{"start":{"row":45,"column":13},"end":{"row":45,"column":14},"action":"insert","lines":["i"],"id":1458}],[{"start":{"row":45,"column":14},"end":{"row":45,"column":15},"action":"insert","lines":["_"],"id":1459}],[{"start":{"row":45,"column":15},"end":{"row":45,"column":16},"action":"insert","lines":["s"],"id":1460}],[{"start":{"row":45,"column":16},"end":{"row":45,"column":17},"action":"insert","lines":["t"],"id":1461}],[{"start":{"row":45,"column":17},"end":{"row":45,"column":18},"action":"insert","lines":["a"],"id":1462}],[{"start":{"row":45,"column":18},"end":{"row":45,"column":19},"action":"insert","lines":["r"],"id":1463}],[{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"insert","lines":["t"],"id":1464}],[{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"insert","lines":["_"],"id":1465}],[{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"insert","lines":["e"],"id":1466}],[{"start":{"row":45,"column":22},"end":{"row":45,"column":23},"action":"insert","lines":["x"],"id":1467}],[{"start":{"row":45,"column":23},"end":{"row":45,"column":24},"action":"insert","lines":["e"],"id":1468}],[{"start":{"row":45,"column":24},"end":{"row":45,"column":25},"action":"insert","lines":["c"],"id":1469}],[{"start":{"row":45,"column":25},"end":{"row":45,"column":26},"action":"insert","lines":["u"],"id":1470}],[{"start":{"row":45,"column":26},"end":{"row":45,"column":27},"action":"insert","lines":["t"],"id":1471}],[{"start":{"row":45,"column":27},"end":{"row":45,"column":28},"action":"insert","lines":["e"],"id":1472}],[{"start":{"row":45,"column":28},"end":{"row":45,"column":30},"action":"insert","lines":["()"],"id":1473}],[{"start":{"row":45,"column":29},"end":{"row":45,"column":30},"action":"insert","lines":["$"],"id":1474}],[{"start":{"row":45,"column":30},"end":{"row":45,"column":31},"action":"insert","lines":["s"],"id":1475}],[{"start":{"row":45,"column":31},"end":{"row":45,"column":32},"action":"insert","lines":["t"],"id":1476}],[{"start":{"row":45,"column":32},"end":{"row":45,"column":33},"action":"insert","lines":["a"],"id":1477}],[{"start":{"row":45,"column":33},"end":{"row":45,"column":34},"action":"insert","lines":["t"],"id":1478}],[{"start":{"row":45,"column":34},"end":{"row":45,"column":35},"action":"insert","lines":["e"],"id":1479}],[{"start":{"row":45,"column":35},"end":{"row":45,"column":36},"action":"insert","lines":["m"],"id":1480}],[{"start":{"row":45,"column":36},"end":{"row":45,"column":37},"action":"insert","lines":["e"],"id":1481}],[{"start":{"row":45,"column":37},"end":{"row":45,"column":38},"action":"insert","lines":["n"],"id":1482}],[{"start":{"row":45,"column":38},"end":{"row":45,"column":39},"action":"insert","lines":["t"],"id":1483}],[{"start":{"row":45,"column":38},"end":{"row":45,"column":39},"action":"remove","lines":["t"],"id":1484}],[{"start":{"row":45,"column":37},"end":{"row":45,"column":38},"action":"remove","lines":["n"],"id":1485}],[{"start":{"row":45,"column":36},"end":{"row":45,"column":37},"action":"remove","lines":["e"],"id":1486}],[{"start":{"row":45,"column":35},"end":{"row":45,"column":36},"action":"remove","lines":["m"],"id":1487}],[{"start":{"row":45,"column":34},"end":{"row":45,"column":35},"action":"remove","lines":["e"],"id":1488}],[{"start":{"row":45,"column":33},"end":{"row":45,"column":34},"action":"remove","lines":["t"],"id":1489}],[{"start":{"row":45,"column":32},"end":{"row":45,"column":33},"action":"remove","lines":["a"],"id":1490}],[{"start":{"row":45,"column":32},"end":{"row":45,"column":33},"action":"insert","lines":["m"],"id":1491}],[{"start":{"row":45,"column":33},"end":{"row":45,"column":34},"action":"insert","lines":["t"],"id":1492}],[{"start":{"row":45,"column":35},"end":{"row":45,"column":36},"action":"insert","lines":[";"],"id":1493}],[{"start":{"row":45,"column":36},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":1494},{"start":{"row":46,"column":0},"end":{"row":46,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":46,"column":8},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":1495},{"start":{"row":47,"column":0},"end":{"row":47,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":47,"column":4},"end":{"row":47,"column":8},"action":"remove","lines":["    "],"id":1496}],[{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"remove","lines":["    "],"id":1497}],[{"start":{"row":46,"column":8},"end":{"row":47,"column":0},"action":"remove","lines":["",""],"id":1498}],[{"start":{"row":46,"column":8},"end":{"row":46,"column":9},"action":"insert","lines":["m"],"id":1499}],[{"start":{"row":46,"column":9},"end":{"row":46,"column":10},"action":"insert","lines":["y"],"id":1500}],[{"start":{"row":46,"column":10},"end":{"row":46,"column":11},"action":"insert","lines":["s"],"id":1501}],[{"start":{"row":46,"column":11},"end":{"row":46,"column":12},"action":"insert","lines":["q"],"id":1502}],[{"start":{"row":46,"column":12},"end":{"row":46,"column":13},"action":"insert","lines":["l"],"id":1503}],[{"start":{"row":46,"column":13},"end":{"row":46,"column":14},"action":"insert","lines":["i"],"id":1504}],[{"start":{"row":46,"column":14},"end":{"row":46,"column":15},"action":"insert","lines":["_"],"id":1505}],[{"start":{"row":46,"column":15},"end":{"row":46,"column":16},"action":"insert","lines":["c"],"id":1506}],[{"start":{"row":46,"column":16},"end":{"row":46,"column":17},"action":"insert","lines":["l"],"id":1507}],[{"start":{"row":46,"column":17},"end":{"row":46,"column":18},"action":"insert","lines":["o"],"id":1508}],[{"start":{"row":46,"column":18},"end":{"row":46,"column":19},"action":"insert","lines":["s"],"id":1509}],[{"start":{"row":46,"column":19},"end":{"row":46,"column":20},"action":"insert","lines":["e"],"id":1510}],[{"start":{"row":46,"column":19},"end":{"row":46,"column":20},"action":"remove","lines":["e"],"id":1511}],[{"start":{"row":46,"column":18},"end":{"row":46,"column":19},"action":"remove","lines":["s"],"id":1512}],[{"start":{"row":46,"column":17},"end":{"row":46,"column":18},"action":"remove","lines":["o"],"id":1513}],[{"start":{"row":46,"column":16},"end":{"row":46,"column":17},"action":"remove","lines":["l"],"id":1514}],[{"start":{"row":46,"column":15},"end":{"row":46,"column":16},"action":"remove","lines":["c"],"id":1515}],[{"start":{"row":46,"column":15},"end":{"row":46,"column":16},"action":"insert","lines":["s"],"id":1516}],[{"start":{"row":46,"column":16},"end":{"row":46,"column":17},"action":"insert","lines":["t"],"id":1517}],[{"start":{"row":46,"column":17},"end":{"row":46,"column":18},"action":"insert","lines":["m"],"id":1518}],[{"start":{"row":46,"column":18},"end":{"row":46,"column":19},"action":"insert","lines":["t"],"id":1519}],[{"start":{"row":46,"column":19},"end":{"row":46,"column":20},"action":"insert","lines":["_"],"id":1520}],[{"start":{"row":46,"column":20},"end":{"row":46,"column":21},"action":"insert","lines":["c"],"id":1521}],[{"start":{"row":46,"column":21},"end":{"row":46,"column":22},"action":"insert","lines":["l"],"id":1522}],[{"start":{"row":46,"column":22},"end":{"row":46,"column":23},"action":"insert","lines":["o"],"id":1523}],[{"start":{"row":46,"column":23},"end":{"row":46,"column":24},"action":"insert","lines":["s"],"id":1524}],[{"start":{"row":46,"column":24},"end":{"row":46,"column":25},"action":"insert","lines":["e"],"id":1525}],[{"start":{"row":46,"column":25},"end":{"row":46,"column":27},"action":"insert","lines":["()"],"id":1526}],[{"start":{"row":46,"column":26},"end":{"row":46,"column":27},"action":"insert","lines":["$"],"id":1527}],[{"start":{"row":46,"column":27},"end":{"row":46,"column":28},"action":"insert","lines":["s"],"id":1528}],[{"start":{"row":46,"column":28},"end":{"row":46,"column":29},"action":"insert","lines":["t"],"id":1529}],[{"start":{"row":46,"column":29},"end":{"row":46,"column":30},"action":"insert","lines":["m"],"id":1530}],[{"start":{"row":46,"column":30},"end":{"row":46,"column":31},"action":"insert","lines":["t"],"id":1531}],[{"start":{"row":46,"column":32},"end":{"row":46,"column":33},"action":"insert","lines":[";"],"id":1532}],[{"start":{"row":49,"column":7},"end":{"row":52,"column":35},"action":"remove","lines":[" //Retrive the variables from the user for registration  ","        $UserName = $_POST['name'];","        $UserEmail= $_POST['email'];","        $UserID = $_POST['UserId'];"],"id":1533}],[{"start":{"row":49,"column":6},"end":{"row":49,"column":7},"action":"remove","lines":[" "],"id":1534}],[{"start":{"row":49,"column":5},"end":{"row":49,"column":6},"action":"remove","lines":[" "],"id":1535}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":5},"action":"remove","lines":[" "],"id":1536}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "],"id":1537}],[{"start":{"row":48,"column":8},"end":{"row":49,"column":0},"action":"remove","lines":["",""],"id":1538}],[{"start":{"row":50,"column":4},"end":{"row":50,"column":8},"action":"remove","lines":["    "],"id":1539}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"remove","lines":["    "],"id":1540}],[{"start":{"row":49,"column":8},"end":{"row":50,"column":0},"action":"remove","lines":["",""],"id":1541}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":8},"action":"remove","lines":["    "],"id":1542}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "],"id":1543}],[{"start":{"row":48,"column":8},"end":{"row":49,"column":0},"action":"remove","lines":["",""],"id":1544}],[{"start":{"row":48,"column":4},"end":{"row":48,"column":8},"action":"remove","lines":["    "],"id":1545}],[{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"remove","lines":["    "],"id":1546}],[{"start":{"row":47,"column":8},"end":{"row":48,"column":0},"action":"remove","lines":["",""],"id":1547}],[{"start":{"row":48,"column":4},"end":{"row":48,"column":8},"action":"remove","lines":["    "],"id":1548}]]},"ace":{"folds":[],"scrolltop":228.30001831054688,"scrollleft":0,"selection":{"start":{"row":48,"column":4},"end":{"row":48,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1457556375070}