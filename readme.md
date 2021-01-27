# Salesform - Form Data Validator
Ezzel a HTML/PHP kombóval tudod ellenőrizni, hogy az általad összeállított egyedi form/rendszer megfelelően adja-e át a paramétereket a SalesForm felé. Ha a rendszered végpontjának ezt a fájlt állítod be, átirányítás után megmutatja neked, hogy mely paramétereket tudott értelmezni a SalesForm, illetve mely paraméterekkel lehet probléma. 

![enter image description here](https://scontent-vie1-1.xx.fbcdn.net/v/t1.15752-9/138544102_117435070170216_977989168830215359_n.png?_nc_cat=106&ccb=2&_nc_sid=ae9488&_nc_ohc=_RoGdN_Dxp0AX-JnVNy&_nc_ht=scontent-vie1-1.xx&oh=94b98e6359dfd8ea91cf0683131872c1&oe=60388973)

### **Hogyan néz ki egy teljesen paraméterezett URL automatikus posztolással?**

-   name= Bártfai Balázs
-   telephone= 06303512354
-   email= hello@salesform.hu
-   invoice_name= Netlight Consulting Kft
-   invoice_vatnumber = 14188127-2-42
-   invoice_zipcode= 1148
-   invoice_city= Budapest
-   invoice_street= Bánki Donát utca 12/b

Ezek a minimum adatok.

**Paraméterben ez így néz ki:**  
?name=Bártfai Balázs&telephone=06303512354&email=hello@salesform.hu&invoice_name=Netlight Consulting Kft&invoice_vatnumber=14188127-2-42&invoice_zipcode=1148&invoice_city=Budapest&invoice_street=Bánki Donát utca 12/b

**Már csak a SalesForm URL kell elé:**

**https://beta.salesform.hu/t/r/video-oktatas-pendrive-on**?name=Bártfai Balázs&telephone=06303512354&email=hello@salesform.hu&invoice_name=Netlight Consulting Kft&invoice_zipcode=1148&invoice_city=Budapest&invoice_street=Bánki Donát utca 12/b


## Használható paraméterek

|      Paraméter          |Leírás|Példa| Kötelező|
|----------------|-------------------------------|-----------------------------|-----------------------------|
|name|Megrendelő neve           |John Doe| Igen
|telephone|Megrendelő telefonszáma	           |+36956621141            | Igen
|email|Megrendelő emailcíme|teszt@example.hu|Igen
|invoice_name|Számlázási  név|John Doe KFT|Igen
|invoice_zipcode|Számlázási irányítószám|1111|Igen
|invoice_street|Számlázási utca, házszám|John Doe Street 22/a/bc|Igen
|invoice_vatnumber|Számlázási adatok adószám|11111111-2-42|Igen
|ship_name|Szállítási adatok név|John Beer|Nem
|ship_zipcode|Szállítási adatok irányítószám|1112|Nem
|ship_city|Szállításo adatok város|Manhooover|Nem
|coupon|Kupon kedvezmény kód|TesztKupon01|Nem
|qty|Mennyiség|1|Nem
|sub|Automatikus posztolás|1|Nem

Ha azt szeretnénk, hogy egyből a banki fizetésre jusson a felhasználó, akkor adjunk meg a "sub" paraméter értkének 1-et

**FONTOS:** Ha használod a sub=1 paramétert, akkor nincs adatellenőrzés. Ha hibásan adod át, akkor hibásan kerül bele a rendszerbe és a számlára is a rendelő adatai.

[## Videó az automatikus posztolásról ##](https://www.youtube.com/watch?v=IEkQQRnGVP4)