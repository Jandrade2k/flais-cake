<?= $this->Flash->render(); ?>
<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Evento</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputName1">Nome</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Cliente</label>
            <select name="customer_id" class="form-control" required>
                <option selected disabled>Selecione um cliente</option>
                <?php foreach ($customer as $el) { ?>
                    <option value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de evento</label>
            <select name="tipo_id" class="form-control" required>
                <option selected disabled>Selecione uma proposta</option>
                <?php foreach ($tipo_eventos as $el) { ?>
                    <option value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de proposta</label>
            <select name="porposal_id" class="form-control" required>
                <option selected disabled>Selecione um tipo</option>
                <?php foreach ($tipo_proposal as $el) { ?>
                    <option value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Data do evento</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input name="event_date" type="text" class="form-control form_date" placeholder="dd/mm/yy">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Data primeira parcela</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input name="portion_date" type="text" class="form-control form_date" placeholder="dd/mm/yy">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Quantidade de Convidados</label>
            <input name="qtd_guests" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de Convidados">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Carga horaria</label>
            <input name="hours" type="number" class="form-control" id="exampleInputPassword1" placeholder="Complemento">
        </div>
        <div class="form-group">
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
        <div class="form-group">
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
        <div class="form-group">
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
        <div class="form-group">
            <label for="exampleInputUnit1">Distancia (km)</label>
            <div class="input-group">
                <input name="distance" type="text" class="form-control din" placeholder="Distancia (km)">
            </div>
        </div>
        <div class="form-group">
            <label>BV</label>
            <select name="bv" class="form-control">
                <option value="1">Sim</option>
                <option selected value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label>Royalts</label>
            <select name="royalts" class="form-control">
                <option selected value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
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
        <div class="form-group">
            <label>Forma de Pagamento</label>
            <select name="payment_method" class="form-control">
                <option value="dinheiro">Dinheiro</option>
                <option selected value="credito">Cartão de crédito</option>
                <option value="debito">Cartão de debito</option>
                <option value="cheque">Cheque</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">quantidade de bares</label>
            <input name="qtd_bar" type="number" class="form-control" id="exampleInputPassword1" placeholder="Quantidade de bares">
        </div>
        <!-- <div class="form-group">
        <label for="exampleInputUnit1">Drinks por convidado</label>
        <button type="button" class="btn btn-block btn-primary" style="cursor:default">5,94</button>
        </div> -->

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>