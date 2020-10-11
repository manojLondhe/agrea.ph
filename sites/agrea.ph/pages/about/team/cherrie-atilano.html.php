---
layout: default
title: Cherrie Atilano
position: Founding Farmer, President and CEO
visible: false
summary: Cherrie is the President and Founding Farmer of AGREA Philippines. She is also a co-founder of HATIENDA Holdings Inc., an agritourism and agri-processing space to produce Filipino agricultural products for local and exports market.
slug: cherrie-atilano
---
<article itemscope itemtype="https://schema.org/Person" class="max-w-4xl m-auto mt-8">
	<ktml:images max-width="25%" lazyload="progressive,inline">
	<h1 role="heading" aria-level="1" itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title ?></h1>
	<p itemprop="jobTitle" class="mb-2 text-sm font-medium"><?= $position ?></p>
	<div class="h-1 w-20 bg-green-500 rounded mb-6"></div>
	<img itemprop="image" class="rounded md:w-1/4 md:float-right md:ml-4 mb-6" src="images://team/<?= $slug ?>.jpg" alt="<?= $title ?>">
	<div class="md:inline" itemprop="articleBody">
		<p>Cherrie is the President and Founding Farmer of AGREA Philippines. She is also a co-founder of HATIENDA Holdings Inc., an agritourism and agri-processing space to produce Filipino agricultural products for local and exports market.</p>
		<p>She started working with the farmers at the age of 12 by teaching them sustainable ways on farming that she read from a book. She graduated Magna Cum Laude with a Bachelor’s Degree in Agriculture, Major in Horticulture Specializing on Tissue Culture from the Visayas State University in Leyte.</p>
		<p>She was one of the Ten Outstanding Students of the Philippines in 2007 for her academic excellence, Exemplary Leadership and strong social responsibilities. She is also a Global Shaper of the World Economic Forum. Because of her track record and advocacy to promote global food security and sustainable agriculture programs and helped thousands of farming families in the Philippines for almost 17 years, she was awarded as a Young Global Laureate 2014 by the International Youth Organization – Youth Action Net. She had a chance to meet the Holy See Papa Francesco in Vatican, Rome, Italy on November 19-20, 2014 for the gathering called “Towards a New Global Mindset: Overcoming Social and Economic Exclusion”. She was recognized as the ASEAN Young Business Leader in 2014 by the New Zealand Foundation. She was named by Rappler Philippines as one of the Four Filipinas to Watch 2014. She was also recognized as a Peace Awardee 2015 by the Muslim community thru the SPMUDA International Organization during the International Day of Peace. </p>
		<p>Currently she was awarded as the EARTH Mover Award of RAPPLER and one of The Outstanding Women in the Nation Service (TOWNS) 2016. She was also awarded as the Most Outstanding Young Agriculturist and Young Achiever of Negros Island. She was also chosen by Channel News Asia as one of the 10 Asia New Generation Emerging Leaders (ANGELS) 2016. She was awarded as one of the Inspiring Filipina Entrepreneur 2017 by Go Negosyo and the Republic of the Philippines President His Excellency Rodrigo Roa Duterte. She was also chosen by the Australia Government Department of Foreign Affairs and Trade as one of the Asia- Australia Emerging Leaders in the Region. The World Economic Forum Global Shapers Community Advisory Council Steering Committee Members completing the 22 chosen young members of the World Economic Forum. </p>
		<p>AGREA as a company and her as the social entrepreneur was also awarded by the Asia Pacific CSR Council and UN Global Compact the Global Responsible Business Award 2017 for Agriculture Excellence.</p>
		<p>She is a radical optimist, a dreamer and a true believer that Filipino farmers are world-class. She has been traveling the world as an advocate and inspirational speaker especially on her advocacy for global food security.</p>
	</div>
	</ktml:images>

	<h3 role="heading" aria-level="3" class="font-medium font-title mt-4 text-gray-900 text-lg">More about Cherrie</h3>
	<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
	<ktml:images max-width="25%" lazyload="progressive,inline">
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
		<?
		$articles = collection('ext:joomla.model.articles', [
		'published' => 1,
		'category' => ['11'], // new sprouts
		'sort' => 'date',
		'order' => 'desc'
		]); ?>
		<? foreach($articles as $article) :?>
			<? if(strpos($article->tags, "Cherrie Atilano") !== false): ?>
				<a href="<?= route('news/article', ['slug' => $article->slug]) ?>" class="bg-gray-100 hover:bg-lime-500 transition duration-300 ease-in-out text-gray-900 hover:text-dark-green-500 p-6 rounded-lg">
					<img class="md:h-36 rounded w-full object-cover object-center" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
					<p class=" text-gray-600 mt-2">
						<?= $article->title; ?>
					</p>
				</a>
			<? endif; ?>
		<? endforeach ?>
		</div>
	</ktml:images>

</article>
