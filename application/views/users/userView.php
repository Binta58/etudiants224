<?php $this->load->view('includes/header') ?>

<!-- page content -->
<div class="right_col" role="main">
        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Utilisateurs <small>Gestion des Utilisateurs</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Rechercher!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des utilisateurs <small> </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Prénom</th>
                          <th>Nom</th>
                          <th>Email</th>
                          <th>Pseudo</th>
                          <th>Créée Le</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php if($users): ?>
                            <?php foreach($users as $user): ?>
                            <tr>
                                <td><?=$user->id?></td>
                                <td><?=$user->prenom?></td>
                                <td><?=$user->nom?></td>
                                <td><?=$user->mail?></td>
                                <td><?=$user->pseudo?></td>
                                <td><?=$user->cree_le?></td>
                                <td> <a href="" class="btn btn-danger btn-sm"> <span class="fa fa-trash"></span> Supprimer</a> &nbsp; 
                                <a href="" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span> Modifier</a>
                                 &nbsp; <a href="" class="btn btn-primary btn-sm"> <span class="fa fa-eye"></span> Aperçu</a></td></td> 
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
        </div>
</div>


<?php $this->load->view('includes/footer') ?>