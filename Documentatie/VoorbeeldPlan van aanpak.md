# OOSE-Project -- Plan van aanpak

- [OOSE-Project -- Plan van aanpak](#oose-project----plan-van-aanpak)
  - [1. Inleiding](#1-inleiding)
  - [2. Achtergrond van het project](#2-achtergrond-van-het-project)
  - [3. Doelstelling, opdracht en op te leveren resultaten voor het bedrijf en school](#3-doelstelling-opdracht-en-op-te-leveren-resultaten-voor-het-bedrijf-en-school)
    - [3.1 Concrete Resultaten](#31-concrete-resultaten)
  - [4. Projectgrenzen](#4-projectgrenzen)
    - [Projectduur](#projectduur)
    - [Grenzen](#grenzen)
  - [5. Randvoorwaarden](#5-randvoorwaarden)
  - [6. Op te leveren producten en kwaliteitseisen en uit te voeren activiteiten](#6-op-te-leveren-producten-en-kwaliteitseisen-en-uit-te-voeren-activiteiten)
  - [7. Ontwikkelmethoden](#7-ontwikkelmethoden)
  - [8. Projectorganisatie en communicatie](#8-projectorganisatie-en-communicatie)
    - [Contactpersonen](#contactpersonen)
    - [Belangrijke gespreksmomenten tijdens het project](#belangrijke-gespreksmomenten-tijdens-het-project)
    - [Contact gegevens projectgroep](#contact-gegevens-projectgroep)
    - [Kwaliteitswaarborging](#kwaliteitswaarborging)
    - [Gemaakte afspraken binnen de projectgroep](#gemaakte-afspraken-binnen-de-projectgroep)
  - [9. Planning](#9-planning)
    - [Efficiënte en Inefficiënte uren](#efficiënte-en-inefficiënte-uren)
  - [10. Risico’s](#10-risicos)
  - [11. Bronnen](#11-bronnen)

## 1. Inleiding

Dit document dient als een contract tussen de projectleden en de opdrachtgever, waarin de schaal van het project, de te leveren producten en gemaakte afspraken worden vastgelegd. Voor dit project is Plauti onze opdrachtgever. Plauti wil graag hun bestaande product moderniseren en eenvoudiger inzetbaar maken.

In dit document volgt eerst een korte achtergrond van het project en de opdrachtgever, waarna we vervolgens het probleem van de opdrachtgever aankaarten en de beoogde doelstelling vaststellen. Aan de hand hiervan kunnen we bepalen wat onze opdracht is en welke producten hiervoor uiteindelijk opgeleverd moeten worden.
Hierna behandelen we de grenzen van het project, randvoorwaarden en op te leveren producten. We bespreken ook de ontwikkelmethoden die gebruikt gaan worden, de contactinformatie van alle belanghebbende van het project en hoe wij de planning voor ogen zien. Ten slotte kijken we nog naar enkele mogelijke risico's die zich tijdens het project kunnen voordoen en wat we kunnen doen om deze risico's te minimaliseren.

---

## 2. Achtergrond van het project

Voor dit project hebben we een opdracht gekregen van het bedrijf Plauti, een bedrijf dat datamanagementoplossingen maakt voor Salesforce. Een van deze oplossingen is een bestaande applicatie die data analyses uitvoert. Deze legacy applicatie moet getransformeerd worden naar een SaaS oplossing. Concurrenten van Plauti bieden hun diensten al aan als SaaS oplossing en Plauti loopt daarom inkomsten mis.

Plauti heeft vooral klanten in het buitenland en dus ook veel Engelssprekend personeel. Omdat iedereen binnen Plauti met deze applicatie overweg moet kunnen zal alle documentatie en code in het Engels geschreven worden.

De opdrachtgever, Ruud Schuurmans, heeft ons gevraagd om een cloud omgeving te maken waarin gebruikers de applicatie van Plauti kunnen draaien. Deze applicatie van Plauti vindt dubbelingen in een database en zorgt er bijvoorbeeld voor dat bedrijven geen dubbele contactgegevens in hun data hebben.

De applicatie draait momenteel als een desktopapplicatie en in de commandline. Plauti heeft de opdracht gegeven om hun product om te zetten naar een cloud oplossing zodat hun klanten op een moderne manier kunnen inzetten. Met deze oplossing hoeven klanten de applicatie niet meer te downloaden en kunnen zij een beter inzicht krijgen in het gebruik van de applicatie.

**Stakeholders**

_Klanten_:
De klanten van Plauti willen graag een gemakkelijke en moderne oplossing hebben om de huidige applicatie van Plauti te gebruiken zonder deze te downloaden.</br>

_Salesafdeling_:
De salesafdeling van Plauti gaat de oplossing aanbieden aan klanten en moeten dus deze oplossing kunnen uitleggen aan de klant.</br>

_ontwikkelaarsteam Plauti_:
Na de overdracht van het product, naar de opdrachtgever, wordt de software overgedragen aan het ontwikkelaarsteam binnen Plauti.
Deze kunnen dan onze software onderhouden. </br>

De Hogeschool van Arnhem en Nijmegen gaat het op te leveren product in combinatie met het process van het ontwikkelen hiervan beoordelen. Aan de hand van deze beoordeling krijgt de projectgroep een cijfer.

---

## 3. Doelstelling, opdracht en op te leveren resultaten voor het bedrijf en school

**Probleem**

Op dit moment gebruikt Plauti een desktopapplicatie die records binnen Salesforce vergelijkt en dubbele records verwijderd. Nu worden deze acties nog handmatig en lokaal uitgevoerd, dit is voor klanten niet een efficiënte oplossing.

**Doelstelling**

Daarom wil Plauti deze taken verplaatsen naar een cloud oplossing waarbij de klant een taak kan starten binnen een webapplicatie. Nadat de taak gestart is wordt, op de achtergrond met behulp van de legacy applicatie, de data in Salesforce vergeleken. Hierdoor hoeven klanten van Plauti straks de applicatie niet meer te downloaden, maar kunnen zij gebruik maken van een cloud oplossing. Met deze cloudoplossing kan Plauti ook het gebruik van hun klanten monitoren.

**Opdracht**

Om dit te realiseren maken wij voor Plauti een webapplicatie waarin een klant gemakkelijk de legacy applicatie kan starten via de cloud in een docker container. Deze container krijgt een taak meegegeven om de data analyse uit te voeren. Zodra deze taak start wordt de status van de taak weergegeven en het gebruik van de klant wordt opgeslagen, zodat er in de toekomst een betaalsysteem aan de applicatie gekoppeld kan worden. Deze applicatie moet de mogelijkheid bieden tot auditing.

### 3.1 Concrete Resultaten

**Webapplicatie**

De webapplicatie zal geschreven worden met het front-end framework [VueJS](https://vuejs.org/). De UI van deze applicatie zal bare-bones zijn. De applicatie zal gebruik maken van de Salesforce API om data uit Salesforce beschikbaar te maken binnen de applicatie. Aan de hand van deze API zullen gebruikers geauthenticeerd worden zodat deze gebruik kunnen maken van het dashboard. Onze applicatie gebruikt [NodeJS](https://nodejs.org/en/) om te communiceren met de Azure omgeving.

**Azure Omgeving**

De [Azure](https://azure.microsoft.com/en-us/) omgeving van Plauti bevat een webserver waar de webapplicatie in draait. Ook bevat de Azure omgeving een containerized versie van de legacy applicatie. Deze containerized versie kan gestart worden vanuit de webapplicatie. Tot slot bevat de Azure omgeving een database waarin de logs opgeslagen worden.

**Software Requirements Specification**

Gedurende dit project zal er een SRS (Software Requirements Specification) opgesteld worden waarin alle actoren die het systeem zullen gebruiken beschreven worden, de hardware omgeving beschreven wordt waar de software in zal functioneren, items of problemen die de opties voor ons zullen beperken en belangrijke functies die het product moeten kunnen uitvoeren. In dit document staan ook alle usecases beschreven met waar nodig system sequence diagrams en operatie contracten. Ook staan in dit document functionele requirements die niet bij een usecase horen en alle niet functionele requirements. Tot slot worden in dit document user interface sketches opgenomen.

**Software Design Description**

Ook zal er een SDD (Software Design Description) opgesteld worden. In dit document is een overzicht van het architecturaal design te vinden. In het SDD staat ook een gedetailleerde design omschrijving met daarin een 'Deployment Diagram' met ontwerpkeuzes. Ook worden hier alle sub systemen beschreven met de bijbehorende Design Class Diagrams, Sequence Diagrams, Activity Diagrams en State Diagrams. Tot slot worden er ook nog ontwerpkeuzes per sub systeem beschreven.

**Individueel projectverslag**

Om als individueel lid verantwoording af te leggen voor alle verrichte werkzaamheden en gemaakte keuzes die we hebben gemaakt in het project maken we allemaal individueel een projectverslag. In dit verslag verantwoorden wij de kwaliteit van de door onszelf (deels) gemaakte producten. Ook worden de rollen die iedereen heeft gehad in het project inzichtelijk gemaakt en wordt er per competentie die je moet laten zien een toelichting beschreven. Er wordt in dit verslag concreet gemaakt hoe er aan de leerdoelen is gewerkt en welke vooruitgang gemaakt is. In het persoonlijk projectverslag staat ook ieders persoonlijke factsheet.

**Onderzoeksrapporten**

Gedurende het project zal ieder teamlid individueel een onderzoek uitvoeren. Dit doen we om informatie te vergaren over een onderwerp waar we als team nog niet bekend mee zijn. Deze onderzoeken zullen uitgevoerd worden zoals aangeleerd is tijdens de course [(OOSE-DEA, 2022)](https://han.onderwijsonline.nl/elearning/lesson/dNwmkRXD). Aan de hand van dit onderzoek wordt een onderzoeksrapport opgesteld en opgeleverd.

**Oplever documentatie**

Om het geheel op te leveren, maken wij als team een document met daarin de benodigde stappen en vereisten om de applicatie op te zetten en op te starten.
In dit opleverdocument vind je welke stappen nodig zijn om de applicatie op te zetten, daarvoor kan het bijvoorbeeld nodig zijn om diverse tokens of accounts te hebben.
Ook kan het nodig zijn om een `.env` bestand aan te maken die voor de server beschikbaar is, wij maken een opzet hiervoor en leggen in de opleverdocumentatie uit hoe je aan deze waardes kan komen en waar ze in te vullen.
Volgend zijn de stappen nodig om de applicatie voor het eerst op te starten en daarna te gebruiken.

---

## 4. Projectgrenzen

Een aantal projectgrenzen zijn opgesteld om duidelijk te maken wat opgeleverd wordt tijdens de oplevering van het eindproduct.

### Projectduur

Het project duurt in zijn geheel acht werkweken, van 11 april 2022 tot en met 10 juni 2021.
Gedurende deze periode zijn er vakantiedagen waar wij niet aan het project zullen werken, dit zijn de volgende data:

- 15 april 2022 - Goede vrijdag
- 18 april 2022 - Tweede Paasdag
- 27 april 2022 - Koningsdag
- 2 mei 2022 t/m 8 mei 2022 - Meivakantie
- 26 & 27 mei 2022 - Hemelvaartsdag
- 6 juni 2022 - 2e Pinksterdag

### Grenzen

Om duidelijk te maken welke onderdelen we wel of juist niet maken, zijn de volgende punten beschreven om rekening mee te houden tijdens dit project.

**Authenticatie**

Voor dit systeem maken we gebruik van de door Plauti en Salesforce geleverde OAuth authenticatie, dit houdt in dat we voor de authenticatie van gebruikers, gebruik maken van aangeleverde tokens en we zelf geen authenticatie systeem gaan maken. Omdat er gebruik gemaakt wordt van een token based systeem maken we ook geen loginsysteem.

**User Interface**

Omdat we tijdens dit project maar beperkt de tijd hebben heeft Plauti ons gevraagd om ons vooral te focussen op de functionaliteit van het product en niet op de user interface. Daarom maken we voor dit product alleen maar een barebones GUI op basis van een framework waar we niet te veel tijd aan hoeven te besteden.

**Betalingssysteem**

Voor het Plauti SaaS systeem is ons gevraagd om het gebruik van de containers op te slaan. Met als doel om uiteindelijk klanten per minuut te laten betalen. Het is daarbuiten niet de bedoeling om ook het betaalsysteem dat hierbij hoort te implementeren. We zorgen alleen voor de mogelijkheid om dat later toe te voegen.

**Microservices**

Om de bestaande applicatie als SaaS-oplossing aan te bieden maken we gebruik van Docker containers. Voor dit project maken wij alleen een docker container die de aangeleverde legacy app kan draaien. We gaan geen Docker Kubernetes of andere microserviceoplossing maken om deze applicatie op te draaien.

---

## 5. Randvoorwaarden

Om het project voor Plauti succesvol uit te voeren is het van belang om een aantal randvoorwaarden op te stellen. Aan de randvoorwaarden moet voldaan worden zodat tijdig en succesvol de opdracht afgerond kan worden. Mocht niet aan deze voorwaarden worden voldaan dan zou dit problemen kunnen opleveren tijdens de projectperiode.

De randvoorwaarden zijn als volgt:

- De opdrachtgever van Plauti, Ruud Schuurmans, reageert binnen 24 uur op vragen tijdens werkdagen. Als de opdrachtgever nodig is voor het nemen van beslissingen of het geven van feedback gebeurt dat ook binnen 24 uur. Dit gaat via email, Teams of fysiek op locatie.

- Tijdens het project heeft ieder projectlid een werkende laptop met een internetverbinding en daarop toegang tot de volgende programma's: Microsoft Teams, Confluence, Visual Studio Code, OnderwijsOnline, ISAS.

- Na iedere iteratie is de opdrachtgever van Plauti beschikbaar voor een gesprek fysiek op locatie of via Teams waarin hij feedback kan geven op de tot dan toe gerealiseerde producten. Dit kan ook tijdens de sprint review zijn.

- De opdrachtgever is zich er ten alle tijden van bewust dat de eisen van het schoolproject boven de eisen staan van de opdrachtgever.

- De opdrachtgever levert het prettier configuratie bestand voordat wij beginnen aan het ontwikkelen van de frontend zodat wij aan alle kwaliteitseisen kunnen voldoen.

---

## 6. Op te leveren producten en kwaliteitseisen en uit te voeren activiteiten

| **Product**         | **Productkwaliteitseisen (SMAR(T))**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | **Benodigde activiteiten om te komen tot het product**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | **Proceskwaliteitseisen (5XW 1xH)**                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| ------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| SRS                 | - Het SRS sluit aan op het SDD. </BR> - Het SRS sluit aan op de code. </BR> - Het SRS bevat alle onderdelen zoals ze omschreven staan in [(SRS Template, 2022)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/System+Requirements+Specification+Template). </BR> - Alle usecases uit het usecase diagram zijn uitgewerkt in fully dressed format. </BR> - Diagrammen met betrekking tot OO hebben een alternatief diagram in de vorm van een C4 model. </BR> - Alle andere diagrammen zullen voldoen aan de UML standaarden. </BR> - Niet functionele requirements zijn opgesteld volgens het FURPS principe. [(FURPS, 2022)](https://www.linkedin.com/pulse/conjoining-furps-moscow-analyse-prioritise-jonathan-dyson/) </BR> - Functionele requirements zijn [(SMART, 2022)](https://www.scribbr.nl/modellen/smart-methode/) opgesteld. [(Slagen voor het OOSE-project, 2022)](https://han.onderwijsonline.nl/elearning/lesson/dyA1dgBy) | - Introductie schrijven met user classes en andere onderdelen zoals beschreven in [(SRS Template, 2022)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/System+Requirements+Specification+Template) </BR> - Use cases opstellen. </BR> - Use case model maken </BR> - Use cases uitwerken tot fully dressed format. </BR> - Andere functionele en niet functionele requirements beschrijven. </BR> - Wireframes maken en beschrijving toevoegen.                                                                                                                                                                                                                                                   | - Gedurende de sprints wordt het SRS bijgewerkt. Dit doen we om te ontwikkelen op basis van een functioneel ontwerp. Na dat een taak van het SRS voltooid is, gaat een ander teamlid de samenhang van het SRS en code beoordelen, waarna eventuele feedback verwerkt kan worden. </BR> - Na het maken van het SRS kijken we in samenspraak met de opdrachtgever of het SRS beschrijft wat de opdrachtgever wil. </BR> - Nadat een taak voltooid is, wordt door een ander teamlid de documentatie gereviewed of het SRS nog aansluit op het SDD.                                                                                                    |
| SDD                 | - SDD sluit aan op het SRS </BR> - SDD sluit aan op de code. </BR> - Diagrammen met betrekking tot OO hebben een alternatief diagram in de vorm van een C4 model. </BR> - Het SDD bevat alle onderdelen zoals ze omschreven staan in [(SDD template)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/Software+Design+Documentation+Template). </BR> - Een ontwikkelaar kan met het SDD begrijpen hoe de code integreert met elkaar, en waarom gekozen is voor deze code. </BR> - Het SDD bevat design decisions, patterns en principles. Zoals omschreven in [(RefractoringGuru, 2022)](https://refactoring.guru/design-patterns).                                                                                                                                                                                                                                                                                                          | - Code onderzoeken, infrastructuur onderzoeken, onderzoekgegevens notuleren en verwerken naar juiste diagrammen: </BR> - deployment diagram, </BR> - design class diagram, </BR> - sequence/state & activity diagrams.</BR> - Code onderzoek verwerken naar code decisions </BR> - Database model/design verwerken.                                                                                                                                                                                                                                                                                                                                                                                     | - We maken het SDD om te ontwikkelen op basis van een technisch ontwerp. </BR> - Nadat een taak voltooid is, wordt door een ander teamlid de documentatie gereviewed of het SDD nog aansluit op de code en op het SRS.                                                                                                                                                                                                                                                                                                                                                                                                                             |
| Opleverdocument     | - Opleverdocument is in het engels. <BR> - Voldoet aan de NPR5325 zoals omschreven in [(NEN, 2022)](https://www.nen.nl/npr-5325-2017-nl-238298). <BR> - Doormiddel van dit document moet het ontwikkelteam van Plauti de applicatie kunnen onderhouden en opzetten.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | - Schrijven oplever documentatie                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | - Aan de hand van het opleverdocument wordt door het team beoordeeld of de applicatie opgezet en gebruikt kan worden. <BR> - Na het schrijven van het opleverdocument zullen wij naar de opdrachtgever stappen voor goedkeuring van dit document.                                                                                                                                                                                                                                                                                                                                                                                                  |
| Webapplicatie       | - Code bevat unittests voor zowel Node.js als Vue.js deze slagen voor 100% </BR> - Integratie tests voor de Node.js API en voldoen aan de ESlint en Prettier config files. </BR> - Er komen geen errors of warnings uit de tests. </BR> - De code wordt automatisch getest door middel van Jenkins(CI). </BR> - De code en de user interface zijn in het engels geschreven. </BR> - Voldoet aan DoD.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | - Er wordt een VueJs applicatie gemaakt. </BR> - Er wordt een NodeJS applicatie gemaakt. </BR> - Er wordt gecommuniceerd met de Azure omgeving. </BR> - Binnen de webapplicatie is een login knop die doorverwijst naar de Salesforce login webpagina. </BR> - De OAuth tokens worden meegestuurd naar de NodeJS API voor authenticatie. </BR> - De NodeJS applicatie verifieert de klant door middel van de tokens naar de Salesforce API. </BR> - Er worden components gemaakt voor het dashboard, de job-list en modals voor nieuwe jobs, stoppen van een job en het inzien van container gebruik. </BR> - De UI structuur van de front-end komt overeen met de low-fidelity wireframes uit het SRS. | Als een teamlid een taak oppakt dan wordt hiervoor een nieuwe branch aangemaakt. Zodra deze taak op `Ready for review` komt te staan dan wordt deze gereviewed door een ander teamlid, als de feedback is verwerkt dan kan de branch gemerged worden in de development branch. </BR> - Alle code wordt geschreven volgens de code afspraken die binnen het team zijn gemaakt. [(Code afspraken, 2022)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/Code+afspraken) </BR> - Wanneer de code getest is op de development branch en alle code en functionaliteit correct functioneert, dan wordt deze code met de production branch gemerged. |
| Azure omgeving      | - De Azure omgeving sluit aan op het SRS. </BR> - De Azure omgeving sluit aan op het SDD. </BR> - De Azure omgeving sluit aan op de webapplicatie. </BR> - Voldoet aan [(Best Practices in Azure, 2022)](https://docs.microsoft.com/en-us/azure/architecture/best-practices/index-best-practices) </BR> - Voldoet aan DoD.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | - Onderzoek verslag doen naar de werking van Azure. </BR> - Instellen Azure database </BR> - Instellen Azure webserver </BR> - Instellen Azure containerized legacy applicatie                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | - De werking van Azure wordt getest door integratie testen om zo met zekerheid te kunnen zeggen dat dit goed werkt. </BR> - De azure omgeving met bijbehorende instellingen wordt na het uitwerken daarvan nagelopen door de opdrachtgever. Zo weten we zeker dat deze aansluit op de eisen van de opdrachtgever                                                                                                                                                                                                                                                                                                                                   |
| Plan van Aanpak     | - Voldoet aan de eisen gesteld in de toelichting op het PvA. [(Toelichting op PvA 3.1, 2022)](https://han.onderwijsonline.nl/elearning/lesson/BylE7r8D)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | - Algemene inleiding van het document beschrijven. </BR> - Achtergrond van het project beschrijven. </BR> - Doelstelling en de opdracht beschrijven. </BR> - Projectgrenzen en randvoorwaarden beschrijven. </BR> - Op te leveren producten met kwaliteitseisen beschrijven. </BR> - Ontwikkelmethode beschrijven. </BR> - Projectorganisatie en communicatie beschrijven. </BR> - De planning van het project beschrijven. </BR> - Mogelijke risico's beschrijven. </BR> - Gebruikte bronnen beschrijven.                                                                                                                                                                                              | - Het PvA wordt na het assessment voorgelegd aan de opdrachtgever ter goedkeuring.</BR> - Na het schrijven van het PvA doen wij een gezamelijke documentatie review zodat wij allemaal achter de kwaliteit van het document staan.                                                                                                                                                                                                                                                                                                                                                                                                                 |
| Onderzoeksverslagen | - Onderzoeksverslag voldoet aan [(Checklist onderzoeksverslag, 2022)](https://han.onderwijsonline.nl/elearning/lesson/VNzrQwwN)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | - Onderzoek naar bepaald onderwerp, verwerken in een onderzoeksverslag. </BR> - Experimenten uitvoeren die leiden tot onderzoeksresultaten </BR> - resultaten verwerken </BR> - Daar een conclusie uit halen.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Gedurende de sprints zullen wij een viertal onderzoeken uitvoeren. Dit doen we om informatie te vergaren. Voor het onderzoeken zullen wij betrouwbare bronnen op het internet raadplegen.                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| Projectverslag      | - Projectverslag voldoet aan het projectverslag template dat aangeleverd is door de HAN </BR> - Het projectverslag bevat 2 leerdoelen die voldoet aan de eisen die gesteld staan in de [(Reader leerdoelen, 2020)](https://han.onderwijsonline.nl/elearning/lesson/pqg9Kmny)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | - Aan het begin van het project stelt ieder teamlid twee leerdoelen op. </BR> - Elke week twee experimenten uitvoeren waarmee je test of dit een oplossing is om de valkuil van je leerdoel te omzeilen.</BR> - Factsheet wekelijks bijhouden.                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Gedurende het project zal ieder teamlid individueel werken aan zijn eigen projectverslag. Dit doen we om aan te tonen dat we de competenties van het OOSE project gehaald hebben. Voor feedback kunnen wij terecht bij teamleden en/of de begeleidende skillsdocent.                                                                                                                                                                                                                                                                                                                                                                               |
| Eindpresentatie     | - Presentatie omvat de opdrachtomschrijving in een dia. </BR> - Presentatie bevat dia slides met de onderzoeken met daarin de hoofdvraag en samengevatte conclusie.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | - De presentatie gaat in de post-game gemaakt worden aan de hand van de gemaakte SRS, SDD, het PvA en de software. </BR> - De burndown charts van JIRA worden toegevoegd.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Presentatie wordt voorbereid door het team door tussentijds een oefenpresentatie te geven voor onszelf.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |

> Alle opgeleverde documenten voldoen aan de AIM Controle kaart

## 7. Ontwikkelmethoden

Voor dit project is er vanuit de HAN voorgeschreven dat we een variant van de SCRUM methode gebruiken. De aanpassing op scrum voor dit project houdt in dat we geen product owner in het team hebben maar een product owner by proxy. Ook zullen de retrospectives voor de sprint reviews gehouden worden.

De scrum rollen binnen het project zijn:

- Scrum master: Jorian Borst
- Product owner by proxy: Maarten van der Lei
- Planner: Albert Jan Nap
- Kwaliteitsmanager: Sjoerd de Bruin
- Notulist: Albert Jan Nap
- Contactpersoon: Maarten van der Lei

**Retrospective**

Gedurende dit project hanteren wij een andere vorm van Scrum. In deze vorm wordt de retrospective voor de sprint review gehouden. Dit wordt gedaan zodat wij voor de sprint review weten wat er fout ging en wat er de volgende sprint anders kan.

---

## 8. Projectorganisatie en communicatie

### Contactpersonen

- Projectbegeleider: Wiebe Rinsma
- Professional skills docent: Tinneke Jacobs
- Opdrachtgever: Ruud Schuurmans

---

### Belangrijke gespreksmomenten tijdens het project

Met de contactpersonen zijn er periodieke afspraken gemaakt voor de gespreksmomenten. De hoeveelheid van deze gesprekken hangt af van de rol van de contactpersoon. Naast de standaard afgesproken momenten is het ook mogelijk om extra afspraken te maken indien deze nodig blijkt te zijn en beide partijen hiermee akkoord gaan. De volgende periodieke afspraken zijn besloten:

**Projectbegeleider**

We zullen minimaal één keer per week een afspraak hebben met de projectbegeleider. Tijdens dit gesprek zullen we het hebben over de status van het project en is het mogelijk om hulp te vragen voor problemen waar we mogelijk tegen aan zijn gelopen. Deze afspraak kan mogelijk gecombineerd worden met de DSU, zodat de projectbegeleider ook een beeld krijgt van ons proces. De opdrachtgever zal ook aanwezig zijn bij sprintplanningen en sprintreviews.

**Professional skills docent**

Na de oplevering en assessment van het plan van aanpak in de eerste/tweede week zal er elke week minimaal één gesprek plaats vinden om te discussiëren over de inhoudelijke relatie van de projectgroep en de contactpersonen. Indien er persoonlijke problemen in de groep zijn is dat ook mogelijk om tijdens dit gesprek dat te behandelen.

**Opdrachtgever**

De opdrachtgever heeft aangegeven dat wij als team welkom zijn om één dag in de week bij Plauti zelf te komen werken aan het project. Op deze dag bespreken wij de voortgang van het project en kunnen we problemen of vragen waar wij tijdens het project tegen aan zijn gelopen met de opdrachtgever bespreken. De opdrachtgever zal ook aanwezig bij sprint reviews en de opdrachtgever heeft de mogelijkheid om via een teams call de DSU bij te wonen.

Naast de periodieke afspraken zijn er ook belangrijke momenten gedurende het project die aandacht vereisen. Dit gaat over de volgende gesprekken:

OW-2 & OW-5 IPV, de teamleden geven elkaar feedback op de bijdrage van het project en gedrag. Bij dit gesprek is de projectbegeleider aanwezig.

OW-5/6 Tussentijdse oplevering, hierbij levert elk individu van de projectgroep een conceptversie van hen projectverslag. Verder levert de projectgroep alle tussenproducten op en presenteert het werk aan de projectbegeleider en de assessor.

OW-9/10 Assessment eindproduct, hierbij presenteert de projectgroep het product samen met het individuele project verslagen. Hier volgt net als bij de tussentijdse oplevering een presentatie van het product.

---

### Contact gegevens projectgroep

**Jorian Borst**

Email: JE.Borst@student.han.nl
Telefoon: 06 - 488 061 69
Studentnummer: 574013

---

**Albert Jan Nap**

Email: AJ.Nap@student.han.nl
Telefoon: 06 - 100 146 70
Studentnummer: 658929

---

**Maarten van der Lei**

Email: MR.vanderLei@student.han.nl
Telefoon: 06 - 453 124 62
studentnummer: 658215

---

**Sjoerd de Bruin**

Email: SWL.deBruin@student.han.nl
Telefoon: 06 - 123 581 76
Studentnummer: 650151

---

### Kwaliteitswaarborging

Voor bepaalde onderdelen van het project zal inzicht van begeleiders nodig zijn om er zeker van te zijn dat de kwaliteit van het product goed gekeurd kan worden.
De inhoudelijke onderdelen van alle op te leveren producten zullen hierbij gekeurd worden door de opdrachtgever. Bij het persoonlijke verslag zal de Professional skills begeleider betrokken zijn.

**Code formatting**</BR>
Binnen Plauti wordt er gebruik gemaakt van een bepaalde code format style. Van Plauti krijgen wij een Prettier configuratie bestand, in de vorm van JSON, die wij kunnen gebruiken om onze code te formatteren naar de code stijl van Plauti.

**Testen**</BR>
We schrijven unittests voor zowel Node.js als Vue.js en integratie tests voor de Node.js API.
Als we aan end to end testen toekomen dan is dit welkom.
Hiervoor zal het testframework jest worden gebruikt.

**Code reviews**</BR>
Elk pull request moet eerst door een teamlid gereviewed worden voordat het gemerged kan worden met de (main/dev) branch.

**Definition of Done**</BR>
Wij maken een definition of done waarin we eisen opstellen waaraan de code moet voldoen.

---

### Gemaakte afspraken binnen de projectgroep

Binnen de projectgroep hebben we een aantal vaste afspraken waar iedereen zich aan moet houden. De afspraken zijn er om het werkproces binnen de groep zo gestroomlijnd mogelijk te laten verlopen. De vaste afspraken zijn:

- Het projectteam is iedere werkdag (maandag tot en met vrijdag) beschikbaar van 09:00 tot en met 16:30 voor vragen van de opdrachtgever of vragen van projectleden. Dit houdt in dat iedereen op tijd aanwezig is.

- Indien een projectlid afwezig is, geeft hij dit minimaal 24 uur van tevoren aan via Teams of bij fysieke bijeenkomsten zodat de overige leden dit tijdig weten. Dit geldt niet voor iemand die zich ziekmeldt.

- Mocht een projectlid ziek worden dan wordt dit voordat de werkdag begint duidelijk via Teams gecommuniceerd samen met een inschatting of deze persoon thuis een bijdrage kan leveren. De overige projectleden zullen de taken van de persoon voor die dag overnemen die niet tijdig afkomen.

- Als de bijdrage van een lid als onvoldoende(Criteria hierbij zijn: meer dan 10 dagdelen afwezig worden er concrete afspraken gemaakt over hoe dat wordt verbeterd. Worden deze afspraken vervolgens niet nagekomen? Dan kan dit teamlid uit het team worden gezet. [(Projecthandleiding, 2021)](https://onderwijsonline.han.nl/elearning/lesson/YyR23zXy)

Overige gemaakte afspraken binnen de projectgroep zoals vooraf geplande afwezigheden zijn terug te vinden in ons interne afsprakendocument. [(Afspraken, 2022)](./Afspraken.md)

---

## 9. Planning

| Activiteit                                             | Startdatum         | Einddatum        | Op te leveren product                                                |
| ------------------------------------------------------ | ------------------ | ---------------- | -------------------------------------------------------------------- |
| Project Startup                                        | 05-04-2022         | 12-04-2022       |                                                                      |
| Inleveren Plan van Aanpak                              | 12-04-2022         | 12-04-2021 13:00 | Eerste versie Plan van Aanpak                                        |
| Tussentijdse inlevering verantwoording projectbijdrage | 11-05-2022         | 11-05-2022 16:00 | verantwoording projectbijdrage                                       |
| Tussentijdse inlevering Product                        | 11-05-2022         | 11-05-2022 16:00 | Product                                                              |
| Oplevering                                             | 10-06-2022         | 10-06-2022       | Final version system                                                 |
| Eindpresentatie                                        | Week 24 of Week 25 |                  |                                                                      |
| **Sprint 1**                                           | 19-04-2022         | 09-05-2022       | Uitvoeren van de sprint invullen zoals gegeven bij de sprintplanning |
| Sprint planning 1                                      | 19-04-2022         |                  | Invulling van sprint 1                                               |
| Retro spective 1                                       | 29-04-2022         |                  | Verbeterings punten voor onszelf opstellen                           |
| Sprint review 1                                        | 09-05-2022         |                  | Vooruitgang tonen aan de begeleiders en opdrachtgever                |     
| **Sprint 2**                                           | 10-05-2022         | 23-05-2022       | Uitvoeren van de sprint invullen zoals gegeven bij de sprintplanning |
| Sprint planning 2                                      | 10-05-2022         |                  | Invulling van sprint 2                                               |
| Retro spective 2                                       | 20-05-2022         |                  | Verbeterings punten voor onszelf opstellen                           |     
| Sprint review 2                                        | 23-05-2022         |                  | Vooruitgang tonen aan de begeleiders en opdrachtgever                |     
| **Sprint 3**                                           | 24-05-2022         | 06-06-2022       | Uitvoeren van de sprint invullen zoals gegeven bij de sprintplanning |
| Sprint planning 3                                      | 24-05-2022         |                  | Invulling van sprint 3                                               |
| Retro spective 3                                       | 03-06-2022         |                  | Verbeterings punten voor onszelf opstellen                           |     
| Sprint review 3                                        | 06-06-2022         |                  | Vooruitgang tonen aan de begeleiders en opdrachtgever                |     
| **Sprint post-game**                                   | 07-05-2022         | 10-06-2022       |                                                                      |

**Daily Stand-up**

Elke werkdag zal een daily stand-up gehouden worden, deze wordt zoveel mogelijk aan het begin van de werkdag georganiseerd worden.

---

### Efficiënte en Inefficiënte uren

Voor bepaalde onderdelen van het project zal inzicht van begeleiders nodig zijn om er zeker van te zijn dat de kwaliteit van het product goed gekeurd kan worden.
De inhoudelijke onderdelen van alle op te leveren producten zullen hierbij gekeurd worden door de opdrachtgever. Bij het persoonlijke verslag zal de Professional skills begeleider hierbij betrokken zijn.

---

## 10. Risico’s

| Risico                                 | Kans   | Impact | Tegenmaatregel                       | Uitwijkstrategie                                    |
| -------------------------------------- | ------ | ------ | ------------------------------------ | --------------------------------------------------- |
| Laptop van een teamlid stuk            | Middel | Middel | Goed voor je eigen apparatuur zorgen | Deze persoon zal thuis achter een PC moeten werken. |
| Contactpersoon niet bereikbaar         | Klein  | Groot  | Vragen naar een ander contactpersoon | Aannames doen over de opdracht                      |
| Communicatiemiddelen functioneren niet | Klein  | Middel | Informeren status communicatiemiddel | Uitwijken naar ander platform                       |

Zoals te zien is in de bovenstaande tabel zijn er maar enkele risico's die buiten onze invloed vallen. Veel hiervan zijn ook op te lossen door middel van thuiswerken, waar veel ervaring mee opgedaan is in het afgelopen jaar.

## 11. Bronnen

- Projecthandleiding, S. H. (2021, November 19). ISE-project najaar 2021. Retrieved from Onderwijs Online: [https://onderwijsonline.han.nl/elearning/lesson/YyR23zXy](https://onderwijsonline.han.nl/elearning/lesson/YyR23zXy)
- HAN. (2022). Slagen voor het OOSE-Project. Retrieved from OnderwijsOnline: [https://han.onderwijsonline.nl/elearning/lesson/dyA1dgBy](https://han.onderwijsonline.nl/elearning/lesson/dyA1dgBy)
- HAN. (2022). Toelichting op PvA3.1. Retrieved from onderwijsonline: [https://han.onderwijsonline.nl/elearning/lesson/BylE7r8D](https://han.onderwijsonline.nl/elearning/lesson/BylE7r8D)
- HAN. (2022). Checklist onderzoeksverslag. Retrieved from onderwijsonline:[Checklist onderzoeksverslag, 2022](https://han.onderwijsonline.nl/elearning/lesson/VNzrQwwN)
- VueJS. (2022): [https://vuejs.org/](https://vuejs.org/)
- NodeJS. (2022): [https://nodejs.org/en/](https://nodejs.org/en/)
- Azure. (2022): [https://azure.microsoft.com/en-us/](https://azure.microsoft.com/en-us/)
- [(Best Practices in Azure, 2022)](https://docs.microsoft.com/en-us/azure/architecture/best-practices/index-best-practices)
- [(SRS Template, 2022)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/System+Requirements+Specification+Template)
- [(SMART, 2022)](https://www.scribbr.nl/modellen/smart-methode/)
- [(FURPS, 2022)](https://www.linkedin.com/pulse/conjoining-furps-moscow-analyse-prioritise-jonathan-dyson/)
- [(Code afspraken, 2022)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/Code+afspraken)
- [(NEN, 2022)](https://www.nen.nl/npr-5325-2017-nl-238298)
- [(RefractoringGuru, 2022)](https://refactoring.guru/design-patterns)
- [(SRS Template, 2022)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/System+Requirements+Specification+Template)
- [(SDD template)](https://confluenceoosevt.aimsites.nl/display/BAUOPC/Software+Design+Documentation+Template)
- [(Reader leerdoelen, 2020)](https://han.onderwijsonline.nl/elearning/lesson/pqg9Kmny)
- [(OOSE-DEA, 2022)](https://han.onderwijsonline.nl/elearning/lesson/dNwmkRXD)
