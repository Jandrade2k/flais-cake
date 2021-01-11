<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* -------------------------------------
                  GLOBAL RESETS
              ------------------------------------- */

    /*All the styling goes here*/

    img {
      border: none;
      -ms-interpolation-mode: bicubic;
    }

    body {
      background-color: #f6f6f6;
      font-family: sans-serif;
      -webkit-font-smoothing: antialiased;
      font-size: 14px;
      line-height: 1.4;
      margin: 0;
      padding: 0;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    table {
      border-collapse: separate;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
      width: 100%;
    }

    table td {
      font-family: sans-serif;
      font-size: 14px;
      vertical-align: top;
    }

    /* -------------------------------------
                  BODY & CONTAINER
              ------------------------------------- */

    .body {
      background-color: #f6f6f6;
      width: 100%;
    }

    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
      display: block;
      margin: 0 auto !important;
      /* makes it centered */
      max-width: 600px;
      padding: 10px;
      width: 600px;
    }

    /* This should also be a block element, so that it will fill 100% of the .container */
    .content {
      box-sizing: border-box;
      display: block;
      margin: 0 auto;
      max-width: 600px;
      padding: 10px;
    }

    /* -------------------------------------
                  HEADER, FOOTER, MAIN
              ------------------------------------- */
    .main {
      background: #ffffff;
      border-radius: 3px;
      width: 100%;
    }

    .wrapper {
      box-sizing: border-box;
      padding: 20px;
    }

    .content-block {
      padding-bottom: 10px;
      padding-top: 10px;
    }

    .footer {
      clear: both;
      margin-top: 10px;
      text-align: center;
      width: 100%;
    }

    .footer td,
    .footer p,
    .footer span,
    .footer a {
      color: #999999;
      font-size: 12px;
      text-align: center;
    }

    /* -------------------------------------
                  TYPOGRAPHY
              ------------------------------------- */
    h1 {
      font-family: sans-serif;
      text-transform: capitalize;
    }

    h2,
    h3,
    h4 {
      color: #000000;
      font-family: sans-serif;
      font-weight: 400;
      line-height: 1.4;
      margin: 0;
      margin-bottom: 30px;
    }

    h1 {
      font-size: 35px;
      font-weight: 300;
      text-align: center;
      text-transform: capitalize;
    }

    p,
    ul,
    ol {
      font-family: sans-serif;
      font-size: 14px;
      font-weight: normal;
      margin: 0;
      margin-bottom: 15px;
    }

    p li,
    ul li,
    ol li {
      list-style-position: inside;
      margin-left: 5px;
    }

    a {
      color: #3498db;
      text-decoration: underline;
    }

    /* -------------------------------------
                  BUTTONS
              ------------------------------------- */
    .btn {
      box-sizing: border-box;
      width: 100%;
    }

    .btn>tbody>tr>td {
      padding-bottom: 15px;
    }

    .btn table {
      width: auto;
    }

    .btn table td {
      background-color: #ffffff;
      border-radius: 5px;
      text-align: center;
    }

    .btn a {
      background-color: #ffffff;
      border: solid 1px #3498db;
      border-radius: 5px;
      box-sizing: border-box;
      color: #3498db;
      cursor: pointer;
      display: inline-block;
      font-size: 14px;
      font-weight: bold;
      margin: 0;
      padding: 12px 25px;
      text-decoration: none;
      text-transform: capitalize;
    }

    .btn-primary table td {
      /* background-color: #3498db;  */
    }

    .btn-primary a {
      background-color: #3498db;
      border-color: #3498db;
      color: #ffffff;
    }

    /* -------------------------------------
                  OTHER STYLES THAT MIGHT BE USEFUL
              ------------------------------------- */
    .last {
      margin-bottom: 0;
    }

    .first {
      margin-top: 0;
    }

    .align-center {
      text-align: center;
    }

    .align-right {
      text-align: right;
    }

    .align-left {
      text-align: left;
    }

    .clear {
      clear: both;
    }

    .mt0 {
      margin-top: 0;
    }

    .mb0 {
      margin-bottom: 0;
    }

    .preheader {
      color: transparent;
      display: none;
      height: 0;
      max-height: 0;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
      mso-hide: all;
      visibility: hidden;
      width: 0;
    }

    .powered-by a {
      text-decoration: none;
    }

    hr {
      border: 0;
      border-bottom: 1px solid #f6f6f6;
      margin: 20px 0;
    }

    /* -------------------------------------
                  RESPONSIVE AND MOBILE FRIENDLY STYLES
              ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }

      table[class=body] p,
      table[class=body] ul,
      table[class=body] ol,
      table[class=body] td,
      table[class=body] span,
      table[class=body] a {
        font-size: 16px !important;
      }

      table[class=body] .wrapper,
      table[class=body] .article {
        padding: 10px !important;
      }

      table[class=body] .content {
        padding: 0 !important;
      }

      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }

      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }

      table[class=body] .btn table {
        width: 100% !important;
      }

      table[class=body] .btn a {
        width: 100% !important;
      }

      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
                  PRESERVE THESE STYLES IN THE HEAD
              ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }

      .ExternalClass,
      .ExternalClass p,
      .ExternalClass span,
      .ExternalClass font,
      .ExternalClass td,
      .ExternalClass div {
        line-height: 100%;
      }

      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }

      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }

      .btn-primary table td:hover {
        /* background-color: #34495e !important;  */
      }

      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
  <title>PDF invantário</title>
