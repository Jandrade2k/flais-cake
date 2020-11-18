<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Neymar Juior</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="Neymar Juior" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" value="Neymar@Junior.com" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone" value="(15) 99999-9999" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contato</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contato" value="Neymar" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">CEP</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CEP" value="74574-009" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Logradouro</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Logradouro" value="Rua El Greco" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Numero</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Numero" value="123" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Complemento</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento" value="bl 1 ap 12" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Cidade</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cidade" value="Goiânia" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">UF</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="UF" value="GO" disabled>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="<?= $this->Url->build(['controller'=>'customers', 'action' =>'edit']); ?>" class="btn btn-info">Editar</a>
            <a href="<?= $this->Url->build(['controller'=> 'customers', 'action'=>'index']); ?>" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>