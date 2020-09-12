<?php 

// PHP - Random Quote Generator

// Create the array of quotes

$quotes = array(
   [
       "quote" => "To be happy, we must not be too concerned with others.",
       "source" => "Albert Camus",
       "tag" => "happiness"
   ],
   [
       "quote" => "Believe you can and you’re halfway there.",
       "source" => "Theodore Roosevelt",
       "tag" => "Inspiring"
   ],
   [
       "quote" => "Tomorrow is another day",
       "source" => "Margaret Mitchells's",
       "citation" => "Gone with the wind",
       "year" => "2020",
       "tag" => "Book"
   ],
   [
       "quote" => "If you tell the truth you don’t have to remember anything.",
       "source" => "Mark Twain",
       "tag" => "Honesty"
   ],
   [
       "quote" => "As happy as larry",
       "source" => "G. L. Meredith",
       "year" => "1875",
       "tag" => "australian"
   ],
   [
       "quote" => "A truly refined mind will seem to be ignorant of the existence of anything that is not perfectly proper, placid, and pleasant.",
       "source" => "Charles Dickens"
   ],
   [
       "quote" => "You are here for but an instant, and you mustn't take yourself too seriously",
       "source" => "Edgar Rice Burroughs",
       "citation" => "The land that time forgot",
       "tag" => "wisdom"
   ],
   [
       "quote" => "Every man should lose a battle in his youth, so he does not lose a war when he is old",
       "source" => "George R. R. Martin",
       "citation" => "A Feast for Crows",
       "tag" => "life"
   ],
);


// This function generates a random rgba color
function getRandomColor() {
   // generate 3 different sets of random numbers between 0 and 255
   $ranNum1 = rand(0,255);
   $ranNum2 = rand(0,255);
   $ranNum3 = rand(0,255);
   // Use the random numbers to set the RGB colors
   $color = "rgb($ranNum1, $ranNum2, $ranNum3)";
   return $color;
}

// This function will take an array as an argument and return a random array item from the array.
function getRandomQuote($arr) {
   $randomNumber = rand(0,7); // generate random number
   $theQuote = $arr[$randomNumber]; // use the random number as an index to get the array item
   return $theQuote;

}


// This function calls the getRandomQuote function and then builds the HTML using the array items
function printQuote() {
   global $quotes;
   // call the getRandomQuote function
   $getQuote = getRandomQuote($quotes);
   $quotesHTML = "";
   $quotesHTML = "<p class='quote'>" . $getQuote['quote'] . "</p>";
   $quotesHTML = $quotesHTML . "<p class='source'>". $getQuote['source'];
   // If the citation key exists in the array
   if (array_key_exists("citation", $getQuote)) {
      $quotesHTML = $quotesHTML . "<span class='citation'>" . $getQuote['citation'] . "</span>";
   }
   // If the year key exists in the array
   if (array_key_exists("year", $getQuote)) {
      $quotesHTML = $quotesHTML . "<span class='citation'>" . $getQuote['year'] . "</span>";
   }
   $quotesHTML = $quotesHTML . "</p>";
   // If the tag key exists in the array
   if (array_key_exists("tag", $getQuote)) {
      $quotesHTML = $quotesHTML . "<p><span class='tag'>Tag: <em>" . $getQuote['tag'] . "</em></span>";
   }
   $quotesHTML = $quotesHTML . "</p>";

   return $quotesHTML;
}

?>