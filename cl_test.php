<form method="post" action="cl_test.php" enctype="multipart/form-data">
   <input  type="file" name="file">
   <input type="submit" name="Enviar">
</form>


<?php 
    require __DIR__.'/vendor/autoload.php';
     use Classes\Support\Email;

     $email = new Email();

     $email->add("Ola Mundo!","Texto da Cobra","Judson Capepa","judsoncapepa22@gmail.com")->send();

     if(!$email->error()){
       var_dump(true);
     }else{
       echo $email->error()->getMessage();
     }
 /*   \Cloudinary::config(array( 
        "cloud_name" => "debset3o8", 
        "api_key" => "413479467465769", 
        "api_secret" => "i0F6LO2np-xBc-ZR89XjM9s2MAs", 
        "secure" => true
      ));
   
    var_dump($_FILES['file']);
  if($_FILES['file']){

      \Cloudinary\Uploader::upload($_FILES['file']['tmp_name'], array("public_id" => "sample_woman"));
  }

  echo cl_image_tag('sample_woman');
  */