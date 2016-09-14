<?php
return [
    'plugin' => [
        'manage_domains' => 'Wsparcie dla wielu domen',
        'tab' => 'Multisite'
    ],
    
    'details' => [
        
        'title' => 'Domeny',
        'description' => 'Wsparcie dla wielu domen dla OctoberCMS',
        'description2' => 'Przydzielaj domeny do szablonów',
        'problem' => 'Nie znaleziono tabeli wtyczki, zreinstaluj wtyczkę.'
    ]
    ,
    
    'controller' => [
        'settings' => 'Ustawienia',
        'confirm' => 'Na pewno?',
        'new-bind' => 'Nowa domena',
        'delete' => 'Usuń',
        'clear-cache' => 'Wyczyść cache',
        'create-bind' => 'Stwórz domenę',
        'edit-bind' => 'Edytuj domenę',
        'create' => 'Stwórz',
        'create-and-close' => 'Stwórz i zamknij',
        'cancel' => 'Anuluj',
        'return' => 'Wróć do ustawień',
        'creating' => 'Ustawianie...',
        'or' => 'lub',
        'save' => 'Zapisz',
        'saving' => 'Zapisywanie ...',
        'save-and-close' => 'Zapisz i zamknij',
        'save-delete' => 'Usuń zapis'
    ],
    
    'domain' => [
        'label' => 'Domena, którą ustawić dla szablonu',
        'comment' => 'Podaj pełny URL, np: http://well-designed.eu/',
        'theme-label' => 'Szablon',
        'theme-comment' => 'Wybierz szablon dla tej domeny',
        'protect-label' => 'Chroń szablon dla tej domeny',
        'protect-comment' => 'Zaznacz, jeśli chcesz zablokować dostęp do backendu przez tą domenę. Wyświetla Błąd 401 lub stronę /error'
    ],
    
    'flash' => [
        'cache-clear' => 'Cache został wyczyszczony.'
    ]
    ,
    'tables' => [
        'domain' => 'Domena',
        'theme' => 'Szablon',
        'protected' => 'Chroniona?'
    ]
]

];
