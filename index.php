<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /**
     * DEFINIRE CLASSE Film:
     *      Attributi:
     *      - titolo
     *      - sottotiolo
     *      - regista
     * 
     *      Metodi:
     *      - costruttore che accetta titolo
     *      - getFullTitle: 
     *          Se sottotitolo presente:
     *            restituisce "titolo: sottotitolo" 
     *          Se sottotiolo assente:
     *            restituisce "titolo" 
     *      - __toString: 
     *          Se regista presente:
     *            restituisce "fullTitle | regista"
     *          Se regista assente:
     *            restituisce "fullTitle | ???"
     * 
     * UTILIZZO OGGETTI Film:
     * 
     *      Generare 3 istanze della classe Film:
     *      - uno con solo il titolo
     *      - uno con titolo e sottotitolo
     *      - uno con titolo, sottotiolo e regista
     * 
     *      Stampare tutti gli oggetti tramite toString (implicito)
     * 
     *  RISULTATO ATTESO:
     * 
     *      Matrix | ???
     *      Fantozzi 2: il ritorno di fantozzi | ???
     *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
     */

    // OGGETTO
    class Film
    {
        // ATTRIBUTI
        public $title;
        public $subhead;
        public $director;

        // METODO construct
        public function __construct($title, $subhead)
        {

            $this->title = $title;
            $this->subhead = $subhead;
        }
        // METODO FUNZIONE
        public function getFullTitle()
        {
            if (!$this->subhead) {
                return $this->title;
            } else {
                return $this->title . ": " . $this->subhead;
            }
        }

        // METODO toString
        public function __toString()
        {

            if (!$this->director) {
                return "";
            } else {
                return "<em>" . " | Directed by:" . $this->director . "<em>";
            }
        }
    }


    // ISTANZE 
    $f1 = new Film("Matrix", "");
    $f2 = new Film("Fantozzi 2", "Il ritorno di Fantozzi");
    $f3 = new Film("Peter Pan", "il ritorno all'isola che non c'e'");

    $f1->director = "";
    $f2->director = "";
    $f3->director = "Robin Budd";


    // nome complleto studente
    echo "Film 1: " . " " . $f1->getFullTitle() . $f1 . "<br>";
    echo "Film 2: " . " " . $f2->getFullTitle() . $f2 . "<br>";
    echo "Film 3: "  . " " . $f3->getFullTitle() . $f3 . "<br>";

    ?>

</body>

</html>