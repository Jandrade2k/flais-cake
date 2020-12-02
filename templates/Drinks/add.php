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
            <input name="drink-name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Tipo de evento</label>
            <select name="drink-tipo_id" class="form-control" required>
                <option selected disabled>Selecione um tipo</option>
                <?php foreach ($tipo as $t) { ?>
                    <option value="<?= $t->id ?>"><?= ucfirst($t->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Imagem</label>
            <div class="input-group">
                <div class="custom-file">
                    <input name="drinks-file" accept="image/jpg, image/png, image/jpeg" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Escolher foto</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="">Enviar</span>
                </div>
            </div>
        </div>
        <div id="ingred" class="form-group">
            <label>Ingredientes</label>
            <a type="button" class="btn addIng" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
            <br>
            <table class="ing">
                <tr>

                    <?php $x = 0;
                    foreach ($ing as $key => $se) {

                        if (in_array($se->id, json_decode($recipe->ing))) {
                            $arr = json_decode($recipe->qtd_d);
                    ?>
                            <div class="ingrediente" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">
                                <select name="ingredient[id][]" class="form-control select2 " style="width: 70%;" tabindex="-1" aria-hidden="true">
                                    <option selected disabled>Selecione um ingrediente</option>
                                    <?php foreach ($ing as $el) { ?>
                                        <option <?= $se->id == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= $el->name ?></option>
                                    <?php } ?>
                                </select>
                                <input name="ingredient[qtd][]" class="form-control" type="number" placeholder="quantidade" style="width:10%; margin:5px;">
                                <a id="firstIng" type="button" class=" btn removeIng" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></a>
                            </div>
                    <?php
                        }
                    } ?>

                </tr>
            </table>
        </div>
        <div id="guarrinson" class="form-group">
            <label>Guarnição</label>
            <a type="button" class="btn addGua" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
            <br>
            <table class="ing">
                <tr>
                    <?php $y = 0;
                    foreach ($gua as $val) {
                        if (in_array($val->id, json_decode($recipe->garrison))) {
                            $ar = json_decode($recipe->qtd_g) ?>
                            <div class="guarrinson" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">
                                <select name="guarrinson[id][]" class="form-control select2 " style="width: 70%;" tabindex="-1" aria-hidden="true">
                                    <option selected disabled>Selecione um guarnição</option>
                                    <?php foreach ($gua as $el) { ?>
                                        <option <?= $val->id == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= $el->name ?></option>
                                    <?php } ?>
                                </select>
                                <input name="guarrinson[qtd][]" class="form-control" type="number" placeholder="quantidade" style="width:10%; margin:5px;">
                                <a id="firstIng" type="button" class=" btn removeGua" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></a>
                            </div>
                    <?php }
                    } ?>
                </tr>
            </table>
        </div>
        <div class="form-group">
            <label>Copo/Taça</label>
            <br>

            <select name="cup" class="form-control select2 " style="width: 70%;" tabindex="-1" aria-hidden="true">
                <option selected disabled>Selecione um copo/taça</option>

                <?php
                foreach ($cup as $el) { ?>
                    <option <?= $el->id == $recipe->cup ? 'selected' : ''; ?> value="<?= $el->id ?>"><?= $el->name ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Modo de preparo</label>
            <textarea name="preparation_mode" class="form-control" rows="3" placeholder="Aa..." style="margin-top: 0px; margin-bottom: 0px; height: 114px; max-height:150px;"><?= isset($recipe->preparation_mode) ? $recipe->preparation_mode : null ?></textarea>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'drinks', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>