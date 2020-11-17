<?php

    if($this->request->getParam('controller') == 'Users'){
        $this->assign('title', 'Usuários');
        if($this->request->getParam('action') == 'add'){
            $this->assign('title', 'Criar '. $this->fetch('title'));
        }
        if($this->request->getParam('action') == 'edit'){
            $this->assign('title', 'Editar Usuários');
        }
    }

?>