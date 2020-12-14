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
            }
            foreach($todos_d_name as $chave => $ing) {
                echo $ing;
                echo ': ';
                $total = ceil(($todos_qtd_d[$chave]/$todos_total_d[$chave]));
                echo $total;
                echo '<br>';
            }
            foreach($todos_g_name as $chave => $gua) {
                echo $gua;
                echo ': ';
                $total = ceil(($todos_qtd_g[$chave]/$todos_total_g[$chave]));
                echo $total;
                echo '<br>';
            }

            ?>
        </div>
    </div>
    <div class="card-footer">
    </div>
</div>