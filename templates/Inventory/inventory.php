<div class="card card-outline card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3>Inventário</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Itens a serem levados</label>
        </div>
        <div class="form-group">
            <?php
            $arProd = json_decode($inventory->products);
            $ingIds = [];
            foreach ($ingredients as $ings) {
                if (in_array($ings->id, $ingIds)) {
                } else {
                    array_push($ingIds, $ings->id);
                }
            }
            $arIng = [];
            foreach ($recipes as $recipe) {
                if (in_array($recipe->drink_id, $arProd)) {
                    foreach (json_decode($recipe->ing) as $ing) {
                        array_push($arIng, $ing);
                    }
                    foreach ($arIng as $id) {
                        if (in_array($id, $ingIds)) {
                            foreach ($ingredients as $ings) {
                                echo $ings->name;
                                echo '<br>';
                            }
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="card-footer">
    </div>
</div>