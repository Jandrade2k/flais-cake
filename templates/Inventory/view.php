<div class="card card-outline card-secondary" style="margin:20px;">
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-header">
        <h3 class="card-title"><?= $events->name ?></h3>
    </div>
    <div class="card-body">
        <!-- <div class="btn-group">
            <button type="button" class="btn btn-info" style="cursor:default">Total de dinks Disponiveis</button>
            <button id="totalDrk" type="button" class="btn btn-info" style="cursor:default"><b><?= $events->drinks_guests * $events->qtd_guests ?></b></button>
        </div> -->
        <br>
        <div class="form-group">
            <label>Drinks selecionados</label>
            <!-- <a type="button" class="btn addDrk" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a> -->
        </div>
        <table>
            <tr>
                <div id="drk" class="form-group" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                    <?php 
                    $x = 0;
                     foreach ($drinks as $key => $val) {
                         if (in_array($val->id, json_decode($inventory->products))) {
                            $arr = json_decode($inventory->number);?>
                        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; width:100%; margin:15px 0;">
                            <select name="products[id][]" class="form-control select2 " style="width: 50%;" tabindex="-1" aria-hidden="true" disabled>
                                <option selected disabled>Selecione um drink</option>
                                <?php foreach ($drinks as $el) { ?>
                                    <option <?= $el->id == $val->id ? 'selected' : ''; ?> value="<?= $el->id ?>"><?= $el->name ?></option>
                                <?php } ?>
                            </select>
                            <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                                <input onChange="change(this)" class="form-control num" name="number[id][]" type="number" value="<?php echo $arr[$x];
                                                                                            $x++; ?>" style="width:25%;" readonly>
                            </div>
                        </div>
                    <? }
                     } ?>
                </div>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="<?= $this->Url->build(['controller' => 'inventory', 'action' => 'edit', $inventory->event]); ?>" class="btn btn-info">Editar</a>
        <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'index']); ?>" class="btn btn-danger">Voltar</a>
        <a data-toggle="tooltip" data-placement="bottom" title="Gerar PDF" href="<?= $this->Url->build(['action' => 'pdf'])?>" class="btn btn-warning"><i class="far fa-file-pdf"></i></a>
    </div>
    <?= $this->Form->end(); ?>
</div>