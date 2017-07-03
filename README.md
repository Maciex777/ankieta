# ankieta
Ankieta jednokrotnego wyboru przesyłająca głosy do bazy danych. Wyniki ankiety można zobaczyć w pliku zobacz.php.
Aby skrypt zadziałał w MySQL trzeba utworzyć bazę o nazwie "sonda" z tabelą o nazwie "sonda" posiadającą 9 komórek z wartością 0 (ustawienia domyślne: NULL, wstaw: wartość: 0).
Nazwy komórek to: odpA, odpB, odpC, odpD, odpE, odpF, odpG, odpH, odpI.
Dodatkowo należy nadać uprawnienia użytkownikowi "user", host: "localhost", hasło:"password".
