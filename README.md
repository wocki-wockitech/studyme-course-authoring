# Как создавать курсы для StudyMe

Курс-документация по созданию учебных курсов для платформы
[StudyMe](https://studyme.wockitech.local).

## Что это

Этот курс учит авторов:
- Создавать Git-репозиторий из шаблона
- Организовывать структуру блоков и уроков
- Писать контент в Obsidian
- Публиковать через Git-теги

## Структура

```
course-authoring/
├── course.yaml
├── getting-started/
│   ├── create-repo/
│   ├── course-structure/
│   └── obsidian-setup/
├── writing-content/
│   ├── lessons-and-blocks/
│   ├── questions/
│   └── callouts-and-widgets/
└── publishing/
    ├── tags-and-versions/
    └── connect-to-platform/
```

## Быстрый старт (для редакторов этого курса)

1. Убедитесь что курс находится в `courses/authoring/` монорепо
2. Редактируйте markdown в Obsidian или IDE
3. Используйте шаблоны из `_templates/` для новых уроков
4. Коммитьте в main — сплит в отдельный репо через GitHub Action
5. Создайте тег для публикации: `git tag v1.0.0 && git push --tags`

## Ссылки

- [Шаблон курса](https://github.com/wocki-wockitech/studyme-course-template)
- [studyme-course-tools (GitHub Action)](https://github.com/wocki-wockitech/studyme-course-tools)
- [Формат контента](docs/CONTENT-FORMAT.md)

## Лицензия

CC-BY-4.0
