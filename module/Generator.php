<?php

namespace nolbertovilchez\yii2\gii\module;

use yii\gii\CodeFile;

class Generator extends \yii\gii\generators\module\Generator {

    public function getName() {
        return 'Module Generator [Gulpjs]';
    }

    public function getDescription() {
        return 'Generador de Modulos para proyectos que cuenten con gulpjs como automatizador de tareas';
    }

    public function requiredTemplates() {
        return ['module.php', 'controller.php', 'view.php', 'assets.php'];
    }

    public function generate() {

        $files      = parent::generate();
        $modulePath = $this->getModulePath();
        $files[]    = new CodeFile(
                $modulePath . "/config/" . ucfirst($this->moduleID) . "Asset.php", $this->render("assets.php")
        );

        return $files;
    }

}
