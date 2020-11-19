<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title"><?= strtoupper($customer->name) ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="<?= $customer->name ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" value="<?= $customer->email; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone" value="<?= $customer->phone ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contato</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Contato" value="<?= $customer->contact ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">CEP</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CEP" value="<?= $customer->cep ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Logradouro</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Logradouro" value="<?= $customer->place ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Numero</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Numero" value="<?= $customer->number ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Complemento</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Complemento" value="<?= $customer->complement ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Cidade</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cidade" value="<?= $customer->city ?>" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">UF</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="UF" value="<?= $customer->uf ?>" disabled>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="<?= $this->Url->build(['controller'=>'customers', 'action' =>'edit', $customer->id]); ?>" class="btn btn-info">Editar</a>
            <a href="<?= $this->Url->build(['controller'=> 'customers', 'action'=>'index']); ?>" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>