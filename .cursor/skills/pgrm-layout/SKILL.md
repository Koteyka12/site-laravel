---
name: pgrm-layout
description: Верстка страниц для проекта Pflegegruppe Rhein-Main на Laravel 12 + MoonShine + Tailwind CSS 4 + Alpine.js. Используй при создании/редактировании Blade-шаблонов, добавлении новых страниц, работе с версткой сайта.
---

# PGRM Layout - Верстка сайта Pflegegruppe Rhein-Main

## Контекст проекта

**Проект**: Корпоративный сайт немецкой компании по уходу Pflegegruppe Rhein-Main  
**Срок**: к 9.02.2026  
**Твоя роль**: Frontend-разработчик (верстка)  
**Backend**: Александр (@alexanderschilinski)  
**Дизайн**: Данил

## Технологический стек

- **Laravel 12** - PHP фреймворк
- **MoonShine 4.6** - админ-панель (делает Александр)
- **Tailwind CSS 4** - стилизация (utility-first)
- **Alpine.js** - интерактивность (легковесный JS)
- **Vite** - сборка фронтенда
- **SQLite** - база данных (локально)

## Структура страниц

### Требуемые страницы (из ТЗ):

1. **Главная** (Startseite) - `/`
2. **Услуги** (Leistungen) - `/leistungen`
3. **Филиал** (Filialen) - `/filialen/{slug}` (шаблон для всех филиалов)
4. **Карьера** (Karriere) - `/karriere`
5. **Блог** - `/blog` (уже есть)
6. **Статья блога** - `/blog/{slug}` (уже есть)
7. **Контакты** (Kontakt) - `/kontakt` (уже есть)

### Существующие компоненты:

- `resources/views/layouts/app.blade.php` - базовый layout
- `resources/views/blog/index.blade.php` - список статей
- `resources/views/blog/show.blade.php` - страница статьи
- `resources/views/contact/create.blade.php` - форма контактов
- `resources/views/welcome.blade.php` - временная главная

## Рабочий процесс

### 1. Контент проекта

**Все материалы находятся в папке `Контент сайта/` в корне проекта:**

**Дизайн-макеты** (`Контент сайта/Дизайн сайта/Desktop/`):
- `Startseite desk.pdf` - Главная страница
- `Leistungen desk.pdf` - Услуги
- `Filialen desk.pdf` - Филиалы
- `Karriere desk.pdf` - Карьера/Вакансии
- `Blog desk.pdf` - Блог
- `Artikelseite desk.pdf` - Статья блога
- `Layout.psd` - Исходник Photoshop

**Тексты** (`Контент сайта/Тексты/`):
- `Webtexte PG RM.xlsx` - Все тексты для сайта (на немецком)

**Изображения** (`Контент сайта/Изображения/`):
- `Генерация с Nano Banana Pro/` - 13 AI-сгенерированных PNG
- `Стоковые/` - 2 стоковых фото

**Шрифты** (`Контент сайта/Шрифты/`):
- `Google_Sans_Flex/` - Основной шрифт (все начертания)
- `Montserrat/` - Дополнительный шрифт (все начертания)

**Логотипы** (`Контент сайта/Логотипы/`):
- 24 файла в форматах PDF, PNG, SVG

### 2. Создание новой страницы

**Шаг 1: Создай контроллер**
```bash
php artisan make:controller ServiceController --no-interaction
```

**Шаг 2: Добавь маршрут в `routes/web.php`**
```php
use App\Http\Controllers\ServiceController;

Route::get('/leistungen', [ServiceController::class, 'index'])->name('services.index');
```

**Шаг 3: Создай метод в контроллере**
```php
public function index(): View
{
    return view('services.index');
}
```

**Шаг 4: Создай Blade-шаблон**
```bash
New-Item -ItemType Directory -Force -Path "resources/views/services"
```

Создай `resources/views/services/index.blade.php`:
```blade
@extends('layouts.app')

@section('title', 'Unsere Leistungen')

@section('content')
<div class="container mx-auto px-4 py-8">
    {{-- Твоя верстка с Tailwind классами --}}
</div>
@endsection
```

### 3. Подключение шрифтов

