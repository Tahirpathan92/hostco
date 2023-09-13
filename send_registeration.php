<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $e_id = $_POST["e_id"];
    $m_num = $_POST["m_num"];
    $t_num = $_POST["t_num"];
    $c_name = $_POST["c_name"];
    $your_country = $_POST["your_country"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $hosting = $_POST["hosting"];
    $pakage = $_POST["pakage"];
    $domain = $_POST["domain"];
    $subject = 'Register Domain';
    $message = 
     '<table  style="border: 1px solid #38b1ed; padding: 10px; border-collapse: collapse; width: auto; font-family: Roboto,sans-serif; font-size:16px; font-weight:bold;">
     <tr style="background-color: #ddf4ff">
     <th colspan="2" style="border: 1px solid #bae8ff; padding: 15px;text-align: center; font-size:20px;">Registrar Details</th>
     </tr>
     <tr>
     <td style="border: 1px solid #bae8ff; padding: 15px;">Name</td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$f_name . " " . $l_name .'</td>
     </tr>
     <tr style="background-color: #ddf4ff">
     <td style="border: 1px solid #bae8ff; padding: 15px;">Mobile#: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$m_num.'</td>
     </tr>
     <tr>
     <td style="border: 1px solid #bae8ff; padding: 15px;">Telephon#: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$t_num.'</td>
     </tr>
     <tr style="background-color: #ddf4ff">
     <td style="border: 1px solid #bae8ff; padding: 15px;">Company Name: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$c_name.'</td>
     </tr>
     <tr>
     <td style="border: 1px solid #bae8ff; padding: 15px;">Country: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$your_country.'</td>
     </tr>
     <tr style="background-color: #ddf4ff">
     <td style="border: 1px solid #bae8ff; padding: 15px;">State: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$province.'</td>
     </tr>
     <tr>
     <td style="border: 1px solid #bae8ff; padding: 15px;">City: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$city.'</td>
     </tr>
     <tr style="background-color: #ddf4ff">
     <td style="border: 1px solid #bae8ff; padding: 15px;">Zip: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$zip.'</td>
     </tr>
     <tr>
     <td style="border: 1px solid #bae8ff; padding: 15px;">Hosting: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$hosting.'</td>
     </tr>
     <tr style="background-color: #ddf4ff">
     <td style="border: 1px solid #bae8ff; padding: 15px;">Pakage: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$pakage.'</td>
     </tr>
     <tr>
     <td style="border: 1px solid #bae8ff; padding: 15px;">Domain: </td>
     <td style="border: 1px solid #bae8ff; padding: 15px;">'.$domain.'</td>
     </tr>
     </table>';
    
    $to = "tahirpathan3@gmail.com"; // Replace with the recipient's email
    $headers = "From: $e_id";

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if (mail($to, $subject, $message, $headers)) {
        header("Location: index.php?result=success");
    } 
    else {
        header("Location: index.php?result=failed");
    }
}
?>