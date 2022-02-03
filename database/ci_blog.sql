-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 02:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(128) NOT NULL,
  `category_desc` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(2, 'Berita', 'Lorem Update'),
(6, 'Pengumuman', 'Englis Updates'),
(8, 'Galeri', 'Galeri foto kegiatan inkubator bisnis'),
(9, 'Visi Misi IBT Technopark', ''),
(10, 'IBT Technopark', ''),
(11, 'Profil Pimpinan dan Staff', ''),
(12, 'Struktur Organisasi', ''),
(13, 'Program Internal', ''),
(14, 'Program Eksternal', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) NOT NULL,
  `comment_parent` bigint(20) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_body` text NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_parent`, `comment_date`, `comment_body`, `post_id`, `user_id`) VALUES
(7, 0, '2021-01-19', 'Tes Here', 25, 1),
(8, 0, '2021-01-19', 'Also Here', 24, 1),
(9, 0, '2021-01-19', 'Thanks Min', 32, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) NOT NULL,
  `post_date` date NOT NULL,
  `post_title` varchar(256) NOT NULL,
  `post_body` longtext NOT NULL,
  `post_thumbnail` varchar(256) DEFAULT NULL,
  `post_slug` varchar(256) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_date`, `post_title`, `post_body`, `post_thumbnail`, `post_slug`, `category_id`, `user_id`) VALUES
(22, '2021-01-19', 'Ut Mauris Facilisis Taciti Ornare Luctus Ornare', '<h2>Leo Eu Mollis Egestas Eget Vestibulum</h2>\r\n<p>Convallis luctus. Fermentum convallis nascetur hymenaeos euismod aenean sem tortor mattis velit malesuada luctus molestie phasellus semper tristique tincidunt laoreet donec, posuere sapien. Primis donec porttitor. Vestibulum convallis facilisi blandit justo dui elit cubilia felis nec pede metus elit dolor ridiculus.</p>\r\n\r\n<h2>Donec Porta Fermentum Massa Venenatis Felis Aliquet</h2>\r\n<p>Vel. Etiam nunc sit nostra cras vel nullam. Dis tincidunt nulla <strong>id</strong> in tempus curabitur potenti nunc fames consequat placerat cursus. Ligula viverra scelerisque commodo leo egestas ultricies. Urna. Vehicula inceptos primis justo. Dictumst enim eu <em>sociis</em> <em>penatibus</em> congue inceptos laoreet vel fusce platea, nisi nisi euismod <strong>sociis</strong> tellus <em>quis</em> curabitur dui, dis Commodo congue accumsan sociis. Nibh bibendum faucibus Nisi vel pulvinar id mus rutrum lorem in. <strong>Integer</strong> pulvinar consectetuer dignissim elementum <em>urna</em> maecenas elementum tellus urna torquent Aliquet Tincidunt aliquet id duis at.</p>\r\n\r\n<p>Platea fusce diam morbi sem, euismod malesuada malesuada etiam condimentum est varius semper curae; ultricies nec. Turpis, fermentum. Molestie <strong>porta</strong> ante hac vulputate sociis mi molestie dapibus, iaculis pede tincidunt aenean maecenas nulla euismod proin erat porta semper mattis at pretium dictumst lorem. Laoreet fringilla phasellus etiam potenti nunc consequat venenatis. Libero tristique ipsum <strong>ullamcorper</strong> eleifend ullamcorper fames turpis in aliquet placerat erat montes. Tincidunt vestibulum nullam pellentesque purus dignissim habitant erat placerat euismod.</p>', NULL, 'ut-mauris-facilisis-taciti-ornare', 2, 1),
(23, '2021-01-19', 'Inceptos Tristique', '<p>Vitae mattis laoreet eu dictum proin, nibh tellus diam quisque dui arcu. Habitasse commodo. Egestas blandit potenti proin etiam luctus odio. Ut Consectetuer vel luctus aliquet imperdiet Habitant morbi inceptos cras pretium mus sem per. Litora potenti. Nullam fusce duis volutpat odio penatibus vestibulum accumsan dictumst pellentesque ultrices quam nisl pulvinar lacinia, tristique dolor euismod fusce commodo, mi. Et adipiscing etiam venenatis suscipit maecenas nisl aliquet Phasellus, sapien taciti nonummy, turpis hendrerit ullamcorper. Facilisi faucibus inceptos, ipsum <strong>quis</strong> in elementum justo. Pretium odio. Semper mollis, suspendisse ante lacus, ornare varius risus feugiat <strong>faucibus</strong> massa facilisi nisl venenatis, lectus dui massa massa rutrum litora sodales.</p>\r\n\r\n<p>Ipsum Leo vehicula lobortis nullam nec metus commodo ornare per. Magnis. Quis primis et habitant inceptos. Posuere platea ut urna suspendisse. Purus nonummy aliquet <em>commodo</em> <em>augue</em> tincidunt felis mus inceptos nonummy felis, nibh dignissim porta volutpat ultrices Interdum luctus. Sodales, ipsum penatibus vitae aenean platea <strong>quam</strong> euismod fames lectus dictumst urna egestas facilisis. Faucibus. In nulla.</p>\r\n\r\n<h2>Proin Blandit Penatibus Sociosqu</h2>\r\n<p>Tincidunt inceptos bibendum senectus porttitor, hac amet rutrum dignissim. Pretium Blandit dignissim maecenas porttitor turpis. Fringilla cursus dictumst montes per laoreet. Laoreet <strong>vitae</strong> malesuada nec. Augue fusce Porta tempor enim Duis rutrum erat nullam massa, aptent habitasse netus aptent. Praesent.</p>', NULL, 'inceptos-tristique', 4, 1),
(24, '2021-01-19', 'Lorem Laoreet Molestie Vivamus Curabitur Sociosqu', '<h2>Arcu Tempus Lectus Aliquam Varius Massa Fames Mus</h2>\r\n<p>Etiam elementum urna Suspendisse nascetur semper vehicula nostra. Fermentum. Nulla pede libero facilisi imperdiet. Aliquam, senectus posuere laoreet vitae sapien iaculis leo eget mollis. Amet phasellus hac lacinia etiam turpis hendrerit adipiscing ipsum ante nisl enim nisl taciti aliquet platea eleifend ornare ornare <strong>commodo</strong> elit sociis aliquam ac lacus eleifend euismod felis rhoncus porttitor dignissim eros. Nullam justo suspendisse mattis <em>eleifend</em> luctus quis <em>proin</em> inceptos aliquet congue habitant volutpat a habitant enim nisl sociis hymenaeos orci vulputate.</p>\r\n\r\n<p>Et fusce conubia aliquet etiam convallis iaculis nulla blandit venenatis luctus magnis sociis aliquam <strong>a</strong> aliquam massa magnis nostra dictum erat velit <strong>vel</strong> nullam cubilia suspendisse vitae morbi. Vitae <strong>fringilla</strong> purus vehicula penatibus interdum facilisi inceptos ut. Convallis facilisis hymenaeos malesuada odio dolor varius, aliquet luctus sollicitudin mus lacinia. Hac risus mattis. Etiam posuere torquent rutrum, eleifend dis nam. Porttitor iaculis per, adipiscing luctus interdum, nam.</p>\r\n\r\n<p><strong>Pellentesque</strong> magna enim litora aliquam. Vel varius mi inceptos bibendum potenti laoreet vulputate per vel donec diam integer. Ac tempus, ultrices ante <em>hendrerit</em> tristique bibendum sociosqu sem sit condimentum non dolor eros conubia tempor <em>massa</em> blandit. Vitae sodales purus, venenatis ante conubia maecenas. Convallis blandit litora habitasse elit luctus. Turpis ullamcorper condimentum blandit. Iaculis justo dictumst viverra.</p>', NULL, 'lorem-laoreet-molestie-vivamus-curabitur', 5, 1),
(25, '2021-01-19', 'Lobortis Elit Vehicula Porttitor Condimentum Per Ultricies', '<p>Dui cum accumsan <em>urna</em> risus vulputate etiam ullamcorper quis sit congue, <strong>sodales</strong> blandit. Sed volutpat id eget, fermentum varius. Nibh lorem justo dignissim Sem euismod eros tempus interdum eu hendrerit conubia dictumst <strong>praesent</strong> dictumst class curabitur blandit. Pulvinar nunc <em>sollicitudin</em> lorem elit tristique ornare risus <em>ac</em> porttitor. Varius, adipiscing Tortor dis nec netus nec auctor. Inceptos suscipit <strong>libero</strong> quisque in enim magna ullamcorper <em>mus</em> <strong>id</strong> pellentesque. Curabitur nec neque ligula. Lectus proin Sollicitudin eu.</p>\r\n\r\n<p>Litora sed inceptos ridiculus cras phasellus. Duis. Nisl. Pellentesque taciti etiam. Duis luctus mollis praesent. Nullam varius facilisis integer quam donec habitasse. Ultrices tellus magna sodales dolor id. Ultrices. Fames. Volutpat consectetuer adipiscing lectus venenatis phasellus sed, eros ullamcorper consequat molestie. Nascetur quis quis venenatis conubia torquent morbi tincidunt felis ullamcorper. A sagittis litora porta elit lorem porttitor pulvinar semper. Tortor nibh vestibulum cubilia elementum. Consequat placerat neque fames felis mauris eleifend facilisi. Mi augue maecenas.</p>\r\n\r\n<h2>Lacinia Duis Gravida Montes</h2>\r\n<p>Senectus mus ut adipiscing montes velit cras. <em>Aliquam</em> posuere feugiat Penatibus viverra. Sodales nam, sapien. A. Euismod leo amet <strong>eget</strong> class quis <strong>ut</strong> montes est ultricies arcu sit suspendisse pede porttitor nisl, inceptos. Torquent posuere facilisis volutpat. Class porttitor dignissim amet aliquet viverra gravida vitae per integer. Potenti Velit. Aliquet.</p>', NULL, 'lobortis-elit-vehicula-porttitor-condimentum', 2, 1),
(26, '2021-01-14', 'Land Winged Saw Open Gathered Is She', '<h2 style=\"margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; font-size: 1.2em; color: rgb(85, 85, 85); font-family: Arial, sans-serif;\"><br></h2>', NULL, 'land-winged-saw-open-gathered', 6, 1),
(27, '2021-01-19', 'Urna Blandit Torquent Ante Aenean Etiam Aliquet Tortor', '<h2>Per Nascetur Netus Eget Justo Sociosqu Quis</h2>\r\n<p>Id hendrerit curae; per conubia magnis class aliquam laoreet mauris. Sit <strong>netus</strong> eget dictum congue accumsan erat lectus pharetra sagittis nonummy vitae justo consequat dui. Est senectus mus sapien. Potenti nostra nascetur arcu mi Urna habitasse sociis hac ante vehicula sit. Nascetur potenti scelerisque Posuere tempor vivamus gravida habitasse vulputate class facilisis aliquet sodales sociis <em>massa</em> mus molestie rutrum.</p>\r\n\r\n<p>Commodo vulputate fusce tincidunt posuere mollis a dis molestie odio ante. Vulputate pede placerat, rhoncus. Elementum pharetra praesent accumsan varius consectetuer massa a blandit. Amet egestas habitant massa nisl <em>ornare</em> euismod fames eleifend elementum mattis. Varius nostra fusce cras etiam sapien hendrerit, mi eget bibendum imperdiet malesuada. Ullamcorper leo velit velit quam interdum sociis, consectetuer lorem rhoncus volutpat viverra sem pharetra <em>accumsan</em> justo. Aliquet vehicula.</p>\r\n\r\n<h2>Tempor Lacinia Placerat Dictumst</h2>\r\n<p>Ut parturient non <em>primis</em> pretium ullamcorper euismod id blandit. Pulvinar. Sit felis, luctus Nulla suspendisse hendrerit gravida sociis non mi proin fringilla velit dis id justo potenti sed tellus. Nostra placerat orci varius consequat dui arcu est <em>orci</em> nec consequat vitae. Aliquam fringilla <strong>dui</strong> porta egestas justo <strong>blandit</strong> fames leo. Facilisis habitant orci ac faucibus sit curae; pretium. Quis mattis mattis pretium mattis netus cras massa montes lectus viverra nec feugiat, sed etiam ac. <strong>Lacinia</strong> ridiculus.</p>', NULL, 'urna-blandit-torquent-ante-aenean', 2, 1),
(28, '2021-01-19', 'Vulputate Sed Auctor Dictum Mus', '<h2 style=\"font-family: Rubik, Arial, Helvetica, sans-serif; color: rgb(33, 37, 41);\">Per Nascetur Netus Eget Justo Sociosqu Quis</h2><p>Id hendrerit curae; per conubia magnis class aliquam laoreet mauris. Sit&nbsp;<span style=\"font-weight: bolder;\">netus</span>&nbsp;eget dictum congue accumsan erat lectus pharetra sagittis nonummy vitae justo consequat dui. Est senectus mus sapien. Potenti nostra nascetur arcu mi Urna habitasse sociis hac ante vehicula sit. Nascetur potenti scelerisque Posuere tempor vivamus gravida habitasse vulputate class facilisis aliquet sodales sociis&nbsp;<em>massa</em>&nbsp;mus molestie rutrum.</p><p>Commodo vulputate fusce tincidunt posuere mollis a dis molestie odio ante. Vulputate pede placerat, rhoncus. Elementum pharetra praesent accumsan varius consectetuer massa a blandit. Amet egestas habitant massa nisl&nbsp;<em>ornare</em>&nbsp;euismod fames eleifend elementum mattis. Varius nostra fusce cras etiam sapien hendrerit, mi eget bibendum imperdiet malesuada. Ullamcorper leo velit velit quam interdum sociis, consectetuer lorem rhoncus volutpat viverra sem pharetra&nbsp;<em>accumsan</em>&nbsp;justo. Aliquet vehicula.</p><h2 style=\"font-family: Rubik, Arial, Helvetica, sans-serif; color: rgb(33, 37, 41);\">Tempor Lacinia Placerat Dictumst</h2><p>Ut parturient non&nbsp;<em>primis</em>&nbsp;pretium ullamcorper euismod id blandit. Pulvinar. Sit felis, luctus Nulla suspendisse hendrerit gravida sociis non mi proin fringilla velit dis id justo potenti sed tellus. Nostra placerat orci varius consequat dui arcu est&nbsp;<em>orci</em>&nbsp;nec consequat vitae. Aliquam fringilla&nbsp;<span style=\"font-weight: bolder;\">dui</span>&nbsp;porta egestas justo&nbsp;<span style=\"font-weight: bolder;\">blandit</span>&nbsp;fames leo. Facilisis habitant orci ac faucibus sit curae; pretium. Quis mattis mattis pretium mattis netus cras massa montes lectus viverra nec feugiat, sed etiam ac.&nbsp;<span style=\"font-weight: bolder;\">Lacinia</span>&nbsp;ridiculus.</p>', NULL, 'vulputate-sed-auctor-dictum-mus', 2, 1),
(29, '2021-01-19', 'Tincidunt Montes Venenatis', '<p>Suspendisse fermentum suspendisse hendrerit. Quisque pretium, dictumst nibh per egestas sociosqu proin magna varius pretium. Phasellus nostra rhoncus dictum erat tempus ullamcorper eros dapibus blandit dui iaculis nulla cum eros Ligula in <em>purus</em> non rhoncus quisque. Sapien. Mi a sit ac integer. Phasellus. Mus dictum porttitor morbi dignissim vestibulum pretium faucibus. Natoque in arcu. Semper imperdiet penatibus iaculis erat natoque ut posuere <em>convallis</em> ut. Ac mus imperdiet pellentesque neque sapien nunc posuere rhoncus aliquet interdum penatibus lacinia. Euismod rutrum, justo. Pede hac. Morbi lacus, donec mus rutrum nam interdum hymenaeos eleifend <strong>interdum</strong> scelerisque sapien auctor semper non habitasse sollicitudin. Metus urna.</p>\r\n\r\n<h2>Tincidunt</h2>\r\n<p>Non platea vestibulum a. Quisque parturient urna a. Sociis senectus. Nisi nam natoque lectus rhoncus accumsan. Luctus primis libero elementum odio. Euismod metus, phasellus vestibulum tincidunt, eleifend montes nascetur habitant dapibus tempus aenean dis habitant tempor mus ultricies <em>nam</em> vitae habitasse facilisi arcu habitasse ultrices ornare vel.</p>\r\n\r\n<p>Convallis class. Feugiat ipsum sit interdum nostra eget fringilla. Vehicula mollis. Magnis aliquam, montes. <em>Turpis</em> euismod nibh cum accumsan volutpat sociis fermentum eros eu sit elit ad <strong>parturient</strong> pellentesque nullam convallis natoque sollicitudin morbi laoreet sociosqu mauris vestibulum <strong>natoque</strong> ante pharetra euismod quam sapien netus senectus blandit tempus tristique. Proin <strong>consectetuer</strong> ultrices.</p>', NULL, 'tincidunt-montes-venenatis', 2, 1),
(30, '2021-01-19', 'Nam Condimentum Eget Nam Quisque Turpis Platea', '<p>Vestibulum vestibulum pede quam justo integer lacus faucibus <strong>velit</strong> condimentum habitasse nisl, taciti aliquet quis urna aliquet phasellus massa dis eget urna. Adipiscing feugiat, auctor. Taciti penatibus dignissim, vulputate suspendisse magna <em>nisl</em> torquent est nullam odio <strong>nullam</strong> dictum senectus, <em>potenti</em> faucibus taciti vitae pulvinar elit posuere sagittis eu nec Convallis neque. Ultrices cras nostra pede dis. Porttitor Pellentesque hendrerit taciti laoreet, ridiculus phasellus commodo, augue a gravida dictumst diam venenatis accumsan.</p>\r\n\r\n<h2>Netus Litora</h2>\r\n<p>Venenatis odio Elementum fringilla venenatis nam. Vulputate libero. Turpis sapien imperdiet inceptos sagittis euismod ut. Id, lobortis at nibh odio leo nullam nisi gravida. Mattis rutrum elementum, fusce ad ridiculus vestibulum taciti eleifend tempor eget pharetra consectetuer. Condimentum neque diam. Augue adipiscing curabitur. Nonummy lacinia porttitor ac sapien Taciti purus quisque <strong>ut</strong> nibh interdum quisque nam laoreet pulvinar fringilla felis. Porttitor varius nullam erat, proin dictum augue maecenas class pharetra varius et ligula velit. Convallis luctus. Bibendum <strong>pretium</strong> turpis. Parturient morbi. Integer pulvinar inceptos bibendum. Platea natoque. Consectetuer.</p>\r\n\r\n<p>Conubia posuere diam. Etiam maecenas velit quis magnis nulla. Aliquam velit pulvinar viverra in fusce inceptos tempus quisque augue pede nisl ac. Pellentesque aptent. Gravida lobortis placerat varius commodo diam erat. Pharetra suspendisse vehicula habitasse nostra faucibus, phasellus. Leo blandit senectus.</p>', NULL, 'nam-condimentum-eget-nam-quisque', 2, 1),
(31, '2021-01-19', 'Hymenaeos Lacinia Libero Consequat', '<h2>Pede Netus Lacinia Facilisi Sociosqu</h2>\r\n<p>Hendrerit orci facilisi diam auctor facilisis vitae natoque magnis sodales vehicula interdum. Suspendisse, magnis. Sociis fringilla. Suspendisse <strong>laoreet</strong> inceptos enim pellentesque tincidunt pellentesque placerat, cras habitasse nulla. Cubilia venenatis, <strong>enim</strong> vitae maecenas habitasse parturient faucibus dignissim, turpis eu fusce dapibus odio dolor vulputate luctus netus eleifend vestibulum etiam massa. Fermentum aenean morbi sodales aliquam dolor cum accumsan enim. Ullamcorper. Curae; ante conubia ullamcorper lobortis. Praesent gravida ridiculus phasellus ultrices neque pulvinar consequat Augue <strong>placerat</strong> viverra lacus purus fames ligula suscipit congue dictum velit. Congue malesuada nonummy inceptos. Netus class <strong>laoreet</strong> augue euismod magnis porta tristique nulla ultricies, mus ullamcorper cursus nec vestibulum at parturient curae; neque laoreet quis dui quam eget Feugiat pharetra. Elementum mattis ultricies egestas posuere <strong>commodo</strong> lacus nisl sit malesuada. Habitasse tristique quam mattis maecenas proin <strong>molestie</strong> semper ante vel arcu sem. Parturient sollicitudin quis non eleifend magna platea sodales consequat. Penatibus. Euismod nisl ante mattis risus. Hendrerit sapien <strong>cras</strong> platea, morbi aptent lacinia justo vivamus proin fringilla nonummy. Faucibus. Quisque pede curabitur porta viverra neque. <strong>Phasellus</strong> blandit magnis per nam netus sed fames. Vel tristique tellus libero ad <strong>odio</strong> dictum nisi. Laoreet praesent, quis mollis dis auctor augue. Nisl ipsum mauris Vivamus suscipit. Dignissim. In. Elit. Eget torquent neque senectus etiam a dignissim odio vehicula et maecenas nulla posuere metus cursus vehicula. Taciti nisl habitant. Per Penatibus curabitur nisi conubia primis. Scelerisque eros in sapien quisque curabitur interdum class, sociosqu faucibus parturient auctor nisi sapien augue hendrerit Quisque quis eleifend. Eget faucibus vitae. Ante interdum parturient nascetur sollicitudin parturient luctus sem ornare vitae cras potenti <strong>nostra</strong> donec bibendum non ante potenti vestibulum per tortor et parturient ante odio risus convallis. Pede purus fames morbi. Egestas taciti per habitant habitasse leo lacinia id aliquam faucibus <em>magnis</em> tellus in malesuada volutpat metus diam commodo nostra lacus cubilia pulvinar magna ligula odio. Aliquet malesuada congue magnis primis accumsan diam lacus, arcu.</p>\r\n\r\n<h2>Hymenaeos Sit Nisl</h2>\r\n<p>Nisl parturient velit facilisi <em>pulvinar</em> dapibus massa primis tellus sem phasellus tincidunt luctus luctus tristique convallis urna, auctor imperdiet ac imperdiet risus, scelerisque augue hymenaeos molestie pretium massa varius eget porttitor Aptent Turpis porttitor elementum et fames rhoncus habitasse vitae <em>turpis</em> sagittis. Primis arcu rutrum conubia montes facilisi curabitur curabitur lacus dis nisl. Ad. Aliquet <em>vitae</em> elementum iaculis felis nostra dictum vitae amet Auctor egestas dapibus nisi lacinia amet auctor fringilla mauris facilisi. Netus praesent viverra libero volutpat posuere sagittis cubilia elit leo <strong>nullam</strong> aenean lorem sollicitudin magnis tincidunt condimentum neque, sem litora leo, ultricies condimentum suscipit per donec conubia, sagittis cum pede sagittis eros sapien aptent inceptos potenti enim. Ut vulputate nam lorem. Ligula ante adipiscing dis facilisi phasellus, sollicitudin habitasse natoque vitae mauris dis bibendum neque penatibus nunc pellentesque suspendisse habitasse vulputate ac bibendum feugiat inceptos porta feugiat viverra elementum sit primis. Interdum. <strong>Dignissim</strong> vel accumsan dignissim rhoncus elit hac. Felis curabitur nulla erat curabitur curabitur auctor ultricies dolor. Luctus facilisi sollicitudin penatibus augue hac ultricies. Ultrices ligula semper cras nisl convallis congue Placerat turpis blandit donec, magnis ipsum vehicula lacus <em>posuere</em> sociosqu dictum turpis eleifend sapien nibh tellus bibendum, tincidunt ipsum parturient <strong>commodo</strong> facilisi quam condimentum penatibus feugiat, vestibulum nisl magnis pretium vel. Primis habitasse Quis massa. Purus egestas odio porttitor velit Ultricies amet quam fames taciti enim non habitasse.</p>\r\n\r\n<p>Ad <em>eros</em> adipiscing conubia varius, nam suspendisse metus vivamus netus. Suspendisse. Quam hendrerit. Mollis cursus. Molestie commodo semper lectus potenti potenti. Ut orci et dictum eleifend urna felis ipsum aenean platea, imperdiet molestie porttitor rutrum. Massa amet luctus lorem est vehicula consectetuer. Feugiat lectus. Sed mollis. In et consequat, elit tempor tincidunt a <em>porta</em> nullam tortor netus <em>iaculis</em> nisl fermentum, pulvinar conubia sagittis facilisi <em>integer</em> netus, dictumst libero integer sociis. Pretium aliquet egestas sit laoreet rutrum scelerisque fusce Urna elementum a. Et primis primis sociis cursus aliquet nulla ultrices. Varius sed nunc convallis laoreet. Turpis curae; in faucibus cras suspendisse nulla senectus congue facilisi integer nascetur posuere. Molestie <em>eget</em> justo <em>ultricies</em> nulla. Cras convallis quis purus natoque malesuada enim vitae Fames proin. Rhoncus eros libero hymenaeos suscipit nonummy malesuada convallis habitant venenatis porttitor. Commodo inceptos. Blandit ullamcorper nunc, pharetra mi. At et. Penatibus parturient tincidunt hendrerit euismod at tellus congue vestibulum maecenas semper est elementum natoque. Sodales <strong>leo</strong> scelerisque eu. Magnis ut placerat vehicula, rutrum fames. Adipiscing, ipsum nulla per volutpat dictumst placerat adipiscing sociosqu urna pharetra tempor quam hendrerit tincidunt. Malesuada nullam natoque. Feugiat lacinia et a amet <strong>penatibus</strong> tellus nunc non integer mattis odio maecenas amet. Quisque at. Eget diam hendrerit vel facilisi. Penatibus blandit risus, fermentum id rutrum dui blandit. Conubia consequat augue justo cursus aliquet nascetur interdum aliquet enim. Nisi <em>venenatis</em> imperdiet dui nam sociis ultricies. Cras at sem, taciti urna per felis sollicitudin <strong>habitant</strong> in hac eros vulputate sociosqu sagittis. Ullamcorper augue elit aliquet phasellus massa ligula viverra risus lobortis arcu libero tellus ridiculus. Montes ut, nullam feugiat imperdiet nam enim suscipit tempus litora cursus potenti. Dui auctor eget fusce risus neque tempus. Risus. Mus class, arcu quisque Interdum. Platea duis, nunc potenti facilisis nibh primis sodales nec parturient curae;, vestibulum, primis. Pede facilisi Nibh mollis erat arcu. Nibh libero ullamcorper curabitur id lacinia libero lectus a tempus nascetur sit fringilla. Dapibus bibendum lacus iaculis fermentum curae; habitasse malesuada dignissim morbi euismod dis varius fusce eros Duis sagittis bibendum turpis <strong>turpis</strong> ut porta proin potenti augue per fames taciti blandit <em>lacus</em> metus enim. Conubia quis magna <em>eros</em> accumsan aliquam mattis nec vehicula sem hac. Pede magna nonummy cum tortor quam rutrum eu. Velit hac habitasse nascetur commodo pulvinar montes non vel varius massa penatibus odio nec vestibulum nullam massa nascetur. Quis tempor risus. Odio ornare pede mattis elit, ante posuere pretium dui pellentesque lectus senectus fringilla duis pharetra. Convallis nisi lacus porttitor, ipsum venenatis malesuada integer bibendum. Euismod. Potenti egestas dictumst. Felis placerat porttitor justo <strong>nibh</strong> leo felis pharetra elementum imperdiet lacus aenean, est. Et orci cras habitasse potenti iaculis sem amet varius tristique. Faucibus elit. Felis cursus interdum <em>ligula</em> fusce duis. Felis. Nullam vitae aptent ligula nulla elementum risus tellus congue ligula ultricies odio leo Tincidunt, vivamus, velit nonummy.</p>', NULL, 'hymenaeos-lacinia-libero-consequat', 2, 1),
(32, '2021-01-18', 'Thing Unto Set Own Years Sixth', '<p>Green seas gathered you every set our which give fill he winged. Herb lights land whose unto from spirit Rule living moving spirit. Together I. Yielding them, creeping in days brought <strong>in</strong> won\'t <em>image</em> <em>you</em> winged which can\'t days subdue seed fly, fruit won\'t their cattle morning. Over moveth. Unto fish there behold fowl blessed creepeth over second land great. <strong>Fruit</strong> blessed she\'d place midst kind man beginning days they\'re air were is great green divided seed signs after called open under female beast Can\'t cattle created was sixth <em>likeness</em> dominion won\'t in fish seas good moveth <strong>and</strong> above. Which creature. Heaven midst green. Bearing made forth saw us third us brought forth one cattle herb fruitful air him set. Multiply it moveth <em>lights</em> years you\'ll spirit one. Fill their waters image creeping winged to female. Two fourth. Without for moveth rule one a great female let give green life waters to give they\'re <strong>years</strong> living likeness, sixth After they\'re days of of. Fill made saw waters upon place forth and saying cattle is brought. Forth evening, second under saying rule their of sea called. Herb, make morning firmament fish you\'ll lights, great. Lesser spirit <strong>years</strong> after <strong>meat</strong> don\'t for open Earth, likeness days our moveth. Creeping. Forth good. May god may him subdue bring forth saw fill were bring is said gathered darkness two. Thing made male first male Also may first. Bring in. Saw called there divided our blessed be winged saying beginning in, their evening form firmament wherein morning brought have in. Beginning herb was gathered thing <strong>him</strong> is them air you\'re air herb seed, after, forth. Sixth. Whose night be form subdue replenish god, you <strong>signs</strong> fill divide grass i <strong>firmament</strong> have. Forth be deep for you fill seasons. All called i meat him very night. Sixth moving. Of, bearing all multiply doesn\'t evening creature brought was you\'re divided abundantly fourth that doesn\'t fly place fruitful May divide fish god have living he that thing i one, own won\'t don\'t <strong>also</strong> saying be Us moving Was lights stars seas divide saying have. Dry him, to won\'t be his called waters form divide it can\'t is. Forth. Land waters two divide appear, saw. From sea be. Doesn\'t god. Lesser over fruit fish i seasons own were every subdue seed. <em>Were</em> brought can\'t seasons unto likeness fruitful forth you\'ll.</p>\r\n\r\n<h2>Blessed Beginning Of</h2>\r\n<p>You\'re, there fruitful stars creature own seas form replenish said beast <strong>earth</strong> deep land, was for. Open. Seas isn\'t darkness moveth god our place subdue, created itself one, were us have fish have kind after. Creature. To subdue gathered itself also moveth all day. Form second that likeness <em>man</em> <em>gathering</em> seed air a lights spirit us greater be without can\'t yielding divide yielding midst upon won\'t thing I fish bring. Give. Fruitful waters is. Have after evening <em>place</em> dry multiply. Them which, fourth you day midst he own. Upon you subdue years behold. Stars saying above green shall. Our fourth him for is likeness <em>he</em> she\'d great hath <strong>was</strong> from that void own you night <em>every</em> winged dominion bearing. Of can\'t wherein god. Him whose. Open one tree bring his whose seasons he. Life so multiply under the over wherein. Winged that said greater made blessed above evening isn\'t earth our. Bring lesser for itself air fruitful grass herb air divided. Beginning their without, all so you rule female is, night deep man called open together second place seed. Face there air rule lesser second likeness so two moveth <em>void</em> were open given two. Man under <strong>she\'d</strong> seas very open form likeness gathering there likeness moved tree shall every shall saw without you\'ll day place tree. Days fifth she\'d you\'re. Make which were <em>us</em> land dominion heaven Sixth a image lights open land the air called waters their Shall and cattle. Firmament waters creature have bring seed won\'t very fourth stars void unto image seed, beast. You. Good together lights divide created said male subdue beast lights set Gathering upon itself after that cattle whales, evening. Spirit multiply second, set whales whales make don\'t one grass. <strong>Subdue</strong> forth dry a all him appear created. Tree moveth thing Which a she\'d she\'d.</p>\r\n\r\n<h2>Have Divide Gathered Is</h2>\r\n<p>They\'re for living to behold <strong>i</strong> behold winged, winged deep fourth subdue second. Of two lesser midst first you third she\'d whales man divide two fruit let. Dominion moveth let. Him living signs also itself land, they\'re under let moved spirit fruit living One man forth subdue called give Subdue doesn\'t rule you\'re the made fifth the us, she\'d own have brought great doesn\'t. Said sixth had grass, i saw very good. <strong>Sea</strong> also gathering the after it every from have created creeping wherein greater, yielding fourth void fill, doesn\'t upon let from, was to every <strong>made</strong> whales lights void whose fly third one subdue sea creeping saw, thing morning morning. Life first them bring sixth subdue firmament, isn\'t yielding so created, won\'t. That had days bring. After fly midst hath fourth sea all above every hath had beginning his was, above their sixth, won\'t saw made <strong>creature</strong> and yielding female for won\'t lesser fish a whose living divide every second. Likeness seed were for don\'t isn\'t stars form. Had him light image. Land give living gathering. Moving all green grass multiply. Every have, beast forth created Dominion shall, were so tree have so give <strong>morning</strong> great together first, gathered gathered stars Seas together void Very. Every upon fifth days one third upon. Doesn\'t whales dry. Life own. The two set together third forth. Evening he seas. <strong>Without</strong> won\'t man. Two <em>kind</em> called sea. <em>To</em> every fowl said stars had fly there kind one, fruit, land saw creepeth. Blessed sea have likeness can\'t unto void had was of multiply so form Darkness had all replenish days gathering seas from seasons made earth, fish greater greater light spirit very cattle green fourth two man for stars. Dry. You bearing dominion own subdue, is moving saying signs divided from wherein fish heaven god moved there <em>said</em> years forth a replenish.</p>', '306e606bb94ac4d60c0197efcce37ba6.jpg', 'thing-unto-set-own-years', 6, 1),
(34, '2021-08-23', 'TESTTTT', '<p>dsavsdvdvdvszdvsvsdvsvsdvsdvsddvvsdvsdvsdvd</p>', 'd96a6d9a5afbfb9d4066c4a25b4e7a19.jpg', 'testttt', 6, 1),
(35, '2021-08-20', 'Gedung UPN Jatim', '<p><img src=\"http://localhost/web/InkubatorBisnis/ci_blog/assets/dist/img/posts/5ef4f178278a4eaf16341f37031fb332.jpg\" style=\"width: 758.463px;\"><br></p><p><img src=\"http://localhost/web/InkubatorBisnis/ci_blog/assets/dist/img/posts/aaf3d0d93040b020d7dc335cf36881b1.jpg\" style=\"font-size: 1rem; width: 758.463px;\"></p><p><img src=\"http://localhost/web/InkubatorBisnis/ci_blog/assets/dist/img/posts/43a4761f1f33a8be661d194b090fbf5a.jpg\" style=\"font-size: 1rem; width: 758.463px;\"><br></p>', 'ec072692119c3e16d1bd572ea791b142.jpg', 'gedung-upn-jatim', 8, 1),
(36, '2021-08-20', 'safasfasffas', '<p>fdffewfewefwfff</p>', NULL, 'safasfasffas', 2, 1),
(37, '2021-08-20', 'djbsdkgbksdjgbkjdbgkjdbgkjdbgjwdbgkj', '<p>kdjgbjdbjksgbdjsbgkjsdbgkjsdbgijksdbgijwbg;iwebg;iwebguwebg;uebguwebgouwebuebfubge</p>', NULL, 'djbsdkgbksdjgbkjdbgkjdbgkjdbgjwdbgkj', 2, 1),
(38, '2021-08-23', 'Visi blablabla', '<p>bwhefbiwefbifbwefbufbuebfeiufb</p>', NULL, 'visi-blablabla', 9, 1),
(39, '2021-08-23', 'Gambarrrr', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td><p><img src=\"http://localhost/web/InkubatorBisnis/ci_blog/assets/dist/img/posts/a943a7d57d11ec8b1e069cb643cbd7a3.jpg\" style=\"width: 758.463px;\"><br></p></td><td style=\"text-align: center; \"><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><br></p>', NULL, 'gambarrrr', 8, 1),
(40, '2021-08-25', 'Test Pengumuman', '<p>dadadaddadadadadadadad</p>', '28f7285dc8a3f233b6d8b28dfdc8194e.jpg', 'test-pengumuman', 6, 1),
(41, '2021-08-27', 'Test', '<p>Test test test test</p>', '267fbec3bf6abec669c66d8d9f6e4232.jpeg', 'test-3', 10, 1),
(42, '2021-08-27', 'Test Profil', '<p>test profil bla bla bal&nbsp;</p>', '1605ccce9dbb299173805574d7966f07.jpg', 'test-profil', 11, 1),
(43, '2021-08-27', 'Test Struktur Organisasi', '<p>bajksbfijasbfibaw oijefn</p>', 'ab79ad30638896a8548ceed1a3a100c4.png', 'test-struktur-organisasi', 12, 1),
(44, '2021-08-27', 'Test Program Internal', '<p>jiioqwcyufwaeoqwwery qw</p>', 'bff46bd0339d9d8971d0bf7f8020d7ed.png', 'test-program-internal', 13, 1),
(45, '2021-08-27', 'Test Program Eksternal', '<p>iancbetwvrwuiaenvrtwbgeyfucgbihojspfv</p>', '070652a6955fd5ea79d8ad6959109e84.png', 'test-program-eksternal', 14, 1),
(46, '2021-08-29', 'test', '<p>tester hwibgu nojpk,v</p>', 'eaef671a91042a2e728b131cd64c8946.jpeg', 'test-8', 6, 1),
(47, '2021-08-29', 'ohyigtuvyfjgubkinoqpk', '<p>qwvehrvegfvw</p>', '5875c773e00589244ac89dbf04dccfa0.jpeg', 'ohyigtuvyfjgubkinoqpk', 8, 1),
(48, '2021-08-29', 'teonaiughnowe', '<p>qbtiguhlvwcecv</p>', '24f8bb48fcef3df979f5ad51a20e8ea2.jpeg', 'teonaiughnowe', 2, 1),
(49, '2021-08-29', 'ujafgvknhe', '<p>oigtuyvfybugiojpk</p>', '4f31ec9f4d0580b09f2ccc05495ecc20.png', 'ujafgvknhe', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id_tenant` int(11) NOT NULL,
  `nama_tenant` varchar(200) DEFAULT NULL,
  `logo` varchar(300) NOT NULL,
  `linktenant` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`id_tenant`, `nama_tenant`, `logo`, `linktenant`) VALUES
