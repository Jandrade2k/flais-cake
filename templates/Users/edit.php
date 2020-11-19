<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title"><?= $user->name ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputName1">Nome</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="<?= $user->name ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" value="<?= $user->email ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Unidade</label>
            <input name="unit" type="text" class="form-control" id="exampleInputPassword1" placeholder="Unidade" value="<?= $user->unit ?>">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>