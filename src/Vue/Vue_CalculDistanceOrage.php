<?php

namespace App\Vue;

class Vue_CalculDistanceOrage extends \App\Utilitaire\Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Vous êtes dans le contexte A!</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Page calcul de la distancce d'un orage
    <form action='index.php' method='post'>
            <div>
            <label for='secondes'>Entrez le nombre de secondes</label>
            <input name='secondes' type='number' min='1'>
            </div>
            <button type='submit' name='action' value='CalculDistanceOrage'>
                Calculer
            </button>
    </form>
    
     
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}