<?php
require 'vendor/autoload.php';

    EasyRdf\RdfNamespace::set("dc", 'https://purl.org/dc/elements/1.1/');
    EasyRdf\RdfNamespace::set("rdf", 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf\RdfNamespace::set("foaf", 'http://xmlns.com/foaf/0.1/');
    EasyRdf\RdfNamespace::set("dbo", 'http://dbpedia.org/ontology/');
    EasyRdf\RdfNamespace::set("dbr", 'http://dbpedia.org/resource/');

	$newrdf = new \EasyRdf\Graph("https://marghifari.github.io/F1-drivers-2020/RDF/drivers.rdf");
	$newrdf->load();

	$allSubjek = $newrdf->resourcesMatching('foaf:firstName'); 
    
	$i=1;

    foreach($allSubjek as $subjek){
		$firstname[$i] = $newrdf->get($subjek, 'foaf:firstName');
		$lastname[$i] = $newrdf->get($subjek, 'foaf:lastName');
		$color[$i] = $newrdf->get($subjek, 'dc:color');
		$image1[$i] = $newrdf->get($subjek, 'foaf:Image');
		$image2[$i] = $newrdf->get($subjek, 'dc:Image');
        $idNumber[$i] = $newrdf->get($subjek, 'dbo:idNumber');
        $logo[$i] = $newrdf->get($subjek, 'foaf:logo');
        $team[$i] = $newrdf->get($subjek, 'dc:memberOf');
        $nationality[$i] = $newrdf->get($subjek, 'dbo:nationality');
        $flag[$i] = $newrdf->get($subjek, 'dbr:flag');
        $podium[$i] = $newrdf->get($subjek, 'dbo:podium');
        $points[$i] = $newrdf->get($subjek, 'dbo:matchPoint');
        $totalPoints[$i] = $newrdf->get($subjek, 'dbo:fullScore');
        $birthDate[$i] = $newrdf->get($subjek, 'dbo:birthDate');
        $birthPlace[$i] = $newrdf->get($subjek, 'dbo:birthPlace');
        $bio[$i] = $newrdf->get($subjek, 'dc:description');
        $i++;
	}

?>