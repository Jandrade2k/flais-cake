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
    <div class="card-body">
        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:25%">
                <label for="exampleInputName1">Nome</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
            </div>
            <div class="form-group" style="margin: 0 5px; width:25%">
                <label>Cliente</label>
                <select name="customer_id" class="form-control" required>
                    <option selected disabled>Selecione um cliente</option>
                    <?php foreach ($customer as $el) { ?>
                        <option value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:25%">
                <label>Tipo de evento</label>
                <select name="tipo_id" class="form-control" required>
                    <option selected disabled>Selecione uma tipo</option>
                    <?php foreach ($tipo_eventos as $el) { ?>
                        <option value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:25%">
                <label>Tipo de proposta</label>
                <select name="porposal_id" class="form-control" required>
                    <option selected disabled>Selecione uma proposta</option>
                    <?php foreach ($tipo_proposal as $el) { ?>
                        <option value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <br>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">Data do evento</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input name="event_date" type="text" class="form-control form_date" placeholder="dd/mm/yy">
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">Data primeira parcela</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input name="portion_date" type="text" class="form-control form_date" placeholder="dd/mm/yy">
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">Quantidade de Convidados</label>
                <input name="qtd_guests" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de Convidados">
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">Carga horaria</label>
                <input name="hours" type="number" class="form-control" id="exampleInputPassword1" placeholder="Complemento">
            </div>
        </div>

        <br>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:27%">
                <label for="exampleInputUnit1">Preço da van</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input name="price_van" type="text" class="form-control din">
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:26%">
                <label for="exampleInputUnit1">Preço do hotel</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input name="price_hotel" type="text" class="form-control din">
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:27%">
                <label for="exampleInputUnit1">Preço alimentação</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input name="price_food" type="text" class="form-control din">
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">Distancia (km)</label>
                <div class="input-group">
                    <input name="distance" type="text" class="form-control din" placeholder="Distancia (km)">
                </div>
            </div>
        </div>

        <br>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:40%">
                <label>BV</label>
                <select name="bv" class="form-control">
                    <option value="1">Sim</option>
                    <option selected value="0">Não</option>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:40%">
                <label>Royalts</label>
                <select name="royalts" class="form-control">
                    <option selected value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <br>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">Preço de criação</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input name="creation_expense" type="text" class="form-control din">
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label>Forma de Pagamento</label>
                <select name="payment_method" class="form-control">
                    <option value="dinheiro">Dinheiro</option>
                    <option selected value="credito">Cartão de crédito</option>
                    <option value="debito">Cartão de debito</option>
                    <option value="cheque">Cheque</option>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">quantidade de bares</label>
                <input name="qtd_bar" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de bares">
            </div>
        </div>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:19%">
                <label>Vodka</label>
                <select name="vodka_id" class="form-control" required>
                    <option selected disabled>Selecione uma vodka</option>
                    <?php
                     foreach ($vodka as $el) { ?>
                        <option value="<?= $el->category ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group" style="margin: 0 5px; width:19%">
                <label>Whisky</label>
                <select name="whisky_id" class="form-control" required>
                    <option selected disabled>Selecione um whisky</option>
                    <?php foreach ($whisky as $el) { ?>
                        <option value="<?= $el->category ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group" style="margin: 0 5px; width:19%">
                <label>Gin</label>
                <select name="gin_id" class="form-control" required>
                    <option selected disabled>Selecione um gin</option>
                    <?php foreach ($gin as $el) { ?>
                        <option value="<?= $el->category ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group" style="margin: 0 5px; width:19%">
                <label>Aperol</label>
                <select name="aperol_id" class="form-control" required>
                    <option selected disabled>Selecione um aperol</option>
                    <?php foreach ($aperol as $el) { ?>
                        <option value="<?= $el->category ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group" style="margin: 0 5px; width:19%">
                <label>Vinho</label>
                <select name="vinho_id" class="form-control" required>
                    <option selected disabled>Selecione um vinho</option>
                    <?php foreach ($vinho as $el) { ?>
                        <option value="<?= $el->category ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group" style="margin: 0 5px; width:19%">
                <label>Espumante</label>
                <select name="espumante_id" class="form-control" required>
                    <option selected disabled>Selecione um espumante</option>
                    <?php foreach ($espumante as $el) { ?>
                        <option value="<?= $el->category ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>
            
        </div>
        <div class="form-group" style="margin: 0 5px; width:30%">
            <input name="drinks_guests" type="hidden" class="form-control" id="exampleInputPassword1" value="10.00">
        </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer" style=" margin: 0 5px; display: flex; flex-direction:row; justify-content:space-between; align-items: center;">
        <div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-info" style="cursor:default">Drinks por convidado</button>
            <button type="button" class="btn btn-info" style="cursor:default">5,00</button>
        </div>
    </div>
</div>
<?= $this->Form->end(); ?>
</div>