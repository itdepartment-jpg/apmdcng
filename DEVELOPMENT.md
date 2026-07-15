\# APMDC Website - Development Guide



This document contains the local development setup, Git workflow, deployment process, and common Laravel commands for the APMDC Website project.



\---



\# Project Information



Project Name: APMDC Website



Framework:

\- Laravel 13

\- PHP 8.3

\- Blade

\- Tailwind CSS

\- Vite

\- SQLite (Development)

\- MySQL (Production)



Repository



https://github.com/itdepartment-jpg/APMDC-Website



\---



\# Local Development Requirements



\- Laragon

\- PHP 8.3+

\- Composer

\- Node.js

\- NPM

\- Git

\- Visual Studio Code



\---



\# Project Location



C:\\laragon\\www\\apmdc



\---



\# Starting the Project



\## Step 1



Start Laragon.



Ensure:



✓ Apache Running



✓ MySQL Running



\---



\## Step 2



Open VS Code



Open Folder



C:\\laragon\\www\\apmdc



\---



\## Step 3



Open Terminal



Run:



```bash

php artisan serve

```



Expected:



```

INFO  Server running on http://127.0.0.1:8000

```



\---



\## Step 4



If working on CSS or JavaScript



Run:



```bash

npm run dev

```



\---



\## Step 5



Visit



http://127.0.0.1:8000



\---



\# Database



Development Database



SQLite



Location



database/database.sqlite



Production



MySQL



\---



\# Git Workflow



Never develop directly on main.



Branch Structure



```

main

develop

feature/\*

hotfix/\*

```



\---



\## Create Feature



```

git checkout develop



git pull origin develop



git checkout -b feature/feature-name

```



Example



```

git checkout -b feature/blog-module

```



\---



\## Commit Changes



```

git add .



git commit -m "Describe the completed work"

```



Example



```

git commit -m "Update General Cargo page"

```



\---



\## Push Feature



```

git push -u origin feature/blog-module

```



\---



\## Merge to Develop



```

git checkout develop



git pull origin develop



git merge feature/blog-module



git push origin develop

```



\---



\## Merge to Main



Only after testing.



```

git checkout main



git pull origin main



git merge develop



git push origin main

```



\---



\# Common Laravel Commands



Start Server



```

php artisan serve

```



\---



Clear Cache



```

php artisan optimize:clear

```



\---



Route Cache



```

php artisan route:cache

```



\---



View Routes



```

php artisan route:list

```



\---



Application Information



```

php artisan about

```



\---



Run Migrations



```

php artisan migrate

```



\---



Fresh Migration



```

php artisan migrate:fresh

```



WARNING



This deletes all tables.



\---



Create Controller



```

php artisan make:controller BlogController

```



\---



Create Model



```

php artisan make:model Blog

```



\---



Create Model + Migration + Controller



```

php artisan make:model Blog -mcr

```



\---



Storage Link



```

php artisan storage:link

```



\---



\# Vite Commands



Install Packages



```

npm install

```



Run Development Server



```

npm run dev

```



Production Build



```

npm run build

```



\---



\# Folder Structure



```

app/

bootstrap/

config/

database/

public/

resources/

routes/

storage/

tests/

vendor/

```



Views



```

resources/views/

```



Homepage



```

resources/views/seo-page/index2.blade.php

```



Footer



```

resources/views/partials/footer.blade.php

```



Routes



```

routes/web.php

```



Controllers



```

app/Http/Controllers

```



Models



```

app/Models

```



\---



\# Coding Standards



\- Use meaningful commit messages.

\- Test locally before pushing.

\- Do not commit .env.

\- Do not commit vendor/.

\- Do not commit node\_modules/.

\- Keep feature branches focused on one feature.



\---



\# Deployment Checklist



\- Switch Production Database to MySQL

\- Update .env

\- Run composer install --no-dev

\- Run npm run build

\- Run php artisan optimize

\- Run php artisan migrate

\- Verify storage link

\- Test application

\- Deploy to Whogohost



\---



\# Planned Features



\- Homepage Improvements

\- Blog Module

\- News Improvements

\- Contact Form Enhancements

\- SEO Optimization

\- Performance Optimization

\- Admin Dashboard Improvements

\- Analytics Integration



\---



\# Completed Features



\- Local Development Environment

\- Git Repository Setup

\- SQLite Configuration

\- Storage Link

\- Social Media Links

\- General Cargo Page Updates



\---



Last Updated



July 2026

