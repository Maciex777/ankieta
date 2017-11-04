# ankieta
Ankieta jednokrotnego wyboru przesyłająca głosy do bazy danych. Wyniki ankiety można zobaczyć w pliku zobacz.php.
Aby skrypt zadziałał w MySQL trzeba utworzyć bazę o nazwie "sonda" z tabelą o nazwie "sonda" posiadającą 9 komórek z wartością 0 (ustawienia domyślne: NULL, wstaw: wartość: 0).
Nazwy komórek to: odpA, odpB, odpC, odpD, odpE, odpF, odpG, odpH, odpI.
Dodatkowo należy nadać uprawnienia użytkownikowi "user", host: "localhost", hasło:"password".

Single choice voting questionnaire sending voices the database. The preview of survey results is available in the file zobacz.php. 
To run the script create a database named "sonda" in MySQL with a table named "sonda" which has 9 cells with a value of 0 (default values: NULL, insert: value: 0). 
The names of the cells are: odpA, odpB, odpC, odpD, odpE, odpF, odpG, odpH, odpI.
In addition, you must authorize user "user", host: "localhost", password: "password".
