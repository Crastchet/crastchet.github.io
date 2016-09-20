<div>
    <h1>Votre profil</h1>

    <div>
        Votre nom d'utilisateur: <?php echo Session::get('user_name'); ?>
        </div>
    <div>
        Votre adresse mail: <?php echo Session::get('user_email'); ?>
        </div>
    <div>
        Votre compte a pour niveau : <?php echo Session::get('user_account_type'); ?>
        </div>
</div>

