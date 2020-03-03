function sendTrans() {
    var freq = $("#freq").val();
    var band = $("#band").val();
    var command = freq + ":" + band;
    var type = "transmit";
    $.ajax({

        url: 'send.php',
        type: 'POST',
        data: {
            command: command,
            type: type
        },
        success: function (response) {

        }
    });
}

function killTrans() {

    //        var curcons = $(".consoleOut").html() + " ";
    //        var newconsole = curcons + "killing transmission";
    var type = "killTransmit";
    var command = "";
    $.ajax({

        url: 'send.php',
        type: 'POST',
        data: {
            type: type,
            command: command
        },
        success: function (response) {

        }
    });

}

function sendCommand() {
    var type = "command";
    var command = $("#com").val();
    $.ajax({

        url: 'send.php',
        type: 'POST',
        data: {
            type: type,
            command: command
        },
        success: function (response) {

        }
    });
}

function shutdown() {
    var type = "shutdown";
    var command = "";
    $.ajax({

        url: 'send.php',
        type: 'POST',
        data: {
            type: type,
            command: command
        },
        success: function (response) {

        }
    });
}
$(document).ready(function () {
    $('body').on('click', '#send', function () {
        sendTrans();
    });
    $('body').on('click', '#killTrans', function () {
        killTrans();
    });
    $('body').on('click', '#shutdown', function () {
        shutdown();
    });
    $('body').on('click', '#cmdBtn', function () {
        //        prompt();
        sendCommand();
    });

});