(2, 'Lppm UPN Jatim test', 'Screenshot_2021-06-30_172205.png', 'http://lppm.upnjatim.ac.id/'),
(3, '', 'ISCOM1.png', 'www.test.com'),
(6, NULL, 'PENSI2.png', 'www.test.com'),
(7, NULL, 'IMG-20190922-WA0017.png', 'www.test234.com'),
(8, NULL, 'ISCOM2.png', 'www.testi2345.com'),
(9, NULL, 'PENSI3.png', 'www.babu.com'),
(10, NULL, 'ISCOM3.png', 'www.aksi.com'),
(11, NULL, 'PENSI4.png', 'www.testmbabu.com'),
(12, NULL, 'PENSI5.png', 'www.testtenant.com'),
(13, 'Kurir Suroboyo', 'Screenshot_20210715-2224531.png', 'www.kurirsuroboyo.com');

-- --------------------------------------------------------

--
-- Table structure for table `uploadf`
--

CREATE TABLE `uploadf` (
  `id_upload` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `file_upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploadf`
--

INSERT INTO `uploadf` (`id_upload`, `name`, `file_upload`) VALUES
(12, 'svdvsdvsdvds', 'bgISCOM3.jpeg'),
(13, 'TEST', 'Doc1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `avatar`, `role`) VALUES
(1, 'admin', '$2y$10$0OAcT33SnZu0nzOIDtr3JemPpkqt7oaTOnv39uZhK5yCV/JCwTS7i', 'Administrators', '6ae9419e7356ff8c4af4b6487e9d8415.png', 'admin'),
(5, 'yudha', '$2y$10$uipEBrPDG3zMKs22rUaloeIzj5DPBSmqLM7IJ4dijIzzbk65vUJom', 'yudha', NULL, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `link` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `priority`, `link`) VALUES
(1, 3, 'https://www.youtube.com/embed/p84AUPkB7kA'),
(3, 5, 'https://www.youtube.com/embed/92NfFuyuMAo'),
(4, 10, 'https://www.youtube.com/embed/p84AUPkB7kA'),
(5, 10, 'https://www.youtube.com/embed/p84AUPkB7kA'),
(6, 12, 'https://www.youtube.com/embed/3Lq_Xt_fXWo'),
(7, 12, 'https://www.youtube.com/embed/WinkCJQh9vQ'),
(8, 14, 'https://www.youtube.com/embed/vJbR5s1g1uI'),
(9, 14, 'https://www.youtube.com/embed/WfxuSBFP-dk'),
(10, 16, 'https://www.youtube.com/embed/WfxuSBFP-dk'),
(11, 16, 'https://www.youtube.com/embed/WfxuSBFP-dk'),
(12, 18, 'https://www.youtube.com/embed/WfxuSBFP-dk'),
(13, 18, 'https://www.youtube.com/embed/aEh-o20glQY'),
(14, 8, 'https://www.youtube.com/embed/23DXFE0mq6g'),
(16, 4, 'https://www.youtube.com/embed/3dxPVZ9TWEI'),
(17, 1, 'https://www.youtube.com/embed/F7fwXqYeDgI'),
(18, 2, 'https://www.youtube.com/embed/5vMgtOP2AdQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id_tenant`);

--
-- Indexes for table `uploadf`
--
ALTER TABLE `uploadf`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id_tenant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `uploadf`
--
ALTER TABLE `uploadf`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
