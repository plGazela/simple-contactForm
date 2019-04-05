<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Roboto" rel="stylesheet">
        <style>
            html, body {
                margin: 0 auto;
                background: #E9F1F3;
                height: 100%;
                font-family: 'Roboto', sans-serif;
            }
            form {
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            fieldset {
                padding: 20px 50px;
                width: 400px;
                background: #FFFFFF;
                border: none;
                border-radius: 5px;
                box-shadow: 0px 5px 45px 1px rgba(0,0,0,0.25);
            }
            #legend {
                font-family: 'Black Han Sans', sans-serif;
                font-size: 14px;
                text-align: center;
                letter-spacing: 1px;
            }
            label {
                color: #C7CAD3;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            input {
                font-family: 'Roboto', sans-serif;
                margin: 10px 0;
                padding: 10px 20px;
                width: 100%;
                background-color: #F1F2F7;
                display: block;
                box-sizing: border-box;
                border: none;
                border-radius: 5px;
            }
            textarea {
                font-family: 'Roboto', sans-serif;
                margin: 10px 0;
                padding: 20px;
                width: 100%;
                height: 136px;
                display: block;
                resize: none;
                border: none;
                box-sizing: border-box;
                border-radius: 5px;
                box-shadow: 0px 5px 45px 1px rgba(0,0,0,0.1);
            }
            #flex {
                padding: 20px 0;
                display: flex;
                justify-content: space-between;
            }
            input[name="send"] {
                align-self: flex-end;
                width: 45%;
                float: right;
                color: #EBFCF3;
                background-color: #3B55E6;
                font-family: 'Roboto', sans-serif;
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .message-box {
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .message {
                padding: 20px 50px;
                width: 400px;
                background: #FFFFFF;
                border-radius: 5px;
                box-shadow: 0px 5px 45px 1px rgba(0,0,0,0.25);
            }
            .message a {
                color: #C7CAD3;
                font-size: 12px;
                text-transform: uppercase;
                text-decoration: none;
                letter-spacing: 1px;
            }
            .message a:hover {
                color: #a9acb5;
            }
            #correct {
                color: #00FF00;
            }
            #error {
                color: #FF0000;
            }
        </style>
    </head>
    <body>
        <?php 
           error_reporting(0);
           if (empty ($_POST['send'])) { 
        ?>
        <form method="POST">
            <fieldset>
                <div id="legend">
                    <h1>Contact Us</h1>
                </div>
                <label>Your E-Mail 
                    <input type="email" maxlength="48" required="required" name="email">
                </label>
                <label>Your Message 
                    <textarea maxlength="288" required="required" name="text"></textarea>
                </label>
                <div id="flex">
                    <label>Your Name 
                        <input type="text" maxlength="21" required="required" name="name">
                    </label>
                    <input type="submit" value="Send Message" name="send">
                </div>
            </fieldset>
        </form>
        <?php } else {
            $email = $_POST['email'];
            $text = $_POST['text'];
            $name = $_POST['name'];
            $mail = "E-Mail: $email\nMessage: $text\n\nSent by: $name";
            mail ('pl.jgezela@gmail.com', 'Message', $mail) or die ("<div class='message-box'><div class='message'><a href='index.php'>Return</a><p id='error'>Postal program error!<br>The message has not been sent.</p></div></div>");
            echo "<div class='message-box'><div class='message'><a href='index.php'>Return</a><p id='correct'>Message was sent.</p></div></div>";
        }
        ?>
    </body>
</html>