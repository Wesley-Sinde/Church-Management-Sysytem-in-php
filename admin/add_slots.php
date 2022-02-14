   <div class="row-fluid">
       <!-- block -->
       <div class="block">
           <div class="navbar navbar-inner block-header">
               <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add Slots Here</i></div>
           </div>
           <div class="block-content collapse in">
               <div class="span12">
                   <form method="post">
                       <table>
                           <tr>
                               <td style="color: #003300; font-weight: bold; font-size: 16px">Enter Slots Data Here:</td>
                           </tr>
                           <tr>
                               <td>&nbsp;</td>
                           </tr>
                           <tr>
                               <td>&nbsp; Title</td>
                           </tr>
                           <tr>
                               <td><input type="text" name="title" placeholder="Title"></td>
                           </tr>
                           <tr>
                               <td>&nbsp; No of slots available</td>
                           </tr>
                           <tr>
                               <td><input type="number" name="slots" placeholder="slots"></td>
                           </tr>

                           <tr>
                               <td>&nbsp; Event Date</td>
                           </tr>
                           <tr>
                               <td><input type="date" name="eventDate" placeholder="Event Date"></td>
                           </tr>

                           <tr>
                               <td>&nbsp; Description</td>
                           </tr>
                           <tr>
                               <td>
                                   <textarea name="description" placeholder="Description" class="text"></textarea>
                               </td>
                           </tr>
                           <tr>
                               <td><input type="submit" name="send" value="SAVE"></td>
                           </tr>
                       </table>
                   </form>
               </div>
           </div>
       </div>
       <!-- /block -->
   </div>

   <?php

    if (isset($_POST['send'])) {

        $title = $_POST['title'];
        $slots = $_POST['slots'];
        $eventDate = $_POST['eventDate'];
        $description = $_POST['description'];
        $u_id = $_SESSION['id'];
        $qry = "INSERT INTO slotsreserved (title,slots,eventDate,description,u_id)
							VALUES('$title','$slots','$eventDate','$description','$u_id')";
        $result = mysqli_query($conn, $qry) or die(mysqli_error());
        if ($result == TRUE) {
            echo "<script type = \"text/javascript\">
											
											window.location = (\"addResrveSlots.php\")
											</script>";
        } else {
            echo "<script type = \"text/javascript\">
											alert(\"message Not Send. Try Again\");
											</script>";
        }
    }


    ?>