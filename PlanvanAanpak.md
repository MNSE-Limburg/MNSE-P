
MNSE Project 
Plan van Aanpak
Versie 1.0

---

# 1, Inleiding

Dit document dient als een contract tussen de projectleden en de opdrachtgever, waarin de schaal van het project, de te leveren producten en gemaakte afspraken worden vastgelegd. Voor dit project is Eddie Vagevuur onze opdrachtgever. Eddie en de Politie willen graag hun IT-services meer flexibel, schaalbaar en veiliger maken.

In dit document volgt eerst een korte achtergrond van het project en de opdrachtgever, waarna we vervolgens het probleem van de opdrachtgever aankaarten en de beoogde doelstelling vaststellen. Aan de hand hiervan kunnen we bepalen wat onze opdracht is en welke producten hiervoor uiteindelijk opgeleverd moeten worden. Hierna behandelen we de grenzen van het project, randvoorwaarden en op te leveren producten. We bespreken ook de ontwikkelmethoden die gebruikt gaan worden, de contactinformatie van alle belanghebbende van het project en hoe wij de planning voor ogen zien. Ten slotte kijken we nog naar enkele mogelijke risico's die zich tijdens het project kunnen voordoen en wat we kunnen doen om deze risico's te minimaliseren.

---

# 2. Achtergrond van het project


De maatschappij verandert in een hoog tempo onder invloed van tal van sociale en technologische ontwikkelingen. Om haar taak in de maatschappij goed te kunnen blijven vervullen moet ook de politie ervoor zorgen dat de organisatie en manier van werken zich aanpassen aan veranderende omstandigheden. Nieuwe technologieën, nieuwe dreigingen, nieuwe vormen van criminaliteit en een steeds veranderend wettelijk kader stellen voortdurend nieuwe eisen aan de IT-voorzieningen van de Politie.

Om deze uitdagingen beter het hoofd te kunnen bieden, heeft de Politie zich recent omgevormd in een organisatie met één centrale, landelijke leiding. In de periode daar vóór bestond de Politie uit een aantal regionale politiekorpsen. Het verantwoordelijke ministerie en de leiding van de Politie zagen in dat onafhankelijk van elkaar werkende korpsen steeds minder effectief zouden worden in een wereld die steeds verder integreert en globaliseert. Een effectieve Politie moet nationaal en internationaal kunnen samenwerken, over grenzen van landen en organisaties heen. Medewerkers van de politie moeten onafhankelijk van plaats en tijd hun werk kunnen doen. Interne gegevens moeten van goede kwaliteit en goed beschermd zijn. Externe informatie uit andere organisaties en andere landen moet de Politie hiermee kunnen combineren. Binnen alle geledingen moet de voor politietaken benodigde informatie beschikbaar zijn. Nieuwe technologieën als algoritmen en AI zullen ook hun intrede doen. De bestaande IT-voorzieningen bij de Politie kunnen nog niet aan deze eisen voldoen. Deze stammen nog uit de tijd van de afzonderlijke politiekorpsen en zijn onvoldoende in staat om de tegenwoordig benodigde flexibiliteit te leveren. De beschikbaarheid en ondersteuning van bestaande systemen neemt af en het beheer kost steeds meer tijd en geld. De Politie heeft dringend behoefte aan nieuwe IT-services organisatie die flexibel genoeg zijn om de medewerkers in staat te stellen hun taken optimaal uit te voeren.

---

# 3. Doelstelling, opdracht en op te leveren resultaten

**Probleem**

*Op dit moment gebruikt Plauti een desktopapplicatie die records binnen Salesforce vergelijkt en dubbele records verwijderd. Nu worden deze acties nog handmatig en lokaal uitgevoerd, dit is voor klanten niet een efficiënte oplossing.*

Op dit moment kampt de politie met verouderde IT-voorzieningen die niet voldoen aan de eisen van fexibiliteit, beveiliging en toekomstbestendigheid. Dit verslechterd de effectiviteit van politieprocessen, de samenwerking tussen agenten en het beheer van gegevens.

**Doelstelling**
*Daarom wil Plauti deze taken verplaatsen naar een cloud oplossing waarbij de klant een taak kan starten binnen een webapplicatie. Nadat de taak gestart is wordt, op de achtergrond met behulp van de legacy applicatie, de data in Salesforce vergeleken. Hierdoor hoeven klanten van Plauti straks de applicatie niet meer te downloaden, maar kunnen zij gebruik maken van een cloud oplossing. Met deze cloudoplossing kan Plauti ook het gebruik van hun klanten monitoren.*

