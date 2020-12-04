<div class="card card-outline card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title"><?= $events->name ?></h3>
    </div>
    <div class="card-body">
        <div class="btn-group">
            <button type="button" class="btn btn-info" style="cursor:default">Total de dinks Disponiveis</button>
            <button type="button" class="btn btn-info" style="cursor:default">500</button>
        </div>
        <br>
        <div class="form-group">
            <label>Drinks disponiveis</label>
            <a type="button" class="btn addDrk" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
        </div>
        <div class="form-group" style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <br>
            <select name="drink_id" class="form-control select2 " style="width: 50%;" tabindex="-1" aria-hidden="true">
                <option selected disabled>Selecione um drink</option>
                <?php foreach ($drinks as $el) { ?>
                    <option value="<?= $el->id ?>"><?= $el->name ?></option>
                <?php } ?>
            </select>
            <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <a type="button" class="btn addDrk" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
            <input class="form-control" name="drink_number" type="number" value="0" style="width:20%">
            <a type="button" class="btn addDrk" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
            </div>
        </div>
    </div>
</div>