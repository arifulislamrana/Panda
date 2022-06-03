# Panda
Small Scale E-Commerce

___

### Table of Contents

1. [Folder Structure](#folder-structure)
2. [Installation](#installation)
    1. [Clone](#clone)
    2. [Install Admin Panel](#install-admin-panel)
3. [Run Application](#run-application)
    1. [Admin Panel](#run-project)

___

### <a href="#folder-structure">Folder Structure</a>

   ```
  ── Panda                 # Root directory.
      ├── Front            # User Side .
      ├── dashboard        # Admin Side.
      └── README.md        # Documentation for the project.
   ```

___

### <a href="#installation">Installation</a>

#### <a href="#clone-repository">Clone Repository</a>

```bash
#Via HTTP:
https://github.com/arifulislamrana/Panda.git
#or, Via SSH:
git@github.com:arifulislamrana/Panda.git
```

___

#### <a href="#install-admin-panel">Run Site</a>

1. Navigate to `Panda` folder
   ```bash
   cd Panda
   ```
2. Install dependencies
   ```bash
   # 1. update and/or install php packages based on your system
   composer update
   # or just try to install
   composer install

   ```
3. Create & Update `.env` file
    1. ``` copy .env.example .env ```
    2. Update application name
    3. Generate app key `php artisan key:generate`
    3. Create database for this application and update database connection section


4. Create Tables and Seed with data
   ```bash
   php artisan migrate --seed
   ``````
5. Run Application
   ```bash
   php artisan serve
   ``````
