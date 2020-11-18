<div style="margin:0 20px;">
    <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'add']); ?>" class="btn btn-primary">
        <i class="nav-icon fas fa-plus"></i>
        Adicionar
    </a>
</div>

<div class="card card-outline card-secondary" style="margin:20px;">

    <div class="card-body p-0">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width:20%">Nome</th>
                    <th style="width:30%;">Endereço</th>
                    <th style="width:20%;">E-mail</th>
                    <th style="width:20%;"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Neymar Junior</td>
                    <td><small>Rua El Greco, Goiânia - GO</small></td>
                    <td><a href="#">
                            Neymar@Junior.com
                        </a>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'view']); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sophie Caroline Cardoso</td>
                    <td><small>Rua Pau Brasil, São Luís - MA</small></td>
                    <td><a href="#">
                            Sophie@Cardoso.com
                        </a>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'view']); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fátima Esther Agatha Carvalho</td>
                    <td><small>Rua Temístocles Henrique Tribueiro, Boa Vista - RR</small></td>
                    <td><a href="#">
                            Fátima@Carvalho.com
                        </a>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'view']); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>