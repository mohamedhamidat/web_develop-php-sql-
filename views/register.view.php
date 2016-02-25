<?php $title= "Inscription"; ?>
<?php include('partials/_header.php');?>

    <div id="main-content">
        <div class="container">
            <h1 class="lead"> Welcome! Become a member </h1>

            <!--afficher les erreur-->

            <?php include('partials/_error.php')?>

            <form method="post" class="wel col-md-6" autocomplete="off">
                                                    <!--pour ne pas sauvegarder ce que a été tapé-->

                <!-- Name field-->
                <div class="form-group">
                    <label class="control-label" for="name">Name: </label>
                    <input type="text" class="form-control" id="name" name="name"
                           required="required"/>

                </div>
                <!-- pseudo field-->
                <div class="form-group">
                    <label class="control-label" for="pseudo">Pseudo: </label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo"
                           required="required"/>

                </div>
                <!-- emial field-->
                <div class="form-group">
                    <label class="control-label" for="mail">Mail: </label>
                    <input type="email" class="form-control" id="mail" name="mail"
                           required="required"/>

                </div>
                <!-- Passeword field-->
                <div class="form-group">
                    <label class="control-label" for="password">Password: </label>
                    <input type="password" class="form-control" id="password" name="password"
                           required="required"/>

                </div>
                <!-- Passeword confirmation field-->
                <div class="form-group">
                    <label class="control-label" for="password-confirm">Confirm your password: </label>
                    <input type="password" class="form-control" id="password-confirm" name="password_confirm"
                           required="required"/>

                </div>

                <input type="submit" class="btn btn-primary" value="Inscription" name="register">

            </form>


        </div><!-- /.container -->

    </div>


<?php include('partials/_footer.php');?>