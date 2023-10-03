# Some Teams

Uppgift gjord av Emil Årerbink

## Information

Sidan visar ett html table med information om olika fotbollslag.
Den visar även en lista på alla städer som lagen kommer ifrån
Sidan är gjord i PHP,HTML och CSS
Detta är en skoluppgift för YRGO

## Gjord med

- PHP 8.1.2
- Web server (ubuntu2.14 Development Server)

## Installation

1. Klona lagringsplatsen (repositoriet).
2. Placera filerna i din webbserverkatalog.
3. Navigera till `index.php` i din webbläsare för att visa webbplatsen.

## Fil strukur

- `index.php`: Bygger ihop sidan
- `data.php`: Innehåller information om lagen
- `body.php`: skapar ett html table där informationen från data.php visas
- `cityValues.php`: samlar alla unika städer som lagen kommer ifrån och sedan visar dem i en lista
- `head.php`: startar html taggar och innehåller <.head>
- `footer.php`: avslutar html taggar
- `teams.php`: räknar antalet lag med i data.php

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
