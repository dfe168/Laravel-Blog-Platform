# Laravel Blog Platform

Een moderne blogapplicatie gebouwd met Laravel, Livewire, Filament en Tailwind CSS. Deze applicatie stelt editors in staat om blogs te maken, bekijken en te reageren op andere blogs, inclusief functionaliteiten zoals likes, discussieformulieren en tags.

De beheerdersinterface is gerealiseerd met behulp van het Filament Admin Panel, inclusief verschillende beheermogelijkheden.

![Screenshot](./screenshot.jpeg)

## ⚙️ Functionaliteiten

### Voor gebruikers

-   Bewerken en verwijderen van blogposts
-   Reacties plaatsen onder blogposts
-   Blogposts liken
-   Filteren op tags of zoeken naar blogs
-   Blog detailpagina met reacties en discussieformulier

### Voor gebruikers (editors)

-   Aanmaken, bewerken en verwijderen van blogposts

### Voor admins (Filament)

-   Dashboard met overzicht van blogactiviteit
-   Beheer van gebruikers
-   Beheer van blogposts, reacties en tags
-   Rollen en permissies (optioneel)

### Overig

-   Database seeding met testdata
-   Responsieve UI met Tailwind CSS
-   Live updates via Livewire

## Gebruikte technologieën

-   Laravel 11+
-   Livewire
-   Filament Admin Panel
-   Tailwind CSS
-   Laravel Seeder & Factories

## Installatie

1. Clone de repository:

    ```bash
    git clone https://github.com/jouwgebruikersnaam/jouw-blogproject.git
    cd jouw-blogproject
    ```

2. composer install, seed DB en serve

    ```bash
    npm install && npm run dev

    cp .env.example .env

    php artisan key:generate

    php artisan migrate --seed

    php artisan serve
    ```
