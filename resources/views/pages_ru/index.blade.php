<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kleio Skin Care System creates to inspire men and women in four corners of the globe to gracefully give pleasure to natural beauty.">
    <meta name="author" content="Christian Dominic F. Yap">
	<meta name="keywords" content="mud soap,kleio,kleio skin care,dead sea salt,toner,facial soap,dead sea minerals,salt soap,sea salt">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Kleio Skin Care System</title>
	<link rel="shortcut icon" href="{{ URL::to('/img/favicon.png') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">

	<meta property="og:image" content="{{ URL::to('/img/landingimage.jpg') }}" />
    <meta property="og:description" content="Kleio Skin Care System creates to inspire men and women in four corners of the globe to gracefully give pleasure to natural beauty." />
    <meta property="og:url" content="http://www.kleioskincare.com" />

    <meta property="og:title" content="Kleio Skin Care System" />

</head>
<body class="body">
	<div id="hamburger-menu">
		<a href="#" id="hamburger-menu-button" role="button" aria-haspopup="true" aria-expanded="false">
			<button class="c-hamburger c-hamburger--htx">
	          	<span>toggle menu</span>
	        </button></span></span>
	    </a>
	</div>
	<nav>
		<div class="container">
			<div class="col-xs-12 menu-container">
				<ul>
					<a href="#landing"><li>Home</li></a>
					<a href="#aboutus"><li>About Us</li></a>
					<a href="#aboutdeadsea"><li>About Dead Sea</li></a>
					<a href="#deadseabenefits"><li>Dead Sea benefits</li></a>
					<a href="#products"><li>Products</li></a>
					<a href="#order-form"><li>Order / Inquire</li></a>
				</ul>
			</div>
		</div>
	</nav>
	<div id="left"></div>
	<div id="right"></div>
	<div id="top"></div>
	<div id="bottom"></div>
	<div id="landing" class="row">
		<div class="col-xs-12 col-md-6">
			<img src="img/logo.svg" alt="Kleio Skin Care System logo" class="logo">
			<h1>Будьте красивы<br>естественно</h1>
			<br><br>
			<a href="#order-form"><button class="chivo styled-button">Inquire and order now!</button></a>
			<br>
			<br>
			<br>
			<p style="font-size:0.8em">View this website in <a href="/" class="language-link">English</a> or <a href="/ar" class="language-link">Arabic</a></p>
		</div>
		<div class="col-xs-12 col-md-6"><img src="img/landingimage.png" alt="Russian girl Kleio model" class="girl hide-on-sm"><img src="img/landingimage-sm.png" alt="Russian girl Kleio model" class="girl-sm hide-on-lg"></div>
	</div>
	<div id="part2">
		<h4>Kleio Skin Care System creates<br class="hide-on-sm"> to inspire men and women<br class="hide-on-sm"> in four corners of the globe<br class="hide-on-sm"> to gracefully give pleasure<br class="hide-on-sm"> to natural beauty.</h4>
		<hr class="hr">
		<h6>Elaine Andaya<br>CEO</h6>
	</div>
	<div class="container">
		<div class="row" id="aboutus">
			<div class="col-md-6 order-md-2 col-xs-12">
				<img src="img/deadsea.jpg" id="dead-sea" alt="Picture of Dead Sea">
				<p class="caption">Dead Sea</p>
			</div>
			<div class="col-md-6 order-md-1 col-xs-12 space grey">
				<h3 class="text-center chivo red">О НАС</h3>
				<hr class="hr-black">
				<p class="text-gap-right playfair">Kleio Skin Care Corp., является на 100%  Филиппинской компанией, нацеленной на создание концепции бренда, состоящего из средств по уходу за кожей, с использованием, импортированных из Иордании, черной грязи и солей Мертвого моря, а также из других замечательных натуральных ингредиентов, со всех уголков Земного Шара, для производства высококачественных и эффективных продуктов,  повышающих естественную красоту.</p>
				<br>
				<p class="text-gap-right playfair">Kleio Skin Care System работает на рынке в течение четырех лет, используя оптовую дистрибьюторскую сеть и розничную стратегию. Из-за высокой стоимости как местных, так и импортных косметических продуктов, компания задумалась о разработке и производстве широкого спектра натуральных косметических продуктов, содержащих ингредиенты Мертвого моря, с розничной ценой на полке, которая находится в среднем ценовом сегменте среди высококачественных брендов, обладая оптимальным эстетическим преимуществом.</p>
				<br>
				<p class="text-gap-right playfair">Мы работаем с лучшими производителями, чтобы разработать и вывести на рынок высококачественные продукты мирового уровня для ухода за кожей лица, тела и волосами. Надлежащее тестирование наших продуктов по уходу за кожей проводилось в лаборатории и никогда не проводилось тестирование продуктов на животных. Аналогичным образом, мы настаиваем на том, чтобы все производители не тестировали ингредиенты на животных в косметических целях.</p>
				<a href="/ru/AboutUs"><button class="chivo styled-button">Read our Mission, Vision, and Values</button></a>
			</div>
		</div>

		<!-- Hide up to md -->
		<!-- <div class="row hide-on-lg mv">
			<div class="col-xs-12 col-md-4">
				<h5 class="text-center chivo black">Mission</h5>
				<p class="grey playfair">To establish Kleio Natural Skin Care as a Filipino cosmetic brand that represents high quality in skin and body care.</p>
				<p class="grey playfair">To use high quality manufacturing and research, a creative marketing program and a comprehensive marketing network using direct distributorship both here and abroad, consumer catalogue and retail outlet.</p>
				<p class="grey playfair">To meet the personal care needs of our customers and become the cosmetic products of choice.</p>
			</div>

			<div class="col-xs-12 col-md-4">
				<h5 class="text-center chivo black">Vision</h5>
				<p class="grey playfair">We envision Kleio Natural Skin Care products to be a brand positioned as a high quality and world class utilizing an imported Dead Sea by-products namely salt and black mud as the main ingredients. We see Kleio Skin System as a cosmetic market leader that constantly produce products focused specifically on the consumers looking for natural and effective products.</p>
			</div>

			<div class="col-xs-12 col-md-4">
				<h5 class="text-center chivo black">Values</h5>
				<p class="grey playfair">We believe there is only one way to be beautiful, the natural way. We’ve believed this now and will do work with this thinking in the following years. We constantly seek out wonderful natural ingredients from all four corners of the globe specifically the Dead Sea, and we bring you products with quality and effectiveness to enhance natural beauty. While doing this, we always do our best to protect the earth and the people who depend on it. We don’t do it this way because it is trending and dashing. We do it because, to us, it’s the only way.</p>
			</div>
		</div> -->
		<!-- Hide up to md -->

		<!-- <div class="row card-deck hide-on-sm">
			<div class="card">
				<div class="card-block">
					<h5 class="text-center chivo black">Mission</h5>
					<p class="grey playfair">To establish Kleio Natural Skin Care as a Filipino cosmetic brand that represents high quality in skin and body care.</p>
					<p class="grey playfair">To use high quality manufacturing and research, a creative marketing program and a comprehensive marketing network using direct distributorship both here and abroad, consumer catalogue and retail outlet.</p>
					<p class="grey playfair">To meet the personal care needs of our customers and become the cosmetic products of choice.</p>
				</div>
			</div>

			<div class="card" >
				<div class="card-block">
					<h5 class="text-center chivo black">Vision</h5>
					<p class="grey playfair">We envision Kleio Natural Skin Care products to be a brand positioned as a high quality and world class utilizing an imported Dead Sea by-products namely salt and black mud as the main ingredients. We see Kleio Skin System as a cosmetic market leader that constantly produce products focused specifically on the consumers looking for natural and effective products.</p>
				</div>
			</div>

			<div class="card">
				<div class="card-block">
					<h5 class="text-center chivo black">Values</h5>
					<p class="grey playfair">We believe there is only one way to be beautiful, the natural way. We’ve believed this now and will do work with this thinking in the following years. We constantly seek out wonderful natural ingredients from all four corners of the globe specifically the Dead Sea, and we bring you products with quality and effectiveness to enhance natural beauty. While doing this, we always do our best to protect the earth and the people who depend on it. We don’t do it this way because it is trending and dashing. We do it because, to us, it’s the only way.</p>
				</div>
			</div>
		</div> -->
		<div class="row" id="aboutdeadsea">
			<div class="col-lg-6 ">
				<img src="img/minerals.jpg" id="minerals" alt="Picture of Dead Sea minerals" >
				<p class="caption">Dead Sea minerals</p>
			</div>
			<div class="col-lg-6 grey space">
				<h3 class="text-center chivo red">About Dead Sea</h3>
				<hr class="hr-black">
				<p class="text-gap-left playfair">Dead Sea, appropriately named because of its high mineral content that allows nothing to survive in its waters, known to be the world’s deepest and saltiest bodies of water located between Israel and Jordan, southeast from Jerusalem in the Middle East. Queen of Sheba, King Herod the Great and Cleopatra, the queen of ancient beauty, are few of those who believed in its therapeutic and curative properties. During the ancient times, Egyptians used the salt in various skin creams, ointments and soaps being used up to the present. Dead Sea Salt on the other hand, was obtained from the mineral rich Dead Sea black mud. Presently, tourists from all over the world visit the place for its medicinal and beautifying effects. </p>
				<br>
				<p class="text-gap-left playfair">Dead Sea Black Mud and Salt are found in abundance on the shores to about 400 meters below sea level. It contains 10% sodium and the rest are 25 different minerals which had been acclaimed for its beneficial effects on health and skin in particular as compared to other sea water containing 90-97% sodium and the rest of various salts and minerals.</p>
			</div>
		</div>
		<div class="row" id="deadseabenefits">
			<div class="col-lg-12">
				<h5 class="text-center chivo" style="padding-left:30px;padding-right:30px;margin-bottom:0;margin-top:40px;">Major minerals and ions of Dead Sea mud and salt:</h5>
				<hr class="hr-red">
			</div>
			<div class="card-columns">
				<div class="card" style="background:#ffaa8b;">
					<div class="card-block">
						<h5>Sodium</h5>
						<p>Improves skin metabolism; important for lymphatic fluid balance; important for immune system function; powerful detoxifying agent; helps cells retain nourishment; excrete waste products; regulates hydration</p>
					</div>
				</div>
				<div class="card" style="background:#cc886f;">
					<div class="card-block">
						<h5>Zinc</h5>
						<p>Facilitates cell renewal; stimulates collagen and elastin synthesis; free radicals scavengers; anti-acne properties; anti-inflammatory; protects against UV radiation; boost immune system</p>
					</div>
				</div>
				<div class="card" style="background:#7F716C;">
					<div class="card-block">
						<h5>Potassium</h5>
						<p>Energizes the body; helps to balance skin moisture; responsible for alkalinizing the cells; regulates hydration</p>
					</div>
				</div>
				
				<div class="card" style="background:#ffaa8b;">
					<div class="card-block">
						<h5>Calcium</h5>
						<p>Increase circulation; strengthens bones and nails; prevents water retention; cleanse pores topically; pore protector</p>
					</div>
				</div>
				<div class="card" style="background:#7F716C;">
					<div class="card-block">
						<h5>Boron</h5>
						<p>Helps relieve symptoms of psoriasis & psoriatic arthritis; body regulator</p>
					</div>
				</div>
				<div class="card" style="background:#ffaa8b;">
					<div class="card-block">
						<h5>Bromide</h5>
						<p>Relaxing and soothing effect; relaxes muscles</p>
					</div>
				</div>
				<div class="card" style="background:#7F716C;" >
					<div class="card-block">
						<h5>Magnesium</h5>
						<p>Anti-allergen for sensitive skin; moisturizer; stress reliever; slows skin aging; calming the nervous system</p>
					</div>
				</div>
				<div class="card" style="background:#cc886f;">
					<div class="card-block">
						<h5>Lithium</h5>
						<p>Increase effectiveness of balneotherapy for psoriasis</p>
					</div>
				</div>
			</div>
		</div>
		<h5 class="text-center chivo" style="margin-bottom:30px;margin-top:70px;">Skin benefits:</h5>
		<hr class="hr-red">
		<div class="benefits">
			<div class="row gap-bottom">
				<div class="col-md-6">
					<img src="img/benefits.jpg" alt="Russian girl Kleio model" id="benefits-img" class="img-fluid">
				</div>
				<div class="col-md-6">
					<br><br>
					<h5 class="chivo">Improves and treats various skin ailments</h5>
					<p class="playfair grey gap-bottom">Acne, skin rashes, dandruff, psoriasis, cellulite, eczema, skin allergies</p>
					<br>
					<h5 class="chivo gap-bottom">Hydrates and moisturizes skin</h5>
					<br>
					<h5 class="chivo gap-bottom">Slows down skin aging through tightening and improves the appearance of fine lines and wrinkles</h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<br class="hide-on-sm"><br class="hide-on-sm">
					<h5 class="chivo gap-bottom">Exfoliates dead skin and buffs away dead skin cells revealing a youthful and healthy complexion</h5>
					<br>
					<h5 class="chivo gap-bottom">Gently cleanses and detoxifies pores by sucking out impurities</h5>
					<br>
					<h5 class="chivo gap-bottom">Improves cell metabolism by helping the body absorb nourishment and eliminate toxins and impurities</h5>
				</div>
				<div class="col-md-6 hide-on-sm">
					<img src="img/benefits2.jpg" alt="Russian girl Kleio model" id="benefits-img2" class="img-fluid">
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container products" id="products">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center chivo red" style="margin-top:100px">Our Products</h3>
				<hr class="hr-black">
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/mudsoap.jpg" alt="Kleio Skin Care System Natural Mud Soap" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Mud Soap</h5>
				<p class="caption usage text-left">Used for bath and basic cleaning of both face and body</p>
				<p class="caption text-left">Recommended for oily skin</p>
				<p class="grey playfair">A gentle bar soap to enrich your skin with minerals from the Dead Sea Mud. It flushes away the dirt, dust, dead skin and excess oil leaving the skin smooth and fresh.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/saltsoap.jpg" alt="Kleio Skin Care System Natural Salt Soap with Honey" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Salt Soap with Honey</h5>
				<p class="caption usage text-left">Used for bath and basic cleaning of both face and body</p>
				<p class="caption text-left">Recommended for normal to dry skin</p>
				<p class="grey playfair">A bar soap with unique combination of Dead Sea salt minerals and honey based on an ancient and proven remedy for dry skin. It restores elasticity and diminishes the appearance of laugh lines while ensuring the optimum moisture content.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/toner.jpg" alt="Kleio Skin Care System Natural Facial Toner" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Facial Toner</h5>
				<p class="caption usage text-left">Recommended for normal to dry skin</p>
				<p class="caption text-left"><b>Also available alcohol-free</b><br>Recommended for oily and sensitive skin</p>
				<p class="grey playfair">Dead Sea water contains a high concentration of various salts and minerals which are known for its purification, nourishing and regenerating properties. With the oily texture, this concentrated water revitalizes and moisturizes the skin leaving a clean and refreshed appearance.<br><br>Ethyl Alcohol commonly referred to as “isopropyl alcohol” basically is used for degreasing and antisepsis. Research reveal that degreasing the skin alleviates production of oil leaving the skin moisturized and healthy looking. Recommended for normal to dry skin.</p>
				<p class="grey playfair">We are also confident of our alcohol free variant designed to improve and control skin problems such as lesions, etc.  Recommended for oily and sensitive skin. </p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/shampoo.jpg" alt="Kleio Skin Care System Natural Hair Shampoo" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Hair Shampoo</h5>
				<p class="caption usage text-left">Recommended for all types of hair and sensitive scalp</p>
				<p class="grey playfair">Dead Sea mineral rich hair shampoo that thoroughly cleanses, nourishes, hydrates and refreshes scalp leaving a soft, radiant and easily manageable all day. It is a combination of natural ingredients and moisturizers that helps, improves, and controls itchy scalp as well as repairs damaged hair. </p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/conditioner.jpg" alt="Kleio Skin Care System Natural Hair Conditioner" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Hair Conditioner</h5>
				<p class="caption usage text-left">Can be applied before, in-between or after shampoo</p>
				<p class="caption text-left">Recommended for all types of hair and sensitive scalp</p>
				<p class="grey playfair">Dead Sea mineral rich hair conditioner that nourishes, hydrates, moisturizes and revivify scalp leaving hair softer, more radiant and easily manageable all day. It contains various natural ingredients that may help improve as well as prevent damages from other hair preparations, sun exposure and aging process.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/cleansing.jpg" alt="Kleio Skin Care  System Natural Facial Cleansing Cream" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care  System Natural Facial Cleansing Cream</h5>
				<p class="caption usage text-left">Recommended for all skin types and highly sensitive skin</p>
				<p class="grey playfair">A Dead Sea mineral rich, nourishing, deep cleansing facial wash that leaves a fresh, natural and healthy looking complexion. It contains Dead Sea salt and black mud and various special cleansing ingredients that gently removes dirt, dissolve sebum, make up particles and deeply cleanse the pores as well as helps soften and facilitates removal of skin black heads.  Incorporated also are moisturizers to prevent dryness and other skin damages.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/showergel.jpg" alt="Kleio Skin Care System Natural Shower Gel" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Shower Gel</h5>
				<p class="caption usage text-left">Recommended for all skin types</p>
				<p class="grey playfair">Dead Sea mineral rich body cleansing, moisturizing, nourishing and refreshing shower gel. It gently washes away dirt, dry skin and other skin impurities as well as help control and prevent dryness, roughness and cracking of the skin. Leaves skin feeling smooth, refreshed and naturally healthy looking complexion.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/facialSPF.jpg" alt="Kleio Skin Care System Natural Facial Cream with SPF" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Facial Cream with <a href="#" data-toggle="tooltip" data-placement="top" title="SPF, stands for Sun Protection Factor, measures on how well the sunscreen preparation can protect our skin from UVB rays. The figure indicates the number of times longer the skin can be protected from harmful sun rays.">SPF</a></h5>
				<p class="caption usage text-left"><b>Available in SPF 50, SPF 20, and SPF88</b><br>For use under make-up or alone</p>
				<p class="caption text-left">Recommended for all skin types especially the highly sensitive skin with wrinkles and other impurities. Apply in the morning and may reapply as desired</p>
				<p class="grey playfair">Facial day cream, moisturizer, nourishing and revitalizing sunscreen that retains natural and replaces lost moisture for repair and growth while it protects the skin from harmful sun rays. Smoothens and refines the clarity and texture of the facial skin.<br><br>Among the ingredients that repair skin damages from infrared heat rays, it contains Titanium Dioxide to block both UVA, which causes sun damaged skin aging and UVB, which causes painful sunburn. Titanium Dioxide is incorporated for optimum skin protection from the so called Ultraviolet Rays from the sun.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/facialNight.jpg" alt="Kleio Skin Care System Natural Facial Night Cream" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Facial Night Cream</h5>
				<p class="caption usage text-left">Apply at night to clean face and neck</p>
				<p class="caption text-left">Recommended for all skin types especially the highly sensitive skin with wrinkles and other impurities</p>
				<p class="grey playfair">An anti-aging, moisturizing, nourishing, and revitalizing night cream that smoothens and refines the clarity and texture of the facial skin.<br><br>For maximum effects from reduction of roughness and irritation of the skin to complete repair and rejuvenation, we incorporated natural ingredients such as Dead Sea minerals, honey extract and Cassia Angustifolia Seed Polysaccharide. <br><br>Cassia Angustifolia is a native herb from India that functions for hydration and retention of moisture.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2">
				<img src="img/products/mudmaskBody.jpg" alt="Kleio Skin Care System Natural Dead Sea Facial or Body Mud Mask" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Facial or Body Mud Mask</h5>
				<p class="caption usage text-left"><b>Available in Menthol and Unscented variants</b></p>
				<p class="caption text-left">Recommended for all skin types</p>
				<p class="grey playfair">Authentic Dead Sea facial mud masks prepared to deeply cleanse and unclogs the pores from dirt deposits and skin impurities. <br><br>Combination of the various minerals of excellent skin benefits relieves tension on the skin leading to shrinkage of the pores and reduction of wrinkles and fine lines leaving a soft, smooth and healthy and radiant facial skin.<br><br>Menthol, naturally obtained from peppermint reduces discomforts and gives a soothing and refreshing feel.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Salt Scrub with Essential Oil (Virgin Coconut Oil)</h5>
				<p class="grey playfair" style="margin-top:15px;">Authentic Dead Sea Salt Scrub prepared to get rid of dead skin cells, dirt and other skin impurities leaving a new and clean upper skin layer. Moisturized with our very own Philippine Organic Virgin Coconut Oil for a younger looking, rejuvenated and amazingly radiant skin.<br><br>Dead Sea Salt is excellent in terms of exfoliation and nourishing with more than 25 different minerals with optimum skin benefits. It also helps lessen, if not relieve, aches and muscle fatigue leaving the body feeling refreshed and relaxed. <br><br>Virgin Coconut Oil (VCO), has been used since the ancient times to treat extremely dry skin and other skin infections. Its addition to Dead Sea salt makes skin extraordinarily moisturized and regenerated.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Facial Exfoliating Cream</h5>
				<p class="caption usage text-left">Recommended for all skin types</p>
				<p class="grey playfair" style="margin-top:15px;">Dead Sea Salt as a great exfoliating and nourishing agent together with Apricot Scrub makes an excellent combination for amazingly clear, soft and younger looking skin.<br><br>Dead Sea Salt is excellent in terms of exfoliation and nourishing with more than 25 different minerals with optimum skin benefits. It contains anti-oxidants which prevents premature signs of aging. Also contains Prunus Armeniaca Shell Scrub (Apricot) also contains skin nutrients with promising moisturizing, revitalizing and nourishing effects on your precious skin.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Foot Soak </h5>
				<p class="caption usage text-left">Recommended for all skin types</p>
				<p class="grey playfair" style="margin-top:15px;">Foot Soak enriched with Dead Sea Salt Minerals for cleansing, moisturizing and nourishing. It gently softens and washes away dry and rough skin. It also helps control and prevents dryness and cracking of the feet. Leaves feet feeling smooth, soothed, relaxed and naturally healthy looking complexion. Use of Kleio Skin Care System Natural Foot Scrub is highly recommended.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Foot/Body Scrub</h5>
				<p class="caption usage text-left">Recommended for all skin types</p>
				<p class="grey playfair" style="margin-top:15px;">Dead Sea Salt as a great exfoliating and nourishing agent together with Walnut Powder makes an excellent combination for amazingly clear, soft and younger looking skin.<br><br>Dead Sea Salt is excellent in terms of exfoliation and nourishing with more than 25 different minerals with optimum skin benefits. It contains anti-oxidants which prevents premature signs of aging. Also contains Juglans Regia (Walnut) Shell Powder is a natural, non-toxic, clinically safe plant extract and an excellent exfoliating ingredient with a good anti-oxidant properties. It scrub off dead skin cells to reveal a revitalized, rejuvenated and healthy looking skin. </p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Facial Foam Wash</h5>
				<p class="caption usage text-left">Recommended for all skin types and highly sensitive skin</p>
				<p class="grey playfair" style="margin-top:15px;">Kleio Skin Care System Natural Dead Sea Facial Foam WashA Dead Sea mineral rich, nourishing, deep cleansing facial wash that leaves a fresh, natural and healthy looking complexion. <br><br>It contains Dead Sea salt and black mud and various special cleansing ingredients that gently removes dirt, dissolve sebum, make up particles and deeply cleanse the pores as well as helps soften and facilitates removal of skin black heads.  Incorporated also are moisturizers to prevent dryness and other skin damages. </p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Bubble Bath</h5>
				<p class="caption usage text-left">Recommended for all skin types</p>
				<p class="grey playfair" style="margin-top:15px;">Dead Sea mineral rich body cleansing, moisturizing and nourishing bubble bath. It gently washes away dirt, dry skin and other skin impurities as well as help control and prevent dryness, roughness and cracking of the skin. Leaves skin feeling smooth, refreshed, fragrant and naturally healthy looking complexion.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Foot Lotion</h5>
				<p class="caption usage text-left">Recommended for all skin types</p>
				<p class="grey playfair" style="margin-top:15px;">Mineral rich Dead Sea Salt with mineral and peppermint oils makes an excellent combination to reveal a nourished, moisturized, rejuvenated, refreshed and amazingly silky soft feet.<br><br>Contains Mineral Oil, an essential oil that effectively retains moisture and helps absorption of nutrients in the skin especially in severely dry and cracked feet. It is safe for sensitive skin and hypoallergenic. Also contains Mentha Piperita (Peppermint) Oil is a plant extract with antimicrobial properties that prevents itchiness and development of skin problems and other impurities. It also gives a refreshing and cooling effects that relaxes the stiffed and tired muscle.</p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Hand Lotion</h5>
				<p class="caption usage text-left">Recommended for all skin types and highly sensitive skin</p>
				<p class="grey playfair" style="margin-top:15px;">A Hand Lotion enriched with Dead Sea Salt Minerals blended to perfection with natural oils to reveal a moisturized, nourished and amazingly healthy silky soft hand.<br><br>Contains Mineral Oil, an essential oil that effectively retains moisture and helps in absorption of nutrients in the skin especially in severely dry and rough hand. It is safe for sensitive skin and hypoallergenic. Also contains Prunus Amygdalus Dulcis (Sweet Almond) Oil, an extract of almond seed enriched with Vitamins A and B with excellent antioxidants and anti-aging properties. </p>
			</div>
		</div>
		<div class="row product-item">
			<div class="col-lg-4 offsetl-lg-2"></div>
			<div class="col-lg-6">
				<h5 class="chivo">Kleio Skin Care System Natural Dead Sea Body Lotion with <a href="#" data-toggle="tooltip" data-placement="top" title="SPF, stands for Sun Protection Factor, measures on how well the sunscreen preparation can protect our skin from UVB rays. The figure indicates the number of times longer the skin can be protected from harmful sun rays.">SPF20</a></h5>
				<p class="caption usage text-left">Apply to desired areas and may reapply every 2 to 4 hours</p>
				<p class="caption text-left">Recommended for all skin types especially the highly sensitive skin</p>
				<p class="grey playfair" style="margin-top:15px;">A Dead Sea Mineral rich body lotion, moisturizer, nourishing and revitalizing sunscreen that retains natural and replaces lost moisture for repair and growth while it protects the skin from harmful sun rays. Smoothens and refines the clarity and texture of the facial skin.<br><br>Among the ingredients that repair skin damages from infrared heat rays, it contains Titanium Dioxide to block both UVA, which causes sun damaged skin aging and UVB, which causes painful sunburn. Titanium Dioxide is incorporated for optimum skin protection from the so called Ultraviolet Rays from the sun.</p>
			</div>
		</div>

	</div>
	<div class="container-fluid" id="order-form">
		<div class="row">
			<div class="col-lg-12 order">
				<h2 class="text-center chivo">Order or inquire now!</h2>
				<br><br>
				<form id="contactus" action="/contact" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-xs-12 col-lg-6 form-group">
                            <label>Name:</label><br>
                            <input type="text" id="contact-name" name="name" class="form-control playfair" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-xs-12 col-lg-6 form-group">
                            <label>Email:</label><br>
                            <input type="text" id="contact-email" name="email" class="form-control playfair"  required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-xs-12 col-lg-6 form-group">
                            <label>Message:</label><br>
                            <textarea rows=2 type="text" id="contact-message" name="message" required class="form-control playfair" ></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-xs-12 col-lg-6 form-group">
                            <button type="submit" class="chivo">Send</button>
                        </div>
                    </div>
                    
                </form>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
</body>
</html>