Vragen:
1. Moeten wij zelf een frontend maken voor de rover applicatie?

bsn- adress- let op AGV
---
Maken front end voor burger. liest asp. ISS server. Weggeschreven in Microsoft SQL server
Een tweede applicatie (back end). (Autheniceren)
---

---
Je maakt een frontend. Het wordt weggeschreven in een SSQL-server, het staat in een DMZ. Vragen voor burger service's nummers, etc het gaat over AVG; denk daar over na.aantal
Een tweede applicatie; microsoft applicatie moet autheniceren. Alleen voor inloggen (laat die praten met een SQL-server) laat alle records laten zien van alle records van burgers. Nog voorelkaar kan krijgen om die records te kunnen bewerken wordt het beter.

2. Wil je ook graag iets terug zien over de kosten in de requirements?

---
ja, het mag nog niet helemaal. Maar de opdrachtgever wil het graag zien.
---


3. Zijn er meer databases nodig dan alleen die voor de rover applicatie?

---

---


4. Is er een indicatie van hoeveel policies worden er ongeveer van ons verwacht?

---

---
Moet roaming-profiles als policy.
Subdirectory. Homedirectory wordt gelijk aangemaakt als administrator, als administrator kom je niet in die homedirectory. Profiel-directory op server wordt pas aangemaakt als die ingelogde agent uitlogd. NIET: everyone. Wie heeft rechten is de CREATOR-owner. Uiteindelijk wordt het profiel-directory verwijderd van de FAT-client. 
Alle agenten hebben een standaard bureaublad. (mag niet gewijzigd worden)
Verder is redirecten van ..
Wachtwoordverloop, aanpassen van wachtwoorden en complexiteit van wachtwoorden: dat doen we niet/ vragen opdrachtgever (is management).
CREATOR-owner mag alleen file verwijderen
Er is een home directory en een profile directory
ADMINISTRATOR TOEGANG TOT HOME/PROFILE DIR = - PUNT


5. Zijn er specifieke policies die jij graag terug ziet in ons ontwerp?

---
^^^^
---



6. Welke files bevinden zich allemaal op de DC servers waar agenten permissions voor moeten krijgen?

---
home directory, mag alleen die gebruiker inkomen zelfde asl profieldirectory.
---
Homedirectory moet er zijn, profiel-directory ook, een gezamelijke directory voor limburg voor alle agenten. Mag veranderen(aanpassen en lezen) maar origineel blijft altijd bestaan. âlleen de eigenaar kan verwijderen (andere mogen ook verwijderen alleen niet het origineel)
Alle provincies (zouden/) hebben een sharepoint waarbij provincies met elkaar kunnen communiceren.


7. Heb je nog tips voor het koepel overleg met de andere teams en het opzetten van een federation service of trusts? (buiten beslissingen nemen met een kleine groep)

---
eerst kleine groep samenkomts, daarna gehele klas.
---
Het liefst modern, het kan wel met trusts. (Nog te bepalen hoe en wat). Liefst fedaration toch gebruiken en eigenlijk vergeet VOIP, focus leggen op het 'moeilijkere'.

Er zijn ook een aantal dingen waar je nog op terug zou komen en we wilde graag weten of je hier al meer over wist:
1. Is bij jullie het Politie dienstencentrum ook de groep die administrator is in jullie omgeving? of is dat een aparte groep daarbinnen of buiten?

---
T.B.A
---


2. Willen jullie zoiets als een migratie proces om de oude data en accounts mee te nemen?

---
T.B.A
---




NA en DS requirements SCHEIDEN!!!!!!!!!!!!!
Requirements DS kopje en Requirements NA kopje, Functional DS kopje en NON-functional NA kopje, binnen het moscowmodel een scheiding tussen DS en NA (4.1= 4.1.1, 4.1.2 etc,  4.2= 4.2.1, 4.2.2 etc).

Wilt graag iets terugzien in kosten (vooral vanuit de oprachtgever; Eddie)

13 rootservers
.PAT server

Moscow:
Must's
- (5) 5689/*Het netwerk bevat een database voor de rover applicatie waar ze burgerinformatie kunnen wegschrijven.
- (7) medewerkers kunnen gebruik maken van een ingerichte en functionele fat client. Oplossing ~ Meer richting een VPN (RDP-sessie) om zo de profiel-verbindingen te kunnen waarborgen. Toelichting is een 'bureau' dat eigenlijk meer plaatsvindt binnen een cafe waarbij ineens een iso moet worden weggeschreven dit duurt dan te lang met een mogelijke GSM verbinding. Vandaar maak met die GSM verbinding naar een RDP en dan vanuit daar het regelen of iets die richting op? Moet worden aangescherpt worden.A

- (15) Policies niet; meer functionaliteit.
- (17) Gebaseerd zijn op de orginistatiestructuur
- (18) Doen alsof jij voor het apparatuur hebt gekozen
- (19) Genoemd NAT maar is eigenlijk PAT

Should's
- (1) mag naar de bodem (prio is heel laag)
- (2) interne netwerk hoeft geen ipv6 te zijn, webserver wel via ipv6 bereikbaar
- (3) snmp is voldoende (melding met ik loop vol is voldoende)
- (4) minimal??? 1 server (alles erop en eraan)
- (5)
- (4) auto-it is mooi?
- (6) HTTP(S) niet HTTPS
- (7) niet WIFI maar Wi-Fi
- (8) personen niet netwerk.

Could's
Printers toevoegen is leuk (Opdrachtgever Eddie vindt dat interesanter)

***Als iets niet werkt aantonen met wireshark, en onderbouwen.***





opdrachtgever heeft een gruwelijke hekel aan saaie presentatie, maak het levendig.
2 dns server:
    1 = microsoft
    1 = (biens?? naam verkeerd verstaan) 