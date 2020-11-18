<div style="margin:0 20px;">
    <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'add']); ?>" class="btn btn-primary">
        <i class="nav-icon fas fa-plus"></i>
        Adicionar
    </a>
</div>

<div class="card card-outline card-secondary" style="margin:20px;">

    <div class="card-body p-0">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width:20%">Nome</th>
                    <th style="width:30%;">Endereço</th>
                    <th style="width:20%;">E-mail</th>
                    <th style="width:20%;"> </th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($customer as $el) {
                ?>
                    <tr>
                        <td><?= strtoupper($el->name) ?></td>
                        <td><small><?= strtoupper($el->place); ?> , <?= strtoupper($el->city) ?> - <?= strtoupper($el->uf) ?></small></td>
                        <td><a href="mailto:<?= $el->email ?>">
                                <?= $el->email ?>
                            </a>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'view', $el->id]); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php
                } ?>

            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>