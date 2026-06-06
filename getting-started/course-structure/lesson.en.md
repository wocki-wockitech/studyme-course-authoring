---
id: d1e300f5-ec85-41b4-9b80-4737c6f94f8d
title: "Course Structure"
estimated_minutes: 7
---

# Course Structure

A course consists of blocks, blocks consist of lessons. Everything is defined by YAML files.

## Hierarchy

```
my-course/
├── course.yaml              ← manifest: title, language, block order
├── block-name/
│   ├── block.yaml           ← block settings: title, lesson order, test
│   ├── lesson-name/
│   │   ├── lesson.md        ← lesson content (markdown + frontmatter)
│   │   └── questions.yaml   ← quiz questions
│   └── another-lesson/
└── another-block/
```

## course.yaml

The main file. Defines what the course is and the block order:

```yaml
id:                          # UUID — generated automatically
slug: my-course              # for the URL
title: "My Course"
default_language: ru
blocks:
  - fundamentals             # slug = folder name
  - advanced
```

## block.yaml

Inside each block. Defines lesson order and final test settings:

```yaml
id:
title: "Fundamentals"
lessons:
  - intro                    # slug = folder name
  - first-steps
test:
  question_count: 5
  pass_threshold: 0.7
```

## lesson.md

Markdown with a YAML header (frontmatter):

```markdown
---
id:
title: "Introduction"
estimated_minutes: 5
---

# Introduction

Lesson text...
```

> [!warning] Slug = folder name
> The lesson/block slug is **its folder name**, not a YAML field.
> Renamed the folder = changed the slug. The UUID stays the same.

> [!quiz] structure-hierarchy

> [!quiz] block-yaml-purpose
