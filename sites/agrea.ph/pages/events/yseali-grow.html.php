---
layout: default
name: YSEALI Grow
title: YSEALI Grow
summary: YSEALI GROW is a week-long leadership/agri-preneurship training that has enabled a total of 68 young leaders from Mindanao (18-25 years old) to recognize their potential.
slug: yseali-grow
---

<article itemscope itemtype="http://schema.org/Article" class="flex flex-col sm:flex-row">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<div role="main" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<div class="flex flex-wrap w-full mb-10">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 role="heading" aria-level="1" itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
			<div class="lg:w-1/2 w-full">
				<img alt="<?= $title ?>" class="rounded object-cover object-center" src="images://events/grow/grow.jpg" data-max-width="50%" data-lazyload="progressive,inline">
			</div>
		</div>
		<div itemprop="articleBody">
		<ktml:images max-width="80%" lazyload="progressive,inline">
			<?= article(3)->excerpt ?>
			<?= article(3)->text ?>
			<aside>
				<h3 role="heading" aria-level="3" class="font-title text-2xl text-gray-900 dark:text-gray-100 leading-tight mb-3">Background</h3>
				Due to successful prior projects by USG alumni in otherwise hard-to-reach communities in Mindanao, we have an unusual opportunity to engage youth in these conflict-affected areas from a position of trust. This workshop is focused on youth aged 18-25 years old from Mindanao, particularly out-of-school youth (OSY) from Muslim and indigenous peoples (IP) communities.</p>

				<blockquote>Out-of-School Youth are often marginalized populations, yet in many rural communities these populations outnumber the in-school youth populations. These youths are untapped resources who, when encouraged to dream and actualize those dreams, can make a real difference in their communities.</blockquote>

				<p>The program leveraged the expertise of Filipino USG alumni in agriculture, development, interfaith dialogue, Muslim culture, and indigenous peoples.</p>
			</aside>
			<aside>
				<h3 role="heading" aria-level="3" class="font-title text-2xl text-gray-900 dark:text-gray-100 leading-tight mb-3">YSEALI Grow Overview</h3>

				<p>The workshop facilitates dream building and taking action sessions for the participants and assisted by carefully-selected USG alumni.</p>

				<p><img class="rounded" src="images://events/grow/grow-sidebar-2.jpg" /></p>

				<p>YSEALI Grow sessions cover these components:</p>

				<ol class="mb-2">
					<li class="mb-2">Haraya: Dreaming awake
						<ul class="font-bold">
							<li>Journeying Within</li>
							<li>Spiral of Life</li>
							<li>Dream building</li>
						</ul>
					</li>
					<li>Manawari: Practical tools to cultivate your dreams
						<ul class="font-bold">
							<li>Leadership</li>
							<li>Agriculture</li>
							<li>Call to Action</li>
						</ul>
					</li>
				</ol>
			</aside>
		</ktml:images>
		</div>
	</div>
	<aside role="complementary" class="sm:w-1/4 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4 ">
	<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>

		<div  x-data="{ isOpen: false }">
			<?= import('/partials/navigation/submenu');?>
		</div>

		<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title my-4">"Dream Awake, Cultivate"</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<p><img class="rounded" src="images://events/grow/grow-sidebar-1.jpg" /></p>

		<p>YSEALI Grow gathered 30 youth leaders 6 USG alumni mentors from Lanao del Sur, North Cotabato, and Bukidnon.</p>

		<p>YSEALI Grow’s framework is “Haraya Manawari,” meaning “To dream and to make it happen”. After the training and with seed money from the program, the YSEALI Grow youth leaders implemented 6 agri-projects in their own communities in Mindanao.</p>

		<p><img alt="YSEALI Grow Logos 3" class="rounded" src="images://events/generationgr3en/gengreen-logos.jpg" /></p>
	</ktml:images>
	</aside>
</article>