Daarom wil  om de IT-infrastructuur van de politie te moderniseren en te optimaliseren. Dit omvat de integratie van opkomende technologieen, het verbeteren van samenwerking tussen agenten, het stroomlijnen van gegevensbeheer, en het verhogen van de efficientie van IT-services. Hierdoor wordt er een moderne, gestandaardiseerde, goed gedocumenteerde en beveiligde IT-infrastructuur gecreeerd.

**Opdracht**

*Om dit te realiseren maken wij voor Plauti een webapplicatie waarin een klant gemakkelijk de legacy applicatie kan starten via de cloud in een docker container. Deze container krijgt een taak meegegeven om de data analyse uit te voeren. Zodra deze taak start wordt de status van de taak weergegeven en het gebruik van de klant wordt opgeslagen, zodat er in de toekomst een betaalsysteem aan de applicatie gekoppeld kan worden. Deze applicatie moet de mogelijkheid bieden tot auditing.*

De opdracht omvat het ontwerpen en implemnteren van een geintegreerde IT-infrastructuur, het migreren van verouderde systemen naar moderne alternatieven, het ontwikkelen van uniforme inlog- en toegangsbeheersystemen, het creeren van ee beleidskader voor informatiebeveiliging, het implemteren van strengere toegangscontroles en het vervangen van veroude applicaties.

### 3.1 Concrete Resultaten

# 4. Projectgrenzen
Om de deliverables te verder te verduidelijken zijn er een aantal projectgrenzen opgesteld. Dit houdt in dat deze onderdelen niet gerealiseerd gaan worden.

### Projectduur
Het project duurt in zijn geheel acht werkweken, van 6 November 2023 tot en met 12 januari 2023.
Gedurende deze periode zijn er vakantiedagen waar wij niet aan het project zullen werken. Dit is de kerstvakantie en deze duurt van 23 December 2023 tot 7 Januari 2024.

### Proof of Concept (PoC)
Tijdens het project word er enkel een PoC gerealiseerd. Het doel van een PoC is om op kleine, maar representatieve schaal het gemaakte TO en de gemaakte ontwerpkeuzes te implementeren en beproeven. Niet het gehele TO wordt dus uitgewerkt.

### VOIP
Er wordt gebruikgemaakt van standaard VOIP applicaties, deze worden niet zelf gemaakt.

### 

# 5. Randvoorwaarden
Om het project op tijd en met de gewenste kwaliteit op te leveren, horen er een aantal zaken geregeld te zijn. Mocht dit niet het geval zijn dan kan er vertraging oplopen.

- De opdrachtgever van de politie (Eddie Vagevuur) dient binnen 24 uur te reageren op vragen tijdens werkdagen. Als de opdrachtgever nodig is voor het nemen van beslissingen of het geven van feedback gebeurt dat binnen 24 uur. Dit gaat via e-mail, Teams of face-to-face.

- Ieder projectlid heeft een werkende laptop met internetverbinding tot zijn beschikking. Op deze laptop heeft het projectlid toegang tot: ISAS, Teams, Outlook, Github, Visual studio code, cmd, PuTTY. 

- Na iedere sprint is de opdrachtgever van de politie (Eddie vagevuur) kort beschikbaar voor een presentatie van ongeveer een halfuur. Tijdens deze presentatie laten wij zien wat er is gerealiseerd.

- De opdrachtgever is zich er ten alle tijden van bewust dat de eisen van het schoolproject boven de eisen staan van de opdrachtgever.


---

# 6. Op te leveren producten en kwaliteitseisen uit te voeren activiteiten 

| **Product** | **Productkwaliteitseisen (SMAR(T))** | **Benodigde activiteiten om tot het product te komen** | **Proceskwaliteitseisen (5XW 1xH)** |
| ------- | -------------------------------- | -------------------------------------------------- | ------------------------------- |
|         |                                  |                                                    |                                 |
|         |                                  |                                                    |                                 |

---

# 7. Ontwikkelmethoden

Tijdens dit project werken wij met een aangepaste vorm van SCRUM. Een van de aanpassingen op scrum voor dit project houdt in dat we geen product owner in het team hebben maar een product owner by proxy. 

De scrum rollen binnen het project zijn:

Week 1-4:

Week 5-8:


**Retrospective**

