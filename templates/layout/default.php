<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <?= $this->element('components/set_title'); ?>
    <title><?= $this->fetch('title'); ?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>css/global.css">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->element('components/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->element('components/sidebar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?= $this->element('components/page-title'); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?= $this->fetch('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?= $this->element('components/control-sidebar'); ?>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?= $this->element('components/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>plugins/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/adminlte.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- OPTIONAL SCRIPTS -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>plugins/chart.js/Chart.min.js"></script>
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/demo.js"></script>
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/pages/dashboard3.js"></script>
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/jquery.mask.js"></script>
    <!-- DataTables -->
    <script src="..<?= $this->request->getAttribute('webroot'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="..<?= $this->request->getAttribute('webroot'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="..<?= $this->request->getAttribute('webroot'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="..<?= $this->request->getAttribute('webroot'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <?php if (($this->request->getParam('controller') == 'Inventory' && $this->request->getParam('action') == 'add') || $this->request->getParam('controller') == 'Inventory' && $this->request->getParam('action') == 'edit') { ?>
        <script>
            $('document').ready(function() {
                var y = 1;
                $('.addDrk').click(function(e) {
                    e.preventDefault();
                    $('#drk').append(`\
                    <div style="display:flex; flex-direction:row; justify-content:center; align-items:center; width:100%;">\
                        <a type="button" class="btn reDrk" style="margin:5px;"><i class="fas fa-trash" style="width:20px; height:20px;"></i></a>\
                        <select name="products[id][]" class="form-control select2 " style="width: 50%;" tabindex="-1" aria-hidden="true">\
                            <option selected disabled>Selecione um drink</option>\
                            <?php foreach ($drinks as $el) { ?>\
                                <option value="<?= $el->id ?>"><?= $el->name ?></option>\
                            <?php } ?>\
                        </select>\
                        <div style="display:flex; flex-direction:row; justify-content:center; align-items:center;">\
                            <button onClick="addNum(this)" type="button" class="btn addNum" style="margin:5px;"><i class="fas fa-plus-circle" style="width:20px; height:20px;"></i></button>\
                            <input onChange="change(this)" class="form-control num" name="number[id][]" type="number" value="0" style="width:25%;" disabled>\
                            <button onClick="reNum(this)" type="button" class="btn reNum" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></button>\
                        </div>\
                    </div>\
                    `)
                    y++;

                    $('.reDrk').on('click', function(e) {
                        e.preventDefault();
                        var linha = $(this.parentNode);
                        linha.remove();
                        y--;
                    })

                    $('.select2').select2();
                })
            })
        </script>
    <?php } ?>


    <?php if (($this->request->getParam('controller') == 'Drinks' && $this->request->getParam('action') == 'add') || $this->request->getParam('controller') == 'Drinks' && $this->request->getParam('action') == 'edit') { ?>
        <script>
            $('document').ready(function() {
                var max_fields = 10;
                var x = 1;
                $('.addIng').click(function(e) {
                        e.preventDefault();
                        if (x < max_fields) {
                            $('#ingred').append(`\
                <div class="ingrediente" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">\
                <select name="ingredient[id][]" class="form-control select2 " style="width: 70%;" tabindex="-1" aria-hidden="true">\
                <option selected disabled>Selecione um ingrediente</option>\
                    <?php foreach ($ing as $el) { ?>\
                        <option value="<?= $el->id ?>"><?= $el->name ?></option>\
                    <?php } ?>\
                </select>\
                <input name="ingredient[qtd][]" class="form-control" type="number" placeholder="quantidade" style="width:10%; margin:5px;">\
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
                        });
                    }),

                    $('.addGua').click(function(e) {
                        e.preventDefault();
                        if (x < max_fields) {
                            $('#guarrinson').append(`\
                <div class="guarrinson" style="display:flex; flex-direction:row; justify-content:center; align-items:center; margin:5px;">\
                <select name="guarrinson[id][]" class="form-control select2 " style="width: 70%;" tabindex="-1" aria-hidden="true">\
                <option selected disabled>Selecione um guarnição</option>\
                    <?php foreach ($gua as $el) { ?>\
                        <option value="<?= $el->id ?>"><?= $el->name ?></option>\
                    <?php } ?>\
                </select>\
                <input name="guarrinson[qtd][]" class="form-control" type="number" placeholder="quantidade" style="width:10%; margin:5px;">\
                <a id="firstIng" type="button" class=" btn removeGua" style="margin:5px;"><i class="fas fa-minus-circle" style="width:20px; height:20px;"></i></a>\
            </div>\
                `)
                            x++;
                        }

                        $('.removeGua').on('click', function(e) {
                            e.preventDefault();
                            var linha = $(this.parentNode);
                            linha.remove();
                            x--;
                        })
                    });


            })
        </script>
    <?php } ?>

    <script>
        $(function() {
            $(".table").DataTable({
                "responsive": true,
                "autoWidth": false,
                "ordering": true,
                "pageLength": 5,
                "lengthMenu": [5, 10, 20, 30],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
                }
            });
        });
        $('.select2').select2();
        $('.form_date').mask('00/00/00');
        $('.din').mask('000.000.000.000.000,00', {
            reverse: true
        });
        $('.cep').change(function() {
            cep = $('.cep').val();
            console.log('change', cep)
            $.ajax({
                    url: "https://viacep.com.br/ws/" + cep + "/json/",
                    type: 'get'
                })
                .done(function(data) {
                    console.log('zcode working', data)
                    $('#com_logradouro, #imo_logradouro, #con_logradouro, #imo_logradouro, #cli_logradouro').val(data.logradouro);
                    $('#com_bairro, #imo_bairro, #con_bairro, #cli_bairro').val(data.bairro);
                    $('#com_cidade, #imo_cidade, #con_cidade, #cli_cidade').val(data.localidade);
                    $('#com_estado, #imo_estado, #con_estado, #cli_estado').val(data.uf);
                    // $("#resultado").html(msg);
                    if (data.logradouro) {
                        $("#com_numero").focus()
                    }
                })
                .fail(function(jqXHR, textStatus, data) {
                    console.log(data);
                    console.log(textStatus);
                    console.log(jqXHR);
                });
        });

                function addNum(t) {
                    var txt = $('#totalDrk').text(); //total de drinks
                    var num = $(t.parentNode.childNodes[3]).val();  // numero dentro do input
                    var res = parseInt(txt) -  10; // resultado dos valores
                    $('#totalDrk').text(res);

                    somNum = $(t.parentNode.childNodes[3]).val();
                    $(t.parentNode.childNodes[3]).val(parseInt(num) + 10);

                    // var txt = $('#totalDrk').text();
                    // var num = $(t.parentNode.childNodes[3]).val();
                    // if (!num) {
                    //     $(t.parentNode.childNodes[3]).val(0);
                    // }
                    // n = parseInt(num) + 10;
                    // $(t.parentNode.childNodes[3]).val(n);
                    // var res = parseInt(txt) - n;
                    // $('#totalDrk').text(res);
                    
                }

                function reNum(t) {
                    var txt = $('#totalDrk').text(); //total de drinks
                    var num = $(t.parentNode.childNodes[3]).val();  // numero dentro do input
                    var res = parseInt(txt) +  10; // resultado dos valores
                    

                    somNum = $(t.parentNode.childNodes[3]).val();
                    $(t.parentNode.childNodes[3]).val(parseInt(num) - 10);
                    if (!num) {
                        $(t.parentNode.childNodes[3]).val(0);
                    }
                    if (num < 10) {
                        $(t.parentNode.childNodes[3]).val(0);
                    } else {
                        $('#totalDrk').text(res);
                    }
                    
                }

                

                function change(t) {
                    // var txt = $('#totalDrk').text(); //total de drinks
                    var num = $(t).val();
                    // console.log('txt', txt)
                    // console.log('num', num)

                    // calcula a diferenca dos inputs

                    $(t).attr('old-value') = num

                    var oldValue = $(t).defaultValue;
                    var newValue = $(t).attr('data-val');


                    console.log('oldValue', $(t))
                    console.log('newValue', newValue)
                    var resultSet = $(t).val() - parseInt( $('#totalDrk').text() )
                    console.log('resultSet', $(t))
                    if (  resultSet  > 0 ) {
                        
                        somaTotal(parseInt($(t).val()))
                    } else {
                        subTotal(parseInt($(t).val()))
                        
                    }
                }

                

                function somaTotal(soma) {
                    var res = parseInt($('#totalDrk').text()) + soma;
                    $('#totalDrk').text(res);
                    
                }

                function subTotal(sub) {
                    var res = parseInt($('#totalDrk').text()) - sub;
                    $('#totalDrk').text(res);
                    
                }
    </script>

</body>

</html>