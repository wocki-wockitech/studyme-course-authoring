---
id: 51ecf527-d1b3-4925-8d30-09c443af9cd7
title: "Вопросы"
estimated_minutes: 8
---

# Вопросы

Вопросы живут в `questions.yaml` рядом с `lesson.md`. Поддерживаемые типы:

## multiple_choice

```yaml
questions:
  - id:
    slug: my-question
    type: multiple_choice
    difficulty: 2          # 1-5
    text: "Какой ответ правильный?"
    options:
      - "Вариант A"
      - "Вариант B (правильный)"
      - "Вариант C"
    correct: 1             # 0-based индекс
    reference_answer: >
      Объяснение почему B правильный.
```

## true_false

```yaml
  - id:
    slug: is-it-true
    type: true_false
    difficulty: 1
    text: "Земля круглая."
    correct: true
    reference_answer: "Да, Земля имеет форму геоида."
```

## free_text (V2 — AI-оценка)

```yaml
  - id:
    slug: explain-something
    type: free_text
    difficulty: 3
    text: "Объясните своими словами..."
    reference_answer: >
      Эталонный ответ для AI-грейдера.
    evaluation_criteria:
      must_mention: ["ключевой термин"]
      bonus: ["дополнительно"]
    max_score: 5
```

> [!info] Slug вопроса
> Slug нужен для ссылки из markdown: `> [!quiz] my-question`.
> Один вопрос = один slug, уникальный в пределах урока.

## Встраивание в урок

В `lesson.md` вставьте callout с slug вопроса:

```markdown
> [!quiz] my-question
```

Платформа отрендерит его как интерактивный виджет с вариантами ответа.

> [!quiz] question-index

> [!quiz] question-slug-scope
