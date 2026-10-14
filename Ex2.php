<?php
class Media{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }

    public function calcularMedia(){
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$Media = new Media('Marcos', 10, 8);

echo "<pre>";
print_r($Media);
echo "</pre>";
?>