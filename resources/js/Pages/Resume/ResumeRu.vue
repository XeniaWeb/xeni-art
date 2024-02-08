<script setup>
</script>
<!--PHP Laravel:-->
<!-- - разработка интерфейсов личных кабинетов (статистика, электронный документооборот, CRUD-интерфейсы, система тикетов, рассылки и тд)-->
<!-- - система управления ролями и доступами пользователей-->
<!-- - добавление новых сущностей в БД через миграции, написание запросов через Eloquent-->
<!-- - вёрстка интерфейсов с использованием компонентов-->
<!-- - применение команд git, npm, artisan-->
<!-- - понимание паттерна MVC, использую в работе функционал Laravel: middlewares, commands, service providers, observers.-->
<!-- - Работа в команде по принципам agile и scrum-->
<template>
  <div class="mx-auto w-[760px] h-[1080px] mt-4 text-[12px]">
    <div class="relative overflow-x-auto">
      <table
        class="w-full text-left text-black dark:text-white leading-5"
      >
        <tbody>
        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
          <td class="w-[200px] align-top ">
            <table class="w-full text-left border-collapse">
              <tbody>
              <tr class="border-collapse">
                <td class="pt-2 pb-4">
                  <img
                    src="/images/024.jpg"
                    alt="Photo Oksana Bürki"
                    class="block w-[190px] h-auto ml-2"
                  />
                </td>
              </tr>
              <tr class="  border-r border-black">
                <td
                  style="font-family: 'Noto Serif', serif; font-weight: 700; font-size: 24px"
                  class="px-4 py-2 h-[30px]"
                >
                  <h1 class="text-[22px]">Оксана Бюрки</h1>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 h-[30px] text-[16px] font-semibold">
                  <p
                    style="font-weight: 400; font-size: 16px"
                    class="inline-block pb-2"
                  >
                    PHP Web Developer
                  </p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pt-4 pb-1 h-[30px]">
                  <p class="accent mb-2 text-lg">+41 76 410 4101</p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-2 h-[30px]">
                  <p class="accent-title">Адрес</p>
                  <p class="text-small">
                    Milchstrasse 6c, <br/>
                    6423 Seewen SZ Switzerland
                  </p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-2 h-[30px]">
                  <p class="accent-title">Электронная почта</p>
                  <p class="text-small block">xenia1898@gmail.com</p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-2 h-[30px]">
                  <div class="accent-title">Телеграм</div>
                  <a href="https://t.me/XeniaWeb/" class="text-small block hover:text-red-600" target="_blank">
                    t.me/XeniaWeb
                  </a>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-2 h-[30px]">
                  <p class="accent-title">GitHub</p>
                  <a href="https://github.com/XeniaWeb/" class="text-small block hover:text-red-600" target="_blank">
                    github.com/XeniaWeb
                  </a>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-4 h-[30px]">
                  <p class="accent-title">Linkedin</p>
                  <a
                    href="https://www.linkedin.com/in/xeniaweb/"
                    class="text-small block hover:text-red-600"
                    target="_blank"
                  >
                    linkedin.com/in/xeniaweb
                  </a>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pt-4 h-[30px]">
                  <p class="inline-block sub-title">Дополнительно</p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-2 h-[30px]">
                  <p class="text-small pb-2">Рабочее окружение: Git GitHub BitBucket Vite Webpack Gulp Docker</p>
                  <p class="text-small pb-2">Инструменты: PHPStorm, Postman, DockerHub, Mailtrap</p>
                  <p class="text-small pb-2">
                    Фреймворки: Laravel InertiaJs Tailwind Vue.js React TypeScript
                  </p>
                  <p class="text-small pb-2">WebDesign: Figma Zeplin Photoshop AdobeXD</p>
                  <p class="text-small pb-2">Другое: Водительское удостоверение, Категория "В"</p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pt-4 h-[30px]">
                  <p class="sub-title inline-block">Гражданство РФ</p>
                </td>
              </tr>
              <tr class="border-r border-black">
                <td class="px-4 pb-2 h-[30px]">
                  <p class=" pb-1 ">Есть разрешение на работу <br>
                    в Швейцарии
                    <span class="block accent">(Residence permit B)</span>
                  </p>
                </td>
              </tr>
              </tbody>
            </table>
          </td>
          <td class="w-[560px]0 align-top">
            <table class=" w-full text-black dark:text-white">
              <tbody class="align-top">
              <tr>
                <td class="px-4 h-[30px]">
                  <p class="main-title">
                    WEB Developer
                    <span class="px-3 font-normal text-[20px]"
                    >PHP / Laravel</span
                    >
                  </p>
                </td>
              </tr>
              <tr>
                <td class="px-4 h-[30px] text-[14px]">
                  <p class="text-small pb-1">
                    Backend PHP на Laravel, ООП на PHP, MVC паттерны,
                  </p>
                  <p class="text-small pb-1">
                    Базы данных PostgreSQL, MySQL (Eloquent), REST-full API with Laravel || API Platform
                  </p>
                  <p class="text-small pb-1">
                    Разработка сайтов на Laravel / Blade / InertiaJS / Vue.js - Composition API
                  </p>
                  <p class="text-small pb-1">
                    HTML, CSS3, SASS, Tailwind, JS, Vue.js 3, Vite, Web-стандарты
                  </p>
                  <p class="text-small pb-1">
                    Docker, GitHub, CI/CD, API Documentation
                  </p>
                  <p class="text-small pb-1">Опыт командной разработки на принципах Agile и Scrum</p>
                </td>
              </tr>
              <tr>
                <td class="px-4 py-2 h-[30px] ">
                  <p class="sub-title pb-2 border-b border-black">
                    Опыт работы
                  </p>
                  <table class=" w-full text-black dark:text-white">
                    <tbody>
                    <tr class="text-left">
                      <td class="w-[110px] align-top">
                        <p class="font-semibold">02/2021 - 10/2023</p>
                        <span class="text-small">2 года 10 месяцев</span>
                      </td>
                      <td class="px-2 pb-2 align-top">
                        <p class="font-semibold mb-1 text-[14px] inline-block border-b border-black">
                          PHP Backend Developer / Laravel
                        </p>
                        <p class="">
                          <span class="font-semibold text-[14px]">
                            GoCPA, Платформа партнерского маркетинга,
                          </span>
                          <a
                            href="https://gocpa.ru/"
                            class="text-small hover:text-red-600"
                            target="_blank">gocpa.ru
                          </a></p>

                        <p class="text-small">
                          •разработка интерфейсов личных кабинетов (статистика, электронный документооборот, CRUD-интерфейсы, система тикетов, рассылки и тд)
                          •система управления ролями и доступами пользователей
                          •добавление новых сущностей в БД через миграции, написание запросов через Eloquent
                          •вёрстка интерфейсов с использованием компонентов
                          •применение git, npm, artisan commands, docker
                          •понимание паттерна MVC, использую в работе функционал Laravel: middlewares, commands, service providers, observers.
                        </p>
                      </td>
                    </tr>
                    <tr class="text-left">
                      <td class="w-[110px] align-top">
                        <p class="font-semibold">08/2018 - 01/2021</p>
                        <span class="text-small">2.5 года</span>
                      </td>
                      <td class="px-2 pb-2 align-top">
                        <p class="font-semibold mb-1 text-[14px] inline-block border-b border-black">
                          PHP Web Developer, Full Stack Developer
                        </p>
                        <p class="">
                          <span class="font-semibold">
                            XeniaWeb,
                          </span>
                          <a
                            href="https://xeniaweb.ch/"
                            class="text-small hover:text-red-600"
                            target="_blank">самозанятый
                          </a></p>

                        <p class="text-small">
                          • разработка сайтов для частных клиентов
                        </p>
                      </td>
                    </tr>
                    <tr class="text-left">
                      <td class="py-1 w-[110px] align-top">
                        <p class="font-semibold">04/2017-08/2018</p>
                        <span class="text-small">1.5 года</span>
                      </td>
                      <td class="px-2 pt-1 pb-2 align-top">
                        <p class="">
                          <span class="font-semibold mb-1 text-[14px] inline-block border-b border-black mr-2">
                            Предметный фотограф,
                          </span>
                          <a
                            href="https://xeniaweb.ch/"
                            class="text-small hover:text-red-600"
                            target="_blank"> свободный художник
                          </a></p>
                      </td>
                    </tr>
                    <tr class="text-left">
                      <td class="w-[110px] align-top py-1">
                        <p class="font-semibold">08/2007-04/2017</p>
                        <span class="text-small">10 years</span>
                      </td>
                      <td class="px-2 pb-2 align-top pt-1">
                        <p class="">
                          <span class="font-semibold mb-1 text-[14px] inline-block border-b border-black mr-2">
                            Региональный менеджер,
                          </span><span class="font-semibold">
                            SibAutoSvet Ltd.,</span>

                        </p>
                        <p class="">
                          • оптовая торговля автомобильными лампами. <br>
                          • управление офлайн и онлайн продажами
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" class="text-small">Я работаю с 1992 года...
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td class="px-4 py-2 h-[30px] ">
                  <p class="sub-title pb-2 border-b border-black">
                    Образование
                  </p>
                  <p class="text-small pb-1">
                    04/2023 - 09/2023
                    <span class="font-semibold">OTUS,</span> Москва, Россия
                    Практический курс: <span class="font-semibold">• Vue.js разработчик</span> <a
                    href="https://otus.ru/certificate/dc966ecaa1074cc89f35cb3ca8338e0f/" class="hover:text-red-600"
                    target="_blank">(сертификат)</a>
                  </p>
                  <p class="text-small pb-1">
                    07/2021 - 01/2022
                    <span class="font-semibold">OTUS,</span> Москва, Россия
                    Практический курс: <span class="">• Backend-разработчик на PHP</span> <a
                    href="https://otus.ru/certificate/a886355b64e54948a89132790645b563/" class="hover:text-red-600"
                    target="_blank">(сертификат)</a>
                  </p>
                  <p class="text-small pb-1">
                    03/2020 - 06/2020
                    <span class="font-semibold">LoftSchool,</span> Санкт-Петербург, Россия
                    Практический курс: <span class="font-semibold">• Vue.js Продвинутая веб разработка </span><a
                    href="https://loftschool.com/diploma/JL1584462302/ru/pdf" class="hover:text-red-600"
                    target="_blank">(сертификат)</a>
                  </p>
                  <p class="text-small pb-1">

                    06/2019 - 09/2019
                    <span class="font-semibold">LoftSchool,</span> Санкт-Петербург, Россия
                    Практический курс: <span class="font-semibold">• Комплексное обучение PHP / Laravel </span><a
                    href="https://loftschool.com/diploma/QP1560523303/ru/pdf" class="hover:text-red-600"
                    target="_blank">(сертификат)</a>
                  </p>
                  <p class="text-small pb-1">

                    07/2018 - 12/2018
                    <span class="font-semibold">HTML Academy,</span> Санкт-Петербург, Россия
                    <span class="font-semibold">• PHP programming and MySQL</span> (сертификат) <span class="font-semibold">• HTML / CSS</span> (сертификат)
                    <span class="font-semibold">• JavaScript programming</span> (сертификат)
                  </p>
                  <p class="text-small pb-1">
                    1999 - 2001
                    Новосибирский государственный университет архитектуры, дизайна и искусств, Новосибирск, Россия
                    • Дизайн интерьера. Ландшафтный дизайн. (курсы)
                  </p>
                  <p class="text-small pb-1">
                    1998 - 2000
                    Новосибирский Государственный Университет Экономики и Управления (НГУЭУ), Новосибирск, Россия
                    • Финансы и кредит
                  </p>
                  <p class="text-small pb-1">
                    1985 – 1992
                    Институт технологии и дизайна, Новосибирск, Россия <br>
                    • Инженер-технолог швейного производства (ТШИ) </p>
                </td>
              </tr>
              <tr>
                <td class="px-4 py-2 h-[30px] ">
                  <p class="sub-title pb-2 border-b border-black">
                    Владение языками
                  </p>
                  <p class="text-[16px] pb-1">
                    <span class="mr-2">Русский (родной)</span>
                    <span class="mr-2">Немецкий (B2)</span>
                    <span class="mr-2">Английский (A2)</span>
                    <span class="mr-2">Французский (A2)</span>
                  </p>
                </td>
              </tr>
              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>
.main-title {
  font-weight: 800;
  font-size: 22px;
  @apply mb-2 py-2 border-b border-black;
}

.sub-title {
  font-weight: 700;
  font-size: 18px;
  @apply mb-2;
}

.accent-title {
  display: inline-block;
  font-weight: 700;
  font-size: 14px;
}

.accent {
  display: inline-block;
  font-weight: 700;
  line-height: 1.2;
}

.text-small {
  font-weight: 400;
  line-height: 1.4;
  font-size: 12px;
}
</style>
