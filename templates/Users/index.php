<div class="card card-outline card-secondary" style="margin:20px;">
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-sm">
      <thead>
        <tr>
          <th style="width:20%">Nome</th>
          <th style="width:20%;">Unidade</th>
          <th style="width:20%;">E-mail</th>
          <th style="width:20%;"> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Elvis Presley</td>
          <td>Tupelo, Mississip, EUA</td>
          <td><a href="#">
              Elvis@presley.com
            </a>
          </td>
          <td>
            <div class="btn-group">
              <a href="<?= $this->Url->build(['controller'=>'users', 'action' => 'view']); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>Michael Jackson</td>
          <td>Gary, Indiana, EUA</td>
          <td><a href="#">
              Michael@Jackson.com
            </a>
          </td>
          <td>
            <div class="btn-group">
            <a href="<?= $this->Url->build(['controller'=>'users', 'action' => 'view']); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>Lady Gaga</td>
          <td>Nova Iorque, Nova York, EUA</td>
          <td><a href="#">
          Lady@Gaga.com
            </a>
          </td>
          <td>
            <div class="btn-group">
            <a href="<?= $this->Url->build(['controller'=>'users', 'action' => 'view']); ?>" class="btn btn-default"><i class="fas fa-eye"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>