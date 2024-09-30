<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Page2 extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Café : J'aime !</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Bienvenue sur le site de la société Café !
    <form action='index.php' method='post'>
            <input type='hidden' name='action' value='page 3'>
            <button type='submit' id='submit' name='action' value='page 3' >
                Aller à la page 3
            </button>
    </form>
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}