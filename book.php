
<?php

if(isset($_POST['template-contactform-submit'])){

    $name = $_POST['template-contactform-name']."\r\n";
    $email = $_POST['template-contactform-email']."\r\n";
    $phone = $_POST['template-contactform-phone']."\r\n\r\n";
    $message = 'Nome: '.$name.
    'Email: '.$email.
    'Telefone: '.$phone.
     $_POST['template-contactform-message'];



   mail("info@azenhaguesthouse.com, azorahaifreelancer@gmail.com",$message,"From:info@azenhaguesthouse.com");

   echo "<div style='z-index:-9999;height:100vh;width:100vw;background:#f1f1f1;position:absolute;'></div>";
   echo "<h3 style='font-weight:bold; color: green;'>ENVIADO COM SUCESSO</h3>";
   echo "<h3 style='font-weight:bold; color: #f7981d;'>Nome : </h3>";
   echo $name;
   echo "<h3 style='font-weight:bold; color: #f7981d;'>Email : </h3>";
   echo $email;
   echo "<h3 style='font-weight:bold; color: #f7981d;'>Telefone : </h3>";
   echo $phone;
   echo "<h3 style='font-weight:bold; color: #f7981d;'>Mensagem : </h3>";
   echo $message;

   echo "<div style='height:100px;width:100vw;background:#f1f1f1;'>
           <h3>Agradecemos a sua preferência</h3>
           <h3 style='font-weight:bold; color: #f7981d;'>Em caso de Pedido de reserva:</h3>
           <p>Será enviado um email com o pedido de tranferência de metade do valor da Reserva, o restante do pagamento é efectuado na Azenha GuestHouse, durante a sua estadia em dinheiro ou em transferência bancária.</p>
             <button style='background:#f7981d;color:#ffffff!important;width:200px;height:50px;outline:none;'>
               <a style='background:#f7981d;color:#ffffff!important;text-transform:uppercase;text-decoration:none; padding:10px;font-size:20px;' href='http://azenhaguesthouse.com'>Voltar</a>
             </button>
           </div>";
}

?>
