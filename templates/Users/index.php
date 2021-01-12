<div class="card card-outline card-secondary" style="margin:20px;">
  <!-- /.card-header -->
  <div class="card-body">
    <table class="datatable table table-bordered table-hover">
      <thead>
        <tr>
          <th style="width:20%">Nome</th>
          <th style="width:20%;">Unidade</th>
          <th style="width:20%;">E-mail</th>
          <th style="width:20%;"> </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user as $el) { ?>
          <tr>
            <td><?= mb_strtoupper($el->name) ?></td>
            <td><?= mb_strtoupper($el->unit) ?></td>
            <td><a href="mailto:<?= $el->email ?>">
                <?= $el->email ?>
              </a>
            </td>
            <td>
              <div class="btn-group">
                <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'view', $el->id]); ?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Visualizar"><i class="fas fa-eye"></i></a>
                <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'edit', $el->id]); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></a>
                <button data-toggle="modal" data-target="#modal-danger_<?= $el->id; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="bottom" title="Excluir"></i></button>
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
                  <p>O Usuário <?= $el->name ?> está prestes a ser excluido permanentemente.</p><br />
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                  <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'delete', $el->id]); ?>" class="btn btn-outline-light">Excluir mesmo assim</a>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>