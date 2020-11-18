<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Elvis Presley</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome" value="Elvis Presley" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail" value="Elvis@presley.com" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputUnit1">Unidade</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Unidade" value="Tupelo, Mississip, EUA" disabled>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="<?= $this->Url->build(['controller'=>'users', 'action' =>'edit']); ?>" class="btn btn-info">Editar</a>
            <a href="<?= $this->Url->build(['controller'=> 'users', 'action'=>'index']); ?>" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>