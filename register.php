<?php
session_start();
require('config/database.php');
require('includes/function.php');
require('includes/constant.php');
//si le formulaire a été soumis



if(isset($_POST['register'])){

    //si tout les champs sont remplis (et vérifier )
    if(not_empty(['name','pseudo','mail','password','password_confirm'])){

    $errors= [];

    extract($_POST);

    if(mb_strlen($pseudo)<3){
        $errors[]="Pseudo trop court il faut au minimun trois caractères";
    }

    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $errors[]= "Adresse mail invalide";
    }

    if(mb_strlen($password)<6){
        $errors[]="password trop court il faut au minimun trois caractères";

    }else{
        if($password != $password_confirm){
            $errors[]= "Les deux mots de passe ne concordent pas";
        }
    }

    if(is_already_in_use('pseudo',$pseudo,'users')) {
        $errors[] = "Pseudo déjà utilisé";
    }
    if(is_already_in_use('mail',$mail,'users')){
        $errors[]= "mail déjà utilisé";
    }

    //si aucun erreur
    if(count($errors)==0){

        //envoie un mail d'activation
        $to=$mail;
        $subject=WEBSITE_NAME."-Activation de compte";
        $token=sha1($pseudo.$mail.$password);

        ob_start();//insersion cachée
        require('template/emails/activation.tmpl.php');
        $content=ob_get_clean();

        $headers = 'MINE-version: 1.0' . "\r\n";
        $headers.= 'Content-type: text\html; charset=iso-8859-1'."\r\n";

        mail($to,$subject,$content,$headers);

        set_flash("Mail d'activation envoyé !", 'warning');

        //header('location: index.php'); // reviens à la page d'acceuil
                                        // n'oublie pas de ouvrire la session
        //pour $_SESSION

        // fonction qui remplace les deux
            redirect('index.php'); 
        //enregirstrment d'utlisateur
        //message bienvenu
        //redirection vers sa page
    }

}




}

?>

<?php require('views/register.view.php');?>