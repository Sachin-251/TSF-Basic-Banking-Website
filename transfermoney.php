<?php include('header.php'); 

include 'connection.php';
$ids=$_GET['idtransfer'];
$showquery="select * from `customers` where ID=($ids) ";
$showdata=mysqli_query($con,$showquery);
if (!$showdata) {
printf("Error: %s\n", mysqli_error($con));
exit();
}
$arrdata=mysqli_fetch_array($showdata);?>


<div class='trans'>
<div class='contain'>
    <div class='wrapper'>
        <div class='form'>
        <form method="POST">
                        <h2>Sender</h2>
                        <h2>Transfer to</h2>
                            <p>
                                <label for='firstname'>Sender's'Name</label>
                                <input type="text" value="<?php echo $arrdata['name']; ?>" name='name1' data-required="true" readonly>
                            </p>
                            <p>
                                <label for='firstname'>Reciever's Name</label>
                                <input type="text" placeholder="Name" name='name2' id='firstname' data-required="true" autocomplete="off">
                            </p>
                            <p>
                                <label for="email">Sender's E-mail</label>
                                <input type="text" value="<?php echo $arrdata['email']; ?>" name='email1' data-required="true" data-type="email" readonly>
                            </p>
                            <p>
                                <label for="email">Reciever's E-mail</label>
                                <input type="text" placeholder="E-mail"  name='email2' data-required="true" data-type="email" autocomplete="off">
                            </p>
                            <p>
                                <label for="cemail">Amount</label>
                                <input type="text" value="" placeholder="Amount" name='amount1' data-required="true" autocomplete="off" data-error-message="Amount is required">
                            </p>
                            <br>
                
                <button  name="submit">Proceed to Pay</button>

        </form>
        </div>
    </div>
</div>
</div>

<?php

include 'connection.php';

if(isset($_POST['submit']))
{
    
  
    $Sender_name=$_POST['name1'];
    $Sender_email=$_POST['email1'];
    $Sender=$_POST['amount1'];
    $Receiver_name=$_POST['name2'];
    $Receiver_email=$_POST['email2'];
     
  

    $ids=$_GET['idtransfer'];
    $senderquery="select * from `customers` where ID=$ids ";
    $senderdata=mysqli_query($con,$senderquery);
  
    if (!$senderdata) {
     printf("Error: %s\n", mysqli_error($con));
    exit();
    }
    $arrdata=mysqli_fetch_array($senderdata);

    //receiverquery
    $receiverquery="select * from `customers` where Email='$Receiver_email' ";
    $receiver_data=mysqli_query($con,$receiverquery);
   
    if (!$receiver_data) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
    }
    $receiver_arr=mysqli_fetch_array($receiver_data);
    $id_receiver=$receiver_arr['id'];


    if($arrdata['balance'] >= $Sender)
    {
      $decrease_sender=$arrdata['balance'] - $Sender;
      $increase_receiver=$receiver_arr['balance'] + $Sender;
       $query="UPDATE `customers` SET `id`=$ids,`balance`= $decrease_sender  where `id`=$ids ";
       $rec_query="UPDATE`customers` SET `id`=$id_receiver,`balance`= $increase_receiver where  `id`=$id_receiver ";
       $res= mysqli_query($con,$query);
       $rec_res= mysqli_query($con,$rec_query);
      // $res_receiver=mysqli_query($con,$query_receiver);
       if($res && $rec_res)
      {
       ?>
       <script>
       swal("Done!", "Transaction Successful!", "success");
        </script> 
    
      <?php
   
      }
      else
      {
      ?>
           <script>
       swal("Error!", "Error Occured!", "error");
        </script> 

      <?php
      
      }
    }
  

  else
 {
  ?>
    <script>
       swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
        </script> 
  <?php   
 }
 
}
?>



<?php include('footer.php'); ?>
