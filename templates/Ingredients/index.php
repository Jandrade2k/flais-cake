<div style="margin:0 20px;">
    <a href="<?= $this->Url->build(['controller' => 'ingredients', 'action' => 'add']); ?>" class="btn btn-primary">
        <i class="nav-icon fas fa-plus"></i>
        Adicionar
    </a>
</div>
<?= $this->Flash->render(); ?>
<div class="card card-outline card-secondary" style="margin:20px;">

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:20%">Nome</th>
                    <th style="width:30%;">Medida</th>
                    <th style="width:20%;">Tipo</th>
                    <th style="width:20%;"> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ingredients as $el) {
                ?>
                    <tr>
                        <td><?= ucfirst($el->name) ?></td>
                        <td><?= $el->measures ?></td>
                        <td>
                            <?php
                            if ($el->type == 1) { ?>
                                <p class="badge badge-info">Copo/Taça</p>
                            <?php } else if ($el->type == 2) { ?>
                                <p class="badge badge-success">Guarnição</p>
                            <?php } else if ($el->type == 3) { ?>
                                <p class="badge badge-primary">Ingrediente</p>
                            <?php } else { ?>
                                <p class="badge badge-danger">Nenhum</p>
                            <?php }
                            ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= $this->Url->build(['controller' => 'ingredients', 'action' => 'view', $el->id]); ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="<?= $this->Url->build(['controller' => 'ingredients', 'action' => 'edit', $el->id]); ?>" class="btn btn-secondary"><i class="fas fa-pen"></i></a>
                                <button data-toggle="modal" data-target="#modal-danger_<?= $el->id; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="modal-danger_<?= $el->id; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content bg-danger">
                                <div class="modal-header">
                                    <h4 class="modal-title">AVISO: Caso continuar o registro será excluido permanentemente.</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>O Ingrediente <?= $el->name ?> está prestes a ser excluido permanentemente.</p><br />
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                                    <a href="<?= $this->Url->build(['controller' => 'ingredients', 'action' => 'delete', $el->id]); ?>" class="btn btn-outline-light">Excluir mesmo assim</a>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <?php
                } ?>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>