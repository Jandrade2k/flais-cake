<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Cliente</h3>
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
                <label for="exampleInputEmail1">E-mail</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
            </div>
            <div class="form-group" style="margin: 0 5px; width:25%">
                <label for="exampleInputEmail1">Telefone</label>
                <input name="phone" type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true">
            </div>
            <div class="form-group" style="margin: 0 5px; width:25%">
                <label for="exampleInputEmail1">Contato</label>
                <input name="contact" type="text" class="form-control" id="exampleInputEmail1" placeholder="Contato">
            </div>
        </div>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">CEP</label>
                <input name="cep" type="text" class="form-control cep" id="exampleInputPassword1" placeholder="CEP" data-mask="00000-000" data-mask-selectonfocus="true">
            </div>
            <div class="form-group" style="margin: 0 5px; width:15%">
                <label for="exampleInputUnit1">Numero</label>
                <input name="number" type="number" class="form-control" id="exampleInputPassword1" placeholder="Numero">
            </div>
            <div class="form-group" style="margin: 0 5px; width:32%">
                <label for="exampleInputUnit1">Complemento</label>
                <input name="complement" type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento">
            </div>
            <div class="form-group" style="margin: 0 5px; width:33%">
                <label for="exampleInputUnit1">Logradouro</label>
                <input name="place" type="text" class="form-control" id="com_logradouro" placeholder="Logradouro">
            </div>
        </div>

        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">
            <div class="form-group" style="margin: 0 5px; width:20%">
                <label for="exampleInputUnit1">Cidade</label>
                <input name="city" type="text" class="form-control" id="com_cidade" placeholder="Cidade">
            </div>
            <div class="form-group" style="margin: 0 5px; width:8%">
                <label for="exampleInputUnit1">UF</label>
                <input name="uf" type="text" class="form-control" id="con_estado" placeholder="UF">
            </div>
        </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>