Алгоритм стилизации страниц

1. Добавить сетку или компонент,
2. Вставлять компоненты или сетки
   В компонтенты вставлять как можно больше CSS свойств, не вставлять анимации
   свойства влиюящие на положение относительно дгугих компонентов

   Такую анимацию не выносим в отдельный файл
   .swiper-pagination-bullet-active {
       transform-origin: center  bottom;
       transform: scaleY(2);
   }

   На базе вендорных компонентов создать новые компоненты
     grid.scss: container-1200
   или модифицировать существующие
     swiper-pagination-1

3. Добавлять модификаторы компонентов
4. Добавить модификаторы шаблона ( модификаторы шрифтов, модификаторы отступов, цветов, анимаций )
5. Через селекторы:
    - страница__компонент
    - секция__компонент
    - секция__секция секция__компонент
    - блок__компонент
    доустановить положение или изменить модификаторы компонента, добавлять z-index
    менять цвета если элемент вставлен через require

