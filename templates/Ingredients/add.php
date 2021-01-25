<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Ingrediente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa', 'enctype' => 'multipart/form-data']); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputName1">Nome</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Tipo de ingrediente</label>
            <select name="type" class="form-control" required>
                <option selected disabled>Selecione um tipo</option>
                <option value="3">Ingrediente</option>
                <option value="2">Guarnição</option>
                <option value="1">Copo/Taça</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de bebida</label>
            <select name="category" class="form-control" required>
                <option selected disabled>Selecione um tipo</option>
                <option value="0">Não é bebida</option>
                <option value="1">Vodka</option>
                <option value="2">Whisky</option>
                <option value="3">Gin</option>
                <option value="4">Aperol</option>
                <option value="5">Vinho</option>
                <option value="6">Espumante</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Unidade de medida</label>
            <input name="measures" type="text" class="form-control" id="exampleInputEmail1" placeholder="Unidade de medida">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Total unidade</label>
            <input name="total" type="text" class="form-control" id="exampleInputEmail1" placeholder="Total unidade">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'ingredients', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>