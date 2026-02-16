<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET Kalkulyator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator-card {
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 320px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
            font-size: 0.9rem;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box; /* Padding hisobiga kengayib ketmasligi uchun */
            font-size: 1rem;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 1.5rem;
            padding: 10px;
            background-color: #e8f5e9;
            border-left: 5px solid #4CAF50;
            color: #2e7d32;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="calculator-card">
    <h2>Kalkulyator</h2>
    
    <form action="" method="GET">
        <div class="form-group">
            <label for="num1">Birinchi son:</label>
            <input type="number" value="<?= $_GET["num1"]; ?>" name="num1" id="num1" required step="any">
        </div>

        <div class="form-group">
            <label for="operation">Amalni tanlang:</label>
            <select name="operation"  id="operation">
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
        </div>

        <div class="form-group">
            <label for="num2">Ikkinchi son:</label>
            <input type="number" value="<?= $_GET["num2"]; ?>" name="num2" id="num2" required step="any">
        </div>

        <button type="submit">Hisoblash</button>
    </form>

    <div class="result">
        Natija: 
        <?php


            $x = $_GET["num1"];
            $y = $_GET["num2"];

            // Bu yerga PHP kodingizni yozasiz
            // Masalan: if(isset($_GET['num1'])) { ... }
            switch($_GET["operation"]){
                case "plus"     : echo $x + $y; break;
                case "minus"    : echo $x - $y; break;
                case "multiply" : echo $x * $y; break;
                case "divide"   : 

                    if ($y != 0){
                        echo $x / $y; 
                        break;
                    }else{
                        echo "sonni nolga bolish mumkin emas! tvar";
                    }

            }

        ?>
    </div>
</div>

</body>
</html>