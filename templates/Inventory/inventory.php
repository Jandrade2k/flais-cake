<div class="card card-outline card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3>Inventário</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
        <img src="<?= $this->request->getAttribute('webroot'); ?>img/flairs logo.png" style="width:15%; height:15%;"/>
        <label>Inventário</label>
        </div>
        <div class="form-group">
            <?php
            $products = json_decode($inventory->products);
            $number = json_decode($inventory->number);

            $todos_d_name = [];
            $todos_qtd_d = [];
            $todos_total_d = [];

            $todos_g_name = [];
            $todos_qtd_g = [];
            $todos_total_g = [];

            $z = 0;
            foreach ($recipes as $key => $receita) {
                $x = 0;
                $y = 0;
                if (in_array($receita->drink_id, $products)) {
                    $ings = json_decode($receita->ing);
                    $qtd_d = json_decode($receita->qtd_d);

                    $guas = json_decode($receita->garrison);
                    $qtd_g = json_decode($receita->qtd_g);
                    foreach ($ingredients as $chave => $ingredient) {
                        if (in_array($ingredient->id, $ings)) {
                            // echo $ingredient->name;
                            // echo $qtd_d[$x];
                            // echo '<br>';
                            if (in_array($ingredient->name, $todos_d_name)) {
                                $indice = array_search($ingredient->name, $todos_d_name);

                                $qtd_d[$x] *= $number[$z];
                                $todos_qtd_d[$indice] += $qtd_d[$x];
                            } else {
                                array_push($todos_total_d, $ingredient->total);
                                array_push($todos_d_name, $ingredient->name);
                                $qtd_d[$x] *= $number[$z];
                                array_push($todos_qtd_d, $qtd_d[$x]);
                            }
                            $x++;
                        }
                        if (in_array($ingredient->id, $guas)) {
                            // echo $ingredient->name;
                            // echo $qtd_g[$y];
                            // echo '<br>';
                            if (in_array($ingredient->name, $todos_g_name)) {
                                $indice = array_search($ingredient->name, $todos_g_name);

                                $qtd_g[$y] *= $number[$z];
                                $todos_qtd_g[$indice] += $qtd_g[$y];
                            } else {
                                array_push($todos_total_g, $ingredient->total);
                                array_push($todos_g_name, $ingredient->name);
                                $qtd_g[$y] *= $number[$z];
                                array_push($todos_qtd_g, $qtd_g[$y]);
                            }
                            $y++;
                        }
                    }
                    $z++;
                }
            } ?>
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 270px;">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 240px;">Quantidade a levar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($todos_d_name as $chave => $ing) {
                                    $total = ceil(($todos_qtd_d[$chave] / $todos_total_d[$chave]));
                                ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?= $ing ?></td>
                                        <td><?= $total ?></td>
                                    </tr>
                                <?php } 
                                foreach ($todos_g_name as $chave => $gua) {
                                    $total = ceil(($todos_qtd_g[$chave] / $todos_total_g[$chave]));
                                ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"><?= $gua ?></td>
                                        <td><?= $total ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="card-footer">
    </div>
</div>