<?php
  
  $name = $_POST['user_name'];
  $prenom = $_POST['user_email'];
  $message = $_POST['user_message'];
  $telephone = $_POST['user_tel'];
  $subject = $_POST['sujet'];

  echo("Merci ${prenom} ${name} de nous avoir avoir contacté a propos de ton "${$subject}"
  un de nos agents vous contactera à ${mail} ou par téléphone au ${phone} dans des délais les plus long du monde à vôtre demande :
  ${message}" );

  ?>