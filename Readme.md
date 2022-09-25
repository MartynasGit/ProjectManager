# PROJECT MANAGMENT APPLICATION

## About

Application is made with PHP, HTML, MySQL Workbench.
For style used Boostrap and raw CSS.
Website is made to manage your projects and people who works on them with CRUD operations.
Website has PHP script to request data from RDBMS and get data back as response to render it.
Feature:
- Application show list of projects and employees who work on it.
- Renders list of employees and projects employee works.
- Ability to create, edit and delete projects.
- Ability to create, edit and delete employees.
- Asign employees to projects.


This aplication usses database. If you want to use this application safetly create a low privilage user.
Minimum required "Grants" for user:




Procesas sprinto darbo kūrimo:
Atsiverčiu workbenchą
Susikuriu lenteles / lentelę / ryšius. CREATE statementai yra development time only.
Galime įsidėti dummy duomenų (INSERT arba ranka).
Sukuriat PHP backendą su CRUD actions (CREATE, READ, UPDATE, DELETE) visiems entities. Pradedant nuo R (read). Toliau D (delete). Tada C (create) ir galiausiai U (update).
Tada galime užbaigti ryšio (relation) veikimą (ar ištrynus darbuotoją turi išsitrinti projektas ir atvirškčiai). Pagal mūsų reikalavimus: “(projektų) jų priskyrimas darbuotojams (projekte gali dirbti >1 darbuotojas).”
Supushinam į git PHP kodą.
Reikia sudėti SQL dumpą į git repozitoriją, kad tikrinantis galėtų pasileistą tą projektą, kuris veikė jums.
Instrukcijose (readme.md) aprašyti kaip pasileisti projektą.
Patikrinti ar gera instrukcija (pilnai supushintą projektą išcheckoutinat kitame folderyje, tada išnaujo sukuriat db su savo dump failu ir tikranat funkcionalumą).
