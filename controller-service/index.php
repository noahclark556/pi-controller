<?php 
    include'connect.php';
?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="UTF-8">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />


    <title>RPI Controller</title>

    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">





</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="jumbotron">
                    <h1>Welcome to PI Controller</h1><br />

                    <div class="options">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Transmitter
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <form class="transmitForm">
                                            <li class="list-group-item">
                                                <div class="form-group">
                                                    <label for="freq">Frequency</label>
                                                    <input type="text" class="form-control" id="freq" aria-describedby="frequency">
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="form-group">
                                                    <label for="band">Bandwidth</label>
                                                    <input type="text" class="form-control" id="band">
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <small>
                                                    <span><span style="color:red;">NOTICE:</span> Currently only able to transmit wav guitar sound</span>
                                                </small>
                                            </li>
                                            <li class="list-group-item">
                                                <button type="submit" class="btn btn-primary" id="send">Transmit</button>
                                                <button type="button" class="btn btn-danger" id="killTrans" value="Kill Transmit">Kill Transmit</button>
                                            </li>

                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Send to Term
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <form class="commandForm">
                                            <li class="list-group-item">
                                                <div class="form-group">
                                                    <label for="com">Command</label>
                                                    <input type="text" class="form-control" id="com" aria-describedby="command">
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <input type="button" class="btn btn-primary" id="cmdBtn" value="Send">
                                            </li>

                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Shutdown Pi
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <form class="shutdwonForm">

                                            <li class="list-group-item">
                                                <button type="submit" class="btn btn-danger" id="shutdown">Shutdown</button>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" id="console">
                <div class="jumbotron">
                    <h4>Console Output</h4><br />

                    <div class="consoleOut">

                        <?php 
//                            $sql = "SELECT console FROM test";
   // $result = $conn->query($sql);
   // if ($result->num_rows > 0) {
   // // output data of each row
   // while($row = $result->fetch_assoc()) {
   // echo $row['console'];
   // }
   // }
                        
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    <form class="send" method="POST" action="send.php" id="send">
        <input type="text" placeholder="command" class="command" id="command" name="command">
        <button type="submit" class="sumbit">send</button>
    </form>
-->
    <script src="script/jquery.min.js" type="text/javascript" language="JavaScript"></script>
    <script src="script/bootstrap.min.js" type="text/javascript" language="JavaScript"></script>
    <script src="script/script.js" type="text/javascript" language="JavaScript"></script>
</body>


</html>
