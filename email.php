
<?php 
    require __DIR__.'/vendor/autoload.php';
     use Classes\Support\Email;
 
$jSON = [];
     $email = new Email();
         $text = "
              <h2>{$_POST['nome']}</h2>
              <p>
                 <strong>Numero de Telefone: </strong>{$_POST['telefone']}
              </p>
              <p>
                 Mensagem : {$_POST['mensagem']}

              </p>
         ";  
     $email->add("Contacto Site.",$text,$_POST['nome'],"comercial@sc-consulting.ao")->send();
     $text2 = "
     <h2>{$_POST['nome']}</h2>
     <p>
         <strong>Muito Obrigado pelo Contaco, em breve entraremos em contacto.</strong>
     </p>  
";
     $email->add("Agradecimento",$text2,$_POST['nome'],$_POST['email'])->send();
     if(!$email->error()){
      $jSON['Certo']=$_POST['nome'].'A sua mensagem foi envida sucesso, em breve entraremos em contacto';
     }else{
      $jSON['Error'] = 'Error ao enviar a mensagem';
     }

     echo json_encode($jSON);
