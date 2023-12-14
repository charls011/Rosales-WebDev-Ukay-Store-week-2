<link rel="stylesheet" href="styles.css">
<?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
            echo "<div class = 'container'>";
            echo "<h2>📝 Order Summary</h2>";

            $clothe_prices = [
                "trousers" => 350.00,
                "t-shirts" => 150.00,
                "shorts" => 120.00,
                "jackets" => 200.00,
                "jeans" => 250.00,
            ];

            $size_prices = [
                "small" => 0.00,
                "medium" => 0.00,
                "large" => 0.00,
                "extra large" => 50.00,
                "double extra large" => 50.00,
            ];

            $location_prices = [
                "luzon"     => 50,
                "visayas"   => 100,
                "mindanao"  => 150,
            ];

            $clothe_type = $_POST["clothe"];
            $size = $_POST["size"];
            $location = $_POST["location"];

            $total_price = $clothe_prices[$clothe_type] + $size_prices[$size] + $location_prices[$location];
            

             // Start the order summary table
             echo "<table>";

             echo "<tr><td>Name</td><td>" . htmlspecialchars($_POST["name"]) . "</td></tr>";

            
             echo "<tr><td>clothe type</td><td>" . htmlspecialchars($_POST["clothe"]) . " (₱" . number_format($clothe_prices[$clothe_type], 2) . ")</td></tr>";

            
             echo "<tr><td>size</td><td>" . htmlspecialchars($_POST["size"]) . " (₱" . number_format($size_prices[$size], 2) . ")</td></tr>";
             
             echo "<tr><td>location</td><td>" . htmlspecialchars($_POST["location"]) . " (₱" . number_format($location_prices[$location], 2) . ")</td></tr>";

            
             echo "<tr><td>Total Price</td><td>₱" . number_format($total_price, 2) . "</td></tr>";
             echo "<tr><td>notes</td><td>" . htmlspecialchars($_POST["notes"]) . "</td></tr>";

              // End the order summary table
            echo "</table>";
        
            echo "</div>";
            
        }

            ?>
