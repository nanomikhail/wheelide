# Описание.
Данный проект представляет из себя веб среду, предназначенную для создания и хранения изображений, используемых в проекте по отображению цветных картинок на колесе велосипеда. Подробности второй, микроконтроллерно-программной, половины этого проекта можно и нужно смотреть тут: :). На самом деле код, который я здесь предоставил, включает в себя помимо редактора изображений ещё один раздел, который здесь рассмотрен не будет.  
Перейти на сайт чтобы опробовать этот проект: [Sweet.udevteam.com](https://sweet.udevteam.com/)

**Проект был предназначен для личного использования и не претендует на хорошую оптимизацию и внешний вид.** 

Основная информация:
- Позволяет рисовать 8-ми цветные изображения, путём смешивания красного, зелёного и синего цветов в редакторе.
- Сохранять изображения в базу данных.
- Использовать полученные картинки в следующем проекте: WheelPOI.

Рассмотрим разделы, расположенные в верхней части сайта.

### Раздел Editor.
Данный раздел по совместительству является главной страницей сайта. Здесь расположено множество элементов управления, такие как: 
- Ползунок, регулирующий число повторов изображения на оборот (для просмотра того как будет выглядеть картинка на колесе при быстрой и медленной езде).
- Поле ввода названия и кнопка сохранения, дающая возможность сохранить изображение.
- 3 поля для рисования разнесённые по трём цветам, с возможностью смешивания цветов (при рисовании на трёх полях сразу цвета соответсвующие одному и тому же пикселю будут смешиваться)
- Элементы появляющиеся после того как будет затронут любой из элементов управления
    - Превью нарисованного изображения в том виде, в котором оно будет отображаться на колесе.
    - Итоговый код изображения, который в дальнейшем копируется и вставляется в прошивку устройства закрепенного на колесе, стилизованный для удобного просмотра исходного изображения (Грубо говоря, повернутый на 90*, окрашенный текст, который можно скопировать).  
![Interface](https://github.com/nanomikhail/wheelide/blob/master/images/img1.png) 
Рисовать можно зажав левую кнопку мыши на полях с чекбоксами, но по завершению "мазка" стоит перекликнуть любой пиксель чтобы скрипт обновил превью. После того как желаемое изображение нарисовано, остаётся выделить полученный код и использовать его в следующем проекте:  

![Image from Gyazo](https://i.gyazo.com/f0e0a22d1dce4f4148a238b5b36df5f8.gif)

### Разделы viewer, encoder и decoder.
Раздел viewer предназначался для просмотра сохраненых на ПК кодов изображений. Код вставляется в поле ввода, и справа появляются цветные экземпляры. 

![Image from Gyazo](https://i.gyazo.com/c9413de2737395aeb9f704eaa2f1219a.png)

Разделы encoder и decoder так же содержат по одному полю ввода.  
Encoder служит для того чтобы переработать код в более ужатый вид для экономии памяти микроконтроллера. Decoder выполняет обратную операцию.  
Encoder превращает код слева в код справа, decoder наоборот:  

![Image from Gyazo](https://i.gyazo.com/65eaabf6efd0cf7bee7e3d5d8d55a63c.png)  

В данной системе используются цифры и все символы русского и английского алфавита в двух регистрах. Так как используются полные алфавиты, можно в качестве кода использовать например чью-то поэму, изображение будет похоже больше на рандомный шум, но сам факт забавный:  

![Image from Gyazo](https://i.gyazo.com/e99892bd6f5c631454b78ee93594b0a6.png)
