<?php
$continents = [
    'Africa' => ['Mammuthus columbi', 'Antellidae', 'Gorilla',],
	'Antarctica' => ['Rossii', 'Orcinus orca', 'Spheniscidae'],
	'Australia' => ['Ornithorhynchus anatinus', 'Thylacinus cynocephalus', 'Tachyglossus aculeatus'],
    'Eurasia' => ['Panthera tigris', 'Hedgehog', 'Ussurian tiger'],
    'North America' => ['Grizzly', 'Scalopus aquaticus', 'Alligator'],
	'South America' => ['Wiedii', 'Eunectes murinus', 'Phyllotis darwini'],
];

foreach ($continents as $territory => $habitats) {
    foreach ($habitats as $animals) {
        if (str_word_count($animals)==2) {
            $beast[$territory][] = $animals;
            $counts = explode(' ', $animals);
            $first_name[$territory][] = $counts[0];
            $second_name[] = $counts[1];
        }
    }
}
shuffle($second_name);
$i = 0;
foreach ($first_name as $territory => $habitats) {
    foreach ($habitats as $animals) {
        $fantasy_animals[$territory][] = $animals.' '.$second_name[$i];
        $i++;
    }
}
?>

<!Doctype HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание №2</title>
	<style>
        h1 { 
		  color: #0000FF; 
	    }
	   	h2 { 
		  color: #800080; 
		}
		p {
			font-size: 110%;
		}
	</style>
</head>
<body>
<?php
    echo '<h1>Массив животных</h1>';
    foreach ($continents as $territory => $habitats) {
        $animals = implode(', ', $habitats);
        echo "<h2>$territory</h2><p>$animals</p>";
    }
    echo '<hr>';
    echo '<h1>Массив выдуманных животных</h1>';
        foreach ($fantasy_animals as $territory => $habitats) {
        $new_animals = implode(', ', $habitats);
        echo "<h2>$territory</h2><p>$new_animals</p>";
    }
?>
</body>
</html>