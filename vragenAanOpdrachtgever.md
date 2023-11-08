# Zet hier de vragen voor de opdrachtgever

Welkom

voorstel rondje



Vragen:

1. In de casus beschrijven jullie dat jullie graag zien dat medewerkers met 1 account inloggen en overal bij kunnen. Nu maken wij een proof-of-concept voor 1 provincie, moeten wij ook rekening houden met dat er van buiten af ook ingelogd kan worden? Anders gesteld: moeten wij rekening houden met andere provincies?

Geen dubbele accounts, 1 account inloggen waar het mag. Wij kunnen 'als goed is' bij alle proviencies komen. Proof-of-concept voor Limburg maar wel kan inloggen bij een andere provincie. Impementeren met andere teams (backbone..).

1. De opdracht omschrijft dat gebruikers hun inloggegevens nog maar 1 keer hoeven in te voeren,  hoe ziet u dat voor u? (gaat dit alleen over toegang op de provincie of ook daarbuiten?) 

Je moet altijd opnieuw inloggen, op de computers waarop je inlogd word en wegschreven als je uitlogd. Het moet zo zijn op het moment dat je uitlogd dat er wel op de server een profiel wordt aangemaakt maar niet bestaat op de workstation. Roaming-profile!

1. Zien jullie graag een forrest als active directory of moet alles onder 1 domein vallen.(in een provincie)

Dat moet nog onderzoekt worden. Onderbouwen. **Limburg.Local als naam GEEN Limburg.politie.nl** gaat anders niet goed met .www

2. De applicatie ROVER wordt redelijk expliciet genoemd in de opdracht, is het de bedoeling dat wij daar iets mee doen? (valt redelijk buiten onze kaders namelijk)

Er moet internet toegang zijn vanaf het internet. Je krijgt een VPN ter beschikking hiervoor. 2 kanten bereikbaar. Zelf een oplossing bouwen, krijgt geen oplossing daarvoor. 'Maak het niet te mooi' functionaliteit iets met BSN en dat soort zaken allemaal, houden aan de AVG. Het moet gerigistreert worden in een SQL-database.

1. Welke mate van centralisatie zien jullie graag?(aangezien er bij crisisteams het nu vaak veel tijd kost om apparatuur te verhuizen)?

Roaming profiles zet je op je desktop een iso. Moet je over na denken een stukje beleid moet worden geschreven. Hoe ga ik die hele district-situate handlen. Je praat over 60k werkplekken, hou in gedachten niet iedereen 24/7 per dag. Alles moet worden georganiseerd, de grotere kantoren met eigen dc en kleinere kantoren met .. . Terminal-server-verbinding inloggen op het geheel (verkom je dat profielen over een hele trage lijn gaan). RDS van Microsoft kan je daarvoor gebruiken maar ook bijvoorbeeld proxmox een hyperviser. Je moet overleggen met andere provincies voor werking.

1. Lokale beheerders plaatsen nu de routers en switches, ik neem aan dat wij daar verantwoordelijk worden maar verder geen beleid oid daar hoeven te schrijven?

hoeft niet meer.

1. Kan ik aannemen dat jullie graag redundancy zien voor de DNS services aangezien het nu als crisis wordt gezien ?
   
Is nog geen verplichting (is dit een extra?)

2. Wat zien jullie graag in de technische documentatie terug?

Een overview hebben: duidelijk, een L2 en L3 tekening. Wordt uitgeprint.
   
3. Wat houdt een district precies in bij jullie?

4. Er wordt gezegd dat een provincie of district meerder locaties kan bevatten. Houdt dit in principe gewoon in dat het aantal extra kantoren variabel moet kunnen zijn

5. Wat is voor jullie een basis team? (elk district is een basis team)
   

   
5. Wat is jullie definitie van een korps?

AGDLP moet worden gebruikt.

6. Is het onze verantwoordelijkheid om de streefdatums op te stellen voor de migratie naar IPv6?

Liefst alleen IPv6.

7. De DMZ bevat uiteraard alleen front-ends hebben jullie software of dingen die wij daar voor jullie in moeten plaatsen of hoeven wij alleen een DMZ te creeren?

DMZ is er meer niet. Webserver hoeft niet beveiligd te worden. 2x firewalls hoeft niet alle regels hebben.

