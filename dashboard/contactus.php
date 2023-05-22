
<?php include ('includes/connection.php'); ?>
<?php include('includes/adminheader.php');  ?>

<style>

</style>
 <div id="wrapper">
       
       <?php include 'includes/adminnav.php';?>
       

        <div id="page-wrapper">
       

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">
                    
                        
                    
                        <h1 class="page-header">
                            Welcome 
                            <small><?php echo $_SESSION['name']; ?></small>
                        </h1>
<style>
          table {
	border:pink 5px solid;
}
     
.table_data {
    margin-left: 291px;
    margin-top: 20px;
} 
.tableheader {
	background-color: tan;
    text-align:center;
    color:#C3F961;
    font-weight: bold;
    font-size: 25px;
}
.tablerow {
	background-color: tan;
    
    
    color: blue;
    font-size: 20px;
    font-weight: bold;
}

.aler_message {
	color: #FF0000;
	font-weight: bold;
	text-align: center;
	width: 100%;
}
.text_input {
	font-size: 18px;
    
    border: blue 1px solid;
    background: azure;
    text-indent: 10px;
}
.btn_submit {
    font-size: 18px;
    width: 100px;
    background: azure;
    border: blue 1px solid;
    padding: 6px;
    border-radius: 8px;
    color: blue;
}
.btn_submit:hover {
    font-size: 18px;
    width: 100px;
    background: black;
    border: red 1px solid;
    padding: 6px;
    border-radius: 8px;
    color: white;
	cursor:pointer;
}
    </style>
<form method="POST" action="contact.php">
    <?php
        $_token = md5(time());
        $_SESSION["_token"] = $_token;
    ?>
    <input type="hidden"  name="_token" value="<?php echo $_token; ?>" />
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
    <tr class="tableheader">
    <td colspan="2">Contact Form</td>
    </tr>
    <tr class="tablerow">
    <td>Full Name<br/>  <input type="text" class="text_input" autofocus="autofocus" name="name"></td>
    <td>Email<br/> <input type="text" class="text_input" autofocus="autofocus" name="email"></td>
    </tr>
    <tr class="tablerow">
    <td colspan="2">Message<br/><textarea name="message" class="text_input" autofocus="autofocus" cols="60" rows="6"></textarea></td>
    </tr>
    <tr class="tableheader">
    <td colspan="2"><input type="submit" class="btn_submit" name="contact_us" value="Submit"></td>
    </tr>
    </table>
    
    
</form>