</head>

<body>
  <documento>
    <header>
      <img src="http://localhost/flairs_cake/img/flairs%20logo.png">
      <h3>Inventário</h3>
    </header>
    <main>
      <div>
        <div>
          <p style="font-size: 27px;"><b>Informações do evento #<?= $events->id ?></b></p>
        </div>

        <p class="card-text">Data: <?= $events->event_date ?></p>
        <p class="card-text">Nome do evento: <?= $events->name ?></p>
        <p class="card-text">Número de convidados: <?= $events->qtd_guests ?></p>
      </div>
      <br>
      <p style="font-size: 27px;"><b>Tabela de inventário</b></p>
      <table border="1" cellspacing="10" cellpadding="25">
        <tr style="background: #dcdcdc;">
          <th>
            <p><b>Ingrediente</b></p>
          </th>
          <th>
            <p><b>Quantidade de unidades</b></p>
          </th>
          <th>
            <p><b>Quantidade com SOS</b></p>
          </th>
        </tr>
        <?php
        $products = json_decode($inventory->products);
        $number = json_decode($inventory->number);

        $todos_d_name = [];
        $todos_qtd_d = [];
        $todos_total_d = [];
        $todos_medida_d = [];

        $todos_g_name = [];
        $todos_qtd_g = [];
        $todos_total_g = [];
        $todos_medida_g = [];

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
                  array_push($todos_medida_d, $ingredient->measures);
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
                  array_push($todos_medida_g, $ingredient->measures);
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
        <?php
        foreach ($todos_d_name as $chave => $ing) {
          $total = ceil(($todos_qtd_d[$chave] / $todos_total_d[$chave])); ?>
          <tr>
            <td><?= ucfirst($ing) ?></td>
            <td><?php
                if ($todos_medida_d[$chave] == "ml") {
                  echo $total . " litros";
                } else if ($todos_medida_d[$chave] == "g") {
                  echo $total . " quilos";
                } else {
                  echo $total . " unidades";
                } ?></td>
            <td><?php if ($todos_medida_d[$chave] == "ml") {
                  echo ($total / 2) + $total . " litros";
                } else if ($todos_medida_d[$chave] == "g") {
                  echo ($total / 2) + $total . " quilos";
                } else {
                  echo ($total / 2) + $total . " unidades";
                } ?></td> ?></td>
          </tr>
        <?php }
        foreach ($todos_g_name as $chave => $gua) {
          $total = ceil(($todos_qtd_g[$chave] / $todos_total_g[$chave]));
        ?>
          <tr>
            <td><?= ucfirst($gua) ?></td>
            <td><?php if ($todos_medida_g[$chave] == "ml") {
                  echo $total . " litros";
                } else if ($todos_medida_g[$chave] == "g") {
                  echo $total . " quilos";
                } else {
                  echo $total . " unidades";
                } ?></td>
            <td><?php if ($todos_medida_g[$chave] == "ml") {
                  echo ($total/2) + $total . " litros";
                } else if ($todos_medida_g[$chave] == "g") {
                  echo ($total/2) + $total . " quilos";
                } else {
                  echo ($total/2) + $total . " unidades";
                } ?></td> ?></td>
          </tr>
        <?php } ?>
      </table>

    </main>
  </documento>
</body>

</html>