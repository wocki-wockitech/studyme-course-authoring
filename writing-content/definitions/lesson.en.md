---
id: a3f1e8d2-6b47-4c90-b1a5-7d9e2f4c8a16
title: "Definitions (Glossary)"
estimated_minutes: 6
---

# Definitions (Glossary)

Definitions are terms from your course that the platform automatically highlights in lesson text and aggregates into a course glossary.

## File format

Definitions live in `defs/` next to `lesson.md`:

```
my-lesson/
  lesson.md
  cards/
  defs/
    goroutine.yaml
    channel.yaml
```

Each file is one term:

```yaml
id: ""                        # auto-filled
term: "Goroutine"
aliases:
  - "goroutine"
  - "goroutines"
  - "горутина"
  - "горутины"
tags: [go, concurrency]

definition: |
  A lightweight thread of execution in Go,
  managed by the runtime.

example: |
  go func() { fmt.Println("hello") }()

related: [channel]
```

> [!info] Aliases
> List all word forms of the term across all languages. The platform matches case-insensitively.

## Three levels of usage

### 1. Auto-linking (automatic)

Just write your text — the platform will find matches against aliases and show a tooltip on hover. Zero effort.

### 2. Explicit highlight — `((term))`

Force-highlight a specific word:

```markdown
Every ((goroutine)) runs in its own stack.
```

### 3. Block card — `:::def slug`

For visual emphasis when introducing a term:

```markdown
:::def goroutine
:::
```

Renders as a card with the full definition, example, and related links.

Available options:

| Syntax | Result |
|--------|--------|
| `:::def slug` | Full card |
| `:::def slug --no-example` | Without example |
| `:::def slug --compact` | Inline one-liner |

## Multi-language definitions

Fields `term`, `definition`, and `example` support the `LocalizedText` format:

```yaml
term:
  ru: "Горутина"
  en: "Goroutine"
definition:
  ru: |
    Легковесный поток выполнения в Go.
  en: |
    A lightweight thread of execution in Go.
```

The `aliases` field is a single shared array for all languages.

## Configuring auto-linking

In `course.yaml`:

```yaml
definitions:
  auto_link: true            # on/off (default true)
  first_occurrence: section  # section | lesson | all
```

In lesson frontmatter (disable specific terms):

```yaml
skip_defs: [http, api]
```

## What happens on sync

1. Definitions are indexed into the course glossary
2. SR flashcards are created automatically (term ↔ definition)
3. Aliases are aggregated for auto-linking across the entire course

> [!tip] Validation
> Run `studyme-action lint .` — the linter checks required fields and alias uniqueness.
