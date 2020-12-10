<div class="card card-outline card-secondary" style="margin:20px;">
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-header">
        <h3 class="card-title"><?= $events->name ?></h3>
    </div>
    <div class="card-body">
        <div class="btn-group">
            <button type="button" class="btn btn-info" style="cursor:default">Total de dinks Disponiveis</button>
            <button id="totalDrk" type="button" class="btn btn-info" style="cursor:default"><b><?php
            $num = 0;
             foreach (json_decode($inventory->number) as $val) {
                $num += $val;
            } 
            echo ($events->drinks_guests * $events->qtd_guests) - $num; ?></b></button>
        </div>
        <br>
        <div class="form-group">
        <label>Drinks disponiveis</label>
            <a type="button" class="btn addDrk" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
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
                            <select name="products[id][]" class="form-control select2 " style="width: 50%;" tabindex="-1" aria-hidden="true">
                                <option selected disabled>Selecione um drink</option>
                                <?php foreach ($drinks as $el) { ?>
                                    <option <?= $el->id == $val->id ? 'selected' : ''; ?> value="<?= $el->id ?>"><?= $el->name ?></option>
                                <?php } ?>
                            </select>
                            <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                            <button onClick="addNum(this)" type="button" class="btn addNum" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></button>
                                <input onChange="change(this)" class="form-control num" name="number[id][]" type="number" value="<?php echo $arr[$x];
                                                                                            $x++; ?>" style="width:25%;" readonly>
                                                                                            <button onClick="reNum(this)" type="button" class="btn reNum" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></button>
                            </div>
                        </div>
                    <? }
                     } ?>
                </div>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>