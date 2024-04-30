-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 04:20 PM
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
-- Database: `taskmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluationque`
--

CREATE TABLE `evaluationque` (
  `QID` int(30) NOT NULL,
  `evaDetail` varchar(2000) NOT NULL,
  `A` varchar(2000) NOT NULL,
  `B` varchar(2000) NOT NULL,
  `C` varchar(2000) NOT NULL,
  `D` varchar(2000) NOT NULL,
  `departQ` varchar(30) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluationque`
--

INSERT INTO `evaluationque` (`QID`, `evaDetail`, `A`, `B`, `C`, `D`, `departQ`, `answer`) VALUES
(1, 'Which of the following expressions is equivalent to (x + 2)(x - 3)?', 'x^2 - 1', 'x^2 + x - 6', 'x^2 - x - 6', '2x^2 - 6', 'Mathematics', 'x^2 - x - 6'),
(2, 'The solutions to the quadratic equation x^2 + 4x + 3 = 0 are:', '-1 and -3', '-1 and 3', '-3 (repeated)', 'None of the above (no real solutions)', 'Mathematics', '-3 (repeated)'),
(3, 'In a right triangle, the length of one leg is 6 cm and the hypotenuse is 10 cm. What is the length of the other leg?', '4 cm', '8 cm', '√24 cm (or 2√6 cm)', '12 cm', 'Mathematics', '√24 cm (or 2√6 cm)'),
(4, 'A circle has a radius of 5 cm. What is the area enclosed by the circle?', '10π cm', '25π cm²', '50π cm', '100π cm²', 'Mathematics', '25π cm²'),
(5, 'A coin is flipped twice. What is the probability of getting two heads?', '1/4', '1/2', '3/4', '1', 'Mathematics', '1/2'),
(6, 'A box contains 3 red balls, 2 blue balls, and 1 green ball. If you draw two balls without replacement, what is the probability of drawing one red ball and one blue ball?', '3/10', '6/15', '1/5', '2/15', 'Mathematics', '1/5'),
(7, 'The integral of the function f(x) = sin(x) is:', 'cos(x)', '-cos(x)', 'sin^2(x)', 'x*sin(x)', 'Mathematics', '-cos(x)'),
(8, 'The limit of the function lim (x -> ∞) (e^x / (x^2 + 1)) is:', '0', '1', 'Infinity', 'Does not exist', 'Mathematics', 'Infinity'),
(9, 'If sin(θ) = 1/2 and θ is in Quadrant I, what is cos(θ)?', '√3/2', '1/2', '-√3/2', '-1/2', 'Mathematics', '1/2'),
(10, 'The expression tan(θ) cot(θ) is equivalent to? (cot(θ) is the reciprocal of tan(θ))', '1', 'sec²(θ)', 'sin²(θ)', 'cos²(θ)', 'Mathematics', '1'),
(11, 'Theme is the central message or underlying meaning of a story. What is the MOST LIKELY theme of a story where a character overcomes a great obstacle?', 'The importance of wealth', 'The dangers of nature', 'The power of perseverance', 'The value of conformity', 'English', 'The power of perseverance'),
(12, 'A metaphor is a comparison between two things that are not alike but share a similar quality. Which sentence uses a metaphor?', 'The car was parked next to the red building.', 'Her heart pounded like a drum.', 'The flowers bloomed in the spring sunshine.', 'The movie was filled with exciting scenes.', 'English', 'Her heart pounded like a drum.'),
(13, 'Foreshadowing is the use of hints or clues that suggest what will happen later in a story. What detail in a story about a camping trip might foreshadow danger?', 'The friends pack plenty of snacks.', 'The weather forecast predicts clear skies.', 'A character forgets their flashlight.', 'The group sets up camp near a beautiful lake.', 'English', 'A character forgets their flashlight.'),
(14, 'Irony is a contrast between expectation and reality. What type of irony is present if a character known for their honesty ends up getting caught in a lie?', 'Dramatic irony', 'Situational irony', 'Verbal irony', 'Cosmic irony', 'English', 'Dramatic irony'),
(15, 'Figurative language uses words in a non-literal way to create a more vivid image. Which of the following is an example of figurative language?', 'The runner crossed the finish line.', 'The house stood tall on the hill.', 'The book contained many interesting facts.', 'The teacher explained the concept clearly.', 'English', 'The house stood tall on the hill.'),
(16, 'Point of view refers to the perspective from which a story is narrated. In a first-person point of view, the story is told by...', 'An omniscient narrator who knows everything', 'A character who uses \"they\" pronouns throughout', 'The author directly addressing the reader', 'A character using \"he\" or \"she\" pronouns', 'English', 'The author directly addressing the reader'),
(17, 'Setting refers to the time and place where a story takes place. Which detail would be MOST helpful in determining the setting of a story?', 'The characters emotional state', 'A description of a historical event', 'The authors biography', 'The characters favorite color', 'English', 'A description of a historical event'),
(18, 'A simile is a comparison between two things using \"like\" or \"as.\" Which sentence uses a simile?', 'The sunset was breathtaking.', 'The test questions were easy as pie.', 'The detective followed the trail carefully.', 'The villain was pure evil.', 'English', 'The test questions were easy as pie.'),
(19, 'A conflict is a struggle between opposing forces in a story. What type of conflict is present if a character is torn between their loyalty to a friend and their sense of duty?', 'Character vs. character', 'Character vs. nature', 'Character vs. society', 'Character vs. self', 'English', 'Character vs. self'),
(20, 'A protagonist is the main character in a story, while the antagonist is the character who opposes the protagonist. Who is the MOST LIKELY antagonist in a story about a young scientist trying to create a cure for a disease?', 'The scientists best friend', 'A rival scientist', 'The scientists supportive parents', 'A sudden power outage', 'English', 'A rival scientist'),
(21, 'በቀጥታ የቀረበውን ሀሳብ ትርጉም ተቃራኒ የሚያሳይ የንግግር ስልት ምን ይባላል?', 'ምልሠት', 'መላምት', 'አፀፋ', 'ምፀት', 'Amharic', 'ምፀት'),
(22, 'ጥብቅ ለሚለው ቃል ተቃራኒ ፍቺ የሚሆነው የቱ ነው?', 'ሜዳ', 'ልቅ', 'ሜካ', 'ሰፈር', 'Amharic', 'ልቅ'),
(23, 'የኡጋንዳ ዋና ከተማ?', 'ካምፓላ', 'ቤይጂንግ', 'ቡካሬስት', 'ትሪፖሊ', 'Amharic', 'ካምፓላ'),
(24, 'የኢራን ዋና ከተማ?', 'ኮፐንሃገን', 'ኡጋንዱጉ', 'ቴህራን', 'ኦታዋ', 'Amharic', 'ቴህራን'),
(25, 'የአባይ ወንዝ የሚጀምረው ከየትኛው የውሃ ምንጭ ነው?', 'ሃዋሳ ሀይቅ', 'ሸዋ ሀይቅ', 'ዝዋይ ሀይቅ', 'ጣና ሀይቅ', 'Amharic', 'ጣና ሀይቅ'),
(26, 'እ.ኤ.አ. በ1993 ከኢትዮጵያ ተገንጥላ ነፃ የሆነች አገር የቷ ናት?', 'ኤርትራ', 'ጅቡቲ', 'ሶማሊያ', 'አቢሲኒያ', 'Amharic', 'ኤርትራ'),
(27, 'እ.ኤ.አ. በ2008 ዓ.ም በቤጂንግ ቻይና በተካሄድው የኦሎምፒክ ጨዋታዎች አትሌት ጥሩነሽ ዲባባ ስንት የወርቅ ሜዳልያ አሸነፈች?', '2', '1', '3', '4', 'Amharic', '2'),
(28, 'ብቅል አውራጅ ለሚለው ፈሊጣዊ አነጋገር ፍቺ የሚሆነው የቱ ነው?', 'ገበሬ', 'ረጅም', 'ወፍ ጠባቂ', 'አጭር', 'Amharic', 'ረጅም'),
(29, 'የአፍሪካ ትልቁ ተራራ የት አገር ይገኛል?', 'ታንዛኒያ', 'ኬንያ', 'ኢትዮጵያ', 'ማላዊ', 'Amharic', 'ታንዛኒያ'),
(30, 'ይዳረጋሉ ለሚለው ቃል ተመሳሳይ ፍቺ የሚሆነው የቱ ነው?', 'ይሆናሉ', 'ይጋፈጣሉ', 'ይጋለጣሉ', 'ይከናወናሉ', 'Amharic', 'ይጋለጣሉ'),
(31, 'Which of the following is NOT a characteristic of living things?', 'Made up of cells', 'Require energy', 'Can reproduce', 'Can change color at will', 'Science', 'Can change color at will'),
(32, 'Photosynthesis is the process by which plants use sunlight, water, and carbon dioxide to produce...', 'Oxygen', 'Nitrogen', 'Glucose', ' Water vapor', 'Science', 'Oxygen'),
(33, 'An atom is the smallest unit of matter that can participate in a chemical reaction. What is the part of an atom that determines its chemical identity?', 'Neutrons', 'Protons', 'Electrons', 'Nucleus', 'Science', 'Protons'),
(34, 'A mixture is a combination of two or more substances that are NOT chemically combined. What is a common separation technique used to separate a mixture of salt and water?', 'Filtration', 'Distillation', 'Chromatography', 'Centrifugation', 'Science', 'Filtration'),
(35, 'For an object to remain at rest or move at a constant velocity, the net force acting on it must be zero. What is the term for this principle?', 'Law of gravity', 'Newtons First Law of Motion', 'Law of conservation of energy', 'Archimedes principle', 'Science', 'Newtons First Law of Motion'),
(36, 'The energy stored in an object due to its motion is called...', 'Potential energy', 'Kinetic energy', 'Thermal energy', 'Chemical energy', 'Science', 'Kinetic energy'),
(37, 'The process by which the Earth crust is broken and reformed is known as...', 'Erosion', 'Plate tectonics', 'Weathering', 'Photosynthesis', 'Science', 'Plate tectonics'),
(38, 'The greenhouse effect is the warming of the Earth surface due to certain gases in the atmosphere trapping heat. Which of the following gases is NOT a major contributor to the greenhouse effect?', 'Carbon dioxide', 'Methane', 'Oxygen', 'Water vapor', 'Science', 'Oxygen'),
(39, 'The scientific method is a process used to gather and analyze evidence. Which of the following is NOT a step in the scientific method?', 'Form a hypothesis', 'Conduct an experiment', 'Draw conclusions', 'Wish for a specific outcome', 'Science', 'Wish for a specific outcome'),
(40, 'Which of the following is a scientific theory that is well-substantiated by evidence and has been repeatedly confirmed through observation and experimentation?', ' A hunch', 'An educated guess', 'A scientific law', 'A personal opinion', 'Science', 'A scientific law'),
(41, 'Which of the following is NOT one of the seven elements of art?', 'Texture ', 'Shape ', 'Harmony ', 'Value', 'Art', 'Value'),
(42, 'Primary colors are the building blocks from which all other colors can be mixed. Which of the following is a primary color?', 'Brown ', 'Yellow', 'Green ', 'Purple', 'Art', 'Yellow'),
(43, 'Perspective is an illusion of depth created on a flat surface. Which type of perspective uses one vanishing point to create a sense of depth?', 'Two-point perspective', 'One-point perspective', 'Three-point perspective', 'Isometric perspective', 'Art', 'One-point perspective'),
(44, 'In drawing, value refers to the lightness or darkness of a color or tone. What technique uses hatching, cross-hatching, and stippling to create value?', 'Blending ', 'Shading', 'Pointillism ', 'Impasse', 'Art', 'Shading'),
(45, 'Chiaroscuro is a high-contrast light-and-shadow technique used in painting and drawing. What famous Renaissance artist is known for his use of chiaroscuro?', 'Leonardo da Vinci', 'Vincent van Gogh', 'Claude Monet', 'Andy Warhol', 'Art', 'Leonardo da Vinci'),
(46, 'Non-objective art focuses on form, color, and composition rather than depicting a recognizable object or scene. Which artistic movement is known for its non-objective style?', 'Impressionism', 'Abstract Expressionism', 'Pop Art', 'Renaissance', 'Art', 'Abstract Expressionism'),
(47, 'In sculpture, positive space refers to the solid form of the sculpture itself, while negative space is the empty space around it.  What is an example of a sculpture that plays with negative space?', 'Statue of Liberty', 'Alexander Calder mobiles', 'Michelangelo David', 'The Great Sphinx of Giza', 'Art', 'Alexander Calder mobiles'),
(48, 'In photography, aperture is the opening of the lens that controls the amount of light that enters the camera. A larger aperture allows for...', 'Slower shutter speeds and shallower depth of field', 'Faster shutter speeds and deeper depth of field', 'Higher ISO and grainy images', 'Lower ISO and sharper images', 'Art', 'Slower shutter speeds and shallower depth of field'),
(49, 'What is the term for a high-pitched scraping sound made with a sharp object on a rough surface used in some art forms?', 'Sgraffito', 'Collage', 'Watercolor wash', 'Grisaille', 'Art', 'Sgraffito'),
(50, 'What is the traditional Japanese art form that involves arranging flowers in a container?', 'Origami ', 'Calligraphy ', 'Ikebana', 'Ukiyo-e', 'Art', 'Ikebana'),
(51, 'The basic accounting equation is Assets = Liabilities + Owners Equity. What account increases owners equity when a service is performed but not yet paid for?', 'Cash', 'Accounts Receivable', 'Accounts Payable', 'Service Revenue', 'Accounting and Finance', 'Accounts Receivable'),
(52, 'A company pays rent for their office space. Which account would this expense be recorded in?', 'Rent Expense', 'Prepaid Rent', 'Accounts Payable', 'Office Supplies', 'Accounting and Finance', 'Rent Expense'),
(53, 'A debit to an asset account generally indicates a(n):', 'Increase in the account', 'Decrease in the account', 'Expense ', 'Revenue', 'Accounting and Finance', 'Decrease in the account'),
(54, 'A company borrows money from a bank. On the companys books, this would be recorded as a(n):', 'Increase in cash and a decrease in liabilities', 'Increase in cash and an increase in owners equity', 'Decrease in cash and an increase in liabilities', 'Decrease in cash and a decrease in owners equity', 'Accounting and Finance', 'Increase in cash and a decrease in liabilities'),
(55, 'A company pays cash to a supplier for materials. Which account(s) would be affected by this transaction?', 'Accounts Payable and Cash', 'Inventory and Accounts Payable', 'Inventory and Cash', 'Inventory and Owners Equity', 'Accounting and Finance', 'Accounts Payable and Cash'),
(56, 'The income statement reports a companys...', 'Assets and liabilities', 'Revenues and expenses', 'Cash inflows and outflows ', 'Owners equity', 'Accounting and Finance', 'Revenues and expenses'),
(57, 'A company issues stock to investors. How would this transaction be reflected in the accounting records?', 'Increase in cash and a decrease in liabilities', 'Increase in cash and an increase in owners equity', 'Decrease in cash and an increase in liabilities', 'Decrease in cash and a decrease in owners equity', 'Accounting and Finance', 'Increase in cash and an increase in owners equity'),
(58, 'The difference between a companys revenues and expenses is called...', 'Net Income', 'Gross Profit', 'Owners Equity', 'Retained Earnings', 'Accounting and Finance', 'Net Income'),
(59, 'The statement of cash flows reports on the inflows and outflows of cash for a company during a specific period. Which of the following is NOT a cash flow activity?', 'Operating activities (e.g., selling goods or services)', 'Investing activities (e.g., purchasing equipment)', 'Financing activities (e.g., issuing stock)', 'All of the above are cash flow activities', 'Accounting and Finance', 'Financing activities (e.g., issuing stock)'),
(60, 'The term \"generally accepted accounting principles\" (GAAP) refers to a set of...', 'Legal requirements for financial reporting', 'Industry-specific accounting standards', 'Internationally recognized accounting guidelines', 'Established accounting principles used by most companies', 'Accounting and Finance', 'Established accounting principles used by most companies'),
(61, 'The primary function of the Human Resources department is to:', 'Focus solely on employee benefits and payroll.', 'Manage all aspects of the employee life cycle within a company.', 'Focus solely on recruiting and hiring new employees.', 'Oversee company finances and budgeting.', 'Human Resources Management', 'Manage all aspects of the employee life cycle within a company.'),
(62, 'Job analysis involves gathering information about a job to understand its duties, skills, and responsibilities. What is the MAIN purpose of job analysis?', 'To evaluate employee performance.', 'To design effective training programs.', 'To improve employee morale.', 'To track employee attendance.', 'Human Resources Management', 'To design effective training programs.'),
(63, 'The process of attracting qualified candidates for a job opening is called:', 'Performance appraisal', 'Recruitment', 'Compensation planning', 'Onboarding', 'Human Resources Management', 'Recruitment'),
(64, 'During the selection process, interviews are a common method used to assess a candidates suitability for a position. What is a KEY element of a successful interview?', 'Asking pre-determined questions in a specific order.', 'Offering the candidate refreshments throughout the interview.', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Sharing confidential company information with the candidate.', 'Human Resources Management', 'Asking pre-determined questions in a specific order.'),
(65, 'Training and development programs are used to equip employees with the necessary skills and knowledge to perform their jobs effectively.  What is a benefit of effective training programs?', 'Increased employee turnover', 'Improved employee performance', 'Reduced communication between departments', 'Decreased employee motivation', 'Human Resources Management', 'Improved employee performance'),
(66, 'Performance appraisals are formal evaluations of an employees job performance.  What is the PRIMARY purpose of a performance appraisal?', 'To punish employees for poor performance.', 'To identify areas for improvement and development.', 'To determine an employees eligibility for a raise.', 'To track employee attendance over time.', 'Human Resources Management', 'To identify areas for improvement and development.'),
(67, 'Compensation refers to the total amount of money and benefits an employee receives for their work.  What are some examples of employee benefits?', 'Salary and bonuses only.', 'Health insurance, paid time off, and retirement plans.', 'Company car and free gym membership only.', 'Discounts on company products and free meals.', 'Human Resources Management', 'Health insurance, paid time off, and retirement plans.'),
(68, 'Employee motivation refers to the willingness and desire of employees to work hard and achieve goals.  What is a factor that can contribute to employee motivation?', 'Micromanaging employees and closely monitoring their work.', 'Providing opportunities for growth and career advancement.', 'Offering limited recognition for achievements.', 'Creating a stressful and competitive work environment.', 'Human Resources Management', 'Providing opportunities for growth and career advancement.'),
(69, 'Employee relations involve managing the relationship between employees and the organization. What is an important aspect of employee relations?', 'Maintaining clear communication channels between employees and management.', 'Keeping employee concerns confidential from management.', 'Enforcing strict company policies without explanation.', 'Discouraging open communication and feedback from employees.', 'Human Resources Management', 'Maintaining clear communication channels between employees and management.'),
(70, 'Strategic HRM aligns human resource practices with the overall business strategy of the organization. What is a benefit of strategic HRM?', 'Increased employee turnover', 'Improved organizational performance.', 'Difficulty in attracting qualified candidates.', 'Decreased employee morale and motivation.', 'Human Resources Management', 'Improved organizational performance.'),
(71, 'The process of planning, organizing, leading, and controlling resources to achieve organizational goals is called:', 'Delegation', 'Management', 'Communication', 'Motivation', 'Management', 'Management'),
(72, 'Planning involves setting goals and developing strategies to achieve them. What is an important step in the planning process?', 'Assigning blame when goals are not met.', 'Defining specific, measurable, achievable, relevant, and time-bound (SMART) goals.', 'Focusing on short-term goals only.', 'Encouraging employees to work without clear direction.', 'Management', 'Defining specific, measurable, achievable, relevant, and time-bound (SMART) goals.'),
(73, 'Organizing involves structuring and coordinating activities and resources to achieve goals. What is an element of effective organization?', 'A lack of clear departmental responsibilities.', 'Establishing a clear chain of command.', 'Encouraging employees to work independently without coordination.', 'Frequently changing organizational structures.', 'Management', 'Establishing a clear chain of command.'),
(74, 'Leading involves motivating, inspiring, and guiding employees to achieve goals. What is a key leadership skill?', 'Micromanaging employees and controlling their every action.', 'Effective communication and building trust with employees.', 'Making decisions without considering employee input.', 'Creating a hostile and competitive work environment.', 'Management', 'Effective communication and building trust with employees.'),
(75, 'Controlling involves monitoring progress towards goals and taking corrective action if needed. What is an example of a control mechanism?', 'Setting ambitious but unrealistic goals.', 'Performance appraisals and reports.', 'Lack of feedback mechanisms to assess progress.', 'Encouraging employees to cover up mistakes.', 'Management', 'Performance appraisals and reports.'),
(76, 'Management styles can vary depending on the situation and the team. Which management style emphasizes collaboration and employee participation in decision-making?', 'Authoritarian leadership', 'Participative leadership', 'Laissez-faire leadership', 'Transactional leadership', 'Management', 'Participative leadership'),
(77, 'Effective communication is essential for successful management.  What is an element of effective communication?', 'Using jargon and technical terms employees may not understand.', 'Actively listening to and understanding employee concerns.', 'Withholding information from employees.', 'Focusing on criticizing and blaming employees.', 'Management', 'Actively listening to and understanding employee concerns.'),
(78, 'Decision-making is a crucial skill for managers. What is an important step in the decision-making process?', 'Making impulsive decisions without considering alternatives.', 'Identifying the problem or opportunity and gathering information.', 'Rushing to implement a solution without evaluating potential consequences.', 'Failing to learn from past mistakes.', 'Management', 'Identifying the problem or opportunity and gathering information.'),
(79, 'Delegation involves assigning tasks and responsibilities to others. What is a benefit of effective delegation?', 'Increased workload for managers.', 'Empowering employees and promoting ownership of tasks.', 'Leading to confusion and unclear roles within the team.', 'Encouraging employees to avoid taking responsibility.', 'Management', 'Empowering employees and promoting ownership of tasks.'),
(80, 'Time management is an essential skill for managers.  What is a time management technique that can improve efficiency?', 'Multitasking on multiple projects simultaneously.', 'Prioritizing tasks and setting deadlines.', 'Procrastinating and putting off important tasks.', 'Constantly checking social media and email notifications.', 'Management', 'Prioritizing tasks and setting deadlines.'),
(81, 'Marketing is the process of creating, communicating, delivering, and exchanging offerings that have value for customers, clients, partners, and society at large. What is one of the MAIN goals of marketing?', 'To increase production costs.', 'To create customer value and satisfaction.', 'To focus solely on short-term sales.', 'To minimize customer interaction.', 'Marketing', 'To create customer value and satisfaction.'),
(82, 'The marketing mix, also known as the 4Ps, are the controllable elements that influence the marketing strategy. What are the 4Ps of marketing?', 'Product, Price, People, Promotion', 'Price, Place, Packaging, Promotion', 'Product, Price, Publicity, Public Relations', 'Planning, Positioning, Promotion, Pricing', 'Marketing', 'Product, Price, People, Promotion'),
(83, 'Market research is the systematic collection and analysis of information about customers, competitors, and the market. What is a benefit of market research?', 'Helps to make informed marketing decisions.', 'Provides inaccurate and outdated information.', 'Creates unnecessary delays in launching marketing campaigns.', 'Limits creativity and innovation in marketing strategies.', 'Marketing', 'Helps to make informed marketing decisions.'),
(84, 'Target marketing involves identifying a specific group of customers to focus marketing efforts on.  What is an element of effective target marketing?', 'Focusing on a broad and undefined audience.', 'Identifying the needs, wants, and characteristics of the target market.', 'Using a one-size-fits-all marketing approach.', 'Ignoring competitor strategies.', 'Marketing', 'Identifying the needs, wants, and characteristics of the target market.'),
(85, 'Product development involves creating new products or improving existing ones. What is an important factor to consider in product development?', 'Focusing solely on production costs and ignoring customer needs.', 'Identifying customer needs and wants.', 'Ignoring competitor offerings and market trends.', 'Rushing the product development process without proper testing.', 'Marketing', 'Identifying customer needs and wants.'),
(86, 'Pricing involves determining the value a customer is willing to pay for a product.  What are some factors to consider when setting pricing?', 'Production costs only.', 'Customer perception of value, competition, and market demand.', 'Setting the highest possible price to maximize profits.', 'Ignoring competitor pricing strategies.', 'Marketing', 'Customer perception of value, competition, and market demand.'),
(87, 'Place, or distribution, refers to making products available to customers in the right place and at the right time.  What are some examples of distribution channels?', 'Online stores, retail stores, and wholesalers.', 'Only social media marketing channels.', 'Customer service and product development departments.', 'Public relations and advertising agencies.', 'Marketing', 'Online stores, retail stores, and wholesalers.'),
(88, 'Promotion involves communicating persuasive messages to a target audience to inform, influence, and remind them about a product.  What are some elements of the promotional mix?', 'Product development, pricing strategy, and distribution channels.', 'Advertising, public relations, sales promotion, and personal selling.', 'Market research, target market selection, and product positioning.', 'Customer service, product fulfillment, and order processing.', 'Marketing', 'Advertising, public relations, sales promotion, and personal selling.'),
(89, 'The marketing concept emphasizes understanding customer needs and wants and developing products and services that meet those needs.  What is a benefit of the marketing concept?', 'Creates a customer-centric approach to business.', 'Focuses solely on increasing sales regardless of customer satisfaction.', 'Ignores competitor strategies and market trends.', 'Limits product development and innovation.', 'Marketing', 'Creates a customer-centric approach to business.'),
(90, 'Customer relationship management (CRM) focuses on building and maintaining strong relationships with customers. What is a benefit of effective CRM?', 'Increases customer churn and dissatisfaction.', 'Improves customer loyalty and retention.', 'Creates a transactional and impersonal relationship with customers.', 'Limits communication and interaction with customers.', 'Marketing', 'Improves customer loyalty and retention.'),
(91, 'The branch of engineering that deals with the design, construction, and operation of machines and systems is called:', 'Civil Engineering', 'Mechanical Engineering', 'Electrical Engineering', 'Chemical Engineering', 'Engineering', 'Mechanical Engineering'),
(92, 'In thermodynamics, the first law states that energy can neither be created nor destroyed, only transformed. A heat engine is a device that converts...', 'Electrical energy into mechanical energy', 'Mechanical energy into thermal energy', 'Chemical energy into nuclear energy', 'Solar energy into wind energy', 'Engineering', 'Mechanical energy into thermal energy'),
(93, 'Civil engineers are involved in the design and construction of infrastructure projects. What is an example of civil engineering work?', 'Designing airplanes', 'Building bridges', 'Developing new medications', 'Creating software programs', 'Engineering', 'Building bridges'),
(94, 'Electrical engineers work with electricity and electronics. What is a common application of electrical engineering?', 'Designing water treatment plants', 'Developing new materials for bridges', 'Designing and building power grids', 'Creating chemical reactions for industrial processes', 'Engineering', 'Designing and building power grids'),
(95, 'Chemical engineers apply the principles of chemistry and physics to large-scale processes. What is an example of a product developed by chemical engineers?', 'Solar panels', 'Suspension bridges', 'Plastics and polymers', 'Electric motors', 'Engineering', 'Plastics and polymers'),
(96, 'Statics is a branch of mechanics that deals with forces acting on stationary objects. What is a key concept in statics?', 'The rate of change of velocity', 'The equilibrium of forces', 'The conversion of energy forms', 'The motion of objects under acceleration', 'Engineering', 'The equilibrium of forces'),
(97, 'Materials science is the study of the properties of materials and their applications. What is an example of a material science application?', 'Designing electrical circuits', 'Developing new drugs and treatments', 'Selecting the right materials for building airplanes', 'Managing water resources and sanitation systems', 'Engineering', 'Selecting the right materials for building airplanes'),
(98, 'Computer engineering combines computer science and electrical engineering principles. What is a common product of computer engineering?', 'Robotics and automation systems', 'Chemical processing plants', 'Civil infrastructure projects like bridges', 'Refining petroleum into usable products', 'Engineering', 'Robotics and automation systems'),
(99, 'Engineering ethics is important for ensuring responsible and safe practices.  What is an example of an ethical consideration in engineering?', 'Choosing the most expensive materials for a project.', 'Prioritizing speed over safety during construction.', 'Considering the environmental impact of a design.', 'Using untested materials without proper evaluation.', 'Engineering', 'Considering the environmental impact of a design.'),
(100, 'Engineering involves problem-solving and design thinking.  What is a key step in the engineering design process?', 'Rushing to implement the first solution without considering alternatives.', 'Defining the problem and identifying the desired outcome.', 'Focusing on the limitations and ignoring the potential benefits.', 'Failing to test and evaluate the designed solution.', 'Engineering', 'Defining the problem and identifying the desired outcome.'),
(101, 'A computer program is a set of instructions that tells a computer what to do. What is a common programming language used for web development?', 'Python', 'Mechanical engineering software', 'Microsoft Word', 'Medical diagnostic tools', 'Computer Science', 'Python'),
(102, 'Hardware refers to the physical components of a computer system, while software refers to the programs and instructions that run on the computer. What is an example of hardware?', 'Operating system (like Windows or macOS)', 'Computer programming language', 'Central Processing Unit (CPU)', 'Digital document format (like PDF)', 'Computer Science', 'Central Processing Unit (CPU)'),
(103, 'The binary system is a system of representation that uses only two digits, 0 and 1. How is the number 10 represented in binary?', '01', '1000', 'XCV', 'There is no equivalent in binary', 'Computer Science', '1000'),
(104, 'An algorithm is a step-by-step procedure for solving a problem.  What is an important characteristic of a good algorithm?', 'It should be complex and difficult to understand.', 'It should be efficient and use minimal resources.', 'It should only work for specific types of problems.', 'It should not be able to be repeated for different inputs.', 'Computer Science', 'It should be efficient and use minimal resources.'),
(105, 'A computer network is a collection of interconnected computers that can communicate with each other. What is a device that connects computers on a network?', 'Printer', 'Scanner', 'Router', 'Webcam', 'Computer Science', 'Router'),
(106, 'The internet is a global network of interconnected computer networks.  What protocol allows communication on the internet?', 'Bluetooth', 'TCP/IP', 'USB', 'HDMI', 'Computer Science', 'TCP/IP'),
(107, 'Data structures are organized ways to store and manage data in a computer.  What is an example of a data structure?', 'Text document', 'Spreadsheet', 'Array', 'Image file', 'Computer Science', 'Array'),
(108, 'Databases are collections of organized data that can be easily accessed and manipulated. What is a common type of database management system (DBMS)?', 'Word processing software', 'Spreadsheet software', 'MySQL', 'Web browser', 'Computer Science', 'MySQL'),
(109, 'Cybersecurity is the practice of protecting computers, networks, and data from unauthorized access, use, disclosure, disruption, modification, or destruction.  What is an example of a cybersecurity measure?', 'Using strong passwords', 'Leaving your computer unlocked when you walk away.', 'Clicking on links from unknown senders.', 'Downloading software from untrusted sources.', 'Computer Science', 'Using strong passwords'),
(110, 'Artificial intelligence (AI) is a branch of computer science that deals with the creation of intelligent agents, which are systems that can reason, learn, and act autonomously.  What is an example of AI technology?', 'Calculator', 'Self-driving car', 'Simple text editor', 'Basic photo editing software', 'Computer Science', 'Self-driving car');

-- --------------------------------------------------------

--
-- Table structure for table `studentaccount`
--

CREATE TABLE `studentaccount` (
  `ID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `emailAdd` varchar(30) NOT NULL,
  `sPassword` varchar(60) NOT NULL,
  `levelEdu` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='This is registered student account list';

--
-- Dumping data for table `studentaccount`
--

INSERT INTO `studentaccount` (`ID`, `FName`, `LName`, `emailAdd`, `sPassword`, `levelEdu`, `department`) VALUES
(17, 'Kidus', 'Seleshi', 'kidus19@gmail.com', '7440879e3c34fd6a8fa61e53308a33', '', ''),
(18, 'Total', 'Done', 'kilalidus@gmail.com', 'dbfa37ada84e2bd3a779eddd32ab8e', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacheraccount`
--

CREATE TABLE `teacheraccount` (
  `ID` int(11) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `emailAdd` varchar(30) NOT NULL,
  `tPassword` varchar(60) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(20) NOT NULL,
  `eduLevel` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `academic` varchar(30) NOT NULL,
  `EdPath` varchar(255) NOT NULL,
  `CvPath` varchar(255) NOT NULL,
  `statusActivity` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacheraccount`
--

INSERT INTO `teacheraccount` (`ID`, `FName`, `LName`, `emailAdd`, `tPassword`, `Gender`, `dob`, `country`, `eduLevel`, `department`, `academic`, `EdPath`, `CvPath`, `statusActivity`) VALUES
(1, 'Kidus', 'Seleshi', 'kidusseleshi19@gmail.com', '7440879e3c34fd6a8fa61e53308a33f9', 'Male', '2024-04-10', 'Bahamas', 'high', 'Mathematics', '', '6630f743cc318.pdf', '6630f743cd327.pdf', 'Disable');

-- --------------------------------------------------------

--
-- Table structure for table `teacherevaanswer`
--

CREATE TABLE `teacherevaanswer` (
  `ID` int(11) NOT NULL,
  `teachEmail` varchar(50) NOT NULL,
  `q1` varchar(500) NOT NULL,
  `q2` varchar(500) NOT NULL,
  `q3` varchar(500) NOT NULL,
  `q4` varchar(500) NOT NULL,
  `q5` varchar(500) NOT NULL,
  `q6` varchar(500) NOT NULL,
  `q7` varchar(500) NOT NULL,
  `q8` varchar(500) NOT NULL,
  `q9` varchar(500) NOT NULL,
  `q10` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacherevaanswer`
--

INSERT INTO `teacherevaanswer` (`ID`, `teachEmail`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(13, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Recruitment', 'Asking pre-determined questions in a specific order.', 'Improved employee performance', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Improved organizational performance.'),
(14, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Recruitment', 'Asking pre-determined questions in a specific order.', 'Improved employee performance', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Maintaining clear communication channels between employees and management.', 'Improved organizational performance.'),
(15, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Maintaining clear communication channels between employees and management.', 'Improved organizational performance.'),
(16, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Maintaining clear communication channels between employees and management.', 'Improved organizational performance.'),
(17, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Maintaining clear communication channels between employees and management.', 'Improved organizational performance.'),
(18, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Recruitment', 'Offering the candidate refreshments throughout the interview.', 'Improved employee performance', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Difficulty in attracting qualified candidates.'),
(19, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Recruitment', 'Offering the candidate refreshments throughout the interview.', 'Improved employee performance', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Decreased employee morale and motivation.'),
(20, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Recruitment', 'Offering the candidate refreshments throughout the interview.', 'Improved employee performance', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Improved organizational performance.'),
(21, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To design effective training programs.', 'Recruitment', 'Offering the candidate refreshments throughout the interview.', 'Improved employee performance', 'To identify areas for improvement and development.', 'Health insurance, paid time off, and retirement plans.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Improved organizational performance.'),
(22, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To improve employee morale.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Providing opportunities for growth and career advancement.', 'Enforcing strict company policies without explanation.', 'Improved organizational performance.'),
(23, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To improve employee morale.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Providing opportunities for growth and career advancement.', 'Enforcing strict company policies without explanation.', 'Improved organizational performance.'),
(24, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To improve employee morale.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Providing opportunities for growth and career advancement.', 'Keeping employee concerns confidential from management.', 'Improved organizational performance.'),
(25, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To improve employee morale.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Providing opportunities for growth and career advancement.', 'Discouraging open communication and feedback from employees.', 'Improved organizational performance.'),
(26, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To improve employee morale.', 'Compensation planning', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Providing opportunities for growth and career advancement.', 'Maintaining clear communication channels between employees and management.', 'Improved organizational performance.'),
(27, 'betlhem@gmail.com', 'Focus solely on recruiting and hiring new employees.', 'To improve employee morale.', 'Recruitment', 'Asking pre-determined questions in a specific order.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Offering limited recognition for achievements.', 'Maintaining clear communication channels between employees and management.', 'Improved organizational performance.'),
(28, 'betlhem@gmail.com', 'Focus solely on recruiting and hiring new employees.', 'To improve employee morale.', 'Recruitment', 'Asking pre-determined questions in a specific order.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Difficulty in attracting qualified candidates.'),
(29, 'betlhem@gmail.com', 'Focus solely on recruiting and hiring new employees.', 'To improve employee morale.', 'Recruitment', 'Asking pre-determined questions in a specific order.', 'Reduced communication between departments', 'To determine an employees eligibility for a raise.', 'Company car and free gym membership only.', 'Offering limited recognition for achievements.', 'Enforcing strict company policies without explanation.', 'Difficulty in attracting qualified candidates.'),
(30, 'betlhem@gmail.com', 'Manage all aspects of the employee life cycle within a company.', 'To improve employee morale.', 'Recruitment', 'Making the candidate feel uncomfortable to see how they handle pressure.', 'Reduced communication between departments', 'To punish employees for poor performance.', 'Health insurance, paid time off, and retirement plans.', 'Providing opportunities for growth and career advancement.', 'Keeping employee concerns confidential from management.', 'Difficulty in attracting qualified candidates.'),
(31, 'kilalidjhjvhvhgjvhgvus@gmail.com', 'To increase production costs.', 'Price, Place, Packaging, Promotion', 'Provides inaccurate and outdated information.', 'Using a one-size-fits-all marketing approach.', 'Ignoring competitor offerings and market trends.', 'Setting the highest possible price to maximize profits.', 'Only social media marketing channels.', 'Market research, target market selection, and product positioning.', 'Focuses solely on increasing sales regardless of customer satisfaction.', 'Improves customer loyalty and retention.'),
(32, 'kilalidjhjvhvhgjvhgvus@gmail.com', 'To increase production costs.', 'Price, Place, Packaging, Promotion', 'Provides inaccurate and outdated information.', 'Using a one-size-fits-all marketing approach.', 'Ignoring competitor offerings and market trends.', 'Setting the highest possible price to maximize profits.', 'Only social media marketing channels.', 'Market research, target market selection, and product positioning.', 'Focuses solely on increasing sales regardless of customer satisfaction.', 'Creates a transactional and impersonal relationship with customers.'),
(33, 'kilalidjhjvhvhgjvhgvus@gmail.com', 'To increase production costs.', 'Price, Place, Packaging, Promotion', 'Provides inaccurate and outdated information.', 'Using a one-size-fits-all marketing approach.', 'Ignoring competitor offerings and market trends.', 'Setting the highest possible price to maximize profits.', 'Only social media marketing channels.', 'Market research, target market selection, and product positioning.', 'Focuses solely on increasing sales regardless of customer satisfaction.', 'Creates a transactional and impersonal relationship with customers.'),
(34, 'kidusseleshi19@gmail.com', 'x^2 + x - 6', '-1 and 3', '8 cm', '25π cm²', '1/2', '6/15', 'sin^2(x)', 'Infinity', '1/2', 'sec²(θ)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evaluationque`
--
ALTER TABLE `evaluationque`
  ADD PRIMARY KEY (`QID`),
  ADD KEY `QID` (`QID`);

--
-- Indexes for table `studentaccount`
--
ALTER TABLE `studentaccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacheraccount`
--
ALTER TABLE `teacheraccount`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherevaanswer`
--
ALTER TABLE `teacherevaanswer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evaluationque`
--
ALTER TABLE `evaluationque`
  MODIFY `QID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `studentaccount`
--
ALTER TABLE `studentaccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacheraccount`
--
ALTER TABLE `teacheraccount`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacherevaanswer`
--
ALTER TABLE `teacherevaanswer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
