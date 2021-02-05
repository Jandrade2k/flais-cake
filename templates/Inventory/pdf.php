<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>css/pdf.css">
    <title>Inventário casamento ana & marcio</title>
</head>

<body>
    <div class="main">
        <div class="titulo bloco grey negrito">
            <span>INVENTÁRIO</span>
        </div>
        <div class="inventario">
            <div class="logo ">
                <img src="data:image/png;base64,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"
                    alt="Logo">
            </div>
            <div class="equipe ">
                <div class="bloco">
                    <span class="grey duo upper negrito">coordenador</span>
                    <span class="white negrito">1</span>
                </div>
                <div class="bloco">
                    <span class="grey duo upper negrito">bartender</span>
                    <span class="white negrito">3</span>
                </div>
                <div class="bloco">
                    <span class="grey duo upper negrito">barback</span>
                    <span class="white negrito">1</span>
                </div>
                <div class="bloco">
                    <span class="grey duo upper negrito">copeira</span>
                    <span class="white negrito">1</span>
                </div>
                <div class="bloco">
                    <span class="grey duo upper negrito">recolha</span>
                    <span class="white negrito">2</span>
                </div>
                <div class="bloco">
                    <span class="grey duo upper negrito">estoquista</span>
                    <span class="white negrito">0</span>
                </div>
            </div>
            <div class="dados ">
                <div class="id bloco grey upper negrito">
                    <span>#02</span>
                    <span>V.08/07/19</span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">cliente: </span>
                    <span class="upper">guilherme pires guimarães</span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">data: </span>
                    <span class="upper">29/01/2021</span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">local: </span>
                    <span class="upper">felix petrolli buffet</span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">nº de conv: </span>
                    <span class="upper">80</span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">duração: </span>
                    <span class="upper">9</span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">enxoval: </span>
                    <span class="upper"></span>
                </div>
                <div class="white left">
                    <span class="negrito cap campo">coordenador: </span>
                    <span class="upper"></span>
                </div>
            </div>
        </div>

        <div class="titulo bloco grey negrito">
            <span>COQUETÉIS ESCOLHIDOS</span>
        </div>
        <div class="coqueteis">
            <table>
                <thead>
                    <th class="upper negrito">vodka</th>
                    <th class="upper negrito">qt</th>
                    <th class="upper negrito">gin</th>
                    <th class="upper negrito">qt</th>
                    <th class="upper negrito">espumante</th>
                    <th class="upper negrito">qt</th>
                    <th class="upper negrito">whisky</th>
                    <th class="upper negrito">qt</th>
                    <th class="upper negrito">sem alcool</th>
                    <th class="upper negrito">qt</th>
                    <th class="upper negrito">outros</th>
                    <th class="upper negrito">qt</th>
                    <th class="upper negrito">volantes</th>
                    <th class="upper negrito">qt</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="upper">moscow mule</td>
                        <td>0</td>
                        <td class="upper">gt tradicional</td>
                        <td>27</td>
                        <td class="upper">aquarela</td>
                        <td>98</td>
                        <td class="upper">popcorn smoke</td>
                        <td>0</td>
                        <td class="upper">mm</td>
                        <td>0</td>
                        <td class="upper">mojito</td>
                        <td>0</td>
                        <td class="upper">ciroc red berry</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td class="upper">aperol sour</td>
                        <td>0</td>
                        <td class="upper">gt tradicional</td>
                        <td>27</td>
                        <td class="upper">aquarela</td>
                        <td>98</td>
                        <td class="upper">popcorn smoke</td>
                        <td>0</td>
                        <td class="upper">mm</td>
                        <td>0</td>
                        <td class="upper">mojito</td>
                        <td>0</td>
                        <td class="upper">ciroc red berry</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td class="upper">citron</td>
                        <td>0</td>
                        <td class="upper">gt mandarin</td>
                        <td>27</td>
                        <td class="upper">spritz</td>
                        <td>0</td>
                        <td class="upper">old fashioned</td>
                        <td>0</td>
                        <td class="upper">coconut</td>
                        <td>0</td>
                        <td class="upper">mexican mule</td>
                        <td>0</td>
                        <td class="upper">tequila</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        <div class="copos"></div>
        <div class="bebidas"></div>
        <div class="diversos"></div>
        <div class="guarnicoes"></div>
        <div class="infusoes"></div>
        <div class="frutas"></div>
        <div class="trabalho"></div>
        <div class="apoio"></div>
        <div class="molecular"></div>
        <div class="ferramentas"></div>
    </div>
</body>

</html>
