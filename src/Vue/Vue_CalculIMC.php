<?php

namespace App\Vue;

class Vue_CalculIMC extends \App\Utilitaire\Vue_Composant
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
    Page calcul de votre IMC
    <form action='index.php' method='post'>
            <div>
            <label for='taille'>Entrez votre taille en m</label>
            <input name='taille' type='number' step='0.01' min='1'>
            </div>
            <div>
            <label for='poids'>Entrez votre poids en kg</label>
            <input name='poids' type='number' min='1'>
            </div>
            <button type='submit' name='action' value='CalculIMC'>
                Calculer
            </button>
    </form>
    
     
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}