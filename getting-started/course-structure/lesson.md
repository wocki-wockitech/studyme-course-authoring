---
id: d1e300f5-ec85-41b4-9b80-4737c6f94f8d
title: "Структура курса"
estimated_minutes: 7
---

# Структура курса

Курс состоит из блоков, блоки из уроков. Всё определяется YAML-файлами.

## Иерархия

```
my-course/
├── course.yaml              ← манифест: название, язык, порядок блоков
├── block-name/
│   ├── block.yaml           ← настройки блока: название, порядок уроков, тест
│   ├── lesson-name/
│   │   ├── lesson.md        ← контент урока (markdown + frontmatter)
│   │   └── questions.yaml   ← вопросы для проверки
│   └── another-lesson/
└── another-block/
```

## course.yaml

Главный файл. Определяет что это за курс и в каком порядке блоки:

```yaml
id:                          # UUID — генерируется автоматически
slug: my-course              # для URL
title: "Мой курс"
default_language: ru
blocks:
  - fundamentals             # slug = имя папки
  - advanced
```

## block.yaml

Внутри каждого блока. Определяет порядок уроков и настройки итогового теста:

```yaml
id:
title: "Основы"
lessons:
  - intro                    # slug = имя папки
  - first-steps
test:
  question_count: 5
  pass_threshold: 0.7
```

## lesson.md

Markdown с YAML-шапкой (frontmatter):

```markdown
---
id:
title: "Введение"
estimated_minutes: 5
---

# Введение

Текст урока...
```

> [!warning] Slug = имя папки
> Slug урока/блока — это **имя его папки**, не поле в YAML.
> Переименовал папку = изменил slug. UUID при этом не меняется.

> [!quiz] structure-hierarchy

> [!quiz] block-yaml-purpose
