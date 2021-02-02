Drupal course project
от Цветослава Радославова

Фак. №: 1809013484

filmi.com
Темата на курсовия проект е

Система за филми.

(За правилното функциониране на сайта, виртуалния хост трябва да е с домейн filmi.com).

Сайтът представлява система за предоставяне на информация за филми, характеризирани с име, година, продуцент, език и жанр. Сайтът предлага възможността да се търси даден филм по годината на излизане, продуцент, име на филм или жанр. В главното меню се съдържат 4 страници: "Films"-съдържа всички добавени филми, "Genres"- съдържа жанровете на филмите, Producers - всички продуценти, "Recommend us a movie!" - където потребителят може да предлага филм. Както и 1 начална страница, на която може да се видят последно добавените филми. 

Таксономии са език, жанр и продуцент, а content type e "film", запазващ данните на филма (име, година, продуцент, език и жанр).

Webforms
Системата предоставя възможността, ако даден филм не е наличен в сайта, потребителят може да попълни форма с данните на филма и да го изпрати като препоръка за добавяне на дадения филм.

Custom module
Модула извиква omdb api, дава му id-то на филма, който потребителя иска и форматира и връща резултата като страница.
Намира се в /modules/custom/custom_module, създава нов път към /omdb/{movie_id}, който отваря метода omdb в src/Controller/OMDBController.


Графична тема
Проекта използва темата Bootstrap 3.