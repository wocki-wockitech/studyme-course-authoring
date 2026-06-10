---
id: 51ecf527-d1b3-4925-8d30-09c443af9cd7
title: "Questions"
estimated_minutes: 8
---

# Questions

Questions live in `questions.yaml` next to `lesson.md`. Supported types:

## multiple_choice

```yaml
questions:
  - id:
    slug: my-question
    type: multiple_choice
    difficulty: 2          # 1-5
    text: "Which answer is correct?"
    options:
      - text: "Option A"
        feedback: "Explanation of why A is wrong."
      - text: "Option B (correct)"
        correct: true
        feedback: "Correct! Explanation."
      - text: "Option C"
        feedback: "Explanation of why C is wrong."
    reference_answer: >
      General explanation shown after answering.
```

One or more options can be marked `correct: true`:
- One `correct: true` → student sees radio buttons (pick one)
- Multiple `correct: true` → checkboxes (pick all that apply)

`feedback` — optional, shown to the student *after* answering. Explains
why a given option is right or wrong.

## true_false

```yaml
  - id:
    slug: is-it-true
    type: true_false
    difficulty: 1
    text: "The Earth is round."
    correct: true
    reference_answer: "Yes, the Earth has the shape of a geoid."
```

## free_text (V2 — AI grading)

```yaml
  - id:
    slug: explain-something
    type: free_text
    difficulty: 3
    text: "Explain in your own words..."
    reference_answer: >
      Reference answer for the AI grader.
    evaluation_criteria:
      must_mention: ["key term"]
      bonus: ["additional"]
    max_score: 5
```

> [!info] Question slug
> The slug is needed to reference the question from markdown via the quiz directive.
> Format: `> [!card] <slug>`. One slug = one question, unique within a lesson.

## Embedding in a lesson

In `lesson.md`, insert a callout with the question slug:

```markdown
> [!card] my-question
```

The platform will render it as an interactive widget with answer options.

> [!card] question-index

> [!card] question-slug-scope
