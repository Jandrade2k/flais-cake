<div style="display:flex; justify-content:center; align-items:center; margin-top:50px;">
    <div class="card" style="width:40%; height:500px;">
        <div class="card-header text-muted border-bottom-0">
            <h3><?= $drinks->name ?></h3>
        </div>
        <div class="card-body pt-0">
            <div class="row" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                <div class="col-5 text-center">
                    <img src="<?= $this->request->getAttribute('webroot'). 'upload/drinks/'. $drinks->image; ?>" alt="" class="img-circle img-bordered-sm" style="width:120px;">
                </div>
                <br>
                <br>
                <div class="col-7">
                    <p class="text-muted text-sm"><b>Ingedientes: </b><br> Resultado do payload </p>
                    <br>
                    <p class="text-muted text-sm"><b>Modo de preparo: </b><br> <?= $recipe->preparation_mode ?> </p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
            <a href="<?= $this->Url->build(['controller' => 'drinks', 'action' => 'edit', $drinks->id]); ?>" class="btn btn-info">Editar</a>
            <a href="<?= $this->Url->build(['controller' => 'drinks', 'action' => 'index']); ?>" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
</div>