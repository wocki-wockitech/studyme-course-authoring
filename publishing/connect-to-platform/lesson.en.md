---
id: 39cdbb34-e929-467c-afb5-f58b29727889
title: "Connecting to the Platform"
estimated_minutes: 4
---

# Connecting to the Platform

After creating a tag, the course is ready to be published on StudyMe.

## Step 1: Go to StudyMe

Open the **"My Courses (author)"** section in the StudyMe navigation.

## Step 2: Connect the repository

Click **"Connect course"** and paste the URL of your GitHub repository:

```
https://github.com/<your-username>/studyme-course-<topic>
```

## Step 3: The platform indexes the course

The platform will:
1. Find the latest tag (e.g. `v1.0.0`)
2. Clone the repo at that tag
3. Parse `course.yaml`, all blocks and lessons
4. Upload markdown and assets to storage
5. The course appears in the catalog

> [!tip] Public repos
> For public GitHub repos no token is needed — the platform downloads via public API.
> For private repos, GitHub App authorization will be required (V2).

## Updating a course

When you want to update a published course:

1. Make changes to the content
2. Commit and create a new tag: `git tag v1.1.0 && git push --tags`
3. Click **"Sync"** on the platform (or wait for automatic sync via webhook)

Students will see the updated content automatically. Their progress is preserved — we match by UUID.

> [!card] connect-steps

> [!card] update-flow
