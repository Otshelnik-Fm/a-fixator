## Введение  

Вам знакомо то чувство кошмара, когда вам необходимо обновить вордпресс тему? Ведь у вас там правки, которые после обновления затрутся. А вы не нашли никакого другого места, как вписать правки стилей в css файл используемой вами темы..  

Или файл functions.php - куда вы вставили небольшие фрагменты (сниппеты) кода...  

Альфа-фиксатор поможет вам! - дополнение позволит вам использовать свои css файлы и файл функций и файл js без боязни их перезаписи.  
CSS в фронтенде поддерживает минимизацию файлов от плагина WP-Recall. Ваш стилевой файл сожмется и объединится с стилями от плагина WP-Recall.  
А админ файл css - будет подключаться в админке.  
А файл функций позволит вписывать свои сниппеты кода.  
А js-файл позволит вписать фрагменты js скриптов (сниппеты)  

С версии 2.0 дополнение имеет блок настроек - позволяя некоторые файлы отключать (по умолчанию включены). Смотри вкладку "Как работать"  

p.s. дополнение не создает никакой нагрузки на сайт и не делает запросов к базе данных. Проще чем китайские палочки 🏆  


------------------------------


## Установка/Обновление  

**Установка:**  
Т.к. это дополнение для WordPress плагина WP-Recall, то оно устанавливается через [менеджер дополнений WP-Recall](https://codeseller.ru/obshhie-svedeniya-o-dopolneniyax-wp-recall/)  

1. В админке вашего сайта перейдите на страницу "WP-Recall" -> "Дополнения" и в самом верху нажмите на кнопку "Обзор", выберите .zip архив дополнения на вашем пк и нажмите кнопку "Установить".  
2. В списке загруженных дополнений, на этой странице, найдите это дополнение, наведите на него курсор мыши и нажмите кнопку "Активировать". Или выберите чекбокс и в выпадающем списке действия выберите "Активировать". Нажмите применить.  


**Обновление:**  
Дополнение поддерживает [автоматическое обновление](https://codeseller.ru/avtomaticheskie-obnovleniya-dopolnenij-plagina-wp-recall/) - два раза в день отправляются вашим сервером запросы на обновление.  
Если в течении суток вы не видите обновления (а на странице дополнения вы видите что версия вышла новая), советую ознакомиться с этой [статьёй](https://codeseller.ru/post-group/rabota-wordpress-krona-cron-prinuditelnoe-vypolnenie-kron-zadach-dlya-wp-recall/)  


------------------------------


## Как работать  
1. Устанавливаете и активируете как обычное дополнение для WP-Recall  

2. В папке: <code>ваш-сайт/wp-content/wp-recall/add-on/a-fixator/templates</code> - 5 файлов.  
Скопируйте их все по пути: <code>ваш-сайт/wp-content/wp-recall/templates/</code> и пишите в них ваши стили и код. Их подключение возьмёт на себя Альфа-фиксатор  

3. Перейдите в настройки: "WP-Recall" -> "Настройки" -> "Настройки Alpha Fixator" и выберите какие файлы вы хотите подключать. По умолчанию они подключаются все (в нужных местах и если конечно все они перенесены в папку назначения - 2 пункт)  

4. И вписывая в каждый свои стили, функции (сниппеты) и скрипты - получите удобный функционал, который никогда не затрется. Для работы с этими файлами используйте любой редактор подключаемый по FTP (или sFTP) (например: FileZilla + Notepad++ или просто Notepad++ с включенным плагином NppFTP)  

#### Список файлов:  
<code>a-fixator-admin.css</code> - для css стилей, применимых только к админке (этот файл загружается только в админке).  
<code>a-fixator-front-header.css</code> - для css стилей применимых к фронтенду (лицевая часть сайта) вашего сайта. И этот файл будет загружаться в шапке сайта - т.е. туда вписывайте стили которые самые критичные (нужны для отображения 1-го экрана)  
<code>a-fixator-front-footer.css</code> - для css стилей применимых к фронтенду (лицевая часть сайта) вашего сайта. Но этот файл загружается в подвале сайта (все остальные, не критичные для 1-го экрана, стили)  
<code>a-fixator-front-js.js</code> - для вписывания js-сниппетов (файл загружается в подвале сайта)  
<code>a-fixator-functions.php</code> - файл для вашего php кода (сниппеты)  
Внутри этих файлов дублируется эта информация  

<strong>ВАЖНО!</strong> Держите включенным дополнение (a) fixator- и тогда эти файлы будут работать.  


------------------------------


## FAQ  

### Я могу стили писать в свою тему - или в style.css или прям в админке - зачем мне этот доп?  
1. При обновлении ВП шаблона изменения затрутся.  
2. Вы можете и в своем ВП шаблоне в кастомные стили в админке писать - но тогда они будут хранится в базе данных и замедлять ваш сайт.  
3. Минимизация стилей WP-Recall на ваш стилевой файл будет работать? (в админке в расширенных опциях WP-Recall опция "Минимизация стилевых файлов") Нет.  
А css-файл этого допа поддерживает минимизацию от WP-Recall ("WP-Recall" -> "Настройки" -> "Общие настройки" (включая расширенные) -> "Минимизация стилевых файлов" и "Минимизация скриптов") - все объединится в один файл  
4. Здесь стилевые файлы раздельные - один для админки, два для фронтенда. т.е. вы пишете стили в тот файл, который нужен. Нужны стили только для админки - пишете в a-fixator-admin.css. Разделяем нагрузку по уму  
5. Вы можете разделять стилевые правила по критичности - критичные для первого экрана стили (они должны грузиться раньше всех) вписываем в <code>a-fixator-front-header.css</code>  
а не критичные (как правило таких много) чобы они не замедляли загрузку вашего сайта, вписывать в <code>a-fixator-front-footer.css</code> - который грузится в подвале  
  


### Код я привык размещать в functions.php своего ВП шаблона. Какие преимущества в вашем допе?  
Например вы нашли фрагмент кода (сниппет), который что-то делает для WP-Recall. Но как правило сниппеты отдаются без учета проверок - "активирован ли сам плагин WP-Recall"  

Представим ситуацию - вы отключили WP-Recall и получите фатальную ошибку ссылающуюся на ваш файл функций - к тому самому сниппету. Потому что он обращается к функции плагина, а плагин отключен.  

Ну и второй аргумент: то что в теме - касается вашей текущей ВП темы. Что будет когда вы ее поменяете? Придется весь добавленный код переносить.  
  


### "ВАЖНО! Держите включенным дополнение (a) fixator- и тогда эти файлы будут работать" - что это значит?  
Тут вроде все просто - свет горит пока включен выключатель :)  
т.е. включен доп - стилевые файлы и файл функций его работают. Отключили - перестали работать.  
  


### Обновлять доп я смогу? Ничего не слетит в этих 5-ти файлах что я вставлял?  
Раздел "Как работать" прочитали и выполнили? Значит бояться нечего. т.к. это функционал WP-Recall шаблонов.  
Информация что это за функционал - [тут](https://codeseller.ru/post-group/ispolzuem-funkcional-shablonov-v-plagine-wp-recall-spisok-shablonov/). Очень мощная и полезная вещь. Знать необходимо.  
  


### Вставляю корректирующие стили, а они не работают - почему?  

Инспектором браузера (F12) - убедитесь что стили применились для элемента, который вы меняли.  
Как работать с консолью браузера - [проще простого](https://codeseller.ru/post-group/uchimsya-rabotat-s-panelyu-razrabotchika-brauzera-likbez-dlya-chajnikov/)  



------------------------------


## Changelog  
**2018-12-10**  
v2.1  
* поддержка WP-Recall 16.17  


**2018-03-29**  
v2.0  
* Дополнение улучшено: один css файл (бывший a-fixator-front.css) в фронтенде упразднен. Но вместо него появилось два:  
<code>a-fixator-front-header.css</code> - загружается в фронтенде в шапке (туда вписывайте критичные стили, которые нужны для отрисовки первого экрана)  
и  
<code>a-fixator-front-footer.css</code> - загружается в подвале сайта (для некритичных файлов которые можно подгрузить позже)  
* Важно! Свой файл стилей (a-fixator-front.css) по пути: ваш-сайт/wp-content/wp-recall/templates/ переименуйте в a-fixator-front-footer.css или в a-fixator-front-header.css  

* Добавлен a-fixator-front-js.js - для js-сниппетов в фронтенде (грузится только в подвале)  
* Добавлен блок настроек - позволяет отключить:  
1. загрузку шаблона стилей для админки  
2. загрузку шаблона стилей для фронтенда - для шапки  
3. загрузку шаблона стилей для фронтенда - для подвала  
4. загрузку шаблона скриптов для фронтенда  
- по умолчанию все включены.  
- это не усложнило доп - ни единого запроса к бд и не влияет на быстродействие. Доп получился все таким же простым как китайские палочки, но более гибким. И поддерживается минимизация WP-Recall стилей и скриптов.  


**2017-11-22**  
v1.1  
* Работа с 16-й версией WP-Recall  
* Стиль подключается в подвале  


**2016-12-23**  
v1.0.1  
* Очередь загрузки стилей - теперь они грузятся позже  


**2016-07-22**  
v1.0  
* Release  


------------------------------


## Поддержка/Контакты  

* Поддержка осуществляется в рамках текущего функционала дополнения  
* При возникновении проблемы, создайте соотвествующую тему на [форуме поддержки товара](https://codeseller.ru/forum/product-12878/)   
* Если вам нужна доработка под ваши нужды - вы можете обратиться ко мне в [ЛС](https://codeseller.ru/author/otshelnik-fm/?tab=chat) с техзаданием на платную доработку.   

Полный список моих работ опубликован на [моём сайте](https://otshelnik-fm.ru/all-my-addons-for-wp-recall/?utm_source=free-addons&utm_medium=addon-description&utm_campaign=a-fixator&utm_content=github.com&utm_term=all-my-addons) и в каталоге магазина [CodeSeller.ru](https://codeseller.ru/author/otshelnik-fm/?tab=publics&subtab=type-products)  


------------------------------


## Author  

**Wladimir Druzhaev** (Otshelnik-Fm)  

