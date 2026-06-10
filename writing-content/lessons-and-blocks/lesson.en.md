---
id: e8a90a27-c99d-4a30-b6cc-23d23239cbe1
title: "Creating Lessons and Blocks"
estimated_minutes: 7
---

# Creating Lessons and Blocks

## New block

Copy the template from `_templates/block/`:

```bash
cp -r _templates/block/ my-new-block/
```

Rename the folder — this becomes the block's slug. Edit `block.yaml`:

```yaml
id:                    # leave empty — will be filled automatically
title: "My Block"
lessons:
  - first-lesson
```

Don't forget to add the block slug to `course.yaml → blocks:`.

## New lesson

Copy the template:

```bash
cp -r _templates/lesson/ my-new-block/my-lesson/
```

Edit `lesson.md`:

```markdown
---
id:
title: "My Lesson"
estimated_minutes: 10
---

# My Lesson

Content...
```

And add the slug to `block.yaml → lessons:`.

> [!warning] Order matters
> Students go through lessons top to bottom in the `lessons:` list in block.yaml.
> The next lesson only unlocks after the previous one is completed.

## Linear progression

```
Block 1 (available)
  ✅ Lesson 1 (completed)
  🔓 Lesson 2 (available — current)
  🔒 Lesson 3 (locked)
  🔒 Final test (locked)

Block 2 (locked — unlocks after Block 1 test)
```

> [!card] add-lesson-steps

> [!card] lesson-progression
