# SSS Content Repositories

Content for the Security Summer School (SSS) is developed on GitHub, in the [security-summer-school organization](https://github.com/security-summer-school/).
SSS features multiple tracks (such as **binary**, **web**, **essentials**).
Each track uses a public and private repository.
Public repositories contain information available to participants: session content, slides, activities support files.
Private repositories contain deployment files and scripts, source code files for activities and CTF challenges.

Each track consists of multiple sessions.
One session typically covers a particular topic of the track.
For example the **web** track has sessions on *Broken Access Control*, *Securing Communication*, *Injection* and others.
Each session has its own folder inside both the private and the public repositories.

## Private Repository Structure

Each track uses a private repository to store deployment files, scripts, source code files for activities and CTF challenges.
A private repository uses the structure in the [private template repository](https://github.com/security-summer-school/template-internal).

Files have the following roles:

* `README.md`: general information about the repository
* `CONTRIBUTING.md`: contributor guidelines
* `REVIEWING.md`: reviewer guidelines
* `COPYING.md`: licenses used

The `ctf/` folder stores CTF challenges.
There are typically two CTFs: a `final-ctf` and a `mid-ctf`.
Each challenge has its own folder.
The structure of a challenge folder is detailed in the [private template repository](https://github.com/security-summer-school/template-internal#ctf-challenge-folder-structure).

Each session has its own folder.
It consists of activities, and each activity has its own folder for private resources.
The structure of an activity folder is detailed in the [private template repository](https://github.com/security-summer-school/template-internal#activity-folder-structure).

## Public Repository Structure

Each track uses a public repository to store activities, session content, support files and slides.
A public repository uses the structure in the [public template repository](https://github.com/security-summer-school/template-public).

Files have the following roles:

* `README.md`: general information about the repository
* `CONTRIBUTING.md`: contributor guidelines
* `REVIEWING.md`: reviewer guidelines
* `COPYING.md`: licenses used

Each session has its own folder.
It consists of:

* `README.md`: session contents, written in [GitHub Markdown](https://guides.github.com/features/mastering-markdown/)
* `activities/`: each activity has its own folder for public resources.
  The structure of an activity folder is detailed in the [public template repository](https://github.com/security-summer-school/template-public#activity-folder-structure).
* `assets/`: support files for session contents (images, diagrams, code snippets, packet captures etc.)
* `slides/`: session slides
