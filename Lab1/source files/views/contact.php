<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact Form</title>
    <style>
    /* Change the look of Labels */
    label {
        display: block;
        margin-top: 20px;
        letter-spacing: 2px;
    }

    /* Center the form  */
    form {
        margin: 0 auto;
        width: 450px;
    }

    /* textbox and textarea styles */
    input,
    textarea {
        width: 430px;
        height: 25px;
        background: #E5FCDF;
        padding: 10px;
        margin-top: 3px;
        color: #4A2A2B;
        border-radius: 7px;
        border: 1px solid green;
    }

    /* height for textarea */
    textarea {
        height: 213px;

    }

    /* Border style on focus */
    input:focus,
    textarea:focus {
        border: 1px solid #97d6eb;
    }

    /* submit button styles */
    #submit {
        width: 130px;
        height: 40px;
        margin-top: 20px;
        margin-bottom: 20px;
        cursor: pointer;
        color: #363E3F;
    }

    /* Change button looks on hover */
    #submit:hover {
        opacity: 0.5;
    }
    </style>
</head>

<body>

    <div style="background-color:#F0F7F6; width:50%; margin:40px auto;">
        <h2 style="text-align:center;  background: #DCF5FD; height:30px; color: #807A7A">
            CONTACT FORM
        </h2>

        <form method="post" action="index.php">
            <!-- <center> -->
            <h5 style="color:red"><?php echo $error;?></h5>
            <!-- </center> -->
            <label>Name</label>
            <input name="name" value="<?php echo remember_var('name')?>" placeholder="Enter Your name" type="input" />
            <div style=" color:red">
            </div>

            <label>Email</label>
            <input name="email" type="input" placeholder="Enter your email"
                value="<?php echo remember_var("email")?>" />
            <div style="color:red"></div>

            <label>Message</label>
            <textarea name="message" placeholder="Type Your message"><?php echo remember_var("message")?></textarea>
            <div style="color:red"></div>

            <input id="submit" name="submit" type="submit" value="Go" />
        </form>
    </div>
</body>

</html>