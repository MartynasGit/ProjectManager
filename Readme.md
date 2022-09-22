Sukurti DB shemą praktiniam projektui, apgalvojame kokios esybės (entities).
Sukurti lenteles ir užpildyti jas duomenimis (ranka).
Sukurti PHP scriptą, kuris iš duomenų bazės ištraukia duomenis ir atvaizduoja juos HTML lentelėje (darbuotojų ARBA projektų lentelei).
* Atvaizduoti duomenis projektų IR darbuotojų lentelėms.


Sukurti personalo valdymo sistemą (CRUD app). Sistemos reikalavimai: 
darbuotojų
talpinimas
redagavimas
trynimas

projektų
talpinimas
redagavimas
trynimas

jų priskyrimas darbuotojams (projekte gali dirbti >1 darbuotojas).




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
