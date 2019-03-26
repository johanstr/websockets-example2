<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>chatapp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- JOINING SCREEN: After connecting to the server this disappears -->
            <div id="user-container" class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-4">
                        <!-- Present yourself with a name in the chatroom -->
                        <label for="user">Wat is je naam?</label>
                        <input class="form-control" type="text" id="user" name="user">
                    </div>
                    <div class="col-md-2">
                        <!-- Join the chatroom button -->
                        <button class="btn btn-primary mt-32" id="join-chat">Join Chat</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF JOINING SCREEN -->

        <!-- CHATROOM: Shown after joining the chatroom -->
        <div class="row">
            <div id="main-container" class="hidden col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Leave the chatroom button -->
                        <button class="btn btn-danger" type="button" id="leave-room">
                            Leave
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Messages are showed here -->
                        <div id="messages">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="msg-container" id="msg-container">
                            <!-- Message/Chat input -->
                            <input class="form-control col-md" type="text" id="msg" name="msg">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <!-- Send message button -->
                        <button class="btn btn-primary" type="button" id="send-msg">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF CHATROOM -->
    </div>

    <script id="messages-template" type="text/x-handlebars-template">
        {{#each messages}}
            <div class="msg">
                <div class="time">{{time}}</div>
                <div class="details">
                    <span class="user">{{user}}</span>: <span class="text">{{text}}</span>
                </div>
            </div>
        {{/each}}
    </script>

    <script src="js/main.js"></script>
</body>

</html> 