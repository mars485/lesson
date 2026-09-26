# 🎓 Lesson — Python Fullstack + AI

[![Course](https://img.shields.io/badge/course-Python%20Fullstack%20%2B%20AI-3776AB)](course/README.md) ![Modules](https://img.shields.io/badge/modules-8-2ea44f) ![Plan](https://img.shields.io/badge/plan-52%20weeks-orange) ![Language](https://img.shields.io/badge/language-Русский-blue)

Персональный учебный репозиторий для изучения Python-разработки с нуля: от первых скриптов до веб-приложений на **FastAPI, Django и React**, с практикой интеграции нейросетевых API.

> Учебные задания ориентированы на реальную разработку [AI Prompt Service](https://github.com/mars485/ai-prompt-service), но выполняются **отдельно от рабочего MVP**, чтобы обучение не ломало production-код.

## 🚀 Начать обучение

**[Открыть программу курса →](course/README.md)**

**[Начать урок 01: переменные Python →](course/01-python-basics/lesson-01/README.md)**

**[Отслеживать прогресс →](course/PROGRESS.md)**

Программа адаптирована под график смен: план — **3 коротких занятия в неделю по 45 минут**, преимущественно в выходные и отсыпные. Структура занятия: 10 минут теории, 10 минут примера, 20 минут практики, 5 минут проверки. Для сложных тем и проектов потребуется дополнительная самостоятельная работа. Исходный учебный план рассчитан на больший объём работы: эта адаптация не заменяет 736 академических часов оригинального курса.

## 📚 Модули

| № | Модуль | Недели |
|---|---|---|
| 01 | [Основы Python](course/01-python-basics/README.md) | 1–8 |
| 02 | [Продвинутый Python](course/02-advanced-python/README.md) | 9–14 |
| 03 | [Git, SQL, ООП и API](course/03-git-sql-oop-api/README.md) | 15–21 |
| 04 | [HTML и CSS](course/04-html-css/README.md) | 22–26 |
| 05 | [JavaScript и TypeScript](course/05-javascript-typescript/README.md) | 27–32 |
| 06 | [React](course/06-react/README.md) | 33–39 |
| 07 | [FastAPI + Docker](course/07-fastapi-docker/README.md) | 40–47 |
| 08 | [Продвинутый Django](course/08-django-advanced/README.md) | 48–52 |

В процессе освоения Python отдельные практические задания будут знакомить с FastAPI раньше седьмого модуля, чтобы знания сразу приносили пользу MVP.

## 🗂 Структура

```text
lesson/
└── course/
    ├── README.md                  # Полная программа
    ├── PROGRESS.md                # Контроль прохождения
    ├── templates/
    │   └── LESSON_TEMPLATE.md     # Шаблон будущих уроков
    ├── 01-python-basics/
    │   ├── README.md
    │   └── lesson-01/
    │       ├── README.md          # Теория и задание
    │       └── exercise.py        # Стартовый код
    ├── 02-advanced-python/
    ├── 03-git-sql-oop-api/
    ├── 04-html-css/
    ├── 05-javascript-typescript/
    ├── 06-react/
    ├── 07-fastapi-docker/
    └── 08-django-advanced/
```

Папки следующих уроков добавляются по мере прохождения курса — сейчас созданы учебные планы всех модулей и материалы первого занятия.

## 💻 Подготовка

```bash
git clone https://github.com/mars485/lesson.git
cd lesson/course/01-python-basics/lesson-01
python exercise.py
```

Понадобятся Python 3.12+ и редактор (например, VS Code). На Linux/macOS команда запуска может называться `python3`.

## ✅ Правила работы

1. Читай README урока и пробуй пример самостоятельно.
2. Выполняй одно практическое задание и проверяй результат.
3. Фиксируй изменения отдельным коммитом, например `learn: complete python lesson 01`.
4. После проверки отмечай выполненную неделю в [трекере](course/PROGRESS.md).
5. Не добавляй реальные API-ключи или пароли в Git; учебные секреты храни локально в `.env` (игнорируется внутри `course/`).

Код учебных заданий не считается готовым для production без отдельного тестирования и ревью.
