<?php
$definitions = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcoholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];
$authors = [
    "Ashley",
    "Brittany",
    "Candace",
    "Devon",
    "Elizabeth",
    "Felecia",
    "Georgia"
];

if (array_key_exists('all', $_GET))
    if ($_GET['all'] == true) {
        // XML Display Page
        $xml = new SimpleXMLElement('<definitions/>');

        foreach ($definitions as $keyword => $desc)
            $xml
                ->addChild(ucfirst($keyword), $desc)
                ->addAttribute('author', $authors[rand (0, count($authors) - 1)]);

        header("Content-Type: text/xml");
        print $xml->asXML();
    }

if (array_key_exists('q', $_GET)) {
    // Default Display Page
    $query = $_GET['q'];
    print "<h3>" . strtoupper($query) . "</h3>";
    print "<p>" . $definitions[$query] . "</p>";
}
