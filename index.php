<html>

<link rel="icon" type="image/png" href="pictures/favicon.jpg"/>

<script>
  function show1() {
      document.getElementById("table1").style.display="none";
      document.getElementById("table2").style.display="block";
}
function show2() {
    document.getElementById("table2").style.display="none";
    document.getElementById("table1").style.display="block";
}



</script>



<style>

/* #table1 {
  display: none;

} */

body {
 background-image: url('pictures/rust.png');
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
}

button {
  align: 'center';
}


td, th {
    color: #fff;
    text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
}
</style>


    <head>
    <title>Rust Raid Calculator</title>
    <h1>Welcome to the Rust Raid Caclculator!</h1>
    <h2>By Bh0WdY</h2>
    </head>
    <body>
        <?php
            session_start();
            #craftGP

            $total_explo_sheet_door = 63;
            $total_explo_garage_door = 150;
            $total_explo_armored_door = 334;

            $total_explo_stone_wall = 222;
            $total_explo_sheet_wall = 399;
            $total_explo_armor_wall = 800;


            $total_explo_craftable_for_sheet_doors = 32;
            $total_explo_craftable_for_garage_door = 75;
            $total_explo_craftable_for_armor_door = 167;

            $total_explo_craftable_for_stone_walls = 111;
            $total_explo_craftable_for_sheet_walls = 200;
            $total_explo_craftable_for_armor_walls = 400;


            $total_rockets_sheet_door = 2;
            $total_rockets_garage_door = 3;
            $total_rockets_armored_door = 4;

            $total_rockets_stone_wall = 4;
            $total_rockets_sheet_wall = 8;
            $total_rockets_armored_wall = 15;


            $total_c4_needed_sheet_door = 1;
            $total_c4_needed_garage_door = 2;
            $total_c4_needed_armored_door = 2;

            $total_c4_needed_stone_wall = 2;
            $total_c4_needed_sheet_metal_wall = 4;
            $total_c4_needed_sheet_armored_wall = 8;

            $total_explosives_for_c4 = 20;





            $input_num_sheet_doors = $_POST['num_of_sheet_doors'];
            $input_num_garage_doors = $_POST['num_of_garage_doors'];
            $input_num_armored_doors = $_POST['num_of_armored_doors'];
            $input_num_stone_walls = $_POST['num_of_stone_walls'];
            $input_num_sheet_metal_walls = $_POST['num_of_sheet_metal_walls'];
            $input_num_armored_walls = $_POST['num_of_armored_walls'];

            $input_num_explosive_ammo = $_POST['num_of_explosive_ammo'];
            $input_num_of_rockets = $_POST['num_of_rockets'];
            $input_num_of_c4 = $_POST['num_of_c4'];


        echo "<div align='center'>";

            #add a page to calc by resources
            echo "<button onclick='show2()'>By Walls/Doors</button>";
            echo "<button onclick='show1()'>By Materials</button>";
        echo "</div>";


        echo "<div id='table1'>";

        echo "<form method='post' action='' id='form1'>";

          echo "<table align='center' cellpadding='20' style=100%>";
          echo "<tr>";

            echo "<td>";

              echo "<h3>Sheet metal doors</h3>";
              echo "<input type='text' name='num_of_sheet_doors'><br><br>";

            echo "</td>";

            echo "<td>";

              echo "<h3>Garage doors</h3>";
              echo "<input type='text' name='num_of_garage_doors'><br><br>";

            echo "</td>";

            echo "<td>";

              echo "<h3>Armored doors</h3>";
              echo "<input type='text' name='num_of_armored_doors'><br><br>";

            echo "</td>";

          echo "</tr>";

          echo "<tr>";

            echo "<td>";

              echo "<h3>Stone walls</h3>";
              echo "<input type='text' name='num_of_stone_walls'><br><br>";

            echo "</td>";

            echo "<td>";

              echo "<h3>Sheet metal walls</h3>";
              echo "<input type='text' name='num_of_sheet_metal_walls'><br><br>";

            echo "</td>";

            echo "<td>";

              echo "<h3>Armored walls</h3>";
              echo "<input type='text' name='num_of_armored_walls'><br><br>";

            echo "</td>";


          echo "</tr>";

        echo "</table>";


        echo "<div style='text-align:center;'>";
        echo "<input type='submit' onclick='show1()' form='form1' value='Caclculate'>";

        echo "</div>";

        echo "</form>";

          echo "<table align='center' cellpadding='20' style=100%>";
          echo "<tr>";

            echo "<th></th>";
            echo "<th>Explosive Ammo</th>";
            echo "<th>Rockets</th>";
            echo "<th>C4</th>";

          echo "</tr>";

          echo "<tr>";
            echo "<td>Sheet Metal Doors/ ladder hatches</td>";

            #sheet metal door calculations
            #bug: theres an extra round crafted, so minus one from from the userinput to get total rounds made

            $total_sulfer_needed_for_gp_metal_door = 2 * 20 * $total_explo_craftable_for_sheet_doors * $input_num_sheet_doors;
            $total_charcoal_needed_for_gp_metal_door = 2 * 30 * $total_explo_craftable_for_sheet_doors * $input_num_sheet_doors;
            $total_metal_metal_doors = 10 * $total_explo_craftable_for_sheet_doors * $input_num_sheet_doors;
            $total_sulfer_for_ammo_metal_door = 10 * $total_explo_craftable_for_sheet_doors * $input_num_sheet_doors;
            $total_gunpowder_for_ammo_metal_door = 20 * $total_explo_craftable_for_sheet_doors * $input_num_sheet_doors;
            $total_ammo_needed_for_sheet_door = $total_explo_sheet_door * $input_num_sheet_doors;

            echo "<td>";

              echo "Explosive Ammo needed: ", $total_ammo_needed_for_sheet_door;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_metal_door;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_gp_metal_door;
              echo "<br>";
              echo "Metal frags: ", $total_metal_metal_doors;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_ammo_metal_door;
              echo "<br>";
              echo "total sulfer to craft ammo: ", $total_sulfer_for_ammo_metal_door;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_needed_for_gp_metal_door + $total_sulfer_for_ammo_metal_door;

            echo "</td>";


            $total_rockets_sheet_door = 2 * $input_num_sheet_doors;

            $total_sulfer_for_gp_explosives_metal_door = 20 * 5 * 20 * $input_num_sheet_doors;
            $total_charcoal_needed_for_explosives_metal_door = 5 * 30 * 20 * $input_num_sheet_doors;

            $total_metal_for_explosives_metal_door = 10  * 20 * $input_num_sheet_doors;
            $total_gunpowder_for_rockets_metal_door = 150 * 20 * $input_num_sheet_doors;
            $total_sulfer_to_craft_rockets_metal_door = 20 * 15 * $total_rockets_sheet_door * $input_num_sheet_doors;
            $total_lowgrade_explosives_metal_door = 3 * 20 * $input_num_sheet_doors;

            $total_pipes_metal_door = 2 * 2 * $input_num_sheet_doors;

            $total_charcoal_to_craft_rockets_metal_door = 30 * 15 * $total_rockets_sheet_door * $input_num_sheet_doors;
            $total_explosives_needed_metal_door = 20 * $input_num_sheet_doors;

            echo "<td>";

              echo "Rockets needed: ", $total_rockets_sheet_door;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_metal_door;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_for_gp_explosives_metal_door;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_metal_door;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_metal_door;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_explosives_metal_door;
              echo "<br>";
              echo "Pipes: ", $total_pipes_metal_door;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_rockets_metal_door;
              echo "<br>";
              echo "Charcoal for rockets: ", $total_charcoal_to_craft_rockets_metal_door;
              echo "<br>";
              echo "Sulfer for rockets: ", $total_sulfer_to_craft_rockets_metal_door;
              echo "<br>";
              echo "Charcoal total: ", $total_charcoal_needed_for_explosives_metal_door + $total_charcoal_to_craft_rockets_metal_door;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_to_craft_rockets_metal_door + $total_sulfer_for_gp_explosives_metal_door;

            echo "</td>";



            #c4 calculations for sheet metal door
            $total_c4_needed_metal_door = $total_c4_needed_sheet_door * $total_c4_needed_sheet_door * $input_num_sheet_doors;
            $total_explosives_needed_metal_door = $total_explosives_for_c4  * $total_c4_needed_sheet_door * $input_num_sheet_doors;

            $total_sulfer_needed_for_explosives_metal_door = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_door * $input_num_sheet_doors;
            $total_sulfer_needed_for_gp_metal_door = 20 * 5 * $total_explosives_for_c4 * $total_c4_needed_sheet_door * $input_num_sheet_doors;
            $total_charcoal_needed_for_explosives_metal_door = 30 * 5 * $total_c4_needed_sheet_door * $total_explosives_for_c4 * $input_num_sheet_doors;
            $total_metal_for_explosives_sheet_door_metal_door = 10 * $total_c4_needed_sheet_door * $total_explosives_for_c4 * $input_num_sheet_doors;
            $total_sulfer_for_c4_metal_door = 10 * $total_c4_needed_sheet_door * $total_explosives_for_c4 * $input_num_sheet_doors;
            $total_gunpowder_for_c4_metal_door = 50 * $total_c4_needed_sheet_door * $total_explosives_for_c4 * $input_num_sheet_doors;
            $total_tech_trash_metal_door =  2 * $total_c4_needed_sheet_door * $total_c4_needed_sheet_door * $input_num_sheet_doors;
            $total_cloth_metal_door = 5 * $total_c4_needed_sheet_door * $total_c4_needed_sheet_door * $input_num_sheet_doors;
            $total_lowgrade_metal_door = 3 * $total_c4_needed_sheet_door * $total_explosives_for_c4 * $input_num_sheet_doors;


            echo "<td>";

              echo "C4 needed: ", $total_c4_needed_metal_door;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_metal_door;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_metal_door;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_metal_door;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_c4_metal_door;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_sheet_door_metal_door;
              echo "<br>";
              echo "Sulfer for Explosives: ", $total_sulfer_for_c4_metal_door;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_metal_door;
              echo "<br>";
              echo "Cloth: ", $total_cloth_metal_door;
              echo "<br>";
              echo "Tech trash: ", $total_tech_trash_metal_door;
              echo "<br>";
              echo "total Sulfer: ", $total_sulfer_needed_for_gp_metal_door + $total_sulfer_for_c4_metal_door;

            echo "</td>";

          echo "</tr>";


          echo "<tr>";

          echo "<td>Garage Doors</td>";

          echo "<td>";

          $total_sulfer_needed_for_gp_garage_door = 2 * 20 * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_charcoal_needed_for_gp_garage_door = 2 * 30 * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_metal_garage_doors = 10 * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_sulfer_for_garage_door_ammo = 10 * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_gunpowder_for_garage_door_ammo = 20 * $total_explo_craftable_for_garage_door * $input_num_garage_doors;
          $total_ammo_needed_for_garage_door = $total_explo_garage_door * $input_num_garage_doors;

            echo "Explosive Ammo needed: ", $total_ammo_needed_for_garage_door;
            echo "<br>";
            echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_garage_door;
            echo "<br>";
            echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_gp_garage_door;
            echo "<br>";
            echo "Metal frags: ", $total_metal_garage_doors;
            echo "<br>";
            echo "Gun powder: ", $total_gunpowder_for_garage_door_ammo;
            echo "<br>";
            echo "total sulfer to craft ammo: ", $total_sulfer_for_garage_door_ammo;
            echo "<br>";
            echo "Sulfer total: ", $total_sulfer_for_garage_door_ammo + $total_sulfer_needed_for_gp_garage_door;

          echo "</td>";

          $total_rockets_garage_door = 3 * $input_num_garage_doors;
          $total_sulfer_for_gp_explosives_garage_door = 20 * 5 * 30 * $input_num_garage_doors;
          $total_charcoal_needed_for_explosives_garage_door = 5 * 30 * 30 * $input_num_garage_doors;
          $total_metal_for_explosives_garage_door = 10  * 30 * $input_num_garage_doors;
          $total_gunpowder_for_rockets_garage_door = 150 * 30 * $input_num_garage_doors;
          $total_explosives_needed_garage_door = 30 * $input_num_garage_doors;
          $total_pipes_garage_door = 2 * 3 * $input_num_garage_doors;
          $total_lowgrade_explosives_garage_door = 3 * 30 * $input_num_garage_doors;
          $total_charcoal_to_craft_rockets_garage_door = 30 * 15 * $total_rockets_garage_door * $input_num_garage_doors;
          $total_explosives_needed_garage_door = 20 * $input_num_garage_doors;
          $total_charcoal_to_craft_rockets_garage_door = 30 * 15 * $total_rockets_garage_door * $input_num_garage_doors;
          $total_sulfer_to_craft_rockets_garage_door = 20 * 15 * $total_rockets_garage_door * $input_num_garage_doors;


          echo "<td>";

            echo "Rockets needed: ", $total_rockets_garage_door;
            echo "<br>";
            echo "Explosives needed: ", $total_explosives_needed_garage_door;
            echo "<br>";
            echo "Sulfer for Gun Powder: ", $total_sulfer_for_gp_explosives_garage_door;
            echo "<br>";
            echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_garage_door;
            echo "<br>";
            echo "Metal frags: ", $total_metal_for_explosives_garage_door;
            echo "<br>";
            echo "Low Grade: ", $total_lowgrade_explosives_garage_door;
            echo "<br>";
            echo "Pipes: ", $total_pipes_garage_door;
            echo "<br>";
            echo "Gun powder: ", $total_gunpowder_for_rockets_garage_door;
            echo "<br>";
            echo "Sulfer to craft rockets: ", $total_sulfer_to_craft_rockets_garage_door;
            echo "<br>";
            echo "Charcoal total: ", $total_charcoal_to_craft_rockets_garage_door + $total_charcoal_needed_for_explosives_garage_door;
            echo "<br>";
            echo "Sulfer total: ", $total_sulfer_for_gp_explosives_garage_door + $total_sulfer_to_craft_rockets_garage_door;

          echo "</td>";

          $total_c4_needed_garage_door = $total_c4_needed_sheet_door * $total_c4_needed_garage_door * $input_num_garage_doors;
          $total_explosives_needed_garage_door = $total_explosives_for_c4 * $total_c4_needed_garage_door * $input_num_garage_doors;

          $total_sulfer_needed_for_explosives_garage_door = 10 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;
          $total_sulfer_needed_for_gp_garage_door = 20 * 5 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;
          $total_charcoal_needed_for_explosives_garage_door = 30 * 5 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;
          $total_metal_for_explosives_sheet_door_garage_door = 10 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;
          $total_sulfer_for_c4_garage_door = 10 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;
          $total_gunpowder_for_c4_garage_door = 50 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;
          $total_tech_trash_garage_door =  2 * $total_c4_needed_garage_door * $total_c4_needed_sheet_door * $input_num_garage_doors;
          $total_cloth_garage_door = 5 * $total_c4_needed_garage_door * $total_c4_needed_sheet_door * $input_num_garage_doors;
          $total_lowgrade_garage_door = 3 * $total_c4_needed_garage_door * $total_explosives_for_c4 * $input_num_garage_doors;

          echo "<td>";

            echo "C4 needed: ", $total_c4_needed_garage_door;
            echo "<br>";
            echo "Explosives needed: ", $total_explosives_needed_garage_door;
            echo "<br>";
            echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_garage_door;
            echo "<br>";
            echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_garage_door;
            echo "<br>";
            echo "Gun powder: ", $total_gunpowder_for_c4_garage_door;
            echo "<br>";
            echo "Metal frags: ", $total_metal_for_explosives_sheet_door_garage_door;
            echo "<br>";
            echo "Sulfer for Explosives: ", $total_sulfer_for_c4_garage_door;
            echo "<br>";
            echo "Low Grade: ", $total_lowgrade_garage_door;
            echo "<br>";
            echo "Cloth: ", $total_cloth_garage_door;
            echo "<br>";
            echo "Tech trash: ", $total_tech_trash_garage_door;
            echo "<br>";
            echo "total Sulfer: ", $total_sulfer_needed_for_gp_garage_door + $total_sulfer_for_c4_garage_door;

          echo "</td>";

          echo "</tr>";


          $total_sulfer_needed_for_gp_armored_door = 2 * 20 * $total_explo_craftable_for_armor_door * $input_num_armored_doors;
          $total_charcoal_needed_for_gp_armored_door = 2 * 30 * $total_explo_craftable_for_armor_door * $input_num_armored_doors;
          $total_metal_armored_doors = 10 * $total_explo_craftable_for_armor_door * $input_num_armored_doors;
          $total_sulfer_for_armored_door_ammo = 10 * $total_explo_craftable_for_armor_door * $input_num_armored_doors;
          $total_gunpowder_for_armored_door_ammo = 20 * $total_explo_craftable_for_armor_door * $input_num_armored_doors;
          $total_ammo_needed_for_armored_door = $total_explo_armored_door * $input_num_armored_doors;


          echo "<tr>";

            echo "<td>Armored Doors</td>";

            echo "<td>";

              echo "Explosive Ammo needed: ", $total_ammo_needed_for_armored_door;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_armored_door;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_gp_armored_door;
              echo "<br>";
              echo "Metal frags: ", $total_metal_armored_doors;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_armored_door_ammo;
              echo "<br>";
              echo "total sulfer to craft ammo: ", $total_sulfer_for_armored_door_ammo;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_for_armored_door_ammo + $total_sulfer_needed_for_gp_armored_door;

            echo "</td>";


            $total_rockets_armored_door = 4 * $input_num_armored_doors;
            $total_sulfer_for_gp_explosives_armored_door = 20 * 5 * 40 * $input_num_armored_doors;
            $total_charcoal_needed_for_explosives_armored_door = 5 * 30 * 40 * $input_num_armored_doors;
            $total_metal_for_explosives_armored_door = 10  * 40 * $input_num_armored_doors;
            $total_gunpowder_for_rockets_armored_door = 150 * 40 * $input_num_armored_doors;
            $total_explosives_needed_armored_door = 40 * $input_num_armored_doors;
            $total_pipes_armored_door = 2 * 4 * $input_num_armored_doors;
            $total_lowgrade_explosives_armored_door = 3 * 40 * $input_num_armored_doors;
            $total_charcoal_to_craft_rockets_armored_door = 30 * 15 * $total_rockets_armored_door * $input_num_armored_doors;
            $total_sulfer_to_craft_rockets_armored_door = 20 * 15 * $total_rockets_armored_door * $input_num_armored_doors;

            echo "<td>";

              echo "Rockets needed: ", $total_rockets_armored_door;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_armored_door;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_for_gp_explosives_armored_door;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_armored_door;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_armored_door;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_explosives_armored_door;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_rockets_armored_door;
              echo "<br>";
              echo "Sulfer for rockets: ", $total_sulfer_to_craft_rockets_armored_door;
              echo "<br>";
              echo "Charcoal total: ", $total_charcoal_to_craft_rockets_armored_door + $total_charcoal_needed_for_explosives_armored_door;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_to_craft_rockets_armored_door + $total_sulfer_for_gp_explosives_armored_door;

            echo "</td>";

            #c4 calculations
            $total_c4_needed_armored_door = $total_c4_needed_sheet_door * $total_c4_needed_armored_door * $input_num_armored_doors;
            $total_explosives_needed_armored_door = $total_explosives_for_c4 * $total_c4_needed_armored_door * $input_num_armored_doors;

            $total_sulfer_needed_for_explosives_armored_door = 10 * $total_explosives_for_c4 * $total_c4_needed_armored_door * $input_num_armored_doors;
            $total_sulfer_needed_for_gp_armored_door = 20 * 5 * $total_c4_needed_armored_door * $total_explosives_for_c4 * $input_num_armored_doors;
            $total_charcoal_needed_for_explosives_armored_door = 30 * 5 * $total_c4_needed_armored_door * $total_explosives_for_c4 * $input_num_armored_doors;
            $total_metal_for_explosives_armored_door = 10 * $total_c4_needed_armored_door * $total_explosives_for_c4 * $input_num_armored_doors;
            $total_sulfer_for_c4_armored_door = 10 * $total_c4_needed_armored_door * $total_explosives_for_c4 * $input_num_armored_doors;
            $total_gunpowder_for_c4_armored_door = 50 * $total_c4_needed_armored_door * $total_explosives_for_c4 * $input_num_armored_doors;
            $total_tech_trash_armored_door =  2 * $total_c4_needed_armored_door * $total_c4_needed_sheet_door * $input_num_armored_doors;
            $total_cloth_armored_door = 5 * $total_c4_needed_armored_door * $total_c4_needed_sheet_door * $input_num_armored_doors;
            $total_lowgrade_armored_door = 3 * $total_c4_needed_armored_door * $total_explosives_for_c4 * $input_num_armored_doors;


            echo "<td>";

              echo "C4 needed: ", $total_c4_needed_armored_door;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_armored_door;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_armored_door;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_armored_door;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_c4_metal_door;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_armored_door;
              echo "<br>";
              echo "Sulfer for Explosives: ", $total_sulfer_needed_for_explosives_armored_door;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_armored_door;
              echo "<br>";
              echo "Cloth: ", $total_cloth_armored_door;
              echo "<br>";
              echo "Tech trash: ", $total_tech_trash_armored_door;
              echo "<br>";
              echo "total Sulfer: ", $total_sulfer_needed_for_gp_metal_door + $total_sulfer_needed_for_explosives_armored_door;

            echo "</td>";

          echo "</tr>";

          $total_sulfer_needed_for_gp_stone_walls = 2 * 20 * $total_explo_craftable_for_stone_walls * $input_num_stone_walls;
          $total_charcoal_needed_for_gp_stone_walls = 2 * 30 * $total_explo_craftable_for_stone_walls * $input_num_stone_walls;
          $total_metal_stone_walls = 10 * $total_explo_craftable_for_stone_walls * $input_num_stone_walls;
          $total_sulfer_for_stone_wall_ammo = 10 * $total_explo_craftable_for_stone_walls * $input_num_stone_walls;
          $total_gunpowder_for_stone_wall_ammo = 20 * $total_explo_craftable_for_stone_walls * $input_num_stone_walls;
          $total_ammo_needed_for_stone_wall = $total_explo_stone_wall * $input_num_stone_walls;

          echo "<tr>";

            echo "<td>Stone Walls</td>";

            echo "<td>";

              echo "Explosive Ammo needed: ", $total_ammo_needed_for_stone_wall;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_stone_walls;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_gp_stone_walls;
              echo "<br>";
              echo "Metal frags: ", $total_metal_stone_walls;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_stone_wall_ammo;
              echo "<br>";
              echo "total sulfer to craft ammo: ", $total_sulfer_for_stone_wall_ammo;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_for_stone_wall_ammo + $total_sulfer_needed_for_gp_stone_walls;

            echo "</td>";

            $total_rockets_stone_wall = 4 * $input_num_stone_walls;
            $total_sulfer_for_gp_explosives_stone_wall = 20 * 5 * 40 * $input_num_stone_walls;
            $total_charcoal_needed_for_explosives_stone_wall = 5 * 30 * 40 * $input_num_stone_walls;
            $total_metal_for_explosives_stone_wall = 10  * 40 * $input_num_stone_walls;
            $total_gunpowder_for_rockets_stone_wall = 150 * 40 * $input_num_stone_walls;
            $total_explosives_needed_stone_wall = 40 * $input_num_stone_walls;
            $total_pipes_stone_wall = 2 * 4 * $input_num_stone_walls;
            $total_lowgrade_explosives_stone_wall = 3 * 40 * $input_num_stone_walls;
            $total_charcoal_to_craft_rockets_stone_wall = 30 * 15 * $total_rockets_stone_wall * $input_num_stone_walls;
            $total_sulfer_to_craft_rockets_stone_wall = 20 * 15 * $total_rockets_stone_wall * $input_num_stone_walls;


            echo "<td>";

              echo "Rockets needed: ", $total_rockets_stone_wall;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_stone_wall;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_for_gp_explosives_stone_wall;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_stone_wall;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_stone_wall;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_explosives_stone_wall;
              echo "<br>";
              echo "Pipes: ", $total_pipes_stone_wall;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_rockets_metal_door;
              echo "<br>";
              echo "Sulfer for rockets: ", $total_sulfer_to_craft_rockets_stone_wall;
              echo "<br>";
              echo "Charcoal total: ", $total_charcoal_needed_for_explosives_stone_wall + $total_charcoal_to_craft_rockets_stone_wall;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_to_craft_rockets_stone_wall + $total_sulfer_for_gp_explosives_stone_wall;

            echo "</td>";

            $total_c4_needed_stone_wall = $total_c4_needed_sheet_door * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_explosives_needed_stone_wall = $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;

            $total_sulfer_needed_for_explosives_stone_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_sulfer_needed_for_gp_stone_wall = 20 * 5 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_charcoal_needed_for_explosives_stone_wall = 30 * 5 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_metal_for_explosives_sheet_door_stone_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_sulfer_for_c4_stone_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_gunpowder_for_c4_stone_wall = 50 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_tech_trash_stone_wall =  2 * $total_c4_needed_sheet_door * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_cloth_stone_wall = 5 * $total_c4_needed_sheet_door * $total_c4_needed_stone_wall * $input_num_stone_walls;
            $total_lowgrade_stone_wall = 3 * $total_explosives_for_c4 * $total_c4_needed_stone_wall * $input_num_stone_walls;


            echo "<td>";

              echo "C4 needed: ", $total_c4_needed_stone_wall;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_stone_wall;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_stone_wall;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_stone_wall;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_c4_stone_wall;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_sheet_door_stone_wall;
              echo "<br>";
              echo "Sulfer for Explosives: ", $total_sulfer_needed_for_explosives_stone_wall;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_stone_wall;
              echo "<br>";
              echo "Cloth: ", $total_cloth_stone_wall;
              echo "<br>";
              echo "Tech trash: ", $total_tech_trash_stone_wall;
              echo "<br>";
              echo "total Sulfer: ", $total_sulfer_needed_for_explosives_stone_wall + $total_sulfer_needed_for_gp_stone_wall;

            echo "</td>";

          echo "</tr>";


          echo "<tr>";

          echo "<td>Sheet Metal Walls</td>";


          $total_sulfer_needed_for_gp_sheet_walls = 2 * 20 * $total_explo_craftable_for_sheet_walls * $input_num_sheet_metal_walls;
          $total_charcoal_needed_for_gp_sheet_walls = 2 * 30 * $total_explo_craftable_for_sheet_walls * $input_num_sheet_metal_walls;
          $total_metal_sheet_walls = 10 * $total_explo_craftable_for_sheet_walls * $input_num_sheet_metal_walls;
          $total_sulfer_for_sheet_walls_ammo = 10 * $total_explo_craftable_for_sheet_walls * $input_num_sheet_metal_walls;
          $total_gunpowder_for_sheet_walls_ammo = 20 * $total_explo_craftable_for_sheet_walls * $input_num_sheet_metal_walls;
          $total_ammo_needed_for_sheet_walls = $total_explo_sheet_wall * $input_num_sheet_metal_walls;


          echo "<td>";

            echo "Explosive Ammo needed: ", $total_ammo_needed_for_sheet_walls;
            echo "<br>";
            echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_sheet_walls;
            echo "<br>";
            echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_gp_sheet_walls;
            echo "<br>";
            echo "Metal frags: ", $total_metal_sheet_walls;
            echo "<br>";
            echo "Gun powder: ", $total_gunpowder_for_sheet_walls_ammo;
            echo "<br>";
            echo "total sulfer to craft ammo: ", $total_sulfer_for_sheet_walls_ammo;
            echo "<br>";
            echo "Sulfer total: ", $total_sulfer_for_sheet_walls_ammo + $total_sulfer_needed_for_gp_sheet_walls;

          echo "</td>";

          $total_rockets_sheet_wall = 8 * $input_num_sheet_metal_walls;
          $total_sulfer_for_gp_explosives_sheet_wall = 20 * 5 * 80 * $input_num_sheet_metal_walls;
          $total_charcoal_needed_for_explosives_sheet_wall = 5 * 30 * 80 * $input_num_sheet_metal_walls;
          $total_metal_for_explosives_sheet_wall = 10  * 80 * $input_num_sheet_metal_walls;
          $total_sulfer_for_rockets_sheet_wall = 10 * 80 * $input_num_sheet_metal_walls;
          $total_gunpowder_for_rockets_sheet_wall = 150 * 80 * $input_num_sheet_metal_walls;
          $total_explosives_needed_sheet_wall = 80 * $input_num_sheet_metal_walls;
          $total_pipes_sheet_wall = 2 * 8 * $input_num_sheet_metal_walls;
          $total_lowgrade_explosives_sheet_wall = 3 * 80 * $input_num_sheet_metal_walls;
          $total_charcoal_to_craft_rockets_sheet_wall = 30 * 15 * $total_rockets_sheet_wall * $input_num_sheet_metal_walls;
          $total_sulfer_to_craft_rockets_sheet_wall = 20 * 15 * $total_rockets_sheet_wall * $input_num_sheet_metal_walls;

          echo "<td>";

            echo "Rockets needed: ", $total_rockets_sheet_wall;
            echo "<br>";
            echo "Explosives needed: ", $total_explosives_needed_sheet_wall;
            echo "<br>";
            echo "Sulfer for Gun Powder: ", $total_sulfer_for_gp_explosives_sheet_wall;
            echo "<br>";
            echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_sheet_wall;
            echo "<br>";
            echo "Metal frags: ", $total_metal_for_explosives_sheet_wall;
            echo "<br>";
            echo "Low Grade: ", $total_lowgrade_explosives_sheet_wall;
            echo "<br>";
            echo "Pipes: ", $total_pipes_sheet_wall;
            echo "<br>";
            echo "Gun powder: ", $total_gunpowder_for_rockets_sheet_wall;
            echo "<br>";
            echo "Sulfer for rockets: ", $total_sulfer_to_craft_rockets_sheet_wall;
            echo "<br>";
            echo "Charcoal total: ", $total_charcoal_to_craft_rockets_sheet_wall + $total_charcoal_needed_for_explosives_sheet_wall;
            echo "<br>";
            echo "Sulfer total: ", $total_sulfer_to_craft_rockets_sheet_wall + $total_sulfer_for_rockets_sheet_wall;

          echo "</td>";


          $total_c4_needed_sheet_wall = $total_c4_needed_sheet_door * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_explosives_needed_sheet_wall = $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;

          $total_sulfer_needed_for_explosives_sheet_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_sulfer_needed_for_gp_sheet_wall = 20 * 5 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_charcoal_needed_for_explosives_sheet_wall = 30 * 5 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_metal_for_explosives_sheet_door_sheet_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_sulfer_for_c4_sheet_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_gunpowder_for_c4_sheet_wall = 50 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_tech_trash_sheet_wall =  2 * $total_c4_needed_sheet_door * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_cloth_sheet_wall = 5 * $total_c4_needed_sheet_door * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;
          $total_lowgrade_sheet_wall = 3 * $total_explosives_for_c4 * $total_c4_needed_sheet_metal_wall * $input_num_sheet_metal_walls;



          echo "<td>";

            echo "C4 needed: ", $total_c4_needed_sheet_wall;
            echo "<br>";
            echo "Explosives needed: ", $total_explosives_needed_sheet_wall;
            echo "<br>";
            echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_sheet_wall;
            echo "<br>";
            echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_sheet_wall;
            echo "<br>";
            echo "Gun powder: ", $total_gunpowder_for_c4_sheet_wall;
            echo "<br>";
            echo "Metal frags: ", $total_metal_for_explosives_sheet_door_sheet_wall;
            echo "<br>";
            echo "Sulfer for Explosives: ", $total_sulfer_for_c4_sheet_wall;
            echo "<br>";
            echo "Low Grade: ", $total_lowgrade_sheet_wall;
            echo "<br>";
            echo "Cloth: ", $total_cloth_sheet_wall;
            echo "<br>";
            echo "Tech trash: ", $total_tech_trash_sheet_wall;
            echo "<br>";
            echo "total Sulfer: ", $total_sulfer_for_c4_sheet_wall + $total_sulfer_needed_for_gp_sheet_wall;

          echo "</td>";

        echo "</tr>";




          echo "<tr>";

            echo "<td>Armored Walls</td>";

            $total_sulfer_needed_for_gp_armored_walls = 2 * 20 * $total_explo_craftable_for_armor_walls * $input_num_armored_walls;
            $total_charcoal_needed_for_gp_armored_walls = 2 * 30 * $total_explo_craftable_for_armor_walls * $input_num_armored_walls;
            $total_metal_armored_wall = 10 * $total_explo_craftable_for_armor_walls * $input_num_armored_walls;
            $total_sulfer_for_armored_wall_ammo = 10 * $total_explo_craftable_for_armor_walls * $input_num_armored_walls;
            $total_gunpowder_for_armored_wall_ammo = 20 * $total_explo_craftable_for_armor_walls * $input_num_armored_walls;
            $total_ammo_needed_for_armored_wall = $total_explo_armor_wall * $input_num_armored_walls;

            echo "<td>";

              echo "Explosive Ammo needed: ", $total_ammo_needed_for_armored_wall;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_armored_walls;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_gp_armored_walls;
              echo "<br>";
              echo "Metal frags: ", $total_metal_armored_wall;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_armored_wall_ammo;
              echo "<br>";
              echo "total sulfer to craft ammo: ", $total_sulfer_for_armored_wall_ammo;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_for_armored_wall_ammo + $total_sulfer_needed_for_gp_armored_walls;

            echo "</td>";

            $total_rockets_armored_wall = 15 * $input_num_armored_walls;
            $total_sulfer_for_gp_explosives_armored_wall = 20 * 5 * 150 * $input_num_armored_walls;
            $total_charcoal_needed_for_explosives_armored_wall = 5 * 30 * 150 * $input_num_armored_walls;
            $total_metal_for_explosives_armored_wall = 10  * 150 * $input_num_armored_walls;
            $total_sulfer_for_rockets_armored_wall = 10 * 150 * $input_num_armored_walls;
            $total_gunpowder_for_rockets_armored_wall = 150 * 150 * $input_num_armored_walls;
            $total_explosives_needed_armored_wall = 150 * $input_num_armored_walls;
            $total_pipes_armored_wall = 2 * 15 * $input_num_armored_walls;
            $total_lowgrade_explosives_armored_wall = 3 * 150 * $input_num_armored_walls;
            $total_charcoal_to_craft_rockets_armored_wall = 30 * 15 * $total_rockets_armored_wall * $input_num_armored_walls;
            $total_sulfer_to_craft_rockets_armored_wall = 20 * 15 * $total_rockets_armored_wall * $input_num_armored_walls;

            echo "<td>";

              echo "Rockets needed: ", $total_rockets_armored_wall;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_armored_wall;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_for_gp_explosives_armored_wall;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_armored_wall;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_armored_wall;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_explosives_armored_wall;
              echo "<br>";
              echo "Pipes: ", $total_pipes_armored_wall;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_rockets_armored_wall;
              echo "<br>";
              echo "Sulfer for rockets: ", $total_sulfer_to_craft_rockets_armored_wall;
              echo "<br>";
              echo "Charcoal total: ", $total_charcoal_to_craft_rockets_armored_wall + $total_charcoal_needed_for_explosives_armored_wall;
              echo "<br>";
              echo "Sulfer total: ", $total_sulfer_for_gp_explosives_armored_wall + $total_sulfer_to_craft_rockets_armored_wall;

            echo "</td>";


            $total_c4_needed_armored_wall = $total_c4_needed_sheet_door * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_explosives_needed_armored_wall = $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;

            $total_sulfer_needed_for_explosives_armored_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_sulfer_needed_for_gp_armored_wall = 20 * 5 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_charcoal_needed_for_explosives_armored_wall = 30 * 5 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_metal_for_explosives_sheet_door_armored_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_sulfer_for_c4_armored_wall = 10 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_gunpowder_for_c4_armored_wall = 50 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_tech_trash_armored_wall =  2 * $total_c4_needed_sheet_door * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_cloth_armored_wall = 5 * $total_c4_needed_sheet_door * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;
            $total_lowgrade_armored_wall = 3 * $total_explosives_for_c4 * $total_c4_needed_sheet_armored_wall * $input_num_armored_walls;

            echo "<td>";

              echo "C4 needed: ", $total_c4_needed_armored_wall;
              echo "<br>";
              echo "Explosives needed: ", $total_explosives_needed_armored_wall;
              echo "<br>";
              echo "Sulfer for Gun Powder: ", $total_sulfer_needed_for_gp_armored_wall;
              echo "<br>";
              echo "Charcoal for Gun Powder: ", $total_charcoal_needed_for_explosives_armored_wall;
              echo "<br>";
              echo "Gun powder: ", $total_gunpowder_for_c4_armored_wall;
              echo "<br>";
              echo "Metal frags: ", $total_metal_for_explosives_sheet_door_armored_wall;
              echo "<br>";
              echo "Sulfer for Explosives: ", $total_sulfer_needed_for_explosives_armored_wall;
              echo "<br>";
              echo "Low Grade: ", $total_lowgrade_armored_wall;
              echo "<br>";
              echo "Cloth: ", $total_cloth_armored_wall;
              echo "<br>";
              echo "Tech trash: ", $total_tech_trash_armored_wall;
              echo "<br>";
              echo "total Sulfer: ", $total_sulfer_needed_for_explosives_armored_wall + $total_sulfer_needed_for_gp_armored_wall;

            echo "</td>";

          echo "</tr>";

          echo "</table>";

        echo "</div>";



        echo "<div id='table2'>";

                echo "<form method='post' action='' id='form2'>";

                  echo "<table align='center' cellpadding='20' style=100%>";
                  echo "<tr>";

                    echo "<td>";

                      echo "<h3>Explosive Ammo</h3>";
                      echo "<input type='text' name='num_of_explosive_ammo'><br><br>";

                    echo "</td>";

                    echo "<td>";

                      echo "<h3>Rockets</h3>";
                      echo "<input type='text' name='num_of_rockets'><br><br>";

                    echo "</td>";

                    echo "<td>";

                      echo "<h3>C4</h3>";
                      echo "<input type='text' name='num_of_c4'><br><br>";

                    echo "</td>";

                  echo "</tr>";

                echo "</table>";


                // $input_num_explosive_ammo
                // $input_num_of_rockets
                // $input_num_of_c4


                $sulfer_ammo = 10 * $input_num_explosive_ammo;

                $sulfer_gp = 0;


                $total_sulfer = $sulfer_ammo + $sulfer_gp;


                echo "<div style='text-align:center;'>";
                echo "<input type='submit' onclick='show2()' form='form2' value='Caclculate'>";

                echo "</div>";

                echo "</form>";

                  echo "<table align='center' cellpadding='20' style=100%>";
                  echo "<tr>";

                      echo "<td>Sulfer</td>";
                      echo "<td>$sulfer_ammo</td>";

                  echo "</tr>";

                  echo "<tr>";

                      echo "<td>Charcoal</td>";
                      echo "<td>test</td>";

                  echo "</tr>";

                  echo "<tr>";

                      echo "<td>Gun Powder</td>";
                      echo "<td>test</td>";

                  echo "</tr>";


                  echo "<tr>";

                      echo "<td>Metal Frags</td>";
                      echo "<td>test</td>";

                  echo "</tr>";


                  echo "<tr>";

                      echo "<td>Low Grade Fuel</td>";
                      echo "<td>test</td>";

                  echo "</tr>";

                  echo "<tr>";

                      echo "<td>Cloth</td>";
                      echo "<td>test</td>";

                  echo "</tr>";

                  echo "<tr>";

                      echo "<td>Tech Trash</td>";
                      echo "<td>test</td>";

                  echo "</tr>";

                  echo "<tr>";

                      echo "<td>Pipes</td>";
                      echo "<td>test</td>";

                  echo "</tr>";

                  echo "<tr>";

                      echo "<td>Explosives</td>";
                      echo "<td>test</td>";

                  echo "</tr>";

          echo "</table>";

        echo "</div>";


        ?>

    </body>
</html>
