<?php
	$glob['sec_code'] = 'T7CjyNk85TvEeIzhlAx9iccE';
	$glob['site_name'] = 'AtlasCeramica.ru';
	$glob['url'] = 'http://atlasceramica.ru/';
	
	include("curs_conf.php");
	
	$glob['mass_material'] = array(0 => "n/a", 1 => "Стекло", 2 => "Керамика", 3 => "Керамогранит", 4 => "Мрамор", 5 => "Нат. камень", 6 => "Клинкер");
	$glob['mass_type'] = array(0 => "n/a", 1 => "Бордюр", 2 => "Декор", 3 => "Мозаика", 4 => "Напольная", 5 => "Настенная", 6 => "Плинтус", 7 => "Ступень", 8 => "Угловой элемент", 9 => "Панно", 10 => "Тоцетка/Вставка", 11 => "Подступенок", 12 => "Розетон", 13 => "Карандаш");
	$glob['mass_surface'] = array(0 => "n/a", 1 => "Антискользящая", 2 => "Глянцевая", 3 => "Лаппатированная", 4 => "Матовая", 5 => "Полированная", 6 => "Рельефная", 7 => "Под дерево", 8 => "Под мрамор", 9 => "Структурированная", 10 => "Под камень", 11 => "Ректификат Нат.", 12 => "Ректификат Пол.", 13 => "Ректификат Лап.", 14 => "Под мозаику", 15 => "Под металл");
	$glob['mass_country'] = array(0 => "n/a", 1 => "Испания", 2 => "Италия", 3 => "Китай", 4 => "Португалия", 5 => "Россия", 6 => "Польша", 8 => "Германия", 9 => "Турция", 10 => "Украина", 11 => "Белоруссия", 12 => "Франция", 13 => "Финляндия", 14 => "Австрия");
	//$glob['mass_format'] = array(0 => "n/a", 1 => "Крупный формат", 2 => "Мелкий формат", 3 => "Средний формат");
	$glob['mass_manager'] = array(0 => "n/a", 1 => "Костя", 2 => "Марина", 3 => "Александр");
	$glob['mass_status_zakaz'] = array(0 => "Новый", 1 => "Принят", 2 => "Готов", 3 => "Завершен", 4 => "Отказ");
	$glob['mass_availability'] = array(0 => "В наличии", 1 => "Под заказ");
	$glob['mass_type_edinic'] = array(0 => "м<sup><small>2</small></sup>", 1 => "шт.", 2 =>"ком." );
	
	
	$glob['mass_type_stuff'] = array(0 => "n/a",
			1 => "Плитка",
			2 => "Ламинат",
			3 => "Линолеум",
			4 => "Паркетная доска",
			5 => "Паркет",
			6 => "Плинтус",
			7 => "Затирка"
	);
	//$glob['mass_type_application'] = array(0 => "n/a", 1 => "Напольная", 2 => "Настенная");
	
	//$glob['mass_postavshik'] = array(0 => "1", 1 => "2", 2 => "3");
	
	//laminat
	$glob['mass_durability'] = array(0 => "n/a", 1 => "31", 2 => "32", 3 => "33", 4 => "34");
	$glob['mass_faska'] = array(0 => "n/a", 1 => "Нет", 2 => "2-сторонняя", 3 => "4-сторонняя");
	//$glob['mass_thickness'] = array(0 => "n/a", 1 => "Нет", 2 => "2-сторонняя", 3 => "4-сторонняя");
	$glob['mass_imitation'] = array(0 => "n/a", 1 => "под дерево", 2 => "под камень", 3 => "под кожу", 4 => "под мрамор", 5 => "под паркет", 6 => "под плитку");
	//$glob['mass_special'] = array(0 => "n/a", 1 => "под дерево", 2 => "под камень", 3 => "под кожу",
	//4 => "под мрамор", 5 => "под паркет", 6 => "под плитку");
	$glob['mass_linecount'] = array(0 => "n/a", 1 => "1", 2 => "2", 3 => "3", 4 => "плетёнка", 5 => "ёлочка");
	
	//plitka
	$glob['mass_plitka_color'] = array(
		0 => "n/a",
		1 => "Бежевый",
		2 => "Белый",
		3 => "Бронзовый",
		4 => "Голубой",
		5 => "Жёлтый",
		6 => "Зелёный",
		7 => "Золотой",
		8 => "Коричневый",
		9 => "Красный",
		10 => "Мультиколор",
		11 => "Оранжевый",
		12 => "Розовый",
		13 => "Серебряный",
		14 => "Серый",
		15 => "Синий",
		16 => "Фиолетовый",
		17 => "Чёрный"
	);
	
	$glob['mass_plitka_role'] = array(
		0 => "n/a",
		1 => "плитка для ванной",
		2 => "плитка для кухни",
		3 => "плитка для магазина",
		4 => "плитка для фартук",
		5 => "плитка для дома",
		6 => "плитка для туалета",
		7 => "облицовочная плитка",
		8 => "плитка для прихожей",
		9 => "плитка для бани",
		10 => "плитка для склада",
		11 => "плитка для крыльца",
		12 => "плитка для лестницы",
		13 => "плитка для бассейна",
		14 => "плитка для гаража",
		15 => "плитка для цоколя",
		16 => "плитка для гостинной"
	);
	
	//linoleum
	$glob['mass_linoleum_color'] = array(
		0 => "n/a",
		1 => "бежевая",
		2 => "белая",
		3 => "желтая",
		4 => "зеленая",
		5 => "коричневая",
		6 => "красная",
		7 => "светлая",
		8 => "серая",
		9 => "синяя",
		10 => "черная"
	);
	$glob['mass_linoleum_width'] = array(
		0 => "n/a",
		1 => "1,5",
		2 => "2",
		3 => "2,5",
		4 => "3",
		5 => "3,1",
		6 => "3,5",
		7 => "4",
		8 => "5",
		9 => "3,15"
	);
	$glob['mass_linoleum_type'] = array(
		0 => "n/a",
		1 => "Бытовой",
		2 => "Коммерческий",
		3 => "Полукоммерческий",
		4 => "Традиционный",
		5 => "Коммерческий антистатический"
	);
	$glob['mass_linoleum_design'] = array(
		0 => "n/a",
		1 => "Однотонный",
		2 => "Под камень",
		3 => "Под паркет",
		4 => "Под плитку",
		5 => "Прочий",
		6 => "Абстракция",
		7 => "Дерево классическое",
		8 => "Дерево дворцовое",
		9 => "Камень",
		10 => "Модерн",
		11 => "Мрамор",
		12 => "Натуральные материалы",
		13 => "Плитка",
		14 => "Плитка дворцовая",
		15 => "Плитка классическая"
	);
	$glob['mass_linoleum_base_type'] = array(
		0 => "n/a",
		1 => "Вспененная",
		2 => "Войлок"
	);
	$glob['mass_linoleum_lay'] = array(
		0 => "n/a",
		1 => "да",
		2 => "нет"
	);
	$glob['mass_linoleum_firesafety_class'] = array(
		0 => "n/a",
		1 => "КМ 2",
		2 => "КМ 4",
		3 => "КМ 5"
	);
	$glob['mass_linoleum_composition'] = array(
		0 => "n/a",
		1 => "Гетерогенный",
		2 => "Гомогенный"
	);
	$glob['mass_linoleum_total_width'] = array(
		0 => "n/a",
		1 => "1,80 мм",
		2 => "2,00 мм",
		3 => "2,20 мм",
		4 => "2,25 мм",
		5 => "2,40 мм",
		6 => "2,50 мм",
		7 => "2,70 мм",
		8 => "2,80 мм", 
		9 => "3,00 мм",
		10 => "3,20 мм",
		11 => "3,30 мм",
		12 => "3,40 мм",
		13 => "3,50 мм",
		14 => "3,60 мм",
		15 => "3,70 мм",
		16 => "4,00 мм", 
		17 => "4,30 мм",
		18 => "4,40 мм",
		19 => "4,50 мм"
	);
	$glob['mass_linoleum_protector_width'] = array(
		0 => "n/a",
		1 => "0,15 мм",
		2 => "0,2 мм",
		3 => "0,25 мм",
		4 => "0,3 мм",
		5 => "0,35 мм",
		6 => "0,4 мм",
		7 => "0,5 мм",
		8 => "0,55 мм", 
		9 => "0,6 мм",
		10 => "0,7 мм",
		11 => "0,95 мм",
		12 => "1,45 мм"
	);
	/////////////////////////
	//parket_doska
	$glob['mass_parket_doska_tree_type'] = array(
		0 => "n/a",
		1 => "акация",
		2 => "африканский махагони",
		3 => "бамбук",
		4 => "береза",
		5 => "бук",
		6 => "венге",
		7 => "вишня",
		8 => "дуб",
		9 => "дуб красный",
		10 => "дуссие",
		11 => "зебрано",
		12 => "ироко",
		13 => "кемпас",
		14 => "клен",
		15 => "клен европейский",
		16 => "клен канадский",
		17 => "лиственница",
		18 => "махагони",
		19 => "мербау",
		20 => "мсаса",
		21 => "орех",
		22 => "орех американский",
		23 => "падук",
		24 => "розовое дерево",
		25 => "сапелли",
		26 => "сукупира",
		27 => "тали",
		28 => "тик",
		29 => "ярра",
		30 => "ясень",
		31 => "ятоба"
	);
	$glob['mass_parket_doska_thickness'] = array(
		0 => "n/a",
		1 => "7",
		2 => "8.3",
		3 => "9",
		4 => "10",
		5 => "11",
		6 => "12",
		7 => "14",
		8 => "15",
		9 => "16",
		10 => "20",
		11 => "22",
		12 => "30"
	);
	$glob['mass_parket_doska_design_type'] = array(
		0 => "n/a",
		1 => "однополосный",
		2 => "трехполосный",
		3 => "двухполосный"
	);
	$glob['mass_parket_doska_connection'] = array(
		0 => "n/a",
		1 => "замковое",
		2 => "клеевое"
	);
	$glob['mass_parket_doska_color'] = array(
		0 => "n/a",
		1 => "бежевая",
		2 => "белая",
		3 => "коричневая",
		4 => "серая",
		5 => "черная"
	);
	$glob['mass_parket_doska_surface'] = array(
		0 => "n/a",
		1 => "без покрытия",
		2 => "глянцевый лак",
		3 => "лак",
		4 => "масло"
	);
	$glob['mass_parket_doska_faska'] = array(
		0 => "n/a",
		1 => "да",
		2 => "нет"
	);
	$glob['mass_parket_doska_selection'] = array(
		0 => "n/a",
		1 => "Натур",
		2 => "Рустик",
		3 => "Селект",
		4 => "Кантри",
		5 => "Антик"
	);
	$glob['mass_parket_doska_hardness'] = array(
		0 => "n/a",
		1 => "3.4",
		2 => "3.5",
		3 => "3.6",
		4 => "3.7",
		5 => "4",
		6 => "4.8"
	);
	/////////////////////////
	//parket
	$glob['mass_parket_tree_type'] = array(
		0 => "n/a",
		1 => "бамбук",
		2 => "бук",
		3 => "венге",
		4 => "дуб",
		5 => "ироко",
		6 => "кемпас",
		7 => "клен",
		8 => "мербау",
		9 => "орех",
		10 => "сапелли",
		11 => "сукупира",
		12 => "тик",
		13 => "ясень",
		14 => "ятоба",
		15 => "берёза",
		16 => "махагони",
		17 => "лиственница"
	);
	$glob['mass_parket_thickness'] = array(
		0 => "n/a",
		1 => "14",
		2 => "22",
		3 => "15",
		4 => "12,6",
		5 => "12,4",
		6 => "10,2",
		7 => "13,2",
		8 => "8,5",
		9 => "12",
		10 => "13"
	);
	$glob['mass_parket_design_type'] = array(
		0 => "n/a",
		1 => "1",
		2 => "2",
		3 => "3"
	);
	$glob['mass_parket_color'] = array(
		0 => "n/a",
		1 => "бежевый",
		2 => "белый",
		3 => "коричневый",
		4 => "серый",
		5 => "черный",
		6 => "цветной"
	);
	$glob['mass_parket_surface'] = array(
		0 => "n/a",
		1 => "без покрытия",
		2 => "глянцевый лак",
		3 => "лак",
		4 => "масло"
	);
	$glob['mass_parket_faska'] = array(
		0 => "n/a",
		1 => "да",
		2 => "нет"
	);
	$glob['mass_parket_selection'] = array(
		0 => "n/a",
		1 => "Натур",
		2 => "Рустик",
		3 => "Селект",
		4 => "Кантри",
		5 => "Классик",
		6 => "Тренд",
		7 => "Антик",
		8 => "Ориджинал",
		9 => "Коньяк",
		10 => "Термо",
		11 => "Робуст",
		12 => "Премиум",
		13 => "Доместик",
		14 => "Гармони",
		15 => "Альпин",
		16 => "Вэллей",
		17 => "Стандарт",
		18 => "Хайланд"
	);
	$glob['mass_parket_hardness'] = array(
		0 => "n/a",
		1 => "3.4",
		2 => "3.5",
		3 => "3.6",
		4 => "3.7",
		5 => "4",
		6 => "4.8",
		7 => "2.6",
		8 => "7",
		9 => "5"
	);
	/////////////////////////
	
	
	$glob['mass_laminat_color'] = array(
		0 => "n/a", 
		1 => "бежевый",
		2 => "беленый",
		3 => "белый",
		4 => "голубой",
		5 => "желтый",
		6 => "зеленый",
		7 => "золотистый",
		8 => "коричневый",
		9 => "красный",
		10 => "кремовый",
		11 => "натуральный",
		12 => "оранжевый",
		13 => "песочный",
		14 => "розовый",
		15 => "рыжий",
		16 => "светлый",
		17 => "серый",
		18 => "синий",
		19 => "цветной",
		20 => "черный"
	);
	
	$glob['mass_laminat_application'] = array(
		0 => "n/a",
		1 => "Для Ванной",
		2 => "Для Гостиной",
		3 => "Для Спальни",
		4 => "Для Магазина",
		5 => "Для Офиса",
		6 => "Для Кухни",
		7 => "Для Коридора",
		8 => "Для детской комнаты",
		9 => "Для ресторана",
		10 => "Промышленный"
	);
	
	$glob['mass_laminat_durability_to_application'] = array(
		1 => array(3, 8),
		2 => array(1, 2, 3, 6, 8),
		3 => array(4, 5, 7, 9),
		4 => array(4, 5, 10)
	);
	
	$glob['mass_laminat_application_to_durability'] = array(
		1 => array(2),
		2 => array(2),
		3 => array(1, 2),
		4 => array(3, 4),
		5 => array(3, 4),
		6 => array(2),
		7 => array(3),
		8 => array(1, 2),
		9 => array(3),
		10 => array(4)
	);
	
	//plintus
	$glob['mass_plintus_type'] = array(
		0 => "n/a",
		1 => "Крепеж",
		2 => "Ламинированный МДФ",
		3 => "Массивный плинтус",
		4 => "Пластиковый",
		5 => "Шпонированный плинтус"
	);
	$glob['mass_plintus_cable'] = array(
		0 => "n/a",
		1 => "да",
		2 => "нет"
	);
	$glob['mass_plintus_lam'] = array(
		0 => "n/a",
		1 => "да",
		2 => "нет"
	);
	$glob['mass_plintus_shpon'] = array(
		0 => "n/a",
		1 => "да",
		2 => "нет"
	);
	$glob['mass_plintus_color'] = array(
		0 => "n/a",
		1 => "Светлый",
		2 => "Темный"
	);
	
	//zatirka
	$glob['mass_zatirka_type'] = array(
		0 => "n/a",
		1 => "Эпоксидные затирки",
		2 => "Цементные затирки",
		3 => "Клей для плитки",
		4 => "Грунтовка",
		5 => "Гидроизоляция",
		6 => "Инструмент",
		7 => "Чистящие средства"
	);
	$glob['mass_zatirka_color'] = array(
		0 => "n/a",
		1 => "Бежевая",
		2 => "Белая",
		3 => "Бирюзовая",
		4 => "Голубая",
		5 => "Желтая",
		6 => "Зелёная",
		7 => "Коричневая",
		8 => "Красная",
		9 => "Оранжевая",
		10 => "Прозрачная",
		11 => "Розовая",
		12 => "Серая",
		13 => "Синяя",
		14 => "Фиолетовая",
		15 => "Черная",
		16 => "Под заказ"
	);
	
	//global settings
	$glob['manufacturers'] = array(
		1 => "manufacturers",
		2 => "manufacturers-laminat",
		3 => "manufacturers-linoleum",
		4 => "manufacturers-parket-doska",
		5 => "manufacturers-parket",
		6 => "manufacturers-plintus",
		7 => "manufacturers-zatirka"
	);
	$glob['manufacturers_name'] = array(
		1 => "Производители керамической плитки",
		2 => "Производители ламината",
		3 => "Производители линолеума",
		4 => "Производители паркетной доски",
		5 => "Производители паркета",
		6 => "Производители плинтуса",
		7 => "Производители затирки"
	);
	
	$glob['collection'] = array(
		1 => "collection",
		2 => "collection-laminat",
		3 => "collection-linoleum",
		4 => "collection-parket-doska",
		5 => "collection-parket",
		6 => "collection-plintus",
		7 => "collection-zatirka"
	);
	
	$glob['catalog'] = array(
		1 => "catalog",
		2 => "catalog-laminat",
		3 => "catalog-linoleum",
		4 => "catalog-parket-doska",
		5 => "catalog-parket",
		6 => "catalog-plintus",
		7 => "catalog-zatirka"
	);
	
	$glob['upload'] = array(
		1 => "tovar",
		2 => "tovar_floor",
		3 => "tovar_linoleum",
		4 => "tovar_parket_doska",
		5 => "tovar_parket",
		6 => "tovar_plintus",
		7 => "tovar_zatirka"
	);
	
	$glob['good'] = array(
		1 => "good",
		2 => "good-laminat",
		3 => "good-linoleum",
		4 => "good-parket-doska",
		5 => "good-parket",
		6 => "good-plintus",
		7 => "good-zatirka"
	);
	
	$glob['db'] = array(
		1 => "tovar",
		2 => "tovar_floor",
		3 => "tovar_linoleum",
		4 => "tovar_parket_doska",
		5 => "tovar_parket",
		6 => "tovar_plintus",
		7 => "tovar_zatirka"
	);
	
	$glob['prefix'] = array(
		1 => "A",
		2 => "L",
		3 => "LI",
		4 => "PD",
		5 => "P",
		6 => "PLI",
		7 => "Z"
	);
	
	$Num_view_catalog = 35;
	$Num_view_catalog_collections = 72;
	$Num_view_articles = 10;
	$Num_view_search = 36;
?>