Gedurende dit project hanteren wij een andere vorm van Scrum. In deze vorm wordt de retrospective voor de sprint review gehouden. Dit wordt gedaan zodat wij voor de sprint review weten wat er fout ging en wat er de volgende sprint anders kan.

---

# 8. Project organisatie


---

# 9. Planning

| Activiteit                                             | Startdatum       | Einddatum         | Op te leveren product                                            |
| ------------------------------------------------------ | ---------------- | ----------------- | ----------------------------------------------------------------- |
| **PreGame**                                            | 06-11-2023       | 10-11-2023        | Uitvoeren van de sprint invullen zoals gegeven bij de sprintplanning |
| Project Startup                                        | 06-11-2023       | 07-11-2023        |                                                                 |
| Inleveren Plan van Aanpak                              | 06-11-2023       | 10-11-2023 16:00  | Eerste versie Plan van Aanpak                                     |
| Interview Opdrachtgever                                | 07-11-2023       |                   |                                                                    |
| Concept requirementsspecificatie                       | 07-11-2023       | 10-11-2023        | Concept requirementsspecificatie                                  |
| **Sprint 1 (Analyse)**                                 | 13-11-2023       | 24-11-2023        |                                                               |  
| Requirementsspecificatie                               | 13-11-2023       | 24-11-2023        | Requirementsspecificatie                                          |
| Onderzoek technisch implementatie                      | 13-11-2023       | 24-11-2023        | Onderzoek technisch implementatie                 |
| Presentatie voor opdrachtgever                         | Week 3           | Week 3            | 
| **Sprint 2 (Ontwerp, bouw)**                           | 27-11-2023       | 08-12-2023        |
| Tussentijdse inlevering verantwoording projectbijdrage |                  | 01-12-2023        | Verantwoording projectbijdrage                                   |
| Tussentijdse inlevering producten                      |                  | 01-12-2023        | Product                                                         |
| **Sprint 3 (Ontwerp, bouw, test)**                     | 11-12-2023       | 23-12-2203        |
| **Sprint 4 (Ontwerp, bouw, test)**                     | 08-01-2023       | 12-01-2023        |
| Technisch ontwerp                                      | 04-12-2023       | 12-01-2023        | Technisch ontwerp                                 |
| inlevering verantwoording projectbijdrage              | 06-11-2023       | Week 8            | Verantwoording projectbijdrage                                   |
| inlevering producten                                   | 27-11-2023       | Week 8            | Product                                                         |
| **PostGame**                                           | 15-01-2023       | 26-01-2023        |
| Testplan PoC                                           | Week 9           | Week 9            | Testplan PoC
| Eindpresentatie                                        | Week 9/10        | Week 9/10         |                                                                 |

---

### Efficiënte en Inefficiënte uren

Voor bepaalde onderdelen van het project zal inzicht van begeleiders nodig zijn om er zeker van te zijn dat de kwaliteit van het product goed gekeurd kan worden.
De inhoudelijke onderdelen van alle op te leveren producten zullen hierbij gekeurd worden door de opdrachtgever. Bij het persoonlijke verslag zal de Professional skills begeleider hierbij betrokken zijn.

---

# 10. Risico’s

| Risico                                 | Kans   | Impact | Tegenmaatregel                       | Uitwijkstrategie                                      |
| -------------------------------------- | ------ | ------ | ------------------------------------ | ---------------------------------------------------   |
| Laptop van een teamlid stuk            | Middel | Middel | Goed voor je eigen apparatuur zorgen | Deze persoon zal thuis achter een PC moeten werken.   |
| Contactpersoon niet bereikbaar         | Middel | Groot  | Vragen naar een ander contactpersoon | Aannames doen over de opdracht                        |
| Communicatiemiddelen functioneren niet | Klein  | Middel | Informeren status communicatiemiddel | Uitwijken naar ander platform                         |
| Project apparatuur loopt schade op     | klein  | Middel | Afwachten op nieuw apparatuur        | Work arround / verder werken zonder werkende omgeving | 
| Apparatuur Arnhem is niet bereikbaar   | klein  | Middel | lokaal troubleshooten                | Onsite troubleshooten                                 |


In deze tabel zijn de risico's in kaart gebracht. Er zijn veel risico's waarbij de kans klein is dit dit gebeurd. Wel hebben deze een redelijke grote impact waardoor veel tijd verloren kan worden door de impact. Belangrijk is dat hier dus goed rekening mee wordt gehouden.

---

# 11. Bronnen