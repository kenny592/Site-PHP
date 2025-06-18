<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Interface Gougeule</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            font-size: 48px;
            color:rgb(91, 51, 65);
            margin-bottom: 30px;
        }

        form {
            margin: auto;
            width: 60%;
            max-width: 500px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 24px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn-search {
            background-color:rgb(124, 124, 124);
            color: white;
        }

        .btn-search:hover {
            background-color:rgb(0, 0, 0);
        }

        .btn-lucky {
            background-color:rgb(124, 124, 124);
            color: white;
        }

        .btn-lucky:hover {
            background-color:rgb(0, 0, 0);
        }
    </style>

    <h1>Gougeule</h1>

    <form method="get" action="search.php">
        <input type="text" name="query" placeholder="Ecris un truc non?" required>
        <div>
            <button type="submit" formaction="search.php" class="btn btn-search">Clike</button>
            <button type="submit" formaction="chance.php" class="btn btn-lucky">Jeu nez pa 2 chansse</button>
        </div>
    </form>
    
</body>
</html>





   