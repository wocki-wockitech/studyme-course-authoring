---
id: d37c156f-5b9f-4139-983d-5a02aff59475
title: "Создание репозитория"
estimated_minutes: 5
---

# Создание репозитория

Каждый курс на StudyMe — это Git-репозиторий. Начинаем с шаблона.

## Шаг 1: Use this template

Откройте [studyme-course-template](https://github.com/wocki-wockitech/studyme-course-template) на GitHub и нажмите **"Use this template"** → **"Create a new repository"**.

> [!tip] Имя репо
> Рекомендуемый формат: `studyme-course-{тема}`.
> Например: `studyme-course-golang`, `studyme-course-devops`.

## Шаг 2: Клонируйте к себе

```bash
git clone https://github.com/<your-username>/studyme-course-<topic>.git
cd studyme-course-<topic>
```

## Шаг 3: Откройте в Obsidian

Откройте папку курса как Vault в Obsidian. Настройки `.obsidian/` уже включены в шаблон — ссылки будут стандартные markdown, картинки попадут в `assets/`.

> [!info] Что даёт Obsidian
> - Граф связей между уроками
> - Мгновенный preview markdown
> - Шаблоны для вопросов (Cmd+P → Insert template)
> - Frontmatter в Properties view

## Что получилось

После этих шагов у вас:
- `course.yaml` — манифест курса
- `block-1/` — пример блока с уроком
- `_templates/` — заготовки для копирования
- `.github/workflows/` — автоматизация (UUID, валидация)

> [!quiz] what-is-course-repo

> [!quiz] template-naming
