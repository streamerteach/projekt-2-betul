<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Dennis Kursportfolio</title>
    <link rel="stylesheet" href="Projekt2/style.css"> 
    <style>
        /* This hides any header if it accidentally gets included */
        header { display: none; } 
        body { background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        #container { text-align: center; background: white; padding: 50px; border-radius: 15px; shadow: 0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div id="container">
        <h1>Välkommen till mina projekt</h1>
        <p>Välj ett projekt nedan för att se resultatet:</p>
        <div style="display: flex; gap: 20px; justify-content: center; margin-top: 20px;">
            <a href="Projekt1/" class="button-link">Projekt 1</a>
            <a href="Projekt2/" class="button-link">Projekt 2</a>
        </div>
    </div>
</body>
</html>