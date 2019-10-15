<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dummy_Catering</title>
</head>

<body>
    <!-- <form action="<?php //echo base_url() ?>Dummy_controller/getPostData" method="post"> -->
    <form action="Localhost/event-food-catering3/Dummy_controller/getPostData" method="post">
        <label for=" texta">Enter Number</label>
        <input type="text" name="texta" id="">
        <label for="textb">Enter food</label>
        <input type="text" name="textb" id="">
        <input type="submit" class="btn btn-primary" name="dummySubmit" value="SUBMIT">
    </form>

</body>

</html>