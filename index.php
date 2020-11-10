<html>
    <head>
    <title>Rust Raid Caclculator</title>
    </head>
    <body>
        <?php
            session_start();
            #craftGP
            // $input_num_sheet_doors = "";
            // $input_num_armored_doors = "";
            // $input_num_stone_walls = "";
            // $input_num_sheet_metal_walls = "";
            // $input_num_armored_walls = "";

            $total_explo_sheet_door = 63;
            $total_explo_armored_door = 200;
            $total_explo_garage_door = 150;
            $total_explo_craftable_for_doors = 32;
            $total_explo_craftable_for_garage_door = 75;

            $sulferGP = 20;
            $charcoal = 30;

            #explosives
            $gunPowderForExplosives = 50;
            $lowGrade = 3;
            $sulferForCrafting = 10;
            $metalFrags = 10;

            #rockets
            #$gunPowder = 10;
            $pipes = 2;
            $explosives = 10;

            #c4
            #$gunPowder = 10;
            $cloth = 5;
            $techTrash = 2;

            #hv
            #$gunPowder = 10;
            #$pipes = 2;

            #explosiveAmmo
            $gunPowderForAmmo = 20;
            #$sulfer = 10;
            #$metalFrags = 10;

            #incendiaryRockets
            #$pipes = 2;
            $gunPowderForIncen = 250;
            $lowGradeForRockets = 250;
            $explosivesForIncen = 1;





            $input_num_sheet_doors = $_POST['num_of_sheet_doors'];
            $input_num_sheet_double_doors = $_POST['num_of_sheet_double_doors'];
            $input_num_garage_doors = $_POST['num_of_garage_doors'];
            $input_num_armored_doors = $_POST['num_of_armored_doors'];
            $input_num_armored_double_doors = $_POST['num_of_armored_double_doors'];
            $input_num_stone_walls = $_POST['num_of_stone_walls'];
            $input_num_sheet_metal_walls = $_POST['num_of_sheet_metal_walls'];
            $input_num_armored_walls = $_POST['num_of_armored_walls'];







            #sheet metal door calculations
            #bug: theres an extra round crafted, so minus one from from the userinput to get total rounds made

            $total_sulfer_needed_for_gp_metal_door = 2 * $sulferGP * $total_explo_craftable_for_doors * $input_num_sheet_doors;
            $total_charcoal_needed_for_gp_metal_door = 2 * $charcoal * $total_explo_craftable_for_doors * $input_num_sheet_doors;
            $total_metal_metal_doors = $metalFrags * $total_explo_craftable_for_doors * $input_num_sheet_doors;
            $total_sulfer_for_ammo = $sulferForCrafting * $total_explo_craftable_for_doors * $input_num_sheet_doors;
            $total_gunpowder_for_ammo = $gunPowderForAmmo * $total_explo_craftable_for_doors * $input_num_sheet_doors;
            $total_ammo_needed = $total_explo_sheet_door * $input_num_sheet_doors;

            echo "For ", $input_num_sheet_doors, " Sheet Metal doors:";
            echo "<br>";
            echo "<br>";
            echo "total ammo needed: ", $total_ammo_needed;
            echo "<br>";
            echo "total sulfer for GP: ", $total_sulfer_needed_for_gp_metal_door;
            echo "<br>";
            echo "total charcoal for GP: ", $total_charcoal_needed_for_gp_metal_door;
            echo "<br>";
            echo "total metal frags: ", $total_metal_metal_doors;
            echo "<br>";
            echo "total gun powder: ", $total_gunpowder_for_ammo;
            echo "<br>";
            echo "total sulfer to craft ammo: ", $total_sulfer_for_ammo;
            echo "<br>";
            echo "total sulfer total: ", $total_sulfer_for_ammo + $total_sulfer_needed_for_gp_metal_door;



        ?>




        <form method="post" action="">
          <h1>Welcome to the Rust Raid Caclculator!</h1>
          <h2>Number of sheet metal doors</h2>
          <input type="text" name="num_of_sheet_doors"><br><br>

          <h2>Number of sheet metal double doors</h2>
          <input type="text" name="num_of_sheet_double_doors"><br><br>

          <h2>Number of sheet garage doors</h2>
          <input type="text" name="num_of_garage_doors"><br><br>

          <h2>Number of sheet armored doors</h2>
          <input type="text" name="num_of_armored_doors"><br><br>

          <h2>Number of sheet armored double doors</h2>
          <input type="text" name="num_of_armored_double_doors"><br><br>

          <h2>Number of sheet stone walls</h2>
          <input type="text" name="num_of_stone_walls"><br><br>

          <h2>Number of sheet metal walls</h2>
          <input type="text" name="num_of_sheet_metal_walls"><br><br>

          <h2>Number of armored walls</h2>
          <input type="text" name="num_of_armored_walls"><br><br>
          <input type="submit">
        </form>

    </body>
</html>
