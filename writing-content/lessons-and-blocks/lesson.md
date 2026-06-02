---
id: e8a90a27-c99d-4a30-b6cc-23d23239cbe1
title: "Создание уроков и блоков"
estimated_minutes: 7
---

# Создание уроков и блоков

## Новый блок

Скопируйте шаблон из `_templates/block/`:

```bash
cp -r _templates/block/ my-new-block/
```

Переименуйте папку — это станет slug блока. Отредактируйте `block.yaml`:

```yaml
id:                    # оставьте пустым — заполнится автоматически
title: "Мой блок"
lessons:
  - first-lesson
```

Не забудьте добавить slug блока в `course.yaml → blocks:`.

## Новый урок

Скопируйте шаблон:

```bash
cp -r _templates/lesson/ my-new-block/my-lesson/
```

Отредактируйте `lesson.md`:

```markdown
---
id:
title: "Мой урок"
estimated_minutes: 10
---

# Мой урок

Контент...
```

И добавьте slug в `block.yaml → lessons:`.

> [!warning] Порядок важен
> Студент проходит уроки сверху вниз по списку `lessons:` в block.yaml.
> Следующий урок открывается только после завершения предыдущего.

## Линейная прогрессия

```
Block 1 (available)
  ✅ Lesson 1 (completed)
  🔓 Lesson 2 (available — текущий)
  🔒 Lesson 3 (locked)
  🔒 Итоговый тест (locked)

Block 2 (locked — откроется после теста Block 1)
```

> [!quiz] add-lesson-steps

> [!quiz] lesson-progression
