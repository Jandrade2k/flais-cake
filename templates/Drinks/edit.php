<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Drink</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa', 'enctype' => 'multipart/form-data']); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputName1">Nome</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="<?= $drinks->name ?>" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Tipo de evento</label>
            <select name="tipo_id" class="form-control" required>
                <option selected disabled>Selecione um tipo</option>
                <?php foreach ($tipo as $el) { ?>
                    <option <?= $el->id == $drinks->tipo_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Imagem</label>
            <div class="input-group">
                <div class="custom-file">
                    <input name="file" accept="image/jpg, image/png, image/jpeg" type="file" class="custom-file-input" value="<?= $drinks->image ?>" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile"><?= $drinks->image ? : "Escolha um arquivo" ?></label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Enviar</span>
                </div>
            </div>
        </div>

        <?= $this->Cell('recipe', ['id' => $drinks->id]); ?>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'drinks', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>