**Шаг 1: Скопируй шрифты в public**
```bash
# Создай папку для шрифтов
New-Item -ItemType Directory -Force -Path "public/fonts"

# Скопируй нужные файлы из "Контент сайта/Шрифты/"
```

**Шаг 2: Добавь @font-face в `resources/css/app.css`**
```css
@font-face {
    font-family: 'Google Sans Flex';
    src: url('/fonts/GoogleSansFlex-Regular.ttf') format('truetype');
    font-weight: 400;
}

@font-face {
    font-family: 'Montserrat';
    src: url('/fonts/Montserrat-Regular.ttf') format('truetype');
    font-weight: 400;
}
```

**Шаг 3: Настрой Tailwind в `resources/css/app.css`**
```css
@theme {
    --font-sans: 'Google Sans Flex', ui-sans-serif, system-ui, sans-serif;
    --font-heading: 'Montserrat', ui-sans-serif, system-ui, sans-serif;
}
```

### 4. Работа с изображениями

**Размещение:**
```bash
# Скопируй изображения в public
New-Item -ItemType Directory -Force -Path "public/images"
# Скопируй файлы из "Контент сайта/Изображения/"
```

**Использование в Blade:**
```blade
<img src="{{ asset('images/filename.png') }}" alt="Описание">
```

### 5. Верстка с Tailwind CSS 4

**Основные принципы:**
- Используй utility-классы прямо в HTML
- Адаптивность: `sm:`, `md:`, `lg:`, `xl:` префиксы
- Шрифты: `font-sans` (Google Sans Flex), `font-heading` (Montserrat)

**Пример:**
```blade
<div class="flex items-center justify-between gap-4 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-heading font-bold text-gray-900">Заголовок</h2>
    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 font-sans">
        Кнопка
    </button>
</div>
```

### 6. Интерактивность с Alpine.js

**Выпадающее меню:**
```blade
<div x-data="{ open: false }">
    <button @click="open = !open">Меню</button>
    <div x-show="open" @click.away="open = false">
        {{-- Содержимое меню --}}
    </div>
</div>
```

### 7. Тестирование

**Запуск dev-сервера:**
```bash
# Вариант 1: Только Laravel
php artisan serve

# Вариант 2: Laravel + Vite (hot reload)
composer run dev
```

**Проверка:**
- Открой http://127.0.0.1:8000
- Проверь адаптивность (DevTools → Toggle device toolbar)

### 8. Передача работы Александру

Когда страница готова:
1. Убедись что все работает локально
2. Запусти `vendor/bin/pint` для форматирования
3. Отправь файлы Александру (он сам добавит в Git)

**НЕ КОММИТЬ В GIT САМОСТОЯТЕЛЬНО!** Александр сам управляет репозиторием.

## Полезные команды

```bash
# Очистка кеша
php artisan config:clear
php artisan view:clear

# Список маршрутов
php artisan route:list

# Форматирование кода
vendor/bin/pint

# Запуск тестов
php artisan test --compact

# Сборка для продакшена
npm run build
```

## Структура файлов проекта

```
pgrm-main/
├── app/
│   ├── Http/Controllers/          # Контроллеры
│   └── Models/                    # Eloquent модели
├── resources/
│   ├── views/                     # Blade-шаблоны (твоя работа)
│   │   ├── layouts/
│   │   │   └── app.blade.php     # Базовый layout
│   │   ├── blog/
│   │   └── contact/
│   ├── css/
│   │   └── app.css               # Tailwind конфиг
│   └── js/
│       └── app.js                # Alpine.js подключен
├── routes/
│   └── web.php                   # Маршруты
├── public/
│   ├── images/                   # Статичные изображения
│   └── fonts/                    # Шрифты проекта
└── Контент сайта/                # Все материалы проекта
    ├── Дизайн сайта/Desktop/     # PDF макеты + PSD
    ├── Тексты/                   # Excel с текстами
    ├── Изображения/              # AI + стоковые фото
    ├── Шрифты/                   # Google Sans Flex + Montserrat
    └── Логотипы/                 # Логотипы в разных форматах
```

## Контакты команды

- **Александр** (@alexanderschilinski) - Backend, DevOps
- **Данил** - Дизайн, макеты
- **Алексис** - Проект-менеджер

## Дедлайн: 9 февраля 2026
