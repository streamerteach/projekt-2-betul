<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "header.php"; 
?>

<div id="container">
    <div class="rapport-content">
        <h1>Reflektion och Feedback - Projekt 2</h1>

        <section>
            <h2>Vad jag har gjort</h2>
            <p>Här har jag skapat en dynamisk dejtingsida med PHP och MySQL. Jag har implementerat inloggning, profilhantering och ett system för att se andra användare.</p>

            <h3>Vad har varit bra/roligt?</h3>
            <p>
                Det var roligt att se hur webbplatsen gick från att vara statisk till att bli helt dynamisk med hjälp av en databas. 
                Att få till inloggningssystemet kändes som ett stort steg framåt.
            </p>

            <h3>Vad har varit svårt/tråkigt?</h3>
            <p>
                SQL-frågorna och att få PHP att prata med databastabellerna var utmanande. 
                Det tog en stund att förstå hur man kopplar ihop tabeller för att visa kommentarer. Det har varit också svårt med inloggningen, men det löstes senare.
            </p>

            <h3>Vad tog lång tid att förstå?</h3>
            <p>
                Lösenordshashning (`password_hash`) tog ett tag att greppa, särskilt säkerhetsaspekten. 
                Även logiken kring sessioner krävde extra tankeverksamhet.
            </p>

            <h3>Hur skulle kursen ha lämpat sig bättre för dig?</h3>
            <p>
                Jag tycker kursen har varit bra, men fler praktiska exempel på SQL-kopplingar tidigt i kursen hade hjälpt.Jag tycker också att det skulle vara hjälpsamt om tempot var lite långsammare, så att vi hinner följa med och koda under timmen.
            </p>
            <h3>Databasstruktur</h3>
<p>Här är ett diagram över mina tabeller profiles och comment:</p>
<img src="db_diagram.png" alt="Mitt databasdiagram" style="max-width: 100%; border: 1px solid #ccc;">
        </section>
    </div>
</div>

</body>
</html>