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
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="<?= $ingredient->name ?>" disabled>
        </div>
        <div class="form-group">
            <label>Tipo de ingrediente</label>
            <select name="type" class="form-control" required disabled>
                <option selected disabled>Selecione um tipo</option>
                    <option <?= $ingredient->type == 3 ? 'selected' : ''?> value="3">Ingrediente</option>
                    <option <?= $ingredient->type == 2 ? 'selected' : ''?> value="2">Guarnição</option>
                    <option <?= $ingredient->type == 1 ? 'selected' : ''?> value="1">Copo/Taça</option>
            </select>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
    <a href="<?= $this->Url->build(['controller'=>'ingredients', 'action' =>'edit', $ingredient->id]); ?>" class="btn btn-info">Editar</a>
            <a href="<?= $this->Url->build(['controller'=> 'ingredients', 'action'=>'index']); ?>" class="btn btn-danger">Voltar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>