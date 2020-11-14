<html>
    <head>
    <title>Rust Raid Caclculator</title>
    </head>
    <body>
        <?php
            session_start();
            #craftGP

            $total_explo_sheet_door = 63;
            $total_explo_armored_door = 200;
            $total_explo_garage_door = 150;


            $total_explo_craftable_for_doors = 32;
            $total_explo_craftable_for_garage_door = 75;

            $total_c4_needed_armored_door_stone_wall = 2;
            $total_c4_needed_sheet_metal_wall = 4;
            $total_c4_needed_sheet_armored_wall = 8;
            $total_explosives_for_c4 = 20;



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
            $input_num_garage_doors = $_POST['num_of_garage_doors'];
            $input_num_armored_doors = $_POST['num_of_armored_doors'];
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






        echo "<form method='post' action=''>";
          echo "<h1>Welcome to the Rust Raid Caclculator!</h1>";
          echo "  <h2>Number of sheet metal doors</h2>";
          echo "<input type='text' name='num_of_sheet_doors'><br><br>";



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





          #garage door calculations

          $total_ammo_needed_garage_door = $input_num_garage_doors * $total_explo_garage_door;
          $total_sulfer_needed_for_gp_garage_door = 2 * $sulferGP * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_charcoal_needed_for_gp_garage_door = 2 * $charcoal * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_metal_metal_garage_doors = $metalFrags * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_sulfer_for_ammo_garage = $sulferForCrafting * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_gunpowder_for_ammo_garage = $gunPowderForAmmo * $total_explo_craftable_for_garage_door * $input_num_garage_doors;



          echo "<h2>Number of sheet garage doors</h2>";
          echo "<input type='text' name='num_of_garage_doors'><br><br>";


          echo "For ", $input_num_garage_doors, " garage door(s):";
          echo "<br>";
          echo "<br>";
          echo "total ammo needed: ", $total_ammo_needed_garage_door;
          echo "<br>";
          echo "total sulfer for GP: ", $total_sulfer_needed_for_gp_garage_door;
          echo "<br>";
          echo "total charcoal for GP: ", $total_charcoal_needed_for_gp_garage_door;
          echo "<br>";
          echo "total metal frags: ", $total_metal_metal_garage_doors;
          echo "<br>";
          echo "total gun powder: ", $total_gunpowder_for_ammo_garage;
          echo "<br>";
          echo "total sulfer to craft ammo: ", $total_sulfer_for_ammo_garage;
          echo "<br>";
          echo "total sulfer total: ", $total_sulfer_needed_for_gp_garage_door + $total_sulfer_for_ammo_garage;


          #c4 calculations
          $total_c4_needed_armored_door = $total_c4_needed_armored_door_stone_wall * $input_num_armored_doors;

          $total_sulfer_needed_for_explosives = 2 * $sulferGP * $total_explosives_for_c4 * $input_num_armored_doors;
          $total_charcoal_needed_for_explosives = 100 * $total_explosives_for_c4 * $input_num_armored_doors;
          $total_metal_for_explosives = $metalFrags * 2 * $total_explosives_for_c4 * $input_num_armored_doors;
          $total_sulfer_for_c4 = 2 * $sulferForCrafting * $total_explosives_for_c4 * $input_num_armored_doors;
          $total_gunpowder_for_c4 = 2 * $gunPowderForExplosives * $total_explosives_for_c4 * $input_num_armored_doors;
          $total_explosives_needed = 2 * $total_explosives_for_c4 * $input_num_armored_doors;
          $total_tech_trash = 2 * $techTrash * $input_num_armored_doors;
          $total_cloth = 2 * $cloth * $input_num_armored_doors;

          echo "<h2>Number of armored doors</h2>";
          echo "<input type='text' name='num_of_armored_doors'><br><br>";

          echo "For ", $input_num_armored_doors, " armored doors:";
          echo "<br>";
          echo "<br>";
          echo "total c4 needed: ", $total_c4_needed_armored_door;
          echo "<br>";
          echo "total explosives needed: ", $total_explosives_needed;
          echo "<br>";
          echo "total sulfer for GP: ", $total_sulfer_needed_for_explosives;
          echo "<br>";
          echo "total charcoal for GP: ", $total_charcoal_needed_for_explosives;
          echo "<br>";
          echo "total metal frags: ", $total_metal_for_explosives;
          echo "<br>";
          echo "total gun powder: ", $total_gunpowder_for_c4;
          echo "<br>";
          echo "total sulfer to craft explosives: ", $total_sulfer_for_c4;
          echo "<br>";
          echo "total sulfer total: ", $total_sulfer_needed_for_explosives + $total_sulfer_for_c4;
          echo "<br>";
          echo "total techtrash: ", $total_tech_trash;
          echo "<br>";
          echo "total cloth: ", $total_cloth;



          $total_c4_needed_stone_wall = $total_c4_needed_armored_door_stone_wall * $input_num_stone_walls;

          $total_sulfer_needed_for_explosives = 4 * $sulferGP * $total_explosives_for_c4 * $input_num_stone_walls;
          $total_charcoal_needed_for_explosives = 100 * $total_explosives_for_c4 * $input_num_stone_walls;
          $total_metal_for_explosives = $metalFrags * 2 * $total_explosives_for_c4 * $input_num_stone_walls;
          $total_sulfer_for_c4 = 4 * $sulferForCrafting * $total_explosives_for_c4 * $input_num_stone_walls;
          $total_gunpowder_for_c4 = 2 * $gunPowderForExplosives * $total_explosives_for_c4 * $input_num_stone_walls;
          $total_explosives_needed = 2 * $total_explosives_for_c4 * $input_num_stone_walls;
          $total_tech_trash = 2 * $techTrash * $input_num_stone_walls;
          $total_cloth = 2 * $cloth * $input_num_stone_walls;

          echo "<h2>Number of stone walls</h2>";
          echo "<input type='text' name='num_of_stone_walls'><br><br>";

          echo "For ", $input_num_stone_walls, " stone walls:";
          echo "<br>";
          echo "<br>";
          echo "total c4 needed: ", $total_c4_needed_stone_wall;
          echo "<br>";
          echo "total explosives needed: ", $total_explosives_needed;
          echo "<br>";
          echo "total sulfer for GP: ", $total_sulfer_needed_for_explosives;
          echo "<br>";
          echo "total charcoal for GP: ", $total_charcoal_needed_for_explosives;
          echo "<br>";
          echo "total metal frags: ", $total_metal_for_explosives;
          echo "<br>";
          echo "total gun powder: ", $total_gunpowder_for_c4;
          echo "<br>";
          echo "total sulfer to craft explosives: ", $total_sulfer_for_c4;
          echo "<br>";
          echo "total sulfer total: ", $total_sulfer_needed_for_explosives + $total_sulfer_for_c4;
          echo "<br>";
          echo "total techtrash: ", $total_tech_trash;
          echo "<br>";
          echo "total cloth: ", $total_cloth;


          $total_c4_needed_stone_wall = $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;

          $total_sulfer_needed_for_explosives = 8 * $sulferGP * $total_explosives_for_c4 * $input_num_sheet_metal_walls;
          $total_charcoal_needed_for_explosives = 200 * $total_explosives_for_c4 * $input_num_sheet_metal_walls;
          $total_metal_for_explosives = $metalFrags * 4 * $total_explosives_for_c4 * $input_num_sheet_metal_walls;
          $total_sulfer_for_c4 = 8 * $sulferForCrafting * $total_explosives_for_c4 * $input_num_sheet_metal_walls;
          $total_gunpowder_for_c4 = 4 * $gunPowderForExplosives * $total_explosives_for_c4 * $input_num_sheet_metal_walls;
          $total_explosives_needed = 4 * $total_explosives_for_c4 * $input_num_sheet_metal_walls;
          $total_tech_trash = 4 * $techTrash * $input_num_sheet_metal_walls;
          $total_cloth = 4 * $cloth * $input_num_sheet_metal_walls;

          echo "<h2>Number of sheet metal walls</h2>";
          echo "<input type='text' name='num_of_sheet_metal_walls'><br><br>";

          echo "For ", $input_num_sheet_metal_walls, " sheet metal walls:";
          echo "<br>";
          echo "<br>";
          echo "total c4 needed: ", $total_c4_needed_stone_wall;
          echo "<br>";
          echo "total explosives needed: ", $total_explosives_needed;
          echo "<br>";
          echo "total sulfer for GP: ", $total_sulfer_needed_for_explosives;
          echo "<br>";
          echo "total charcoal for GP: ", $total_charcoal_needed_for_explosives;
          echo "<br>";
          echo "total metal frags: ", $total_metal_for_explosives;
          echo "<br>";
          echo "total gun powder: ", $total_gunpowder_for_c4;
          echo "<br>";
          echo "total sulfer to craft explosives: ", $total_sulfer_for_c4;
          echo "<br>";
          echo "total sulfer total: ", $total_sulfer_needed_for_explosives + $total_sulfer_for_c4;
          echo "<br>";
          echo "total techtrash: ", $total_tech_trash;
          echo "<br>";
          echo "total cloth: ", $total_cloth;



          $total_c4_needed_sheet_armored_wall = $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;

          $total_sulfer_needed_for_explosives = 16 * $sulferGP * $total_explosives_for_c4 * $input_num_armored_walls;
          $total_charcoal_needed_for_explosives = 400 * $total_explosives_for_c4 * $input_num_armored_walls;
          $total_metal_for_explosives = $metalFrags * 8 * $total_explosives_for_c4 * $input_num_armored_walls;
          $total_sulfer_for_c4 = 16 * $sulferForCrafting * $total_explosives_for_c4 * $input_num_armored_walls;
          $total_gunpowder_for_c4 = 8 * $gunPowderForExplosives * $total_explosives_for_c4 * $input_num_armored_walls;
          $total_explosives_needed = 8 * $total_explosives_for_c4 * $input_num_armored_walls;
          $total_tech_trash = 8 * $techTrash * $input_num_armored_walls;
          $total_cloth = 8 * $cloth * $input_num_armored_walls;


          echo "<h2>Number of armored walls</h2>";
          echo "<input type='text' name='num_of_armored_walls'><br><br>";


          echo "For ", $input_num_armored_walls, " armored walls:";
          echo "<br>";
          echo "<br>";
          echo "total c4 needed: ", $total_c4_needed_sheet_armored_wall;
          echo "<br>";
          echo "total explosives needed: ", $total_explosives_needed;
          echo "<br>";
          echo "total sulfer for GP: ", $total_sulfer_needed_for_explosives;
          echo "<br>";
          echo "total charcoal for GP: ", $total_charcoal_needed_for_explosives;
          echo "<br>";
          echo "total metal frags: ", $total_metal_for_explosives;
          echo "<br>";
          echo "total gun powder: ", $total_gunpowder_for_c4;
          echo "<br>";
          echo "total sulfer to craft explosives: ", $total_sulfer_for_c4;
          echo "<br>";
          echo "total sulfer total: ", $total_sulfer_needed_for_explosives + $total_sulfer_for_c4;
          echo "<br>";
          echo "total techtrash: ", $total_tech_trash;
          echo "<br>";
          echo "total cloth: ", $total_cloth;

          echo "<br>";
          echo "<br>";

          echo "<input type='submit'>";
        echo "</form>";


        ?>


    </body>
</html>
