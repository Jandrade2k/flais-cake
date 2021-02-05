<?= $this->Flash->render(); ?>
<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Evento</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <!-- INFO: Rodeie os form-group's que ficarão em linha por uma div, nessa divi coloque display:flex e flex-direction:row e na div
    form-group adicione width:<porcentagem da div>%; margin:<espaçamento em px>; -->

    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="bs-stepper">
        <div class="bs-stepper-header" role="tablist">
            <!-- your steps here -->
            <div class="step" data-target="#dados-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="dados-part" id="dados-part-trigger">
                    <span class="bs-stepper-circle"><i class="far fa-calendar"></i></span>
                    <span class="bs-stepper-label">Dados do evento</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#observacao-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="observacao-part" id="observacao-part-trigger">
                    <span class="bs-stepper-circle"><i class="far fa-eye"></i></span>
                    <span class="bs-stepper-label">Observações</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#bebidas-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="bebidas-part" id="bebidas-part-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-wine-glass-alt"></i></span>
                    <span class="bs-stepper-label">Bebidas</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#consumo-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="consumo-part" id="consumo-part-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-shopping-cart"></i></span>
                    <span class="bs-stepper-label">Consumo</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#custos-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="custos-part" id="custos-part-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-money-bill-wave"></i></span>
                    <span class="bs-stepper-label">Custos</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#casting-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="casting-part" id="casting-part-trigger">
                    <span class="bs-stepper-circle"><i class="fas fa-users"></i></i></span>
                    <span class="bs-stepper-label">Casting</span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <!-- your steps content here -->
            <div id="dados-part" class="content fade" role="tabpanel" aria-labelledby="dados-part-trigger">
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:15px 0;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label for="exampleInputName1">Número de BI</label>
                        <input value="<?= $event->bi ?>" name="bi" type="text" class="form-control" placeholder="Numero de BI">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Contratante</label>
                        <select name="customer_id" class="form-control" value="<?= $event->customer_id ?>" required>
                            <option disabled>Selecione um cliente</option>
                            <?php foreach ($customer as $el) { ?>
                                <option <?= $el->id == $event->customer_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label for="exampleInputName1">Evento</label>
                        <input value="<?= $event->name ?>" name="name" type="text" class="form-control" placeholder="Evento">
                    </div>
                </div>

                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:15px 0;">
                    <div class="form-group" style="margin: 0 5px; width:45%">
                        <label for="exampleInputName1">Local do evento</label>
                        <input value="<?= $event->address ?>" name="address" type="text" class="form-control" placeholder="Local do evento">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:45%">
                        <label for="exampleInputName1">Cidade do evento</label>
                        <input value="<?= $event->city ?>" name="city" type="text" class="form-control" placeholder="Cidade do evento">
                    </div>
                </div>

                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:15px 0;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Tipo de evento</label>
                        <select name="tipo_id" class="form-control" required>
                            <option disabled>Selecione um tipo</option>
                            <?php foreach ($tipo_eventos as $el) { ?>
                                <option <?= $el->id == $event->tipo_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Tipo de proposta</label>
                        <select name="porposal_id" class="form-control" required>
                            <option disabled>Selecione uma proposta</option>
                            <?php foreach ($tipo_proposal as $el) { ?>
                                <option <?= $el->id == $event->proposal_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label for="exampleInputUnit1">Data do evento</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input value="<?= $event->event_date ?>" name="event_date" type="text" class="form-control form_date" placeholder="dd/mm/yy">
                        </div>
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:15px 0;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Carga horária</label>
                        <select name="hours" class="form-control" required>
                            <option disabled>Selecione a quantidade de horas</option>
                            <?php for ($i = 0; $i < 12; $i++) { ?>
                                <option <?= $el->id == $event->hours ? 'selected' : '' ?> value="<?= $i + 1 ?>"><?= $i + 1 ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label for="exampleInputName1">Cor do enxoval</label>
                        <input value="<?= $event->color ?>" name="color" type="text" class="form-control" placeholder="Cor do enxoval">
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-primary btn-lg prox" style="width: 10%">Próximo</button>
            </div>

            <div id="observacao-part" class="content fade" role="tabpanel" aria-labelledby="observacao-part-trigger">
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:45%">
                        <label for="exampleInputName1">Hora inicio festa</label>
                        <input value="<?= $event->inicio ?>" name="inicio" type="text" class="form-control" id="exampleInputEmail1" placeholder="Hora inicio festa">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:45%">
                        <label>Turno do evento</label>
                        <select name="turno" class="form-control" required>
                            <option disabled>Selecione um turno</option>
                            <option <?= $event->turno == 1 ? 'selected' : '' ?> value="1">Matutino</option>
                            <option <?= $event->turno == 2 ? 'selected' : '' ?> value="2">vespertino</option>
                            <option <?= $event->turno == 3 ? 'selected' : '' ?> value="3">Noturno</option>
                        </select>
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Tipo de local</label>
                        <select name="local" class="form-control" required>
                            <option disabled>Selecione um tipo</option>
                            <option <?= $event->local == 'sf1' ? 'selected' : '' ?> value="sf1">salão fechado 1 ambiente</option>
                            <option <?= $event->local == 'sf2' ? 'selected' : '' ?> value="sf2">salão fechado 2 ambientes</option>
                            <option <?= $event->local == 'f' ? 'selected' : '' ?> value="f">Fazenda </option>
                            <option <?= $event->local == 'la' ? 'selected' : '' ?> value="la">local aberto </option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label for="exampleInputUnit1">quantidade de bares</label>
                        <input value="<?= $event->qtd_bar ?>" name="qtd_bar" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de bares">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Opção sexual do cliente</label>
                        <select name="sexual" class="form-control" required>
                            <option selected disabled>Selecione uma opção</option>
                            <option <?= $event->sexual == 1 ? 'selected' : '' ?> value="1">Heterossexual</option>
                            <option <?= $event->sexual == 2 ? 'selected' : '' ?> value="2">Homossexual</option>
                        </select>
                    </div>
                </div>
                <div style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                    <div>
                        <label>Bebidas servidas pelo buffet</label>
                    </div>
                    <div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input id="cerveja" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Cerveja</label>
                        </div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input id="espumante" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Espumante</label>
                        </div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input id="whisky" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Whisky</label>
                        </div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input id="vinho" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Vinho</label>
                        </div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input name="spots" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Spots</label>
                        </div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input name="criacao" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Coquetel criação</label>
                        </div>
                        <div class="form-check" style="margin: 0 5px;">
                            <input name="personalizado" type="checkbox" class="form-check-input">
                            <label class="form-check-label">Copo personalizado</label>
                        </div>
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Coquetel favorito para degustação</label>
                        <select name="preferido" class="form-control" required>
                            <option disabled>Selecione um coquetel</option>
                            <?php foreach ($drink as $el) { ?>
                                <option <?= $event->preferido == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Indicativo de consumo</label>
                        <select name="consumo" class="form-control" required>
                            <option disabled>Selecione um consumo</option>
                            <option <?= $event->consumo == 'baixo' ? 'selected' : '' ?> value="baixo">Baixo</option>
                            <option <?= $event->consumo == 'medio' ? 'selected' : '' ?> value="normal">Normal</option>
                            <option <?= $event->consumo == 'alto' ? 'selected' : '' ?> value="alto">Alto</option>
                        </select>
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:15%">
                        <label for="exampleInputUnit1">Gelo diamante</label>
                        <input value="<?= $event->gelo_diamante ?>" name="gelo_diamante" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de gelo diamante">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:15%">
                        <label for="exampleInputUnit1">Gelo esfera</label>
                        <input value="<?= $event->gelo_esfera ?>" name="gelo_esfera" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de gelo esfera">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:15%">
                        <label for="exampleInputUnit1">Gelo cubo</label>
                        <input value="<?= $event->gelo_cubo ?>" name="gelo_cubo" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de gelo cubo">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:15%">
                        <label for="exampleInputUnit1">Gelo personalizado</label>
                        <input value="<?= $event->gelo_personalizado ?>" name="gelo_personalizado" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de gelo personalizado">
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:15%">
                        <label for="exampleInputUnit1">Gelo flower</label>
                        <input value="<?= $event->gelo_flower ?>" name="gelo_flower" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de gelo flower">
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Faixa etária dos convidados</label>
                        <select name="etaria" class="form-control" required>
                            <option disabled>Selecione uma faixa</option>
                            <option <?= $event->etaria == '1525' ? 'selected' : '' ?> value="1525">15 a 25</option>
                            <option <?= $event->etaria == '2635' ? 'selected' : '' ?> value="2635">26 a 33</option>
                            <option <?= $event->etaria == '3645' ? 'selected' : '' ?> value="3645">36 a 45</option>
                            <option <?= $event->etaria == '4655' ? 'selected' : '' ?> value="4655">46 a 55</option>
                            <option <?= $event->etaria == '5600' ? 'selected' : '' ?> value="5600">56 ou mais</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Classe social da festa</label>
                        <select name="classe" class="form-control" required>
                            <option disabled>Selecione uma classe</option>
                            <option <?= $event->classe == 'aaa' ? 'selected' : '' ?> value="aaa">AAA</option>
                            <option <?= $event->classe == 'a' ? 'selected' : '' ?> value="a">A</option>
                            <option <?= $event->classe == 'b' ? 'selected' : '' ?> value="b">B</option>
                            <option <?= $event->classe == 'c' ? 'selected' : '' ?> value="cc">C</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-secondary btn-lg ant" style="width: 10%">Anterior</button>
                <button type="button" class="btn btn-block btn-primary btn-lg prox" style="width: 10%">Próximo</button>
            </div>

            <div id="bebidas-part" class="content fade" role="tabpanel" aria-labelledby="bebidas-part-trigger">
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Vodka</label>
                        <select name="vodka_id" class="form-control" required>
                            <option disabled>Selecione uma vodka</option>
                            <?php foreach ($vodka as $el) { ?>
                                <option <?= $event->vodka_id == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Espumante</label>
                        <select name="espumante_id" class="form-control" required>
                            <option disabled>Selecione um espumante</option>
                            <?php foreach ($espumante as $el) { ?>
                                <option <?= $event->espumante_id == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Whisky</label>
                        <select name="whisky_id" class="form-control" required>
                            <option disabled>Selecione um whisky</option>
                            <?php foreach ($whisky as $el) { ?>
                                <option <?= $event->whisky_id == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Vinho</label>
                        <select name="vinho_id" class="form-control" required>
                            <option disabled>Selecione um vinho</option>
                            <?php foreach ($vinho as $el) { ?>
                                <option <?= $event->vinho == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Aperitivo 1</label>
                        <select name="aperitivo1" class="form-control" required>
                            <option disabled>Selecione um aperitivo</option>
                            <option <?= $event->aperitivo1 == 1 ? 'selected' : '' ?> value="1">Aperol do cliente</option>
                            <option <?= $event->aperitivo1 == 2 ? 'selected' : '' ?> value="2">Aperol</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Aperitivo 2</label>
                        <select name="aperitivo2" class="form-control" required>
                            <option disabled>Selecione um aperitivo</option>
                            <option <?= $event->aperitivo2 == 1 ? 'selected' : '' ?> value="1">Campari do cliente</option>
                            <option <?= $event->aperitivo2 == 2 ? 'selected' : '' ?> value="2">Campari nacional</option>
                            <option <?= $event->aperitivo2 == 3 ? 'selected' : '' ?> value="3">Campari importado</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Aperitivo 3</label>
                        <select name="aperitivo3" class="form-control" required>
                            <option disabled>Selecione um aperitivo</option>
                            <option <?= $event->aperitivo3 == 1 ? 'selected' : '' ?> value="1">Vermont do cliente</option>
                            <option <?= $event->aperitivo3 == 2 ? 'selected' : '' ?> value="2">Vermount</option>
                            <option <?= $event->aperitivo3 == 3 ? 'selected' : '' ?> value="3">Vermount Punt & Mês</option>
                            <option <?= $event->aperitivo3 == 4 ? 'selected' : '' ?> value="4">Vermount Carpano clássico</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Aperitivo 4</label>
                        <select name="aperitivo4" class="form-control" required>
                            <option disabled>Selecione um aperitivo</option>
                            <option <?= $event->aperitivo4 == 1 ? 'selected' : '' ?> value="1">Lillet do cliente</option>
                            <option <?= $event->aperitivo4 == 2 ? 'selected' : '' ?> value="2">Lillet</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:19%">
                        <label>Aperitivo 5</label>
                        <select name="aperitivo5" class="form-control" required>
                            <option disabled>Selecione um aperitivo</option>
                            <option <?= $event->aperitivo5 == 1 ? 'selected' : '' ?> value="1">Ramazzotti do cliente</option>
                            <option <?= $event->aperitivo5 == 2 ? 'selected' : '' ?> value="2">Ramazzotti</option>
                        </select>
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Água com gás</label>
                        <select name="agua_id" class="form-control" required>
                            <option disabled>Selecione uma água com gás</option>
                            <option <?= $event->agua_id == 1 ? 'selected' : '' ?> value="1">Crystal VIP com gás</option>
                            <option <?= $event->agua_id == 2 ? 'selected' : '' ?> value="2">Crystal com gás</option>
                            <option <?= $event->agua_id == 3 ? 'selected' : '' ?> value="3">Flairs com gás</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Água tônica</label>
                        <select name="tonica_id" class="form-control" required>
                            <option disabled>Selecione uma água tônica</option>
                            <option <?= $event->tonica_id == 1 ? 'selected' : '' ?> value="1">St Pierre garrafa</option>
                            <option <?= $event->tonica_id == 2 ? 'selected' : '' ?> value="2">St Pierre lata</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Água de coco</label>
                        <select name="coco_id" class="form-control" required>
                            <option disabled>Selecione uma de coco</option>
                            <option <?= $event->coco_id == 1 ? 'selected' : '' ?> value="1">Kero coco</option>
                            <option <?= $event->coco_id == 2 ? 'selected' : '' ?> value="2">Sococo</option>
                        </select>
                    </div>
                </div>
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Saque</label>
                        <select name="saque_id" class="form-control" required>
                            <option disabled>Selecione um saque</option>
                            <option <?= $event->saque_id == 100 ? 'selected' : '' ?> value="100">Azuma Kirim ouro</option>
                            <option <?= $event->saque_id == 101 ? 'selected' : '' ?> value="101">Jun Daiti</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Run</label>
                        <select name="run_id" class="form-control" required>
                            <option disabled>Selecione um run</option>
                            <option <?= $event->run_id == 1 ? 'selected' : '' ?> value="1">Run do cliente</option>
                            <option <?= $event->run_id == 201 ? 'selected' : '' ?> value="201">Havana Ouro</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Cachaça</label>
                        <select name="cachaca_id" class="form-control" required>
                            <option disabled>Selecione uma cachaça</option>
                            <option <?= $event->turno == 1 ? 'selected' : '' ?> value="1">Cachaça do cliente</option>
                            <option <?= $event->turno == 301 ? 'selected' : '' ?> value="301">Leblon</option>
                            <option <?= $event->turno == 302 ? 'selected' : '' ?> value="302">Sagatiba</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-secondary btn-lg ant" style="width: 10%">Anterior</button>
                <button type="button" class="btn btn-block btn-primary btn-lg prox" style="width: 10%">Próximo</button>
            </div>

            <div id="consumo-part" class="content fade" role="tabpanel" aria-labelledby="consumo-part-trigger">
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:40%">
                        <label for="exampleInputUnit1">Consumo provisionado</label>
                        <div class="input-group">
                            <input value="<?= $event->provisionado ?>" name="provisionado" type="text" class="form-control din" placeholder="Consumo provisionado">
                        </div>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:40%">
                        <label for="exampleInputUnit1">Consumo sugerido</label>
                        <div class="input-group">
                            <input value="<?= $event->sugerido ?>" name="sugerido" type="text" class="form-control din" placeholder="Consumo sugerido">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-secondary btn-lg ant" style="width: 10%">Anterior</button>
                <button type="button" class="btn btn-block btn-primary btn-lg prox" style="width: 10%">Próximo</button>
            </div>

            <div id="custos-part" class="content fade" role="tabpanel" aria-labelledby="custos-part-trigger">
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:40%">
                        <label for="exampleInputUnit1">Receita provisionada bebida</label>
                        <div class="input-group">
                            <input value="<?= $event->receitapb ?>" name="receitapb" type="text" class="form-control din" placeholder="Receita provisionada bebida">
                        </div>
                    </div>
                    <div class="form-group" style="margin: 0 5px; width:40%">
                        <label for="exampleInputUnit1">Receita provisionada insumo</label>
                        <div class="input-group">
                            <input value="<?= $event->receitapi ?>" name="receitapi" type="text" class="form-control din" placeholder="Receita provisionada insumo">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-block btn-secondary btn-lg ant" style="width: 10%">Anterior</button>
                <button type="button" class="btn btn-block btn-primary btn-lg prox" style="width: 10%">Próximo</button>
            </div>

            <div id="casting-part" class="content fade" role="tabpanel" aria-labelledby="casting-part-trigger">
                <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
                    <div class="form-group" style="margin: 0 5px; width:30%">
                        <label>Uniforme</label>
                        <select name="casting_uniform" class="form-control" required>
                            <option' disabled>Selecione um uniforme</option>
                            <option <?= $event->casting_uniform == 1 ? 'selected' : '' ?> value="1">Summer branco</option>
                            <option <?= $event->casting_uniform == 2 ? 'selected' : '' ?> value="2">Summer preto</option>
                            <option <?= $event->casting_uniform == 3 ? 'selected' : '' ?> value="3">Colete preto</option>
                            <option <?= $event->casting_uniform == 4 ? 'selected' : '' ?> value="4">Colete cinza</option>
                            <option <?= $event->casting_uniform == 5 ? 'selected' : '' ?> value="5">Colete estampado xadrez</option>
                            <option <?= $event->casting_uniform == 6 ? 'selected' : '' ?> value="6">Personalizado</option>
                        </select>
                    </div>
                    <div id="casting" class="form-group">
                        <label>Funcionarios</label>
                        <a type="button" class="btn addCast" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
                        <br>
                        <table class="cast">
                            <tr>
                                <div class="casting" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">
                                    <select name="casting_people[]" class="form-control select2 " style="width: 70%;" tabindex="-1" aria-hidden="true">
                                        <option disabled>Selecione um funcionário</option>
                                        <?php foreach ($cast as $el) { ?>
                                            <option <?= $event->casting_id == $el->id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= $el->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <a id="firstCast" type="button" class=" btn removeCast" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></a>
                                </div>
                            </tr>
                        </table>
                    </div>

                </div>
                <button type="button" class="btn btn-block btn-secondary btn-lg ant" style="width: 10%">Anterior</button>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>

        </div>



    </div>
</div>
<?= $this->Form->end(); ?>
</div>