<h1 class="text-center">Update User</h1>
        <form class="form_user mt-5" method="POST" action="verif-contact.php"> <div class="form-group">
        <div class="form-group"> 
                <label for="nom">Prenom</label>
                    <input type="prenom" name="prenom" class="form-control" value="">
            </div>
        <div class="form-group"> 
                <label for="nom">Nom</label>
                    <input type="prenom" name="prenom" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="password">MDP</label>
                <input type="password" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
                <a href="verif-contact"><input type="button" value="Retour Liste" class="btn btn-primary"></a>
                <input type="submit" name="modifier" value="Enregistrer" class="btn btn-success">
            </div>
        </form>