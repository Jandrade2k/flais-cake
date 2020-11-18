<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Novo Cliente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contato</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contato">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">CEP</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CEP">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Logradouro</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Logradouro">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Numero</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Numero">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Complemento</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Cidade</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">UF</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="UF">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="<?= $this->Url->build(['controller'=>'customers', 'action' =>'index']); ?>" class="btn btn-success">Salvar</a>
            <a href="<?= $this->Url->build(['controller'=> 'customers', 'action'=>'index']); ?>" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>