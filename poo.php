<?php
class Aprendiz
{
    //atributos
    private $nombre;
    private $programa;
    private $ficha;
    //metodos
    function saludar()
    {
        echo "El numero de mi ficha en el sena es   $this->ficha  <br>";
    }

    //METODOS SETTER
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setPrograma($programa)
    {
        $this->programa = $programa;
    }
    function setFicha($ficha)
    {
        $this->ficha = $ficha;
    }

    //METODOS GETTER

    function getNombre()
    {
        return $this->nombre;
    }
    function getPrograma()
    {
        return $this->programa;
    }
    function getFicha()
    {
        return $this->ficha;
    }
}





$ob1 = new Aprendiz();
$ob1->setNombre("brayan");
$ob1->setPrograma('ADSI');
$ob1->setFicha("2142345");

echo 'mi nombre :' . $ob1->getNombre() . 'estoy estudiando ' . $ob1->getPrograma();
echo '<br>';
$ob1->saludar();
