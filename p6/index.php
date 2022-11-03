<html>
    <head>
        <title>Baking Unit Conversion</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        
        <!-- My CSS -->
        <link href="css/mycss.css" rel="stylesheet">
    
    </head>
    <body style="background-color: black">
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/index.html">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>
        <!-- Header -->
        <header class="masthead">
            <div>
                <h1 class="font" style="font-size: 300%; font-family: cursive">Baking<br>
                Unit Conversion</h1>
            </div>
        </header>
        <div class="col-md-5 col-md-offset-3 container">
            <form class="form-horizontal font" style="font-size: 30px" action="index.php" method="POST">
                <div class="form-group">
                    
                    <!-- PHP Script -->
                    <?php
                    //sanitize the string
                    function sanitizeString($str)
                    {
                        $str = strip_tags($str);
                        $str = htmlentities($str);
                        $str = stripslashes($str);
                        return $str;
                    }
                    
                    //functions for the unit conversions
                    
                    //Volume Conversions
                    //tsp to mL
                    function tsp_mL($num) 
                    {
                        $ans = $num * 4.92892;
                        return round($ans, 2);
                    }
                    //tsp to tbsp
                    function tsp_tbsp($num) 
                    {
                        $ans = ($num / 3);
                        return round($ans, 2);
                    }
                    //tsp to cup
                    function tsp_cup($num) 
                    {
                        $ans = ($num / 48);
                        return round($ans, 2);
                    }
                    //tsp to fluid ounces
                    function tsp_Oz($num) 
                    {
                        $ans = ($num / 6);
                        return round($ans, 2);
                    }
                    //tsp to liters
                    function tsp_L($num) 
                    {
                        $ans = ($num / 203);
                        return round($ans, 2);
                    }
                    //mL to liters
                    function mL_L($num) 
                    {
                        $ans = ($num / 1000);
                        return round($ans, 2);
                    }
                    //mL to tbsp
                    function mL_tbsp($num) 
                    {
                        $ans = ($num / 14.787);
                        return round($ans, 2);
                    }
                    //mL to cups
                    function mL_cup($num) 
                    {
                        $ans = ($num / 237);
                        return round($ans, 2);
                    }
                    //mL to fluid ounces
                    function mL_Oz($num) 
                    {
                        $ans = ($num / 29.574);
                        return round($ans, 2);
                    }
                    //tbsp to cups
                    function tbsp_cup($num) 
                    {
                        $ans = ($num / 16);
                        return round($ans, 2);
                    }
                    //tbsp to fluid ounces
                    function tbsp_Oz($num)
                    {
                        $ans = ($num / 2);
                        return round($ans, 2);
                    }
                    //tbsp to liters
                    function tbsp_L($num) 
                    {
                        $ans = ($num / 67.628);
                        return round($ans, 2);
                    }
                    //cups to fluid ounces
                    function cup_Oz($num)
                    {
                        $ans = ($num * 8);
                        return round($ans, 2);
                    }
                    //cups to liters
                    function cup_L($num)
                    {
                        $ans = ($num / 4.227);
                        return round($ans, 2);
                    }
                    //fluid ounces to liters
                    function Oz_L($num)
                    {
                        $ans = ($num / 33.814);
                        return round($ans, 2);
                    }
                    //liters to fluid ounces
                    function L_Oz($num)
                    {
                        $ans = ($num * 33.814);
                        return round($ans, 2);
                    }
                    //liters to cups
                    function L_cup($num)
                    {
                        $ans = ($num * 4.227);
                        return round($ans, 2);
                    }
                    //fluid ounces to cups
                    function Oz_cup($num)
                    {
                        $ans = ($num / 8);
                        return round($ans, 2);
                    }
                    //liters to tbsp
                    function L_tbsp($num) 
                    {
                        $ans = ($num * 67.628);
                        return round($ans, 2);
                    }
                    //fluid ounces to tbsp
                    function Oz_tbsp($num) 
                    {
                        $ans = ($num * 2);
                        return round($ans, 2);
                    }
                    //tbsp to tsp
                    function tbsp_tsp($num) 
                    {
                        $ans = ($num * 3);
                        return round($ans, 2);
                    }
                    //mL to tsp
                    function mL_tsp($num) 
                    {
                        $ans = ($num / 4.92892);
                        return round($ans, 2);
                    }
                    //cups to tsp
                    function cup_tsp($num) 
                    {
                        $ans = ($num * 48);
                        return round($ans, 2);
                    }
                    //fluid ounces to tsp
                    function Oz_tsp($num) 
                    {
                        $ans = ($num * 6);
                        return round($ans, 2);
                    }
                    //liters to tsp
                    function L_tsp($num) 
                    {
                        $ans = ($num * 203);
                        return round($ans, 2);
                    }
                    //liters to mL
                    function L_mL($num) 
                    {
                        $ans = ($num * 1000);
                        return round($ans, 2);
                    }
                    //tbsp to mL
                    function tbsp_mL($num) 
                    {
                        $ans = ($num * 14.787);
                        return round($ans, 2);
                    }
                    //cups to mL
                    function cup_mL($num) 
                    {
                        $ans = ($num * 237);
                        return round($ans, 2);
                    }
                    //fluid ounces to mL
                    function Oz_mL($num) 
                    {
                        $ans = ($num * 29.574);
                        return round($ans, 2);
                    }
                    //cups to tbsp
                    function cup_tbsp($num) 
                    {
                        $ans = ($num * 16);
                        return round($ans, 2);
                    }
                    
                    //Weight Conversions
                    //g to ounces
                    function g_Oz($num) 
                    {
                        $ans = ($num / 28.35);
                        return round($ans, 2);
                    }
                    //ounces to grams
                    function Oz_g($num) 
                    {
                        $ans = ($num * 28.35);
                        return round($ans, 2);
                    }
                    //g to pounds
                    function g_lbs($num) 
                    {
                        $ans = ($num / 454);
                        return round($ans, 2);
                    }
                    //pounds to grams
                    function lbs_g($num) 
                    {
                        $ans = ($num * 454);
                        return round($ans, 2);
                    }
                    //g to kg
                    function g_kg($num) 
                    {
                        $ans = ($num / 1000);
                        return round($ans, 2);
                    }
                    //kg to g
                    function kg_g($num) 
                    {
                        $ans = ($num * 1000);
                        return round($ans, 2);
                    }
                    //ounces to pounds
                    function Oz_lbs($num) 
                    {
                        $ans = ($num / 16);
                        return round($ans, 2);
                    }
                    //pounds to ounces
                    function lbs_Oz($num) 
                    {
                        $ans = ($num * 16);
                        return round($ans, 2);
                    }
                    //ounces to kg
                    function Oz_kg($num) 
                    {
                        $ans = ($num / 35.274);
                        return round($ans, 2);
                    }
                    //kg to ounces
                    function kg_Oz($num) 
                    {
                        $ans = ($num * 35.274);
                        return round($ans, 2);
                    }
                    //pounds to kg
                    function lbs_kg($num) 
                    {
                        $ans = ($num / 2.205);
                        return round($ans, 2);
                    }
                    //kg to pounds
                    function kg_lbs($num) 
                    {
                        $ans = ($num * 2.205);
                        return round($ans, 2);
                    }
                    
                    //Temperature Conversions
                    //Fahrenheit to Celsius
                    function F_C($num)
                    {
                        $ans = (($num * 1.8) + 32);
                        return round($ans, 2);
                    }
                    //Celsius to Fahrenheit
                    function C_F($num)
                    {
                        $ans =  (($num - 32) / 1.8);
                        return round($ans, 2);
                    }
                    //Kelvin to Celsius
                    function K_C($num)
                    {
                        $ans = ($num - 273.15);
                        return round($ans, 2);
                    }
                    
                    //check for the user's text input and for which button was selected
                    //call the function for the conversion that was selected
                    //create an output based on the button selected
                    if(isset($_POST['num']))
                    {
                        // sanitize input
                        $num = sanitizeString($_POST['num']);
    
                        $output = "Error!";
    
                        // business logic
                        if(isset($_POST['unit']) && $_POST['unit'] === 'Tsp to mL')
                        {
                            $output = $num . " tsp is equal to " . tsp_mL($num) . " mL";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tsp to Tbsp')
                        {
                            $output = $num . " tsp is equal to " . tsp_tbsp($num) . " tbsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tsp to Cup')
                        {
                            $output = $num . " tsp is equal to " . tsp_cup($num) . " cups";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tsp to Fl. Oz')
                        {
                            $output = $num . " tsp is equal to " . tsp_Oz($num) . " fl. Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tsp to L')
                        {
                            $output = $num . " tsp is equal to " . tsp_L($num) . " L";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'mL to Tsp')
                        {
                            $output = $num . " mL is equal to " . mL_tsp($num) . " tsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'mL to Tbsp')
                        {
                            $output = $num . " mL is equal to " . mL_tbsp($num) . " tbsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'mL to Cup')
                        {
                            $output = $num . " mL is equal to " . mL_cup($num) . " cups";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'mL to Fl. Oz')
                        {
                            $output = $num . " mL is equal to " . mL_Oz($num) . " fl. Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'mL to L')
                        {
                            $output = $num . " mL is equal to " . mL_L($num) . " L";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tbsp to Tsp')
                        {
                            $output = $num . " tbsp is equal to " . tbsp_tsp($num) . " tsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tbsp to mL')
                        {
                            $output = $num . " tbsp is equal to " . tbsp_mL($num) . " mL";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tbsp to Cup')
                        {
                            $output = $num . " tbsp is equal to " . tbsp_cup($num) . " cups";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tbsp to Fl. Oz')
                        {
                            $output = $num . " tbsp is equal to " . tbsp_Oz($num) . " fl. Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Tbsp to L')
                        {
                            $output = $num . " tbsp is equal to " . tbsp_L($num) . " L";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Cup to Tsp')
                        {
                            $output = $num . " cup is equal to  " . cup_tsp($num) . " tsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Cup to mL')
                        {
                            $output = $num . " cups is equal to " . cup_mL($num) . " mL";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Cup to Tbsp')
                        {
                            $output = $num . " cups is equal to " . cup_tbsp($num) . " tbsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Cup to Fl. Oz')
                        {
                            $output = $num . " cups is equal to " . cup_Oz($num) . " fl. Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Cup to L')
                        {
                            $output = $num . " cups is equal to " . cup_L($num) . " L";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Fl. Oz to Tsp')
                        {
                            $output = $num . " fl. Oz is equal to " . Oz_tsp($num) . " tsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Fl. Oz to mL')
                        {
                            $output = $num . " fl. Oz is equal to " . Oz_mL($num) . " mL";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Fl. Oz to Tbsp')
                        {
                            $output = $num . " fl. Oz is equal to " . Oz_tbsp($num) . " tbsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Fl. Oz to Cup')
                        {
                            $output = $num . " fl. Oz is equal to " . Oz_cup($num) . " cups";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Fl. Oz to L')
                        {
                            $output = $num . " fl. Oz is equal to " . Oz_L($num) . " L";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'L to Tsp')
                        {
                            $output = $num . " L is equal to " . L_tsp($num) . " tsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'L to mL')
                        {
                            $output = $num . " L is equal to " . L_mL($num) . " mL";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'L to Tbsp')
                        {
                            $output = $num . " L is equal to " . L_tbsp($num) . " tbsp";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'L to Cup')
                        {
                            $output = $num . " L is equal to " . L_cup($num) . " cups";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'L to Fl. Oz')
                        {
                            $output = $num . " L is equal to " . L_Oz($num) . " fl. Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'g to Oz')
                        {
                            $output = $num . " g is equal to " . g_Oz($num) . " Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'g to lbs')
                        {
                            $output = $num . " g is equal to " . g_lbs($num) . " lbs";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'g to kg')
                        {
                            $output = $num . " g is equal to " . g_kg($num) . " kg";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'kg to Oz')
                        {
                            $output = $num . " kg is equal to " . kg_Oz($num) . " Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'kg to lbs')
                        {
                            $output = $num . " kg is equal to " . kg_lbs($num) . " lbs";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'kg to g')
                        {
                            $output = $num . " kg is equal to " . kg_g($num) . " g";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Oz to kg')
                        {
                            $output = $num . " Oz is equal to " . Oz_kg($num) . " kg";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Oz to lbs')
                        {
                            $output = $num . " Oz is equal to " . Oz_lbs($num) . " lbs";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Oz to g')
                        {
                            $output = $num . " Oz is equal to " . Oz_g($num) . " g";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'lbs to kg')
                        {
                            $output = $num . " lbs is equal to " . lbs_kg($num) . " kg";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'lbs to Oz')
                        {
                            $output = $num . " lbs is equal to " . lbs_Oz($num) . " Oz";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'lbs to g')
                        {
                            $output = $num . " lbs is equal to " . lbs_g($num) . " g";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Fahrenheit to Celsius')
                        {
                            $output = $num . " F is equal to " . F_C($num) . " C";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Celsius to Fahrenheit')
                        {
                            $output = $num . " C is equal to " . C_F($num) . " F";
                        }
                        elseif(isset($_POST['unit']) && $_POST['unit'] === 'Kelvin to Celsius')
                        {
                            $output = $num . " K is equal to " . K_C($num) . " C";
                        }
    
                        //display results to user
                        //added CSS to h6 to change the way the result appears in the screen
                        echo "<h6>$output </h6>";
                    }
                    ?> 
                    
                    <!-- User's Input -->
                    <label for="unit">Number to Convert:</label>
                    <input type="text" id="num" name="num" required autofocus>
                    
                    <!-- Buttons For The Conversions -->
                    <table>
                        <!-- Volume -->
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tsp to mL"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tsp to L"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tsp to Tbsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tsp to Cup"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tsp to Fl. Oz"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="mL to Tsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="mL to L"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="mL to Tbsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="mL to Cup"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="mL to Fl. Oz"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tbsp to Tsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tbsp to L"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tbsp to mL"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tbsp to Cup"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Tbsp to Fl. Oz"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Cup to Tsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Cup to L"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Cup to mL"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Cup to Tbsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Cup to Fl. Oz"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Fl. Oz to Tsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Fl. Oz to L"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Fl. Oz to mL"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Fl. Oz to Cup"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Fl. Oz to Tbsp"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="L to Tsp"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="L to Fl. Oz"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="L to mL"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="L to Cup"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="L to Tbsp"></td>
                        </tr>
                        <!-- Weight -->
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="g to Oz"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="g to lbs"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="g to kg"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Oz to g"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Oz to lbs"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="Oz to kg"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="lbs to Oz"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="lbs to kg"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="lbs to g"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="kg to lbs"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="kg to g"></td>
                            <td><input type="submit" class="unit" id="unit" name="unit" value="kg to Oz"></td>
                            <!-- Temperature -->
                            <td><input  type="submit" class="unit" id="unit" name="unit" value="Fahrenheit to Celsius"></td>
                            <td><input  type="submit" class="unit" id="unit" name="unit" value="Celsius to Fahrenheit"></td>
                            <td><input  type="submit" class="unit" id="unit" name="unit" value="Kelvin to Celsius"></td>
                        </tr>
                    </table>
                 </div> 
            </form>
        </div>
        <!-- Footer -->
        <footer style="background-color: black">
            <div class="container">
                <p class="copyright" style="color: gray">Copyright &copy; Luiza Lopes 2020</p>
            </div>
        </footer>
        
        <!-- Bootstrap JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    
    </body>
</html>