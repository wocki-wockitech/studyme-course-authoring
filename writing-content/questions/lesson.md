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
      - text: "Вариант A"
        feedback: "Объяснение почему A неверно."
      - text: "Вариант B (правильный)"
        correct: true
        feedback: "Верно! Объяснение."
      - text: "Вариант C"
        feedback: "Объяснение почему C неверно."
    reference_answer: >
      Общее объяснение после ответа.
```

Один или несколько вариантов отмечаются `correct: true`:
- Один `correct: true` → студент видит radio buttons (выбрать один)
- Несколько `correct: true` → чекбоксы (выбрать все подходящие)

`feedback` — опциональный, показывается студенту *после* ответа. Объясняет
почему данный вариант правильный или нет.

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
> Slug нужен для ссылки из markdown через директиву quiz.
> Формат: `> [!card] <slug>`. Один slug = один вопрос, уникальный в пределах урока.

## Встраивание в урок

В `lesson.md` вставьте callout с slug вопроса:

```markdown
> [!card] my-question
```

Платформа отрендерит его как интерактивный виджет с вариантами ответа.

> [!card] question-index

> [!card] question-slug-scope
