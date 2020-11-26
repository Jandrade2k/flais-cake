<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Evento</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-body">
        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputName1">Nome</label>
                <input name="name" type="text" class="form-control" value="<?= $event->name ?>" id="exampleInputEmail1" placeholder="Nome" disabled>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label>Cliente</label>
                <select name="customer_id" class="form-control" value="<?= $event->customer_id ?>" disabled>
                    <option disabled>Selecione um cliente</option>
                    <?php foreach ($customer as $el) { ?>
                        <option <?= $el->id == $event->customer_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label>Tipo de evento</label>
                <select name="tipo_id" class="form-control" disabled>
                    <option disabled>Selecione uma proposta</option>
                    <?php foreach ($tipo_eventos as $el) { ?>
                        <option <?= $el->id == $event->tipo_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label>Tipo de proposta</label>
                <select name="porposal_id" class="form-control" value="<?= $event->porposal_id ?>" disabled>
                    <option disabled>Selecione um tipo</option>
                    <?php foreach ($tipo_proposal as $el) { ?>
                        <option <?= $el->id == $event->porposal_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
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
                    <input name="event_date" type="text" class="form-control form_date" placeholder="dd/mm/yy" value="<?= $event->event_date ?>" disabled>
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">Data primeira parcela</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input name="portion_date" type="text" class="form-control form_date" value="<?= $event->portion_date ?>" placeholder="dd/mm/yy" disabled>
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">Quantidade de Convidados</label>
                <input name="qtd_guests" type="number" class="form-control" value="<?= $event->qtd_guests ?>" id="exampleInputPassword1" placeholder="Quantidade de Convidados" disabled>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">Carga horaria</label>
                <input name="hours" type="number" class="form-control" value="<?= $event->hours ?>" id="exampleInputPassword1" placeholder="Complemento" disabled>
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
                    <input name="price_van" type="text" class="form-control din" value="<?= $event->price_van ?>" disabled>
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
                    <input name="price_hotel" type="text" class="form-control din" value="<?= $event->price_hotel ?>" disabled>
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
                    <input name="price_food" type="text" class="form-control din" value="<?= $event->price_food ?>" disabled>
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">Distancia (km)</label>
                <div class="input-group">
                    <input name="distance" type="text" class="form-control din" placeholder="Distancia (km)" value="<?= $event->distance ?>" disabled>
                </div>
            </div>
        </div>

        <br>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:40%">
                <label>BV</label>

                <select name="bv" class="form-control" value="<?= $event->bv ?>" disabled>
                    <option <?= $event->bv ? 'selected' : ''; ?> value="1">Sim</option>
                    <option <?= !$event->bv ? 'selected' : ''; ?> value="0">Não</option>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:40%">
                <label>Royalts</label>
                <select name="royaltsbv" class="form-control" disabled>
                    <option <?= $event->royalts ? 'selected' : ''; ?> value="1">Sim</option>
                    <option <?= !$event->royalts ? 'selected' : ''; ?> value="0">Não</option>
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
                    <input name="creation_expense" type="text" class="form-control din" value="<?= $event->creation_expense ?>" disabled>
                </div>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label>Forma de Pagamento</label>
                <select name="payment_method" class="form-control" value="<?= $event->payment_method ?>" disabled>
                    <option value="dinheiro">Dinheiro</option>
                    <option value="credito">Cartão de crédito</option>
                    <option value="debito">Cartão de debito</option>
                    <option value="cheque">Cheque</option>
                </select>
            </div>
            <div class="form-group" style="margin: 0 5px; width:30%">
                <label for="exampleInputUnit1">quantidade de bares</label>
                <input name="qtd_bar" type="number" class="form-control" value="<?= $event->qtd_bar ?>" id="exampleInputPassword1" placeholder="Quantidade de bares" disabled>
            </div>
        </div>
        <!-- <div class="form-group" style="margin: 0 5px; width:30%">
        <label for="exampleInputUnit1">Drinks por convidado</label>
        <button type="button" class="btn btn-block btn-primary" style="cursor:default">5,94</button>
        </div> -->

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'edit', $event->id]); ?>" class="btn btn-info">Editar</a>
        <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'index']); ?>" class="btn btn-danger">Voltar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>