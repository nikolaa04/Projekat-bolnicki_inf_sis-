-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 11:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolnicki_inf_sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dijagnoze`
--

CREATE TABLE `dijagnoze` (
  `dijagnoza_id` int(11) NOT NULL,
  `pacijent_id` int(11) NOT NULL,
  `grana_id` int(100) NOT NULL,
  `naziv` mediumtext NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dijagnoze`
--

INSERT INTO `dijagnoze` (`dijagnoza_id`, `pacijent_id`, `grana_id`, `naziv`, `opis`) VALUES
(2, 11, 16, 'Hipertenzivna kardiomiopatija', 'Hipertenzivna kardiomiopatija je stanje koje se javlja kao posledica dugotrajne hipertenzije (visokog krvnog pritiska) koja izaziva promene u strukturi i funkciji srčanog mišića. Kontinuirano visok krvni pritisak opterećuje srce, što dovodi do povećanja debljine zida leve komore (hipertrofija) i promena u arhitekturi srčanog mišića.\\r\\n\\r\\nOvi patološki procesi mogu dovesti do smanjenja sposobnosti srca da efikasno pumpa krv, što se manifestuje simptomima kao što su umor, otežano disanje, oticanje nogu i napadi srčane insuficijencije. Dugoročno, hipertenzivna kardiomiopatija može dovesti do komplikacija poput srčanog udara, aritmija i srčane insuficijencije.\\r\\n\\r\\nDijagnoza se obično postavlja na osnovu medicinske istorije, fizičkog pregleda, elektrokardiograma (EKG), ehokardiograma i drugih dijagnostičkih testova koji mogu pružiti uvid u strukturu i funkciju srca. Lečenje hipertenzivne kardiomiopatije obuhvata kontrolu krvnog pritiska putem lekova, kao i promene u načinu života kao što su zdrava ishrana, redovna fizička aktivnost i izbegavanje faktora rizika kao što su pušenje i prekomerna težina. U nekim slučajevima može biti potrebna i intervencija kao što su operacije srca ili postavljanje srčanih pejsmejkera.'),
(3, 11, 41, 'Akutni epididimitis', 'Akutni epididimitis je upalno stanje koje pogađa epididimis, tubularnu strukturu koja se nalazi iza testisa i služi za transport i sazrevanje spermatozoida. Ova infekcija često se javlja kod mladih muškaraca i obično je uzrokovana bakterijskom infekcijom.\\r\\n\\r\\nSimptomi akutnog epididimitisa uključuju nagli početak bola u testisu, koji može biti praćen oticanjem, crvenilom i osetljivošću testisa. Ponekad se može javiti i groznica. Ovi simptomi mogu biti vrlo neprijatni i mogu ograničiti svakodnevne aktivnosti.\\r\\n\\r\\nDijagnoza se obično postavlja na osnovu medicinske istorije, fizičkog pregleda, kao i dodatnih testova kao što su analiza urina, ultrazvuk skrotuma i testovi na prisustvo bakterija.\\r\\n\\r\\nLečenje akutnog epididimitisa obično uključuje upotrebu antibiotika za kontrolu infekcije, analgetike za ublažavanje bola i primenu hladnih obloga radi smanjenja otoka. U većini slučajeva, simptomi se poboljšavaju nakon nekoliko dana terapije. U retkim slučajevima, može biti potrebna hirurška intervencija ako dođe do komplikacija kao što su apscesi ili gnojna infekcija. Važno je da se stanje pravilno dijagnostikuje i leči kako bi se sprečile ozbiljnije komplikacije.'),
(4, 1, 24, 'Hipertireoza', 'Pacijent je podvrgnut scintigrafiji štitaste žlezde radi procene njenog funkcionisanja. Uočena je difuzna i povećana akumulacija radioaktivnog joda u štitastoj žlezdi, što ukazuje na povećanu aktivnost žlezde, poznatu kao hipertireoza.\\r\\n\\r\\nKlinički simptomi pacijenta, kao što su tremor, povećana nervoznost, gubitak težine i ubrzan rad srca, podržavaju ovaj nalaz. Takođe, pacijent ima povišene nivoe hormona štitaste žlezde u krvi, što dodatno potvrđuje dijagnozu.\\r\\n\\r\\nPreporučuje se dalja dijagnostika i lečenje od strane endokrinologa radi regulacije funkcije štitaste žlezde i kontrolisanja simptoma hipertireoze kako bi se sprečile moguće komplikacije.'),
(12, 1, 12, 'Gastritis', 'Pacijent je podvrgnut endoskopskom pregledu želuca zbog simptoma kao što su bol u epigastričnom regionu, gorušica i povremena mučnina. Endoskopski nalaz pokazuje crvenilo i oticanje sluznice želuca, što je karakteristično za gastritis.\\r\\n\\r\\nBiopsija uzeta tokom endoskopije potvrdila je prisustvo upalnih promena u sluznici želuca. Histološka analiza takođe nije otkrila znakove hronične ili akutne infekcije bakterijom Helicobacter pylori.\\r\\n\\r\\nPacijentu je preporučena terapija koja uključuje lekove za smanjenje proizvodnje želudačne kiseline, kao i promene u ishrani kako bi se izbegle iritantne namirnice. Takođe je preporučeno izbegavanje faktora rizika poput pušenja i konzumacije alkohola kako bi se smanjila iritacija želučane sluznice. Redovno praćenje i pridržavanje terapije mogu pomoći u ublažavanju simptoma gastritisa i sprečavanju pogoršanja stanja.'),
(14, 1, 38, 'Opšti anksiozni poremećaj', 'Pacijent se obraća psihijatru zbog simptoma kao što su stalna zabrinutost, osećaj napetosti i brige bez specifičnog povoda. On/ona opisuje da ovi simptomi traju veći deo dana tokom najmanje šest meseci, što ometa svakodnevne aktivnosti i funkcionisanje.Pacijent takođe navodi fizičke simptome anksioznosti kao što su ubrzani rad srca, znojenje i tremor. Osim toga, postoji osećaj konstantne napetosti u mišićima.Nakon detaljnog psihijatrijskog pregleda i razgovora, postavlja se dijagnoza opšteg anksioznog poremećaja. Pacijentu se preporučuje terapija koja može uključivati kognitivno-bihevioralnu terapiju (KBT), psihoterapiju, ili farmakoterapiju u zavisnosti od težine simptoma i individualnih potreba pacijenta. Takođe se preporučuju tehnike relaksacije i strategije za upravljanje stresom kako bi se pomoglo u kontrolisanju simptoma anksioznosti. Redovno praćenje kod psihijatra je takođe važno radi evaluacije napretka i prilagođavanja terapije.'),
(15, 15, 5, 'Policistični jajnici (PCOS)', 'Policistični jajnici su hormonalno poremećenje kod žena u reproduktivnom dobu. Karakteriše ih prisustvo cističnih struktura na jajnicima, poremećaji menstrualnog ciklusa, povećan nivo muških hormona (androgena) i različiti simptomi kao što su nepravilne menstruacije, višak telesne dlake, akne i probleme sa težinom. PCOS može dovesti do problema sa fertilitetom i povećanog rizika za razvoj dijabetesa.'),
(16, 15, 14, 'Insulin rezistencija', 'Insulinska rezistencija je stanje u kojem ćelije tela postaju manje osetljive na dejstvo insulina, hormona koji reguliše nivo šećera u krvi. To dovodi do povećanja nivoa insulina u krvi kako bi se nadoknadila smanjena efikasnost insulina. Insulinska rezistencija često je povezana sa policističnim jajnicima i može biti faktor rizika za razvoj dijabetesa tipa 2, srčanih bolesti i drugih metaboličkih poremećaja.'),
(17, 13, 2, 'Hipertenzija (visok krvni pritisak)', 'Hipertenzija je stanje u kojem je krvni pritisak u arterijama povišen iznad normalnih vrednosti. To može biti hronično stanje koje povećava rizik od srčanih bolesti, moždanog udara i drugih komplikacija. Pacijenti s hipertenzijom mogu imati simptome poput glavobolje, zamora, vrtoglavice ili nedostatka daha.'),
(18, 13, 2, 'Dijabetes tipa 2', 'Dijabetes tipa 2 je hronični metabolički poremećaj koji se karakteriše povišenim nivoima šećera u krvi usled smanjene efikasnosti insulina i/ili smanjene proizvodnje insulina u pankreasu. Pacijenti s dijabetesom tipa 2 mogu imati simptome kao što su povećana žeđ, učestalo mokrenje, umor, gubitak težine i često infekcije. Ovo stanje može dovesti do različitih komplikacija kao što su oštećenje nerava, problema sa vidom, srčanih bolesti i problema sa bubrezima.'),
(19, 13, 2, 'Hiperlipidemija (povišene masnoće u krvi)', 'Hiperlipidemija je stanje u kojem su nivoi lipida (masti) u krvi povišeni iznad normalnih vrednosti. Ovo uključuje povišene nivoe holesterola i/ili triglicerida. Pacijenti s hiperlipidemijom često nemaju simptome, ali ovaj poremećaj može biti faktor rizika za srčane bolesti, moždani udar i druge vaskularne komplikacije.');

