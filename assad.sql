-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 07:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assad`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `adds_id` int(11) NOT NULL,
  `adds_title` text NOT NULL,
  `adds_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`adds_id`, `adds_title`, `adds_content`) VALUES
(1, 'مجدي نبيل ', 'الحصه الجايه ملغيه هنكمل مع بعض من الاسبوع الي بعده '),
(2, 'مرحبا من داخل الاعلان الثاني', 'الاعلان الثاني الاعلان الثاني الاعلان الثاني الاعلان الثاني الاعلان الثاني الاعلان الثاني الاعلان الثاني');

-- --------------------------------------------------------

--
-- Table structure for table `add_test_data_for_1`
--

CREATE TABLE `add_test_data_for_1` (
  `test_1_id` int(11) NOT NULL,
  `test_1_number` text NOT NULL,
  `test_1_name` text NOT NULL,
  `test_1_content` text NOT NULL,
  `test_1_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_test_data_for_1`
--

INSERT INTO `add_test_data_for_1` (`test_1_id`, `test_1_number`, `test_1_name`, `test_1_content`, `test_1_time`) VALUES
(2, '1', 'الاختبار الاول', 'الوحدات من 1-10', 'مدة الاجابة ساعتين درجات الامتحان 10'),
(3, '1', 'الاختبار الثاني ', 'الجدول الدوري الحديث - نموزج ذرة بور - نموزج ذرة هوفمان ', 'مدة الاجابة ساعتين درجات الامتحان 10'),
(4, '2', 'الاختبار الثاني ', 'الوحدات من 1-10', 'مدة الاجابة ساعتين درجات الامتحان 10');

-- --------------------------------------------------------

--
-- Table structure for table `add_test_data_for_2`
--

CREATE TABLE `add_test_data_for_2` (
  `test_2_id` int(11) NOT NULL,
  `test_2_number` text NOT NULL,
  `test_2_name` text NOT NULL,
  `test_2_content` text NOT NULL,
  `test_2_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_test_data_for_2`
--

INSERT INTO `add_test_data_for_2` (`test_2_id`, `test_2_number`, `test_2_name`, `test_2_content`, `test_2_time`) VALUES
(22, '1', 'الاختبار الاول ', ' 1الاختبار الاول ', 'مدة الامتحان ساعتين');

-- --------------------------------------------------------

--
-- Table structure for table `add_test_data_for_3`
--

CREATE TABLE `add_test_data_for_3` (
  `test_3_id` int(11) NOT NULL,
  `test_3_number` text NOT NULL,
  `test_3_name` text NOT NULL,
  `test_3_content` text NOT NULL,
  `test_3_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_test_data_for_3`
--

INSERT INTO `add_test_data_for_3` (`test_3_id`, `test_3_number`, `test_3_name`, `test_3_content`, `test_3_time`) VALUES
(4, '1', 'الاختبار الاول', 'الوحدات من 1-10', 'مدة الاجابة ساعتين درجات الامتحان 10');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `code_id` int(11) NOT NULL,
  `codee` text NOT NULL,
  `code_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`code_id`, `codee`, `code_status`) VALUES
(462, 'i8la0nym312bk4', 'active'),
(463, 'k9a750am1263il', 'active'),
(464, 'mb2l036i4897md', 'active'),
(465, '3gmnba612mi5y7', 'active'),
(466, '7dm134lknaa8m2', 'active'),
(467, '0dkam3lalnig1y', 'active'),
(468, 'k71a940ma853di', 'active'),
(469, 'l5n1dy9l30mb64', 'active'),
(470, 'lbg9k57da26108', 'active'),
(471, '2a1im9l07ad3yk', 'active'),
(472, '4l1mg9m835laai', 'active'),
(473, 'kla3dby7aal201', 'active'),
(474, 'bi3aa5m6dg817n', 'active'),
(475, '43la8g5a901b2n', 'active'),
(476, 'bym0lam8635d9i', 'active'),
(477, '7nadlg4ymak2m3', 'active'),
(478, 'lia9ymnb6k2g0l', 'active'),
(479, 'ladaaa9m643lnm', 'active'),
(480, 'a03mn7byl56d8a', 'active'),
(481, '4an78a0mk1g9a2', 'active'),
(482, 'a23560l48yalg9', 'active'),
(483, '2kmablg3l69n8a', 'active'),
(484, 'kylb6m9i8alm03', 'active'),
(485, 'g14lnay52da8bl', 'active'),
(486, 'aa4lk602y1mbi9', 'active'),
(487, '5kmgn3968aa412', 'active'),
(488, 'da7b5ma4aylmi8', 'active'),
(489, 'i572ma19lag048', 'active'),
(490, '1aylam58n2agi3', 'active'),
(491, '4g631yala0nmka', 'active'),
(492, 'm743galdm2l9a0', 'active'),
(493, '634llaa0d8in9k', 'active'),
(494, 'a2a137y8dgbi6n', 'active'),
(495, 'lml243i9ykma1a', 'active'),
(496, 'albkaa5i0mgl29', 'active'),
(497, '6lb19yd7lgm3a5', 'active'),
(498, 'g7aymik91am80a', 'active'),
(499, '56da807mmi4aa1', 'active'),
(500, 'an7aka2amll5m9', 'active'),
(501, 'ni16aym8d3gma5', 'active'),
(502, 'g78lilaam2453y', 'active'),
(503, 'n4a5798l13m2i0', 'active'),
(504, 'i31ng248adaaam', 'active'),
(505, '9i3magbl0yna64', 'active'),
(506, '7g0a41lbd26aik', 'active'),
(507, 'dka7l1y8i5m940', 'active'),
(508, 'b7a2a5a6m18mil', 'active'),
(509, '5m6kynlai94lam', 'active'),
(510, '3a17ladk68m490', 'active'),
(511, '4am01ln96k25b8', 'active'),
(512, '389aaigakyb7n6', 'active'),
(513, '6a4mn273a8ldlb', 'active'),
(514, '9gk4a5mnl7ya61', 'active'),
(515, 'ladalm24ng187a', 'active'),
(516, 'b5da0379yki24m', 'active'),
(517, 'b4aiy516m0l82l', 'active'),
(518, 'aaaldi0la589ny', 'active'),
(519, 'l801i9523ndakg', 'active'),
(520, 'b94n5d8am1ligl', 'active'),
(521, 'ml7gday5k109i3', 'active'),
(522, 'ady2ilmb9mk7a4', 'active'),
(523, '20ay6k4a7lalb8', 'active'),
(524, 'kadin7591l8ab6', 'active'),
(525, 'gbi54kd2ay7ln0', 'active'),
(526, 'ilby9na7d80g45', 'active'),
(527, 'ma5lkga8b7y3im', 'active'),
(528, '306a2im5d8alka', 'active'),
(529, '2mdik873aan9b1', 'active'),
(530, 'ynlm05aia7b1gk', 'active'),
(531, '4a938bi1l6d2ag', 'active'),
(532, 'diaa02b81ny7l5', 'active'),
(533, 'a08a624gaba5y1', 'active'),
(534, 'ylada5g2l36nim', 'active'),
(535, 'i3k8l9527adagl', 'active'),
(536, 'a5481ylk9an0md', 'active'),
(537, 'y1dkaa87mablg4', 'active'),
(538, 'm5840daa293lg6', 'active'),
(539, 'nam73al1ykib4g', 'active'),
(540, '8923ya76gb1daa', 'active'),
(541, '5i7mga8lmn29ad', 'active'),
(542, '4nly8b3g70ad2a', 'active'),
(543, '32lin8bdla71ag', 'active'),
(544, 'ag0knlaa9mdma1', 'active'),
(545, 'bmdl10ag9ay8ka', 'active'),
(546, 'an2g1b5a6703a9', 'active'),
(547, '015la3k2giamba', 'active'),
(548, 'a6y94l8im5dkl0', 'active'),
(549, '7b3l64aldaa198', 'active'),
(550, 'ab21lla7iakdn9', 'active'),
(551, 'ldakgama569an1', 'active'),
(552, 'm7mab1435aal6y', 'active'),
(553, '62bdm0a83m4a9k', 'active'),
(554, 'm63a4bi2ngamll', 'active'),
(555, '201ay9gma73n6l', 'active'),
(556, 'da0794am8n6ygm', 'active'),
(557, '26a43glalm59d8', 'active'),
(558, '9ykbmlaa58n43g', 'active'),
(559, 'ma8ka297lma0id', 'active'),
(560, '87a052yn31l4k6', 'active'),
(561, '7aig2m8405mlyk', 'active'),
(562, 'kd6am4l51ag9ya', 'active'),
(563, '39l45aml6m817g', 'active'),
(564, 'mg36a9lb58al0k', 'active'),
(565, '4g6b52m8nia0k7', 'active'),
(566, '3mil48a0526a17', 'active'),
(567, '91kl62yln3ab8a', 'active'),
(568, 'bk2d0l6a7yn8am', 'active'),
(569, '2la349adgia6ln', 'active'),
(570, '04y3nlm1bg9aa8', 'active'),
(571, 'amdngb9a6k38m0', 'active'),
(572, 'g9a6lya2k18ma5', 'active'),
(573, 'llkyb6mdn937a5', 'active'),
(574, 'i25m3y4al0aa89', 'active'),
(575, 'm7k20y38blai61', 'active'),
(576, 'b4m1aam5lka8il', 'active'),
(577, 'mk1g623b7daana', 'active'),
(578, '8imlayab6lak41', 'active'),
(579, '452a0g3d9ibknl', 'active'),
(580, 'ylakn51lmb9da4', 'active'),
(581, 'mmya1knaa2ligb', 'active'),
(582, 'a2yni1m0853ga7', 'active'),
(583, 'i49kaa1bmal67l', 'active'),
(584, 'ab6kimdam8ln59', 'active'),
(585, '5429iy36manlkd', 'active'),
(586, '2d1mb9lk4a3m0i', 'active'),
(587, 'amb0ay6gk582il', 'active'),
(588, 'ly1aldi8543bgk', 'active'),
(589, '6gily4m9kd3a58', 'active'),
(590, '20mia17g649ynl', 'active'),
(591, '12k3i54l8abndg', 'active'),
(592, '1aa4i03m2anagl', 'active'),
(593, 'y92ign5aa804mk', 'active'),
(594, '2g8liamd4blma6', 'active'),
(595, 'a594lk71gmbmny', 'active'),
(596, '8ag37lada51nia', 'active'),
(597, 'b74ad9gm5i83aa', 'active'),
(598, '8lb5gad3aly4a0', 'active'),
(599, 'ma92iab1ld0kg3', 'active'),
(600, '4m5mla0128aial', 'active'),
(601, 'ml5la2may76b9a', 'active'),
(602, 'kdmlaa021ag685', 'active'),
(603, '1kgil6a3ldyab0', 'active'),
(604, '4lmad1b6528n3y', 'active'),
(605, 'a36am0am84dy2a', 'active'),
(606, '2nl3miayg61adm', 'active'),
(607, 'alm6a8iladgn43', 'active'),
(608, '836a41li2g05aa', 'active'),
(609, 'b2na7aamkm3lg9', 'active'),
(610, 'd53n1lkla26bg8', 'active'),
(611, '413g6abm5aya72', 'active'),
(612, '3a01ln5k8m64mg', 'active'),
(613, 'adla431mgk62am', 'active'),
(614, 'a4lk90maln325a', 'active'),
(615, 'mbk2dlna7a165g', 'active'),
(616, '1m9gkl0b283d6i', 'active'),
(617, 'd9lbm87nka302m', 'active'),
(618, 'mbgaalndik75a6', 'active'),
(619, 'gyama5a9l267dm', 'active'),
(620, 'k8m0a7ay2alabl', 'active'),
(621, 'blana59g1my07i', 'active'),
(622, 'amalnd0ml6a42k', 'active'),
(623, '804aamnlgaabd2', 'active'),
(624, 'dl6327ib4mal5m', 'active'),
(625, 'nbi4yl3da7a91m', 'active'),
(626, 'amd2ika8a4536y', 'active'),
(627, 'a92dmym41al07g', 'active'),
(628, '8y6anml120i37d', 'active'),
(629, 'k12y0mdn9l7aaa', 'active'),
(630, 'a5b03na4yalmlk', 'active'),
(631, '5myl6la8mk9gni', 'active'),
(632, 'adg37l2a94ak06', 'active'),
(633, '806am932ki5lyl', 'active'),
(634, '3a6dm1a05lia9g', 'active'),
(635, '0ad4y983amgiba', 'active'),
(636, 'al0lda6372nm5i', 'active'),
(637, 'an1mgl7im46k5a', 'active'),
(638, '3i0ykgl65a2lad', 'active'),
(639, 'y78ndm91l52364', 'active'),
(640, 'ab5gd1ma3liaa7', 'active'),
(641, 'amabg5lk682i0m', 'active'),
(642, '4bki3ydaam85an', 'active'),
(643, '728lldanaak0mm', 'active'),
(644, '94aa817ym2ngba', 'active'),
(645, '7a9yd2ag01ma35', 'active'),
(646, '2lm4aaki3168gm', 'active'),
(647, 'l4a083b96iaka2', 'active'),
(648, 'alnab8d90lkg3m', 'active'),
(649, 'a49810al637ibk', 'active'),
(650, 'm819lg7ak4nald', 'active'),
(651, 'gm94akamyibn5a', 'active'),
(652, 'la13d9y0nia5ka', 'active'),
(653, '2aa3d0b6941nya', 'active'),
(654, 'klgbm4im07192a', 'active'),
(655, 'la2mk5alad39yi', 'active'),
(656, 'ad0n14i829aybm', 'active'),
(657, 'l5ym2d9473i60b', 'active'),
(658, 'a06da7m382bl5m', 'active'),
(659, 'gi8a02kmn1ya67', 'active'),
(660, 'ln1d482am3a9mi', 'active'),
(661, '8lmi9a035ak47a', 'active'),
(662, 'l9g7yidlma2b43', 'active'),
(663, 'gaanl0b23da84i', 'active'),
(664, 'bak4y6ad8l2g19', 'active'),
(665, 'ga3b2a6ll7y8m4', 'active'),
(666, 'a5daya2a8i31kl', 'active'),
(667, 'gmy592nld7bi4k', 'active'),
(668, 'lk8d06n2ag45la', 'active'),
(669, 'a98mdl54l6aa01', 'active'),
(670, '84ylm50a19n3ma', 'active'),
(671, '58l69aiy273am0', 'active'),
(672, '42l19amaa7d6i8', 'active'),
(673, '8n7mbal1al20a4', 'active'),
(674, '25liam063dnga4', 'active'),
(676, 'am65a80gn94d17', 'active'),
(677, '2klm1a8ag9na6m', 'active'),
(679, '7aag3bda6m4ila', 'active'),
(680, 'm9dkn51i8726lg', 'active'),
(681, 'g8mm9al4b56n3a', 'active'),
(682, 'ab3amg5a6a0k92', 'active'),
(683, '65aym4g2b10i9m', 'active'),
(684, 'naa3i9l8ay7420', 'active'),
(685, 'a0d5m3mak19l8g', 'active'),
(686, '8a0a2al749b5il', 'active'),
(687, 'maa4b7i3aln1m0', 'active'),
(688, 'alag8a54k1m37i', 'active'),
(689, '067agial3bnma5', 'active'),
(690, '0lamd62m78abk1', 'active'),
(691, '02735g61la8k9a', 'active'),
(692, 'lgaand4i8ymlkb', 'active'),
(693, 'y4287g6a5bmkai', 'active'),
(694, 'y6aak2304aa1ml', 'active'),
(695, 'a5i46kbd09y8l1', 'active'),
(696, '0mg25a7ib3a196', 'active'),
(697, '6g7k8a9ala35b1', 'active'),
(698, 'a604dbiamyn1aa', 'active'),
(699, 'my597203a14inb', 'active'),
(700, 'm936ya758d1amg', 'active'),
(701, '3g1ldak9408b27', 'active'),
(702, 'm3i4kma8aablay', 'active'),
(703, '2a5lk390i4g8n6', 'active'),
(704, 'mlyaaa4akmbnl3', 'active'),
(707, '897ida0a362y5b', 'active'),
(708, 'k0a73a6l54ad8y', 'active'),
(709, 'ba3m9y1nakd0m4', 'active'),
(710, 'l286na93gid0mm', 'active'),
(711, 'bm8ladlna75ag6', 'active'),
(712, 'g18nkaad7mylla', 'active'),
(713, '8agkyi4al5n2dm', 'active'),
(714, 'gild59ab0l24a1', 'active'),
(715, 'mmnab605g9a1kl', 'active'),
(716, '45l08aylidambk', 'active'),
(717, '1ydm9ll5bg76n4', 'active'),
(718, 'l25bi3lmy7aaa9', 'active'),
(719, 'dabm2i0981all4', 'active'),
(720, 'g4la7mdi5k1362', 'active'),
(721, '3adlm9l2mk06nb', 'active'),
(722, 'aa5b0y42m3k6a7', 'active'),
(723, 'ak8lg4b1dl95im', 'active'),
(724, 'aa68ialanym24l', 'active'),
(725, '6085daya3na41a', 'active'),
(729, 'mg8l5da4n72i96', 'active'),
(731, 'daa406512ba78y', 'active'),
(736, 'aam469gn50ak2l', 'active'),
(737, 'al0d4875maygb9', 'active'),
(741, '0bg745m1a28naa', 'active'),
(746, 'g5i087mad6ml2l', 'active'),
(747, '7ldbmgy29kn1a0', 'active'),
(748, 'm40g6mk593n2b8', 'active'),
(758, 'k2il4aayadmm9n', 'active'),
(759, '84am37l9yada25', 'active'),
(760, 'a8mad5ikl74mb6', 'active'),
(761, '1an4aka7l5m8bi', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `comment_for_1`
--

CREATE TABLE `comment_for_1` (
  `comment_id` int(11) NOT NULL,
  `comment_writer` text NOT NULL,
  `comment` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_for_1`
--

INSERT INTO `comment_for_1` (`comment_id`, `comment_writer`, `comment`, `date`) VALUES
(3, 'مجدي نبيل ملاك ', 'طلاب الصف الاول ', '20-10-13'),
(4, 'مجدي نبيل ملاك ', 'الصف الاول ', '20-10-15'),
(5, 'مجدي نبيل ملاك ', 'ممكن توضيح للسؤال الثالث ', '20-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `comment_for_2`
--

CREATE TABLE `comment_for_2` (
  `comment_id` int(11) NOT NULL,
  `comment_writer` text NOT NULL,
  `comment` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_for_2`
--

INSERT INTO `comment_for_2` (`comment_id`, `comment_writer`, `comment`, `date`) VALUES
(21, 'مجدي نبيل ملاك ', 'طلاب الفرقه الثانيه ', '20-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `comment_for_3`
--

CREATE TABLE `comment_for_3` (
  `comment_id` int(11) NOT NULL,
  `comment_writer` text NOT NULL,
  `comment` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_for_3`
--

INSERT INTO `comment_for_3` (`comment_id`, `comment_writer`, `comment`, `date`) VALUES
(16, 'مجدي نبيل ملاك ', 'طلاب الصف الثالث ', '20-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `exam_for_1`
--

CREATE TABLE `exam_for_1` (
  `exam_id` int(11) NOT NULL,
  `test_num` int(11) NOT NULL,
  `Q_number` int(11) NOT NULL,
  `question_1` text NOT NULL,
  `a1_1` text NOT NULL,
  `a1_2` text NOT NULL,
  `a1_3` text NOT NULL,
  `a1_4` text NOT NULL,
  `answer_1` text NOT NULL,
  `question_2` text NOT NULL,
  `a2_1` text NOT NULL,
  `a2_2` text NOT NULL,
  `a2_3` text NOT NULL,
  `a2_4` text NOT NULL,
  `answer_2` text NOT NULL,
  `question_3` text NOT NULL,
  `a3_1` text NOT NULL,
  `a3_2` text NOT NULL,
  `a3_3` text NOT NULL,
  `a3_4` text NOT NULL,
  `answer_3` text NOT NULL,
  `question_4` text NOT NULL,
  `a4_1` text NOT NULL,
  `a4_2` text NOT NULL,
  `a4_3` text NOT NULL,
  `a4_4` text NOT NULL,
  `answer_4` text NOT NULL,
  `question_5` text NOT NULL,
  `a5_1` text NOT NULL,
  `a5_2` text NOT NULL,
  `a5_3` text NOT NULL,
  `a5_4` text NOT NULL,
  `answer_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_for_1`
--

INSERT INTO `exam_for_1` (`exam_id`, `test_num`, `Q_number`, `question_1`, `a1_1`, `a1_2`, `a1_3`, `a1_4`, `answer_1`, `question_2`, `a2_1`, `a2_2`, `a2_3`, `a2_4`, `answer_2`, `question_3`, `a3_1`, `a3_2`, `a3_3`, `a3_4`, `answer_3`, `question_4`, `a4_1`, `a4_2`, `a4_3`, `a4_4`, `answer_4`, `question_5`, `a5_1`, `a5_2`, `a5_3`, `a5_4`, `answer_5`) VALUES
(8, 1, 1, '<p>1. What is Artificial intelligence?&nbsp;</p>', 'a) Putting your intelligence into Computer', 'b) Programming with your own intelligence', 'c) Making a Machine intelligent ', 'd) Playing a Game ', '3', '2. Which is not the commonly used programming language for AI?', 'a) PROLOG ', 'b) Java ', 'c) LISP ', 'd) Perl ', '4', '3. Which instruments are required for perceiving and acting upon the environment?', 'a) Sensors and Actuators', 'b) Sensors ', 'c) Perceiver ', 'd) None of the above ', '1', '4. Artificial Intelligence has its expansion in the following application. (Mark all that apply)', 'a) Planning and Scheduling', 'b) Game Playing', 'c) Diagnosis', 'e) All of the above', '4', '5. How many things are concerned in the design of a learning element?', 'a) 1', 'b) 2 ', 'c) 3  ', 'd) 4', '3'),
(9, 1, 2, '<p>6. What is used in determining the nature of the learning problem?&nbsp;</p>', 'a) Environment', 'b) Feedback', 'c) Problem ', 'd) All of the mentioned ', '2', '7. What takes input as an object described by a set of attributes?', 'a) Tree  ', 'b) Graph ', 'c) Decision graph  ', 'd) Decision tree ', '4', '8. What is the other name of informed search strategy?', 'a) Simple search ', 'b) Heuristic search ', 'c) Online search ', 'd) None of the mentioned ', '2', '9. Which search method will expand the node that is closest to the goal?', 'a) Best-first search ', 'b) Greedy best-first search', 'c) A* search ', 'd) None of the mentioned', '2', '10. Which data structure conveniently used to implement BFS?', 'a) Stacks', 'b) Queues ', 'c) Priority Queues ', 'd) All of the mentioned', '2'),
(10, 1, 3, '<p>11. uniform-cost search expands the node n with the __________</p>', 'a) Lowest path cost ', 'b) Heuristic cost', 'c) Highest path cost ', 'd) Average path cost ', '1', '12. Automated vehicle is an example of ______', 'a) Supervised learning ', 'b) Unsupervised learning ', 'c) Active learning ', 'd) Reinforcement learning ', '1', '14. What are the composition for agents in artificial intelligence?', 'a) Program', 'b) Architecture ', 'c) Both Program & Architecture  ', 'd) None of the mentioned ', '3', '14. In linguistic morphology _____________ is the process for reducing inflected words to their root form.', 'a) Rooting ', 'b) Stemming', 'c) Text-Proofing ', 'd) Both Rooting & Stemming', '2', '6. What is used in determining the nature of the learning problem?', 'a) Environment ', 'b) Feedback ', 'c) Problem ', 'd) All of the mentioned', '2'),
(11, 1, 4, '<p style=\"text-align: center;\">Supervised Learning<br />₋ The correct classes of the training data are known as shown in<br />the figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learningareclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs arerealvalued).₋Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, emailspamdetection, diagnosis, image classification , risk management ,score predictionSupervised Learning₋ The correct classesofthe training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification <span style=\"color: #ba372a;\"><strong>(where the outputs are discrete labels, as in spamfiltering)</strong></span> and regression (where the outputs are real-valued).₋Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,<br />score prediction</p>', '------', '-----', '---- ', '---- ', 'Right answer', '1. What is Artificial intelligence?', 'a) Putting your intelligence into Computer ', 'b) Programming with your own intelligence ', 'c) Making a Machine intelligent ', 'd) Playing a Game ', '1', '3. Which instruments are required for perceiving and acting upon the environment?', 'a) Sensors and Actuators', 'b) Sensors ', 'c) Perceiver ', 'd) None of the above ', '2', '2. Which is not the commonly used programming language for AI?', 'a) PROLOG', 'b) Java', 'c) LISP', 'd) Perl', '3', '4. Artificial Intelligence has its expansion in the following application. (Mark all that apply)', 'a) Planning and Scheduling', 'b) Game Playing ', 'c) Diagnosis ', 'd) Robotics', '4'),
(12, 1, 5, '<p>5. How many things are concerned in the design of a learning element?</p>', 'a) 1', 'b) 2 ', 'c) 3 ', 'd) 4 ', '1', '6. What is used in determining the nature of the learning problem?', 'a) Environment ', 'b) Feedback ', 'c) Problem  ', 'd) All of the mentioned ', '2', '7. What takes input as an object described by a set of attributes?', 'a) Tree', 'b) Graph ', 'c) Decision graph  ', 'd) Decision tree ', '3', '8. What is the other name of informed search strategy?', 'a) Simple search', 'b) Heuristic search', 'c) Online search', 'd) None of the mentioned', '4', '9. Which search method will expand the node that is closest to the goal?', 'a) Best-first search ', 'b) Greedy best-first search ', 'c) A* search ', 'd) None of the mentioned', '1'),
(13, 2, 1, '<p><input alt=\"\" src=\"https://lh3.googleusercontent.com/IMyEd7D5n5W49fQPwcPSemwVJQ3pabD8cjMOJbGkcu_e_EZ_aEvmvVCbo0b5vK7EhTQGzFDy1LwsSDOrnAnV9LTEsyQCtlz6mDJhhQvPiQzwfrGnaCw7xtII-Vg5QP_pZaGnU1OuT0g9t1CBmg2bQ-YPVPHfv-MPoen51_tC78z-ec3fyuvafhSamKLnlwWeYyRnWMIodaihz1GEV2Jf_Wqtbpwo0T-KDRj1EE1031Q0AOrxHjABl1eaxnV4ICiyYsljnO-h2zm_2wmt1ejTaDIgvCBzFsgsRB2I0PnLqLBAFUAFi8ERGkk9WXEc-FOzUTRlXfFSxn9zuKLecYsSWhMth9KPy9Mto8aERVPOv2m7zV6XxiB1cTvhfJcJMaIfnqEmUKBsIQYaVxTw9w1UQiEXmZuJ_SUXzdDPNexHMB6FNezEIxKfiSr13iNjKEsXMdOrNAssdgMqBalDCttz-a0oNZwpMKnRVVtODZ8AOgiZ4dWT-ncC0WCxJJU_nlMLIl8fLUFnkGbO_yZeZQUJWzVlq0tfCXOSKs7q4Zyur7rO58n_1Y06eOQivCupiwmjGRMKsRCWpMnEsAOKxRMO5QS7XOZEJw4VED9tM7lVIgiVfDXd5eNGNryb9tdWpVX3MCYxR21lwwZqOYL37Rx8eKPPYb7FpachZQqhwUPP-HREoy5Kooe8x6uCB5EU=w1160-h181-no?authuser=0\" style=\"width: 300px; height: 47px;\" type=\"image\" /></p>\r\n', 'أيون موجب .', 'مجدي نبيل ملاك', 'متعادلة . ', 'لا توجد اجابة . ', '1', '', ' ', ' ', ' ', ' ', 'Right answer', '', '', ' ', ' ', ' ', 'Right answer', '', '', '', '', '', 'Right answer', '', '', ' ', ' ', '', 'Right answer'),
(14, 2, 2, '<p><input alt=\"\" src=\"https://lh3.googleusercontent.com/IMyEd7D5n5W49fQPwcPSemwVJQ3pabD8cjMOJbGkcu_e_EZ_aEvmvVCbo0b5vK7EhTQGzFDy1LwsSDOrnAnV9LTEsyQCtlz6mDJhhQvPiQzwfrGnaCw7xtII-Vg5QP_pZaGnU1OuT0g9t1CBmg2bQ-YPVPHfv-MPoen51_tC78z-ec3fyuvafhSamKLnlwWeYyRnWMIodaihz1GEV2Jf_Wqtbpwo0T-KDRj1EE1031Q0AOrxHjABl1eaxnV4ICiyYsljnO-h2zm_2wmt1ejTaDIgvCBzFsgsRB2I0PnLqLBAFUAFi8ERGkk9WXEc-FOzUTRlXfFSxn9zuKLecYsSWhMth9KPy9Mto8aERVPOv2m7zV6XxiB1cTvhfJcJMaIfnqEmUKBsIQYaVxTw9w1UQiEXmZuJ_SUXzdDPNexHMB6FNezEIxKfiSr13iNjKEsXMdOrNAssdgMqBalDCttz-a0oNZwpMKnRVVtODZ8AOgiZ4dWT-ncC0WCxJJU_nlMLIl8fLUFnkGbO_yZeZQUJWzVlq0tfCXOSKs7q4Zyur7rO58n_1Y06eOQivCupiwmjGRMKsRCWpMnEsAOKxRMO5QS7XOZEJw4VED9tM7lVIgiVfDXd5eNGNryb9tdWpVX3MCYxR21lwwZqOYL37Rx8eKPPYb7FpachZQqhwUPP-HREoy5Kooe8x6uCB5EU=w1160-h181-no?authuser=0\" style=\"width: 900px; height: 140px;\" type=\"image\" /></p>\r\n', '', '', ' ', ' ', 'Right answer', '', ' ', ' ', ' ', ' ', 'Right answer', '', '', ' ', ' ', ' ', 'Right answer', '', '', '', '', '', 'Right answer', '', '', ' ', ' ', '', 'Right answer'),
(15, 2, 3, '<p><img alt=\"\" src=\"https://lh3.googleusercontent.com/IMyEd7D5n5W49fQPwcPSemwVJQ3pabD8cjMOJbGkcu_e_EZ_aEvmvVCbo0b5vK7EhTQGzFDy1LwsSDOrnAnV9LTEsyQCtlz6mDJhhQvPiQzwfrGnaCw7xtII-Vg5QP_pZaGnU1OuT0g9t1CBmg2bQ-YPVPHfv-MPoen51_tC78z-ec3fyuvafhSamKLnlwWeYyRnWMIodaihz1GEV2Jf_Wqtbpwo0T-KDRj1EE1031Q0AOrxHjABl1eaxnV4ICiyYsljnO-h2zm_2wmt1ejTaDIgvCBzFsgsRB2I0PnLqLBAFUAFi8ERGkk9WXEc-FOzUTRlXfFSxn9zuKLecYsSWhMth9KPy9Mto8aERVPOv2m7zV6XxiB1cTvhfJcJMaIfnqEmUKBsIQYaVxTw9w1UQiEXmZuJ_SUXzdDPNexHMB6FNezEIxKfiSr13iNjKEsXMdOrNAssdgMqBalDCttz-a0oNZwpMKnRVVtODZ8AOgiZ4dWT-ncC0WCxJJU_nlMLIl8fLUFnkGbO_yZeZQUJWzVlq0tfCXOSKs7q4Zyur7rO58n_1Y06eOQivCupiwmjGRMKsRCWpMnEsAOKxRMO5QS7XOZEJw4VED9tM7lVIgiVfDXd5eNGNryb9tdWpVX3MCYxR21lwwZqOYL37Rx8eKPPYb7FpachZQqhwUPP-HREoy5Kooe8x6uCB5EU=w1160-h181-no?authuser=0\" style=\"height:181px; width:1160px\" /></p>\r\n', '', '', ' ', ' ', 'Right answer', '', ' ', ' ', ' ', ' ', 'Right answer', '', '', ' ', ' ', ' ', 'Right answer', '', '', '', '', '', 'Right answer', '', '', ' ', ' ', '', 'Right answer'),
(16, 1, 6, '<img src=\"https://lh3.googleusercontent.com/IMyEd7D5n5W49fQPwcPSemwVJQ3pabD8cjMOJbGkcu_e_EZ_aEvmvVCbo0b5vK7EhTQGzFDy1LwsSDOrnAnV9LTEsyQCtlz6mDJhhQvPiQzwfrGnaCw7xtII-Vg5QP_pZaGnU1OuT0g9t1CBmg2bQ-YPVPHfv-MPoen51_tC78z-ec3fyuvafhSamKLnlwWeYyRnWMIodaihz1GEV2Jf_Wqtbpwo0T-KDRj1EE1031Q0AOrxHjABl1eaxnV4ICiyYsljnO-h2zm_2wmt1ejTaDIgvCBzFsgsRB2I0PnLqLBAFUAFi8ERGkk9WXEc-FOzUTRlXfFSxn9zuKLecYsSWhMth9KPy9Mto8aERVPOv2m7zV6XxiB1cTvhfJcJMaIfnqEmUKBsIQYaVxTw9w1UQiEXmZuJ_SUXzdDPNexHMB6FNezEIxKfiSr13iNjKEsXMdOrNAssdgMqBalDCttz-a0oNZwpMKnRVVtODZ8AOgiZ4dWT-ncC0WCxJJU_nlMLIl8fLUFnkGbO_yZeZQUJWzVlq0tfCXOSKs7q4Zyur7rO58n_1Y06eOQivCupiwmjGRMKsRCWpMnEsAOKxRMO5QS7XOZEJw4VED9tM7lVIgiVfDXd5eNGNryb9tdWpVX3MCYxR21lwwZqOYL37Rx8eKPPYb7FpachZQqhwUPP-HREoy5Kooe8x6uCB5EU=w1160-h181-no?authuser=0\" class=\"col-lg-12\">', '', '', ' ', ' ', 'Right answer', '', ' ', ' ', ' ', ' ', 'Right answer', '', '', ' ', ' ', ' ', 'Right answer', '', '', '', '', '', 'Right answer', '', '', ' ', ' ', '', 'Right answer');

-- --------------------------------------------------------

--
-- Table structure for table `exam_for_2`
--

CREATE TABLE `exam_for_2` (
  `exam_id` int(11) NOT NULL,
  `test_num` int(11) NOT NULL,
  `Q_number` int(11) NOT NULL,
  `question_1` text NOT NULL,
  `a1_1` text NOT NULL,
  `a1_2` text NOT NULL,
  `a1_3` text NOT NULL,
  `a1_4` text NOT NULL,
  `answer_1` text NOT NULL,
  `question_2` text NOT NULL,
  `a2_1` text NOT NULL,
  `a2_2` text NOT NULL,
  `a2_3` text NOT NULL,
  `a2_4` text NOT NULL,
  `answer_2` text NOT NULL,
  `question_3` text NOT NULL,
  `a3_1` text NOT NULL,
  `a3_2` text NOT NULL,
  `a3_3` text NOT NULL,
  `a3_4` text NOT NULL,
  `answer_3` text NOT NULL,
  `question_4` text NOT NULL,
  `a4_1` text NOT NULL,
  `a4_2` text NOT NULL,
  `a4_3` text NOT NULL,
  `a4_4` text NOT NULL,
  `answer_4` text NOT NULL,
  `question_5` text NOT NULL,
  `a5_1` text NOT NULL,
  `a5_2` text NOT NULL,
  `a5_3` text NOT NULL,
  `a5_4` text NOT NULL,
  `answer_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_for_2`
--

INSERT INTO `exam_for_2` (`exam_id`, `test_num`, `Q_number`, `question_1`, `a1_1`, `a1_2`, `a1_3`, `a1_4`, `answer_1`, `question_2`, `a2_1`, `a2_2`, `a2_3`, `a2_4`, `answer_2`, `question_3`, `a3_1`, `a3_2`, `a3_3`, `a3_4`, `answer_3`, `question_4`, `a4_1`, `a4_2`, `a4_3`, `a4_4`, `answer_4`, `question_5`, `a5_1`, `a5_2`, `a5_3`, `a5_4`, `answer_5`) VALUES
(44, 1, 1, '<p>1. What is Artificial intelligence?</p>', 'a) Putting your intelligence into Computer', 'b) Programming with your own intelligence', 'c) Making a Machine intelligent ', 'c) Making a Machine intelligent ', '1', '2. Which is not the commonly used programming language for AI?', 'a) PROLOG ', 'b) Java ', 'c) LISP ', 'd) Perl ', '2', '3. Which instruments are required for perceiving and acting upon the environment?', 'a) Sensors and Actuators', 'b) Sensors ', 'c) Perceiver ', 'd) None of the above ', '3', '4. Artificial Intelligence has its expansion in the following application. (Mark all that apply)', 'a) Planning and Scheduling', 'b) Game Playing', 'c) Diagnosis', 'd) Robotics', '4', '5. How many things are concerned in the design of a learning element?', 'a) 1', 'b) 2  ', 'c) 3  ', 'd) 4', '1'),
(45, 1, 2, '<p>1. What is Artificial intelligence?</p>', 'a) Putting your intelligence into Computer', 'b) Programming with your own intelligence', 'c) Making a Machine intelligent ', 'c) Making a Machine intelligent ', '1', '2. Which is not the commonly used programming language for AI?', 'a) PROLOG ', 'b) Java ', 'c) LISP ', 'd) Perl ', '2', '3. Which instruments are required for perceiving and acting upon the environment?', 'a) Sensors and Actuators', 'b) Sensors ', 'c) Perceiver ', 'd) None of the above ', '3', '4. Artificial Intelligence has its expansion in the following application. (Mark all that apply)', 'a) Planning and Scheduling', 'b) Game Playing', 'c) Diagnosis', 'd) Robotics', '4', '5. How many things are concerned in the design of a learning element?', 'a) 1', 'b) 2 ', 'c) 3 ', 'd) 4', '1'),
(47, 1, 3, '<p style=\"text-align: center;\">₋ The correct classes of the training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs are real-valued).₋ Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,<br />score prediction₋ The correct classes of the training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs are real-valued).₋ Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,<br />score prediction₋ The correct classes of the training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs are real-valued).₋ Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,<br />score prediction₋ The correct classes of the training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs are real-valued).₋ Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,<br />score prediction</p>', '----', '----', '---- ', '----- ', '1', '1. What is Artificial intelligence?', 'd) Playing a Game ', 'd) Playing a Game ', 'd) Playing a Game ', 'd) Playing a Game ', '2', '2. What is Artificial intelligence?', 'd) Playing a Game', 'd) Playing a Game ', 'd) Playing a Game ', 'd) Playing a Game ', '3', '3. What is Artificial intelligence?', 'd) Playing a Game', 'd) Playing a Game', 'd) Playing a Game', 'd) Playing a Game', '4', '4. What is Artificial intelligence?', 'd) Playing a Game', 'd) Playing a Game ', 'd) Playing a Game ', 'd) Playing a Game', '1');

-- --------------------------------------------------------

--
-- Table structure for table `exam_for_3`
--

CREATE TABLE `exam_for_3` (
  `exam_id` int(11) NOT NULL,
  `test_num` int(11) NOT NULL,
  `Q_number` int(11) NOT NULL,
  `question_1` text NOT NULL,
  `a1_1` text NOT NULL,
  `a1_2` text NOT NULL,
  `a1_3` text NOT NULL,
  `a1_4` text NOT NULL,
  `answer_1` text NOT NULL,
  `question_2` text NOT NULL,
  `a2_1` text NOT NULL,
  `a2_2` text NOT NULL,
  `a2_3` text NOT NULL,
  `a2_4` text NOT NULL,
  `answer_2` text NOT NULL,
  `question_3` text NOT NULL,
  `a3_1` text NOT NULL,
  `a3_2` text NOT NULL,
  `a3_3` text NOT NULL,
  `a3_4` text NOT NULL,
  `answer_3` text NOT NULL,
  `question_4` text NOT NULL,
  `a4_1` text NOT NULL,
  `a4_2` text NOT NULL,
  `a4_3` text NOT NULL,
  `a4_4` text NOT NULL,
  `answer_4` text NOT NULL,
  `question_5` text NOT NULL,
  `a5_1` text NOT NULL,
  `a5_2` text NOT NULL,
  `a5_3` text NOT NULL,
  `a5_4` text NOT NULL,
  `answer_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_for_3`
--

INSERT INTO `exam_for_3` (`exam_id`, `test_num`, `Q_number`, `question_1`, `a1_1`, `a1_2`, `a1_3`, `a1_4`, `answer_1`, `question_2`, `a2_1`, `a2_2`, `a2_3`, `a2_4`, `answer_2`, `question_3`, `a3_1`, `a3_2`, `a3_3`, `a3_4`, `answer_3`, `question_4`, `a4_1`, `a4_2`, `a4_3`, `a4_4`, `answer_4`, `question_5`, `a5_1`, `a5_2`, `a5_3`, `a5_4`, `answer_5`) VALUES
(27, 1, 1, '<p>1. What is Artificial intelligence?</p>', 'a) Putting your intelligence into Computer', 'b) Programming with your own intelligence', 'c) Making a Machine intelligent ', 'd) Playing a Game ', '1', '2. Which is not the commonly used programming language for AI?', 'a) PROLOG ', 'b) Java ', 'c) LISP ', 'd) Perl ', '2', '3. Which instruments are required for perceiving and acting upon the environment?', 'a) Sensors and Actuators', 'b) Sensors ', 'c) Perceiver ', 'd) None of the above ', '3', '4. Artificial Intelligence has its expansion in the following application. (Mark all that apply)', 'a) Planning and Scheduling', 'b) Game Playing', 'c) Diagnosis', 'e) All of the above', '4', '5. How many things are concerned in the design of a learning element?', 'a) 1', 'b) 2 ', 'c) 3 ', 'd) 4', '1'),
(28, 1, 2, '<p>6. What is used in determining the nature of the learning problem?&nbsp;</p>', 'a) Environment', 'a) Environment', 'a) Environment ', 'a) Environment ', '1', '7. What takes input as an object described by a set of attributes?', 'a) Environment ', 'a) Environment ', 'a) Environment ', 'a) Environment ', '2', '8. What is the other name of informed search strategy?', 'a) Environment', 'a) Environment ', 'a) Environment ', 'a) Environment ', '3', '9. Which search method will expand the node that is closest to the goal?', 'a) Environment', 'a) Environment', 'a) Environment', 'a) Environment', '4', '10. Which data structure conveniently used to implement BFS?', 'a) Environment', 'a) Environment ', 'a) Environment ', 'a) Environment', '1'),
(29, 1, 3, '<p>11. uniform-cost search expands the node n with the __________</p>', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', '1', '12. Automated vehicle is an example of ______', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', '2', '13. What are the composition for agents in artificial intelligence?', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', '3', '14. In linguistic morphology _____________ is the process for reducing inflected words to their root form.', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming', '4', '15. What is used in determining the nature of the learning problem?', 'd) Both Rooting & Stemming', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming ', 'd) Both Rooting & Stemming', '1'),
(30, 1, 4, '<p style=\"text-align: center;\"><span style=\"color: #000000;\">Supervised Learning</span><br /><span style=\"color: #000000;\">₋ The correct classes of the training data are known as shown in</span><br /><span style=\"color: #000000;\">the figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learningareclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs arerealvalued).₋Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, emailspamdetection, diagnosis, image classification , risk management ,score predictionSupervised Learning₋ The correct classesofthe training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification&nbsp;<span style=\"background-color: #c2e0f4;\"><strong>(where the outputs are discrete labels, as in spamfiltering)</strong></span> and regression (where the outputs are real-valued).₋Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,</span><span style=\"color: #000000;\">score predictionSupervised Learning₋ The correct classes of the training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learningareclassification (where the outputs are discrete labels, as in spamfiltering) and regression (where the outputs arerealvalued).₋Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, emailspamdetection, diagnosis, image classification , risk management ,score predictionSupervised Learning₋ The correct classesofthe training data are known as shown inthe figure 1.1 e.g., &ldquo;spam&rdquo; or &ldquo;ham.&rdquo; In our previous examplein introduction₋ The two most common types of supervised learning areclassification&nbsp;<strong>(where the outputs are discrete labels, as in spamfiltering)</strong> and regression (where the outputs are real-valued).₋Supervised learning is used in applications where historicaldata predict likely events e.g.: fraud detection, email spamdetection, diagnosis, image classification , risk management ,score prediction</span></p>', '------', '----', '--- ', '--- ', '1', '1. What is Artificial intelligence?', 'a) PROLOG b) Java ', 'a) PROLOG b) Java ', 'a) PROLOG b) Java ', 'a) PROLOG b) Java ', '1', '2. Which instruments are required for perceiving and acting upon the environment?', 'a) PROLOG b) Java', 'a) PROLOG b) Java ', 'a) PROLOG b) Java ', 'a) PROLOG b) Java ', '2', '3. Which is not the commonly used programming language for AI?', 'd) Perl', 'a) PROLOG b) Java', 'c) LISP', 'a) PROLOG b) Java', '3', '4. Artificial Intelligence has its expansion in the following application. (Mark all that apply)', 'a) Planning and Scheduling', 'c) Diagnosis ', 'b) Game Playing ', 'c) Diagnosis', '4'),
(31, 1, 5, '<p>5. How many things are concerned in the design of a learning element?</p>', 'a) 1', 'b) 2', 'c) 3 ', 'd) 4 ', '1', '6. What is used in determining the nature of the learning problem?', 'a) Environment ', 'b) Feedback ', 'c) Problem ', 'd) All of the mentioned ', '2', '7. What takes input as an object described by a set of attributes?', 'a) Tree', 'b) Graph ', 'c) Decision graph ', 'd) Decision tree ', '3', '8. What is the other name of informed search strategy?', 'a) Simple search', 'b) Heuristic search', 'c) Online search', 'd) None of the mentioned', '4', '9. Which search method will expand the node that is closest to the goal?', 'a) Best-first search', 'b) Greedy best-first search ', 'c) A* search ', 'd) None of the mentioned', '1'),
(36, 1, 6, '<p>يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.</p>\r\n\r\n<p>يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.يسمح باستخدام اآللة الحاسبة. 2- =1( ,1 ، ،2 )هي الجذور التكعيبية للواحد الصحيح. ت M , N , هي مجموعة يمينية من متجهات الوحدة.</p>\r\n\r\n<p><img class=\"col-lg-12\" src=\"https://lh3.googleusercontent.com/IMyEd7D5n5W49fQPwcPSemwVJQ3pabD8cjMOJbGkcu_e_EZ_aEvmvVCbo0b5vK7EhTQGzFDy1LwsSDOrnAnV9LTEsyQCtlz6mDJhhQvPiQzwfrGnaCw7xtII-Vg5QP_pZaGnU1OuT0g9t1CBmg2bQ-YPVPHfv-MPoen51_tC78z-ec3fyuvafhSamKLnlwWeYyRnWMIodaihz1GEV2Jf_Wqtbpwo0T-KDRj1EE1031Q0AOrxHjABl1eaxnV4ICiyYsljnO-h2zm_2wmt1ejTaDIgvCBzFsgsRB2I0PnLqLBAFUAFi8ERGkk9WXEc-FOzUTRlXfFSxn9zuKLecYsSWhMth9KPy9Mto8aERVPOv2m7zV6XxiB1cTvhfJcJMaIfnqEmUKBsIQYaVxTw9w1UQiEXmZuJ_SUXzdDPNexHMB6FNezEIxKfiSr13iNjKEsXMdOrNAssdgMqBalDCttz-a0oNZwpMKnRVVtODZ8AOgiZ4dWT-ncC0WCxJJU_nlMLIl8fLUFnkGbO_yZeZQUJWzVlq0tfCXOSKs7q4Zyur7rO58n_1Y06eOQivCupiwmjGRMKsRCWpMnEsAOKxRMO5QS7XOZEJw4VED9tM7lVIgiVfDXd5eNGNryb9tdWpVX3MCYxR21lwwZqOYL37Rx8eKPPYb7FpachZQqhwUPP-HREoy5Kooe8x6uCB5EU=w1160-h181-no?authuser=0\" style=\"height:500px\" /></p>\r\n', '', '', ' ', ' ', 'Right answer', '', ' ', ' ', ' ', ' ', 'Right answer', '', '', ' ', ' ', ' ', 'Right answer', '', '', '', '', '', 'Right answer', '', '', ' ', ' ', '', 'Right answer');

-- --------------------------------------------------------

--
-- Table structure for table `replay_for_1`
--

CREATE TABLE `replay_for_1` (
  `replay_CODE` int(11) NOT NULL,
  `replay` text NOT NULL,
  `replay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replay_for_1`
--

INSERT INTO `replay_for_1` (`replay_CODE`, `replay`, `replay_id`) VALUES
(4, 'تابع معايا في الشرح او ممكن تستني بعد الحصة اشرحهالك ', 1),
(3, 'تابع معايا في الشرح او ممكن تستني بعد الحصة اشرحهالك ', 2),
(5, 'تابع معايا في الشرح او ممكن تستني بعد الحصة اشرحهالك ', 3),
(3, '<iframe class=\"col-lg-4 col-sm-12\" src=\"https://streamable.com/e/4lhpl6\" width=\"347\" height=\"240\" frameborder=\"0\" allowfullscreen></iframe>', 35),
(3, '<img class=\"col-lg-4 col-sm-12\" src=\"http://i.epvpimg.com/3NpFbab.jpg\" alt=\"\" title=\"Hosted by epvpimg.com\" />', 40),
(3, '<p><a href=\"https://photos.app.goo.gl/2V2nVB1sKC5FKZx58\">jfrggtrghrthrthy</a></p>\r\n', 54),
(3, '<p><a href=\"https://photos.app.goo.gl/2V2nVB1sKC5FKZx58\"><img alt=\"\" class=\"col-l9-4 col-sm-12\" src=\"https://lh3.googleusercontent.com/rTkE_B_ielDvQz7Tz0m_nVzCsfq1oS1Hd2KZeVaaV7V_Ipf9QL7oz1al4fsyxa_jcZbpk0wHU6bjT2cgGHNj77ZzYur3cq7XkUk1GBFHV3mHSV9KvlxrxWwODYYVTucORMBQS4JUxR_bSpPNd9xXHkFXR08_uSPoBiZRbXvLdmKW-wYNFXUqSXK5nKVMJaBvq8lWSxmuvR4J5i5PEfwjhdrDDolU9aJBjdR1rWW-98S90xMnkl6OUQfrYLYzAAI3Eve2GIfbn2B6C0vYJjf58iYq_Su94BzLiiGjEzrQf00c4cRGcZj9LItpG8TVYC99BZ8jd9MbR0FFxyWaznesFk2GXer8pt0nJ8L3G91PJipphcqiq8wDrVpWJqhRrSq-M6SSrFN-av4Vxc343vfelHb6c6Byrek-LnmwBJvjZHE8lvzgia5mBsj5MgHv-eCPzGqhe7GVtlOJ_bZnzMBx0AVr7iwTYe6WdoYxeSxpP9hmroZ_LXavJ81QCa1QP415ibncwhEBnGgjBcaAB7L3dFguyAOLEUBXt0QCdvbpEZI1T-zuo9GLZyq93XDuDO9Ihwey1CTcq7MnLfOI3Y_9anvnIl6GrNy6a1j-NuEYoztIhe6-mcSKixJv3JxzXsLROIeH7d-5J9DYt1aDXUbL8t-fE80cgLBnD66CZ4FrdWwKrhR7oUdD9pFVpO15=w1160-h181-no?authuser=0\" style=\"height:181px; width:1160px\" />jfrggtrghrthrthy</a></p>\r\n', 55),
(3, '<p><img alt=\"\" class=\"col-lg-4\" src=\"https://lh3.googleusercontent.com/rTkE_B_ielDvQz7Tz0m_nVzCsfq1oS1Hd2KZeVaaV7V_Ipf9QL7oz1al4fsyxa_jcZbpk0wHU6bjT2cgGHNj77ZzYur3cq7XkUk1GBFHV3mHSV9KvlxrxWwODYYVTucORMBQS4JUxR_bSpPNd9xXHkFXR08_uSPoBiZRbXvLdmKW-wYNFXUqSXK5nKVMJaBvq8lWSxmuvR4J5i5PEfwjhdrDDolU9aJBjdR1rWW-98S90xMnkl6OUQfrYLYzAAI3Eve2GIfbn2B6C0vYJjf58iYq_Su94BzLiiGjEzrQf00c4cRGcZj9LItpG8TVYC99BZ8jd9MbR0FFxyWaznesFk2GXer8pt0nJ8L3G91PJipphcqiq8wDrVpWJqhRrSq-M6SSrFN-av4Vxc343vfelHb6c6Byrek-LnmwBJvjZHE8lvzgia5mBsj5MgHv-eCPzGqhe7GVtlOJ_bZnzMBx0AVr7iwTYe6WdoYxeSxpP9hmroZ_LXavJ81QCa1QP415ibncwhEBnGgjBcaAB7L3dFguyAOLEUBXt0QCdvbpEZI1T-zuo9GLZyq93XDuDO9Ihwey1CTcq7MnLfOI3Y_9anvnIl6GrNy6a1j-NuEYoztIhe6-mcSKixJv3JxzXsLROIeH7d-5J9DYt1aDXUbL8t-fE80cgLBnD66CZ4FrdWwKrhR7oUdD9pFVpO15=w1160-h181-no?authuser=0\" /></p>\r\n', 56),
(3, '<p><img alt=\"\" class=\"col-lg-4 col-sm-12\" src=\"https://lh3.googleusercontent.com/rTkE_B_ielDvQz7Tz0m_nVzCsfq1oS1Hd2KZeVaaV7V_Ipf9QL7oz1al4fsyxa_jcZbpk0wHU6bjT2cgGHNj77ZzYur3cq7XkUk1GBFHV3mHSV9KvlxrxWwODYYVTucORMBQS4JUxR_bSpPNd9xXHkFXR08_uSPoBiZRbXvLdmKW-wYNFXUqSXK5nKVMJaBvq8lWSxmuvR4J5i5PEfwjhdrDDolU9aJBjdR1rWW-98S90xMnkl6OUQfrYLYzAAI3Eve2GIfbn2B6C0vYJjf58iYq_Su94BzLiiGjEzrQf00c4cRGcZj9LItpG8TVYC99BZ8jd9MbR0FFxyWaznesFk2GXer8pt0nJ8L3G91PJipphcqiq8wDrVpWJqhRrSq-M6SSrFN-av4Vxc343vfelHb6c6Byrek-LnmwBJvjZHE8lvzgia5mBsj5MgHv-eCPzGqhe7GVtlOJ_bZnzMBx0AVr7iwTYe6WdoYxeSxpP9hmroZ_LXavJ81QCa1QP415ibncwhEBnGgjBcaAB7L3dFguyAOLEUBXt0QCdvbpEZI1T-zuo9GLZyq93XDuDO9Ihwey1CTcq7MnLfOI3Y_9anvnIl6GrNy6a1j-NuEYoztIhe6-mcSKixJv3JxzXsLROIeH7d-5J9DYt1aDXUbL8t-fE80cgLBnD66CZ4FrdWwKrhR7oUdD9pFVpO15=w1160-h181-no?authuser=0\" /></p>\r\n', 57),
(3, '<p><a href=\"https://photos.app.goo.gl/24pJdrMD3ieUbrai7\">ادخل هنا هتلاقي الشرحخ </a></p>\r\n', 58),
(3, '<p><a href=\"https://photos.google.com/share/AF1QipOx6kDLqTgWZZ5UsAZhAV03VK_kDOOQUzcFPcBWXosUybxGMI0zkJxtQMCYo0K9sA/photo/AF1QipPi_NUOb7rsnnqjOR7o55fWghL247ebZE-vV6R-?key=SGRkLUFKQVY1T0NPRl9UY19ZWE9ubDhyOTZ0d0VB\">ادخل هنا هتلاقي الشرحخ </a></p>\r\n', 59),
(3, '<video width=\"320\" height=\"240\" controls>\r\n  <source src=\"https://photos.google.com/share/AF1QipOx6kDLqTgWZZ5UsAZhAV03VK_kDOOQUzcFPcBWXosUybxGMI0zkJxtQMCYo0K9sA/photo/AF1QipPi_NUOb7rsnnqjOR7o55fWghL247ebZE-vV6R-?key=SGRkLUFKQVY1T0NPRl9UY19ZWE9ubDhyOTZ0d0VB\">\r\nYour browser does not support the video tag.\r\n</video>', 60),
(3, '<video width=\"320\" height=\"240\" controls>\r\n  <source src=\"https://photos.google.com/share/AF1QipOx6kDLqTgWZZ5UsAZhAV03VK_kDOOQUzcFPcBWXosUybxGMI0zkJxtQMCYo0K9sA/photo/AF1QipPi_NUOb7rsnnqjOR7o55fWghL247ebZE-vV6R-?key=SGRkLUFKQVY1T0NPRl9UY19ZWE9ubDhyOTZ0d0VB\" type=\"video/mp4\">\r\nYour browser does not support the video tag.\r\n</video>', 61);

-- --------------------------------------------------------

--
-- Table structure for table `replay_for_2`
--

CREATE TABLE `replay_for_2` (
  `replay_CODE` int(11) NOT NULL,
  `replay` text NOT NULL,
  `replay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `replay_for_3`
--

CREATE TABLE `replay_for_3` (
  `replay_CODE` int(11) NOT NULL,
  `replay` text NOT NULL,
  `replay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sin_up`
--

CREATE TABLE `sin_up` (
  `user_id` int(11) NOT NULL,
  `user` text NOT NULL,
  `user_name` text NOT NULL,
  `Password` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `fphone` text NOT NULL,
  `year` text NOT NULL,
  `level` text NOT NULL,
  `group` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sin_up`
--

INSERT INTO `sin_up` (`user_id`, `user`, `user_name`, `Password`, `address`, `phone`, `fphone`, `year`, `level`, `group`, `status`, `date`) VALUES
(25, 'بيتر مجدي عزيز ', 'peter magdy', '9db644a7aac99646da669600a1c36e44', 'samalout, minya, egypt', '01270825177', '01270825177', '2021', 'level3', '0', 'admin', '20-09-29'),
(53, 'بيتر مجدى عزيز', 'Pma', 'c26820b8a4c1b3c2aa868d6d57e14a79', 'المنشية سمالوط المنيا', '01270825177', '01270825177', '2021', 'level3', '0', 'user', '20-10-05'),
(55, 'حبيبة سيد حسانين ', 'Habiba Sayed', 'b48e089bd11014d9ddb9d2ab27858b13', 'المنيا  سمالوط ديرسمالوط ', '01124108218', '01155113067', '2021', 'level3', '1', 'user', '20-10-06'),
(56, 'هاجر محمود فرحات', 'Hagar mahmoud farhat', '25510bbee1fb8c65a065922080067605', 'بني غني', '01158966153', '01119259065', '2021', 'level3', '2', 'user', '20-10-06'),
(57, 'خليفة ناصر خليفة', 'Khalifa naser khalifa', 'a591024321c5e2bdbd23ed35f0574dde', 'دفش /سمالوط', '01015669276', '01006761721', '2021', 'level3', '3', 'user', '20-10-06'),
(58, 'مينا وجيه مجدى', 'Wageh', '3d6f62eeaf389d54669416eae1a10fbc', '', '01223850909', '01288984559', '2021', 'level3', '2', 'user', '20-10-06'),
(59, 'محمد نادي محمد ', 'Mohamed nady mohamed', 'c8c8111f08abf4621f2823efa500911d', 'dahy12345', '01116837960', '01116837960', '2021', 'level2', '1', 'user', '20-10-06'),
(60, 'مجدي نبيل ملاك ', 'magdy3', '25d55ad283aa400af464c76d713c07ad', 'samalout, minya, egypt', '01226538598', '01226538598', '2021', 'level1', '1', 'user', '20-10-07'),
(61, 'مجدي نبيل ملاك ', 'magdy121', '81dc9bdb52d04dc20036dbd8313ed055', 'samalout, minya, egypt', '01226538598', '01226538598', '2021', 'level1', '0', 'user', '20-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `std_answer_1`
--

CREATE TABLE `std_answer_1` (
  `answer_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `test_number` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_1` text NOT NULL,
  `answer_2` text NOT NULL,
  `answer_3` text NOT NULL,
  `answer_4` text NOT NULL,
  `answer_5` text NOT NULL,
  `degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_answer_1`
--

INSERT INTO `std_answer_1` (`answer_id`, `std_id`, `test_number`, `question_number`, `answer_number`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `degree`) VALUES
(10, 61, 1, 1, 1, '3', '4', '1', '3', '3', 4),
(11, 61, 1, 2, 2, '1', '2', '2', '4', '4', 1),
(12, 61, 1, 3, 3, '1', '2', '3', '4', '1', 2),
(13, 61, 1, 4, 4, '1', '3', '3', '2', '3', 0),
(14, 61, 1, 5, 5, '1', '1', '1', '1', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `std_answer_2`
--

CREATE TABLE `std_answer_2` (
  `answer_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `test_number` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_1` text NOT NULL,
  `answer_2` text NOT NULL,
  `answer_3` text NOT NULL,
  `answer_4` text NOT NULL,
  `answer_5` text NOT NULL,
  `degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_answer_2`
--

INSERT INTO `std_answer_2` (`answer_id`, `std_id`, `test_number`, `question_number`, `answer_number`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `degree`) VALUES
(17, 61, 1, 1, 1, '1', '2', '3', '4', '1', 5),
(18, 61, 1, 2, 2, '1', '2', '3', '4', '1', 5),
(19, 61, 1, 3, 3, '1', '2', '3', '4', '4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `std_answer_3`
--

CREATE TABLE `std_answer_3` (
  `answer_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `test_number` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `answer_number` int(11) NOT NULL,
  `answer_1` text NOT NULL,
  `answer_2` text NOT NULL,
  `answer_3` text NOT NULL,
  `answer_4` text NOT NULL,
  `answer_5` text NOT NULL,
  `degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_answer_3`
--

INSERT INTO `std_answer_3` (`answer_id`, `std_id`, `test_number`, `question_number`, `answer_number`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answer_5`, `degree`) VALUES
(43, 61, 1, 1, 1, '1', '2', '3', '4', '1', 5),
(44, 61, 1, 2, 2, '1', '2', '3', '3', '1', 4),
(45, 61, 1, 3, 3, '1', '2', '3', '4', '1', 5),
(46, 61, 1, 4, 4, '1', '2', '3', '4', '1', 1),
(47, 61, 1, 5, 5, '1', '2', '3', '4', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student_2_degree`
--

CREATE TABLE `student_2_degree` (
  `student_2_degree` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `stud_level` int(11) NOT NULL,
  `test_number` int(11) NOT NULL,
  `degree` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_2_degree`
--

INSERT INTO `student_2_degree` (`student_2_degree`, `stud_id`, `stud_level`, `test_number`, `degree`) VALUES
(11, 61, 2, 1, 14),
(33, 61, 1, 1, 9),
(36, 61, 3, 1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`adds_id`);

--
-- Indexes for table `add_test_data_for_1`
--
ALTER TABLE `add_test_data_for_1`
  ADD PRIMARY KEY (`test_1_id`);

--
-- Indexes for table `add_test_data_for_2`
--
ALTER TABLE `add_test_data_for_2`
  ADD PRIMARY KEY (`test_2_id`);

--
-- Indexes for table `add_test_data_for_3`
--
ALTER TABLE `add_test_data_for_3`
  ADD PRIMARY KEY (`test_3_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `comment_for_1`
--
ALTER TABLE `comment_for_1`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_for_2`
--
ALTER TABLE `comment_for_2`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_for_3`
--
ALTER TABLE `comment_for_3`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `exam_for_1`
--
ALTER TABLE `exam_for_1`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_for_2`
--
ALTER TABLE `exam_for_2`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_for_3`
--
ALTER TABLE `exam_for_3`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `replay_for_1`
--
ALTER TABLE `replay_for_1`
  ADD PRIMARY KEY (`replay_id`);

--
-- Indexes for table `replay_for_2`
--
ALTER TABLE `replay_for_2`
  ADD PRIMARY KEY (`replay_id`);

--
-- Indexes for table `replay_for_3`
--
ALTER TABLE `replay_for_3`
  ADD PRIMARY KEY (`replay_id`);

--
-- Indexes for table `sin_up`
--
ALTER TABLE `sin_up`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `std_answer_1`
--
ALTER TABLE `std_answer_1`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `std_answer_2`
--
ALTER TABLE `std_answer_2`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `std_answer_3`
--
ALTER TABLE `std_answer_3`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `student_2_degree`
--
ALTER TABLE `student_2_degree`
  ADD PRIMARY KEY (`student_2_degree`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `adds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_test_data_for_1`
--
ALTER TABLE `add_test_data_for_1`
  MODIFY `test_1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_test_data_for_2`
--
ALTER TABLE `add_test_data_for_2`
  MODIFY `test_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `add_test_data_for_3`
--
ALTER TABLE `add_test_data_for_3`
  MODIFY `test_3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=762;

--
-- AUTO_INCREMENT for table `comment_for_1`
--
ALTER TABLE `comment_for_1`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment_for_2`
--
ALTER TABLE `comment_for_2`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comment_for_3`
--
ALTER TABLE `comment_for_3`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam_for_1`
--
ALTER TABLE `exam_for_1`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam_for_2`
--
ALTER TABLE `exam_for_2`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `exam_for_3`
--
ALTER TABLE `exam_for_3`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `replay_for_1`
--
ALTER TABLE `replay_for_1`
  MODIFY `replay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `replay_for_2`
--
ALTER TABLE `replay_for_2`
  MODIFY `replay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replay_for_3`
--
ALTER TABLE `replay_for_3`
  MODIFY `replay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sin_up`
--
ALTER TABLE `sin_up`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `std_answer_1`
--
ALTER TABLE `std_answer_1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `std_answer_2`
--
ALTER TABLE `std_answer_2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `std_answer_3`
--
ALTER TABLE `std_answer_3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `student_2_degree`
--
ALTER TABLE `student_2_degree`
  MODIFY `student_2_degree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
