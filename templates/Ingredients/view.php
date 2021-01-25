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
        <div class="form-group">
            <label>Tipo de bebida</label>
            <select name="category" class="form-control" disabled>
                <option disabled>Selecione um tipo</option>
                <option <?= $ingredient->category == 0 ? 'selected' : '' ?> value="1">Não é bebida</option>
                <option <?= $ingredient->category == 1 ? 'selected' : '' ?> value="1">Vodka</option>
                <option <?= $ingredient->category == 2 ? 'selected' : '' ?> value="2">Whisky</option>
                <option <?= $ingredient->category == 3 ? 'selected' : '' ?> value="3">Gin</option>
                <option <?= $ingredient->category == 4 ? 'selected' : '' ?> value="4">Aperol</option>
                <option <?= $ingredient->category == 5 ? 'selected' : '' ?> value="5">Vinho</option>
                <option <?= $ingredient->category == 6 ? 'selected' : '' ?> value="6">Espumante</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Preço produto</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                    </span>
                </div>
                <input name="price" type="text" class="form-control din" value="<?= $ingredient->price ?>" disabled>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
    <a href="<?= $this->Url->build(['controller'=>'ingredients', 'action' =>'edit', $ingredient->id]); ?>" class="btn btn-info">Editar</a>
            <a href="<?= $this->Url->build(['controller'=> 'ingredients', 'action'=>'index']); ?>" class="btn btn-danger">Voltar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>