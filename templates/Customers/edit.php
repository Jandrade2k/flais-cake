<?= $this->Flash->render(); ?>
<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Cliente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="<?= $customer->name ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" value="<?= $customer->email; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input name="phone" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone" value="<?= $customer->phone ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contato</label>
                <input name="contact" type="text" class="form-control" id="exampleInputEmail1" placeholder="Contato" value="<?= $customer->contact ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">CEP</label>
                <input name="cep" type="text" class="form-control" id="exampleInputPassword1" placeholder="CEP" value="<?= $customer->cep ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Logradouro</label>
                <input name="place" type="text" class="form-control" id="exampleInputPassword1" placeholder="Logradouro" value="<?= $customer->place ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Numero</label>
                <input name="number" type="number" class="form-control" id="exampleInputPassword1" placeholder="Numero" value="<?= $customer->number ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Complemento</label>
                <input name="complement" type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento" value="<?= $customer->complement ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Cidade</label>
                <input name="city" type="text" class="form-control" id="exampleInputPassword1" placeholder="Cidade" value="<?= $customer->city ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">UF</label>
                <input name="uf" type="text" class="form-control" id="exampleInputPassword1" placeholder="UF" value="<?= $customer->uf ?>">
            </div>

        </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>