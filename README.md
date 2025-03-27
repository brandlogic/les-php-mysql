# Opdrachtomschrijving

## Database Selectie Scherm

- **Startpagina (index.php):**
  - Maak een startpagina waar de gebruiker zijn MySQL-servergegevens kan invoeren (host, gebruikersnaam, wachtwoord).
  - Na een succesvolle connectie toon je een lijst met alle beschikbare databases (gebruik hiervoor de query `SHOW DATABASES;`).
  - Laat de gebruiker één database selecteren en sla deze selectie op in een PHP-sessie zodat deze in latere schermen beschikbaar is.

## Query Uitvoerings Scherm

- Nadat een database is geselecteerd, leidt een doorverwijzing naar een nieuw scherm (`query.php`) de gebruiker naar een interface waar hij SQL-queries kan invoeren.
- **Formulier voor SQL-query:**
  - Creëer een formulier waarin de gebruiker een SQL-query (bijvoorbeeld een SELECT-query) kan invoeren.
- **Verwerken van de query op de server:**
  - Maak opnieuw een verbinding met MySQL, maar nu met de gekozen database.
  - Voer de query uit en vang eventuele fouten af.
- **Resultaat tonen:**
  - Als de query succesvol is, presenteer de resultaten in een nette HTML-tabel met kolomkoppen.
  - Als er een fout optreedt (bijvoorbeeld een syntaxisfout), geef een duidelijke foutmelding weer.

## Beveiliging en Foutafhandeling

- Gebruik prepared statements (vooral bij queries die door de gebruiker worden ingevoerd) om SQL-injecties te voorkomen.
- Zorg voor een goede foutafhandeling en informeer de gebruiker op een duidelijke, maar veilige manier over eventuele problemen (bijvoorbeeld zonder te veel interne details prijs te geven).

## Extra Functionaliteiten (optioneel / bonus)

- **Meerdere Queries:** Voeg de mogelijkheid toe om meerdere queries achter elkaar uit te voeren zonder de pagina te hoeven herladen.
- **Query Validatie:** Overweeg om alleen bepaalde typen queries toe te staan (bijvoorbeeld alleen SELECT-queries) om per ongeluk datamanipulatie te voorkomen.
- **Export Mogelijkheid:** Bied een optie om de resultaten van een query te exporteren naar CSV.
- **Navigatie:** Ontwerp een eenvoudig navigatiemenu zodat de gebruiker makkelijk kan wisselen tussen het selectiescherm en het queryscherm.
- **Sessiebeheer:** Zorg dat de gebruiker kan uitloggen of de database-selectie kan resetten om een nieuwe sessie te starten.
