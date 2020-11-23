<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="card card-secondary" style="margin:20px;">
    <div class="card-header">
        <h3 class="card-title">Nova Receita</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= $this->Form->create(null, ['role' => 'form', 'id' => 'troxa']); ?>
    <div class="card-body">
        <div id="ingred" class="form-group">
            <label>Ingredientes</label>
            <a type="button" class="btn addIng" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></a>
            <br>
            <table class="ing">
                <tr>
                    <div class="ingrediente" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">
                        <select name="ingredient['id'][]" class="form-control select2 " style="width: 70%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected disabled>Selecione um ingrediente</option>
                            <?php foreach ($ing as $el) { ?>
                                <option value="<?= $el->id ?>"><?= $el->name ?></option>
                            <?php } ?>
                        </select>
                        <input name="ingredient['qtd'][]" class="form-control" type="number" placeholder="quantidade" style="width:10%; margin:5px;">
                        <a id="firstIng" type="button" class=" btn removeIng" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></a>
                    </div>
                </tr>
            </table>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= $this->Url->build(['controller' => 'drinks', 'action' => 'index']); ?>" class="btn btn-danger">Cancelar</a>
    </div>
    <?= $this->Form->end(); ?>
</div>
<script>
    $('document').ready(function() {
        var max_fields = 10;
        var x = 1;
        $('.addIng').click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                $('#ingred').append(`\
                <div class="ingrediente" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">\
                <select name="ingredient['id'][]" class="form-control select2 " style="width: 70%;" data-select2-id="1" tabindex="-1" aria-hidden="true">\
                <option selected disabled>Selecione um ingrediente</option>\
                    <?php foreach ($ing as $el) { ?>\
                        <option value="<?= $el->id ?>"><?= $el->name ?></option>\
                    <?php } ?>\
                </select>\
                <input name="ingredient['qtd'][]" class="form-control" type="number" placeholder="quantidade" style="width:10%; margin:5px;">\
                <a type="button" class=" btn removeIng" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></a>\
            </div>\
                `)
                x++;
            }

            $('.removeIng').on('click', function(e) {
                e.preventDefault();
                var linha = $(this.parentNode);
                linha.remove();
                x--;
            })
        });


    })
</script>