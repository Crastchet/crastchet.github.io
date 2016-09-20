<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--    <link rel="icon" href="../../favicon.ico">-->

    <title>Les voyages</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- your style -->        
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
    <!-- jquery -->
    <script src='<?php echo URL; ?>public/js/jquery-1.11.1.min.js'></script> 
</head>

<body>
<header>
            MARATHON...
</header>            
            
<nav>            
            <ul>
                <li>
                    <a href="<?php echo URL; ?>index">Accueil</a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>index/sujet">Sujet</a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>index/about">About</a>
                </li>
                <li>
                    <a href="<?php echo URL; ?>index/contact">Contact</a>
                </li>
                <li>
                    <a href="#">
                        Menu
                    </a>
                    <ul>
                        <li>Menu</li>
                        <li>
                            <a href="<?php echo URL . 'protege/index'; ?>">Accès restreint</a>
                        </li>
                        <li>
                            <a href="<?php echo URL . 'help/index'; ?>">Aide</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <?php if (Session::get('user_logged_in') == true) { ?>
                    <li><p>Bienvenue <?php echo Session::get('user_name'); ?></p></li>
                    <li>
                        <a href="#">Mon compte</a>
                        <ul>
                            <li>
                                <a href="<?php echo URL; ?>login/showprofile">Mon profil</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>login/changeaccounttype">Change le niveau du compte</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>login/editusername">Change mon nom d'utilisateur</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>login/edituseremail">Change mon adresse mail</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>login/changepassword">Change mon mot de passe</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>login/logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li><a href="<?php echo URL . 'login'; ?>">Login</a></li>
                    <li><a href="<?php echo URL . 'login/register'; ?>">Inscription</a></li>
                <?php } ?>
            </ul>
</nav>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>


