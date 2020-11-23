<div style="margin:0 20px;">
    <a href="<?= $this->Url->build(['controller' => 'recipes', 'action' => 'add']); ?>" class="btn btn-primary">
        <i class="nav-icon fas fa-plus"></i>
        Adicionar
    </a>
</div>
<?= $this->Flash->render(); ?>