8. Willen jullie zoiets als een migratie proces om de oude data en accounts mee te nemen?

Komt op terug.


9.  Moeten wij het nationaal niveau mee nemen in ons ontwerp? (bv korpsleiding en landelijke eenheid)

Overleg tussen de verschillende groepen (provincies).


10. Is bij jullie het Politie dienstencentrum ook de groep die administrator is in jullie omgeving? of is dat een aparte groep daarbinnen of buiten?

Komt op terug.


11. In de casus wordt gesproken over organisatorische, fysieke en technische maatregelen voor informatiebeveiliging. Hebben jullie hier al een beeld van? Of moeten wij daar een voorstel voor doen?

Mooiste zal zijn stel: hele team binnen de HAN waarbij ik als simpele docent alle teams kan verwijderen, dat wil ik niet. Nadenkt over een directory structuur waarbij je een folder kan maken binnen een folder kan neerzetten iemand anders het kan lezen. Creator-Owner (niet nadenken over VPN's, Firewalls is wel volgend project).


12. Er wordt aangegeven dat er op alle systemen monitoring komt, is het dan alleen op een inlogbasis(Inloggen op netwerkapparatuur en bekijken) of moet dit ook kunnen worden getoond of wil je dit opslaan in een centrale database en weergeven in een dashboard of met uptime kuma?

Basis tools van microsoft is voldoende (de rest is het volgende project). SMTP..


13. Hoeveel werkplekken bevat een districtskantoor?

Zelf inschatten.


14. Hebben jullie een lijst met de resources en eventueel ook een lijst wie daar recht op heeft?

Zet een netwerk op.


15. De perimiter tussen intern en extern. Hoe zou een medewerker (extern) gebruik kunnen maken van interne diensten? (liever vpn/tunnel).

Is opgezet.

16. Wat zijn de eisen aan authenticatie (Alleen password/ MFA).
Nee

17. in de building blocks, wat wordt er bedoeld met hierarchische dns omgeving?
Het liefst, je hebt een DNS omgeving bindt en een DNS omgeving ..

18. Wat moet er nog meer in de DMZ buiten de webservices en eventuele VPN? (DNS, etc??)
19. Wordt er met 



Infrastructuur:
1 DMZ (bij de DC ook toegang naar andere systemen gaat hier)
1 DC in de provincie(hier kan alles op draaien van de provincie omdat hier de redundancy inzit) 
2 District servers, bevatten veel werkplekken, elk district heeft minimaal 2 basisteams
-- Fysieke locaties kunnen meerdere korpsen omvatten en Provincie of district kunnen meerdere locaties bevatten.






1. Is het oke om de documentatie in markdown aan te leveren? (Lieft alles )
2. Heb je nog vragen voor ons?


Rekening houden met provicies. Provicies kunnen bereiken
medewerker van gelderland kan naar limburg inloggen bijv.
Met andere provicies kunnen communiceren
komt een backbone waaraan wij verbinden.
agent.piet.limburg kan inloggen bij brabant bijvoorbeeld.
Wordt weggeschreven als je uitlogd.
uitlogd: profiel op server romain profile.
limburg.local
ROVER: burgers kunne spullen in kwijt. is benaderbaar via internet. Ook vanaf AD bereikbaar (BSN, hou aan de provacy wet, mSQL database regestreren) 
Zelf eens service opzetten om hier mee te communiceren
Maak het niet te mooi^
Hoe devaineer je een districtie: 
Beleid opschrijven: accounts.
alle 7000 accounts organiseren
REad only domain controller.
terminal server verbinding: inloggen op geheel. (vertualisatie RDS/ Hyperviser)
redundantie services. (let op is should eerst must)
TO wat moet erin: overview, l2 tekening, l3 tekening: Duidelijk en leesbaar. Altijd onderbouwen, waarom niet anders (litaratuur vermelding)
plan implementatie ook fysiek
rekening houden met de kosten.
geef ierdereen eigen werkstation?
korps = management
AGDLP required
liefst IPv6. Verras eddie
DMZ: is er al. webserver 
nationaal nivuea is overleg met de groepen.

nadenken directory structuur rechten en permissies.
Monitoren doe makkelijk, basic tools. SNMP
zelf inschatten werkplek.
Geen MFA
Building bloks DNS. read only dns omgeving


