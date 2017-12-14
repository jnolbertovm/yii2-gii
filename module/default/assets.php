<?php
/**
 * This is the template for generating a controller class within a module.
 */

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\module\Generator */
$className = $generator->moduleClass;
$pos = strrpos($className, '\\');
$ns = ltrim(substr($className, 0, $pos), '\\');

echo "<?php\n";
?>

namespace <?= str_replace(["backend","src"], "app", $ns)."\\config" ?>;

class <?= ucfirst($generator->moduleID)?>Asset
{
    public $js      = [];
    public $css     = [];
    public $depends = [];

    /**
     *
     * @var type 
     */
    public $controller = [
        "default" => [
            "js"      => [],
            "css"     => [],
            "depends" => [],
        ]
    ];
    /**
     *
     * @var type 
     */
    public $action     = [
        "default.index" => [
            "js"      => [],
            "css"     => [],
            "depends" => [],
        ]
    ];
}
