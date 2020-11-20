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
            <input name="name" type="text" class="form-control"  value="<?= $event->name ?>" id="exampleInputEmail1" placeholder="Nome">
        </div>
        <div class="form-group">
            <label>Cliente</label>
            <select name="customer_id" class="form-control"  value="<?= $event->customer_id ?>" required>
                <option disabled>Selecione um cliente</option>
                <?php foreach ($customer as $el) { ?>
                    <option <?= $el->id == $event->customer_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de evento</label>
            <select name="tipo_id" class="form-control"  required>
                <option disabled>Selecione uma proposta</option>
                <?php foreach ($tipo_eventos as $el) { ?>
                    <option <?= $el->id == $event->tipo_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de proposta</label>
            <select name="porposal_id" class="form-control"  value="<?= $event->porposal_id ?>" required>
                <option disabled>Selecione um tipo</option>
                <?php foreach ($tipo_proposal as $el) { ?>
                    <option <?= $el->id == $event->porposal_id ? 'selected' : '' ?> value="<?= $el->id ?>"><?= ucfirst($el->name) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Data do evento</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input name="event_date" type="text" class="form-control" value="<?= $event->event_date ?>" placeholder="dd/mm/yy">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Data primeira parcela</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input name="portion_date" type="text" class="form-control form_date" value="<?= $event->portion_date ?>" placeholder="dd/mm/yy">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Quantidade de Convidados</label>
            <input name="qtd_guests" type="number" class="form-control"  value="<?= $event->qtd_guests ?>" id="exampleInputPassword1" placeholder="Quantidade de Convidados">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Carga horaria</label>
            <input name="hours" type="number" class="form-control"  value="<?= $event->hours ?>" id="exampleInputPassword1" placeholder="Complemento">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Preço da van</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                    </span>
                </div>
                <input name="price_van" type="text" class="form-control din" value="<?= $event->price_van ?>">
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
                <input name="price_hotel" type="text" class="form-control din" value="<?= $event->price_hotel ?>">
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
                <input name="price_food" type="text" class="form-control din" value="<?= $event->price_food ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Distancia (km)</label>
            <div class="input-group">
                <input name="distance" type="text" class="form-control din" placeholder="Distancia (km)" value="<?= $event->distance ?>">
            </div>
        </div>
        <div class="form-group">
            <label>BV</label>
            
            <select name="bv" class="form-control"  value="<?= $event->bv ?>">
                <option <?= $event->bv ? 'selected' : ''; ?> value="1">Sim</option>
                <option <?= !$event->bv ? 'selected' : ''; ?> value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label>Royalts</label>
            <select name="royaltsbv" class="form-control">
                <option <?= $event->royalts ? 'selected' : ''; ?> value="1">Sim</option>
                <option <?= !$event->royalts ? 'selected' : ''; ?> value="0">Não</option>
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
                <input name="creation_expense" type="text" class="form-control din" value="<?= $event->creation_expense ?>">
            </div>
        </div>
        <div class="form-group">
            <label>Forma de Pagamento</label>
            <select name="payment_method" class="form-control"  value="<?= $event->payment_method ?>">
                <option value="dinheiro">Dinheiro</option>
                <option value="credito">Cartão de crédito</option>
                <option value="debito">Cartão de debito</option>
                <option value="cheque">Cheque</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">quantidade de bares</label>
            <input name="qtd_bar" type="number" class="form-control"  value="<?= $event->qtd_bar ?>" id="exampleInputPassword1" placeholder="Quantidade de bares">
        </div>
        <!-- <div class="form-group">
        <label for="exampleInputUnit1">Drinks por convidado</label>
        <button type="button" class="btn btn-block btn-primary" style="cursor:default">5,94</button>
        </div> -->

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>