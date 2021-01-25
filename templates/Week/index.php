<?= $this->Flash->render(); ?>
<?= $this->Form->create(null, ['url' => ['controller' => 'events', 'action' => 'index']]); ?>
<div class="card card-outline card-secondary" style="margin:20px; padding:30px; display:flex; flex-direction:row;">
    <div class="input-daterange" style="display:flex; flex-direction:row; width:50%;">
        <div class="form-group" style="margin: 0 5px; width:50%">
            <label for="exampleInputName1">Data Inicial</label>
            <input autocomplete="off" name="start" type="text" class="form-control" id="start" placeholder="Data Inicial">
        </div>
        <div class="form-group" style="margin: 0 5px; width:50%">
            <label for="exampleInputName1">Data Final</label>
            <input autocomplete="off" name="end" type="text" class="form-control" id="end" placeholder="Data Final">
        </div>
    </div>
    <div style="margin: 0 7px; width:25%">
        <button type="submit" id="search" class="btn btn-info" style="margin-top: 30px;">Buscar</button>
    </div>
</div>
<?= $this->Form->end(); ?>