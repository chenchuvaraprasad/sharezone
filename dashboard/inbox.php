<?php include 'includes/connection.php';?>
<?php include 'includes/adminheader.php';?>
<?php include 'includes/adminnav.php';?>
<?php
    // connect with database
    $conn = mysqli_connect("localhost", "root", "", "notes");

    // get all inbox messages such that latest messages are on top
    $sql = "SELECT * FROM inbox ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

?>

    <style>
        
        table.table{
    text-align: center;
    width: 100%;
}
body{
    background-image: url('background.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
tr:nth-child(even), table.list thread> tr{
    background-color: rgb(204,200,200);
}
td{
    border: 1px solid rgb(204,200,200);
    text-align: left;
    padding: 8px 15px;
}
table{
    width: 80%;
    margin: 40px auto;
    background: rgb(124,154,167);
}
button{
    background: #eee;
    padding:6px 12px;
    margin:15px 0 10px;
    display: inline-block;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    cursor: pointer;
    outline: none;
}

button:hover{
    background:#4b99d8 ;
}
input[type="submit"]{
    background: #eee;
    padding:6px 12px;
    margin:15px 10px 10px;
    display: inline;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    cursor: pointer;
    outline: none;
}

input[type="submit"]:hover{
    background: #4b99d8;
}

input[type="reset"]:hover{
    background: #4b99d8;
}
    </style>

    <table class="table">

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>

<?php while ($row = mysqli_fetch_object($result)): ?>
        <tr style="<?php $row->is_read ? '' : 'background-color: lightgray;'; ?>">
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->message; ?></td>
            <td>
                <?php if (!$row->is_read): ?>
                    <form method="POST" action="mark-as-read.php" onsubmit="return confirm('Are you sure you want to mark it as read ?');">
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                        <input type="submit" value="Mark as read">
                    </form>
                <?php endif; ?>

                <form method="POST" action="delete-inbox-message.php" onsubmit="return confirm('Are you sure you want to delete this ?');">
                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
<?php endwhile; ?>

    </table>