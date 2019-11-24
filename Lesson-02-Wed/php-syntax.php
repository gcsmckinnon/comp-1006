<!DOCTYPE html>
<html>

<head>
  <title>PHP Syntax</title>
</head>

<body>
  <header>
    <h1>PHP Syntax</h1>
  </header>

  <section>
    <h2>PHP Tags (block & inline) & Commenting</h2>

    <?php
      // These are php tags
      // This is a second line
      /*
        These are 
        multiline
        comments
      */
    ?>

    <!-- Block Tags -->
  </section>

  <section>
    <h2>Variables & Data Types</h2>

    <?php
      $string = "My String";
      $bool = true;
      $bool = false;
      $integer = 10;
      $decimal = 10.5;
      $my_arr = [
        "key1" => "value1",
        "key2" => "value2",
        "key3" => "value3"
      ];
      $my_func = function () {
        echo "Hello World";
      };
      $my_func();

      $_this_is_valid = "Yep";
      $thisIsValid = "Yep";
      // $this is not valid = "nope";
      // $this-is-not-valid = "nope";
      // $255_not_valid = "nope";
      // $this = "reserved";
      $self = "reserved";
      $$this_is_valid = "yep";

      $name = "shaun";
      $$name = "McKinnon";
      echo $shaun;
    ?>
  </section>

  <section>
    <h2>Printing to the Screen (block & inline), Quotes, Concatenation & Interpolation</h2>

    <?php
      echo "Hello World";
    ?>
    <?php echo "Hello World"; ?>
    <?= "Hello World" ?>

    <?php
      $name = "Shaun McKinnon";
      echo "<br>";
      echo "Hello {$name}";
      echo "<br>";
      echo "He's big \$dollar";
      echo 'He\'s 40';
      echo "<br>";
      echo "Hello " . $name . ".";
    ?>
    <br>
    <?php
      $arr = [1, 2, 3, 4];
      var_dump($arr);
      echo "<br>";
      var_export($arr);
    ?>
  </section>

  <section>
    <h2>Decision Structure</h2>

    <?php
      if (5 > 4) {
        echo "Yep";
      } else {
        echo "We are Dr. Who";
      }

      $name = "Shaun";
      switch ($name) {
        case "Sarah":
          echo "Hey Sarah";
          break;
        case "Shaun":
          echo "Hey Shaun";
          break;
        default:
          echo "Hey You";
          break;
      }

      switch (true) {
        case (5 > 4):
          echo "Yep";
          break;
      }
    ?>
  </section>

  <section>
    <h2>Arrays & Hashes</h2>
  </section>

  <section>
    <h2>Repetition Structures</h2>
  </section>

  <section>
    <h2>Functions</h2>
  </section>

  <section>
    <h2>Common PHP Functions</h2>
  </section>

  <section>
    <h2>Objects (structs)</h2>
  </section>

  <section>
    <h2>Introducing Classes</h2>
  </section>
</body>

</html>