<?php
class Livro{
    public string $titulo ;
    public string $autor ;
    public int $paginas ;
    public string $anoPubli ;

    public function __construct($valor1, $valor2, $valor3, $valor4 = 'Desconhecido'){
        $this->titulo = $valor1;
        $this->autor = $valor2;
        $this->paginas = $valor3;
        $this->anoPubli = $valor4;
    }
    public function exibirText(){
        echo "Titulo: " . $this->titulo .
        "<br>Autor: " . $this->autor .
        "<br>Páginas: " . $this->paginas .
        "<br>Ano da Publicação: " . $this->anoPubli. '<br>'. '<br>';

    }
}

$livro1 = new Livro('1984', 'George Orwell', 233);

$livro1->exibirText();

$livro2 = new Livro('Dom Casmurro', 'Machado de Assis', 256, '1899');

$livro2->exibirText();
?>