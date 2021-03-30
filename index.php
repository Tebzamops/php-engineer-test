<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            // implement the square class here
            $square = new Square();

            print $square->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here
            $rectangle = new Diamond();

            print $rectangle->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here
            $rectangle = new Rectangle();

            print $rectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            // Use the Httpful client to output the API results here.

            $endpoint = 'https://pokeapi.co/api/v2/pokemon/mewtwo';
            $response = \Httpful\Request::get($endpoint)
                          ->send();
  
            $data = json_decode($response,true);
  
            echo '<h4>Pokemon name: ' . ucwords($data['name']) . '</h4>';
            echo '<h4>Pokemon ability: ' . ucwords($data['abilities'][0]['ability']['name']) . '</h4>';
            echo '<h4>Pokemon type: ' . ucwords($data['types'][0]['type']['name']) . '</h4>';
  
        ?>

        <h2>Recommendations</h2>

        <p><!-- Let us know how we can improve this test here -->
        It would be nice to give freedom to use other http clients like guzzlehttp.<br />
        While Httpful client is easy to use, it has limited documentation.
        </p>

    </body>
</html>
