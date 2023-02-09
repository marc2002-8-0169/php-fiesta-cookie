<?php
    $minions = array(

    array(1,"Balbasaur","Grass","Poison","Overgrow",45,49,49),

    array(2,"Ivysaur","Grass","Poison","Overgrow",45,49,49),

    array(3,"Venusaur","Grass","Poison","Overgrow",45,49,49),

    array(4,"Charmander","Fire","N/A","Blaze",39,52,43),

    array(5,"Charmeleon","Fire","N/A","Blaze",58,64,58),

    array(6,"Charizard","Fire","Flying","Blaze",78,84,78),

    array(7,"Squirtle","Water","N/A","Torrent",44,48,65),

    array(8,"Wartortle","Water","N/A","Torrent",59,63,80),

    array(9,"Blastoise","Water","N/A","Torrent",79,83,100),

    array(10,"Caterpie","Bug","N/A","Shield Dust",50,20,55)
);
echo "<style type=\"text/css\">
#des{
    background-color: lightgoldenrodyellow;
    padding: 100px;
    width: 25%;
    border: 5px black solid;
    margin-left: 100px;
    }

#title{
    text-align: center;
}

#limit{
    text-align: center;
    padding-left: -10px;
    font-size: 20px;
}

#names{
    padding-left: 100px;
    font-size: 25px;
}

</style>";
echo "<div id=des>";
echo "<div id=title><h2>Qualified Defense Pokemons:<h2></div>";


    function pokemon_defense($arrayname, $limit_number){
                for ($r=0;$r < count($arrayname); $r++){
                    for ($c=0;$c<count($arrayname[$r]); $c++){

                        
                        echo "<div id=names>";
                        if($arrayname[$r][$c]>=$limit_number){
                            if($c==7){
                                
                                echo $arrayname[$r][$c-6];  
                            }
                        }
                        echo "</div>";
                    }
                }
                    echo "<div id=limit><p>Limit Number: ";
                        echo $limit_number;
                    echo "</p></div>";
                    echo "</div>";
            }
            pokemon_defense($minions,28);
?>