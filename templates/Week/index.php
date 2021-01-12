<?= $this->Flash->render(); ?>
<div class="card card-outline card-secondary" style="margin:20px;">
    <div class="card-body">
        <table id="example1" class="datatable table table-bordered table-hover">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 210px;">Código do Evento</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 270px;">Nome</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 179px;">Data</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 128px;"> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($event as $el) {
                ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?= $el->id ?></td>
                        <td><?= $el->name ?></td>
                        <td>
                            <?= $el->event_date ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'view', $el->id]); ?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Visualizar"><i class="fas fa-eye"></i></a>
                                <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'edit', $el->id]); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fas fa-pen"></i></a>
                                <a href="<?= $this->Url->build(['controller' => 'inventory', 'action' => 'view', $el->id]); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ver inventário"><i class="fas fa-box"></i></a>
                                <button data-toggle="modal" data-target="#modal-danger_<?= $el->id; ?>" type="button" class="btn btn-danger" ><i class="fas fa-trash" data-toggle="tooltip" data-placement="bottom" title="Excluir"></i></button>
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
                                    <p>O Evento <?= $el->name ?> está prestes a ser excluido permanentemente.</p><br />
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                                    <a href="<?= $this->Url->build(['controller' => 'inventory', 'action' => 'delete', $el->id]); ?>" class="btn btn-outline-light">Excluir mesmo assim</a>
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
</div>
</div>
</div>
<!-- /.card-body -->
</div>