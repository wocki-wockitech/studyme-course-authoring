---
id: 36d87031-b191-459d-80d5-2439bff9d83b
title: "Tags and Versions"
estimated_minutes: 5
---

# Tags and Versions

The platform indexes a course **only by Git tags**. Intermediate commits to main are not visible to students.

## Creating a tag

When the course is ready for publishing:

```bash
git add .
git commit -m "feat: first version of the course"
git tag v1.0.0
git push origin main --tags
```

> [!info] Semver
> Use semantic versioning:
> - **MAJOR** (v2.0.0) — major overhaul
> - **MINOR** (v1.1.0) — new lessons
> - **PATCH** (v1.0.1) — typo fixes

## UUID

Every entity (course, block, lesson, question) has a stable UUID in the `id:` field.

**You don't need to fill it in manually!** The GitHub Action `studyme-course-tools` will automatically fill in empty `id:` fields when a PR is opened.

> [!warning] Never change a UUID
> The UUID is linked to student progress. If you change it — everyone loses their progress on that element.

## What happens when a tag is created

```mermaid
graph LR
    A[git tag v1.0.0] --> B[push --tags]
    B --> C[Platform sees new tag]
    C --> D[Clones at that tag]
    D --> E[Parses structure]
    E --> F[Uploads content to StudyMe]
    F --> G[Course available to students]
```

> [!quiz] uuid-change

> [!quiz] platform-indexing
