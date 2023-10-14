welcome! <?php echo htmlspecialchars($_POST['name'] ?? "DefaultUser"); ?> <br/>
you <?php echo (int)($_POST['age'] ?? "18"); ?> years old.
<?php
class SimpleClass 
{
    public $var = "default value";
    public function displayVar() {
        echo "<br/>" . $this->var;
    }
}

$s1 = new SimpleClass();
$s1->displayVar();
echo "<br/> created at " . (new DateTime())->format("Y-m-d")
?>