-- --------------------------------------------------------

--
-- Table structure for table `lekari`
--

CREATE TABLE `lekari` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lekari`
--

INSERT INTO `lekari` (`ID`, `username`, `password`) VALUES
(1, 'PetarDimitrijevic', 'A001G245'),
(2, 'LazarKostic', 'K557N691'),
(3, 'MirjanaPavlovic', 'R863S651'),
(4, 'JelenaPetrović', 'K754V631'),
(5, 'NikolaPetrovic', 'G411A521');

-- --------------------------------------------------------

--
-- Table structure for table `pacijenti`
--

CREATE TABLE `pacijenti` (
  `pacijent_id` int(11) NOT NULL,
  `ime_prezime` varchar(30) NOT NULL,
  `pol` varchar(10) NOT NULL,
  `jmbg` varchar(13) NOT NULL,
  `lbo` varchar(13) NOT NULL,
  `br_knjizice` varchar(11) NOT NULL,
  `br_telefona` varchar(11) NOT NULL,
  `adresa` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pacijenti`
--

INSERT INTO `pacijenti` (`pacijent_id`, `ime_prezime`, `pol`, `jmbg`, `lbo`, `br_knjizice`, `br_telefona`, `adresa`) VALUES
(1, 'Lana Todorovic', 'zenski', '2147483647', '2147483647', '2147483647', '64513626', 'Miloja Pavlovica 15 (Kragijevac)'),
(11, 'Nikola Jovanovic', 'Muski', '1603999720010', '2452632014500', '00012345210', '0602100123', 'Zmaj Jovina 14 (Kragujevac)'),
(12, 'Milos Atanasijevic', 'Muski', '0603999720004', '0003450136215', '01234253012', '0631233777', 'Stojana Protica 11'),
(13, 'Lazar Petrovic', 'Muski', '2012945720', '2013254300021', '12345678901', '0621234567', 'Petra Petrovića broj 10, Kragujevac,'),
(14, 'Jovana Janković', 'Zenski', '0101995701234', '9876543210987', '00065432109', '0601234567', 'Cara Lazara broj 15, Kragujevac'),
(15, 'Ana Petrović', 'Zenski', '0504978701234', '8765432109876', '65432109876', '0621234567', 'Vuka Karadžića 20'),
(16, 'Marko Đorđević', 'Muski', '2407992701234', '5432109876543', '87654321098', '0631234567', 'Cara Dušana 25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dijagnoze`
--
ALTER TABLE `dijagnoze`
  ADD PRIMARY KEY (`dijagnoza_id`),
  ADD KEY `pacijent_id` (`pacijent_id`);

--
-- Indexes for table `lekari`
--
ALTER TABLE `lekari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pacijenti`
--
ALTER TABLE `pacijenti`
  ADD PRIMARY KEY (`pacijent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dijagnoze`
--
ALTER TABLE `dijagnoze`
  MODIFY `dijagnoza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lekari`
--
ALTER TABLE `lekari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pacijenti`
--
ALTER TABLE `pacijenti`
  MODIFY `pacijent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dijagnoze`
--
ALTER TABLE `dijagnoze`
  ADD CONSTRAINT `dijagnoze_ibfk_1` FOREIGN KEY (`pacijent_id`) REFERENCES `pacijenti` (`pacijent_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
