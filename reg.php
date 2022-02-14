<?php
error_reporting(0);
 $db = mysqli_select_db('cman',@mysqli_connect('localhost','root','')); ?>
<?php
if (isset($_POST['submit'])){
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$Gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$residence= $_POST['residence'];
$pob = $_POST['pob'];
$ministry = $_POST['ministry'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$password = $_POST['password'];


$query = @mysqli_query($conn,"select * from members where  mobile = '$mobile'  ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('This Member Already Exists');
window.location = "index.php";
</script>
<?php
}else{
mysqli_query($conn,"insert into members (fname,sname,lname,Gender,birthday,residence,pob,ministry,mobile,email,thumbnail,password,id) 
values('$fname','$sname','$lname','$Gender','$birthday','$residence','$pob','$ministry','$mobile','$email','uploads/none.png','$password','$mobile')")or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Added member $mobile')")or die(mysqli_error());
?>
<script>
window.location = "index.php";
$.jGrowl("Member Successfully added", { header: 'Member add' });
</script>
<?php
}
}
?>