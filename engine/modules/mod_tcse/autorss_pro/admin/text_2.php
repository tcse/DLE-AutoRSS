<?php
if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
    die('Hacking attempt!');
}
?>


<div class="panel-body">
    <p>
		Список полезных сервисов позволяющих получить RSS поток от различных сайтов.
	</p> 
	<h3>RSS-Bridge</h3> 
	<p>
		Основной php скрипт, который должен быть у каждого владельца сайта, которому необходимо получать RSS из соцсетей и крупных порталах.<br>
		Страница скрипта <a href="https://github.com/rss-bridge/rss-bridge" target="_blank">https://github.com/rss-bridge/rss-bridge <i class="fa fa-external-link"></i></a><br>
	</p>
	<p>
		RSS-Bridge - это проект PHP, способный генерировать каналы RSS и Atom для веб-сайтов, у которых их нет. Он может использоваться на веб-серверах или в качестве автономного приложения в режиме CLI.<br>

		Важное замечание: RSS-Bridge - это не средство чтения каналов или агрегатор каналов, а инструмент для создания каналов, которые используются программами чтения и агрегаторами каналов.
	</p>
	<p>
		Полный список поддерживаемых сайтов доступен по <a href="https://github.com/RSS-Bridge/rss-bridge/tree/master/bridges" target="_blank">ссылке  <i class="fa fa-external-link"></i></a> среди них: VK.com, Facebook.com, Instagram.com, Google search, Twitter.com, YouTube.com, MixCloud.com, Soundcloud.com и многие другие.
	</p>
	<p>
		Примеры сайтов с установленным скриптом RSS-Bridge, где можно получить готовые RSS потоки <a href="https://bridge.leslibres.org/" target="_blank">bridge.leslibres.org <i class="fa fa-external-link"></i></a> или <a href="https://bridge.suumitsu.eu/" target="_blank">bridge.suumitsu.eu <i class="fa fa-external-link"></i></a>. <br> Но самое правильное - развернуть скрипт на своем домене, для работы он не требует доступа к базе данных.

	</p> 
	<hr>
	<h3>emails2rss</h3> 
	<p>
		Сервис позволяет формировать RSS поток из писем отправленных на секретный email предоставляемый сайтом emails2rss.appspot.com.<br>
		Страница скрипта <a href="https://emails2rss.appspot.com" target="_blank">https://emails2rss.appspot.com <i class="fa fa-external-link"></i></a>
	</p>
	<hr>
	<h3>feed43.com</h3> 
	<p>
		Feed43 конвертирует HTML- или XML-документы в свободном формате в правильные RSS-каналы путем “выкусывания” заданных кусков текста с помощью поисковых шаблонов, а затем объединения этих кусков текста с помощью шаблонов отображения, образующих на выходе удобный пользователю текст новостей. Принцип извлечения данных из исходных документов также известен как “HTML scraping”.<br>
		Страница скрипта <a href="https://feed43.com/" target="_blank">https://feed43.com/ <i class="fa fa-external-link"></i></a>
	</p>
	<hr>

	<div>
		<h2>Примеры стандартных RSS лент для популярных CMS</h2>
	</div>    
	<h4>DataLife Engine</h4>
	<p>
		www.datalifeengine.ru/<b>rss.xml</b> - лента RSS для всех публикация сайта.<br>
		www.datalifeengine.ru/category1/<b>rss.xml</b> - лента RSS для категории  <b>category1</b> сайта.
	</p>
	<hr>
	<h4>WordPress</h4>
	<p>
		www.wordpress.com/<b>feed</b>/ - лента RSS для всех публикация сайта.<br>
		www.wordpress.com/category2/<b>feed</b>/ - лента RSS для категории  <b>category2</b> сайта.
	</p>
</div>
