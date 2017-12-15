<?php

namespace nolbertovilchez\yii2\gii\model;


class Generator extends \yii\gii\generators\model\Generator {

    public function getName() {
        return 'Model Generator [Gulpjs]';
    }

    public function getDescription() {
        return 'Generador de Modelos de DB para proyectos que cuenten con gulpjs como automatizador de tareas';
    }
}
