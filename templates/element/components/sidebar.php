<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= $this->request->getAttribute('webroot');?>dist/img/avatar-pub.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nome da Unidade</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller'=>'users', 'action' => 'index']); ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Usuários</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller'=>'customers', 'action' => 'index']); ?>" class="nav-link">
              <i class="nav-icon fas fa-hand-holding"></i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller'=>'events', 'action' => 'index']); ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Eventos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller'=>'drinks', 'action' => 'index']); ?>" class="nav-link">
              <i class="nav-icon fas fa-cocktail"></i>
              <p>Drinks</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller'=>'recipes', 'action' => 'add']); ?>" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Receita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= $this->Url->build(['controller'=>'ingredients', 'action' => 'index']); ?>" class="nav-link">
              <i class="nav-icon fas fa-apple-alt"></i>
              <p>Ingredientes</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
