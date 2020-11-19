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
            <label>Tipo de evento</label>
            <select name="tipo_id" class="form-control" required>
                    <option selected disabled>Selecione um tipo</option>
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
            <label for="exampleInputEmail1">Contato</label>
            <input name="contact" type="text" class="form-control" id="exampleInputEmail1" placeholder="Contato">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">CEP</label>
            <input name="cep" type="text" class="form-control cep" id="exampleInputPassword1" placeholder="CEP" data-mask="00000-000" data-mask-selectonfocus="true">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Numero</label>
            <input name="number" type="number" class="form-control" id="exampleInputPassword1" placeholder="Numero">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Complemento</label>
            <input name="complement" type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Logradouro</label>
            <input name="place" type="text" class="form-control" id="com_logradouro" placeholder="Logradouro">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">Cidade</label>
            <input name="city" type="text" class="form-control" id="com_cidade" placeholder="Cidade">
        </div>
        <div class="form-group">
            <label for="exampleInputUnit1">UF</label>
            <input name="uf" type="text" class="form-control" id="con_estado" placeholder="UF">
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>