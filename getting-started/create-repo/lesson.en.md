---
id: d37c156f-5b9f-4139-983d-5a02aff59475
title: "Creating a Repository"
estimated_minutes: 5
---

# Creating a Repository

Every course on StudyMe is a Git repository. We start from a template.

## Step 1: Use this template

Open [studyme-course-template](https://github.com/wocki-wockitech/studyme-course-template) on GitHub and click **"Use this template"** → **"Create a new repository"**.

> [!tip] Repo name
> Recommended format: `studyme-course-{topic}`.
> For example: `studyme-course-golang`, `studyme-course-devops`.

## Step 2: Clone the repo

```bash
git clone https://github.com/<your-username>/studyme-course-<topic>.git
cd studyme-course-<topic>
```

## Step 3: Open in Obsidian

Open the course folder as a Vault in Obsidian. The `.obsidian/` settings are already included in the template — links will be standard markdown, images will go into `assets/`.

> [!info] What Obsidian gives you
> - A graph of connections between lessons
> - Instant markdown preview
> - Templates for questions (Cmd+P → Insert template)
> - Frontmatter in Properties view

## What you get

After these steps you have:
- `course.yaml` — course manifest
- `block-1/` — an example block with a lesson
- `_templates/` — boilerplates for copying
- `.github/workflows/` — automation (UUID, validation)

> [!quiz] what-is-course-repo
