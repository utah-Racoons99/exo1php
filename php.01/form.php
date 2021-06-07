<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulaire</title>
</head>
  <body>

      <form  action="thanks.php"  method="post">
          <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name">
          </div>
          <div>
            <label  for="courriel">mail :</label>
              <input  type="email"  id="courriel"  name="user_email">
          </div>
          <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
          </div>
          <div>
                <label for="telephone">Tel :</label>
                <input type="text" id="telephone" name="user_tel">

          </div>
          <div>
                <label for="subjectSelect">la raison de votre contact</label>
                  <select name="sujet" id="subjectSelect">
                    <option value="">--le sujet--</option>
                    <option value="">panne de compte</option>
                    <option value="">déja un compte</option>
                    <option value="">pas de compte</option>
                </select>
         </div>
           <div  class="button">
            <button  type="submit">Envoyer vôtre demande</button>
          </div>
        </form>




  
  </body>
</html>